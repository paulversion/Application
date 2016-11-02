<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Branch */

$this->title = 'Update Branch: ' . $model->branch_id;
$this->params['breadcrumbs'][] = ['label' => 'Branches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->branch_id, 'url' => ['view', 'id' => $model->branch_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="branch-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
