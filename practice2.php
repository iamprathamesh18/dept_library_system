
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Book</title>
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="/bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="/bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="header">
    <div class="logo"><img src="logo.png" alt="Logo"></div>
    <h1>ECE Department Library</h1>
</div>

<div class="nav-bar">
    
        <!-- Your navigation links -->
        <a href="search.php" class="btn btn-light">Search Book</a>
        <a href="request_book.html" class="btn btn-light">Request a Book</a>
        <a href="donation.html" class="btn btn-light">Book Donation</a>
        <a href="ebook.html" class="btn btn-light">E-books Section</a>
        <a href="suggest.php" class="btn btn-light">Suggestions</a>
        <a href="#" class="btn btn-light" >Book Exchange</a>
        <a href="latest.html" class="btn btn-light">Latest Updates</a>
    
    <a href="signup.php" class="login-button">sign up</a>
    <a href="index.php" class="login-button">Login</a>
    <a href="admin/index.php" class="login-button">Admin</a>
</div>

<div class="main-content">
    <h2>Welcome!</h2>
    <p>At the ECE Department Library website, you can:</p>
    <ul>
        <li>Search books by book names and author names.</li>
        <li>Reserve a book for your reading.</li>
    </ul>
    <!-- Search Container -->
    <h2>Search Books</h2>
    <form method="post" action="">
        <input type="text" name="search" placeholder="Enter book name">
        <input type="submit" value="Search">
    </form>

<?php
// Database connection
$servername = "localhost"; // Change this to your MySQL server name
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$dbname = "lms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if(isset($_POST['search'])) {
    $search = $_POST['search'];

    // SQL query to search for book names
    $sql = "SELECT * FROM books WHERE book_name LIKE '%$search%'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Book Name: " . $row["book_name"]. "<br>";
            echo "Number: " . $row["book_no"]. "<br>";
        }
    } else {
        echo "Book not currently available";
    }
}
?>
</div>
<div class="footer">
    © 2024 ECE Department Library. All rights reserved.
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





<?php
// Close connection
$conn->close();
?>
