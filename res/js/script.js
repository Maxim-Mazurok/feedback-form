document.getElementById('feedback_form_button').onclick = feedback_open;

document.getElementById('feedback_form').onsubmit = submit_form;

function feedback_close() {
    document.getElementById('feedback_form_wrap').style.opacity = '0';
    document.getElementById('feedback_form_overlap').style.opacity = '0';
    setTimeout(function () {
        document.getElementById('feedback_form_wrap').style.display = 'none';
        document.getElementById('feedback_form_overlap').style.display = 'none';
        feedback_reset();
    }, 200)
}

function feedback_open() {
    document.getElementById('feedback_form_wrap').style.display = 'block';
    document.getElementById('feedback_form_overlap').style.display = 'block';
    setTimeout(function () {
        document.getElementById('feedback_form_wrap').style.opacity = '1';
        document.getElementById('feedback_form_overlap').style.opacity = '0.5';
        document.getElementById('feedback_form_overlap').onclick = feedback_close;
    }, 100);
}

function like_yes() {
    document.getElementById('like_no').style.opacity = 0.5;
    document.getElementById('like_yes').style.opacity = 1;
    document.getElementById('feedback_message').focus();
    document.getElementById("feedback_like").value = 'like';
}

function like_no() {
    document.getElementById('like_yes').style.opacity = 0.5;
    document.getElementById('like_no').style.opacity = 1;
    document.getElementById('feedback_message').focus();
    document.getElementById("feedback_like").value = 'dislike';
}

function submit_form(evt) {
    evt.preventDefault();
    var feedback_like = document.getElementById("feedback_like").value;
    var feedback_message = document.getElementById("feedback_message").value;
    var feedback_location = window.location;
    xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == XMLHttpRequest.DONE) {
            form_submitted(xhr.responseText);
        }
    };
    xhr.open("POST", "__ajax-receiver-url__", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("feedback_like=" + feedback_like + "&feedback_message=" + feedback_message + "&feedback_location=" + feedback_location);
}

function form_submitted(status) {
    if (status == 'ok') {
        msg = '__popup_submitted_ok__';
    } else {
        msg = '__popup_submitted_error__';
    }
    document.getElementById('feedback_form_status_msg').innerHTML = msg;
    document.getElementById('feedback_form_headline').style.opacity = '0';
    document.getElementById('feedback_form_container').style.opacity = '0';
    setTimeout(function () {
        document.getElementById('feedback_form_headline').style.display = 'none';
        document.getElementById('feedback_form_container').style.display = 'none';
        document.getElementById('feedback_form_status').style.display = 'block';
        setTimeout(function () {
            document.getElementById('feedback_form_status').style.opacity = '1';
            setTimeout(function () {
                feedback_close();
            }, 1000)
        }, 100)
    }, 200)
}

function feedback_reset() {
    document.getElementById('feedback_form_headline').style.display = 'block';
    document.getElementById('feedback_form_container').style.display = 'block';
    document.getElementById('feedback_form_status').style.display = 'none';
    document.getElementById('feedback_form_status').style.opacity = '0';
    document.getElementById('feedback_form_headline').style.opacity = '1';
    document.getElementById('feedback_form_container').style.opacity = '1';
    document.getElementById("feedback_like").value = '';
    document.getElementById('like_no').style.opacity = 0.5;
    document.getElementById('like_yes').style.opacity = 0.5;
    document.getElementById("feedback_message").value = '';
}
