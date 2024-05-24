<?php
session_start();

$studentName = $_GET['studentName'] ?? '';
$xml = simplexml_load_file("../XMLFile/reservation.xml");

if ($xml === false) {
    echo "Failed to load XML file.";
    exit;
}

$lastReservation = $xml->reservation[count($xml->reservation) - 1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled XML Data</title>
    <style>
        body {
            background-color: khaki;
        }
        header{
            background-color: maroon;
            height: 90px;
            border-radius: 30px;
        }
        header button{
            background-color: ;
        }
        header img{
            margin-left: -30px;
            margin-top: 40px;
        }
        header h1 {
            margin-top: -60px;
            margin-left: 30px;
            color: white;
            font-size: 22px;
            font-weight: bold;
        }
        header a {
            font-size: 30px;
            margin-left: -20px;
            text-decoration: none;
            transition : transform 0.3 ease;
            color: black;
        }
        header a:hover {
            transform: scale(1.1);

        }
        .logo{
            margin-left: 50px;
            float: left;
            margin-top: -30px;
        }
        .bell {
            float: right;
            margin-right: 120px;
            margin-top: -30px; 
            padding:10px;
        }
        .profile {
            float: right;
            margin-top: -30px; 
            padding:10px;
            margin-right: -100px;
        }
        .reservation {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid black;
        }
        .title {
            font-weight: bold;
        }

        .duration {
            font-weight: bold;
        }

        .pickup-date {
            color: blue;
        }

        .pickup-time {
            color: green;
        }
        h2 {
            margin-left: 100px;
        }
    </style>
</head>
<body>
     <header class="header">
        <div class="logo">
            <img src="../images/msc.png" width="50px" height="70px">
             <h1>Learning Resource Center<br>Reserve Your Reading Adventure</h1>
             <a href= " ../lrcweb/home.php">«</a>
        </div>
             <div class="bell">
            <img src="../images/bell.png" width="50px" height="50px">
        </div>
        <div class="profile">
             <img src="../images/profile.png" width="50px" height="50px">
        </div>
    </header>
   

    <h2>Reservation List</h2>
    <?php foreach ($xml->reservation as $reservation): ?>
        <div class="reservation">
            <p><span class="title">Title:</span> <?php echo htmlspecialchars($reservation->title); ?></p>
            <p><span class="student-name">Student Name:</span> <?php echo htmlspecialchars($reservation->student_name); ?></p>
            <p><span class="duration">Duration:</span> <?php echo htmlspecialchars($reservation->duration); ?></p>
            <p><span class="pickup-date">Pickup Date:</span> <?php echo htmlspecialchars($reservation->pickup_date); ?></p>
            <p><span class="pickup-time">Pickup Time:</span> <?php echo htmlspecialchars($reservation->pickup_time); ?></p>
        </div>
    <?php endforeach; ?>
</body>
</html>
