<?php include('included-files/Constant.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include(HEADER_SETUP); ?>
    <title>New Note</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        #write-main {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        input,
        textarea {
            width: calc(100% - 20px);
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

        #error-check {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 4px;
            margin-top: 20px;
            display: none;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #343a40;
            color: #fff;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

    </style>
</head>
<body>
    <?php include(NAVIGATION_BAR); ?>
    
    <?php if ($user_logged_in == true) { ?>
        <main id="write-main">
            <header>
                <h1>Upload New Note</h1>
            </header>

            <form method="post" enctype="multipart/form-data" onsubmit="return validSubject()" action="review.php">
                <input id="subject-number-input" class="form-control" name=<?php echo POST_NOTE_NUMBER; ?> type="hidden" value="32013" placeholder="Subject No.">
                <input id="note-title" class="form-control" name=<?php echo POST_NOTE_TITLE; ?> type="text" placeholder="Title">
                <textarea id="note-content" class="form-control" placeholder="Write notes" name=<?php echo POST_NOTE_CONTENT; ?> id=""></textarea>
                <input type="file" name="fileToUpload" id="fileToUpload">
                <div>
                    <button type="submit" class="btn btn-danger">Submit</button>
                    <button type="button" class="btn btn-danger" onclick="window.location.href='index.php'">Cancel</button>
                </div>
            </form>

            <div id="error-check" hidden>
                <span></span>
            </div>
        </main>
    <?php } ?>

    <footer>
        &copy; <?php echo date("Y"); ?> 2023 IITJKnowledgeNest. All rights reserved.
    </footer>
    
</div>
    <?php include(SCRIPTS); ?>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="src/jscript/search-subject.js"></script>
</body>
</html>
