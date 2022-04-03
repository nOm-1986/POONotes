<?php

namespace Reto;

class Post
{
    public $title, $description, $category, $author;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function addTitle($title)
    {
        $this->title = $title;
    }

    public function addDescription($description)
    {
        $this->description = $description;
    }

    public function hasTitle() :bool
    {
        return isset($this->title);
    }

    public function hasDescription() :bool
    {
        return isset($this->description);
    }

    public function getCategory()
    {
        return $this->category;
    }

}