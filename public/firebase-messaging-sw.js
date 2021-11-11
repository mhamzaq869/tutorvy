// Give the service worker access to Firebase Messaging.
// Note that you can only use Firebase Messaging here. Other Firebase libraries
// are not available in the service worker.
importScripts('https://www.gstatic.com/firebasejs/8.2.5/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.2.5/firebase-messaging.js');
// Initialize the Firebase app in the service worker by passing in
// your app's Firebase config object.
// https://firebase.google.com/docs/web/setup#config-object
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