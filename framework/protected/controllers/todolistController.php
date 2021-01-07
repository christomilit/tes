<?php

class todolistController extends DController
{
    public function actionIndex()
    {
        return $this->render('index',['name'=>'toper']);
    }

}