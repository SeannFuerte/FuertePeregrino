<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$xml = simplexml_load_file("../XMLFile/myxml.xml");

if ($xml === false) {
    echo "Failed to load XML file.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Resource Center - Home</title>
    <style>
        .wrapper{
            padding: 30px;
            border: 2px solid black;
        }
        body{
            background-color: khaki;

        }
        header{
            background-color: maroon;
            height: 90px;
            border-radius: 30px;
            margin-top: 20px;

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
            transition: transform 05s ease;
        }
        .bell a:hover {
           transform: scale(1.1);
        }
        .profile {
            float: right;
            margin-top: -30px; 
            padding:10px;
            margin-right: -100px;
        
        }
        table {
            width: 1200px;
            height: 100px;
            border-collapse: collapse;
            margin-top: 50px;
            border-radius: 30px;
            margin-left: 50px;
        }

        table, th, td {
            border: 1px solid black;
            background-color: lightgoldenrodyellow;
        }

        th, td {
            padding: 8px;
            text-align: left;
            font-size: 15px;
        }

        th {
            background-color: maroon;
            color: white;
            font-size: 20px;

        }
        h2 {
            font-size: 30px; 
            text-align: center;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
            margin-top: 100px;
            font-size: 50px;
            margin-left: 80px;
        }

    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="../images/msc.png" width="50px" height="70px">
             <h1>Learning Resource Center<br>Reserve Your Reading Adventure</h1>
        </div>
             <div class="bell">
                <a href=" ../admin/borrowed.php">
            <img src="../images/bell.png" width="50px" height="50px">
            </a>
        </div>
        <div class="profile">
             <img src="../images/profile.png" width="50px" height="50px">
        </div>
            </header> 
        <h2>List of Students</h2>
        <table>
        <tr>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Section</th>
            <th>Email</th>
        </tr>
        <?php
        foreach ($xml->student as $student) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($student->First_Name) . "</td>";
            echo "<td>" . htmlspecialchars($student->Middle_Name) . "</td>";
            echo "<td>" . htmlspecialchars($student->Last_Name) . "</td>";
            echo "<td>" . htmlspecialchars($student->Section) . "</td>";
            echo "<td>" . htmlspecialchars($student->Email) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>