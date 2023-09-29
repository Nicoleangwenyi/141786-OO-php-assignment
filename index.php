<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
    <link rel="stylesheet" href="style.css">
    <?php 
    
    ?>
</head>
<body>
    <div class="container">
        <h1>User Registration</h1>
        <form method="POST" action="process_registration.php" id="registrationForm">
            <div class="form-box">
                <p>Name:</p><input type="text" id="name" name="name" required>
                <p>Email:</p><input type="email" id="email" name="email" required>
  
                <p>Phone number:</p><input type="tel" id="phone" name="phone" required>
           
                <p>Password:</p><input type="password" id="password" name="password" required>
            
                <p>Confirm password:</p><input type="password" id="confirm_password" name="confirm_password" required>
                <div id="password_error" class="error-message"></div> 
            
                <p>Comments:</p><textarea id="comments" name="comments" rows="4"></textarea>
           
                <input type="submit" value="Register">
            </div>
        </form>
    </div>

    
</body>
</html>
