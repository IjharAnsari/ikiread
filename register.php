<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/mainbody.css">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        
        <!-- cdn for css icon-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/headerJq.js"></script>
        <script src="js/validate.js"></script>
    </head>
    <body>
        <!--mainbody starts -->
        <div id="main_body">
            <!--upper main header -->
            <div id="header">
                <!--logo design -->
                
                <!-- logo container -->
                <a href="##home">
                    <div id="logo_container" class="log_mrg log_tpmrg">
                        <div>
                            <div id="solid_line">
                            </div>
                        </div>
                        <div>
                            <div id="iki" class="_lfloat">
                            <h3 class="h3size">iki</h3>
                            </div>
                            <div id="read" class="_lfloat">
                                <h3 class="h3size">Read</h3>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- logo container end-->
                
                <!-- logo design-->
            </div>
            <!--header ends-->
            
            <!-- below header -->
            <div id="bodyContent">
                <div id="form_content">
                    <div id="form">
                        <div id="frm_logo" class="_lfloat">
                        </div>
                        <div id="frm" class="_lfloat">
                            <div id="rgs_heading">
                                <h3 id="abc">Registered to ikiRead</h3>
                            </div>
                            <div id="val"></div>
                            <form method="post" action="registerInsert.php">
                                <input type="text" name="fname" id="fname" placeholder="First Name...">
                                <input type="text" name="lname" id="lname" placeholder="Last Name...">
                                <input type="text" name="email" id="email" placeholder="Email...">
                                <input type="password" name="pass" id="pass" placeholder="Password...">
                                <select id="university" name="university">
                                    <option value="" selected>--Universities--</option>
                                    <?php
                                        include "uniSelect.php";
                                    ?>
                                </select>
                                <input type="submit" id="sbm" value="Register">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- footer start -->
                    <div id="footer" class="toP border_top">
                        <div id="footer_content">
                            <p>ikiRead(2018)</p>
                            <p>copywrite&copy;2018</p>
                        </div>
                    </div>
                    <!-- footer ends-->
            </div>
            <!-- below header -->
            
        </div>
        <!--mainbody ends -->
    </body>
</html>