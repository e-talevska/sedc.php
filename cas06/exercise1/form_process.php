<?php


if (isset($_POST['login'])) {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if ($username == ""){
    echo 'Write username';
}

if((strlen($password)<6) || strpos($password, "pass") === false) {
    echo "Password should be bigger than 6 and should have pass thing";
}

}

?>

 
