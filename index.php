<!DOCTYPE html>
<html>

<head>
    <title>Loading Animation</title>
    <style>
        /* CSS animation for the loading spinner */
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .spinner {
            display: block;
            margin: 0 auto;
            border: 4px solid rgba(0, 0, 0, 0.1);
            border-top-color: #00bcd4;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            z-index: 9999;
            position: fixed;
            top: 50%;
            left: 50%;
            margin-top: -25px;
            margin-left: -25px;
            background-color: rgba(255, 255, 255, 0.5);
            /* Transparent background */
        }
    </style>
    <script>
        function showLoadingAnimation() {
            // Show the loading animation
            var spinner = document.createElement('div');
            spinner.className = 'spinner';
            document.body.appendChild(spinner);
        }
    </script>
</head>

<body>
    <?php
    // Execute the PHP script
    sleep(5); // Simulate a delay of 5 seconds
    echo "Hello, World!";

    // Hide the loading animation

    ?>
    <form method="post">
        <button type="submit" onclick="showLoadingAnimation()">Run PHP function</button>
    </form>

    <a href="load.php" onclick="showLoadingAnimation()">Run PHP function with GET</a>
</body>

</html>