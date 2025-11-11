<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles1.css">
    <link rel="stylesheet" href="nav.css">
    <meta charset="UTF-8">
    <title>Sign Up - Eco-Hub</title>
    <style>
        /* Add specific styles for the signup/login forms here */
        .form-container {
            max-width: 500px;
            margin: 80px auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
        }

            .form-container h2 {
                font-size: 2.2rem;
                color: #2E7D32;
                margin-bottom: 30px;
            }

        .form-group {
            margin-bottom: 25px;
            text-align: left;
        }

            .form-group label {
                display: block;
                margin-bottom: 8px;
                font-weight: bold;
                color: #555;
            }

            .form-group input[type="text"],
            .form-group input[type="email"],
            .form-group input[type="password"] {
                width: 100%;
                padding: 14px;
                border: 1px solid #ddd;
                border-radius: 7px;
                font-size: 1rem;
                transition: border-color 0.3s ease;
            }

                .form-group input[type="text"]:focus,
                .form-group input[type="email"]:focus,
                .form-group input[type="password"]:focus {
                    border-color: #7CB342;
                    outline: none;
                }

        .form-container button {
            width: 100%;
            padding: 15px;
            font-size: 1.1rem;
            margin-top: 20px;
        }

        .form-container p {
            margin-top: 25px;
            font-size: 0.95rem;
            color: #666;
        }

            .form-container p a {
                color: #2E7D32;
                font-weight: bold;
                text-decoration: none;
            }

                .form-container p a:hover {
                    text-decoration: underline;
                }

        .message {
            margin-bottom: 20px;
            padding: 12px;
            border-radius: 5px;
            font-weight: bold;
        }

            .message.error {
                background-color: #ffebee;
                color: #c62828;
                border: 1px solid #ef9a9a;
            }

            .message.success {
                background-color: #e8f5e9;
                color: #2e7d32;
                border: 1px solid #a5d6a7;
            }
    </style>
</head>
<body>
    <header id="static">
        <div></div>
        <div id="logo"><a href="home.php"><img src="eco-hub logo.webp" height="70" width="70" alt="Eco-Hub Logo" /></a></div>
        <div></div>
    </header>

    <div class="form-container">
        <h2>Create Your Eco-Hub Account</h2>
        <?php
        session_start();
        if (isset($_SESSION['message'])) {
        echo '<div class="message error">' . $_SESSION['message'] . '</div>';
        unset($_SESSION['message']);
        }
        ?>
        <form action="register.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Sign Up</button>
        </form>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>

    <footer>
        <div class="copyright">All rights reserved © 2023 Eco-Hub</div>
        <a href="#">privacy policy</a>
        <a href="#">terms and conditions</a>
    </footer>
</body>
</html>