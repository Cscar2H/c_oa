<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * common function
 */

function msg($url, $msg) {
    $url = site_url($url);
    if ($msg=='') {
        echo "<script>window.location.href='{$url}';</script>";
    }
    else{
        echo "<script>alert('{$msg}');window.location.href='{$url}';</script>";
    }
    die();
}

function chk_login() {
    if (!isset($_SESSION['username']) OR $_SESSION['username'] === NULL OR $_SESSION['username'] === '') {
        msg('admin/login', '请登录');
        die();
    }
}

function back($msg) {
    echo "<script language=\"javascript\">alert('{$msg}');location.href = 'javascript:history.back()'</script>";
    die;
}

function chk_role($loc) {
    $role = $_SESSION['role'];

    switch ($role) {
        case '1':
            if ($loc != 'staff') {
                back('无权操作');
                die;
            }
            break;
        case '2':
            if ($loc != 'grade') {
                back('无权操作');
                die;
            }
            break;
        default:
            break;
    }

}