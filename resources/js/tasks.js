window.Echo.channel('tasks')
    .listen('.task.added', e => {
        console.log('new task added successfully');
        console.log(e['task']);
        // Object.keys(e['task']) get keys of object from response
        // JSON.stringify(e['task']); convert to json string
        // Object.keys(e['task']).length

        // let response = JSON.stringify(e['task']);
        let response = e['task'];
        let responseLength = Object.keys(e['task']).length;
        //
        let list = document.getElementById('task-list');
        let records = '';
        //
        let tr = document.createElement('tr');
        // console.log(response['id'],response['title'],response['body']);
        for (const item in response) {
            records += '<td class="p-2" colspan="2">' + response['id'] + '</td>';
            records += '<td class="p-2" colspan="2">' + response['title'] + '</td>';
            records += '<td class="p-2" colspan="2">' + response['body'] + '</td>';
            records += '<td class="p-2"><a href="#">edit</a></td>';
            records += '<td class="p-2"><a href="#">delete</a></td>';
        }
        console.log(records);
        //let node = list.appendChild(records);
        //document.getElementById('table-list').append(node)

    })
