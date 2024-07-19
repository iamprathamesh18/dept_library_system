<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECE Department Library</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="donation.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }

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
        .header {
            text-align: center;
            padding: 30px 0;
        }
        .nav-bar {
            text-align: center;
            padding: 10px 0;
        }
        .main-content {
            text-align: center;
            margin-top: 50px;
        }
        .footer {
            margin-top: 50px;
            padding: 10px;
            background-color: #343a40;
            color: #f8f9fa;
            text-align: center;
        }
        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        button[type="submit"] {
            background-color: #007bff;
            border-color: #007bff;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="header">
    <div class="logo"><img src="logo.png" alt="Logo"></div>
    <h1>ECE Department Library</h1>
</div>

<div class="nav-bar">
    <a href="search.php" class="btn btn-light">Search Book</a>
    <a href="request_book.php" class="btn btn-light">Request a Book</a>
    <a href="donation.php" class="btn btn-light">Book Donation</a>
    <a href="ebook.html" class="btn btn-light">E-books Section</a>
    <a href="suggest.php" class="btn btn-light">Suggestions</a>
    
    <a href="latest.html" class="btn btn-light">Latest Updates</a>
    <a href="signup.php" class="login-button">Sign Up</a>
    <a href="index.php" class="login-button">Login</a>
    <a href="admin/index.php" class="login-button">Admin</a>
</div>

<div class="main-content">
    <div class="container form-container">
        <h2>Welcome!</h2>
        <h3>Your donation can turn a page into a whole new adventure. Share the joy of reading!</h3>

        <form class="book-request-form" method="post">
            <div class="form-group">
                <label for="book-name">Book Name</label>
                <input type="text" class="form-control" id="book-name" name="book_name" placeholder="Book Name" required>
            </div>
            <div class="form-group">
                <label for="author-name">Author Name</label>
                <input type="text" class="form-control" id="author-name" name="author_name" placeholder="Author Name" required>
            </div>
            <div class="form-group">
                <label for="publisher-name">Publisher Name</label>
                <input type="text" class="form-control" id="publisher-name" name="publisher_name" placeholder="Publisher Name" required>
            </div>
            <div class="form-group">
                <label for="year">Year</label>
                <input type="text" class="form-control" id="year" name="year" placeholder="Year" required>
            </div>
            <div class="form-group">
                <label for="user-email">Email</label>
                <input type="email" class="form-control" id="user-email" name="user_email" placeholder="Your Email" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
        if(isset($_POST['submit'])){
            $servername = "localhost"; // Change this if your database is hosted elsewhere
            $username = "root"; // Change this to your database username
            $password = ""; // Change this to your database password
            $dbname = "lms"; // Change this to your database name

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Retrieve form data
            $book_name = $_POST['book_name'];
            $author_name = $_POST['author_name'];
            $publisher_name = $_POST['publisher_name'];
            $year = $_POST['year'];
            $email = $_POST['user_email'];

            // Sanitize the input data
            $book_name = mysqli_real_escape_string($conn, $book_name);
            $author_name = mysqli_real_escape_string($conn, $author_name);
            $publisher_name = mysqli_real_escape_string($conn, $publisher_name);
            $year = mysqli_real_escape_string($conn, $year);
            $email = mysqli_real_escape_string($conn, $email);

            // Insert data into the donation table
            $sql = "INSERT INTO donation (book_name, author_name, publisher_name, year, email) 
                    VALUES ('$book_name', '$author_name', '$publisher_name', '$year', '$email')";

            if ($conn->query($sql) === TRUE) {
                echo "<p>New record created successfully</p>";
            } else {
                echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }

            // Close the connection
            $conn->close();
        }
        ?>
    </div>
</div>

<div class="footer">
    © 2024 ECE Department Library. All rights reserved.
</div>

</body>
</html>
