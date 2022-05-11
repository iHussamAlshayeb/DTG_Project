

<!DOCTYPE html>

<html lang="ar" dir="rtl">
    <head>
        <title>خدمات المتدربة</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style/style.css">
        <style>
            @import url(https://fonts.googleapis.com/earlyaccess/amiri.css);
        </style>
    </head>
    <body>
        <script src="js/jquery-3.4.1.js"></script>

        <div class="header">
            <a href="T_Service.php">
                <img class="logo" src="../images/logo.svg" alt="" style="width:170px;margin-right: 5%;"/></a>
            <h3>الكلية التقنية الرقمية للبنات بالأحساء</h3>
        </div>
        <div class="separador"></div>

        <div class="contant">
            <div class="container-fluid">
                <section class="vio_services">


                    <!--services-box-container------------------->
                    <div class="s-box-container">
                        <div style="overflow-x:auto;"> 

                            <table style="float:right;margin-left: 100px;margin-top:9%;">
                                <tr><td>
                                        <h1 style="color:black;border-left: 5px solid #aae3f1 ; font-family: 'Amiri', serif; font-size: 2.4rem; ">المخالفات..</h1>
                                    </td>
                                    <td>        
                                        <img  src="../images/veu.webp" style="width:200px;"/>
                                    </td>
                                </tr>
                            </table>

                            <center>
                                <br>
                                <hr>
                            <?php
                            include_once('../includes/dbh.inc.php');
                            if (isset($_POST['send_vio'])) {
                                $acd_num = $_POST['students'];
                                $violation_type = $_POST['categories'];

                                $sql = "INSERT INTO violations (student_ID, violation_type_id) VALUES ($acd_num, $violation_type)";

                                if (mysqli_query($conn, $sql)) {
                                    echo "<h1 style='color:red;'>تم قيد المخالفة</h1>";
                                } else {
                                    echo "خطأ: " . $sql . "" . mysqli_error($conn);
                                }
                                mysqli_close($conn);
                            }
                            ?>
                            </center>

                        </div>


                    </div>
                </section>

            </div>
        </div>
    </body>
</html>



