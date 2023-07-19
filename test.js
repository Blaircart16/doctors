import firebase from 'firebase/firestore';

const firebaseConfig = {
  apiKey: "AIzaSyDIIUClw731TnLo1JLVZi_Yxw59l11g3b0",
  authDomain: "care-e9611.firebaseapp.com",
  projectId: "care-e9611",
  storageBucket: "care-e9611.appspot.com",
  messagingSenderId: "840165776707",
  appId: "1:840165776707:web:35f21e288d091f662fe3f6",
  measurementId: "G-VSLVCSQBKF",
  databaseURL: "https://care-e9611.firebaseio.com"
};

firebase.initializeApp(firebaseConfig);

const db = firebase.firestore();

const messagesCollection = db.collection('messages');

function sendMessage(senderId, receiverId, content) {
  const message = {
    senderId: senderId,
    receiverId: receiverId,
    content: content
  };

  messagesCollection.add(message);
}

function listenForNewMessages() {
  messagesCollection.onSnapshot(function(snapshot) {
    snapshot.docChanges().forEach(function(change) {
      if (change.type === 'added') {
        const message = change.doc.data();
        console.log(message);
      }
    });
  });
}

listenForNewMessages();

const sendButton = document.getElementById('send-button');
sendButton.addEventListener('click', function(e) {
  e.preventDefault();

  const senderId = 1;
  const receiverId = 2;
  const content = document.getElementById('message-input').value;

  sendMessage(senderId, receiverId, content);
});
