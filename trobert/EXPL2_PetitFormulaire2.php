
<html>
<body>

<form action="EXPL2_AnalyseFormulaire.php" method="post">

    Nom :
    <input name="nom" type="text">
<br>
    Prenom :
    <input name="prenom" type="text">
    <br>
    <input type="submit" name="soumettre" value="OK" />
    <br>
    <form>
        <label for="bts">selectionner votre bts :</label>
        <select id="bts" name="bts">
            <option value="bts sio">sio</option>
            <option value="autre bts">autre</option>
</select>
<br>
<br>
<label for="langue">selectionner votre langue dans ce bts :</label>
        <select id="langue" name="langue[]" multiple size="5">
            <option value="anglais">anglais</option>
            <option value="espagnol">espagnol</option>
            <option value="portugais" selected>portugais</option>
</form>
</body>
</html>




