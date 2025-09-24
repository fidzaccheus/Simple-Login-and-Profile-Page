<?php
session_start();

$_SESSION['message'] = '';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //SIGN UP
    if (isset($_POST['signUpButton'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        if ($password === $confirmPassword) {

            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;

            $_SESSION["message"] = '<div class="alert alert-success text-align-center">Sign up successful! <a href="index.php" class="link-primary">Login?</a></div>';
            header("Location: signup.php");
        } else {
            $_SESSION["message"] = '<div class="alert alert-danger">Password do not match!</div>';
            header("Location: signup.php");
        }
    } else if (isset($_POST['signInButton'])) {
        //SIGN IN
        $email = $_POST['email'];
        $password = $_POST['password'];
        if ($email === $_SESSION['email'] && $password === $_SESSION['password']) {
            $_SESSION["message"] = '<div class="alert alert-success">Sign in successful!</div>';
            header('Location: profile.php');
        } else {
            $_SESSION["message"] = '<div class="alert alert-danger">Invalid email or password!</div>';
            header("Location: index.php");
        }
    }
}


?>