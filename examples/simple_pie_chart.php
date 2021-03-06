<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>Testing Pie Chart</title>
    <script type="text/javascript" src="//d3js.org/d3.v3.min.js"></script>

    <style type="text/css">
        .slice text {
            font-size: 12pt;
            font-family: "Times New Roman";
        }
    </style>
</head>
<body>

<!-- the simple pie chart d3.js script credit goes to enjalot @ https://gist.github.com/enjalot/1203641 -->

<h2>Welcome to the Simple Pie Chart Example</h2>
<p>In this example we will be exploring the Simple Pie Chart using the php-d3-lib.</p>

<h4>To begin be sure to include the library</h4>
<pre>
    include('../d3-php-class/D3-class.php');
</pre>

<h3>Pie Chart 1</h3>
<div id="chart"></div>

<h4>Pie Chart 1 PHP Code</h4>
<pre>

    $data = array(
        'chart_data'=>array(
            array(
                'label'=>'one',
                'value'=>10
            ),
            array(
                'label'=>'two',
                'value'=>35
            ),
            array(
                'label'=>'three',
                'value'=>15
            ),
            array(
                'label'=>'four',
                'value'=>25
            ),
            array(
                'label'=>'five',
                'value'=>5
            )
        ),
        'dimensions'=>array(
            'height'=>500,
            'width'=>500,
            'radius'=>250
        ),
        'render_element'=>array(
            'value'=>'chart',
            'type'=>'id'
        ),
        'colors' => array(
            '#FF8E00',
            '#BF8030',
            '#A65C00',
            '#FFAA40',
            '#FFC173',
            '#a05d56',
            '#d0743c'
        )
    );

    $chart = new D3('simple_pie_chart',$data);
    $chart_render = $chart->render();

    echo $chart;

</pre>


<h3>Pie Chart 2</h3>
<div id="chart_2"></div>

<h4>Pie Chart 2 PHP Code</h4>
<pre>
    $data_two = array(
    'chart_data'=>array(
        array(
            'label'=>'six',
            'value'=>20
        ),
        array(
            'label'=>'seven',
            'value'=>15
        ),
        array(
            'label'=>'eight',
            'value'=>30
        ),
        array(
            'label'=>'nine',
            'value'=>35
        ),
        array(
            'label'=>'ten',
            'value'=>10
        )
    ),
    'dimensions'=>array(
        'height'=>400,
        'width'=>400,
        'radius'=>200
    ),
    'render_element'=>array(
        'value'=>'chart_2',
        'type'=>'id'
    ),
    'colors' => array(
        '#98abc5',
        '#8a89a6',
        '#7b6888',
        '#6b486b',
        '#a05d56',
        '#d0743c',
        '#ff8c00'
    )
);

$chart_two = new D3('simple_pie_chart',$data_two);
$chart_two_render = $chart_two->render();

echo $chart_two_render;
</pre>
<?php


include('../d3-php-class/D3-class.php');

$data = array(
    'chart_data'=>array(
        array(
            'label'=>'one',
            'value'=>10
        ),
        array(
            'label'=>'two',
            'value'=>35
        ),
        array(
            'label'=>'three',
            'value'=>15
        ),
        array(
            'label'=>'four',
            'value'=>25
        ),
        array(
            'label'=>'five',
            'value'=>5
        )
    ),
    'dimensions'=>array(
        'height'=>500,
        'width'=>500,
        'radius'=>250
    ),
    'render_element'=>array(
        'value'=>'chart',
        'type'=>'id'
    ),
    'colors' => array(
        '#FF8E00',
        '#BF8030',
        '#A65C00',
        '#FFAA40',
        '#FFC173',
        '#a05d56',
        '#d0743c'
    )
);

$chart = new D3('simple_pie_chart',$data);
$chart_render = $chart->render();

echo $chart;

$data_two = array(
    'chart_data'=>array(
        array(
            'label'=>'six',
            'value'=>20
        ),
        array(
            'label'=>'seven',
            'value'=>15
        ),
        array(
            'label'=>'eight',
            'value'=>30
        ),
        array(
            'label'=>'nine',
            'value'=>35
        ),
        array(
            'label'=>'ten',
            'value'=>10
        )
    ),
    'dimensions'=>array(
        'height'=>400,
        'width'=>400,
        'radius'=>200
    ),
    'render_element'=>array(
        'value'=>'chart_2',
        'type'=>'id'
    ),
    'colors' => array(
        '#98abc5',
        '#8a89a6',
        '#7b6888',
        '#6b486b',
        '#a05d56',
        '#d0743c',
        '#ff8c00'
    )
);

$chart_two = new D3('simple_pie_chart',$data_two);
$chart_two_render = $chart_two->render();

echo $chart_two_render;

?>
