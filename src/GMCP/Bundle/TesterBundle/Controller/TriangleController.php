<?php

namespace GMCP\Bundle\TesterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class TriangleController extends Controller
{
	/**
     * Matches /triangle exactly
     *
     * @Route("/triangle/{a}/{b}/{c}", name="triangle_calculate")
     */
    public function calculateAction($a,$b,$c)
    {
    	$circumference = $a + $b + $c;
    	$s = ($a + $b + $c)/2;
    	$area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
    	$values = [
    		'type'=>'triangle',
    		'a'=>$a,
    		'b'=>$b,
    		'c'=>$c,
    		'surface' => $area,
    		'circumference'=>$circumference
    	];
        return new JsonResponse($values);
    }
}
