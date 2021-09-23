<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PenilaianSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penilaian-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_pegawai') ?>

    <?= $form->field($model, 'id_penilai') ?>

    <?= $form->field($model, 'op_1') ?>

    <?= $form->field($model, 'op_2') ?>

    <?php // echo $form->field($model, 'op_3') ?>

    <?php // echo $form->field($model, 'op_4') ?>

    <?php // echo $form->field($model, 'op_5') ?>

    <?php // echo $form->field($model, 'op_6') ?>

    <?php // echo $form->field($model, 'op_7') ?>

    <?php // echo $form->field($model, 'ko_1') ?>

    <?php // echo $form->field($model, 'ko_2') ?>

    <?php // echo $form->field($model, 'ko_3') ?>

    <?php // echo $form->field($model, 'ko_4') ?>

    <?php // echo $form->field($model, 'ko_5') ?>

    <?php // echo $form->field($model, 'ko_6') ?>

    <?php // echo $form->field($model, 'ko_7') ?>

    <?php // echo $form->field($model, 'ik_1') ?>

    <?php // echo $form->field($model, 'ik_2') ?>

    <?php // echo $form->field($model, 'ik_3') ?>

    <?php // echo $form->field($model, 'kj_1') ?>

    <?php // echo $form->field($model, 'kj_2') ?>

    <?php // echo $form->field($model, 'kj_3') ?>

    <?php // echo $form->field($model, 'kj_4') ?>

    <?php // echo $form->field($model, 'kj_5') ?>

    <?php // echo $form->field($model, 'tgl_input') ?>

    <?php // echo $form->field($model, 'group') ?>

    <?php // echo $form->field($model, 'total_op') ?>

    <?php // echo $form->field($model, 'total_ko') ?>

    <?php // echo $form->field($model, 'total_ik') ?>

    <?php // echo $form->field($model, 'total_kj') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
