<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pegawai */
?>
<div class="pegawai-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama',
            'nip',
            'jabatan',
            'rumpun',
        ],
    ]) ?>

</div>
