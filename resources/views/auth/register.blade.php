<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign Up form in HTML CSS | CodingLab </title>
    <link rel="stylesheet" href="{{ asset('/css/loginstyle.css') }}">
  </head>
  <body>
    <div class="wrapper">
      <h2>Registration</h2>
      <form method="POST" action="{{ route('register.submit') }}">
        @csrf
        
        <div class="input-box">
          <input type="text" name="name" placeholder="Enter your name" required>
        </div>
        <div class="input-box">
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="input-box">
          <input type="password" id="createpassword" name="password" placeholder="Create password" required>
          <button type="button" id="showcreatePassword">Show</button>
          <button type="button" id="hidecreatePassword">Hide</button>
        </div>
        <div class="input-box">
          <input type="password" id="confirmpassword" name="confirm_password" placeholder="Confirm password" required>
          <button type="button" id="showconfirmPassword">Show</button>
          <button type="button" id="hideconfirmPassword">Hide</button>
        </div>
        <div class="policy">
          <input type="checkbox" name="agree_terms">
          <h3>I accept all terms & condition</h3>
        </div>
        <div class="input-box button">
          <input type="submit" value="Register Now">
        </div>
        <div class="text">
          <h3>Already have an account? <a href="/login">Login now</a></h3>
        </div>
      </form>
    </div>

    <script>
      document.getElementById("showcreatePassword").addEventListener("click", function () {
        var passwordInput = document.getElementById("createpassword");
        passwordInput.type = "text";
      });
    
      document.getElementById("hidecreatePassword").addEventListener("click", function () {
        var passwordInput = document.getElementById("createpassword");
        passwordInput.type = "password";
      });
      document.getElementById("showconfirmPassword").addEventListener("click", function () {
        var passwordInput = document.getElementById("confirmpassword");
        passwordInput.type = "text";
      });
    
      document.getElementById("hideconfirmPassword").addEventListener("click", function () {
        var passwordInput = document.getElementById("confirmpassword");
        passwordInput.type = "password";
      });
    </script>
  
  </body>
</html>
