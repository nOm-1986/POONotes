<?php
include __DIR__ . "/vendor/autoload.php";

use Reto\Category;
use Reto\Author;
use Reto\Post;

$author = new Author('Fabian', 'Beltran');
$category = new Category('PHPUnit');
$post = new Post($category);
$post->addTitle('Testing whit PHPUnit');
$post->addDescription("It\'s necesary that you put the information here");
$author->addPost($post);
echo $author->getInfo();