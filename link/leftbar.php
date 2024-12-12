<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css" media="screen">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
        }
        .left-sidebar {
            background-color: #349ce4; /* Updated background color */
            width: 250px;
            transition: transform 0.3s ease;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            z-index: 1000;
            overflow-y: auto;
            color: white; /* Font color set to white */
        }
        .left-sidebar.closed {
            transform: translateX(-100%);
        }
        li {
            padding: 10px;
            list-style: none;
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
            color: white; /* Font color for links set to white */
            display: block;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .sidebar-nav ul li a:hover {
            background-color: #f0f0f0;
            color: #349ce4; /* Hover background color and font color */
        }
    </style>
</head>
<body>
    <button class="toggle-btn" onclick="toggleSidebar()">☰<style>
        .toggle-btn {
            margin-top: 70px;
            margin-left: 250px;
        }
    </style></button>
    <div class="left-sidebar" id="sidebar" style="margin-top: 65px;">
        <div class="sidebar-content">
            <!-- <div class="user-info">
                <img src="http://placehold.it/90/c2c2c2?text=User" alt="John Doe" class="img-circle profile-img">
            </div> -->
            <!-- /.user-info -->

            <div class="sidebar-nav">
                <ul>
                    <li><a href="admin_edit_choice.php">Dashboard</a></li>
                    <li><a href="show_symptoms.php">VIEW SYMPTOMS</a></li>
                    <li><a href="show_disease.php">VIEW DISEASE</a></li>
                    <li><a href="add_symptoms.php">ADD SYMPTOMS</a></li>
                    <li><a href="add_disease.php">ADD DISEASE</a></li>
                    <li><a href="add-admin.php">ADD ADMIN</a></li>
                    <li><a href="teerms.php" onclick="return confirm('Redirecting to you as a general user .');">ADMIN CHECKUPS</a></li>
                    <li><a href="show-feedback.php">FEEDBACK</a></li>
                    <li><a href="view_users.php">VIEW USERS</a></li>
                    <li><a href="change_password_admin.php">CHANGE PASSWORD</a></li>
                    <li><a href="change-admin-name.php">CHANGE YOUR NAME</a></li>
                </ul>
            </div>
            <!-- /.sidebar-nav -->
        </div>
        <!-- /.sidebar-content -->
    </div>

    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('closed');
        }
    </script>
</body>
</html>
