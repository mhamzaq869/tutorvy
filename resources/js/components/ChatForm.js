import React,{ Fragment,useState } from 'react';
import ReactDOM from 'react-dom';
import Picker from 'emoji-picker-react';

function ChatForm(props) {

    const [val,setVal] = useState(0);
    const [inputStr, setInputStr] = useState('');
    const [showPicker, setShowPicker] = useState(false)


    const onEmojiClick = (event, emojiObject) => {
        setInputStr(prevInput => prevInput + emojiObject.emoji);
        setShowPicker(false);
    };

    function handleClick() {
        console.log(props)
      axios.post('/general/chat/store', {
       content:inputStr,
       user:2
      })
      .then((response) => {

      });

    }

    return (
        <>
            <a className="sendLeft" type="button" style={{left:'13px'}}>
                <i className="fa fa-smile-o emoji-icon p-2"
                onClick={() => setShowPicker(val => !val)}></i>
                {showPicker && <Picker
                pickerStyle={{ width: '100%' }}
                onEmojiClick={onEmojiClick} />}
                <i className="fa fa-paperclip pl-1"></i>
            </a>
            <input
                type="text"
                value={inputStr}
                onChange={e => setInputStr(e.target.value)}
                className="w-100 form-control"
                style={{paddingLeft:'60px'}}/>


            <a className="sendRight" onClick={()=>handleClick()} type="button">
                <i className="fa fa-paper-plane f-19"></i>
            </a>
        </>
    );
}

export default ChatForm;

if (document.getElementById('chatForm')) {
    const form = document.getElementById('chatForm')
    var data = document.getElementById('chatForm').getAttribute('data');
    ReactDOM.render(<ChatForm data={data}/>, form);
}
