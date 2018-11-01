<?php
/**
 * Created by PhpStorm.
 * User: boonkuaeboonsutta
 * Date: 1/11/18
 * Time: 11:43
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ForunController
{

    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('OMG! My first page already! WOOO!');
    }
}