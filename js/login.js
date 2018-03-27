$(document).ready(function(){
    //capturing submit button click
    var ab=""
    $('#email').blur(function(){
        var empytone=$('#email').val();
        if(empytone==""){
            ab="Please enter email";
            $('#val').html(ab);
        }
        if(empytone!=""){
            ab="";
            $('#val').html(ab);
        }
    });
});