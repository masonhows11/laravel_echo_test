//// this for public channel

// window.Echo.channel('tasks')
//     .listen('.task.added', e => {
//         console.log('new task added successfully');
//         // Object.keys(e['task']) get keys of object from response
//         // JSON.stringify(e['task']); convert to json string
//         // Object.keys(e['task']).length
//         // let response = JSON.stringify(e['task']);
//         let response = e['task'];
//         // let list = document.getElementById('task-list');
//         let records = '';
//         records =
//             '<tr class="p-2 my-2 text-center" id="task-list">' +
//             '<td class="p-2" colspan="2">' + response['id'] + '</td>' +
//             '<td class="p-2" colspan="2">' + response['title'] + '</td>' +
//             '<td class="p-2" colspan="2">' + response['body'] + '</td>' +
//             '<td class="p-2"><a href="#">edit</a></td>' +
//             '<td class="p-2"><a href="#">delete</a></td>' +
//             '<tr/>'
//         // this is very important very_very important
//         document.getElementById('table-list').innerHTML += records;
//     })

//// this for private channel manage by user_id
let user_id = document.getElementById("user").value;
window.Echo.private(`tasks.${user_id}`).listen(".task.added", (e) => {
    let response = e["task"];
    let records = "";
    records =
        '<tr class="p-2 my-2 text-center" id="task-list">' +
        '<td class="p-2" colspan="2">' +
        response["id"] +
        "</td>" +
        '<td class="p-2" colspan="2">' +
        response["title"] +
        "</td>" +
        '<td class="p-2" colspan="2">' +
        response["body"] +
        "</td>" +
        '<td class="p-2"><a href="#">edit</a></td>' +
        '<td class="p-2"><a href="#">delete</a></td>' +
        "<tr/>";
    // this is very important very_very important
    document.getElementById("table-list").innerHTML += records;
})


// whisper means other user listen to one channel and sea typing event
let roomId = document.getElementById("room").value;
let chatChannel = window.Echo.private(`chat.${roomId}`);
let user_name = window.App.name;
let typing = true
let typingTimers = {}
let isTyping = document.getElementById('isTyping');
//// listen for response user typing

//// other user/user listen for whisper send from specific user/users
chatChannel.listenForWhisper('typing', (e) => {

    // first step
    isTyping.innerHTML = `${e.user_name} is typing... `;
    // second step
    const showTyping = setTimeout(clearTyping, 2000)
})

function clearTyping(e) {
    isTyping.innerHTML = '';
}

//// listen for user typing
window.typingWhisper = function (event) {
    let typing = event.target.value;
    //// this code send data with whisper to other user/users
    chatChannel.whisper("typing", {
        user_name: user_name,
    })
}
