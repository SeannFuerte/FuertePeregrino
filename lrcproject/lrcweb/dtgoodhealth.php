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
            margin-left: 100px;
            margin-top: 20px;
            height: 20px;
            width: 400px;
        }
        header button{
            background-color: ;
        }
        header img{
            margin-left: -30px;
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
        .categories h1 {
            margin-left: 230px;  
            margin-top: -30px;     
        }
        .categories h3 {
            margin-left: 100px;
            margin-top: 50px;
            margin-bottom: 30px;

        }
        .categories h4{
            margin-left: 100px;
            font-size: 18px;
        }
        .social img {
            margin-top: -100px;
            float: left;
            width: 350px;
            height: 350px;
            margin-left: -300px;
            border-radius: 30px;

        }
        .bell {
            float: right;
            margin-right: 120px;
            margin-top: 10px; 
            padding:10px;
        }
        .profile {
            float: right;
            margin-top: 10px; 
            padding:10px;
            margin-right: -100px;
        }
        .optionss {
            margin-left: 100px;
            height: 50px;
            width: 300px;
            border-radius: 10px;
            margin-top: -500px;
            margin-bottom: 20px 
        }

        .submit-button {
            margin-top: 50px;
            margin-left: 100px;
            background-color: pink;
            font-size: 20px;
            border-radius: 30px;
            padding: 20px;
        }
        .submit-button:hover {
            background-color: maroon;
        }
        .reserve-form {
            text-align: center;
            width: 300px;
            margin-left: 500px;
            margin-top: -350px;
            background-color: rgba(255, 255, 255, 0.5);
            padding: 20px;
            border-radius: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-bottom: 10px;
            text-align: center;
        }
        .dateandtime {
            margin-top: 50px;
            margin-left: 100px;
        }
        .dateandtime h4 {
            margin-left: -10px; 
            margin-top: -50px;
        }
        .form-group span {
            width: 200px;
            margin-left: 220px;
            margin-top: -20px;
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="../images/msc.png" width="50px" height="70px">
             <h1>Learning Resource Center<br>Reserve Your Reading Adventure</h1>
             <a href= " ../lrcweb/health.php">«</a>
        </div>
             <div class="bell">
            <img src="../images/bell.png" width="50px" height="50px">
        </div>
        <div class="profile">
             <img src="../images/profile.png" width="50px" height="50px">
        </div>
    </header>
    <div class="container">
        <form action="../PHPScript/save_reservation.php" method="post">
        <div class="categories">
            <h2>Reading Material Title:</h2> <br>
            <div class="form-group">
                <span id="title" name="title">Good Health</span>
                    <input type="hidden" name="title" value="Good Health"> 
        </div>
            <h3>Duration</h3>
            <div class="social">
                <a href="#" onclick="showSection ('pic')"> </a>
                <img src="../images/goodhealth.jpg">
        </div>  
        <select class= "optionss" name = "optionss" id="duration"required>
            <optgroup label="Options"> 
                <option class= "day1" value= "1 day"> 1 day </option>
                <option class= "day2" value= "2 days"> 2 days </option>
                <option class= "day3" value= "3 days"> 3 days </option>
                <option class= "day4" value= "4 days"> 4 days </option>
                <option class= "day5" value= "5 days"> 5 days </option>
                <option class= "day6" value= "6 days"> 6 days </option>
                <option class= "day7" value= "7 days"> 7 days </option>
            </optgroup>
        </select> <br>
        <div class="dateandtime" >
            <form class="dateandtime" >
             <h4>Pick Up Date & Time</h4>
         <input type="Date" id= "date" name="date" required>
         <input type="Time" id= "time" name="time" min="07:30" max="17:00" step="1800" required>
     </div>
     <a href=" ../lrcweb/rgoodhealth.php">
        <button class="submit-button" type="submit" id=" submit-button" > Reserve Now </button> </a> 
    </div>
</body>
</html>