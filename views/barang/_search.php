<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BarangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

   
    

    

    

    
    <?php // echo $form->field($model, 'id_supplier') ?>

    <?php // echo $form->field($model, 'harga') ?>

    <?php // echo $form->field($model, 'stok') ?>


    <div class="row">

        <div class="col-md-1">
            <?= $form->field($model, 'id') ?>

        </div>

        <div class="col-md-2">
            <?= $form->field($model, 'kode_barang') ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'nama_barang') ?>
        </div>

        <div class="col-md-3">
            <?= $form->field($model, 'satuan') ?>
        </div>

        <div class="col-md-3">
            <?php
                $queryJenisBarang = (new \app\models\Jenis)->find()->orderBy(['nama_jenis'=>SORT_ASC])->all();

                $dataJenisBarang = \yii\helpers\ArrayHelper::map($queryJenisBarang, 'id', 'nama_jenis');

                echo $form->field($model, 'id_jenis')->dropDownList($dataJenisBarang, [
                    'prompt'=> '--Pilih Jenis Barang--'
                ])->label('Jenis Barang');
            ?>

  
        </div>

        <div class="col-md-3">
            <?php
                $querySupplier = (new \app\models\Supplier)->find()->orderBy(['nama_supplier'=> SORT_ASC])->all();

                $dataSupplier = \yii\helpers\ArrayHelper::map($querySupplier, 'id', 'nama_supplier');

                echo $form->field($model, 'id_supplier')->dropDownList($dataSupplier, [
                    'prompt'=>'--Pilih Supplier--'
                ])->label('Supplier');
            ?>

  
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group" style="padding-top:25px">
            <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
