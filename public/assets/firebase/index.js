const firebaseConfig = {
    apiKey: "AIzaSyCIoIw5TgIOYXirhqBlsYsYJOMMNStK_KA",
    authDomain: "tutorvy-ad64f.firebaseapp.com",
    projectId: "tutorvy-ad64f",
    storageBucket: "tutorvy-ad64f.appspot.com",
    messagingSenderId: "30326081925",
    appId: "1:30326081925:web:342e89a81d7d7f396ddcec",
    measurementId: "G-DXS0PNV01R"
};
firebase.initializeApp(firebaseConfig);
firebase.analytics();
// firebase chat db object
var db = firebase.firestore();
const messaging = firebase.messaging();
messaging.usePublicVapidKey("BCUzgeYCI95gituGxynAXXezgC3kt8LobvtNRB0PwO-0iPdFYQKeMAqHJq0R-JhnxT2OVocWCgKIDTgZFaAIIu8");
// messaging.useServiceWorker('/framework/firebase-messaging-sw.js')

messaging.requestPermission().then(function() {
    return messaging.getToken();
}).then(function(token) {
    console.log(token);
    saveFcmToken(token);
}).catch(function(err) {
    console.log('unable to get permission.' + err)
});
messaging.onMessage((payload) => {
    console.log('Message received. ', payload);

    var user_id = $(".user_id").val();
    var user_role_id = $(".user_role_id").val();

    var slug = payload.data.slug;
    var type = payload.data.type;
    var pic = payload.data.pic;
    var current_user_id = payload.data.receiver_id;
    var notification_time = 330000;

    var unread_count = payload.data.unread_count;

    var body = payload.notification.body;
    var title = payload.notification.title;

    if (user_id == current_user_id && user_role_id == 1) {
        $('.show_notification_counts').text(unread_count);

        var url = window.location.href;
        var text = "admin/tutor";

        if (url.indexOf(text) != -1) {

            var url = slug.replace(/[^0-9]/gi, '');
            var booking_id = parseInt(url, 10);
            console.log(booking_id);

            get_assessment_detail();

        }


        // doc verification
        if (type == "doc_verification") {
            let redirect = body + '<br> ' + `<a href="` + slug + `" class="notification_link"> click here to view.</a>`;
            toastr.success(title + '<br>' + redirect, {
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: notification_time,
            });
        }

        if (type == "booking_confirmed") {
            let redirect = body + '<br> ' + `<a href="` + slug + `" class="notification_link"> click here to view.</a>`;
            toastr.success(title + '<br>' + redirect, {
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: notification_time,
            });
        }

        if (type == "class_booking_approved") {
            let redirect = body + '<br> ' + `<a href="` + slug + `" class="notification_link"> click here to view.</a>`;
            toastr.success(title + '<br>' + redirect, {
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: notification_time,
            });
        }

        if (type == "class_booking") {
            toastr.success(title + '<br>' + body, {
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: notification_time,
            });
        }

        if (type == "tutor_submit_assessment") {
            toastr.success(title + '<br>' + body, {
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: notification_time,
            });
        }


        let img = '';
        var current_url = window.location.pathname;
        var img_url = current_url + '/assets/images/ico/Square-white.jpg';

        if (pic != null) {
            img = `<img class="profile-img mt-2 p-0 w-100" src="` + current_url + '/' + pic + `" alt="layer">`;
        } else {
            img = `<img class="profile-img mt-2 p-0 w-100" src="` + img_url + `" alt="layer">`;
        }
        var html = ` <li>
            <a href="` + slug + `" class="bgm">
                <div class="row">
                    <div class="col-md-2 text-center"> ` + img + ` </div>
                    <div class="col-md-10">
                        <div class="head-1-noti">
                            <span class="notification-text6">
                                <strong>` + title + ` </strong> 
                                ` + body + `
                            </span>
                        </div>
                        <span class="notification-time">
                        </span>
                    </div>
                </div>
            </a>
        </li>`;

        $('.show_all_notifications').prepend(html);

    }

    if (user_id == current_user_id && user_role_id == 2) {
        $('.show_notification_counts').text(unread_count);
        let redirect = body + '<br> ' + `<a href="` + slug + `" class="notification_link"> click here to view.</a>`;

        if (type == "tutor_profile_verfication") {
            toastr.success(title + '<br>' + redirect, {
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: notification_time,
            });
        }

        if (type == "booking_confirmed") {
            toastr.success(title + '<br>' + redirect, {
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: notification_time,
            });
            var url = window.location.href;
            var text = "tutor/booking";

            if (url.indexOf(text) != -1) {

                var url = slug.replace(/[^0-9]/gi, '');
                var booking_id = parseInt(url, 10);
                var html = ``;
                for (var i = 0; i < pending_booking.length; i++) {
                    if (booking_id == pending_booking[i].id) {
                        let first_name = '';
                        let last_name = '';
                        let subject = '';
                        if (pending_booking[i].user != null && pending_booking[i].user != [] && pending_booking[i].user != "") {
                            first_name = pending_booking[i].user.first_name != null ? pending_booking[i].user.first_name : '-';
                            first_name = pending_booking[i].user.last_name != null ? pending_booking[i].user.last_name : '-';
                        } else {
                            username = '-';
                        }
                        if (pending_booking[i].subject != null && pending_booking[i].subject != [] && pending_booking[i].subject != "") {
                            subject = pending_booking[i].subject.name != null ? pending_booking[i].subject.name : '-';
                        } else {
                            subject = '-';
                        }

                        var topic = pending_booking[i].topic != null ? pending_booking[i].topic : '-';
                        var duration = pending_booking[i].duration != null ? pending_booking[i].duration + ' Hour(s)' : '-';
                        var price = pending_booking[i].price != null ? '$' + pending_booking[i].price : '-';

                        html += `
                            <tr>
                                <td class="pt-4"> ` + first_name + ' ' + last_name + ` </td>
                                <td class="pt-4"> ` + subject + ` </td>
                                <td class="pt-4">  ` + topic + ` </td>
                                <td class="pt-4"> ` + pending_booking[i].class_time + ` </td>
                                <td class="pt-4"> ` + duration + ` </td>
                                <td class="pt-4">  ` + price + ` </td>
                                <td class="pt-4">
                                    <span class="bg-color-apporve1"> Approved </span>
                                </td>        
                                <td style="text-align: center;">
                                    <a href="` + slug + `">
                                        <button class="schedule-btn" type="button"> View details </button>
                                    </a>
                                </td>
                            </tr>
                        `;
                    }
                }

                let pending_counts = $('.pending_counts').text();
                let confirmed_counts = $('.confirmed_counts').text();

                $('#pending_counts').text(parseInt(pending_counts) - 1);
                $('#confirmed_counts').text(parseInt(confirmed_counts) + 1);

                $("#pending_" + booking_id).remove();
                $("#confirm_booking_table").append(html);
                $("#nav-profile-tab").click();

            }
        }

        if (type == "tutor_assessment") {
            toastr.success(title + '<br>' + body, {
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: notification_time,
            });
        }

        if (type == "class_booking") {
            let redirect = body + '<br> ' + `<a href="` + slug + `" class="notification_link"> click here to view.</a>`;
            toastr.success(title + '<br>' + redirect, {
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: notification_time,
            });

            var url = window.location.href;
            var text = "/tutor/booking";

            if (url.indexOf(text) != -1) {

                var url = slug.replace(/[^0-9]/gi, '');
                var booking_id = parseInt(url, 10);

                get_booking_detail(booking_id, slug);
            }
        }

        let img = '';
        var current_url = window.location.pathname;
        var img_url = current_url + '/assets/images/ico/Square-white.jpg';

        if (pic != null) {
            img = `<img class="profile-img mt-2 p-0 w-100" src="` + current_url + '/' + pic + `" alt="layer">`;
        } else {
            img = `<img class="profile-img mt-2 p-0 w-100" src="` + img_url + `" alt="layer">`;
        }
        var html = `
         <li>
         <a href="` + slug + `" class="bgm" >
            <div class="row">
              <div class="col-md-2 text-center">
                  ` + img + `
              </div>
              <div class="col-md-10">
                  <div class="head-1-noti">
                      <span class="notification-text6">
                          <strong>` + title + ` </strong> 
                          ` + body + `
                      </span>
                  </div>
                  <span class="notification-time">
                   </span>
              </div>
          </div>
          </a>
        </li>`;

        $('.show_all_notifications').prepend(html);
    }

    if (user_id == current_user_id && user_role_id == 3) {
        $('.show_notification_counts').text(unread_count);

        if (type == "class_booking_approved") {
            let redirect = body + '<br> ' + `<a href="` + slug + `" class="notification_link"> click here to view.</a>`;
            toastr.success(title + '<br>' + redirect, {
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: notification_time,
            });

            var url = window.location.href;
            var text = "/student/bookings";

            if (url.indexOf(text) != -1) {

                var url = slug.replace(/[^0-9]/gi, '');
                var getid = parseInt(url, 10);
                var pay_now_btn = `
                    <button onclick="pay_now(` + getid + `)" type="button" role="button" class="cencel-btn mr-2"> Pay Now </button>
                    <a href="` + slug + `" class="schedule-btn"> View details </a>`;
                $('.action_button').html(pay_now_btn);
                $("#nav-contact-tab").click();
            }
        }

        if (type == "class_booking") {
            toastr.success(title + '<br>' + body, {
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: notification_time,
            });
        }


        let img = '';
        var current_url = window.location.pathname;
        var img_url = current_url + '/assets/images/ico/Square-white.jpg';

        if (pic != null) {
            img = `<img class="profile-img mt-2 p-0 w-100" src="` + current_url + '/' + pic + `" alt="layer">`;
        } else {
            img = `<img class="profile-img mt-2 p-0 w-100" src="` + img_url + `" alt="layer">`;
        }
        var html = ` <li>
            <a href="` + slug + `" class="bgm">
                <div class="row">
                <div class="col-md-2 text-center">
                    ` + img + `
                </div>
                <div class="col-md-10">
                    <div class="head-1-noti">
                        <span class="notification-text6">
                            <strong>` + title + ` </strong> 
                            ` + body + `
                        </span>
                    </div>
                    <span class="notification-time">
                    </span>
                </div>
            </div>
            </a>
        </li>`;

        $('.show_all_notifications').prepend(html);


    }

});


function saveFcmToken(token) {
    var origin = window.location.origin;

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: origin + "/general/save-token",
        type: "POST",
        data: { token: token },
        dataType: 'json',
        success: function(response) {
            // console.log(response, "token")
        },
        error: function(e) {
            console.log(e)
        }
    });
}

function get_booking_detail(id, slug) {
    var origin = window.location.origin;

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: origin + "/tutor/get-booking",
        type: "POST",
        data: { id: id },
        dataType: 'json',
        success: function(response) {
            console.log(response, "response");
            let first_name = '';
            let last_name = '';
            let subject = '';
            var obj = response.booking;
            if (obj != null && obj != "" && obj != []) {

                if (obj.user != null && obj.user != [] && obj.user != "") {
                    first_name = obj.user.first_name != null ? obj.user.first_name : '-';
                    first_name = obj.user.last_name != null ? obj.user.last_name : '-';
                } else {
                    username = '-';
                }
                if (obj.subject != null && obj.subject != [] && obj.subject != "") {
                    subject = obj.subject.name != null ? obj.subject.name : '-';
                } else {
                    subject = '-';
                }

            }

            var topic = obj.topic != null ? obj.topic : '-';
            var duration = obj.duration != null ? obj.duration + ' Hour(s)' : '-';
            var price = obj.price != null ? '$' + obj.price : '-';

            var html = `
                <tr>
                    <td class="pt-4"> ` + first_name + ' ' + last_name + ` </td>
                    <td class="pt-4"> ` + subject + ` </td>
                    <td class="pt-4">  ` + topic + ` </td>
                    <td class="pt-4"> ` + obj.class_time + ` </td>
                    <td class="pt-4"> ` + duration + ` </td>
                    <td class="pt-4">  ` + price + ` </td>
                    <td class="pt-4">
                        <span class="bg-color-apporve1"> Approved </span>
                    </td>        
                    <td style="text-align: center;">
                        <a href="` + slug + `">
                            <button class="schedule-btn" type="button"> View details </button>
                        </a>
                    </td>
                </tr>
            `;

            let all_counts = $('.all_counts').text();
            let pending_counts = $('.pending_counts').text();

            if (all_counts == 0) {
                $('#all_counts').text(1);
            } else {
                $('#all_counts').text(parseInt(all_counts) + 1);
            }

            $('#pending_counts').text(parseInt(pending_counts) + 1);

            $("#all_pending_table").append(html);
            $("#all_booking_table").append(html);


        },
        error: function(e) {
            console.log(e)
        }
    });
}


function get_assessment_detail() {
    var origin = window.location.origin;

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: origin + "/admin/tutor/get-assessment",
        type: "GET",
        dataType: 'json',
        success: function(response) {
            console.log(response);
            var obj = response.tutor_assessment;

            var html = ``;

            for (var i = 0; i < obj.length; i++) {

                var assessment_submit = `<span class="statusTag doc_sub_status">  Assessment Sumitted </span>`;
                var doc_not_submit = ` <span class="statusTag doc_not_sub_status">  Document not Submitted </span>`;
                var doc_submit = `<span class="statusTag doc_sub_status">  Document Sumitted </span>`;
                var assessment_id = obj[i].assessment_id != null ? obj[i].assessment_id : '';

                var status = (obj[i].assessment_status == 0 && obj[i].status == 2) ? assessment_submit : (obj[i].status == 0) ? doc_not_submit : doc_submit;

                html += `
                <tr>
                    <td class="pt-4">` + obj[i].first_name + ` ` + obj[i].last_name + ` </td>
                    <td class="pt-4"> ` + obj[i].email + ` </td>
                    <td class="pt-4"> ` + obj[i].subject_name + ` </td>
                    <td class="pt-4"> ` + obj[i].country + ` </td>                                                            
                    <td class="pt-4">---</td>
                    <td class="pt-4"> ` + obj[i].hourly_rate + ` </td>
                    <td class="pt-4"> ` + status + ` </td>
                    <td class="pt-3 text-right">
                        <a href="` + origin + `/admin/tutor/request/` + obj[i].id + `/` + assessment_id + `` + `" class="cencel-btn btn"> View </a>
                    </td>
                    <td class="pt-3 text-right">
                        <button class="schedule-btn"  data-toggle="modal"
                            data-target="#exampleModalCenter">Assign</button>
                    </td>
                </tr>  `;
            }

            $("#tutor_assessment_table").html(html);

        },
        error: function(e) {
            console.log(e);
            toastr.error('Something went wrong', {
                position: 'top-end',
                icon: 'error',
                showConfirmButton: false,
                timer: 2000,
            });
        }
    });
}