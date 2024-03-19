<?php

use Core\Database;
use Core\Validator;

$config = require base_path("config.php");
$db = new Database($config['database']);

$email = $_POST['email'];
$name = $_POST['name'];
dd($_POST);
$agree = $_POST['agree'];
$errors = [];
if (!Validator::email($email)) {
    $this->errors['email'] = "Please provide a valid email address";
}
if (!Validator::string($name)) {
    $this->errors['name'] = "Please provide a valid name";
}
if (!Validator::agreement($agree)) {
    $this->errors['agree'] = "Please agree with terms and conditions";
}

if (!empty($errors)) {
    view("home.view.php", ["errors" => $errors]);
}


$db->query("INSERT INTO customers(email, name) VALUES (:email, :name)", [
    "email" => $_POST["email"],
    "name" => $_POST["name"]
]);
