<?php
include_once('includes/dbh.inc.php');
include_once('includes/pd.inc.php');
?>

<!DOCTYPE html>

<html lang="ar" dir="rtl">

<head>
    <title>تسجيل الدخول </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>

<?php include('header.php');?>
    <div class="separador"></div>
    <div class="overlay">


    <div class="flex items-center justify-center min-h-screen background-blend-mode: overlay">
            <div class="px-8 py-6 mt-4 text-right bg-white shadow-lg">
                <div class="flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-green-700" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-center">تسجيل الدخول لحسابك</h3>
                <form action="login.php" method="post" name="myForm" autocomplete="on">
                    <div class="mt-4">
                        <div>
                            <label class="block" for="username">اسم المستخدم<label>
                                    <input type="text" placeholder="اسم المستخدم" name="username"
                                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        </div>
                        <div class="mt-4">
                            <label class="block">كلمة المرور<label>
                                    <input type="password" placeholder="كلمة المرور" name="password"
                                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        </div>
                    <span style="color:red;"><strong><?php include('error.php'); ?></strong></span>

                        <div class="flex items-baseline justify-between">
                            <button name="log_in"
                                class="px-6 py-2 mt-4 text-white bg-blue-700 rounded-lg hover:bg-blue-900">الدخول</button>
                            <a href="#" class="text-sm text-blue-600 hover:underline">نسيت كلمة المرور؟</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.tailwindcss.com"></script>


        <!-- <form name="myForm" method="post" action="login.php" class="login_form">

            <div >
                <h2>تسجيل الدخول</h2>
                <div>
                    <span>
                        <i class="fa fa-user-circle"></i>
                    </span>

                    <input  id="username" name="username" type="text" placeholder="اسم المستخدم"
                        required />
                    <br>
                    <span class="input-item">
                        <i class="fa fa-key"></i>
                    </span>
                    <input class="form-input" id="password" name="password" type="password" placeholder="كلمة المرور"
                        required />


                    <span style="color:red;"><strong><?php include('error.php'); ?></strong></span>

                    <input class="log-in" id="log_in" name="log_in" type="submit" value="دخول">

                </div>

            </div>
        </form>
    </div> -->


    <script src="https://cdn.tailwindcss.com"></script>

</body>

</html>