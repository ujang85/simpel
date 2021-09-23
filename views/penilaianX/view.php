<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Penilaian */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Penilaians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_pegawai',
            'id_penilai',
            'op_1',
            'op_2',
            'op_3',
            'op_4',
            'op_5',
            'op_6',
            'op_7',
            'ko_1',
            'ko_2',
            'ko_3',
            'ko_4',
            'ko_5',
            'ko_6',
            'ko_7',
            'ik_1',
            'ik_2',
            'ik_3',
            'kj_1',
            'kj_2',
            'kj_3',
            'kj_4',
            'kj_5',
            'tgl_input',
            'group',
            'total_op',
            'total_ko',
            'total_ik',
            'total_kj',
        ],
    ]) ?>

</div>
