$(document).ready(function(){
    $('.inside_sub_head ul li').hover(function(){
        $(this).css('background','#ddd');
    },
    function(){
        $(this).css('background','none');
    
    });
    $('.inside_sub_head ul li').click(function(){
        var getId=$(this).attr('id');
        var id=getId.substr(getId.length-1,1)
        $('#question_container').load('questiondisplay.php',{'qId':id});
        console.log(id);
    });
});