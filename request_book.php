<?php
// Connect to your database
$servername = "localhost"; // Change this if your MySQL server is on a different host
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$dbname = "lms"; // Change this to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the 'search' field is not empty
    if (!empty($_POST["search"])) {
        $books_names = $_POST["search"];

        // Insert the book name into the database
        $sql = "INSERT INTO request (books_names) VALUES ('$books_names')";

        if ($conn->query($sql) === TRUE) {
            echo "Book request submitted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Please enter a book name.";
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECE Department Library</title>
    <link rel="stylesheet" href="request_book.css">
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
    <h2>Place a Request for a New Book</h2>
    <p>Here you can place a request for requesting a new book in the library which is not present.</p>
     <div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Enter requested books</h2>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="mb-4">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Enter book name">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    © 2024 ECE Department Library. All rights reserved.
</div>

</body>
</html>
