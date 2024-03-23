<?php

//LOGIN CONTROLLER

declare(strict_types=1);

//CHECK EMPTY INPUTS
function isEmpty(string $username, string $password)
{
    if (empty($username) || empty($password)) {
        return true;
    } else {
        return false;
    }
}

//CHECK USERNAME
function userNotFound(bool|array $result)
{
    if (!$result) {
        return true;
    } else {
        return false;
    }
}

//VERIFY PASSWORD
function wrongPassword(string $password, string $hashedPassword)
{
    if (!password_verify($password, $hashedPassword)) {
        return true;
    } else {
        return false;
    }
}
