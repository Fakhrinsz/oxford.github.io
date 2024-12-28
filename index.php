<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<link rel="stylesheet" href="stylelogin.css"> 
</head>
<body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>User Oxford</h2>
        <div class="underline-title"></div>
      </div>
      <form method="post" class="form">
        <label for="user-email" style="padding-top:13px">
            &nbsp;Email
          </label>
        <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="user-password" style="padding-top:22px">&nbsp;Password
          </label>
        <input id="user-password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>
        <a href="#">
          <legend id="forgot-pass">Forgot password?</legend>
        </a>
        <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
        <a href="form pendaftaran.html" id="signup">Belum punya akun?</a>
      </form>
    </div>
  </div>
</body>
</html>
