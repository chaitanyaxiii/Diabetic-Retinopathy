
<?php
session_start();
error_reporting(0);
include('includes/config.php');

if (strlen($_SESSION['alogin']) == "") {
    header("Location: index.php");
} else
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
    <title>Focal Bulge Overview</title>
</head>
<body>
<?php include('link/topbar.php'); ?>
<div class="container" style="width:100%;">
<h2>Understanding Irregilarr</h2>
    <p>Irregilarr occurs when the blood vessels in the retina become damaged, often due to prolonged high blood sugar levels associated with diabetes. This condition can lead to leakage of blood or other fluids, causing the retinal tissue to swell. Over time, this can result in vision problems or even blindness. Irregilarr is commonly found in people with uncontrolled diabetes, where the retinal blood vessels undergo significant stress and damage.</p>

    <h2>Causes of Irregilarr</h2>
    <ul>
        <li><strong>Prolonged High Blood Sugar:</strong> Consistently high blood sugar levels can damage blood vessels in the retina, leading to leakage and swelling.</li>
        <li><strong>High Blood Pressure:</strong> Elevated blood pressure can strain the blood vessels in the eyes, contributing to retinal damage.</li>
        <li><strong>High Cholesterol:</strong> High levels of cholesterol can cause fatty deposits in the blood vessels, worsening retinal damage.</li>
        <li><strong>Genetic Factors:</strong> A family history of diabetes or eye diseases can increase the risk of developing irregilarr.</li>
        <li><strong>Smoking:</strong> Smoking exacerbates vascular damage and increases the risk of retinal diseases.</li>
    </ul>

    <h2>Symptoms of Irregilarr</h2>
    <ul>
        <li><strong>Blurry Vision:</strong> Vision may become blurred, especially during high blood sugar episodes.</li>
        <li><strong>Dark Spots or Floaters:</strong> Small dark spots or floaters may appear in the field of vision due to bleeding in the retina.</li>
        <li><strong>Vision Loss:</strong> Partial or complete loss of vision can occur if the retinal damage is severe.</li>
        <li><strong>Difficulty with Color Perception:</strong> Trouble distinguishing colors may be experienced as a result of retinal damage.</li>
    </ul>

    <h2>Prevention of Irregilarr</h2>
    <ul>
        <li><strong>Control Blood Sugar Levels:</strong> Keep blood sugar levels within the target range through diet, medication, and regular monitoring.</li>
        <li><strong>Manage Blood Pressure:</strong> Maintain healthy blood pressure to reduce strain on the retinal blood vessels.</li>
        <li><strong>Monitor Cholesterol Levels:</strong> Keep cholesterol levels in check to prevent fatty deposits in the blood vessels.</li>
        <li><strong>Regular Eye Exams:</strong> Have regular eye examinations to detect early signs of retinal damage.</li>
        <li><strong>Quit Smoking:</strong> Smoking cessation is crucial for reducing the risk of vascular damage in the eyes.</li>
        <li><strong>Healthy Diet and Exercise:</strong> Maintain a balanced diet and regular physical activity to support overall health and vascular integrity.</li>
    </ul>

    <h2>Treatment Options</h2>
    <p>If irregilarr symptoms develop despite preventive measures, various treatment options are available:</p>
    <ul>
        <li><strong>Medical Management:</strong> This includes controlling blood sugar, blood pressure, and cholesterol levels with medications and lifestyle changes.</li>
        <li><strong>Laser Treatment:</strong> Laser therapy can seal leaking blood vessels and reduce retinal swelling.</li>
        <li><strong>Injections:</strong> Anti-VEGF injections can reduce retinal swelling and prevent further vision loss.</li>
        <li><strong>Surgical Interventions:</strong> In advanced cases, vitrectomy surgery may be necessary to remove blood or scar tissue from the retina.</li>
    </ul>

    <p>Understanding the causes, symptoms, and preventive measures of irregilarr is essential for managing eye health effectively and minimizing its impact on daily life.</p>
</div>
</body>
</html>
