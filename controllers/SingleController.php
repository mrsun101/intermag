<?php

class SingleController
{
    public function actionProduct($id)
    {
        $single = Single::getProduct($id);
        ViewIndex::single($single);
        //var_dump($single);
        //die();
    }
}

