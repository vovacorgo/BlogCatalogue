<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Article;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Article', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'description:ntext',
            'content:ntext',
            'date',
//            [
//                'attribute' => 'image',
//                'value' => function($data){
//                    return Html::img(Url::base($data->image).$data->image, ['alt'=>'some', 'class'=>'thing', 'height'=>'100', 'width'=>'100px']);
//                },
//                'format' => 'html',
//            ],
            [
                'format' => 'html',
                'label' => 'Image',
                'value' => function($data){

                    return Html::img($data->getImage(), ['width' => 200, 'height' => 200,'alt'=>'empty_image']);
                }
            ],
            // 'viewed',
            // 'user_id',
            // 'status',
            // 'category_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>