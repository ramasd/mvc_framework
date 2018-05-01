<?php

include_once ROOT.'/models/Home.php';

class HomeController {
    public function actionIndex() {
        $homeList = array();
        $homeList = Home::getHomeList();
        require_once(ROOT.'/views/home/index.php');

        return TRUE;
    }

    public function actionView($id) {
        if($id){
            $homeItem = Home::getHomeItemById($id);
            require_once(ROOT.'/views/home/view.php');
        }
        
        return TRUE;
    }
}
?>