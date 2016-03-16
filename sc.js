
$('#target1')
    .velocity({
        opacity: 0,
        scale: 1.1
    },{
        duration: 300,
        complete: function() { alert('hello'); }
    })
    .velocity('reverse', {
        duration: 1000,
        easing: 'ease-out'
    });
