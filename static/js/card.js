$(document).ready(function(){
    $("#readmore").click(function(){
        $(".show-case").hide();
        $('.work-flexi').css({
            'filter'        : 'blur(5px)',
            '-webkit-filter': 'blur(5px)',
            '-moz-filter'   : 'blur(5px)',
            '-o-filter'     : 'blur(5px)',
            '-ms-filter'    : 'blur(5px)'
         });  
    });
    $(".close").click(function(){
        $(".show-case").show();
        $('.work-flexi').css({
            'filter'        : 'blur(0px)',
            '-webkit-filter': 'blur(0px)',
            '-moz-filter'   : 'blur(0px)',
            '-o-filter'     : 'blur(0px)',
            '-ms-filter'    : 'blur(0px)'
            });     
    });
});

