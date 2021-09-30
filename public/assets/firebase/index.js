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

    if (user_id == current_user_id &&  user_role_id == 1 ) {
        $('.show_notification_counts').text(unread_count);

        // doc verification
        if(type == "doc_verification") {
            let redirect = body + '<br> '+  `<a href="`+slug+`" class="notification_link"> click here to view.</a>`;
            toastr.success(title + '<br>' + redirect, {
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: notification_time,
            });
        }

        if (type == "booking_confirmed") {
            let redirect = body + '<br> '+  `<a href="`+slug+`" class="notification_link"> click here to view.</a>`;
            toastr.success(title + '<br>' + redirect, {
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer:notification_time,
            });
        }

        let img = '';

        if(pic != null){
            img = `<img class="avatar mt-2" src="{{asset('`+pic+`')}}" alt="layer">`;
        }
        else{
            img = `<img class="avatar mt-2" src="{{asset('assets/images/ico/Square-white.jpg') }}" alt="layer">`;
        }
        var html = `
         <li>
         <a href="`+slug+`">
            <div class="row">
              <div class="col-md-2 text-center">
                  `+img+`
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

    if (user_id == current_user_id && user_role_id == 2) {
        $('.show_notification_counts').text(unread_count);
        let redirect = body + '<br> '+  `<a href="`+slug+`" class="notification_link"> click here to view.</a>`;
        
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
                timer:notification_time,
            });
        }

        if (type == "tutor_assessment") {
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

        if (type == "class_booking") {
            let redirect = body + '<br> '+  `<a href="`+slug+`" class="notification_link"> click here to view.</a>`;
            toastr.success(title + '<br>' + redirect, {
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: notification_time,
            });
        }

        let img = '';

        if(pic != null){
            img = `<img class="avatar mt-2" src="{{asset('`+pic+`')}}" alt="layer">`;
        }
        else{
            img = `<img class="avatar mt-2" src="{{asset('assets/images/ico/Square-white.jpg') }}" alt="layer">`;
        }
        var html = `
         <li>
         <a href="`+slug+`">
            <div class="row">
              <div class="col-md-2 text-center">
                  `+img+`
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
            let redirect =body + '<br> '+  `<a href="`+slug+`" class="notification_link"> click here to view.</a>`;
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


        let img = '';

        if(pic != null){
            img = `<img class="avatar mt-2" src="{{asset('`+pic+`')}}" alt="layer">`;
        }
        else{
            img = `<img class="avatar mt-2" src="{{asset('assets/images/ico/Square-white.jpg') }}" alt="layer">`;
        }
        var html = `
         <li>
         <a href="`+slug+`">
            <div class="row">
              <div class="col-md-2 text-center">
                  `+img+`
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
            console.log(response, "token")
        },
        error: function(e) {
            console.log(e)
        }
    });
}