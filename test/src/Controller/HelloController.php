<?php
namespace App\Controller;
 
use App\Controller\AppController;
 
class HelloController extends AppController
{
    public function index($a = '')
    {
        //$this->set('message' , "hello this is sample page . ;-)");
        if ($a == ''){
            $this->setAction('err');
            return;
        }
        $this->autoRender = false;
        echo "<html><head></head><body>";
        echo "<h1>Hello!</h1>";
        echo "<p>これは、サンプルで作成したページです。</p><p>";
        echo "</p></body></html>";
    }
    
    public function err()
    {
        $this->autoRender = false;
        echo "<html><head></head><body>";
        echo "<h1>hello</h1>";
        echo "<p>paranashi</p>";
        echo "</body></html>";
    }
}