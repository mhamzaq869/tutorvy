import React from 'react';
import ReactDOM from 'react-dom';

function ChatList() {
    return (
        <div className="container">
            <h1>Hello</h1>
        </div>
    );
}

export default ChatList;

if (document.getElementById('react')) {
    ReactDOM.render(<ChatList />, document.getElementById('react'));
}
