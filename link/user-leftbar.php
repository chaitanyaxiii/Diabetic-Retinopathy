<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Title Here</title>
    <link rel="stylesheet" href="css/all.min.css" media="screen">
    <style>
        /* Merged and adjusted CSS Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            background-color: #f0f0f0; /* Added background color for body */
        }
        .left-sidebar {
            background-color: #349ce4;
            width: 250px;
            transition: transform 0.3s ease;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            z-index: 1000;
            overflow-y: auto;
            color: white;
            /* Updated with box-shadow */
            margin-top: 0px; /* Updated margin-top */
        }
        .left-sidebar.closed {
            transform: translateX(-100%);
        }
        li {
            padding: 10px;
            list-style: none;
            color: white; /* Font color for sidebar items */
        }
        .toggle-btn {
            position: fixed;
            left: 10px;
            top: 10px;
            z-index: 1001;
            cursor: pointer;
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
        }
        .toggle-btn {
            margin-top: 70px;
            margin-left: 250px;
        }
        .sidebar-content {
            padding: 20px;
        }
        .user-info img {
            border-radius: 50%;
            max-width: 100%;
            height: auto;
        }
        .sidebar-nav ul {
            padding: 0;
            margin: 0;
        }
        .sidebar-nav ul li a {
            text-decoration: none;
            color: white;
            display: block;
            padding: 10px;
            border-bottom: 1px solid #ddd;
            transition: background-color 0.3s ease;
        }
        .sidebar-nav ul li a:hover {
            background-color: #007BFF; /* Updated hover background color */
            color: white; /* Updated hover font color */
        }
    </style>
</head>
<body>
    <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
    <div class="left-sidebar" id="sidebar" style="margin-top: 70px;">
        <div class="sidebar-content">
            <div class="user-info closed">
                <img src="http://placehold.it/90/c2c2c2?text=User" alt="John Doe" class="img-circle profile-img">
            </div>
            <div class="sidebar-nav">
                <ul class="side-nav color-gray">
                    <li><a href="#"><span>Dashboard</span></a></li>
                    <li><a href="./retina.php"><span>CHECK RETINAL DAMAGE</span></a></li>
                    <li><a href="view-user-info.php"><span>INFO</span></a></li>
                    <li><a href="change-password-user.php"><span>CHANGE PASSWORD</span></a></li>
                    <li><a href="change-name-user.php"><span>CHANGE YOUR NAME</span></a></li>
                    <li><a href="previous-result.php"><span>SEE PREVIOUS RESULT</span></a></li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('closed');
        }
    </script>
</body>
</html>
