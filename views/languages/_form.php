<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Languages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="col-xs-12 col-lg-12">
  <div class="<?php echo $model->isNewRecord ? 'box-success' : 'box-info'; ?> box view-item col-xs-12 col-lg-12">
<div class="languages-form">
	<?php
	if($this->context->action->id == 'update')
		$action = ['update', 'id'=>$_REQUEST['id']];
	else
		$action = ['create'];
    ?>
    <?php $form = ActiveForm::begin([
			'id' => 'languages-form',
			'action' => $action,
			'enableAjaxValidation' => true,
			
    ]); ?>

    <?= $form->field($model, 'language_name',['inputOptions'=>[ 'class'=>'form-control','placeholder'=>Yii::t('app', 'Language')] ])->textInput(['maxlength' => 45])->label(false) ?>

   <div class="form-group col-xs-12 col-sm-6 col-lg-4 no-padding edusecArLangCss">
	<div class="col-xs-6">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord  ? 'btn btn-block btn-success' : 'btn btn-block btn-info']) ?>
	</div>
	<div class="col-xs-6">
	<?= Html::resetButton(Yii::t('app', 'Reset'),['class' => 'btn btn-default btn-block']) ?>
	</div>
     </div>

    <?php ActiveForm::end(); ?>
    </div>
  </div>
</div>
