
   <script src="https://rtcmulticonnection.herokuapp.com/dist/RTCMultiConnection.min.js"></script>
  <script src="https://rtcmulticonnection.herokuapp.com/socket.io/socket.io.js"></script>
  <script src="https://rtcmulticonnection.herokuapp.com/node_modules/fbr/FileBufferReader.js"></script>
 <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{csrf_token()}}"
            }
        });
    </script>
<script type="text/javascript">
    let tt_id;

    // Channel to get active users status and leaving users status

    // window.Echo.join('chat')
    // .here(activeUsers => {
    //     this.activeUsers = activeUsers
    // })
    // .joining(user => {
    //     console.log('joining'+user.first_name)
    //     $('#activeDot_'+user.id).removeClass('offlice');

    //     this.activeUsers.push(user)
    // })
    // .leaving(user => {
    //     console.log('leaving'+user)
    //     $('#activeDot_'+user.id).addClass('offlice');

    //     this.activeUsers = this.activeUsers.filter(u => u.id != user.id);
    // })



    // Channel to send & listen message

    Echo.join(`App.User.{{Auth::user()->id}}`).here( users => {

    })
    .listen('NewMessage', (event) => {
        console.log(event)
        // if (this.chatWith && event.message.sender_id == this.chatWith.id) {
            // User A , B , C -- if B send to A # B -> A
            // it will appear that C and B send the same message to A # B -> A & C -> A
            // this if statement avoid this # only B -> A
            if("{{Auth::user()->id}}" == event.message.sender_id){
                let msg = `<div class="col-md-12">
                                <div class="sender">
                                    <small>From Smith</small>
                                    <p class="senderText mb-0">`+event.message.content+` </p>
                                    <small class="dull">1min ago</small>
                                    <a href="#" class="textMenu"><i class="fa fa-ellipsis-h"></i></a>
                                </div>
                            </div>`;

                $('#chatArea').append(msg);
            }else{
                let msg = `<div class="col-md-12">
                                <div class="col-md-12 ">
                                    <div class="reciever">
                                        <small>From Smith</small>
                                        <p class="senderText mb-0">`+event.message.content+`</p>
                                        <small class="recDull">1min ago</small>
                                        <a href="#" class="textMenu2"><i class="fa fa-ellipsis-h"></i></a>
                                    </div>
                                </div>
                            </div>    `;
                $('#chatArea').append(msg);

            }
            incrementUnseenMessagesCount(event.message.sender_id)

        // }
                // this.incrementUnseenMessagesCount(event.message.sender_id)
                // this.fireNotification()
     }).listenForWhisper('typing', user => {

        this.typingUser = user;
        if(this.typingUser){
            $('#typingUser').html(this.typingUser + ' is typing...')
        }else{
            $('#typingUser').html('')
        }

        setTimeout(() => {
            this.typingUser =  null;

        }, 1500);
    })

    function sendTypingEvent(){
        if($('#msg').val() != ''){
            Echo.join(`App.User.`+tt_id).whisper('typing', '{{Auth::user()->first_name}} {{Auth::user()->last_name}}');
        }else{
            Echo.join(`App.User.`+tt_id).whisper('typing', '');
        }
    }

    $( '#chat_form' ).on( 'submit', function(e) {

        event.preventDefault();

        let msg = $("input[id=msg]").val();
        let receiver = tt_id;
        // let _token   = $('meta[name="csrf_token"]').attr('content');

        $.ajax({
            url: "{{route('store.text')}}",
            type:"POST",
            data:{
                msg:msg,
                user:receiver
            },
            success:function(response){
            // console.log(response);
            if(response.status == 200) {

                $("#msg").val('');
                sendTypingEvent()

            }
            },
        });
    });

    function selectUser(id){
        tt_id = id;
        let url = "{{route('user.chat', ':id')}}";
        url = url.replace(':id', id);

        $.ajax({
            url: url,
            type:"get",

            success:function(response){
                $auth = "{{Auth::user()->id}}";
                $('#chatArea').html('');
                for(let i = 0 ; i<response.length;i++){
                    if("{{Auth::user()->id}}" == response[i].sender_id){

                        let msg = `<div class="col-md-12">
                                        <div class="sender">
                                            <small>From Smith</small>
                                            <p class="senderText mb-0">`+response[i].content+` </p>
                                            <small class="dull">1min ago</small>
                                            <a href="#" class="textMenu"><i class="fa fa-ellipsis-h"></i></a>
                                        </div>
                                    </div>`;

                        $('#chatArea').append(msg);

                    }else{

                        let msg = `<div class="col-md-12">
                                        <div class="col-md-12 ">
                                            <div class="reciever">
                                                <small>From Smith</small>
                                                <p class="senderText mb-0">`+response[i].content+`</p>
                                                <small class="recDull">1min ago</small>
                                                <a href="#" class="textMenu2"><i class="fa fa-ellipsis-h"></i></a>
                                            </div>
                                        </div>
                                    </div>    `;
                        $('#chatArea').append(msg);

                    }

                }
            },
        });

    }

    function incrementUnseenMessagesCount(sender_id){



    }

</script>
