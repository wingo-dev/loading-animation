<!DOCTYPE html>
<html>

<head>
    <title>Loading Animation</title>
    <style>
        #loading {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
        }

        .spinner {
            position: absolute;
            top: 50%;
            left: 50%;
            margin: auto;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 5px solid #fff;
            border-top-color: #00bcd4;
            animation: spin 1s ease-in-out infinite;
        }



        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }
    </style>
    <script>
        function runFunction() {
            var loading = document.getElementById('loading');
            loading.style.display = 'block';

            var xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Hide the loading animation when the PHP function has finished running
                    loading.style.display = 'none';
                    // Display the response from the server
                }
            };

            xhr.open('GET', 'load.php', true);
            xhr.send();
        }
    </script>
</head>

<body>
    <div id="loading">
        <div class="spinner"></div>
    </div>

    <button onclick="runFunction()">Run PHP function</button>

</body>

</html>