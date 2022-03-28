<?php
include 'User.php';
include 'Administrator.php';
require_once 'Person.php';

$user1 = new User();
$user1->type = new Administrator();
echo $user1->type->greet();