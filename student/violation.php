<!DOCTYPE html>

<html lang="ar" dir="rtl">

<head>
    <title>خدمات المتدربة</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="../style/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style/style.css">
    <style>
    @import url(https://fonts.googleapis.com/earlyaccess/amiri.css);
    </style>
</head>

<body>
    <script src="js/jquery-3.4.1.js"></script>

    <div class="header">
        <a href="S_Service.php">
            <img class="logo" src="../images/logo.svg" alt="" style="width:170px;margin-right: 5%;" /></a>
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
                            <tr>
                                <td>
                                    <h1
                                        style="color:black;border-left: 5px solid #aae3f1 ; font-family: 'Amiri', serif; font-size: 2.4rem; ">
                                        المخالفات..</h1>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../images/veu.webp" style="width:150px;" />
                                </td>
                            </tr>
                        </table>

                        <table id="tablevio">
                            <form action="violation.php" method="POST">
                                <tr>
                                    <td>
                                        <label>الرقم التدريبي للمتدربة:</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                            include('../includes/dbh.inc.php');

                                            $query = "SELECT * FROM students ORDER BY student_ID ASC LIMIT  0,6";
                                            $result = mysqli_query($conn, $query);
                                            ?>

                                        <select id="select_page" name="students">
                                            <?php
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<option value=".$row['student_ID'].">" . $row['student_ID'] . "</option>";
                                                }
                                                ?>
                                        </select>
                                        <!--<input id="academic_num" name="academic_num" required type="text" placeholder="ادخل الرقم التدريبي">-->
                                    </td>
                                </tr>



                                <tr>
                                    <td>
                                        <input type="submit" name="std_info" id="std_info" class="bn47"
                                            value="عرض"></button>
                                    </td>
                                </tr>
                            </form>
                        </table>



                    </div>


                </div>
                <br>
            </section>
            <div class="viloation_student">
                <?php include_once('../includes/pd.inc.php'); ?>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        //change selectboxes to selectize mode to be searchable
        $("select").select2();
    });
    </script>
</body>

</html>