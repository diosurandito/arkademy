<?php

$username=$_POST['username'];
$password=$_POST['password'];
// $username='diosurandito';






function is_username_valid($username)
{
    if (!preg_match('/^(?=[a-z]{5})[\w.]+$/iD',
                $username))
{
 return false;
}
else
{
 return true;
}
}

function is_password_valid($password)
{
    if (!preg_match('/^([0-9]{2})+@+([A-Z]{4})/',
    $password))
{
return false;
}
else
{
return true;
}
}

echo "username : ". json_encode( $username = is_username_valid($username));
echo "\n";
echo "password : ". json_encode($password = is_password_valid($password));



?>