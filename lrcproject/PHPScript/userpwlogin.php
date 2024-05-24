<?php
session_start(); 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Email = $_POST['Email'] ?? '';
    

    if (!empty($Email)) {
        $xmlFilePath = "../XMLFile/myxml.xml";

        if (file_exists($xmlFilePath) && filesize($xmlFilePath) > 0) {
            $xml = simplexml_load_file($xmlFilePath);

            if ($xml === false) {
                header("Location: ../lrcproject/index.php?status=error&message=Failed+to+load+XML+file.");
                exit;
            }
        } else {
            header("Location: ../lrcproject/index.php?status=error&message=XML+file+does+not+exist+or+is+empty.");
            exit;
        }

        
        $validEmail = false;
        foreach ($xml->student as $student) {
            if ($student->Email == $Email) {
                $validEmail = true;
                
                $studentName = $student->First_Name . ' ' . $student->Middle_Name . ' ' . $student->Last_Name;
                break;
            }
        }

        if ($validEmail) {
            
            $_SESSION['Email'] = $Email;
            $_SESSION['studentName'] = $studentName;

            
            header("Location: ../lrcweb/home.php?status=success");
            exit;
        } else {
            
            header("Location: ../lrcproject/index.php?status=error&message=Invalid+credentials.");
            exit;
        }
    } else {
       
        header("Location: ../lrcproject/index.php?status=error&message=Email+is+required.");
        exit;
    }
} else {
    
    header("Location: ../lrcproject/index.php");
    exit;
}
?>
