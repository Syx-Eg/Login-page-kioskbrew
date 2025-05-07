<?php include 'auth_handler.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
      <!-- Irish Grover font for title -->
  <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">

<style>
  body {
      margin: 0;
      background-color: #ffd180; /* Light orange-yellow background */
      font-family: Arial, sans-serif;
    }

    
    /* Main login box */
    .login-box {
      width: 600px;
      background-color: #c49e64; /* Coffee brown box */
      margin: 150px auto;
      padding: 30px;
      border-radius: 15px;
    } 

          /* Top bar with main title and subtext */
      .top-bar {
        text-align: center;
        background-color: black;
        color: white;
        padding: 10px;
        border-radius: 10px 10px 0 0;
        font-weight: bold;
      }

    /* Subtext under COFFEE&CO. */
    .top-bar span {
      display: block;
      font-size: 14px;
      font-weight: normal;
      margin-top: 5px;
    }


    /* Title */
    .login-title {
      text-align: center;
      font-family: 'Irish Grover', cursive;
      font-size: 36px;
      margin: 20px 0;
    }

    /* Labels */
    label {
      display: block;
      font-weight: bold;
      margin-top: 15px;
      font-size: 14px;
    }

    {
     background-color: #f4c471;
     font-family: Arial, sans-serif;
     }
        .login-container {
            background-color: #b88c4a;
            padding: 30px;
            margin: 100px auto;
            width: 600px;
            border-radius: 10px;
            text-align: center;
        }
        .login-container h2 {
            color: #000;
        }
        input[type="email"], input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }
        .btn {
            width: 95%;
            padding: 10px;
            margin: 10px 0;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
        }
        .forgot {
            font-size: 12px;
            color: #0000ee;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>COFFEE&CO. CAFE</h2>
        <h3>BREweB</h3>

        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>

        <!-- Staff login form -->
        <form method="POST" action="">
            <label>EMAIL ADDRESS</label><br>
            <input type="email" name="email" placeholder="Enter your email" required><br>

            <label>PASSWORD</label><br>
            <input type="password" name="password" placeholder="Enter your password" required><br>

            <a class="forgot" href="#">Forgot password?</a><br><br>

            <button type="submit" name="login" class="btn">Staff Login</button>
        </form>

        <!-- Guest login form -->
        <form method="POST" action="">
            <button type="submit" name="guest" class="btn">Continue as Guest</button>
        </form>
    </div>
</body>
</html>
