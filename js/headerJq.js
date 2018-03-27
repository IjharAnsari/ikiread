$(document).ready(function(){
    $('.heading').click(function(){
        var current=$(this).attr('id');
        var len=current.length-1;
        var headCurrent="#"+current+current.substr(len,1);
        $(headCurrent).slideToggle("slow");
    });
});