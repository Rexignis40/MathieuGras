<?php
    require_once "security.php";
?>
<form method="post" action="../php/actions/addImage.php" enctype="multipart/form-data">
    <label>Name: <input type="text" name="name" required></label>
    <label>Prix: <input type="number" name="price" required></label>
    <label>Image: <input type="file" name="img" required></label>
    <input type="submit">
</form>
<br>
<form onSubmit="GetListUser();
                return false;">
    <input type="text" id="search-bar">
    <button onclick="GetListUser()">Chercher</button>
</form>

<?php
include("getListUser.php");
?>
<form method="post" action="../tuveuxquejeteretorneviolamentbydorian.php" enctype="multipart/form-data">
    <input type='text' name='Newcatégorie' value="Nouvelle catégorie ?" />
    <input type='hidden' name='id'/>
    <input type='submit'>
</form>