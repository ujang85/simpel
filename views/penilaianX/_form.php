<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Penilaian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penilaian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pegawai')->textInput() ?>

    <?= $form->field($model, 'id_penilai')->textInput() ?>

    <?= $form->field($model, 'op_1')->textInput() ?>

    <?= $form->field($model, 'op_2')->textInput() ?>

    <?= $form->field($model, 'op_3')->textInput() ?>

    <?= $form->field($model, 'op_4')->textInput() ?>

    <?= $form->field($model, 'op_5')->textInput() ?>

    <?= $form->field($model, 'op_6')->textInput() ?>

    <?= $form->field($model, 'op_7')->textInput() ?>

    <?= $form->field($model, 'ko_1')->textInput() ?>

    <?= $form->field($model, 'ko_2')->textInput() ?>

    <?= $form->field($model, 'ko_3')->textInput() ?>

    <?= $form->field($model, 'ko_4')->textInput() ?>

    <?= $form->field($model, 'ko_5')->textInput() ?>

    <?= $form->field($model, 'ko_6')->textInput() ?>

    <?= $form->field($model, 'ko_7')->textInput() ?>

    <?= $form->field($model, 'ik_1')->textInput() ?>

    <?= $form->field($model, 'ik_2')->textInput() ?>

    <?= $form->field($model, 'ik_3')->textInput() ?>

    <?= $form->field($model, 'kj_1')->textInput() ?>

    <?= $form->field($model, 'kj_2')->textInput() ?>

    <?= $form->field($model, 'kj_3')->textInput() ?>

    <?= $form->field($model, 'kj_4')->textInput() ?>

    <?= $form->field($model, 'kj_5')->textInput() ?>

    <?= $form->field($model, 'tgl_input')->textInput() ?>

    <?= $form->field($model, 'group')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_op')->textInput() ?>

    <?= $form->field($model, 'total_ko')->textInput() ?>

    <?= $form->field($model, 'total_ik')->textInput() ?>

    <?= $form->field($model, 'total_kj')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
