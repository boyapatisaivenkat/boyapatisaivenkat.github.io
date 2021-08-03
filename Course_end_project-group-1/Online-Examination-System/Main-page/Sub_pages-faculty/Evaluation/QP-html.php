<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talentia-Welcome</title>
    <link rel="stylesheet" href="QP-CSS.css">
</head>
<body>
<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
    <header>
        <div class="main">
            <div class="logo">
                <h1>Talentia...</h1>
            </div>
        </div>
        <div class="title">
            <h1>Talentia...</h1>
            <br>
            <h5>-Start the paper setting and Evaluation</h5>
        </div>
        <div class="button">
            <br><br><br><br><br><br><br><br>
            <a href="Online-Examination-System\Main-page\Sub_pages\Question_paper\view.php" class="btn">View Answer Scripts</a>
            <a href="mailto: student@example.com" class="btn">Mail the Results</a>
            <br><br><br>
            <form action="upload.php" method="POST" enctype="multipart/form-data">
            <fieldset style="width: 400px; height: 90px; padding: 20px 60px;">
                    <input type="file" id="real-file" name="my_file" hidden="hidden" />
                    <button type="button" id="custom-button">CHOOSE A FILE</button>
                    <span id="custom-text">No file chosen, yet.</span><br><br>
                    <input type="submit"id = "custom-button2" name="submit" value="Upload">
                </fieldset>
            </form>
        </div>
        <div class="submit-test">
            <a href="/Online-Examination-System/Main-page/Sub_pages-faculty/subject/Subject-html.html" class="btn">Update >>></a>
        </div>
    </header>
    <script src="QP-JS.JS"></script>
</body>
</html>
