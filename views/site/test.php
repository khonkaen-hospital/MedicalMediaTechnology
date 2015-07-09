<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\web\View;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProvinceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Provinces';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="province-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Province', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php \yii\widgets\Pjax::begin(['id'=>'pajax-province']); ?>
    <?= GridView::widget([
        'id'=>'grid-province',
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'PROVINCE_ID',
            'PROVINCE_CODE',
            'PROVINCE_NAME',
            'GEO_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php \yii\widgets\Pjax::end(); ?>
</div>
<button id="btn-refresh">refresh</button>
<?php
$this->registerJs("
 $('#btn-refresh').click(function(){

    console.log(5);
         $.pjax.reload({container:'#pajax-province'});
         //jQuery('#grid-labrequest').yiiGridView('update');
 });
", View::POS_READY, 'my-options');
?>