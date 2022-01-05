<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Barang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'satuan')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'id_jenis')->textInput() ?> -->

    <?php
        $queryJenisBarang = (new \app\models\Jenis)->find()->orderBy(['nama_jenis'=>SORT_ASC])->all();

        $dataJenisBarang = \yii\helpers\ArrayHelper::map($queryJenisBarang, 'id', 'nama_jenis');

        echo $form->field($model, 'id_jenis')->dropDownList($dataJenisBarang, [
            'prompt'=> '--Pilih Jenis Barang--'
        ])->label('Jenis Barang');
    ?>

    <!-- <?= $form->field($model, 'id_supplier')->textInput() ?> -->

    <?php
        $querySupplier = (new \app\models\Supplier)->find()->orderBy(['nama_supplier'=> SORT_ASC])->all();

        $dataSupplier = \yii\helpers\ArrayHelper::map($querySupplier, 'id', 'nama_supplier');

        echo $form->field($model, 'id_supplier')->dropDownList($dataSupplier, [
            'prompt'=>'--Pilih Supplier--'
        ])->label('supplier');
    ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'stok')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
