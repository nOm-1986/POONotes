<?php

namespace Reto;

class Author extends User
{
    protected $type;
    protected $posts = array();

    public function __construct($name, $last_name)
    {
        parent::__construct($name, $last_name);
        $this->type = 'Author';
    }

    public function getInfo() :string
    {
        return "Hello {$this->name} {$this->last_name}, i hope you are very well today. Author type: {$this->type}";
    }

    public function addPost(Post $post)
    {
        $this->posts[] = $post;
    }

    public function getPost() :array
    {
        return $this->posts;
    }


}