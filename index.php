<!DOCTYPE html>
<html>

<head>
    <title>Loading Animation</title>
    <style>
        .loader {
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            /* make the background color darker and more transparent */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .loader:before {
            content: "";
            box-sizing: border-box;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            margin-top: -30px;
            margin-left: -30px;
            border-radius: 50%;
            border: 6px solid #fff;
            border-color: #fff transparent #fff transparent;
            animation: loader 1.2s linear infinite;
        }

        @keyframes loader {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    <script>
        function showLoadingAnimation() {
            // Show the loading animation
            var spinner = document.createElement('div');
            spinner.className = 'loader';
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