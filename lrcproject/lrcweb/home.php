<?php
session_start(); 


if (!isset($_SESSION['Email'])) {
    header("Location: ../lrcproject/index.php"); 
    exit;
}


$studentName = $_SESSION['studentName'];

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
        }
        header input{
            border: 2px solid black;
            border-radius: 50px;
            margin-left: 330px;
            margin-top: 30px;
            height: 20px;
            width: 400px;
        }
        header button{
            background-color: ;
        }
        header img{
            margin-left: -30px;

        }
        header h1{
            margin-top: -60px;
            margin-left: 30px;
            color: white;
            font-size: 22px;
            font-weight: bold;
        }
        .social img{
            transition : transform 0.5s ease;
            width: 200px;
            height: 200px;
            border-radius: 20px;
            margin-top: 10px;

        }
        .social img:hover {
            transform: scale(1.1);

        }
        .laws img{
            transition : transform 0.5s ease;
            width: 200px;
            height: 200px;
            border-radius: 20px;
            margin-left: 250px;
            margin-bottom: 20px;
            margin-top: -205px;


        }
        .laws img:hover {
            transform: scale(1.1);

        }
         .health img{
            transition : transform 0.5s ease;
            width: 200px;
            height: 200px;
            border-radius: 20px;
            padding: 10px;
            margin-left: 390px;
            

        }
        .health img:hover {
            transform: scale(1.1);

        }
        .technology img{
            transition : transform 0.5s ease;
            width: 200px;
            height: 200px;
            border-radius: 20px;
            padding: 10px;
            margin-left: 640px;
            margin-top: -300px;
            margin-bottom: 20px;

        }
        .technology img:hover {
            transform: scale(1.1);

        }
        .logo{
            margin-left: 50px;
            float: left;
            margin-top: 10px;
        }
        .categories {
            margin-left: 400px;

        }
        .categories h2 {
            margin-left: 190px;       
        }
        .bell {
            float: right;
            margin-right: 80px;
            margin-top: 10px; 
            padding:10px;
        }
        .profile {
            position: relative; 
            float: right;
            margin-top: 10px;
            padding: 10px;
            margin-right: -100px;
        }
         
        #studentNameContainer {
            position: absolute;
            top: 60px; 
            right: 0;
            background-color: white; 
            border: 1px solid black; 
            padding: 5px 10px; 
            z-index: 1000; 
            transform: rotate(0deg); 
            transform-origin: top right; 
            white-space: nowrap; 
        }
        #logoutContainer {
            position: absolute;
            top: 30px;
            right: 0;
            background-color: white;
            border: 1px solid black;
            padding: 5px 10px;
            z-index: 1000;
            display: none;
            text-decoration: none;
            white-space: nowrap;
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
                <a href= "../lrcweb/usernotif.php">
            <img id="profileImg" src="../images/bell.png" width="50px" height="50px"> </a>
        </div>
        <div class="profile">
             <img src="../images/profile.png" width="50px" height="50px" onclick="toggleContainers()">
              <div id="studentNameContainer" style="display: none;">
                <?php
                if (isset($_SESSION['studentName'])) {
                    echo '<span>' . $_SESSION['studentName'] . '</span>';
                } else {
                    echo '<span>Guest</span>';
                }
                ?>
                <div id="logoutContainer">
                <a href="../index.php/">Logout</a>
            </div>
             </div>

        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
            <a href="">
            <img src="../images/search.png" width="15px" height="15px"></a>
        </div>
    </header>
    
    <div class="container">
       
        
        <!-- Categories -->
        <div class="categories">
            <h2>Categories</h2> <br>
            <div class="social">
                <a href="social.php" onclick="showSection ('pic')"> 
                <img src="../images/social.jpg">  </a>
            </div>
            <div class= "laws">
                <a href="laws.php"onclick= "showSection('pic)"> 
                 <img src="../images/laws.jpg">  </a>
             </div>
         </div>
           <div class="health">
                <a href="health.php">
                 <img src="../images/health.jpg">  </a>
             </div>
         </div>
         <div class= " technology">
                <a href="technology.php">
                 <img src="../images/technology.jpg">  </a>
            </ul>
        </div>
    </div>

   <script>
    // JavaScript to toggle the visibility of student name and logout containers
    function toggleContainers() {
    var studentNameContainer = document.getElementById('studentNameContainer');
    var logoutContainer = document.getElementById('logoutContainer');

    if (studentNameContainer.style.display === 'none') {
        studentNameContainer.style.display = 'block';
        logoutContainer.style.display = 'block'; 
    } else {
        studentNameContainer.style.display = 'none';
        logoutContainer.style.display = 'none'; 
    }
}

</script>

</script>
</body>
</html>