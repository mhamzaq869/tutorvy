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
  console.log(token)
}).catch(function(err){
  console.log('unable to get permission.'+err)
});
messaging.onMessage((payload) => {
  console.log('Message received. ', payload);
});