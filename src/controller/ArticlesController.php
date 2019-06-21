<?php

class ArticlesController
{

    public function add()
    {
        view('articles.add');
    }

    public function save()
    {
        redirectTo('article');
    }

    public function show()
    {
        echo "affichage de l'article";
    }
}
