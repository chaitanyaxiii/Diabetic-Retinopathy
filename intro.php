<!DOCTYPE html>
<html lang="en"> 
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Welcome to the Disease Prediction System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" media="screen">
    <link rel="stylesheet" href="css/login.css">
    <script src="js/modernizr/modernizr.min.js"></script>
    <style> 
        body {
            background-color: white;
            width: auto;
            height: auto;
            /* margin:30 auto; */
        }
        .intro-page {
            margin-left: 100px;
            margin-right: 150px;
            margin-top: 0px;
        }
        .intro-page h2 {
            font-size: 32px;
            font-weight: 900;
            color: #499bea;
            animation: fadeInDown 1s ease-out; /* Text fade-in animation */
        }
        .intro-page p {
            color: #071c55;
            font-size: 19px;
            font-weight: 800;
            animation: slideInLeft 1s ease-out; /* Text slide-in animation */
        }
        .flex-p {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }
        .flex-p .image-p {
            flex-basis: 40%;
            max-width: 40%;
            overflow: hidden; /* Ensure image is contained within rounded borders */
            border-radius: 50%; /* Rounded corners */
            animation: slideInRight 1s ease-out; /* Image slide-in animation */
        }
        .flex-p .image-p img {
            width: 100%; /* Ensure image takes full width of its container */
            height: auto; /* Maintain aspect ratio */
        }
        .flex-p .content-p {
            flex-basis: 60%;
            max-width: 60%;
        }
        .intro-page a {
            background-color: #25dfce;
            font-size: 60px; /* Corrected typo */
            font-weight: 900;
            color: #131001;
            animation: fadeIn 1s ease-out; /* Button fade-in animation */
        }
        .intro-page button {
            background: #499bea; /* Gradient background */
            float: right;
            border-radius: 25px;
            transition: 0.5s;
            color: white;
        }
        .intro-page button:hover {
            background: #29b8e5; /* Hover gradient background */
            color: white;
            border-radius: 25px;
        }
        li {
            list-style-type: none;
            display: block;
        }
        .flex-p-inside {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin-left: 15px;
            margin-right: 10px;
        }
        .flex-p-1 {
            flex-basis: 6%;
            max-width: 53%;
            justify-content: flex-start;
        }
        .flex-p-2 {
            flex-basis: 90%;
            max-width: 91%;
        }
        .flex-p-1 li a button i {
            color: white;
        }
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>
<body>
    <?php
    include "user_login.php";
    include "signup.php";
    ?> 
    <?php include('link/user-topber.php'); ?> 
    <div class="intro-page"> 
        <div class="flex-p">
            <div class="content-p">
                <ul>
                    <li><h2>Welcome to the Diabetic Retinopathy Prediction</h2></li>
                    <li style="padding-top:30px;"><p>You’re about to use a short, safe, and anonymous Diabetic Retinopathy Disease checkup. Your answers will be carefully analyzed, and you’ll learn about possible causes of your symptoms.</p></li>
                </ul>
            </div>
            <div class="image-p"  style="margin-top: 50px;">
                <img src="doctor-testing-patient-eyesight.jpg">
            </div>
        </div>
        <div class="flex-p-inside">
            <h5><b style="color:red;font-weight:900;">NOTE:</b> Here, you can log in or check anonymously. If you don't have an account in this system, you can register yourself. Registered users can get many advantages over anonymous users. If you are already registered, simply log in using your userID and Password. It's easy and free.</h5>
            <div class="flex-p-1">
                <li><a href="index.php"><button>&lt;&lt;</button></a></li>
            </div>
            <div class="flex-p-2">
    <li><a href="policy.php"><button style="padding: 10px 20px; background-color: #207ce5; color: white; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease;">NEXT</button></a></li>
    <li><a><button onclick="document.getElementById('0303').style.display='block'" style="padding: 10px 20px; background-color: #25dfce; color: #131001; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease; animation: fadeIn 1s ease-out; margin-right:15px;">Register</button></a></li>
    <li><a><button onclick="document.getElementById('1111111111').style.display='block'" style="padding: 10px 20px; background-color: #29b8e5; color: white; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease; animation: fadeIn 1s ease-out; margin-right:20px;">Login</button></a></li>
    <!-- class="homepage-button" -->
</div>

        </div>
    </div>
    <!-- /.main-wrapper -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(function($) {
            $(".js-states").select2();
            $(".js-states-limit").select2({
                maximumSelectionLength: 2
            });
            $(".js-states-hide").select2({
                minimumResultsForSearch: Infinity
            });
        });
    </script>
</body>
</html>
