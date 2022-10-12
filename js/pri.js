if(window.location.pathname.split('/')[1] == 'kor'){

    $.get('/inc/pri_k.txt')
        .done(function(data){
            $('._inquiry .pri .cont').html(data.replace(/(?:\r\n|\r|\n)/g, '<br/>'));
        })
        .fail(function(){
            console.log('테이터가 없습니다');
        }); 

}else{

    $.get('/inc/pri_e.txt')
        .done(function(data){
            $('._inquiry .pri .cont').html(data.replace(/(?:\r\n|\r|\n)/g, '<br/>'));
        })
        .fail(function(){
            console.log('테이터가 없습니다');
        }); 

}
