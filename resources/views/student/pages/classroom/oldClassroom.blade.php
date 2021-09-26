<script>
    var connection = new RTCMultiConnection();
var roomid = '{{$class->classroom_id}}';
var fullName = '{{$class->booking->user->first_name}} {{$class->booking->user->last_name}}';
    var conversationPanel = document.getElementById('conversation-panel');

var keyPressTimer;
var numberOfKeys = 0;
// connection.socketURL = '/';
connection.socketURL = 'https://rtcmulticonnection.herokuapp.com:443/';

connection.socketMessageEvent = 'canvas-dashboard-demo';
// connection.session = {
//     audio: true,
//     video: true,
//     data: true
// };
// connection.mediaConstraints = {
//     audio: true,
//     video: true,
//     data: true

// };
            connection.DetectRTC.load(function() {
                if (connection.DetectRTC.hasMicrophone === true) {
                    // enable microphone
                    connection.mediaConstraints.audio = true;
                    connection.session.audio = true;
                    // alert('attach true microphone')
                    $(".no-mk").show();
                     $("#join_now").removeAttr("disabled","disabled" );
                    $("#join_now").click(function(){
                        $(".tech_weck").removeClass("tech_weck-none");
                        $("#callModal").modal("hide");
                        joinClass();
                         /** Javascript Timer */
                         var timer = new Timer();
                                    timer.start({countdown: true, startValues: {seconds: 30}});

                                    $('#countdownExample .values').html(timer.getTimeValues().toString());

                                    timer.addEventListener('secondsUpdated', function (e) {
                                        $('#countdownExample .values').html(timer.getTimeValues().toString());
                                    });

                                    timer.addEventListener('targetAchieved', function (e) {
                                        $('#countdownExample .values').html('Class Time has Ended!!');
                                    });
                                /* Javascript Timer ENd */

                    })

                }else{
                    toastr.warning( "Audio Device is Mendatory ");
                    $(".no-mk").hide();
                }

                if (connection.DetectRTC.hasWebcam === true) {
                    // enable camera
                    connection.mediaConstraints.video = true;
                    connection.session.video = true;
                   alert('attach true camera')
                   $(".no-vc").show();

                }else{
                    // alert('attach Cam')
                    $(".no-vc").hide();
                }

                if (connection.DetectRTC.hasSpeakers === false) { // checking for "false"
                    // alert('Please attach a speaker device. You will unable to hear the incoming audios.');
                }
            });

function joinClass(){
    // keep room opened even if owner leaves
    connection.autoCloseEntireSession = true;

    // https://www.rtcmulticonnection.org/docs/maxParticipantsAllowed/
    // connection.maxParticipantsAllowed = 1000;
    // set value 2 for one-to-one connection
    connection.maxParticipantsAllowed = 2;
    connection.extra.userFullName = fullName;

    connection.checkPresence(roomid, function(isRoomExist) {
        
        connection.publicRoomIdentifier = '';
        connection.sessionid = roomid;
        // connection.isInitiator = true;
            // openCanvasDesigner();
            // $('#btn-create-room').html(initialHTML).prop('disabled', false);
    });

    // here goes canvas designer
    var designer = new CanvasDesigner();

    // you can place widget.html anywhere
    designer.widgetHtmlURL = "{{ route('whiteBoard.canvas')}}";
    designer.widgetJsURL = "{{asset('assets/js/widget.min.js').'?ver='.rand()}}"

    designer.addSyncListener(function(data) {
        connection.send(data);
    });

    designer.setSelected('pencil');

    designer.setTools({
        pencil: true,
        text: true,
        image: false,
        pdf: false,
        eraser: true,
        line: true,
        arrow: false,
        dragSingle: true,
        dragMultiple: true,
        arc: true,
        rectangle: true,
        quadratic: false,
        bezier: false,
        marker: false,
        zoom: false,
        lineWidth: false,
        colorsPicker: false,
        extraOptions: false,
        code: false,
        undo: false,
    });

    // here goes RTCMultiConnection

    connection.chunkSize = 16000;
    connection.enableFileSharing = true;

    
    
    connection.sdpConstraints.mandatory = {
        OfferToReceiveAudio: true,
        OfferToReceiveVideo: true
    };
  

    connection.onUserStatusChanged = function(event) {
        var infoBar = document.getElementById('onUserStatusChanged');
        var names = [];
        connection.getAllParticipants().forEach(function(pid) {
            names.push(getFullName(pid));
        });

        if (!names.length) {
            names = ['Only You'];
        } else {
            names = [connection.extra.userFullName || 'You'].concat(names);
        }

        infoBar.innerHTML = '<b>Active users:</b> ' + names.join(', ');
    };

    connection.onopen = function(event) {
        connection.onUserStatusChanged(event);

        if (designer.pointsLength <= 0) {
            // make sure that remote user gets all drawings synced.
            setTimeout(function() {
                connection.send('plz-sync-points');
            }, 1000);
        }

        document.getElementById('btn-chat-message').disabled = false;
        document.getElementById('btn-attach-file').style.display = 'inline-block';
        document.getElementById('btn-share-screen').style.display = 'inline-block';
    };

    connection.onclose = connection.onerror = connection.onleave = function(event) {
        console.log(event+" dsfsdfsdfsdfsdfsdfsdf");
        connection.onUserStatusChanged(event);
    };

    connection.onmessage = function(event) {
        if(event.data.showMainVideo) {
            // $('#main-video').show();
            $('#screen-viewer').css({
                top: $('#widget-container').offset().top,
                left: $('#widget-container').offset().left,
                width: $('#widget-container').width(),
                height: $('#widget-container').height()
            });
            $('#screen-viewer').show();
            return;
        }

        if(event.data.hideMainVideo) {
            // $('#main-video').hide();
            $('#screen-viewer').hide();
            return;
        }

        if(event.data.typing === true) {
            $('#key-press').show().find('span').html(event.extra.userFullName + ' is typing');
            return;
        }

        if(event.data.typing === false) {
            $('#key-press').hide().find('span').html('');
            return;
        }

        if (event.data.chatMessage) {
            appendChatMessage(event);
            return;
        }

        if (event.data.checkmark === 'received') {
            var checkmarkElement = document.getElementById(event.data.checkmark_id);
            if (checkmarkElement) {
                checkmarkElement.style.display = 'inline';
            }
            return;
        }

        if (event.data === 'plz-sync-points') {
            designer.sync();
            return;
        }

        designer.syncData(event.data);
    };

    // extra code

    connection.onstream = function(event) {
        console.log(connection+' asdasdasd')
        if (event.stream.isScreen && !event.stream.canvasStream) {
            $('#screen-viewer').get(0).srcObject = event.stream;
            $('#screen-viewer').hide();
        }
        else if (event.extra.roomOwner === true) {
            var video = document.getElementById('main-video');
            video.setAttribute('data-streamid', event.streamid);
            // video.style.display = 'none';
            if(event.type === 'local') {
                video.muted = true;
                video.volume = 0;
            }
            video.srcObject = event.stream;
            $('#main-video').show();
        } else {
            event.mediaElement.controls = false;
            var otherVideos = document.querySelector('#other-videos');
            otherVideos.appendChild(event.mediaElement);
        }
        connection.onUserStatusChanged(event);
    };

    connection.onstreamended = function(event) {
        var video = document.querySelector('video[data-streamid="' + event.streamid + '"]');
        if (!video) {
            video = document.getElementById(event.streamid);
            if (video) {
                video.parentNode.removeChild(video);
                return;
            }
        }
        if (video) {
            video.srcObject = null;
            video.style.display = 'none';
        }
    };
    $(".no-vc").click(function(){
        alert("No vc");
        var localStream = connection.attachStreams[0];
        localStream.mute('video');
    })
    $(".vc").click(function(){
        alert("Vc");
        var localStream = connection.attachStreams[0];
        localStream.unmute('video'); 
        
    })
    $(".no-mk").click(function(){
        alert("No mk");
        var localStream = connection.attachStreams[0];
        localStream.mute('audio');
    })
    $(".mk").click(function(){
        alert("mk");
        var localStream = connection.attachStreams[0];
        localStream.unmute('audio'); 
        
    })


    connection.onmute = function(e) { 
        e.mediaElement.setAttribute('poster', '//www.webrtc-experiment.com/images/muted.png'); 
    };


    

    connection.onFileEnd = function(file) {
    var html = getFileHTML(file);
    var div = progressHelper[file.uuid].div;

    if (file.userid === connection.userid) {
        div.innerHTML = '<b>You:</b><br>' + html;
        div.style.background = '#cbffcb';

        if(recentFile) {
            recentFile.userIndex++;
            var nextUserId = connection.getAllParticipants()[recentFile.userIndex];
            if(nextUserId) {
                connection.send(recentFile, nextUserId);
            }
            else {
                recentFile = null;
            }
        }
        else {
            recentFile = null;
        }
    } else {
        div.innerHTML = '<b>' + getFullName(file.userid) + ':</b><br>' + html;
    }
};

// to make sure file-saver dialog is not invoked.
connection.autoSaveToDisk = false;

var progressHelper = {};

connection.onFileProgress = function(chunk, uuid) {
    var helper = progressHelper[chunk.uuid];
    helper.progress.value = chunk.currentPosition || chunk.maxChunks || helper.progress.max;
    updateLabel(helper.progress, helper.label);
};

connection.onFileStart = function(file) {
    var div = document.createElement('div');
    div.className = 'message';

    if (file.userid === connection.userid) {
        var userFullName = file.remoteUserId;
        if(connection.peersBackup[file.remoteUserId]) {
            userFullName = connection.peersBackup[file.remoteUserId].extra.userFullName;
        }

        div.innerHTML = '<b>You (to: ' + userFullName + '):</b><br><label>0%</label> <progress></progress>';
        div.style.background = '#cbffcb';
    } else {
        div.innerHTML = '<b>' + getFullName(file.userid) + ':</b><br><label>0%</label> <progress></progress>';
    }

    div.title = file.name;
    conversationPanel.appendChild(div);
    progressHelper[file.uuid] = {
        div: div,
        progress: div.querySelector('progress'),
        label: div.querySelector('label')
    };
    progressHelper[file.uuid].progress.max = file.maxChunks;

    conversationPanel.scrollTop = conversationPanel.clientHeight;
    conversationPanel.scrollTop = conversationPanel.scrollHeight - conversationPanel.scrollTop;
};




designer.appendTo(document.getElementById('widget-container'), function() {
    // if (params.open === true || params.open === 'true') {
            // var tempStreamCanvas = document.getElementById('temp-stream-canvas');
            // var tempStream = tempStreamCanvas.captureStream();
            // tempStream.isScreen = true;
            // tempStream.streamid = tempStream.id;
            // tempStream.type = 'local';
            // connection.attachStreams.push(tempStream);
            // window.tempStream = tempStream;

            // connection.extra.roomOwner = true;
            // connection.open(roomid, function(isRoomOpened, roomid, error) {
            //     if (error) {
            //         if (error === connection.errors.ROOM_NOT_AVAILABLE) {
            //             alert('Someone already created this room. Please either join or create a separate room.');
            //             return;
            //         }
            //         alert(error);
            //     }

            //     connection.socket.on('disconnect', function() {
            //         location.reload();
            //     });
            // });
    // } else {
// connection.dontAttachStream = true; 

        connection.join(roomid, function(isRoomJoined, roomid, error) {
            console.log(connection.DetectRTC)
           
            if (error) {
                if (error === connection.errors.ROOM_NOT_AVAILABLE) {
                    alert('This room does not exist. Please either create it or wait for moderator to enter in the room.');
                    return;
                }
                if (error === connection.errors.ROOM_FULL) {
                    alert('Room is full.');
                    window.location.href = "{{route('student.classroom')}}";
                    return;
                }
                if (error === connection.errors.INVALID_PASSWORD) {
                    connection.password = prompt('Please enter room password.') || '';
                    if(!connection.password.length) {
                        alert('Invalid password.');
                        return;
                    }
// connection.dontAttachStream = true; 

                    connection.join(roomid, function(isRoomJoined, roomid, error) {
                        if(error) {
                            alert(error);
                        }
                    });
                    return;
                }
                alert(error);
            }

            connection.socket.on('disconnect', function() {
                location.reload();
            });
        });
    // }
});

  
}

function appendChatMessage(event, checkmark_id) {
    var div = document.createElement('div');

    div.className = 'message';

    if (event.data) {
        div.innerHTML = '<b>' + (event.extra.userFullName || event.userid) + ':</b><br>' + event.data.chatMessage;

        if (event.data.checkmark_id) {
            connection.send({
                checkmark: 'received',
                checkmark_id: event.data.checkmark_id
            });
        }
    } else {
        div.innerHTML = '<b>You:</b> <img class="checkmark" id="' + checkmark_id + '" title="Received" src="https://www.webrtc-experiment.com/images/checkmark.png"><br>' + event;
        div.style.background = '#cbffcb';
    }

    conversationPanel.appendChild(div);

    conversationPanel.scrollTop = conversationPanel.clientHeight;
    conversationPanel.scrollTop = conversationPanel.scrollHeight - conversationPanel.scrollTop;
}

$(document).ready(function(){
    $('#txt-chat-message').emojioneArea({
        pickerPosition: "top",
        filtersPosition: "bottom",
        tones: false,
        autocomplete: true,
        inline: true,
        hidePickerOnBlur: true,
        hideSource: false,
        events: {
            focus: function() {
                $('.emojionearea-category').unbind('click').bind('click', function() {
                    $('.emojionearea-button-close').click();
                });
            },
            keyup: function(e) {
                var chatMessage = $('.emojionearea-editor').html();
                if (!chatMessage || !chatMessage.replace(/ /g, '').length) {
                    connection.send({
                        typing: false
                    });
                }


                clearTimeout(keyPressTimer);
                numberOfKeys++;

                if (numberOfKeys % 3 === 0) {
                    connection.send({
                        typing: true
                    });
                }

                keyPressTimer = setTimeout(function() {
                    connection.send({
                        typing: false
                    });
                }, 1200);
            },
            blur: function() {
                // $('#btn-chat-message').click();
                connection.send({
                    typing: false
                });
            }
        }
    });
})


window.onkeyup = function(e) {
    var code = e.keyCode || e.which;
    if (code == 13) {
        $('#btn-chat-message').click();
    }
};

document.getElementById('btn-chat-message').onclick = function() {
    var chatMessage = $('.emojionearea-editor').html();
    $('.emojionearea-editor').html('');

    if (!chatMessage || !chatMessage.replace(/ /g, '').length) return;

    var checkmark_id = connection.userid + connection.token();

    appendChatMessage(chatMessage, checkmark_id);

    connection.send({
        chatMessage: chatMessage,
        checkmark_id: checkmark_id
    });

    connection.send({
        typing: false
    });
};

var recentFile;
document.getElementById('btn-attach-file').onclick = function() {
    var file = new FileSelector();
    file.selectSingleFile(function(file) {
        recentFile = file;

        if(connection.getAllParticipants().length >= 1) {
            recentFile.userIndex = 0;
            connection.send(file, connection.getAllParticipants()[recentFile.userIndex]);
        }
    });
};

function getFileHTML(file) {
    var url = file.url || URL.createObjectURL(file);
    var attachment = '<a href="' + url + '" target="_blank" download="' + file.name + '">Download: <b>' + file.name + '</b></a>';
    if (file.name.match(/\.jpg|\.png|\.jpeg|\.gif/gi)) {
        attachment += '<br><img crossOrigin="anonymous" src="' + url + '">';
    } else if (file.name.match(/\.wav|\.mp3/gi)) {
        attachment += '<br><audio src="' + url + '" controls></audio>';
    } else if (file.name.match(/\.pdf|\.js|\.txt|\.sh/gi)) {
        attachment += '<iframe class="inline-iframe" src="' + url + '"></iframe></a>';
    }
    return attachment;
}

function getFullName(userid) {
    var _userFullName = userid;
    if (connection.peers[userid] && connection.peers[userid].extra.userFullName) {
        _userFullName = connection.peers[userid].extra.userFullName;
    }
    return _userFullName;
}


function updateLabel(progress, label) {
    if (progress.position == -1) return;
    var position = +progress.position.toFixed(2).split('.')[1] || 100;
    label.innerHTML = position + '%';
}

function addStreamStopListener(stream, callback) {
    stream.addEventListener('ended', function() {
        callback();
        callback = function() {};
    }, false);

    stream.addEventListener('inactive', function() {
        callback();
        callback = function() {};
    }, false);

    stream.getTracks().forEach(function(track) {
        track.addEventListener('ended', function() {
            callback();
            callback = function() {};
        }, false);

        track.addEventListener('inactive', function() {
            callback();
            callback = function() {};
        }, false);
    });
}

function replaceTrack(videoTrack, screenTrackId) {
    if (!videoTrack) return;
    if (videoTrack.readyState === 'ended') {
        alert('Can not replace an "ended" track. track.readyState: ' + videoTrack.readyState);
        return;
    }
    connection.getAllParticipants().forEach(function(pid) {
        var peer = connection.peers[pid].peer;
        if (!peer.getSenders) return;
        var trackToReplace = videoTrack;
        peer.getSenders().forEach(function(sender) {
            if (!sender || !sender.track) return;
            if(screenTrackId) {
                if(trackToReplace && sender.track.id === screenTrackId) {
                    sender.replaceTrack(trackToReplace);
                    trackToReplace = null;
                }
                return;
            }

            if(sender.track.id !== tempStream.getTracks()[0].id) return;
            if (sender.track.kind === 'video' && trackToReplace) {
                sender.replaceTrack(trackToReplace);
                trackToReplace = null;
            }
        });
    });
}

function replaceScreenTrack(stream) {
    stream.isScreen = true;
    stream.streamid = stream.id;
    stream.type = 'local';

    // connection.attachStreams.push(stream);
    connection.onstream({
        stream: stream,
        type: 'local',
        streamid: stream.id,
        // mediaElement: video
    });

    var screenTrackId = stream.getTracks()[0].id;
    addStreamStopListener(stream, function() {
        connection.send({
            hideMainVideo: true
        });

        // $('#main-video').hide();
        $('#screen-viewer').hide();
        $('#btn-share-screen').show();
        replaceTrack(tempStream.getTracks()[0], screenTrackId);
    });

    stream.getTracks().forEach(function(track) {
        if(track.kind === 'video' && track.readyState === 'live') {
            replaceTrack(track);
        }
    });

    connection.send({
        showMainVideo: true
    });

    // $('#main-video').show();
    $('#screen-viewer').css({
            top: $('#widget-container').offset().top,
            left: $('#widget-container').offset().left,
            width: $('#widget-container').width(),
            height: $('#widget-container').height()
        });
    $('#screen-viewer').show();
}

$('#btn-share-screen').click(function() {
    if(!window.tempStream) {
        alert('Screen sharing is not enabled.');
        return;
    }

    $('#btn-share-screen').hide();

    if(navigator.mediaDevices.getDisplayMedia) {
        navigator.mediaDevices.getDisplayMedia(screen_constraints).then(stream => {
            replaceScreenTrack(stream);
        }, error => {
            alert('Please make sure to use Edge 17 or higher.');
        });
    }
    else if(navigator.getDisplayMedia) {
        navigator.getDisplayMedia(screen_constraints).then(stream => {
            replaceScreenTrack(stream);
        }, error => {
            alert('Please make sure to use Edge 17 or higher.');
        });
    }
    else {
        alert('getDisplayMedia API is not available in this browser.');
    }
});
</script>