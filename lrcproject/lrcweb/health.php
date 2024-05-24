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
        .categories {
            margin-left: 400px;

        }
        .categories h2 {
           margin-left: -100px;
        }
        .categories h1 {
            margin-left: 200px;  
            margin-top: 50px;     
        }
        .categories h3 {
            margin-left: 100px;
            margin-top: 150px;
        }
          .social img {
            margin-top: -200px;
            float: left;
            width: 300px;
            height: 350px;
            margin-left: -250px;
            border-radius: 30px;
            margin-top: 70px;
            transition : transform 0.5s ease;
        }
        .social2 img {
            margin-left: 50px;
            transition : transform 0.5s ease;

        }
        .social3 img {
            margin-left: 50px;
            transition : transform 0.5s ease;
        }
        .social img:hover {
            transform: scale(1.1);

        }
        .social2 img:hover {
            transform: scale(1.1);
        }
        .social3 img:hover{
            transform: scale(1.1);
        }
        #dashboard1, #dashboard2, #dashboard3 {
            display: none;
            position: absolute;
            top: 0;
            right: -400px; 
            background-color: white;
            width: 800px; 
            height: 70%; 
            border-left: 2px solid black;
            padding: 10px;
            margin-right: 500px;
            margin-top: 150px;
            border-radius: 60px 70px 40px 140px;
            padding: 30px;

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
        optgroup {
            margin-left: 100px;
        }
        .optionss {
            margin-left: 100px;
            height: 50px;
            width: 300px;
            border-radius: 10px;
            margin-top: -200px;

        }
        .available {
            background-color: green;
        }
        .unavailable {
            background-color: red;
        }
        .available2 {
            background-color: green;
        }
        .reserve-now {
            margin-top: 100px;
            margin-left: 100px;
            background-color: pink;
            font-size: 20px;
            border-radius: 30px;
            padding: 20px;
        }
        .reserve-now:hover {
            background-color: maroon;
        }
        .book-description {
            float: right;
            border: 2px solid black;
            width: 350px;
            height: 400px;
            margin-right: 50px;
            margin-top: -200px;
        }
        .book-description p {
            text-align: justify;
            padding: 10px;
            margin-bottom: -50px;

        }
        .book-description h2 {
            margin-left: 20px;
            margin-top: 70px;
            margin-bottom: -20px;
        }
        .book-description button {
            margin-top: 50px;
            width: 100px;
            height: 50px;
            border-radius: 30px;
            background-color: pink;
        }
        .book-description button:hover {
            background-color: khaki;
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
    
    <div class="container">
        <!-- Categories -->
    <div class="categories">
        <h1>Health</h1>
        <div class="social">
            <a href="#" onclick="toggleDashboard(event, 'dashboard1')">
            <img src="../images/mentalbook.jpg">
    
        <div class="social2">
            <a href="#" onclick="toggleDashboard(event, 'dashboard2')"><img src="../images/goodhealth.jpg"></a>
        </div>   
         <div class="social3">
            <a href="#" onclick="toggleDashboard(event, 'dashboard3')" > <img src="../images/comprehensivehealth.jpg"></a>
        </div>
        <div class="book-description" id="dashboard1" style="display: none; background-color: white;">
            <p>&emsp; "Understanding Mental Illness" by Carlin Barnes, MD, and Marketa Wills, MD, MBA, is an insightful guide that navigates the complex terrain of mental health with clarity and compassion. Drawing on their extensive experience as psychiatrists, the authors provide a comprehensive overview of various mental illnesses, including depression, anxiety disorders, bipolar disorder, schizophrenia, and more. This book goes beyond mere descriptions of symptoms; it delves into the underlying causes, treatment options, and strategies for managing mental health conditions effectively. With a focus on destigmatizing mental illness and promoting understanding, Barnes and Wills offer practical advice for individuals, families, and communities impacted by these disorders.</p>
<h2>Copies:</h2>
<p>Available 2024-001-123</p><br>
<p>Unavailable 2024-001-456</p><br>
<p>Available 2024-001-789</p><br>

  <a href="../lrcweb/dtmentalhealth.php">
            <button>Next</button>
        </a>
    </div>
        <div class="book-description" id="dashboard2" style="display: none; background-color: white;">
            <p>&emsp; "Good Health in the 21st Century" by Dr. Carole Hungerford is a groundbreaking exploration of modern health challenges and strategies for achieving optimal well-being in today's fast-paced world. Drawing on her decades of experience as a medical doctor and holistic health practitioner, Dr. Hungerford offers a holistic approach to health that encompasses physical, mental, and emotional well-being. In this enlightening book, readers will discover the interconnectedness of various factors influencing health, including diet, exercise, stress management, environmental toxins, and more. Dr. Hungerford provides evidence-based insights into how these factors impact our health and offers practical advice for making positive lifestyle changes.

</p>
<h2>Copies:</h2>
<p>Available 2024-001-123</p><br>
<p>Unavailable 2024-001-456</p><br>
<p>Available 2024-001-789</p><br>

  <a href="../lrcweb/dtgoodhealth.php">
            <button>Next</button>
        </a>
    </div>
        <div class="book-description" id="dashboard3" style="display: none; background-color: white;">
            <p>&emsp;"Comprehensive Health" by Sanderson Zelman and Lynch Munsell is a comprehensive and accessible guide to achieving holistic well-being in today's dynamic world. This authoritative textbook covers a wide range of topics essential to understanding and optimizing health, including physical fitness, nutrition, mental health, sexual health, substance abuse prevention, and more. Written with clarity and precision, "Comprehensive Health" offers up-to-date information on health-related issues, trends, and research findings. The authors provide practical advice and evidence-based strategies for promoting healthy behaviors and preventing illness.</p>
<h2>Copies:</h2>
<p>Available 2024-001-123</p><br>
<p>Unavailable 2024-001-456</p><br>
<p>Available 2024-001-789</p><br>

  <a href="../lrcweb/dtcomprehensivehealth.php">
            <button>Next</button>
        </a>
    </div>
        <script type="text/javascript">
        function toggleDashboard(event, dashboardId) {
            event.preventDefault();
            var dashboards = document.getElementById(dashboardId);
            var image = event.target;
            var social2Image = document.querySelector(".social2 img");
            var social3Image = document.querySelector(".social3 img");

            if (dashboards.style.display === "none") {
                dashboards.style.display = "block";
                image.style.transform = "translate(-50%, -50%)"; 

                if (image === social2Image) {
                    social2Image.style.transform = "translate(-167%, -50%)";
                    social3Image.style.transform = "none";
                }
                if (image === social3Image) {
                    social3Image.style.transform = "translate(-284%, -50%)";
                    social2Image.style.transform = "none";
                }
                
            } else {
                dashboards.style.display = "none";
                image.style.transform = "none";
                social2Image.style.transform = "none";
                social3Image.style.transform = "none";
            }
        }
        </script>
</body>
</html>
