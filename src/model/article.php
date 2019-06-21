<?php

class Article {

    const TABLE_NAME = "articles";

    protected $id;
    protected $title;
    protected $content;
    protected $author_id;
    protected $updated_at;
    protected $created_at;

    public function setId($id) {

    }
    public function setTitle($title){ 
        $this->title = $title;
    }
    public function setContent(){ 

    }
    public function author_id(){ 

    }
    public function updated_a(){ 

    }
    public function created_at(){ 
        
    }
}