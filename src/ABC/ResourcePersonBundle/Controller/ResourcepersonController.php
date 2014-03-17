<?php

namespace ABC\ResourcePersonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ABC\ResourcePersonBundle\Entity\Resourceperson;
use ABC\ResourcePersonBundle\Form\ResourcepersonType;
use Symfony\Component\HttpFoundation\Request;

class ResourcepersonController extends Controller
{
    // action to render the form for adding a new resource person 
    public function newAction(){
            
        $entity = new Resourceperson();
        $form = $this->createAddForm($entity);

        
        return $this->render('ABCResourcePersonBundle:rsp:add.html.twig',array('entity'=>$entity,'form'=> $form->createView()));
    }
    
    // action to create a new resource person entity based on the form data
    public function createAction(Request $request){
           
        $entity = new Resourceperson();
        $form = $this->createAddForm($entity);
        $form->handleRequest($request);
        
        if($form->isValid()){
            
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();
            
            return $this->redirect($this->generateUrl('rsp_show',array('id'=>$entity->getRpId())));
        }
        
        return $this->render('ABCResourcePersonBundle:rsp:add.html.twig',array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    
    public function updateAction(){
        
    }
    
    public function deleteAction(){
        
    }
    
    public function showAction($id){
        
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('ABCResourcePersonBundle:Resourceperson')->find($id);
        
        if(!$entity){
            throw $this->createNotFoundException('Unable to find the Resource Person');
        }
        
        return $this->render('ABCResourcePersonBundle:rsp:show.html.twig',array('entity'=>$entity));
    }
    
    public function showAllAction(){
        
    }
    
    
    // Create Forms for each action of the CRUD
    
    public function createAddForm(Resourceperson $entity){
        
        $form = $this->createForm(new ResourcepersonType(),$entity,array(
           'action' => $this->generateUrl('rsp_create'),
           'method'=> 'POST'
        ));
        
        $form->add('Add','submit');
        
        return $form;
    }
    
    public function creatUpdateForm(){
        
    }
    
    public function createDeleteForm(){
        
    }
    
}
