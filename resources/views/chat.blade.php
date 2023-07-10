<!DOCTYPE html>
<html>
<head>
    <title>Chat Demo</title>
</head>
<body>
    <div id="app">
        <div id="chat-messages">
            <div v-for="(message, index) in messages" :key="index">
                <strong>Me:</strong> {{ message }}
            </div>
        </div>

        <form @submit.prevent="sendMessage">
            <div class="input-group">
                <input type="text" v-model="newMessage" class="form-control" placeholder="Type your message" required>
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                messages: [],
                newMessage: ''
            },
            methods: {
                sendMessage() {
                    if (this.newMessage.trim() === '') {
                        return; // Don't send empty messages
                    }

                    this.messages.push(this.newMessage);
                    this.newMessage = '';
                }
            }
        });
    </script>
</body>
</html>
