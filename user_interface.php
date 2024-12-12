<?php
session_start();
error_reporting(0);
include('includes/config.php');

if (strlen($_SESSION['alogin']) == "") {
  header("Location: index.php");
} else {
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114312764-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-114312764-1');
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="author" content="Disease Prediction System ">

    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css" />
    <link rel="stylesheet" href="css/main.css" media="screen">
    <link rel="stylesheet" href="css/all.min.css" media="screen">
    <title>Disease Prediction System effected by diabties ||User DashBoard </title>



    <link href='https://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
    <link href="css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css" />
    <link rel="stylesheet" href="css/main.css" media="screen">
    <script src="js/modernizr/modernizr.min.js"></script>




    <!-- Facebook Pixel Code -->
    <style>
      body {
        background-color: #F0F0F0;
        width: auto;
        height: auto;
        align-items: center;
      }

      .flex-p {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
      }

      .flex-p .content-p {
        flex-basis: 100%;
        max-width: 100%;
        padding: 21px;
        justify-content: center;
        margin-left: 200px;
        /* Adjust margin to ensure images are not hidden behind the sidebar */
      }

      .image-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        /* Two images per row */
        gap: 15px;
        /* Increased padding between images */
        justify-content: center;
      }

      .image-grid .image-item {
        position: relative;
        height: 200px;
        overflow: hidden;
        animation: slideIn 1s forwards;
        border-radius: 10px;
        /* Added border radius */
      }

      .image-grid img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease, box-shadow 0.5s ease;
        border-radius: 10px;
        /* Ensure border radius on images */
        margin-right: -100px;
      }

      .image-grid img:hover {
        transform: scale(1.1);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
      }

      .image-grid .image-description {
        position: absolute;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        color: white;
        width: 100%;
        text-align: center;
        padding: 5px 0;
        border-radius: 0 0 10px 10px;
        /* Rounded corners for description */
      }

      @keyframes slideIn {
        from {
          transform: translateX(-100%);
        }

        to {
          transform: translateX(0);
        }
      }

      .nnnnn .nnnnn1 {
        list-style-type: none;
        padding: 4px;
      }

      .nnnnn .nnnnn1 a {
        color: white;
        font-size: 16px;
        text-decoration: none;
        font-weight: 800;
      }

      .nnnnn .nnnnn1 a:hover {
        color: white;
      }

      .nnnnn .nnnnn1 button {
        background: blue;
        color: white;
        border-radius: 19px;
      }

      .nnnnn .nnnnn1 button:hover {
        background: #05011d;
        border-radius: 22px;
        transition: 0.5s;
      }
    </style>



  </head>

  <body>
    <div class="main-wrapper">

      <!-- ========== TOP NAVBAR ========== -->
      <?php include('link/user-topber.php'); ?>

      <div class="content-wrapper">
        <div class="content-container">

          <?php include('link/user-leftbar.php'); ?>
          <div class="flex-p">
            <div class="content-p">
              <div class="image-grid">
                <div class="image-item">
                  <img src="Focal Bulg.jpeg" alt="Focal Bulg">
                  <a href="FocalBulg.php">
                    <div class="image-description">Focal Bulg</div>
                  </a>
                </div>
                <div class="image-item">
                  <img src="FusiForm.jpeg" alt="Fusi Form">
                  <a href="Fusi-Form.php">
                    <div class="image-description">Fusi Form</div>
                  </a>
                </div>
                <div class="image-item">
                  <img src="Irregilar.jpeg" alt="Irregular">
                  <a href="irrigeular.php">
                    <div class="image-description">Irregilarr</div>
                  </a>
                </div>
                <div class="image-item">
                  <img src="Penddda.jpeg" alt="Penddda">
                  <a href="Pendda.php"><div class="image-description">Pendunculated</div></a>
                </div>
                <div class="image-item">
                  <img src="Saccaric.jpeg" alt="Saccaric">
                  <a href="Saccaric.php"><div class="image-description">Saccular Fusi Form</div></a>
                </div>
                <div class="image-item">
                  <img src="Scaccular.jpeg" alt="Scaccular">
                  <a href="Sacular.php"><div class="image-description">Saccular</div></a>
                </div>
              </div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div><!--preview-->



    <div class="scroll-top"><span class="scroll-top-icon"></span></div>

    <div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h3 class="modal-title">Modal Window Example!</h3>
          </div>
          <div class="modal-body">
            <p>You can open a modal window like this one instead of opening a link.</p>
            <p class="alert alert-success">You can write as much information as you want in the modal window including <strong>clickable links</strong> and large images.</p>
            <p>Please read the description for more information.</p>
          </div>
        </div>
      </div>
    </div><!-- end mymodal -->

    <span id="organs-tip"></span>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- <script src="https://www.humananatomyillustrations.com/assets/js/bootstrap.min.js"></script> -->
    <script src="js/malefemale.min.js"></script>
    <script src="js/jquery/jquery-2.2.4.js"></script>


    <script src="js/malefemale.min.js"></script>

    <!--scroll-top script-->
    <script>
      $(function() {
        $(document).on('scroll', function() {
          if ($(window).scrollTop() > 600) {
            $('.scroll-top').addClass('show');
          } else {
            $('.scroll-top').removeClass('show');
          }
        });
        $('.scroll-top').on('click', scrollToTop);
      });

      function scrollToTop() {
        verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
        element = $('body');
        offset = element.offset();
        offsetTop = offset.top;
        $('html, body').animate({
          scrollTop: offsetTop
        }, 500, 'linear');
      }
    </script>
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
<?PHP } ?>