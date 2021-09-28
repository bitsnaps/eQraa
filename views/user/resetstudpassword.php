<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\modules\student\models\StudentDocsTrans */

$this->title = Yii::t('app', Yii::t('app', 'Reset Student Password'));
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Student'), 'url'=>['/student']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Reset Student Password')];
?>
<?php if(\Yii::$app->session->hasFlash('resetstudpassword')) 
      {
?>
<div class="col-xs-12" style="padding-top: 20px">
    <div class="alert alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<?php echo \Yii::$app->session->getFlash('resetstudpassword'); ?>
    </div>
</div>
<?php
      } 
$dataProvider = $model->search(Yii::$app->request->queryParams);
?>
<div class="col-xs-12">
  <div class="col-lg-12 col-sm-12 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-th-list"></i> <?= $this->title ?></h3></div>
</div>

<div class="col-xs-12" style="padding-top: 10px;">
   <div class="box">
      <div class="box-body table-responsive">
	<div class="stu-reset-password-index">
	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $model,
		'summary'=>'',
		'options' => ['class' => 'table-responsive table'],
		'columns' => [
		    ['class' => 'yii\grid\SerialColumn'],
		
		    [
			'label' => Yii::t('stu', 'Student ID'),
			'attribute' => 'stu_unique_id',
			'value' => 'stuMasterStuInfo.stu_unique_id',
	 	    ],
	
		    [
			'label' => Yii::t('stu', 'First Name'),
			'attribute' => 'stu_first_name',
			'value' => 'stuMasterStuInfo.stu_first_name',
	 	    ],
		    [
			'label' => Yii::t('stu', 'Last Name'),
			'attribute' => 'stu_last_name',
			'value' => 'stuMasterStuInfo.stu_last_name',
	 	    ],
		    [
			'label' => Yii::t('course', 'Course'),
			'attribute' => 'stu_master_course_id',
			'value' => 'stuMasterCourse.course_name',
			'filter' => ArrayHelper::map(app\modules\course\models\Courses::find()->all(), 'course_id', 'course_name')
		    ],
		    [
			'label' => Yii::t('course', 'Batch'),
			'attribute' => 'stu_master_batch_id',
			'value' => 'stuMasterBatch.batch_name',
			'filter' => ArrayHelper::map(app\modules\course\models\Batches::find()->all(), 'batch_id', 'batch_name')
		    ],
		    [
			      'label' => Yii::t('app', 'User Login Id'),
			      'attribute' => 'user_login_id',
			      'value' => 'stuMasterUser.user_login_id',
		        ],
		    [
			'class' => 'yii\grid\ActionColumn',
			'template' => '{Reset_loginid}',
			'buttons' => [
				    'Reset_loginid' => function ($url, $model) {
					return Html::a('<span class="glyphicon glyphicon-lock" style="font-size:20px"></span>', $url, [
						    'title' => Yii::t('app', 'Reset Password'),
					]);
				    }
				],
			'urlCreator' => function ($action, $model, $key, $index) {
				    if ($action === 'Reset_loginid') {
					$url = \Yii::$app->getUrlManager()->createUrl(["user/update-stud-password", 'id' => $model->stuMasterUser->user_id]);
					return $url;
				    }
				}	
		    ],
		],
	    ]); ?>
   	</div>
      </div>
    </div>
</div>

