<?php
session_start();
error_reporting(0);
include('includes/config.php');

if (strlen($_SESSION['alogin']) == "") {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css" /> 
   
    <style>
        .container {
            width: 80%;
            margin: 0 auto; /* Center align the container */
            text-align: left; /* Align text inside container to left */
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 10px;
            animation: fadeIn 1s ease; /* Example animation */
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .container p {
            line-height: 1.6;
        }

        .container ul {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .container ul li {
            margin-bottom: 5px;
        }
    </style>
    <title>Fusi Form Disease Overview</title>
</head>
<body>
    <?php include('link/topbar.php'); ?>

    <div class="container">
        <p>Fusi Form Disease refers to a rare genetic disorder characterized by...</p>

        <ul>
            <li><strong>Causes:</strong></li>
            <ul>
                <li>Genetic Mutation: Fusi Form Disease is caused by mutations in specific genes...</li>
                <li>Biological Mechanism: The disease affects...</li>
            </ul>

            <li><strong>Symptoms:</strong></li>
            <ul>
                <li>Characteristic Symptoms: Patients typically experience...</li>
                <li>Progression: Symptoms worsen over time, leading to...</li>
            </ul>

            <li><strong>Diagnosis:</strong></li>
            <ul>
                <li>Genetic Testing: Diagnosis often involves genetic testing to identify...</li>
                <li>Clinical Evaluation: Doctors also conduct...</li>
            </ul>

            <li><strong>Treatment:</strong></li>
            <ul>
                <li>Management Approaches: Currently, there is no cure for Fusi Form Disease...</li>
                <li>Symptomatic Relief: Treatment focuses on managing symptoms...</li>
            </ul>
        </ul>

        <p>Patients with Fusi Form Disease require ongoing medical care and support...</p>
    </div>
</body>
</html>
