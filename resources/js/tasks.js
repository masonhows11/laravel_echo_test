window.Echo.channel('tasks')
    .listen('.task.added', e => {
        console.log('new task added successfully');
        console.log(e['task'])
        let list = document.getElementById('task-list');



    })
