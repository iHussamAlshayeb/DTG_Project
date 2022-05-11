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
    <title>خدمات المتدربة</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <style>



    </style>
</head>

<body>
    <?php include('header.php')?>

    <div class="separador"></div>
    <div class="contant">

        <!-- <section class="services"> -->

        <div class="s-heading">
            <h1>خدمات المتدربة</h1>
            <p>الرجاء اختيار أحد الخدمات التالية:</p>
        </div>
        <!--services-box-container------------------->
        <div class="row">

            <div class="column">
                <div class="barst"></div>
                <img src="../images/gu.png" alt="1" style="width:100% " />
                <h1> الارشاد</h1>
                <p> تقدم هذه الخدمة لتواصل مع الارشاد.</p>
                <a class="btn-st" href="guidance.php">الانتقال الى هذه الخدمة</a>
            </div>


            <div class="column">
                <div class="barst"></div>
                <img alt="2" src="../images/tel.png" style="width:100%" />
                <h1>روابط التلقرام</h1>
                <p>تقدم هذه الخدمة روابط الشعب لتواصل مع المدربات.</p>
                <a class="btn-st" href="links.php">الانتقال الى هذه الخدمة</a>
            </div>
            <div class="column">
                <div class="barst"></div>
                <img src="../images/infractionST.png" alt="1" style="width:100%" />
                <h1> المخالفات</h1>
                <p>تقدم هذه الخدمة معرفة مخالفات المتدربة وفق اللوائح .</p>
                <a class="btn-st" href="violation.php">الانتقال الى هذه الخدمة</a>
            </div>

        </div>
        <div class="row">
            <div class="column">
                <div class="barst"></div>
                <img src="../images/calculatorST.png" alt="1" style="width:100%" />
                <h1> حاسبة الحرمان </h1>
                <p> تقدم هذه الخدمة حاسبه لمعرفة كم المتبقي للغياب قبل الحصول ع الحرمان.</p>
                <a class="btn-st" href="calculator.php">الانتقال الى هذه الخدمة</a>
            </div>




            <div class="column">
                <div class="barst"></div>
                <img src="../images/rayatST.png" alt="1" style="width:100%" />
                <h1> رايات</h1>
                <p> تقدم هذه الخدمة الأنتقال الى موقع رايات .</p>
                <a class="btn-st" target="_blank" href="https://www.tvtc.gov.sa/rayat.html">الانتقال
                    الى هذه الخدمة</a>
            </div>

            <div class="column">
                <div class="barst"></div>
                <img src="../images/scheuleST.png" alt="1" style="width:100%" />
                <h1> الجدول التدريبي</h1>
                <p> تقدم هذه الخدمة رؤية الجدول التدريبي الخاص بالمتدربه .</p>
                <a class="btn-st" href="timetable.php">الانتقال الى هذه الخدمة</a>
            </div>




        </div>
        <!-- </section> -->

    </div>
</body>

</html>