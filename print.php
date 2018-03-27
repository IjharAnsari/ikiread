<!DOCTYPE html>
<html>
    <head>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
            .abc{
                background:#ddd;
                display: inline-block;
                padding:0px 20px 0px 20px;
                color:#008080;
                border-radius: 4px;
            }
            .abc ul li{
                list-style: none;
                background:#eee;
                margin-bottom: 5px;
                padding:20px;
            }
            .abc ul li:hover{
                background:#fff;
            }
            .abc:hover{
                background: #ccc;
                cursor: pointer;
                transition:ease 3sec;
            }
        </style>
    </head>
    <body>
        <div class="abc" value="123">
            <ul>
                <li value="a">
                    a
                </li>
                <li value="b">
                    b
                </li>
                <li value="c">
                    c
                </li>
            </ul>
        </div>
        <script>
            $(document).ready(function(){
               $('.abc ul li').click(function(){
                    var a=$(this).attr('value');
                    $('#a').load('questiondisplay.php' ,{"id":a});
               });
            });
        </script>
        <div id="a">
        </div>
    </body>
</html>