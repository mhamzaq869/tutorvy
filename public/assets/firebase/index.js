import { initializeApp } from 'https://www.gstatic.com/firebasejs/9.0.2/firebase-app.js';
import { getMessaging, getToken, onMessage  } from 'https://www.gstatic.com/firebasejs/9.0.2/firebase-messaging.js';

const firebaseConfig = {
  apiKey: "AIzaSyANnRCERSRDsQKB1tTSbPsV0y7JkAbod-0",
  authDomain: "todaylecture.firebaseapp.com",
  databaseURL: "https://todaylecture.firebaseio.com",
  projectId: "todaylecture",
  storageBucket: "todaylecture.appspot.com",
  messagingSenderId: "229770008752",
  appId: "1:229770008752:web:2df73a2333da1d73b4c375",
  measurementId: "G-89WMDYHMG6"
};

const app = initializeApp(firebaseConfig);

// Get registration token. Initially this makes a network call, once retrieved
// subsequent calls to getToken will return from cache.
const messaging = getMessaging();
getToken(messaging, { vapidKey: 'BLVqHTURHbHlM3aUGrU5qhW6GwwWsES9n_4An4W9aRTeW67sJPOg6SGRmZ7EvXVIXQMVqRLwHazcpIRb9Qg5x-Y' }).then((currentToken) => {
  if (currentToken) {
    // Send the token to your server and update the UI if necessary
    // ...
    var check_value = $(".token_wrapper").data('id');
    if(check_value == 0) {
      saveFcmToken(currentToken);
    } 
    console.log(currentToken , "currentToken");
  } else {
    // Show permission request UI
    console.log('No registration token available. Request permission to generate one.');
    // ...
  }
}).catch((err) => {
  console.log('An error occurred while retrieving token. ', err);
  // ...
});

const messagings = getMessaging();
onMessage(messagings, (payload) => {
  console.log('Message received. ', payload);
  // ...
});

// firebase.initializeApp(firebaseConfig);
// firebase.analytics();


// const messaging = firebase.messaging();
// messaging.usePublicVapidKey("BK8CHpqRSc6qjQDVSc6eQZCOganeqlTqBZa4kpAWOIHhYJFQPdNqe8rcngMWITo1UkHTcq9AQBva7Zuf8GRY0Hw");
// // messaging.useServiceWorker('/framework/firebase-messaging-sw.js')
        
// messaging.requestPermission().then(function(){
//   return messaging.getToken();
// }).then(function(token){
//   $('#fcm_token').val(token)
//   console.log(token)
// }).catch(function(err){
//   console.log('unable to get permission.'+err)
// });

// messaging.onMessage((payload) => {
//   console.log('Message received. ', payload);
//   // ...
// });
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
