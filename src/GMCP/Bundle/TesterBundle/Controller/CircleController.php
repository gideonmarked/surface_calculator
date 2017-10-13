<?php

namespace GMCP\Bundle\TesterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class CircleController extends Controller
{
	/**
     * Matches /circle exactly
     *
     * @Route("/circle/{radius}", name="circle_calculate"
     */
    public function calculateAction($radius)
    {
    	$circumference = 2 * pi() * $radius;
    	$area = pi() * pow( $radius, 2 );
    	$values = [
    		'type'=>'circle',
    		'radius'=>$radius,
    		'surface' => $area,
    		'circumference'=>$circumference
    	];
        return new JsonResponse($values);
    }
}
