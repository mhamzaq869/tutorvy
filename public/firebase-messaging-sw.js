// Give the service worker access to Firebase Messaging.
// Note that you can only use Firebase Messaging here. Other Firebase libraries
// are not available in the service worker.
importScripts('https://www.gstatic.com/firebasejs/9.0.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/9.0.2/firebase-messaging.js');
// importScripts('https://www.gstatic.com/firebasejs/9.0.2/firebase-messaging/sw.js');

// Initialize the Firebase app in the service worker by passing in
// your app's Firebase config object.
// https://firebase.google.com/docs/web/setup#config-object
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

const messaging = getMessaging();
onBackgroundMessage(messaging, (payload) => {
  console.log('[firebase-messaging-sw.js] Received background message ', payload);
  // Customize notification here
  const notificationTitle = 'Background Message Title';
  const notificationOptions = {
    body: 'Background Message body.',
    icon: '/firebase-logo.png'
  };

  self.registration.showNotification(notificationTitle,
    notificationOptions);
});

// const app = initializeApp(firebaseConfig);
// // firebase.analytics();
// // Retrieve an instance of Firebase Messaging so that it can handle background
// // messages.
// const messaging = firebase.messaging();

// messaging.onBackgroundMessage((payload) => {
//     console.log('[firebase-messaging-sw.js] Received background message ', payload);
//     // Customize notification here
//     const notificationTitle = 'Background Message Title';
//     const notificationOptions = {
//       body: 'Background Message body.',
//       icon: '/firebase-logo.png'
//     };
  
//     // self.registration.showNotification(notificationTitle,
//     //   notificationOptions);
//   });