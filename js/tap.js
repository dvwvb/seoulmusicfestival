function taps(){
    let ww = window.innerWidth;
    let widthSize = 33; // 텝 def 크기
    let mobSize = 768;

    if(window.location.pathname.split('/')[2] == "lineup" || window.location.pathname.split('/')[2] == "about"){
        widthSize = 25; // 텝 def 크기
        mobSize = 970;
    }

    if(window.location.pathname.split('/')[2] == "gallery"){
        widthSize = 50; // 텝 def 크기
    }

    if(ww > mobSize){
        $('.__tp .bx .bef').css({'left':`${widthSize * $('.__tp ul li.on').index()}%`});
    }

    $('.__tp ul li').hover(
        function(){
            ww = window.innerWidth;

            if(ww > mobSize){

                $('.__tp .bx .bef').css({'left':`${widthSize * $(this).index()}%`});

                $(this).find('a').css('color','#fff');

                if($(this).hasClass('on')){
                    $('.__tp ul li.on a').css('color','#fff');
                }else{
                    $('.__tp ul li.on a').css('color','#000');
                }

            }
            
        },
        function(){

            ww = window.innerWidth;

            if(ww > mobSize){
                $('.__tp .bx .bef').css({'left':`${widthSize * $('.__tp ul li.on').index()}%`});
                $(this).find('a').css('color','#000');
                $('.__tp ul li.on a').removeAttr('style');
            }

        }
    );

    const onIndex = $('.__tp ul li.on').index();

    function reSizeLi(){

        ww = window.innerWidth;

        if(ww <= mobSize){
            $('.__tp ul li.on').prependTo($('.__tp ul'));

            if($('.__tp ul li.on').children('i').length < 1){
                $('.__tp ul li.on').append('<i class="ri-arrow-down-s-fill"></i>');
            }
            

        }else{
            $('.__tp .bx .bef').css({'left':`${widthSize * $('.__tp ul li.on').index()}%`});

            $('.__tp ul li').eq(onIndex).after($('.__tp ul li.on'));
            $('.__tp ul li.on').siblings().removeAttr('style');

            if($('.__tp ul li.on').children('i').length == 1){
                $('.__tp ul li.on').children('i').remove();
            }

        }

    }
    reSizeLi();
    $(window).resize(reSizeLi);

    $('.__tp ul li.on').click(function(){
        ww = window.innerWidth;
        if(ww <= mobSize){
            $(this).siblings().stop().slideToggle("fast");
            return false;
        }
    });
    
}

taps();