<?php
namespace Home\Controller;
use Think\Controller;
class ProjectController extends Controller {

    public function modify(){

        $this->assign('modify','selected');
        $this->display();
    }



    public function plist(){
        $this->assign('project','selected');
        $this->display();
    }
}