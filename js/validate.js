$(document).ready(function(){
    $('#email').blur(function(){
        $.ajax({
            type:'GET',
            url:'validation.php',
            data:'email='+$('#email').val(),
            success:function(msg){
                if(msg!=""){
                    $('#email').css('border-color',"#d1082f");
                    $('#email').css('border-width',5);
                    $('#sbm').css('background','#ddd');
                    $('#sbm').attr('disabled','disabled');
                    $('#form').css('height','360px');
                    $('#sbm').css('cursor','not-allowed');
                }
                if(msg==""){
                    $('#email').css('border-color',"#5ea4ea");
                    $('#email').css('border-width',1.5);
                    $('#sbm').css('background','#45acf8');
                    $('#sbm').removeAttr('disabled','disabled');
                    $('#form').css('height','340px');
                    $('#sbm').css('cursor','default');
                }
                $('#val').html(msg);
            }
        });
    }); // check on firname name text field in blur
}); //on document load