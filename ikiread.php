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
        <script src="js/questionloading.js"></script>
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
            
            <!-- body part -->
            <!--<div id="body_part">-->
                <div id="fixed_side" class="scl">
                    <!--php section -->
                    <?php
                        include "select.php";
                    ?>
                    <!--php section -->
                 <!-- <div class="sub_head _head_color">
                        <div id="_1" class="heading">
                            <h4>Computer</h4>
                            
                            <span class="arrow_dwn">
                                <i class="material-icons" style="font-size: 30px; color:#666;">arrow_drop_down</i>
                            </span>
                        </div>
                        <div id="_11" class="inside_sub_head">
                            <ul>
                                <li>
                                    <i class="fa fa-caret-right"></i> Introduction to Computer
                                </li>
                                <li>
                                    <i class="fa fa-caret-right"></i> Introduction to Computer
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>
                <div id="movable_side">
                    <div id="body_content">
                        <div id="syllabus_container"></div>
                        <div id="syllabus_container">
                            <!--Display questions on click -->
                            <?php
                                include "questiondisplay.php";
                            ?>
                            <!-- php end -->
                            <!--
                            <div class="questions_card">
                                <div class="question">
                                    <p>ijhar ansari</p>
                                    
                                </div>
                                <div class="question_down_icon">
                                    <p>More&nbsp;
                                    <i class="fa fa-angle-double-right"></i>
                                    </p>
                                    
                                </div>
                            </div>
                            -->
                        </div>
                    </div>
                    
                    <hr class="_hr">
                    <!-- footer start -->
                    <div id="footer">
                        <div id="footer_content">
                            <p>ikiRead(2018)</p>
                            <p>copywrite&copy;2018</p>
                        </div>
                    </div>
                    <!-- footer ends-->
                    
                </div>
            <!--</div> -->
            <!-- body part ends -->
        </div>
        <!--mainbody ends -->
    </body>
</html>