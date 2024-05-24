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
        <h1>Laws</h1>
        <div class="social">
            <a href="#" onclick="toggleDashboard(event, 'dashboard1')">
            <img src="../images/businesslaw.jpg">
    
        <div class="social2">
            <a href="#" onclick="toggleDashboard(event, 'dashboard2')"><img src="../images/alloy.jpg"></a>
        </div>   
         <div class="social3">
            <a href="#" onclick="toggleDashboard(event, 'dashboard3')" > <img src="../images/pursuit.jpg"></a>
        </div>
        <div class="book-description" id="dashboard1" style="display: none; background-color: white;">
            <p>&emsp; "Business Law" by Tejpal Sheth offers a comprehensive exploration of the intricate legal landscape that governs the world of commerce. Through clear and concise language, Sheth navigates readers through the complexities of business law, from foundational principles to contemporary issues shaping today's business environment.

This indispensable resource delves into various legal frameworks essential for entrepreneurs, managers, and students alike, covering topics such as contracts, torts, intellectual property, and corporate governance. With real-world examples and case studies, Sheth provides readers with practical insights into how legal concepts apply in everyday business scenarios.

Within the Learning Resource Center, three copies of "Business Law" stand as pillars of legal knowledge, readily accessible to students and faculty seeking to deepen their understanding of business law. Whether you're embarking on a career in business or seeking to navigate legal challenges within your organization, Sheth's book serves as a trusted guide, empowering readers to make informed decisions and navigate the complexities of the business world with confidence.</p>
<h2>Copies:</h2>
<p>Available 2024-001-123</p><br>
<p>Unavailable 2024-001-456</p><br>
<p>Available 2024-001-789</p><br>

  <a href="../lrcweb/dtbusinesslaw.php">
            <button>Next</button>
        </a>
    </div>
        <div class="book-description" id="dashboard2" style="display: none; background-color: white;">
            <p>&emsp; "The Alloy of Law" by Brandon Sanderson transports readers to a richly imagined world where magic and technology coexist in an era of industrial revolution. Set in the same universe as Sanderson's acclaimed Mistborn series but in a later time period, this thrilling novel introduces a new cast of characters and a fresh adventure filled with intrigue, action, and a touch of the supernatural. In this captivating tale, readers follow the exploits of Waxillium Ladrian, a nobleman turned lawman, as he navigates the bustling city of Elendel, grappling with both criminals and political machinations. When a series of mysterious crimes threatens to disrupt the fragile peace of the city, Wax finds himself drawn into a dangerous game of cat and mouse, where alliances are tested and secrets lurk around every corner. As the pages turn, readers are treated to Sanderson's signature blend of inventive world-building, intricate magic systems, and pulse-pounding action sequences. With its blend of steampunk aesthetics and epic fantasy elements, "The Alloy of Law" offers a fresh take on the beloved Mistborn universe, delivering a gripping narrative that will keep readers on the edge of their seats until the very end.

</p>
<h2>Copies:</h2>
<p>Available 2024-001-123</p><br>
<p>Unavailable 2024-001-456</p><br>
<p>Available 2024-001-789</p><br>

  <a href="../lrcweb/dtalloy.php">
            <button>Next</button>
        </a>
    </div>
        <div class="book-description" id="dashboard3" style="display: none; background-color: white;">
            <p>&emsp;"The Pursuit of Justice," masterfully curated by Edward J. Lopez and graced with a compelling foreword by Robert D. Tollison, is a seminal anthology that delves deep into the intricate intersections of law, economics, and society. Through a collection of insightful essays from esteemed scholars and practitioners, this book embarks on a thought-provoking journey to explore the fundamental principles and evolving dynamics of justice in our modern world. Within its pages, readers will encounter a diverse range of perspectives and analyses, each shedding light on the multifaceted nature of justice—from its philosophical underpinnings to its practical manifestations in legal systems around the globe. With clarity and rigor, the contributors examine pressing issues such as property rights, the rule of law, criminal justice reform, and the role of government in promoting equitable outcomes.</p>
<h2>Copies:</h2>
<p>Available 2024-001-123</p><br>
<p>Unavailable 2024-001-456</p><br>
<p>Available 2024-001-789</p><br>

  <a href="../lrcweb/dtpursuit.php">
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
