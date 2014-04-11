<?php
namespace PhpBelfast\Repos;
use RedBean_Facade as R;
class PostRepo {

    public function getAll()
    {
        return R::findAll('post', 'ORDER BY date DESC');
    }

    public function getById($id)
    {
        $post = R::load('post', $id);
        if(empty($post->id)) {
            return false;
        } else {
            return $post;
        }
    }
} 