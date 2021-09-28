<?php use yii\helpers\Html; ?>
<li class="treeview active">
	<?= Html::a('<i class="fa fa-cogs"></i> <span>'.Yii::t('app', 'Configuration').'</span> <i class="fa fa-angle-left pull-right"></i>', ['/default/index'])  ?>
        <ul class="treeview-menu">
	<?php if(Yii::$app->user->can('/country/index')) { ?>
            <li>
		<?= Html::a('<i class="fa fa-angle-double-right"></i> '.Yii::t('app', 'Country'), ['/country/index'])  ?>
	    </li>
	<?php } 
	      if(Yii::$app->user->can('/state/index')) {
	?>
            <li>
		<?= Html::a('<i class="fa fa-angle-double-right"></i> '.Yii::t('app', 'State/Province'),['/state/index'])  ?>
	    </li>
	<?php } 
	      if(Yii::$app->user->can('/city/index')) {
	?>
	    <li>
		<?= Html::a('<i class="fa fa-angle-double-right"></i> '.Yii::t('app', 'City/Town'),['/city/index'])  ?>
	    </li>
	<?php } 
	      if(Yii::$app->user->can('/document-category/index')) {
	?>
            <li>
		<?= Html::a('<i class="fa fa-angle-double-right"></i> '.Yii::t('app', 'Document Category'),['/document-category/index'])  ?>
	    </li>
	<?php } 
	      if(Yii::$app->user->can('/languages/index')) {
	?>
	    <li>
		<?= Html::a('<i class="fa fa-angle-double-right"></i> '.Yii::t('app', 'Languages'),['/languages/index'])  ?>
	    </li>
	<?php } 
	      if(Yii::$app->user->can('/national-holidays/index')) {
	?>
            <li>
		<?= Html::a('<i class="fa fa-angle-double-right"></i> '.Yii::t('app', 'National Holiday'),['/national-holidays/index'])  ?>
	    </li>
	<?php } 
	      if(Yii::$app->user->can('/nationality/index')) {
	?>
	    <li>
		<?= Html::a('<i class="fa fa-angle-double-right"></i> '.Yii::t('app', 'Nationality'),['/nationality/index'])  ?>
	    </li>
	<?php } 
	      if(Yii::$app->user->can('/organization/index')) {
	?>
	    <li>
		<?= Html::a('<i class="fa fa-angle-double-right"></i> '.Yii::t('app', 'Institute'),['/organization/index'])  ?>
	    </li>
	<?php }
	      if(Yii::$app->user->can('/building/*')) {
	?>
	    <li>
		<?= Html::a('<i class="fa fa-angle-double-right"></i> '.Yii::t('app', 'Building'),['/building/building/index'])  ?>
	    </li>
	<?php } if(Yii::$app->user->can('/room/*')) {
	?>
	    <li>
		<?= Html::a('<i class="fa fa-angle-double-right"></i> '.Yii::t('app', 'Class Room'),['/room/room/index'])  ?>
	    </li>
	<?php } if(Yii::$app->user->can('/schoolyear/*')) {
	?>
	    <li>
		<?= Html::a('<i class="fa fa-angle-double-right"></i> '.Yii::t('app', 'School Year'),['/schoolyear/schoolyear/index'])  ?>
	    </li>
	<?php } if(Yii::$app->user->can('/semester/*')) {
	?>
	    <li>
		<?= Html::a('<i class="fa fa-angle-double-right"></i> '.Yii::t('app', 'Semester'),['/semester/semester/index'])  ?>
	    </li>
	<?php } if(Yii::$app->user->can('/subjects/*')) {
	?>
	    <li>
		<?= Html::a('<i class="fa fa-angle-double-right"></i> '.Yii::t('app', 'Subjects'),['/subjects/subjects/index'])  ?>
	    </li>
	<?php } if(Yii::$app->user->can('/classschedule/*')) {
	?>
	    <li>
		<?= Html::a('<i class="fa fa-angle-double-right"></i> '.Yii::t('app', 'Class Schedule'),['/classschedule'])  ?>
	    </li>
	<?php } ?>
	   
        </ul>
</li>
