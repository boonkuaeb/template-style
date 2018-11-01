<?php
/**
 * Created by PhpStorm.
 * User: boonkuaeboonsutta
 * Date: 1/11/18
 * Time: 11:43
 */

namespace App\Controller;


use App\Services\ForumService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ForunController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage(ForumService $forumService)
    {
        /** @var ForumService $forumService */
        $posts = $forumService->getForum();
        return $this->render('forun/homepage.html.twig',['posts'=>$posts]);
    }
}