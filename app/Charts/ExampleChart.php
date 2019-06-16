<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Highcharts\Chart;

class ExampleChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function legendStyle(bool $var)
    {
        return $this->options([
            'legend' => [
                'itemStyle' => [
                    'fontSize' => '20px'
                ],
            ]
        ]);
    }

    public function legendStyle_var(bool $var, string $size)
    {
        return $this->options([
            'legend' => [
                'itemStyle' => [
                    'fontSize' => $size
                ],
            ]
        ]);
    }

    public function heightChart(string $height)
    {
        return $this->options([
            'chart' => [
                'height' => $height,
            ],
        ]);
    }

    public function widthChart(string $width)
    {
        return $this->options([
            'chart' => [
                'width' => $width,
            ],
        ]);
    }

    public function displayXAxes(bool $axes, string $color, string $size)
    {
        return $this->options([
            'xAxis' => [
                'visible' => $axes,
                'lineColor' => '#fff',
                'tickColor' => '#fff',
                'labels' => [
                    'style' => [
                        'color' => $color,
                        'fontWeight' => 'bold',
                        'fontSize' => $size,
                        'textTransform' => 'uppercase',
                    ]
                ]
            ],
        ]);
    }

    public function displayYAxes(bool $axes)
    {
        return $this->options([
            'yAxis' => [
                'visible' => $axes,
            ],
        ]);
    }

    public function heightYAxis(int $max)
    {
        return $this->options([
            'yAxis' => [
                'max' => $max,
            ],
        ]);
    }

    public function plotOpt(bool $var, string $type)
    {
        if ($type == 'line') {
            return $this->options([
                'legend' => [
                    'layout' => 'vertical',
                    'align' => 'right',
                    'verticalAlign' => 'middle'
                ],
                'plotOptions' => [
                    'series'=> [
                        'color' => 'rgb(255,51,153)',
                        'borderWidth'=> 0,
                        'dataLabels'=> [
                            'allowOverlap'=> $var,
                            'enabled'=> $var,
                            'style' => [
                                'fontWeight' => 'bold',
                                'fontSize' => '15px',
                                'textTransform' => 'uppercase',
                            ]
                        ]
                    ],
                    'line' => [
                        'dataLabels' => [
                            'allowOverlap' => $var,
                            'enabled' => $var
                        ]
                    ]
                ],
                'responsive' => [
                    'rules' => [
                        'condition' => [
                            'maxWidth' => 500
                        ],
                        'chartOptions' => [
                            'legend' => [
                                'layout' => 'horizontal',
                                'align' => 'center',
                                'verticalAlign' => 'bottom'
                            ]
                        ]
                    ]
                ]
            ]);
        }
        if ($type == 'column') {
            return $this->options([
                'plotOptions' => [
                    'series'=> [
                        'borderWidth'=> 0,
                        'dataLabels'=> [
                            'allowOverlap'=> $var,
                            'enabled'=> $var,
                            'style' => [
                                'fontWeight' => 'bold',
                                'fontSize' => '15px',
                                'textTransform' => 'uppercase',
                            ]
                        ]
                    ]
                ],
            ]);
        }
    }

    public function chartPieM(bool $var, int $size = 70)
    {
        return $this->options([
            'plotOptions' => [
                'series' => [
                    'shadow' => $var,
                ],
                'pie' => [
                    'allowPointSelect' => $var,
                    'size' =>'80%',
                    'cursor' => 'pointer',
                    'dataLabels' => [
                        'allowOverlap' => $var,
                        'enabled' => $var,
                        'distance' => -45,
                        'format' => '<b style="font-size:20px; color:#fff;">{point.y}</b>', 
                    ],
                    'showInLegend'=> $var
                ]
            ],
        ]);
    }

}
