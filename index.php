<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diabetic Retinopathy</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/login.css">
    <style>
        body {
            position: relative;
            background: none;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url("Background.jpg");
            background-size: cover;
            /* opacity: ; */
            z-index: -1;
        }

        @keyframes slideIn {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <?php
    include "login.php";
    ?>
    <section class="container content">
        <div class="hompage">
            <h1 style="color: white; animation: slideIn 2s ease-in-out forwards;">Diabetic Retinopathy Detecetion</h1>
            <h2 style="animation: slideIn 2.5s ease-in-out forwards;">What concerns you about your Diabetics today?</h2>
            <p style="animation: slideIn 3s ease-in-out forwards;">Diabetes greatly impacts the body; check concerns and please login.</p>
            <ul style="animation: slideIn 3.5s ease-in-out forwards;">
                <li>
                    <button class="btn btn-primary" onclick="document.getElementById('id01').style.display='block'" style="width:auto; padding: 10px 20px; border-radius: 10px; font-size: 16px; cursor: pointer;">
                        <a style="color: black; text-decoration: none;">Login as Admin</a>
                        </button>
                </li>
                <li><button class="btn btn-success" style="background-color: green; width:auto; padding: 10px 20px; border-radius: 10px; font-size: 16px; cursor: pointer;"><a href="intro.php" style="color: white; text-decoration: none;">Start Checkups</a></button></li>
            </ul>
        </div>
    </section>

    <!-- The Modal -->

</body>

</html>