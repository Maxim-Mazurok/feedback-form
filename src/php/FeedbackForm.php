<?php

class FeedbackForm {

    protected $style;
    protected $script;
    protected $html;

    private $config;

    public function __construct() {
        $this->config = parse_ini_file(dirname(__FILE__) . "/../../config.ini", true);
    }

    public function get_style() {
        $style = file_get_contents(dirname(__FILE__) . "/../../res/css/style.css");
        $style = str_replace("__main-color__", $this->config['STYLE']['main-color'], $style);
        $style = str_replace("__text-color__", $this->config['STYLE']['text-color'], $style);
        $google_font_name = (!empty($this->config['ADVANCED']['google-font-name'])) ? $this->config['ADVANCED']['google-font-name'] : "";
        $style = str_replace("__google-font-name__", "'$google_font_name',", $style);
        $style = str_replace("__font-name__", $this->config['ADVANCED']['font-name'], $style);
        $style = "<style>$style</style>";
        $this->style = $style;
        return $style;
    }

    public function get_script() {
        // TODO
    }

    public function get_html() {
        $html = $this->get_button_html();
        $html .= $this->get_popup_html();
        return $html;
    }

    protected function get_button_html() {
        $html = file_get_contents(dirname(__FILE__) . "/../../res/html/feedback-button.html");
            $html = str_replace("__feedback_button_text__", $this->config['TEXT']['feedback_button_text'], $html);
        return $html;
    }

    protected function get_popup_html() {
        $html = file_get_contents(dirname(__FILE__) . "/../../res/html/feedback-popup.html");
        $html = str_replace("__popup_headline_text__", $this->config['TEXT']['popup_headline_text'], $html);
        $html = str_replace("__popup_comment_placeholder_text__", $this->config['TEXT']['popup_comment_placeholder_text'], $html);
        $html = str_replace("__popup_sumbit_button_text__", $this->config['TEXT']['popup_sumbit_button_text'], $html);
        return $html;
    }

}