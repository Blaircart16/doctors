@extends('layouts.app')
@section('contents')
<div id="chat-container">
    <div id="messages-container">   
    </div>
    <div id="chat-form">
      <input type="text" id="message-input" placeholder="Type your message"/>
      <button id="send-button" >Send</button>
    </div>
  </div>
@endsection

@push('scripts')
<script>
    // Initialize Firebase
  var firebaseConfig = {
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

  var db = firebase.firestore();

  // Get the chat container and form elements
  var chatContainer = document.getElementById('chat-container');
  var messagesContainer = document.getElementById('messages-container');
  var chatForm = document.getElementById('chat-form');
  var messageInput = document.getElementById('message-input');
  var sendButton = document.getElementById('send-button');

  // Listen for button click event
  sendButton.addEventListener('click', function(e) {
    e.preventDefault();
    console.log('Button clicked, message is:', message);

    var message = messageInput.value.trim();
    if (message !== '') {
      // Save the message to Firestore
      db.collection('chats').add({
        content: message,
        timestamp: firebase.firestore.FieldValue.serverTimestamp()
      })

      .then(function() {
        // Clear the input field
        messageInput.value = '';
      })
      .catch(function(error) {
        console.error('Error sending message:', error);
      });
    }

  });

  // Real-time listener for new messages
  db.collection('chats')
    .orderBy('timestamp')
    .onSnapshot(function(snapshot) {
      snapshot.docChanges().forEach(function(change) {
        if (change.type === 'added') {
          var message = change.doc.data().content;
          var messageElement = document.createElement('p');
          console.log(messageElement);
          messageElement.textContent = message;
          messagesContainer.appendChild(messageElement);
          chatContainer.scrollTop = chatContainer.scrollHeight;
        }
      });
    });

</script>
@endpush