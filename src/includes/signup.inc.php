<?php
    if(isset($_POST["submit"]))
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $username = $_POST["uid"];
        $pwd = $_POST["pwd"];
        $pwdRepeat = $_POST["pwdrepeat"];
        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';
        if(emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false)
        {
            header("location: ../../pages/login.php?error=emptyinput");
            exit();
        }
            if(invalidUid($username) !== false)
        {
            header("location: ../../pages/login.php?error=invaliduid");
            exit();
        }
            if(invalidEmail($email) !== false)
        {
            header("location: ../../pages/login.php?error=invalidemail");
            exit();
        }
            if(pwdMatch($pwd, $pwdRepeat) !== false)
        {
            header("location: ../../pages/login.php?error=passwordsdontmatch");
            exit();
        }
            if(uidExists($conn, $username, $email) !== false)
        {
            header("location: ../../pages/login.php?error=usernametaken");
            exit();
        }
        createUser($conn, $name, $email, $username, $pwd);
    }
    else
    {
        header("location: ../../pages/login.php");
        exit();
    }