<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Internet Connection Indicator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .indicator {
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .online {
            color: #27ae60;
        }

        .offline {
            color: #c0392b;
        }

        .wifi-icon {
            font-size: 48px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="indicator">
        <h1>Internet Connection Indicator</h1>
        <hr>
        <div class="wifi-icon">
            <i class="fas fa-wifi"></i>
        </div>
        <div id="connection-status" class="online">
            <!-- Indicator will be updated here -->
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const connectionStatus = document.getElementById('connection-status');

            function updateConnectionStatus() {
                if (navigator.onLine) {
                    connectionStatus.textContent = 'You are online';
                    connectionStatus.classList.remove('offline');
                    connectionStatus.classList.add('online');
                } else {
                    connectionStatus.textContent = 'You are offline';
                    connectionStatus.classList.remove('online');
                    connectionStatus.classList.add('offline');
                }
            }

            // Initial check and event listener for network status changes
            updateConnectionStatus();
            window.addEventListener('online', updateConnectionStatus);
            window.addEventListener('offline', updateConnectionStatus);
        });
    </script>
</body>
</html>
