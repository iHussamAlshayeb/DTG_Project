<?php

session_start();

$error = array();

include_once('dbh.inc.php');

if (isset($_POST['std_info'])) {



    $acd_num = mysqli_real_escape_string($conn, strip_tags($_POST['students']));

    $sql = "SELECT * From `violations` inner join `violations_type` on violations.`violation_type_id` = `violations_type`.`violation_type_id` inner join `students` on violations.`student_ID` = students.`student_ID` where students.student_ID = $acd_num";




    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);


    if ($resultCheck > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $violation_id = $row['violation_id'];
            $student_id = $row['student_ID'];
            $violation_type_id = $row['violation_type_id'];
            $violation_name = $row['violation_name'];
            $violation_description = $row['violation_description'];
            $student_name = $row['student_name'];
            $student_email = $row['student_email'];

            echo

            '     
        
<ul>
<i class="fa fa-ban"></i>
<li><strong>رقم المخالفة: </strong>' . $violation_id . '</li>
<li><strong>رقم المتدربة: </strong>' . $student_id . '</li>
  <li><strong>نوع المخالفة:</strong> ' . $violation_name . '</li>
  <li><strong>وصف المخالفة: </strong>' . $violation_description . '</li>
  <li><strong>اسم المتدربة: </strong>' . $student_name . '</li>
  <li><strong>الايميل: </strong>' . $student_email . '</li>
</ul>
<br>
';
        }
    }
}

if(isset($_POST['send_vio'])) {


    $acd2_num = mysqli_real_escape_string($conn, strip_tags($_POST['students']));
    $violation_type = $_POST['categories'];
    if (!empty($_POST['categories'])) {
        $selected = $_POST['categories'];
        echo 'You have chosen: ' . $selected;
    } else {
        echo 'Please select the value.';
    }

    $sql = "INSERT INTO violations (student_ID, violation_type_id) VALUES ($acd_num, $violation_type)";
//    
//    if (mysqli_query($conn, $sql)) {
//        echo "New record created successfully";
//    } else {
//        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//    }
//
//    mysqli_close($conn);
}



if (isset($_POST['log_in'])) {

    $username = mysqli_real_escape_string($conn, strip_tags($_POST['username']));
    $password = mysqli_real_escape_string($conn, strip_tags($_POST['password']));


    if (empty($username)) {

        array_push($error, "Username is Required");
    }

    if (empty($password)) {
        array_push($error, "Password is required");
    }

    if (count($error) == 0) {



        $query = "SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1";
        $results = mysqli_query($conn, $query);
        $resultCheck = mysqli_num_rows($results);

        if ($resultCheck == 1) {
            $row = mysqli_fetch_assoc($results);
            $userType = $row['type'];

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "تم تسجيل الدخول بنجاح";

            if ($userType == 'teacher') {
                $_SESSION['success'] = "تم تسجيل الدخول بنجاح";
                header("Location: teacher/T_Service.php");
            } else if ($userType == 'student') {
                $_SESSION['success'] = "تم تسجيل الدخول بنجاح";
                header("Location: student/S_Service.php");
            } else {
                echo '<h1>Error</h1>';
            }
        } else {


            array_push($error, "اسم المستخدم او كلمة المرور خاطئة");
        }
    }
}
    
    