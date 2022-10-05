<?php
$id = $_POST["id"];
$password = $_POST["password"];


if ($id === "Andy" && $password === "secret") {
  header("Location: menu.php");
} else {
  header("Location: login.html");
}
?>
