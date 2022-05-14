<?php include('header.php');?>


<!DOCTYPE html>
<html dir="rtl" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../style/style.css">
    
    <title>الجدول التدريبي</title>
    <style>
      @import url(https://fonts.googleapis.com/earlyaccess/amiri.css);
      th,td{
        text-align:center;
      }
      #table {
    margin-top: 2%;
    width: max-content;
    border: 1px solid black;
    height: 300px;
    margin-right:110px;
 
}
 
td {
    text-align: center;
    border: 1px solid black;
    width:155px;
}
 
#blank {
    color: #000;
    background-color: #fff;
}
 
#s {
    font-weight: 800;
    text-transform: uppercase;
    font-family: 'Amiri', serif;
    background-color: #ffffff;
}
 
#seminar {
    font-weight: 800;
    font-family: 'Amiri', serif;
    background-color: #ffffff;
    text-transform: uppercase;
}
 
#sub {
    color: black;
    font-family: 'Amiri', serif;
    font-weight: 400;
    background-color: #ffffff;
}
 
#sub1 {
    background-color: #fff;
}
 
#sub2 {
    color: black;
  
    background-color: #ffffff;
}
 
#sub3 {
    background-color: #ffffff;
    font-family: 'Amiri', serif;
    font-weight: 800;
}
 
#box1 {
    color: darkblue;
    font-family: 'Amiri', serif;
    font-weight: 800;
}
 
#box2 {
    color: darkred;
    font-weight: 800;
    font-family: 'Amiri', serif;
}
 
#box3 {
    color: darkviolet;
    font-weight: 800;
    font-family: 'Amiri', serif;
}
 
.button-75 {
  align-items: center;
  background-image: linear-gradient(135deg, #f34079 40%, #fc894d);
  border: 0;
  border-radius: 10px;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: flex;
  flex-direction: column;
  font-family: "Codec cold",sans-serif;
  font-size: 16px;
  font-weight: 700;
  height:33px;
  justify-content: center;
  letter-spacing: .4px;
  line-height: 1;
  max-width: 100%;
  padding-left: 20px;
  padding-right: 20px;
  padding-top: 3px;
  text-decoration: none;
  text-transform: uppercase;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  margin-right:216px;
  margin-top:-30px;
}

.button-75:active {
  outline: 0;
}

.button-75:hover {
  outline: 0;
}

.button-75 span {
  transition: all 200ms;
}

.button-75:hover span {
  transform: scale(.9);
  opacity: .75;
}

@media screen and (max-width: 991px) {
  .button-75 {
    font-size: 15px;
    height: 50px;
  }

  .button-75 span {
    line-height: 50px;
  }
}
select{
  width:130px;
}

      </style>
      <script>
function hideTable(){
document.getElementById('table').style.visibility = "hidden";
}
function showTable(){
  var error = document.getElementById("error")
  var x= document.getElementById("input");
   if(x.value == "اختاري"){
    error.textContent = "الرجاء اختيار الرقم التدريبي"
            error.style.color = "red"
            x.style.borderColor = "red"
    return false; 
   }else{


   document.getElementById('table').style.visibility = "visible";
   error.textContent = ""
   x.style.borderColor = "blue"
   return true;
   }
}
        </script>
</head>
<body class="container mx-auto" onload="javascript:hideTable()">
    
<div class="separador"></div>
<div class="contantTime">

<label for="id" style="text-align:center;"> الرقم التدريبي:</lable>
    <!-- <input placeholder  id="input" style="text-align:center; border: 2px solid black;width:25%;border-radius: 10px;" type="text" id="id" placeholder"الرقم التدريبي للمتدربة"/>  -->
    <?php
                                            include('../includes/dbh.inc.php');

                                            $query = "SELECT * FROM students ORDER BY student_ID ASC LIMIT  0,6";
                                            $result = mysqli_query($conn, $query);
                                            ?>

                                        <select id="input" name="students">
                                          <option disabled selected>اختاري</option>
                                            <?php
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<option value=".$row['student_ID'].">" . $row['student_ID'] . "</option>";
                                                }
                                                ?>
                                        </select>
    <span style="margin-right:80px;" id="error"></span>

<!-- HTML !-->
<button class="button-75" role="button" onClick="javascript:showTable()"><span class="text">عرض</span></button>

    <br><br><br>

    <div class="overflow-x-auto w-full">

    
         
    <table id='table' class="table table-compact w-full">
    <thead>
          
         </thead>
         <tbody>
            <tr>
               <td id="sub"><strong>الاحد</strong></td>
               <!-- <td id="blank">---</td> -->
               <td id="box1">مشروع
                 <br>
                 7:30 - 9:40
               </td>
               <td id="box2">تقنيات انترنت
               <br>
                 9:40 - 11:40
               </td>
               <td id="box3">برمجة أجهزة
               <br>
                 12:20 - 2:20
               </td>
              
              
            </tr>
            <tr>
            <td id="sub"><strong>الاثنين</strong></td>
               <td id="box1">سلوك وظيفي
               <br>
                 7:30 - 9:40
               </td>
               <td id="box2">برمجة أجهزة

              <br>
                 9:40 - 11:40
               </td>
               <td id="box3">تقنيات انترنت

               <br>
                 12:20 - 2:20
               </td>
          
          
            </tr>
            <tr>
            <td id="sub"><strong>الثلاثاء</strong></td>
               <td id="box1">لغة انجليزية

               <br>
                 7:30 - 9:40
               </td>
               <td id="box2">تأهيل لشهادات
               <br>
                 9:40 - 11:40 او 7:30 م
               </td>
               <td id="box3"> مشروع

                     <br>
                   12:20 - 2:20
                    </td>
           
            </tr>
            <tr>
            <td id="sub"><strong>الاربعاء</strong></td>
               <td id="box1">برمجة أجهزة
               <br>
                 7:30 - 9:40
               </td>
               <td id="box2" >تقنيات انترنت
               <br>
                 9:40 - 11:40
               </td>
               <td id="blank">---</td>
             
              
              
            </tr>
            <tr>
            <td id="sub"><strong>الخميس</strong></td>
               <td id="box1">مشروع
                 <br>
                 7:30 - 9:40
               </td>
               <td id="box2">لغة انجليزية
               <br>
                 9:40 - 11:40
               </td>
            
               <td id="blank">---</td>
              
              
            </tr>
         </tbody>
      </table>

</div>



</body>
</html>