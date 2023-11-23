<?php include('included-files/Constant.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IITJKnowledgeNest - A Place for IIT Jodhpur Students to Share Notes</title>

    <?php include(HEADER_SETUP); ?>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    
    <style>
        :root {
            --primary-color: #003366; /* IIT Jodhpur Blue */
            --secondary-color: #e74c3c; /* Red */
            --background-gradient: linear-gradient(to right, #3498db, #e74c3c); /* Gradient Background */
        }

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: var(--background-gradient);
            color: #fff;
        }

        header {
            background-color: var(--primary-color);
            color: #fff;
            padding: 20px 0;
        }

        header img {
            max-width: 100px;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        main {
            text-align: center;
            padding: 20px;
        }

        form {
            margin-top: 20px;
        }

        input {
            padding: 10px;
            width: 60%;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            font-size: 1em;
            background-color: var(--secondary-color);
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <?php include(NAVIGATION_BAR); ?>

    

    <main class="index-main">
        <form action="notes.php" method="get">
            <input id="subject-number-input" class="form-control" name="search" type="text" placeholder="Subject Number or Title">
            <button type="submit" class="btn btn-danger">Find Notes</button>
        </form>
    </main>

    <?php include(SCRIPTS); ?>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="src/jscript/search-subject.js" ></script>
    
</div>
</body>
</html>
