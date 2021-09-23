<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PenilaianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penilaians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Penilaian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_pegawai',
            'id_penilai',
            'op_1',
            'op_2',
            //'op_3',
            //'op_4',
            //'op_5',
            //'op_6',
            //'op_7',
            //'ko_1',
            //'ko_2',
            //'ko_3',
            //'ko_4',
            //'ko_5',
            //'ko_6',
            //'ko_7',
            //'ik_1',
            //'ik_2',
            //'ik_3',
            //'kj_1',
            //'kj_2',
            //'kj_3',
            //'kj_4',
            //'kj_5',
            //'tgl_input',
            //'group',
            //'total_op',
            //'total_ko',
            //'total_ik',
            //'total_kj',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
