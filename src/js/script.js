document.getElementById('feedback_form_button').onclick = feedback_open;

function feedback_close() {
    /*alert('close');*/
    document.getElementById('feedback_form_wrap').style.opacity = '0';
    document.getElementById('feedback_form_overlap').style.opacity = '0';
    setTimeout(function () {
        document.getElementById('feedback_form_wrap').style.display = 'none';
        document.getElementById('feedback_form_overlap').style.display = 'none';
    }, 200)
}

function feedback_open() {
    /*alert('open');*/
    document.getElementById('feedback_form_wrap').style.display = 'block';
    document.getElementById('feedback_form_overlap').style.display = 'block';
    setTimeout(function () {
        document.getElementById('feedback_form_wrap').style.opacity = '1';
        document.getElementById('feedback_form_overlap').style.opacity = '0.5';
        document.getElementById('feedback_form_overlap').onclick = feedback_close;
    }, 100);
}

function like_yes() {
    document.getElementById('like_no').style.opacity = 0.7;
    document.getElementById('like_yes').style.opacity = 1;
    document.getElementById('feedback_message').focus();
    document.getElementById("feedback_rating").value = 'like';
}

function like_no() {
    document.getElementById('like_yes').style.opacity = 0.7;
    document.getElementById('like_no').style.opacity = 1;
    document.getElementById('feedback_message').focus();
    document.getElementById("feedback_rating").value = 'dislike';
}