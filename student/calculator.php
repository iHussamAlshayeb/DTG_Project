<!DOCTYPE html>

<html lang="ar" dir="rtl">

<head>
    <title>خدمات المتدربة</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="../style/style.css">
   

</head>

<body>
    <script src="js/jquery-3.4.1.js"></script>

<?php include('header.php')?>
    <div class="separador"></div>
    <div class="contant">

        <section class="tech_services">

            <div class="s-heading">
                <table>
                    <tr>
                        <td>
                            <h1
                                style="color:black;border-left: 5px solid #85e3c8 !important;  font-size: 2.4rem; margin-left: 580px; margin-top:10%;">
                                حاسبة الحرمان.. </h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="../images/calse.png" style="width:220px;margin-left: 73%;" />
                        </td>
                    </tr>
                </table>

            </div>
            <div>
                <div class="conCalo">
                    <table>

                        <tr>

                            <td>
                                <label>اختر المقرر:</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select id="select">
                                    <option disabled selected>المقررات</option>
                                    <option value="2" data-othervalue="19">توجيه مهني و التميز</option>
                                    <option value="4" data-othervalue="19">الخوارزميات و المنطق</option>
                                    <option value="2" data-othervalue="19">دراسات اسلامية </option>
                                    <option value="4" data-othervalue="19">رياضيات</option>
                                    <option value="5" data-othervalue="19">فيزيا</option>
                                    <option value="8" data-othervalue="19">تجميع الحاسب وتشغيله</option>
                                    <option value="4" data-othervalue="19">لغة انجليزية ١</option>
                                    <option value="6" data-othervalue="19">اساسيات برمجه الحاسب</option>
                                    <option value="2" data-othervalue="19">كتابة فنيه</option>
                                    <option value="4" data-othervalue="19">لغة انجليزية ٢</option>
                                    <option value="6" data-othervalue="19">مبادئ صفحات انترنت</option>
                                    <option value="6" data-othervalue="19">مبادىء قواعد بيانات </option>
                                    <option value="4" data-othervalue="19">مقدمة تطبيقات حاسب</option>
                                    <option value="2" data-othervalue="19">مهارات تعلم</option>
                                    <option value="6" data-othervalue="19">برمجه انترنت </option>
                                    <option value="6" data-othervalue="19">برمجه حاسب </option>
                                    <option value="6" data-othervalue="19">برمجة قواعد</option>
                                    <option value="4" data-othervalue="19">تطبيقات حاسب</option>
                                    <option value="4" data-othervalue="19">لغه انجليزية ٣</option>
                                    <option value="4" data-othervalue="19">هندسة برمجيات</option>
                                    <option value="4" data-othervalue="19">لغةٍ انجليزية ٤</option>
                                    <option value="2" data-othervalue="19">سلوك وظيفي </option>
                                    <option value="6" data-othervalue="19">تقنيات الانترنت</option>
                                    <option value="6" data-othervalue="19">برمجة اجهزة</option>
                                    <option value="2" data-othervalue="19">تاهيل لشهادات</option>
                                    <option value="6" data-othervalue="19">مشروع</option>
                                </select>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <label>عدد ساعات الإسبوع</label>
                            </td>
                        </tr>
                        <tr>

                            <td>
                                <input readonly class="myinput" type="text" id="otherValue" name="otherValue">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">

                                <label>عدد الساعات التدريبية</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="myinput" id="someOtherValue" name="someOtherValue">
                            </td>
                        </tr>

                        <tr>
                            <td>

                                <p>نسبة الغياب = <b>٪</b></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input readonly class="myinput" type="text" name="calvalue" id="calvalue">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!-- <button onclick="calculateone()" >حساب</button> -->
                            </td>

                        </tr>

                    </table>
                </div>

            </div>


        </section>
    </div>
    </div>



    <script>
    $('#select').change(function() {
        var otherValue = $(this).find('option:selected').attr('value');
        var someOtherValue = $(this).find('option:selected').attr('data-othervalue');
        $('#otherValue').val(otherValue);
        $('#someOtherValue').val(someOtherValue);

        var calcvalue = (otherValue * someOtherValue * 20) / 100;
        $('#calvalue').val(calcvalue + "%");
    });

    $('#someOtherValue').change(function() {
        var otherValue = $("#otherValue").val();
        var someOtherValue = $("#someOtherValue").val();
        var calcvalue = (otherValue * someOtherValue * 20) / 100;
        $('#calvalue').val(calcvalue + "%");
    });

    // var otherValue = $("#otherValue").val();
    // var someOtherValue = $("#someOtherValue").val();
    // var absent = $("#absent").val();

    // var calcvalue = (otherValue * someOtherValue * 20) / 100;

    // //#new is my input box id


    // $('#calvalue').val(calcvalue + "%");

    $(document).ready(function() {
        //change selectboxes to selectize mode to be searchable
        $("select").select2();
    });
    </script>
</body>

</html>