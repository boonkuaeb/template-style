<?php
/**
 * Created by PhpStorm.
 * User: boonkuaeboonsutta
 * Date: 1/11/18
 * Time: 19:44
 */

namespace App\Services;


use App\Domain\PostDomain;
use Westsworld\TimeAgo;

class ForumService
{
    public function getForum()
    {
        $posts = $this->getPosts();
        $authors = $this->getAuthors();
        $postsModel = [];
        foreach ($posts as $item) {
            $model = new PostDomain();
            $model->id = $item['id'];
            $model->title = $item['title'];
            $model->body = $item['body'];
            $model->image_url = $item['image_url'];
            $timeAgo = new TimeAgo();
            $model->created_at = $timeAgo->inWords(new \DateTime($item['created_at']));
            if (isset($authors[$item['author_id']])) {
                $model->author_name = $authors[$item['author_id']]['name'];
                $model->author_role = $authors[$item['author_id']]['role'];
                $model->author_place = $authors[$item['author_id']]['place'];
                $model->author_avatar_url = $authors[$item['author_id']]['avatar_url'];
            }
            $postsModel[] = $model;
        }

        return $postsModel;
    }

    public function getAuthors()
    {
        $authorsJson = file_get_contents(__DIR__ . '/../Data/authors.json');
        $authors = json_decode($authorsJson, true);
        return array_reverse($authors);
    }

    private function getPosts()
    {
        $postsJson = file_get_contents(__DIR__ . '/../Data/posts.json');
        $posts = json_decode($postsJson, true);
        return array_reverse($posts);
    }
}