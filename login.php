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

    /* Input boxes */
    input[type="text"], input[type="password"] {
      width: 95%;
      padding: 12px;
      font-size: 16px;
      border: none;
      border-radius: 4px;
      margin-top: 5px;
    }

    /* Forgot password text */
    .forgot {
      text-align: right;
      font-size: 12px;
      margin-top: 5px;
    }

      .forgot a {
      text-decoration: underline;
      color: black;

      }
        
        .login-button {
        padding: 8px 20px;
        font-size: 14px;
        background-color: #007bff; /* nice, clean blue */
        color: white;
        border: none;
        border-radius: 8px;
        font-weight: bold;
        cursor: pointer;
        display: block;
        margin: 20px auto 0 auto;
        transition: background-color 0.3s;
      }

      .login-button:hover {
      background-color: #0056b3; /* darker blue on hover */
    }


  </style>
</head>
<body>

  <div class="login-box">
    <!-- Header bar -->
    <div class="top-bar">
      COFFEE&CO.
      <span>CAFE</span>
    </div>

    <!-- Title -->
    <div class="login-title">BREweB</div>
    
    <!-- Login form -->
    <form>
      <label>EMAIL ADDRESS</label>
      <input type="text" placeholder="Enter your email">

      <label>PASSWORD</label>
      <input type="password" placeholder="Enter your password">

      <div class="forgot">
        <a href="#" style="color: blue;">Forgot password?</a>

      <button type="submit" class="login-button">LOGIN</button>
    </form>
  </div>

</body>
</html>
