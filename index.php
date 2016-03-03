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
    <h1>Test title</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequatur, deserunt dolor dolore ea facere illum incidunt itaque iusto magnam neque quas recusandae repudiandae sed similique sunt tempora ullam vero!</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequatur, deserunt dolor dolore ea facere illum incidunt itaque iusto magnam neque quas recusandae repudiandae sed similique sunt tempora ullam vero!</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequatur, deserunt dolor dolore ea facere illum incidunt itaque iusto magnam neque quas recusandae repudiandae sed similique sunt tempora ullam vero!</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequatur, deserunt dolor dolore ea facere illum incidunt itaque iusto magnam neque quas recusandae repudiandae sed similique sunt tempora ullam vero!</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequatur, deserunt dolor dolore ea facere illum incidunt itaque iusto magnam neque quas recusandae repudiandae sed similique sunt tempora ullam vero!</p>
    <?php
        # Output needed for FeedbackForm html (<style>...</style>)
        echo $feedback_form->get_html();
    ?>
    <?php include_once('src/php/feedback-form.php'); //TODO?>
</body>
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</html>