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
            max-width: 300px;
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
        
        .login-form,
        .create-account {
            margin-bottom: 20px;
            text-align: center;
        }
        
        .input-container {
            margin-bottom: 10px;
            text-align: left;
        }
        
        input[type="text"],
        input[type="password"],
        button {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        
        button {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
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
    </style>
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
     
        <form class="login-form" action="../PHPScript/userpwlogin.php" method="post">
            <div class="input-container">
                <input type="text" name="Email" placeholder="Email" id="Email" required>
            </div>
            <div class="input-container">
                <input type="password" name="Password" placeholder="Password" id="Password" required>
            </div>
            
            <button type="submit">Login</button>
        </form>
        <div class="create-account">
            <p><a href="../lrcweb/signup.php">Create an account?</a></p>
        </div>
    </div>
</body>
</html>
