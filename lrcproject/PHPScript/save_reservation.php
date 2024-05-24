<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = $_POST['title'] ?? '';
    $duration = $_POST['optionss'] ?? '';
    $date = $_POST['date'] ?? '';
    $time = $_POST['time'] ?? '';

    
    $studentName = $_SESSION['studentName'] ?? '';

    if (!empty($duration) && !empty($date) && !empty($time) && !empty($studentName)) {
        $xmlFilePath = "../XMLFile/reservation.xml";

        if (file_exists($xmlFilePath)) {
            $xml = simplexml_load_file($xmlFilePath);

            if ($xml === false) {
                $xml = new SimpleXMLElement('<reservations/>');
            }
        } else {
            $xml = new SimpleXMLElement('<reservations/>');
        }

        $reservation = $xml->addChild('reservation');
        $reservation->addChild('student_name', htmlspecialchars($studentName)); 
        $reservation->addChild('title', htmlspecialchars($title));
        $reservation->addChild('duration', htmlspecialchars($duration));
        $reservation->addChild('pickup_date', htmlspecialchars($date));
        $reservation->addChild('pickup_time', htmlspecialchars($time));

        if ($xml->asXML($xmlFilePath)) {
             header("Location: ../lrcweb/rsocial.php?status=success&studentName=" . urlencode($studentName));
            exit;
        } else {
            header("Location: ../lrcweb/rsocial.php?status=error&message=Failed+to+write+XML+file.");
            exit;
        }
    } else {
        header("Location: ../lrcweb/rsocial.php?status=error&message=One+or+more+required+fields+are+missing.");
        exit;
    }
} else {
    header("Location: ../index.html");
    exit;
}
?>
