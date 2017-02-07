(function($) {

    /*functon for show and hde menu*/
    function showMenu(){
        $('.nav-icon1').toggleClass('open');
        $('body').toggleClass('open_menu');
        $('.menu').toggle();
    }

    var table = $('.pricing-table');
    var frst_table   = $('.pricing-table').eq(0);
    var second_table = $('.pricing-table').eq(1);
    var thrt_table   = $('.pricing-table').eq(2);

    /*functon for addng anmaton class tables element*/
    function anmatonTable () {
        frst_table.addClass('table_flght_thrt');
        second_table.addClass('table_flght_second');
        thrt_table.addClass('table_flght_frst');
        table.removeClass('pricing-table-start');
    }
    function anmatonTable2 () {
        frst_table.removeClass('table_flght_thrt');
        second_table.removeClass('table_flght_second');
        thrt_table.removeClass('table_flght_frst');
        table.addClass('pricing-table-start');
    }

    $('.nav-icon1').click(function(){
        showMenu();
    });

    /*start settng for parralax*/
    var s = $('.site');
    s.on('click', function(){
        showMenu();
    });

    window.addEventListener("load", function(event) {
        setTimeout(function(){
            var load    = $('.loader'),
                logo   = $('.logo'),
                hamburgeris = $('.nav-icon1');

            load.fadeOut(1000);
            logo.addClass('logo_animation');
            hamburgeris.addClass('hamburger_animation');
        }, 2000);
    });

   /* SCROLL TO SECTONS*/
    menuLinks=$('.site');
    menuLinks.on('click',function(event)
    {
        event.preventDefault();
        var el=$(this.hash);

        setTimeout(function(){
            $('html,body').animate({scrollTop: el.offset().top }, 800);
        },200);

    });


    /*LOGO AND HAMBURGER COLOR CHANGE N SECOND SECTON*/
    var servce = $('#Sluzby').offset().top;
    var portfolo = $('#Portfolio').offset().top;
    var kontakt = $('#Kontakt').offset().top;
    $(window).scroll(function() {
        var height = $(window).scrollTop();

        if(height  > (servce-30)) {
            $('.logo').css({color:'black'});
            $('.nav-icon1 span').css({background:'black'});
            anmatonTable();

        }
        if((height  > (portfolo-30))||(height  < (servce-30))){
            $('.logo').css({color:'#fff'});
            $('.nav-icon1 span').css({background:'#fff'});
         /*   anmatonTable2();*/
        }
        if(height  > (kontakt-10)) {
            $('.logo').css({color:'#f1494c'});
            $('.nav-icon1 span').css({background:'#f1494c'});
            var jumper = $('.wpcf7-form').addClass('jump');
        }


    });

  /*  function colorMenu() {
        $('.logo').toggleClass('open_man_ms');
        $('.nav-icon1 span').toggleClass('open_man_hm');
    };*/

    $('div.nav-icon1').on('click',function() {
        $('.logo').toggleClass('open_man_ms');
        $('.nav-icon1 span').toggleClass('open_man_hm');
    });

    $('a.site').on('click',function() {
        $('.logo').toggleClass('open_man_ms');
        $('.nav-icon1 span').toggleClass('open_man_hm');
    });

}(jQuery));