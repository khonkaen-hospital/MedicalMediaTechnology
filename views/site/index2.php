<?php
//use kartik\grid\GridView;
use yii\grid\GridView;
use app\models\Tests;
use \kartik\widgets\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

$this->title = 'Requests';
$this->params['breadcrumbs'][] = $this->title;

?>
<div id="page-title">
    <h2>Lab Requests</h2>
    <p>ลงทะเบียนส่งตรวจแล็ป</p>
</div>

<div class="panel">
    <div class="box-lab-request" style="padding:7px;">
       
       
       


<div class="content-box">
    <h3 class="content-box-header bg-white">
        <i class="glyph-icon icon-th-list"></i>
       รายการส่งตรวจ
        <div class="header-buttons">
            <a href="#" class="btn btn-xs btn-link font-green toggle-button">
                <i class="glyph-icon icon-chevron-down"></i>
            </a>
        </div>
    </h3>

         <?php \yii\widgets\Pjax::begin(['id'=>'pajax-labrequest']); ?>
        <?php
        echo GridView::widget([
        'id'=>'grid-labrequest',
        //'pjax'=>true,
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            // 'columns'=>[
            // //  [
            //       //   'class'=>'kartik\grid\CheckboxColumn',
            //       //   'headerOptions'=>['class'=>'kartik-sheet-style'],
            //       // ],
            //     ['header'=>'Lab Code','value'=>'tests.test_number','options'=>['style'=>'width:100px;']],
            //     ['header'=>'Lab Name','value'=>'tests.test_name'],
            //     [
            //     'class' => 'yii\grid\ActionColumn',
            //     'header'=>'Action',
            //     'options'=>['style'=>'width:50px;'],
            //     'template'=>'<div class="btn-group btn-group-sm" role="group" aria-label="...">{delete}</div>',
            //     'buttons'=>[
                   
            //         'delete'=>function($url,$model,$key){
            //              return Html::a('<i class="glyphicon glyphicon-trash"></i>', $url,[
            //                     'title' => Yii::t('yii', 'Delete'),
            //                     'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
            //                     'data-method' => 'post',
            //                     'data-pjax' => '0',
            //                     'class'=>'btn btn-default'
            //                     ]);
            //         }
            //     ]
            // ],
            // ]
        ]);

        ?>
        <?php \yii\widgets\Pjax::end(); ?>
    </div>
</div>

    </div>
</div>
<button id="btn-refresh">refresh</button>

<?php
$this->registerJs("

$('#btn-refresh').click(function(){
     $.pjax.reload({container:'#pajax-labrequest'});
     return false;
 });
", View::POS_READY, 'my-options');
?>
