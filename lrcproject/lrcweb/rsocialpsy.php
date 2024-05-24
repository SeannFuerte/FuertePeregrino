<?php
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
    <title>Reservation Receipt</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    padding: 20px;
    border-radius: 20px;
}

.receipt {
    background-color: white;
    border-radius: 10px;
    padding: 20px;
    margin: auto;
    max-width: 600px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border: 1px solid black;
}

.receipt h2 {
    color: #333; 
    text-align: center;
    border-bottom: 2px solid black;
}

.receipt-content {
    margin-top: 20px;
    text-align: center;
    padding: 10px;
}

.reservation-detail {
    margin-bottom: 10px;
}

.reservation-detail p {
    margin: 5px 0;
}

.reservation-detail label {
    font-weight: bold;
    color: black;
}

.reservation-detail span {
    margin-left: 10px;
    font-weight: bold;
}

.button-container {
    text-align: center;
    margin-top: 20px;
}

.button-container a {
    background-color: maroon;
    color: white;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.button-container a:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <div class="receipt">
        <h2>Reservation Receipt</h2>
        <div class="receipt-content">
            <?php if ($lastReservation !== null): ?>
                <div class="reservation-detail">
                    <p><span class="title">Title:</span> <?php echo htmlspecialchars($lastReservation->title); ?></p>
                    <p><span class="duration">Duration:</span> <?php echo htmlspecialchars($lastReservation->duration); ?></p>
                    <p><span class="pickup-date">Pickup Date:</span> <?php echo htmlspecialchars($lastReservation->pickup_date); ?></p>
                    <p><span class="pickup-time">Pickup Time:</span> <?php echo htmlspecialchars($lastReservation->pickup_time); ?></p>
                </div>
            <?php else: ?>
                <p>No reservations found.</p>
            <?php endif; ?>
            <div class="button-container">
                <a href="../lrcweb/home.php"> Make another Reservation</a>
            </div>
        </div>
    </div>
</body>
</html>
