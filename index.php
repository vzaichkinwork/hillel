<?php
require_once './model/functions.php';
?>

<!doctype html>
    <html lang="en">
        <head>
            <title>Stats</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </head>
        <body>
            <div class="container">
                <h2>Add new purchase</h2>
                <form action="index.php?formsend=true" method="post">
                    <div class="form-group">
                        <label for="currency">Currency:</label>
                        <input type="text" class="form-control" name="currency">
                    </div>
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="text" class="form-control" name="price">
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount:</label>
                        <input type="text" class="form-control" name="amount">
                    </div>
                    <div class="form-group">
                        <label for="date">Date:</label>
                        <input type="text" class="form-control" name="date" value="<?php echo date('d-m-Y') ?>">
                    </div>
                    <input type="submit" class="btn btn-info" value="SEND">
                </form>
            </div>

            <div class="container">
                <h2>Purchased</h2>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Дата покупки</th>
                        <th>Название</th>
                        <th>Сколько</th>
                        <th>По какому курсу</th>
                        <th>Сумма, сколько потратили (курс*сколько)</th>
                        <th>Сумма, сколько заработали на текущую минуту</th>
                        <th>% заработка</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!------------------------- вывод текущих покупок ------------------------->
                    <?php
                    $currency = 0;

                    foreach (get_purchases() as $purchase) {
                        #$currency = explode("|", $purchase);
                        echo '<tr>
                                <th>' . $purchase['date'] . '</th>
                                <th>' . $purchase['name'] . '</th>
                                <th>' . $purchase['amount'] . '</th>
                                <th>$' . $purchase['price'] . '</th>
                                <th>
                                    '.$spent = floatval($purchase['price']) * floatval($purchase['amount']).'
                                </th>  
                                <th>';
                                    // Сумма, сколько потратили (курс*сколько)
                                    $spent = floatval($purchase['price']) * floatval($purchase['amount']);
                                    $current = current_rate($purchase['api_name']) * floatval($purchase['amount']);
                                    $result = $spent - $current;

                                    if($result > 0){
                                        echo '<span style="color: green">'.round($result, 2).'</span>';
                                    }elseif ($result < 0){
                                        echo '<span style="color: red">'.round($result, 2).'</span>';
                                    }else{
                                        echo '<span style="color: blue">'.round($result, 2).'</span>';
                                    }
                         echo '</th>
                                <th>function earnings_in_percentage($currency)</th>
                            </tr>';
                    }
                    ?>
                    <tr>
                        <th>ВСЕГО</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-------------- ГРАФИК ------------------------>
            <script>
                window.onload = function () {

                    var chart = new CanvasJS.Chart("chartContainer", {
                        animationEnabled: true,
                        theme: "light2",
                        title: {
                            text: "Statistics"
                        },
                        axisX: {
                            valueFormatString: "DD MMM",
                            crosshair: {
                                enabled: true,
                                snapToDataPoint: true
                            }
                        },
                        axisY: {
                            title: "Price",
                            crosshair: {
                                enabled: true
                            }
                        },
                        toolTip: {
                            shared: true
                        },
                        legend: {
                            cursor: "pointer",
                            verticalAlign: "bottom",
                            horizontalAlign: "left",
                            dockInsidePlotArea: true,
                            itemclick: toogleDataSeries
                        },
                        data: [{
                            type: "line",
                            showInLegend: true,
                            name: "BTC",
                            markerType: "circle",
                            xValueFormatString: "DD MMM, YYYY",
                            color: "red",
                            dataPoints: [
                                {x: new Date(2017, 0, 3), y: 650},
                                {x: new Date(2017, 0, 4), y: 700},
                                {x: new Date(2017, 0, 5), y: 710},
                                {x: new Date(2017, 0, 6), y: 658},
                                {x: new Date(2017, 0, 7), y: 734},
                                {x: new Date(2017, 0, 8), y: 963},
                                {x: new Date(2017, 0, 9), y: 847},
                                {x: new Date(2017, 0, 10), y: 853},
                                {x: new Date(2017, 0, 11), y: 869},
                                {x: new Date(2017, 0, 12), y: 943},
                                {x: new Date(2017, 0, 13), y: 970},
                                {x: new Date(2017, 0, 14), y: 869},
                                {x: new Date(2017, 0, 15), y: 890},
                                {x: new Date(2017, 0, 16), y: 930}
                            ]
                        },
                            {
                                type: "line",
                                showInLegend: true,
                                name: "ETH",
                                markerType: "circle",
                                xValueFormatString: "DD MMM, YYYY",
                                color: "blue",
                                dataPoints: [
                                    {x: new Date(2017, 0, 3), y: 510},
                                    {x: new Date(2017, 0, 4), y: 560},
                                    {x: new Date(2017, 0, 5), y: 540},
                                    {x: new Date(2017, 0, 6), y: 558},
                                    {x: new Date(2017, 0, 7), y: 544},
                                    {x: new Date(2017, 0, 8), y: 693},
                                    {x: new Date(2017, 0, 9), y: 657},
                                    {x: new Date(2017, 0, 10), y: 663},
                                    {x: new Date(2017, 0, 11), y: 639},
                                    {x: new Date(2017, 0, 12), y: 673},
                                    {x: new Date(2017, 0, 13), y: 660},
                                    {x: new Date(2017, 0, 14), y: 562},
                                    {x: new Date(2017, 0, 15), y: 643},
                                    {x: new Date(2017, 0, 16), y: 570}
                                ]
                            }]
                    });
                    chart.render();

                    function toogleDataSeries(e) {
                        if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                            e.dataSeries.visible = false;
                        } else {
                            e.dataSeries.visible = true;
                        }
                        chart.render();
                    }

                }
            </script>
                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        </body>
    </html>

<!-------------- ОБРАБОТКА ФОРМ ------------------------>
<?php

    if(!empty($_POST) && $_GET['formsend']){
        if(!empty($_POST['currency']) && !empty($_POST['price']) && !empty($_POST['amount'])){
            add_purchase($_POST);
        }
    }

    print_r($_POST);





