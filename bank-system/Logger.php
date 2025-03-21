<?php

trait logger{
        public function actionLog($action, $amount, $id){
            echo "Account Number $id has $action $amount.<br>"; 
        }
}