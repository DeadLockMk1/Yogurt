<?php
/**
 * Created by PhpStorm.
 * User: LeFranj
 * Date: 25.07.2015
 * Time: 0:49
 */
$this->pageTitle = Yii::app()->name.' - Dashboard';
$this->pageCaption = '';
$this->pageDescription = '';
$this->breadcrumbs=array(
    'Dashboard',
    'Home',
);
$this->widget(
    'booster.widgets.TbHighCharts',
    array(
        'options' => array(
            'title' => array(
                'text' => 'Weekly chart',
//                'x' => -20 //center
            ),
            'subtitle' => array(
                'text' => 'Series per day',
//                'x' -20
            ),
            'xAxis' => array(
                'categories' => ['Mon','Tue','Wed','Thi','Fri','Sat','Sun',]
            ),
            'yAxis' => array(
                'title' => array(
                    'text' => 'New series'
                )
            ),
            'series' => array(
                [
                    'name' => 'New series',
                    'data' => [2, 2, 3, 4, 5, 10, 18],
                ],

            )
        ),
        'htmlOptions' => array(
            'class'=>'span8 pull-left',
        ),
    )
);