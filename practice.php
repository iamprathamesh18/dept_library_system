<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECE Department Library</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .header {
            background-color: #007bff;
            padding: 20px;
            text-align: center;
            color: white;
        }

        .nav-bar {
            background-color: #007bff;
            padding: 10px;
            text-align: center;
        }

        .nav-link {
            margin: 0 10px;
            text-decoration: none;
            color: white;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #cceeff;
        }

        .login-button {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            border: 2px solid white;
            border-radius: 25px;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .login-button:hover {
            background-color: white;
            color: #007bff;
            border-color: #007bff;
        }

        .main-content {
            padding: 50px 20px;
            text-align: center;
            background-image: url('background.jpg'); /* Background image */
            background-size: cover;
            color: #fff;
        }

        .suggestion-form {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
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
            width: calc(100% - 22px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s ease;
            resize: none;
            font-family: Arial, sans-serif;
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
            animation: pulse 1s infinite;
        }

        input[type="submit"]:active {
            transform: translateY(1px);
        }

        .footer {
            text-align: center;
            padding: 10px;
            background-color: #007bff;
            color: white;
        }

        .footer a {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: #cceeff;
        }

        @keyframes pulse {
            0% {
                transform: scale(0.95);
                box-shadow: 0 0 0 0 rgba(0, 123, 255, 0.7);
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 0 10px rgba(0, 123, 255, 0);
            }

            100% {
                transform: scale(0.95);
                box-shadow: 0 0 0 0 rgba(0, 123, 255, 0);
            }
        }
    </style>
</head>
<body>

<div class="header">
    <div class="logo"><img src="logo.png" alt="Logo"></div>
    <h1>ECE Department Library</h1>
</div>

<div class="nav-bar">
    <a href="search.php" class="nav-link">Search Book</a>
    <a href="request_book.php" class="nav-link">Request a Book</a>
    <a href="donation.html" class="nav-link">Book Donation</a>
    <a href="ebook.html" class="nav-link">E-books Section</a>
    <a href="suggest.php" class="nav-link">Suggestions</a>
    <a href="#" class="nav-link">Book Exchange</a>
    <a href="latest.html" class="nav-link">Latest Updates</a>
    <a href="signup.php" class="login-button">Sign up</a>
    <a href="index.php" class="login-button">Login</a>
    <a href="admin/index.php" class="login-button">Admin</a>
</div>

<div class="main-content">
    <h2>Welcome!</h2>
    <h2>Drop your suggestion here!</h2>
    <div class="suggestion-form">
        <form id="suggestion-form">
            <textarea id="suggestion-textarea" placeholder="Write your suggestion here..." rows="5"></textarea>
            <br>
            <input type="submit" value="Submit" onclick="submitSuggestion()">
        </form>
        <div id="status-message" style="display: none; color: green;">Thank you for your suggestion!</div>
        <div id="error-message" style="display: none; color: red;">Error: Unable to submit suggestion. Please try again later.</div>
    </div>
</div>

<div class="footer">
    <p>© 2024 ECE Department Library. All rights reserved.</p>
</div>

<script>
    function submitSuggestion() {
        var suggestion = document.getElementById('suggestion-textarea').value;
        if (suggestion.trim() !== '') {
            // Simulate submission (replace this with actual submission code)
            setTimeout(function () {
                document.getElementById('suggestion-form').reset();
                document.getElementById('status-message').style.display = 'block';
                document.getElementById('error-message').style.display = 'none';
            }, 1000);
        } else {
            alert('Please write your suggestion first.');
        }
    }
</script>

</body>
</html>
