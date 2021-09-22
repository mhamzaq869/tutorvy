const firebaseConfig = {
  apiKey: "AIzaSyBXaJPa95dTLBz36lmoDgVnR80_EQVVwVA",
  authDomain: "live-tech-cms.firebaseapp.com",
  databaseURL: "https://live-tech-cms-default-rtdb.firebaseio.com",
  projectId: "live-tech-cms",
  storageBucket: "live-tech-cms.appspot.com",
  messagingSenderId: "16545791116",
  appId: "1:16545791116:web:e55cbea48308f9b1828fa9",
  measurementId: "G-H3C052Z2LH"
};

firebase.initializeApp(firebaseConfig);
firebase.analytics();


const messaging = firebase.messaging();
messaging.usePublicVapidKey("BK8CHpqRSc6qjQDVSc6eQZCOganeqlTqBZa4kpAWOIHhYJFQPdNqe8rcngMWITo1UkHTcq9AQBva7Zuf8GRY0Hw");
        
messaging.requestPermission().then(function(){
  return messaging.getToken();
}).then(function(token){
  $('#fcm_token').val(token);

  var check_value = $(".wrapper").data('id');
  console.log(token);
  if(check_value == 0) {
    saveFcmToken(token);
  } 

}).catch(function(err){
  console.log('unable to get permission.'+err)
});


messaging.onMessage((payload) => {
  console.log('Message received. ', payload);
  
});




// save fcm token
function saveFcmToken(token) {
  var origin = window.location.origin;

  $.ajax({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: origin + "/tutor/save-token",
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