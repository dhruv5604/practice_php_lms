<?php

trait logger{
        public function actionLog($action, $amount, $id){
            echo "UserId $id has $action $amount.<br>"; 
        }
}