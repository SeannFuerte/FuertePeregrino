<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $First_Name = $_POST['firstname'] ?? '';
    $Middle_Name = $_POST['middlename'] ?? '';
    $Last_Name = $_POST['lastname'] ?? '';
    $Section = $_POST['section'] ?? '';
    $Email = $_POST['email'] ?? '';

    if (!empty($First_Name) && !empty($Middle_Name) && !empty($Last_Name) && !empty($Section) && !empty($Email)) {
        $xmlFilePath = "../XMLFile/myxml.xml";

        
        if (!is_writable($xmlFilePath)) {
            header("Location: ../lrcweb/signup.php?status=error&message=XML+file+is+not+writable.");
            exit;
        }
       

        if (file_exists($xmlFilePath) && filesize($xmlFilePath) > 0) {
            $xml = simplexml_load_file($xmlFilePath);

            if ($xml === false) {
                header("Location: ../lrcweb/signup.php?status=error&message=Failed+to+load+XML+file.");
                exit;
            }
        } else {
            $xml = new SimpleXMLElement('<data/>');
        }
        $studentExists = false;
        foreach ($xml->student as $student) {
            if ($student->First_Name == $First_Name &&
                $student->Middle_Name == $Middle_Name &&
                $student->Last_Name == $Last_Name &&
                $student->Section == $Section &&
                $student->Email == $Email ) {
                $studentExists = true;
                break;
            }
        }
        if (!$studentExists) {
            $newStudent = $xml->addChild('student');
            $newStudent->addChild('First_Name', htmlspecialchars($First_Name));
            $newStudent->addChild('Middle_Name', htmlspecialchars($Middle_Name));
            $newStudent->addChild('Last_Name', htmlspecialchars($Last_Name));
            $newStudent->addChild('Section', htmlspecialchars($Section));
            $newStudent->addChild('Email', htmlspecialchars($Email));

            
            $saved = $xml->asXML($xmlFilePath);
            if ($saved) {
                header("Location: ../lrcweb/home.php?status=success");
                exit;
            } else {
                header("Location: ../lrcweb/signup.php?status=error&message=Failed+to+write+XML+file.");
                exit;
            }
        } else {
            header("Location: ../lrcweb/signup.php?status=error&message=Student+already+exists.");
            exit;
        }
    } else {
        header("Location: ../lrcweb/signup.php?status=error&message=Invalid+form+data.");
        exit;
    }
} else {
    header("Location: ../lrcweb/signup.php");
    exit;
}
?>
