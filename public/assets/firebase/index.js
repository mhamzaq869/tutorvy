import { initializeApp } from "https://www.gstatic.com/firebasejs/9.0.2/firebase-app.js";
import { getMessaging, getToken , onMessage } from "https://www.gstatic.com/firebasejs/9.0.2/firebase-messaging.js";
// import { getMessaging   } from "https://www.gstatic.com/firebasejs/9.0.2/firebase-messaging-sw.js";

const firebaseApp = initializeApp({
    apiKey: "AIzaSyANnRCERSRDsQKB1tTSbPsV0y7JkAbod-0",
    authDomain: "todaylecture.firebaseapp.com",
    databaseURL: "https://todaylecture.firebaseio.com",
    projectId: "todaylecture",
    storageBucket: "todaylecture.appspot.com",
    messagingSenderId: "229770008752",
    appId: "1:229770008752:web:2df73a2333da1d73b4c375",
    measurementId: "G-89WMDYHMG6"
});

var key = 'BLVqHTURHbHlM3aUGrU5qhW6GwwWsES9n_4An4W9aRTeW67sJPOg6SGRmZ7EvXVIXQMVqRLwHazcpIRb9Qg5x-Y';

const messaging = getMessaging(firebaseApp);

getToken(messaging, { vapidKey: 'BLVqHTURHbHlM3aUGrU5qhW6GwwWsES9n_4An4W9aRTeW67sJPOg6SGRmZ7EvXVIXQMVqRLwHazcpIRb9Qg5x-Y' }).then((currentToken) => {
  if (currentToken) {
    // Send the token to your server and update the UI if necessary
    // ...
  } else {
    // Show permission request UI
    console.log('No registration token available. Request permission to generate one.');
    // ...
  }
}).catch((err) => {
  console.log('An error occurred while retrieving token. ', err);
  // ...
});