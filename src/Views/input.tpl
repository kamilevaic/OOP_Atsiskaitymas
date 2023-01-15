<!doctype html>
<html lang="en" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="./src/CSS/InputPage.css" media="all"/>
</head>
<body>
<nav>
    <a  href="/OOPatsiskaitymas"> Pagrindinis </a>
    <a class="active" href="/OOPatsiskaitymas/apskaita">Apskaita</a>
    <a  href="/OOPatsiskaitymas/rezultatai"> Rezultatai </a>
</nav>
    <form method="post" action="/OOPatsiskaitymas/apskaita">
        <label for="input"> Įrašykite sunaudotus kilovatus (kWh): </label>
        <input type="number" name="input" placeholder="Sunaudoti kWh" required><br>
        <label for="rate"> Įrašykite vienos kilovatvalandės kainą (kWh): </label>
        <input type="number" name="rate" placeholder="kWh kaina" step="any" required><br>
        <label for="tariff"> Pasirinkite tarifą: </label>
        <select name="tariff" required >
            <option value="Dieninis"> Dieninis </option>
            <option value="Naktinis"> Naktinis </option>
        </select>
        <br>
        <label for="month"> Pasirinkite mėnesį: </label>
        <select name="month" required>
            <option value="sausis"> Sausis </option>
            <option value="vasaris"> Vasaris </option>
            <option value="kovas"> Kovas </option>
            <option value="balandis"> Balandis </option>
            <option value="geguze"> Gegužė </option>
            <option value="birzelis"> Birželis </option>
            <option value="liepa"> Liepa </option>
            <option value="rugpjutis"> Rugpjūtis </option>
            <option value="rugsejis"> Rugsėjis </option>
            <option value="spalis"> Spalis </option>
            <option value="lapkritis"> Lapkritis </option>
            <option value="gruodis"> Gruodis </option>
        </select>
        <br>
        <button type="submit"> Skaičiuoti kainą </button>
    </form>

</body>
</html>

