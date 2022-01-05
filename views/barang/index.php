<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Barang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kode_barang',
            'nama_barang',
            'satuan',
            [
                'attribute' => 'id_jenis',
                'label'     => 'Jenis Barang',
                'value'     => function($model){
                    return $model->jenis->nama_jenis;
                }
            ],
            [
                'attribute' => 'id_supplier',
                'label'     => 'Nama Supplier',
                'value'     => function($model){
                    return $model->supplier->nama_supplier;
                }
            ],
            //'id_jenis',
            //'id_supplier',
            //'harga',
            //'stok',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
