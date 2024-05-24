<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Resource Center</title>
    <style> 
        body {
            margin: 0;
            padding: 0;
            background-color: transparent;
            background-image: url('../images/mscbg.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container {
            text-align: center;
            width: 500px;
            background-color: rgba(255, 255, 255, 0.5);
            padding: 20px;
            border-radius: 10px;
        }

        .logo-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        .logo {
            width: 80px;
            height: auto;
            margin-right: 10px;
        }

        .college-name {
            font-size: 16px;
            font-weight: bold;
        }

        .title {
            margin: 0;
            font-weight: bold;
        }

        .quote {
            margin-bottom: 20px;
        }

        .quote p {
            font-weight: bold;
        }

        .sign-up-form {
            margin-bottom: 20px;
            text-align: center;
        }

        .name input[type="text"],
        .name input[type="email"],
        .name input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            height: 50px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            box-sizing: border-box;
            height: 50px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .create-account a {
            font-size: 14px;
            padding: 8px 16px;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
        }

        .create-account a:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            margin-top: 5px;
        }
    </style>
    <script>
        function validateForm() {
            var firstName = document.getElementById("First_Name").value.trim();
            var lastName = document.getElementById("Last_Name").value.trim();
            var section = document.getElementById("Section").value.trim();
            var email = document.getElementById("Email").value.trim();

            if (firstName === "" || lastName === "" || section === "" || email === "") {
                document.getElementById("error-message").innerText = "All fields are required";
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="logo-container">
            <img src="../images/msc.png" alt="Marinduque State College" class="logo">
            <div class="college-name">
                <h2>Marinduque State College</h2>
            </div>
        </div>
        <h1 class="title">Learning Resource Center</h1>
        <div class="quote">
            <p>Reserve Your Reading Adventure</p>
        </div>
        <div class="sign-up-form">
            <form action="../PHPScript/loginfunction.php" method="post" onsubmit="return validateForm()">
                <div class="name">
                    <input type="text" name="firstname" placeholder="First Name" id="First_Name" required>
                </div>
                <div class="name">
                    <input type="text" name="middlename" placeholder="Middle Name" id="Middle_Name" required>
                </div>
                <div class="name">
                    <input type="text" name="lastname" placeholder="Last Name" id="Last_Name" required>
                </div>
                <div class="name">
                    <input type="text" name="section" placeholder="Section" id="Section" required>
                </div>
                <div class="name">
                    <input type="email" name="email" placeholder="Email" id="Email" required>
                </div>
                <div class="name">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <!-- Display error messages -->
                <div id="error-message" class="error-message"></div>
                <button type="submit">Sign up</button>
            </form>
        </div>
    </div>
</body>
</html>
