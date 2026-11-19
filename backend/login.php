<?php
include('database.php');
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Create an Account</title>
  <style>
    * { box-sizing: border-box; }
    body {
      margin: 0;
      min-height: 100vh;
      display: grid;
      place-items: center;
      padding: 24px;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
      background: linear-gradient(135deg, #eef2ff, #f8fafc);
      color: #172033;
    }
    .form-card {
      width: min(100%, 430px);
      padding: 36px;
      background: #fff;
      border: 1px solid #e5e7eb;
      border-radius: 16px;
      box-shadow: 0 18px 50px rgb(30 41 59 / 10%);
    }
    h1 { margin: 0 0 8px; font-size: 1.8rem; }
    .subtitle { margin: 0 0 24px; color: #64748b; }
    label { display: block; margin: 16px 0 7px; font-size: .9rem; font-weight: 600; }
    input {
      width: 100%;
      padding: 12px 14px;
      border: 1px solid #cbd5e1;
      border-radius: 8px;
      font: inherit;
    }
    input:focus { outline: 3px solid rgb(79 70 229 / 18%); border-color: #4f46e5; }
    .terms { display: flex; align-items: flex-start; gap: 9px; margin: 18px 0 22px; color: #475569; font-size: .88rem; line-height: 1.45; }
    .terms input { width: auto; margin-top: 3px; }
    a { color: #4f46e5; text-decoration: none; }
    a:hover { text-decoration: underline; }
    button {
      width: 100%;
      padding: 12px;
      border: 0;
      border-radius: 8px;
      background: #4f46e5;
      color: #fff;
      font: inherit;
      font-weight: 650;
      cursor: pointer;
    }
    button:hover { background: #4338ca; }
    .signin { margin: 22px 0 0; text-align: center; color: #64748b; font-size: .9rem; }
  </style>
</head>
<body>
  <main class="form-card">
    <h1>Create your account</h1>
    <p class="subtitle">Fill in your details to get started.</p>
    <form action="login.php" method="post">
      <label for="name">Full name</label>
      <input id="name" name="name" type="text" placeholder="Your name" autocomplete="name" required>


      <label for="email">Email address</label>
      <input id="email" name="email" type="email" placeholder="you@example.com" autocomplete="email" required>


      <label for="password">Password</label>
      <input id="password" name="password" type="password" placeholder="Create a password" autocomplete="new-password" minlength="8" required>


      <label for="contact-number">Contact number</label>
      <input id="contact-number" name="number" type="tel" placeholder="Your contact number" autocomplete="tel" required>


      <label class="terms"><input type="checkbox" name="terms" required> <span>I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.</span></label>


      <button type="submit">Create account</button>


    </form>
    <p class="signin">Already have an account? <a href="#">Sign in</a></p>


  </main>
</body>
</html>
<?php


// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$user_password = $_POST['password'];

// Hash password
$hashed_password = password_hash($user_password, PASSWORD_DEFAULT);
$number = $_POST['number'];
$terms = isset($_POST['terms']) ? 1 : 0;

// Insert data

$sql = "INSERT INTO user ( name, email, password, number)
VALUES ( '$name', '$email', '$hashed_password', '$number')";

mysqli_query($conn, $sql);

echo "New record created successfully";


mysqli_close($conn);
?>