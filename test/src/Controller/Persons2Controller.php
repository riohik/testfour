<?php
namespace App\Controller;

use App\Controller\AppController;

class Persons2Controller extends AppController
{
        
    public function add()
    {
        if ($this->request->is('post')){
            $person2 = $this->Persons2->newEntity();
            $person2 = $this->Persons2->patchEntity($persons2,$this->request->data);
            if($this->Persons2->save($person2)){
                return $this->redirect(['action' => 'index']);
            }
        }
    }
    public function index()
    {
        $this->set('persons2',$this->Persons2->find('all'));
    }
}