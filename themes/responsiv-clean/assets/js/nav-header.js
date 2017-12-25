
    $('.newA').hover(function(){
        $('.pop-div',this).stop().slideDown();
    },function(){
        $('.pop-div',this).stop().slideUp();
    });
    $('.pop-ul li').hover(function () {
        $(this).addClass('pop-color');
    }, function () {
        $(this).removeClass('pop-color');
    });

    $(function () {
        //阻止事件冒泡
        $('#aykhy,#aGPlus,#aRosaPark,#aAbout').click(function (event) {
            return false;
        });

    });