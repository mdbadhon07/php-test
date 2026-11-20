<?php
include("database.php");
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            width: 350px;
            margin: 80px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: blue;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Registration Form</h2>

        <form action="register.php" method="POST">
            <label>Full Name</label>
            <input type="text" name="name" placeholder="Enter your name" required>

            <label>Email</label>
            <input type="email" name="email" placeholder="Enter your email" required>

            <label>Phone Number</label>
            <input type="tel" name="phone" placeholder="Enter phone number" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="Enter password" required>

            <button type="submit">Register</button>
        </form>
    </div>

</body>
</html>

<?php


// get data from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $hash= password_hash($password, PASSWORD_DEFAULT);
  
  // insert data into the database
$sql = "INSERT INTO users (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$hash')";

  mysqli_query($conn, $sql);

    echo "New record created successfully";
}

?>