<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, Helvetica, sans-serif;
    }

    body {
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(135deg, #667eea, #764ba2);
      padding: 20px;
    }

    .login-container {
      width: 100%;
      max-width: 400px;
      padding: 40px;
      background: rgba(255, 255, 255, 0.95);
      border-radius: 20px;
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
    }

    .login-container h1 {
      text-align: center;
      color: #222;
      margin-bottom: 10px;
      font-size: 32px;
    }

    .subtitle {
      text-align: center;
      color: #777;
      margin-bottom: 30px;
      font-size: 14px;
    }

    .input-group {
      margin-bottom: 20px;
    }

    .input-group label {
      display: block;
      margin-bottom: 8px;
      color: #333;
      font-size: 14px;
      font-weight: 600;
    }

    .input-group input {
      width: 100%;
      padding: 14px 16px;
      border: 1px solid #ddd;
      border-radius: 10px;
      outline: none;
      font-size: 15px;
      transition: 0.3s;
    }

    .input-group input:focus {
      border-color: #667eea;
      box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.15);
    }

    .options {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 25px;
      font-size: 13px;
    }

    .remember {
      display: flex;
      align-items: center;
      gap: 7px;
      color: #555;
    }

    .remember input {
      accent-color: #667eea;
    }

    .forgot {
      color: #667eea;
      text-decoration: none;
      font-weight: 600;
    }

    .forgot:hover {
      text-decoration: underline;
    }

    .login-btn {
      width: 100%;
      padding: 14px;
      border: none;
      border-radius: 10px;
      background: linear-gradient(135deg, #667eea, #764ba2);
      color: white;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: 0.3s;
    }

    .login-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(102, 126, 234, 0.35);
    }

    .signup {
      text-align: center;
      margin-top: 25px;
      color: #777;
      font-size: 14px;
    }

    .signup a {
      color: #667eea;
      text-decoration: none;
      font-weight: 600;
    }

    .signup a:hover {
      text-decoration: underline;
    }

    @media (max-width: 480px) {
      .login-container {
        padding: 30px 25px;
      }

      .login-container h1 {
        font-size: 28px;
      }
    }
  </style>
</head>

<body>

  <div class="login-container">
    <h1>Welcome Back</h1>
    <p class="subtitle">Please enter your details to sign in</p>

    <form>
      <div class="input-group">
        <label for="email">Email Address</label>
        <input
          type="email"
          id="email"
          placeholder="you@example.com"
          required
        >
      </div>

      <div class="input-group">
        <label for="password">Password</label>
        <input
          type="password"
          id="password"
          placeholder="Enter your password"
          required
        >
      </div>

      <div class="options">
        <label class="remember">
          <input type="checkbox">
          Remember me
        </label>

        <a href="#" class="forgot">Forgot password?</a>
      </div>

      <button type="submit" class="login-btn">
        Sign In
      </button>
    </form>

    <p class="signup">
      Don't have an account?
      <a href="#">Create one</a>
    </p>
  </div>

</body>
</html>
