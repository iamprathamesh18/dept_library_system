<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ECE Department Library</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
    .logo img {
        width: 80px;
        height: 80px;
        border-radius: 0;
        position: absolute;
        top: 0;
        left: 0;
        margin: 10px;
        margin-left: 20px;
        margin-top: 7px;
    }
    /* Custom CSS */
    

    #main_content {
      /* Add your styles for main_content here */
      width: 99%; /* Example width */
      padding: 120px; /* Example padding */
      background-color: #f8f9fa; /* Example background color */
    }
  
    </style>
</head>
<body>

<div class="header">
    <div class="logo"><img src="logo.png" alt="Logo"></div>
    <h1>ECE Department Library</h1> <!-- Heading without typing effect -->
</div>

<div class="nav-bar">
    <div class="nav-links">
        <!-- Your navigation links -->
        <a href="search.php">Search Book</a>
        <a href="request_book.php">Request a Book</a>
        <a href="donation.php">Book Donation</a>
        <a href="ebook.html">E-books Section</a>
        <a href="suggest.php">Suggestions</a>
        
        <a href="latest.html">Latest Updates</a>
    </div>
    <a href="signup.php" class="login-button">sign up</a>
    <a href="index.php" class="login-button">Login</a>
    <a href="admin/index.php" class="login-button">Admin</a>
</div>

<div class="container-fluid center-content" id="main_content">
            <center><h3><u>User Registration Form</u></h3></center>
            <form action="register.php" method="post">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email ID:</label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile:</label>
                    <input type="text" name="mobile" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea name="address" class="form-control" required></textarea> 
                </div> <br>
                <button type="submit" class="btn btn-primary">Register</button> 
            </form>
        </div>



<div class="footer">
    © 2024 ECE Department Library. All rights reserved.
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
