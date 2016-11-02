<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BranchSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
.branch-search .form-group{padding: 0 5px 5px 0;}
-->
</style>
<div class="branch-search">

    <?php     \Yii::$container->set(\yii\widgets\ActiveField::className(), ['template' => "{label}\n{input}\n{hint}"]);
    $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options'=>['class'=>'form-inline'],
    ]); ?>

    <?= $form->field($model, 'branch_id') ?>

    <?= $form->field($model, 'company_id') ?>

    <?= $form->field($model, 'branch_name') ?>

    <?= $form->field($model, 'branch_address') ?>

    <?= $form->field($model, 'branch_create_date') ?>

    <?php // echo $form->field($model, 'branch_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>
    <div class="form-group">
       <?= Html::a('Create Branch', ['create'], ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
