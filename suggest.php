<?php
// Database configuration
$servername = "localhost"; // Change this if your database is on a different server
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "lms"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the suggestion from the form
    $suggestion = $_POST['suggestion'];

    // Prepare and execute SQL query to insert suggestion into the database
    $sql = "INSERT INTO suggest (suggestion) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $suggestion);

    if ($stmt->execute() === TRUE) {
        echo "<script>alert('Thank you for your suggestion!');</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECE Department Library</title>
    <link rel="stylesheet" href="suggest.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="donation.css">
    <style>
        /* Additional CSS for hover effects and transitions */
        .suggestion-form {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
            max-width: 500px;
            margin: auto;
            text-align: center;
        }

        .suggestion-form:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s ease;
            resize: none;
        }

        textarea:focus {
            border-color: dodgerblue;
        }

        input[type="submit"] {
            background-color: dodgerblue;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 25px;
            transition: background-color 0.3s ease;
            font-size: 16px;
            letter-spacing: 1px;
            text-transform: uppercase;
            outline: none;
            border: 2px solid transparent;
        }

        input[type="submit"]:hover {
            background-color: #007bff;
            border-color: #007bff;
        }

        input[type="submit"]:active {
            transform: translateY(1px);
        }
    </style>
</head>
<body style="background-color: #f2f2f2;">

<div class="header">
    <div class="logo"><img src="logo.png" alt="Logo"></div>
    <h1>ECE Department Library</h1> <!-- Heading without typing effect -->
</div>

<div class="nav-bar">
    
        <!-- Your navigation links -->
        <a href="search.php" class="btn btn-light">Search Book</a>
        <a href="request_book.php" class="btn btn-light">Request a Book</a>
        <a href="donation.html" class="btn btn-light">Book Donation</a>
        <a href="ebook.html" class="btn btn-light">E-books Section</a>
        <a href="suggest.php" class="btn btn-light">Suggestions</a>
        
        <a href="latest.html" class="btn btn-light">Latest Updates</a>
    
    <a href="signup.php" class="login-button">sign up</a>
    <a href="index.php" class="login-button">Login</a>
    <a href="admin/index.php" class="login-button">Admin</a>
</div>


<div class="main-content">
    

    <h2 style="text-align: center;">Welcome!</h2>
    
    
    <!-- Search Container -->
    <h2 style="text-align: center;">Drop your suggestion here!</h2>
    <div class="suggestion-form">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <textarea name="suggestion" placeholder="Write your suggestion here..." rows="5"></textarea>
            <br>
            <input type="submit" value="Submit">
        </form>
        
    </div>
    
</div>

<div class="footer" style="text-align: center; padding: 10px; background-color: #333; color: #fff;">
    © 2024 ECE Department Library. All rights reserved.
</div>

</body>
</html>
