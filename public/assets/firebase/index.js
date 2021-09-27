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

messaging.requestPermission().then(function(){
  return messaging.getToken();
}).then(function(token){
  console.log(token);
  saveFcmToken(token);
}).catch(function(err){
  console.log('unable to get permission.'+err)
});
messaging.onMessage((payload) => {
  console.log('Message received. ', payload);

  var tutor_role_id = $("#tutor_role_id").val();

  var btn_class = payload.data.btn_class;
  var icon = payload.data.icon;
  var slug = payload.data.slug;
  var type = payload.data.type;
  var unread_count = payload.data.unread_count;

  var body = payload.notification.body;
  var title = payload.notification.title;

  if(type == "class_book") {

    toastr.success(title + '<br>' +  body,{
        position: 'top-end',
        icon: 'success',
        showConfirmButton: false,
        timer: 2500
    });

  }else if(type == "tutor_profile_verfication") {

    toastr.success(title + '<br>' +  body,{
        position: 'top-end',
        icon: 'success',
        showConfirmButton: false,
        timer: 2500
    });
  }else if(type == "tutor_assessment") {
    
    toastr.success(title + '<br>' +  body,{
        position: 'top-end',
        icon: 'success',
        showConfirmButton: false,
        timer: 2500
    });
  }else if(type == "class_booking") {
    
    toastr.success(title + '<br>' +  body,{
        position: 'top-end',
        icon: 'success',
        showConfirmButton: false,
        timer: 2500
    });
  }else if(type == "doc_verification") {
    
    toastr.success(title + '<br>' +  body,{
        position: 'top-end',
        icon: 'success',
        showConfirmButton: false,
        timer: 2500
    });
  }else if(type == "user_logout") {
    
    toastr.success(title + '<br>' +  body,{
        position: 'top-end',
        icon: 'success',
        showConfirmButton: false,
        timer: 2500
    });
  }else if(type == "tutor_submit_assessment") {
    
    toastr.success(title + '<br>' +  body,{
        position: 'top-end',
        icon: 'success',
        showConfirmButton: false,
        timer: 2500
    });
  }

  $('.tutor_notification_counts').text(unread_count);

    var html = `
      <div class="row">
        <div class="col-md-1">
            <img class="avatar mt-2" src="{{ asset('/admin/assets/img/notifiaction/layer.png')}}"
                alt="layer">
        </div>
        <div class="col-md-9">
            <div class="head-1-noti">
                <span class="notification-text6">
                    <strong>`+title+` 1231 </strong> <br>
                    `+body+`
                </span>
            </div>
            <span class="notification-time">
            </span>
        </div>
        <div class="col-md-1">
            <img class="dot-image" src="{{ asset('/admin/assets/img/ico/3dot.png')}}"
                alt="dot-ico">
        </div>
    </div>`;

    $('.show_all_notifications').prepend(html);



  
});


function saveFcmToken(token) {
  var origin = window.location.origin;

  $.ajax({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: origin + "/general/save-token",
      type:"POST",
      data:{token:token},
      dataType: 'json',
      success:function(response){
        console.log(response , "token")
      },
      error:function(e) {
          console.log(e)
      }
  });
}

