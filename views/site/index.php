<?php

/** @var yii\web\View $this */

$this->title = 'SIMRS - INOVAMEDIKA';
$series = [
    [
        'name' => 'Entity 1',
        'data' => [
            ['2018-10-04', 4.66],
            ['2018-10-05', 5.0],
        ],
    ],
    [
        'name' => 'Entity 2',
        'data' => [
            ['2018-10-04', 3.88],
            ['2018-10-05', 3.77],
        ],
    ],
    [
        'name' => 'Entity 3',
        'data' => [
            ['2018-10-04', 4.40],
            ['2018-10-05', 5.0],
        ],
    ],
    [
        'name' => 'Entity 4',
        'data' => [
            ['2018-10-04', 4.5],
            ['2018-10-05', 4.18],
        ],
    ],
];


?>
<div class="site-index">
    <h1 class="display-4">Dashboard Grafik dan Statistik</h1>
    <div class="body-content">
        <div class="row">
            <div id="chart" class="col-lg-12">
                <?= \onmotion\apexcharts\ApexchartsWidget::widget([
                    'type' => 'bar', // default area
                    'height' => '800', // default 350
                    'width' => '1000', // default 100%
                    'chartOptions' => [
                        'chart' => [
                            'toolbar' => [
                                'show' => true,
                                'autoSelected' => 'zoom'
                            ],
                        ],
                        'xaxis' => [
                            'type' => 'datetime',
                            // 'categories' => $categories,
                        ],
                        'plotOptions' => [
                            'bar' => [
                                'horizontal' => false,
                                'endingShape' => 'rounded'
                            ],
                        ],
                        'dataLabels' => [
                            'enabled' => false
                        ],
                        'stroke' => [
                            'show' => true,
                            'colors' => ['transparent'],
                            'curve' => 'smooth',
                        ],
                        'legend' => [
                            'verticalAlign' => 'bottom',
                            'horizontalAlign' => 'left',
                        ],
                    ],
                    'series' => $series
                ]); ?>
            </div>
        </div>
    </div>
</div>