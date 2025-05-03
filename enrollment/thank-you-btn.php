<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="stylesheet" href="css/enrollment_design.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            color: white;
            margin: 0;
            background: url('image/16.jpg') no-repeat center center/cover;
            position: relative;
        }

        /* Overlay for better readability */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6); /* Dark overlay */
            backdrop-filter: blur(5px);
            z-index: 1;
        }

        .container {
            background: rgba(255, 255, 255, 0.15);
            padding: 30px;
            border-radius: 12px;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            animation: fadeIn 1s ease-in-out;
            max-width: 500px;
            position: relative;
            z-index: 2;
        }

        h1 {
            font-weight: 600;
            font-size: 2rem;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        /* Buttons */
        .btn {
            display: inline-block;
            padding: 12px 20px;
            font-size: 1rem;
            font-weight: 500;
            color: white;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            margin: 10px;
            cursor: pointer;
        }

        .thank-you-btn {
            background:rgb(140, 181, 6);
        }

        .thank-you-btn:hover {
            background:rgb(205, 226, 12);
        }

        .logout-btn {
            background:rgb(7, 7, 149);
        }

        .logout-btn:hover {
            background:rgb(7, 30, 239);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Enrollment Successful!</h1>
        <p>Thank you for submitting your enrollment details. Your enrollment has been successfully processed.</p>
        <p>You can go back to the home page or log out below.</p>

        <!-- Buttons -->
        <a href="index.php" class="btn thank-you-btn">Go Back to Home</a>

        <form action="logout.php" method="post">
            <button type="submit" class="btn logout-btn">Logout</button>
        </form>
    </div>
</body>
</html>
