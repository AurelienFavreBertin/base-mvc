<?php

class ArticlesController
{

    public function ajout()
    {
        view('articles.ajout');
    }

    public function save()
    {
        dump($_POST);
    }
}
