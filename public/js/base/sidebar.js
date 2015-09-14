/**
 * Created by Gavin on 2015/9/14.
 */
(function($){
    $.fn.sidebar = function(options){
        var settings = $.extend({},options);
    }
}(jQuery));


$('.sidebar-toggle').on('click',function(){
    var status = $('#sidebar').attr("data-status");
    if(status == 'closed'){
        $('#sidebar').animate({right:'0'},500).attr('data-status','opened');
    }else if(status == 'opened'){
        $('#sidebar').animate({right:'-320px'},500).attr('data-status','closed');
    }
});