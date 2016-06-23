<?php

    function isLogin() {
        $admin=$_SESSION['admin'];
        return !empty($admin);
    }