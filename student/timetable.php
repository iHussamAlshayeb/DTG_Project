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
 
}
 
td {
    text-align: center;
    border: 1px solid black;
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
    color: cornflowerblue;
    font-family: 'Amiri', serif;
    font-weight: 800;
}
 
#box2 {
    color: darkorange;
    font-weight: 800;
    font-family: 'Amiri', serif;
}
 
#box3 {
    color: darkviolet;
    font-weight: 800;
    font-family: 'Amiri', serif;
}
 
#box4 {
    color: green;
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
  margin-right:290px;
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
 

      </style>
      <script>
function hideTable(){
document.getElementById('table').style.visibility = "hidden";
}
function showTable(){
  var error = document.getElementById("error")
  var x= document.getElementById("input");
   if(x.value == ""){
    error.textContent = "الرجاء ادخال الرقم التدريبي"
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

<label for"id" style="text-align:center;"> الرقم التدريبي:</lable>
    <input placeholder  id="input" style="text-align:center; border: 2px solid black;width:25%;border-radius: 10px;" type="text" id="id" placeholder"الرقم التدريبي للمتدربة"/> 
    <span style="margin-right:80px;" id="error"></span>

<!-- HTML !-->
<button class="button-75" role="button" onClick="javascript:showTable()"><span class="text">إرسال</span></button>

    <br><br><br>

    <div class="overflow-x-auto w-full">

    
         
    <table id='table' class="table table-compact w-full">
    <thead>
            <tr>
               <td id="sub1">         </td>
               <td id="sub">9:00 - 10:15</td>
               <td id="sub">10:30 - 11:45</td>
               <td id="sub">11:30 - 12:30</td>
               <td id="sub">12:30 - 2:00</td>
               <td id="sub">2:00 - 3:00</td>
               <td id="sub">3:00 - 4:00</td>
              

            </tr>
         </thead>
         <tbody>
            <tr>
               <td id="sub">الاحد</td>
               <td id="blank">---</td>
               <td id="box1">رياضيات</td>
               <td id="box2">كيمياء</td>
               <td id="box3">فيزياء</td>
               <td rowspan="6">ب<br>ر<br>ي<br>ك
               <td id="box4">احياء</td>
              
            </tr>
            <tr>
               <td id="sub">الاثنين</td>
               <td id="box1">رياضيات</td>
               <td id="box2">كيمياء</td>
               <td id="box3">فيزياء</td>
               <td id="blank">---</td>
               <td id="box2">كيمياء</td>
          
            </tr>
            <tr>
               <td id="sub">الثلاثاء</td>
               <td id="box1">رياضيات</td>
               <td id="box2">كيمياء</td>
           
            </tr>
            <tr>
               <td id="sub">الاربعاء</td>
               <td id="box1">رياضيات</td>
               <td id="box2">كيمياء</td>
               <td id="box3">فيزياء</td>
               <td id="blank">---</td>
               <td id="box2">كيمياء</td>
              
              
            </tr>
            <tr>
               <td id="sub">الخميس</td>
               <td id="box1">رياضيات</td>
               <td id="box2">كيمياء</td>
               <td id="box3">فيزياء</td>
               <td id="blank">---</td>
               <td id="box4">احياء</td>
              
            </tr>
         </tbody>
      </table>

</div>



</body>
</html>