import {useEffect, useState} from "react";

export default function ChatRoom() {

    const [userList, setUserList] = useState([]);

    // useEffect(() => {
    //     const url = new URL('http://localhost:9090/.well-known/mercure');
    //     url.searchParams.append('topic', 'https://example.com/my-private-topic');

    //     const eventSource = new EventSource(url, {withCredentials: true});
    //     eventSource.onmessage = handleMessage;

    //     return () => {
    //         eventSource.close()
    //     }

    // }, [])

    return (
        <div>
            
        </div>
    )
}