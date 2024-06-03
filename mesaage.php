<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        #chat-box {
            border: 1px solid #ccc;
            min-height: 300px;
            margin-bottom: 20px;
            padding: 10px;
            overflow-y: auto;
        }
        #chat-box div {
            margin-bottom: 10px;
        }
        form textarea {
            width: calc(100% - 80px);
            padding: 10px;
            margin-bottom: 10px;
        }
        form button {
            width: 80px;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Chat System</h1>
        <div id="chat-box">
            <?php
            session_start();

            // Check if user is logged in
            if (!isset($_SESSION['user_id'])) {
                echo "<p>Please <a href='login.php'>login</a> to continue.</p>";
            } else {
                // Database connection parameters
                $servername = "localhost";
                $username = "username";
                $password = "password";
                $database = "your_database";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $database);

                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Check if form is submitted
                if (isset($_POST['send_message'])) {
                    $message = $_POST['message'];
                    $sender_id = $_SESSION['user_id'];
                    $receiver_id = 1; // Assuming admin's user ID is 1

                    // Insert message into database
                    $sql = "INSERT INTO messages (sender_id, receiver_id, message, sent_at) 
                            VALUES ('$sender_id', '$receiver_id', '$message', NOW())";
                    if (mysqli_query($conn, $sql)) {
                        // Message sent successfully
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }

                // Retrieve chat history
                $user_id = $_SESSION['user_id'];
                $sql = "SELECT messages.*, users.name AS sender_name FROM messages 
                        INNER JOIN users ON messages.sender_id = users.id 
                        WHERE (messages.sender_id = '$user_id' AND messages.receiver_id = 1) 
                        OR (messages.sender_id = 1 AND messages.receiver_id = '$user_id') 
                        ORDER BY messages.sent_at ASC";
                $result = mysqli_query($conn, $sql);
                while ($message = mysqli_fetch_assoc($result)) {
                    echo "<div>";
                    echo "<strong>" . ($message['sender_name'] == $_SESSION['user_name'] ? 'You' : $message['sender_name']) . ":</strong> ";
                    echo $message['message'];
                    echo "<span>" . $message['sent_at'] . "</span>";
                    echo "</div>";
                }

                mysqli_close($conn);
            }
            ?>
        </div>
        <form method="post" action="">
            <textarea name="message" placeholder="Type your message"></textarea>
            <button type="submit" name="send_message">Send</button>
        </form>
    </div>
</body>
</html>
