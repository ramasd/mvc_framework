<?php

include_once ROOT.'/models/Second.php';

class SecondController {
    public function actionIndex() {
        $secondList = array();
        $secondList = Second::getSecondList();
        require_once(ROOT.'/views/second/index.php');

        return TRUE;
    }

    public function actionView($id) {
        if($id){
            $secondItem = Second::getSecondItemById($id);
            require_once(ROOT.'/views/second/view.php');
        }
        
        return TRUE;
    }
}

?>