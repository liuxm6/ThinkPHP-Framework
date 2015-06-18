<?php
namespace Home\Controller;
use Common\Controller\LxmController;
class IndexController extends LxmController {
    public function index(){
        $this->display();
    }
    public function test(){
        $this->show('Hello Test!','utf-8');
    }
}
