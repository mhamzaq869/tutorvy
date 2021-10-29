import React,{ Fragment } from 'react';
import ReactDOM from 'react-dom';

function ChatForm() {
    return (
        <>
            <a href="" className="sendLeft" type="button">
            <i className="fa fa-paperclip rightChatIcon"></i>

            <input type="search" className="w-100 form-control" alt="message" />
                                </a>
            <a href="" className="sendRight" type="submit">
                <i className="fa fa-paper-plane f-19"></i>
            </a>
        </>
    );
}

export default ChatForm;

if (document.getElementById('chatForm')) {
    ReactDOM.render(<ChatForm />, document.getElementById('chatForm'));
}
