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
            'method'=> "POST"   
        ));
       
       $form->add('submit', 'submit', array('label' => 'ADD'));
        
        return $this->render('ABCResourcePersonBundle:rsp:add.html.twig',array('form'=> $form->createView()));
    }
    
    public function createAction($request){
           
    }
    
    public function updateAction(){
        
    }
    
    public function deleteAction(){
        
    }
    
    public function showAction(){
        
    }
    
    public function showAllAction(){
        
    }
    
    
    // Create Forms for each action of the CRUD
    
}
