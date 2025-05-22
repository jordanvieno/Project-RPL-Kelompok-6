<!-- resources/views/auth.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Auth Admin BPKB</title>
  <link rel="stylesheet" href="{{ asset('css/auth.css') }}" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
</head>
<body class="register-body">

  <div class="register-container">

    <!-- LOGIN FORM -->
    <form class="register-form" id="login-form" action="{{ route('login') }}" method="POST">
      @csrf
      <h2 class="register-title">Login Admin BPKB</h2>
      <input type="text" name="username" placeholder="Username" class="register-input" required />
      <input type="password" name="password" placeholder="Password" class="register-input" required />
      <button type="submit" class="register-button">Log In</button>
      <p class="register-footer">
        Forgot password? <a href="#" onclick="showForm('forgot')">Reset</a><br>
        Don’t have an account? <a href="#" onclick="showForm('register')">Register</a>
      </p>
    </form>

    <!-- REGISTER FORM -->
    <form class="register-form" id="register-form" action="{{ route('register') }}" method="POST" style="display: none;">
      @csrf
      <h2 class="register-title">Register Admin BPKB</h2>
      <input type="email" name="email" placeholder="Email" class="register-input" required />
      <input type="text" name="username" placeholder="Username" class="register-input" required />
      <input type="password" name="password" placeholder="Password" class="register-input" required />
      <button type="submit" class="register-button">Sign Up</button>
      <p class="register-footer">
        Already have an account? <a href="#" onclick="showForm('login')">Login</a>
      </p>
    </form>

    <!-- FORGOT PASSWORD FORM -->
    <form class="register-form" id="forgot-form" action="{{ route('password.email') }}" method="POST" style="display: none;">
      @csrf
      <h2 class="register-title">Forgot Password</h2>
      <p class="register-subtitle">Please enter your email to reset the password</p>
      <label for="email" class="input-label">Your Email</label>
      <input type="email" name="email" id="email" placeholder="Enter your email" class="register-input" required />
      <button type="submit" class="register-button">Reset Password</button>
      <p class="register-footer">
        Back to <a href="#" onclick="showForm('login')">Login</a>
      </p>
    </form>

  </div>

  <script>
    function showForm(form) {
      document.getElementById('login-form').style.display = (form === 'login') ? 'flex' : 'none';
      document.getElementById('register-form').style.display = (form === 'register') ? 'flex' : 'none';
      document.getElementById('forgot-form').style.display = (form === 'forgot') ? 'flex' : 'none';
    }
  </script>
</body>
</html>
