import React, { useState,useEffect,Fragment } from 'react';
import ReactDOM from 'react-dom';


function ChatList() {

    const [contacts,setContacts] = useState([]);

    useEffect(() => {
       await axios.get('/general/chat')
        .then((response) => {
            setContacts({data:response.data})
        });
        console.log(contacts)
    },[]);


    return (
        <>
            { contacts.map((item , i) =>  {
                    <div className="container-fluid m-0 p-0 img-chats" key={i}>
                          <img src="" className="leftImg ml-1" />
                          <span className="activeDot" id="activeDot_"></span>
                          <div className="img-chat w-100">

                              <div className="row">
                                  <div className="col-9">
                                      <p className="name-client"></p>
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

                }) }
        </>

        );
}

export default ChatList;

if (document.getElementById('chatList')) {
    ReactDOM.render(<ChatList />, document.getElementById('chatList'));
}
