<?php

include_once ROOT.'/models/First.php';

class FirstController {
    public function actionIndex() {
        $firstList = array();
        $firstList = First::getFirstList();
        require_once(ROOT.'/views/first/index.php');

        return TRUE;
    }

    public function actionView($id) {
        if($id){
            $firstItem = First::getFirstItemById($id);
            require_once(ROOT.'/views/first/view.php');
        }
        
        return TRUE;
    }
}

?>