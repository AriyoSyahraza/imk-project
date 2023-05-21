<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> login form in HTML CSS | CodingLab </title>
    <link rel="stylesheet" href="{{ asset('/css/loginstyle.css') }}">
   </head>
<body>
  <div class="wrapper">
    <h2>Login</h2>
    <form method="POST" action="{{ route('login.submit') }}">

        @csrf


      <div class="input-box">
        <input type="text" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" id="password" name="password" placeholder="Password" required>
        <button type="button" id="showPassword">Show</button>
        <button type="button" id="hidePassword">Hide</button>

      <div class="input-box button">
        <input type="Submit" value="Login">
      </div>
      <div class="text">
        <h3>Don't have an account? <a href="/Sign-Up">Sign Up</a></h3>
      </div>
    </form>
  </div>

  <script>
    document.getElementById("showPassword").addEventListener("click", function () {
      var passwordInput = document.getElementById("password");
      passwordInput.type = "text";
    });
  
    document.getElementById("hidePassword").addEventListener("click", function () {
      var passwordInput = document.getElementById("password");
      passwordInput.type = "password";
    });
  </script>
  
</body>

</html>
