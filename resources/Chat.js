import React, { Fragment, useState, useEffect } from 'react';
import ReactDOM from 'react-dom';
import Picker from 'emoji-picker-react';


function Chat(props) {


    const [inputStr, setInputStr] = useState('');
    const [showPicker, setShowPicker] = useState(false)
    const [contacts, setContacts] = useState([]);
    const [user, setUser] = useState([]);
    const [messages, setMessages] = useState([]);
    const [keyword, setKeyword] = useState('');


    const filter = (e) => {
        setKeyword(e.target.value)
    };

    function getTimeInterval(date) {
        let seconds = Math.floor((Date.now() - date) / 1000);
        let unit = "second";
        let direction = "ago";
        if (seconds < 0) {
          seconds = -seconds;
          direction = "from now";
        }
        let value = seconds;
        if (seconds >= 31536000) {
          value = Math.floor(seconds / 31536000);
          unit = "year";
        } else if (seconds >= 86400) {
          value = Math.floor(seconds / 86400);
          unit = "day";
        } else if (seconds >= 3600) {
          value = Math.floor(seconds / 3600);
          unit = "hour";
        } else if (seconds >= 60) {
          value = Math.floor(seconds / 60);
          unit = "minute";
        }
        if (value != 1)
          unit = unit + "s";
        return value + " " + unit + " " + direction;
    }

    useEffect(() => {
        axios.get('/general/chat')
            .then((response) => {
                setContacts(response.data)
            });
    }, [contacts]);


    function getUserChat(user_id){
        axios.get('/general/chat/fetchmsg/'+user_id)
            .then((response) => {
                setUser(response.data[1])
                setMessages(response.data[0])

            });
    }

    const onEmojiClick = (event, emojiObject) => {
        setInputStr(prevInput => prevInput + emojiObject.emoji);
        setShowPicker(false);
    };

    function handleClick() {
        axios.post('/general/chat/store', {
            content: inputStr,
            user: user.id
        })
        .then((response) => {
            if (response.status == 200) {
                setInputStr('')
                setMessages(response.data)
                console.log(response)
            }
        });
    }

    return (
        <>
            <div className="col-md-3" style={{backgroundColor: '#F2F3F4'}}>
                <div className="box-main pt-3 pb-3">
                    <div className="input-box">
                        <input type="search" onChange={filter} placeholder="Search messeges" />
                        <a href="#">
                            <i className="fa fa-search search-box-icon"></i>
                        </a>
                    </div>
                    <div className="line-box"></div>
                    <div id="chatList">

                        {

                        contacts && contacts.length > 0 ? (
                            contacts.filter(contact => contact.first_name.includes(keyword)).map((item, i) => {
                                return <span key={i} >
                                        {(item.id != props.data) ?
                                            <div className={`container-fluid m-0 p-0 img-chats ${user.id == item.id ? "chatActive" : ""} `} onClick={() => getUserChat(item.id)}>
                                            {item.picture != null
                                                ?
                                                <img src={item.picture} className="leftImg ml-1" />
                                                :
                                                <img src={'../assets/images/ico/Square-white.jpg'} className="leftImg ml-1" />
                                            }

                                            <span className="activeDot" id="activeDot_"></span>
                                            <div className="img-chat w-100">

                                                <div className="row">
                                                    <div className="col-9">
                                                        <p className="name-client">{item.first_name} {item.last_name}</p>
                                                    </div>
                                                    <div className="col-md-3">
                                                        <p className="time-chat">11:25</p>
                                                    </div>
                                                </div>
                                                <div className="row">
                                                    <div className="col-md-9">
                                                        <p className="massage-client" id="recent_msg_">It is a long
                                                            distae... </p>

                                                    </div>
                                                    <div className="col-md-3">
                                                        <span className="dot pl-2 " id="unseen_msg_cnt_">2
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                            : ''}
                                </span>
                                    })
                        ) : 'No results found!'
                        }
                    </div>

                </div>

            </div>
            <div className="col-md-9  chatSet">
                <nav className="chatHead navbars navbar-light bg-white m-0 p-0 pl-3 pr-3 row">
                    <div className="col-md-6 col-6">
                        <a className="navbar-brand pb-0" href="#">
                            <div className="container-fluid m-0 p-0 img-chats">
                                {user.picture != null
                                    ?
                                    <img src={user.picture} className="leftImg ml-1" />
                                    :
                                    <img src={'../assets/images/ico/Square-white.jpg'} className="leftImg ml-1" />
                                }

                                <div className="img-chat">
                                    <div className="row">
                                        <div className="col-12">
                                            <p className="name-client">{user.first_name} {user.last_name}</p>
                                        </div>
                                    </div>
                                    <div className="row">
                                        <div className="col-md-12">
                                            <p className="massage-client" style={{position: 'relative', top: '-5px'}}>Online</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div className="col-md-6 col-6 pt-3 text-right">
                        <input type="hidden" className="col-sm-9 form-control" />
                        <a href="#">
                            <i className="fa fa-search headIcon"></i>
                        </a>
                        <a href="#">
                            <i className="fa fa-ellipsis-v headIcon"></i>
                        </a>
                    </div>
                </nav>
                <div className="line-box2"></div>

                <div className="row chatArea p-5 bg-white">
                    {messages.map((msg,i)=>{
                     return <div className="col-md-12" key={i}>
                                { (msg.sender_id == props.data)

                                ?

                                <div className="sender">
                                    <small>You:</small>
                                    <p className="senderText mb-0">{msg.content}</p>
                                    <small className="recDull">{getTimeInterval(new Date(msg.created_at))}</small>
                                    <a href="#" className="textMenu2"><i className="fa fa-ellipsis-h"></i></a>
                                </div>

                                :

                                <div className="reciever">
                                    <small>{user.first_name} {user.last_name}</small>
                                    <p className="senderText mb-0">{msg.content}</p>
                                    <small className="recDull">{getTimeInterval(new Date(msg.created_at))}</small>
                                    <a href="#" className="textMenu2"><i className="fa fa-ellipsis-h"></i></a>
                                </div>

                            }

                            </div>
                                {msg}

                    })}

                </div>
                <div className="container-fluid mb-3">
                    <div className="search-type ">
                        <div className="row">
                            <div className="col-md-2 col-4"></div>
                            <div className="col-md-10">
                                <span className="text-muted" id="typingUser"></span>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-md-12 col-8" id="chatForm">
                                <a className="sendLeft" type="button" style={{ left: '13px' }}>
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
                                    style={{ paddingLeft: '60px' }} />


                                <a className="sendRight" onClick={() => handleClick()} type="button">
                                    <i className="fa fa-paper-plane f-19"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}

export default Chat;

if (document.getElementById('chat')) {
    const form = document.getElementById('chat')
    var data = document.getElementById('chat').getAttribute('data');
    ReactDOM.render(<Chat data={data} />, form);
}
