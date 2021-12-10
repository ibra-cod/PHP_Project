<?php

namespace App\Controller;
use App\Manager\PostManager;
use App\Fram\PDOFactory;

class BlogController extends BaseController
{
    public function getHomePage()
    {
        $posts = (new PostManager(PDOFactory::getPDO()))->getAllPosts();

        $this->render('Home page', ['posts' => $posts], 'frontend/home');
    }

    public function getShowPage()
    {
        $post = (new PostManager(PDOFactory::getPDO()))->getPostById($_GET['id']);
        $this->render('template', ['post' => $post], 'frontend/show');
    }

    public function getAdminPage()
    {
        $post = (new PostManager(PDOFactory::getPDO()))->getPostById($_GET['id']);
        $this->render('Admin', ['post' => $post], 'frontend/Admin');
    }

    
}