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
        <h1>Social</h1>
        <div class="social">
            <a href="#" onclick="toggleDashboard(event, 'dashboard1')">
            <img src="../images/socialbook.jpg">
    
        <div class="social2">
            <a href="#" onclick="toggleDashboard(event, 'dashboard2')"><img src="../images/socialstudies.jpg"></a>
        </div>   
         <div class="social3">
            <a href="#" onclick="toggleDashboard(event, 'dashboard3')" > <img src="../images/socialpsy.jpg"></a>
        </div>
        <div class="book-description" id="dashboard1" style="display: none; background-color: white;">
            <p>&emsp; "Social Issue" is a book by John Doe, first published in 2018. The book delves into various pressing social issues that confront contemporary society, ranging from inequality and poverty to environmental degradation and human rights violations. Through in-depth analysis and compelling narratives, the author sheds light on the complexities of these issues and explores potential solutions for addressing them.

In the learning resource center, there are three copies of "Social Issue" available for students and researchers. These copies serve as valuable resources for studying and discussing the multifaceted challenges facing society today, encouraging critical thinking and informed dialogue on how to create positive social change.</p>
<h2>Copies:</h2>
<p>Available 2024-001-123</p><br>
<p>Unavailable 2024-001-456</p><br>
<p>Available 2024-001-789</p><br>

  <a href="../lrcweb/dtsocial.php">
            <button>Next</button>
        </a>
    </div>
        <div class="book-description" id="dashboard2" style="display: none; background-color: white;">
            <p>&emsp; "Social Studies by Navdeep Publications is a comprehensive guide that explores various aspects of the social sciences. Covering topics ranging from history and geography to civics and economics, this book provides a holistic understanding of the world around us. With engaging narratives, insightful explanations, and thought-provoking exercises, it aims to foster critical thinking and analytical skills among readers.

Delving into the rich tapestry of human civilization, Social Studies offers a journey through different cultures, societies, and historical events. It not only educates but also inspires readers to appreciate the diversity of human experiences and the interconnectedness of global phenomena.

In the Learning Resource Center, three copies of Social Studies are available for students and researchers. These copies serve as invaluable resources for exploring the complexities of social sciences, facilitating in-depth study, research, and discussions on various topics within the field.

</p>
<h2>Copies:</h2>
<p>Available 2024-001-123</p><br>
<p>Unavailable 2024-001-456</p><br>
<p>Available 2024-001-789</p><br>

  <a href="../lrcweb/dtsocialstudies.php">
            <button>Next</button>
        </a>
    </div>
        <div class="book-description" id="dashboard3" style="display: none; background-color: white;">
            <p>&emsp;Social Psychology by Jeff Greenberg, Toni Schmader, Jamie Arndt, and Mark Landau is an insightful exploration of the fundamental principles and theories that underpin human social behavior. Drawing from the latest research in psychology, this book offers a comprehensive overview of the dynamic interplay between individuals and their social environment.

Through engaging examples, case studies, and empirical evidence, Social Psychology delves into various topics such as social perception, attitudes, prejudice, conformity, group dynamics, and interpersonal relationships. It examines how social factors shape individual behavior, cognition, and emotions, providing readers with a deeper understanding of themselves and others.

In the Learning Resource Center, three copies of Social Psychology are available for students, researchers, and enthusiasts of social science. These copies serve as invaluable tools for delving into the intricacies of human social interaction, fostering critical thinking, and promoting a deeper appreciation of the complexities of social behavior.</p>
<h2>Copies:</h2>
<p>Available 2024-001-123</p><br>
<p>Unavailable 2024-001-456</p><br>
<p>Available 2024-001-789</p><br>

  <a href="../lrcweb/dtsocialpsy.php">
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
