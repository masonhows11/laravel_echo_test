window.Echo.channel('tasks')
    .listen('.task.added', e => {
        console.log('new task added successfully');
        console.log(e['task'])
        let response = e['task'];
        let list = document.getElementById('task-list');
        let records = document.createElement('tr');
        for (let i = 0; response.length < 0; i++) {
            records += '<td class="p-2" colspan="2">' + response[i]['id'] + '</td>';
            records += '<td class="p-2" colspan="2">>' + response[i]['title'] + '</td>';
            records += '<td class="p-2" colspan="2">>' + response[i]['body'] + '</td>';
            records += '<td class="p-2"><a href="#">edit</a></td>';
            records += '<td class="p-2"><a href="#">delete</a></td>';
        }
        console.log(records);
        let node = list.appendChild(records);
        document.getElementById('table-list').append(node)

    })
