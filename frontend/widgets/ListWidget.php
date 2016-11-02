<?php

/**
 * Created by PhpStorm.
 * User: paulversion
 * Date: 2016/5/5
 * Time: 22:32
 */
namespace frontend\widgets;
use Yii;
use yii\base;
class ListWidget extends Widget
{
    public $item=['a'=>1];
    public  function  run(){

        return $this->render('list',[
            'item'=>$this->item
        ]);
    }

}