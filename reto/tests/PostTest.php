<?php

use PHPUnit\Framework\TestCase;
use Reto\User;
use Reto\Author;
use Reto\Category;
use Reto\Post;

class PostTest extends TestCase
{
    public function test_post()
    {
        $author = new Author('Fabian', 'Beltran');
        $category = new Category('PHPUnit');
        $post = new Post($category);
        $post->addTitle('Testing whit PHPUnit');
        $post->addDescription(" It's necesary that you put the information here ");
        $author->addPost($post);

        $this->assertEquals(1, $post->hasTitle());
        $this->assertEquals(1, $post->hasDescription());
        $this->assertInstanceOf(Category::class, $post->getCategory());
        $this->assertInstanceOf(Post::class, $author->getPost()[0]);

    }
}