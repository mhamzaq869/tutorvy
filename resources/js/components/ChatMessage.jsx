import React from 'react';
import ReactDOM from 'react-dom';

function ChatMessage() {
    return (
        <div className="container">
            <h1>Hello</h1>
        </div>
    );
}

export default ChatMessage;

if (document.getElementById('chatArea')) {
    ReactDOM.render(<ChatMessage />, document.getElementById('chatArea'));
}
