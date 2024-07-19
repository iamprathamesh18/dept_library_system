
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Book</title>
    <link rel="stylesheet" href="style.css">

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
        <a href="request_book.php" class="btn btn-light">Request a Book</a>
        <a href="donation.php" class="btn btn-light">Book Donation</a>
        <a href="ebook.html" class="btn btn-light">E-books Section</a>
        <a href="suggest.php" class="btn btn-light">Suggestions</a>
        
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
    <div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Search Books</h2>
                    <form method="post" action="" class="mb-4">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Enter book name">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


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
        echo "<h2>Search Results</h2>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-bordered'>";
        echo "<thead class='table-dark'>";
        echo "<tr>";
        echo "<th>Book Name</th>";
        echo "<th>Number</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["book_name"] . "</td>";
            echo "<td>" . $row["book_no"] . "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
        echo "</div>";
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
