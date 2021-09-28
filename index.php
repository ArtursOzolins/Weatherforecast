<?php

require_once 'vendor/autoload.php';

use App\Contents;
use App\URL;

if (!isset($_GET['location'])){
    $_GET['location'] = 'Riga';
}

$weatherAPIkey = '30b21dc0e37644cabfc83654212809';
$newURL = new URL($weatherAPIkey, $_GET['location']);
$data = new Contents($newURL->getURL());

echo "<pre>";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather forecast</title>
</head>
<body>
    <h1 style="text-align:left;"><?php echo $data->getLocation(); ?></h1>
    <p style="text-align:left;"><?php echo "Current date and time: {$data->getData()['location']['localtime']}" . PHP_EOL;
        echo "Current outside temperature: {$data->getTemp()}°C" . PHP_EOL;
        echo "Current weather conditions: {$data->getCondition()}"; ?>
    </p>
    <div>
        <table style="float: right">
            <tr>
                <th>Time</th>
                <th>Temperature</th>
                <th>Condition</th>
            </tr>
            <tr>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTime(7) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTemp(7) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastCondition(7) ?>y</td>
            </tr>
            <tr>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTime(8) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTemp(8) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastCondition(8) ?>y</td>
            </tr>
            <tr>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTime(9) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTemp(9) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastCondition(9) ?>y</td>
            </tr>
            <tr>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTime(10) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTemp(10) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastCondition(10) ?>y</td>
            </tr>
            <tr>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTime(11) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTemp(11) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastCondition(11) ?>y</td>
            </tr>
            <tr>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTime(12) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTemp(12) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastCondition(12) ?>y</td>
            </tr>
            <tr>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTime(13) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTemp(13) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastCondition(13) ?>y</td>
            </tr>
            <tr>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTime(14) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTemp(14) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastCondition(14) ?>y</td>
            </tr>
            <tr>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTime(15) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTemp(15) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastCondition(15) ?>y</td>
            </tr>
            <tr>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTime(16) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTemp(16) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastCondition(16) ?>y</td>
            </tr>
            <tr>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTime(17) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTemp(17) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastCondition(17) ?>y</td>
            </tr>
            <tr>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTime(18) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTemp(18) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastCondition(18) ?>y</td>
            </tr>
            <tr>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTime(19) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTemp(19) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastCondition(19) ?>y</td>
            </tr>
            <tr>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTime(20) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTemp(20) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastCondition(20) ?>y</td>
            </tr>
            <tr>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTime(21) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTemp(21) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastCondition(21) ?>y</td>
            </tr>
            <tr>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTime(22) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastTemp(22) ?></td>
                <td style="text-align:center;"><?php echo $data->currentDayForecastCondition(22) ?>y</td>
            </tr>
        </table>
    </div>
        <p><?php echo "Weather forecast for: {$data->getDate(1)}" . PHP_EOL;
            echo "Warmest temperature: {$data->getWarmestTemp(1)}" . PHP_EOL;
            echo "Average temperature: {$data->getAverageTemp(1)}" . PHP_EOL;
            echo "Likely conditions: {$data->getConditions(1)}" . PHP_EOL;?>
        </p>
        <p><?php echo "Weather forecast for: {$data->getDate(2)}" . PHP_EOL;
            echo "Warmest temperature: {$data->getWarmestTemp(2)}" . PHP_EOL;
            echo "Average temperature: {$data->getAverageTemp(2)}" . PHP_EOL;
            echo "Likely conditions: {$data->getConditions(2)}" . PHP_EOL;?>
        </p>

    <form method="get">
        <label for="location">Search city forecast:</label><br>
        <input type="text" id="location" name="location" placeholder="enter city"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>




