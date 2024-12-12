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
        }
        .top-navbar {
            background-color: #77b5e5; /* Lighter shade of #349ce4 */
            color: white; /* Font color set to white */
            box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Optional: Adds a subtle shadow */
        }
        .navbar-brand {
            color: white; /* Font color for brand */
        }
        .navbar-toggle {
            border-color: white; /* Border color for toggle button */
        }
        .navbar-nav > li > a {
            color: white !important; /* Font color for links */
        }
        .navbar-nav > li > a:hover,
        .navbar-nav > li > a:focus {
            background-color: #5cafe2; /* Darker shade on hover */
        }
        .navbar-nav.navbar-right > li > a {
            color: white !important; /* Font color for right-aligned links */
        }
        .navbar-nav.navbar-right > li > a:hover,
        .navbar-nav.navbar-right > li > a:focus {
            background-color: #5cafe2; /* Darker shade on hover */
        }
    </style>
</head>
<body>
    <nav class="navbar top-navbar bg-white box-shadow">
        <div class="container-fluid">
            <div class="row">
                <div class="navbar-header no-padding">
                    <a class="navbar-brand" href="admin_edit_choice.php">
                        Admin Dashboard 
                    </a>
                    <span class="small-nav-handle hidden-sm hidden-xs"></span>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        
                    </button> 
                    <button type="button" class="navbar-toggle mobile-nav-toggle">
                        
                    </button>
                </div>
                <!-- /.navbar-header -->

                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <!-- <li class="hidden-xs hidden-xs"><a href="#">My Tasks</a></li> -->
                    </ul>
                    <!-- /.nav navbar-nav -->

                    <ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <li><a href="admin_logout.php" class="color-danger text-center" onclick="return confirm('Are you sure you want Logging out the system?');">Logout</a></li>
                    </ul> 
                    <!-- /.nav navbar-nav navbar-right -->
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</body>
</html>
