<?php

namespace ABC\ResourcePersonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ABC\ResourcePersonBundle\Entity\Resourceperson;
use ABC\ResourcePersonBundle\Form\ResourcepersonType;

class ResourcepersonController extends Controller
{
    // action to create and render the form for adding a new resource person 
    public function newAction(){
            
        $resourcePerson = new Resourceperson();
        
       $form = $this->createForm(new ResourcepersonType(), $resourcePerson, array(
            'action'=> $this->generateUrl('rsp_create'),
             'method'=> "GET"   
        ));
        
        $this->render('ABCResourcePersonBundle:rsp:add.html.twig',array('form'=> $form->createView()));
    }
    
    public function createAction($request){
        
    }
}
