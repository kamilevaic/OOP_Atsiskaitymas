<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rezultatai</title>
    <link rel="stylesheet" href="./src/CSS/OutputPage.css" media="all"/>
</head>
<body>
<nav>
    <a  href="/OOPatsiskaitymas"> Pagrindinis </a>
    <a  href="/OOPatsiskaitymas/apskaita">Apskaita</a>
    <a  class="active" href="/OOPatsiskaitymas/rezultatai"> Rezultatai </a>
</nav>
<div class="content">
    <legend>Sąskaitos</legend> <br>
    <table>
        <tr>
            <th>Mėnesis</th>
            <th>Suvartota kWh</th>
            <th>Vienos kWh kaina</th>
            <th>Tarifas</th>
            <th>Suma mokėti</th>
        </tr>
        {foreach $bills as $bill}
        <tr>
            <td>{$bill.month}</td>
            <td>{$bill.input}</td>
            <td>{$bill.rate}</td>
            <td>{$bill.tariff}</td>
            <td>{$bill.input }</td>
        </tr
        {/foreach}

    </table>
</div>
</body>