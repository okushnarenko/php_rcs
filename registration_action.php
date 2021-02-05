<?php

require_once 'helper.php';

$errors = [];

if (!isset($_POST['email'])) {
    $errors[] = 'Email is required';
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email is not a valid email address';
}

if (strlen($_POST['password']) < 8) {
    $errors[] = 'Password must be at least 8 symbols long';
}

if ($_POST['password'] != $_POST['password2']) {
    $errors[] = 'Passwords do not match';
}

if (count($errors) > 0) {
    $_SESSION['registration_errors'] = $errors;

    header("Location: index.php?page=registration");
    exit;
}

$sqlInsert = $db->prepare("INSERT INTO users SET email = ?, first_name = ?, last_name = ?, `password` = ?");
$sqlInsert->bind_param('ssss', $email, $firstName, $lastName, $encryptedPassword);
$email = $_POST['email'];
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$encryptedPassword = md5($_POST['password']);
$sqlInsert->execute();

header("Location: index.php");

