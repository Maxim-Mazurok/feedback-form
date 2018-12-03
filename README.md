Feedback Form by [Maxim Mazurok](http://codecanyon.net/user/maxim_mazurok)
====================

This project was started to try the CodeCanyon platform by EvantoMarket using minimum effort. 

Quick start
---------------------

1. Copy "feedback-form" folder to your web-sites root directory
2. Include "feedback-form/src/php/FeedbackForm.php" to your project
3. Do following on your page:

    - Initiate:
    
            $feedback_form = new FeedbackForm();
    - Put into your <head> element:
    
            echo $feedback_form->get_style();
    - Put into your <body> element:
    
            echo $feedback_form->get_html();
            echo $feedback_form->get_script();

Customization
---------------------

All basic customization can be done in config.ini file.

### STYLE

__main-color__

    Affects button background, popup headline, popup button and 
    success/error message background

__text-color__

    Affects button text color, popup headline text color, popup 
    button text color and success/error message background

### TEXT

__feedback_button_text__

    Displayed on the main Call-To-Action button. 
    Default: "GIVE US FEEDBACK"

__popup_headline_text__

    Displayed in the feedback popup on the top line. 
    Default: "DO YOU LIKE US?"

__popup_comment_placeholder_text__

    Displayed as a placeholder in feedback comment text area
    Default: "Tell us why? (optional)"
    
__popup_sumbit_button_text__

    Displayed as a label for button witch sends feedback
    Default: "SEND"
    
__popup_submitted_ok__

    Displayed after sending feedback, if it was successful
    Default: "Thanks!"
    
__popup_submitted_error__

    Displayed after sending feedback, if it was NOT successful
    Default: "Error :( Try again"
    
### NOTIFICATION

__feedback_email__

    If you want to receive notifications about new feedback to your
     email, then you should specify your email address here.
     make sure that your server can send emails by php mail() function
    If you don't want to receive emails about new feedbacks, set that
     parameter to false.
    Default: false
     
### ADVANCED

__google-font-name__

    If you want to use Google Font in feedback form, specify its name.
    If you don't - set to false.
    Example: https://www.google.com/fonts/specimen/Open+Sans => "Open Sans"
    Default: "Open Sans"

__font-name__

    This font will be used if no google font specified.
    Default: "sans-serif"
    
__ajax-receiver-url__

    Feedback form data will be sent to this URL.
    It will be sent in application/x-www-form-urlencoded format.
    Default: "/feedback-form/src/php/feedback-form-ajax.php"
