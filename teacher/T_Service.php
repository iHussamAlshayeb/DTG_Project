<?php
//
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['Username']);
    header("location: index.php");
}
?>
<!DOCTYPE html>

<html lang="ar" dir="rtl">
    <head>
        <title>خدمات المدربة</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style/style.css">

    </head>
    <body>
    <?php include('header.php')?>
        <div class="separador"></div>
        <div class="contant">
    
                <section class="tech_services">

                    <div class="s-heading">
                        <h1>خد<font color="#3399ff">ما</font>ت  المدربة</h1>
                        <p>الرجاء اختيار أحد الخدمات التالية:</p>
                    </div>
                    <!--services-box-container------------------->
                    <div class="row">
                        
                                        <div class="column">
                                            <div class="bar"></div>
                                            <img src="../images/list.png" alt="1" style="width:100% " />
                                            <h1> المخالفات</h1>
                                            <p> تقدم هذه الخدمة لرصد مخالفات الزي والمخالفات الاخرى.</p>
                                            <a class="s-btn" href="violation.php">الانتقال الى هذه الخدمة</a>
                                        </div>
                                  
                                        <div class="column">
                                            <div class="bar"></div>
                                            <img alt="2"src="../images/tel.png" style="width:100% " />
                                            <h1>روابط التلقرام</h1>
                                            <p>تقدم هذه الخدمة روابط الشعب لتواصل مع المتدربات.</p>
                                            <a class="s-btn" href="#">الانتقال الى هذه الخدمة</a>
                                        </div>
</div>
                                   <div class="row">
                                        <div class="column">
                                            <div class="bar"></div>
                                            <img src="../images/gu.png" alt="1" style="width:100% " />
                                            <h1> الارشاد</h1>
                                            <p>تقدم هذه الخدمة التواصل مع الارشاد.</p>
                                            <a class="s-btn" href="#">الانتقال الى هذه الخدمة</a>
                                        </div>
                                   
                                        <!-- <div class="column">
                                            <div class="bar"></div>
                                            <img src="../images/at.png" alt="1" style="width:100% " />
                                            <h1> الحضور والغياب </h1>
                                            <p> تقدم هذه الخدمة تحضير الطالبات ورصد الحضور والغياب.</p>
                                            <a class="s-btn" href="#">الانتقال الى هذه الخدمة</a>
                                        </div>
                                   -->
                                        <div class="column">
                                            <div class="bar"></div>
                                            <img src="../images/sc.jpg" alt="1" style="width:100% " />
                                            <h1> الجدول</h1>
                                            <p> تقدم هذه الخدمة الأطلاع على جدول المواد والمحاضرات وارقام المعامل.</p>
                                            <a class="s-btn" href="#">الانتقال الى هذه الخدمة</a>
                                        </div>
                                   
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </body>
</html>
