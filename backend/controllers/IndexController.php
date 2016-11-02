<?php

namespace backend\controllers;

use backend\models\Answers;
use common\models\Course;
use common\models\Student;
use common\models\StudentScore;

class IndexController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $answer = new Answers();
        $answer->testCommon();



        //return $this->render('index');
    }

}
