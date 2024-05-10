<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: grid;
            place-items: center;
            height: 100vh;
        }

        h1 {
            text-align: center
        }

        .container {
            width: 60%;
            max-width: 600px;
            display: grid;
            grid-template-columns: 1fr;
            grid-gap: 20px;
            position: relative;
        }

        #blog-form {
            margin-bottom: 20px;
        }

        #posts {
            display: grid;
            grid-gap: 10px;
            overflow-y: auto;
            max-height: 60vh;
        }

        .blog-entry {
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Blog</h1>
        <form id="blog-form" action="post_message.php" method="post">
            <input type="text" name="pseudonyme" placeholder="Your pseudonym">
            <textarea name="message" rows="4" cols="50" placeholder="Your message"></textarea>

            <!-- Add hidden input field for client's IP address -->
            <input type="hidden" name="client_ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
            
            <button type="submit">Post</button>
        </form>
        <div id="posts">
            <?php include_once 'get_messages.php'; ?>
        </div>
    </div>
</body>
</html>

