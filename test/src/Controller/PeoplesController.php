<?php
namespace App\Controller;
 
use App\Controller\AppController;
 
class PeoplesController extends AppController
    {
    public function add()
    {
        if ($this->request->is('post')) {
            $people = $this->Peoples->newEntity();
            $people = $this->Peoples->patchEntity($people, $this->request->data);
            if ($this->Peoples->save($people)) {
                return $this->redirect(['action' => 'index']);
            }
        }
    }
     public function index()
    {
        $this->set('peoples', $this->Peoples->find('all'));
    }
    public function edit($id = null)
    {
        $people = $this->Peoples->get($id);
        if($this->request->is(['post','put'])){
            $people = $this->Peoples->patchEntity($people,$this->request->data);
            if($this->Peoples->save($people)){
                return $this->redirect(['action' => 'index']);
            }
            }else {
            $this->set('people',$people);
        }
    }
    public function delete($id = null)
    {
        $people = $this->Peoples->get($id);
        if($this->request->is(['post','put'])){
            if($this->Peoples->delete($people)){
                return $this->redirect(['action' => 'index']);
            }
            }else{
                $this->set('people',$people);
        }
    }
}