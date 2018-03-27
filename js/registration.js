$(document).ready(function(){
    //set form variable
    
    var frm=$('#registerform');
    
    //hijack form submit
    frm.submit(function(event){
        //set username variable
        var fnam=$('#fname').val();
        var lnam=$('#lname').val();
        var eml=$('#email').val();
        var pas=$('#pass').val();
        var uni=$('#university').val();
        //check if fname is not empty
        if($.trim(fnam)!=''){
            $.post('registerInsert.php',{fname: fnam, lname: lnam, email: eml, pass: pas, university:uni}, function(msg){
                $('#abc').html(msg);
            });
        }
        event.preventDefault();
    });
});