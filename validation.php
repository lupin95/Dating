<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 3/14/2019
 * Time: 7:30 PM
 */

// Kiểm tra định dạng usẻname
function check($str) {
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}