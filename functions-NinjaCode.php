<?php

/*==============================
    @part header.php
    @package NinjaCode IFSC Code Script
    @version v2.0
    @author Mohammad Sharfuddin
    @organization NinjaCode
    @web www.NinjaCode.tech
==============================*/

// -- some useful functions that are used

// -- returns seo friendly url
function seoUrlNinjaCode($s) {
    return strtolower(str_replace(' ', '_', $s));
}

// -- sanitize user inputs
function filterInputNinjaCode($s) {
    global $dbNinjaCode;
    return strip_tags(ucwords(str_replace("_", " ", mysqli_real_escape_string($dbNinjaCode, trim($s)))));
}

// -- returns current url
function currentUrlNinjaCode() {
    return (($_SERVER['HTTPS'] == "on") ? "https" : "http") . "://" . $_SERVER[HTTP_HOST] . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
}