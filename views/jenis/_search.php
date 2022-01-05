<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JenisSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jenis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="row">

        <div class="col-md-1">
            <?= $form->field($model, 'id') ?>
        </div>

        <div class="col-md-2">
            <?= $form->field($model, 'nama_jenis') ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'keterangan') ?>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group" style="padding-top:25px">
            <?= Html::submitButton('Search', ['class'   => 'btn btn-warning']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary' ])?>
            <?= Html::a('create Jenis', ['create'], ['class' => 'btn btn-success']) ?>
        </div>
    </div>


    

    <?php ActiveForm::end(); ?>

</div>
