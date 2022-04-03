<?php

use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comment;

class PostTest extends TestCase
{
    public function test_add_comment_to_post()
    {
        //La primera parte es como si creara un index.php $post = new Post()...
        $post = new Post();
        $comment = new Comment();

        $post->addComment($comment);
        //Esta es la parte de testeo con PHPUnit
        $this->assertEquals(1, $post->countComments());//Afirmacion para saber si cree un post.

        //Reviso que el comentario que ingresé sea una instancia de la clase Comment. [0]->indica ese comentario que ingreso.
        $this->assertInstanceOf(Comment::class, $post->getComments()[0]);

    }
}

