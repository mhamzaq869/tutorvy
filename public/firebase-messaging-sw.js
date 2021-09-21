// Give the service worker access to Firebase Messaging.
// Note that you can only use Firebase Messaging here. Other Firebase libraries
// are not available in the service worker.
importScripts('https://www.gstatic.com/firebasejs/8.2.5/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.2.5/firebase-messaging.js');

// Initialize the Firebase app in the service worker by passing in
// your app's Firebase config object.
// https://firebase.google.com/docs/web/setup#config-object
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
// firebase.analytics();
// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();

messaging.onBackgroundMessage((payload) => {
    console.log('[firebase-messaging-sw.js] Received background message ', payload);
    // Customize notification here
    const notificationTitle = 'Background Message Title';
    const notificationOptions = {
      body: 'Background Message body.',
      icon: '/firebase-logo.png'
    };
  
    // self.registration.showNotification(notificationTitle,
    //   notificationOptions);
  });