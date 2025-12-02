window.Echo.channel('tasks')
    .listen('.task.added', e => {
        console.log('new task added successfully');
        console.log(Object.keys(e['task']));
        // Object.keys(e['task']) get keys of object from response
        // JSON.stringify(e['task']); convert to json string
        let response = JSON.stringify(e['task']);
        let responseLength = response.length;
        let list = document.getElementById('task-list');
        let records = '';
        let tr = document.createElement('tr');
        // console.log(response['id'],response['title'],response['body']);
        for (let i = 0; i < responseLength; i++) {
            records += '<td class="p-2" colspan="2">' + response[i]['id'] + '</td>';
            records += '<td class="p-2" colspan="2">' + response[i]['title'] + '</td>';
            records += '<td class="p-2" colspan="2">' + response[i]['body'] + '</td>';
            records += '<td class="p-2"><a href="#">edit</a></td>';
            records += '<td class="p-2"><a href="#">delete</a></td>';
        }
        console.log(response);
        //let node = list.appendChild(records);
        //document.getElementById('table-list').append(node)

    })
