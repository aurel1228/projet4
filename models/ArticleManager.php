<?php

class ArticleManager extends Model
{

    public function getArticles(){
        return $this->getAll('articles', 'Article');
    }    


    public function getArticle($id){
        return $this->getOne('articles', 'Article', $id);
    }

    public function createArticle(){
        return $this->createOne('articles', 'Article');
      }





}











?>