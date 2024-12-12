<?php
session_start();
error_reporting(0);
include('link/config.php');

if (strlen($_SESSION['alogin']) == "") {
    header("Location: index.php");
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Show Disease</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css" />
        <link rel="stylesheet" href="css/form-content.css" media="screen">
        <link rel="stylesheet" href="css/main.css" media="screen">
        <script src="js/modernizr/modernizr.min.js"></script>
        <style>
            .errorWrap {
                padding: 10px;
                margin: 0 0 20px 0;
                background: #fff;
                border-left: 4px solid #dd3d36;
                -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            }

            .succWrap {
                padding: 10px;
                margin: 0 0 20px 0;
                background: #fff;
                border-left: 4px solid #5cb85c;
                -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            }

            h5 {
                background-color: white;
                font-weight: 900;
            }

            .panel-body {
                padding: 0;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                background-color: #fff;
                border-radius: 10px;
                overflow: hidden;
                color: black;
                transition: all 0.3s ease;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                /* Adding a subtle box shadow */
            }

            th,
            td {
                padding: 15px;
                text-align: left;
                transition: background-color 0.3s ease, color 0.3s ease;
            }

            th {
                background-color: #f2f2f2;
            }

            tr:nth-child(even) {
                background-color: #e6f7ff;
            }

            tr:hover {
                background-color: #d9f0ff;
            }

            a {
                color: #000;
                text-decoration: none;
            }

            .fa-edit,
            .fa-trash-alt {
                margin-right: 10px;
            }

            .fadeIn {
                animation: fadeIn 0.5s ease-in-out;
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
            }

            .fadeOut {
                animation: fadeOut 0.5s ease-in-out;
            }

            @keyframes fadeOut {
                from {
                    opacity: 1;
                }

                to {
                    opacity: 0;
                }
            }
        </style>
    </head>

    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
            <?php include('link/topbar.php'); ?>
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">

                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>View Disease Information</h5>
                                                </div>
                                            </div>
                                            <?php if ($msg) { ?>
                                                <div class="alert alert-success left-icon-alert" role="alert">
                                                    <strong>Well done!</strong><?php echo htmlentities($msg); ?>
                                                </div><?php } else if ($error) { ?>
                                                <div class="alert alert-danger left-icon-alert" role="alert">
                                                    <strong>Oh snap!</strong> <?php echo htmlentities($error); ?>
                                                </div>
                                            <?php } ?>
                                            <div class="panel-body p-20">
                                                <table id="example" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Disease ID</th>
                                                            <th>Disease Name</th>
                                                            <th>Cause</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $sql = "SELECT disease_tb.id, disease_tb.disease_id, disease_tb.disease_name, disease_tb.cause from disease_tb";
                                                        $query = $dbh->prepare($sql);
                                                        $query->execute();
                                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                        $cnt = 1;
                                                        if ($query->rowCount() > 0) {
                                                            foreach ($results as $result) {
                                                        ?>
                                                                <tr>
                                                                    <td><?php echo htmlentities($cnt); ?></td>
                                                                    <td><?php echo htmlentities($result->disease_id); ?></td>
                                                                    <td><?php echo htmlentities($result->disease_name); ?></td>
                                                                    <td><?php echo htmlentities($result->cause); ?></td>
                                                                    <td>
                                                                        <a href="edit_disease.php?stid=<?php echo htmlentities($result->id); ?>"><i class="far fa-edit" title="Edit"></i></a>
                                                                        <a href="delete_disease.php?stid=<?php echo htmlentities($result->id); ?>" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash-alt" title="Delete"></i></a>
                                                                    </td>
                                                                </tr>
                                                        <?php $cnt = $cnt + 1;
                                                            }
                                                        } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>
        <script src="js/DataTables/datatables.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function($) {
                $('#example').DataTable();

                $('#example2').DataTable({
                    "scrollY": "300px",
                    "scrollCollapse": true,
                    "paging": false
                });

                $('#example3').DataTable();
            });
        </script>
    </body>

    </html>
<?php } ?>