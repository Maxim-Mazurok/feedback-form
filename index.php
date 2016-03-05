<?php
# Include FeedbackForm Class
require_once('src/php/FeedbackForm.php');
# Initiate $feedback_form object
$feedback_form = new FeedbackForm();
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feedback Form DEMO</title>
    <?php
        # Output needed for FeedbackForm css (<style>...</style>)
        echo $feedback_form->get_style();
    ?>
</head>
<body>
    <h1>Your Awesome Website</h1>
    <?php
        # Output needed for FeedbackForm html (<style>...</style>)
        echo $feedback_form->get_html();
        echo $feedback_form->get_script();
    ?>
</body>
</html>