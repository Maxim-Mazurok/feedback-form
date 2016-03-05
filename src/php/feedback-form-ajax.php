<?php
if (!empty($_POST['feedback_like']) || !empty($_POST['feedback_message'])) {

    $cfg = parse_ini_file("../../config.ini");

    /* validation */
    $location = (!empty($_POST['feedback_location'])) ? $_POST['feedback_location'] : false;
    switch ($_POST['feedback_like']) {
        case 'like':
            $like = 'like';
            break;
        case 'dislike':
            $like = 'dislike';
            break;
        default:
            $like = false;
            break;
    }
    $comment = html_entity_decode(trim($_POST['feedback_message']));
    str_replace("\"", "", $comment);
    str_replace("'", "", $comment);
    $comment = (empty($comment)) ? false : $comment;

    /* message constructing */
    $msg_location = "on page $location ";
    $msg_comment = "with comment: $comment";
    if ($like !== false) {
        $message = "You get new $like {$msg_location}{$msg_comment}";
    } else {
        $message = "You get new feedback {$msg_location}{$msg_comment}";
    }

    /* sending feedback */
    if ($cfg['feedback_email'] !== false) {
        mail($cfg['feedback_email'], 'New Feedback Recieved', $message);
    }
    // Your code to add comment to DB may go here:
    /** @var string|boolean $location - URL where feedback was submitted. false when unknown */
    /** @var string|boolean $like - like or dislike. false when undefined */
    /** @var string|boolean feedback_message - comment to feedback. false when empty */

    echo 'ok';
} else {
    die('No like, no comment...');
}