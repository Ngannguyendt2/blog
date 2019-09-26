<?php

namespace controller;

use model\Blog;
use model\BlogManager;

class BlogController
{
    public $blogDb;

    public function __construct()
    {
        $this->blogDb = new BlogManager();
    }

    public function index()
    {
        $blogs = $this->blogDb->convertToObject($this->blogDb->getAll());
        include "view/list.php";
    }

    public function delete()
    {

    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $blogs = $this->blogDb->convertToObject($this->blogDb->getAll());
            include "view/add.php";
        } else {
            $blog = new Blog($_POST['title'], $_POST['teaser'], $_POST['content'], $_POST['createa']);
            $this->blogDb->insert($blog);
            header('Location:index.php');
        }
    }

    public function update()
    {

    }
}