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
        <h1>Technology</h1>
        <div class="social">
            <a href="#" onclick="toggleDashboard(event, 'dashboard1')">
            <img src="../images/tech1.jpg">
    
        <div class="social2">
            <a href="#" onclick="toggleDashboard(event, 'dashboard2')"><img src="../images/tech2.jpg"></a>
        </div>   
         <div class="social3">
            <a href="#" onclick="toggleDashboard(event, 'dashboard3')" > <img src="../images/tech3.jpg"></a>
        </div>
        <div class="book-description" id="dashboard1" style="display: none; background-color: white;">
            <p>&emsp; "Ahead in the Cloud" by Stephen Orban is a forward-thinking exploration of the transformative power of cloud computing in today's rapidly evolving digital landscape. As a former Head of Enterprise Strategy at AWS (Amazon Web Services), Orban brings unparalleled expertise and insights into the ways cloud technology is reshaping industries and revolutionizing business practices. In this illuminating book, Orban demystifies the complexities of cloud computing and illustrates its profound impact on innovation, scalability, agility, and cost-efficiency. Through real-world examples and case studies, he showcases how organizations of all sizes and sectors can leverage the cloud to drive growth, streamline operations, and stay ahead of the competition.</p>
<h2>Copies:</h2>
<p>Available 2024-001-123</p><br>
<p>Unavailable 2024-001-456</p><br>
<p>Available 2024-001-789</p><br>

  <a href="../lrcweb/dttech1.php">
            <button>Next</button>
        </a>
    </div>
        <div class="book-description" id="dashboard2" style="display: none; background-color: white;">
            <p>&emsp; "Exposed" by Bernard E. Harcourt is a thought-provoking examination of the pervasive surveillance practices that have become an integral part of modern society. Harcourt, a prominent legal scholar and social critic, delves into the intricate web of surveillance technologies and techniques employed by governments, corporations, and other entities to monitor individuals and collect data. In this compelling book, Harcourt raises critical questions about the implications of surveillance for privacy, civil liberties, and democracy. He explores how surveillance intersects with issues of power, inequality, and social control, shedding light on its often overlooked consequences for marginalized communities and vulnerable populations

</p>
<h2>Copies:</h2>
<p>Available 2024-001-123</p><br>
<p>Unavailable 2024-001-456</p><br>
<p>Available 2024-001-789</p><br>

  <a href="../lrcweb/dttech2.php">
            <button>Next</button>
        </a>
    </div>
        <div class="book-description" id="dashboard3" style="display: none; background-color: white;">
            <p>&emsp;"Foundry Technology" by Op Khanna is a comprehensive and authoritative textbook that covers all aspects of foundry practices and processes. Geared towards students, professionals, and enthusiasts in the field of metallurgy and manufacturing, this book provides a thorough understanding of the principles and techniques involved in metal casting. Khanna's book explores various topics essential to foundry technology, including pattern making, moulding and core-making, melting and pouring of metals, solidification and cooling processes, defects in castings, and quality control measures. With clear explanations, illustrative diagrams, and practical examples, the author guides readers through the intricacies of foundry operations and helps them develop a solid foundation in the subject./p>
<h2>Copies:</h2>
<p>Available 2024-001-123</p><br>
<p>Unavailable 2024-001-456</p><br>
<p>Available 2024-001-789</p><br>

  <a href="../lrcweb/dttech3.php">
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
