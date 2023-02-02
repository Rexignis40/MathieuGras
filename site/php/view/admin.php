<?php
    require "php/security.php";
?>

<h2 class="panelAdminTitle">Panel admin</h2>
<br>
<div class="listUser">
    <h3 class="listUserTitle">Liste des comptes</h3>
    <form onSubmit="GetListUser();
                    return false;">
        <input type="text" id="search-bar">
        <button class="formSubmit" onclick="GetListUser()">Chercher</button>
    </form>
</div>

<div id="userList">

</div>

<div id="createAnnonce">
    <h3>Créer une annonce</h3>
    <form method="post" action="php/actions/addImage.php" enctype="multipart/form-data">
        <label>Name: <input class="newAnnonce" type="text" name="name" required></label>
        <label>Prix: <input class="newAnnonce" type="number" name="price" required></label>
        <label>Image: <input  type="file" name="img" required></label>
        <?php
        $sql = "SELECT * FROM category";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC);
        foreach($data as $category){
        echo ('<br> <label>category:   <input class="allCat" type="radio" name="category" value="'.$category["id"].' "required> '.$category["name"].' </label>');
        }
        ?>
        <br><input class="formSubmit" type="submit">
    </form>
</div>
<div id="createCat">
    <h3>Nouvelle catégorie</h3>
    <form  method="post" action="php/actions/createCategory.php" enctype="multipart/form-data">
        <input class="newCat" type='text' name='name' placeholder="Nouvelle catégorie ?" />
        <input class="newCat" type='hidden' name='id'/>
        <input class="formSubmit" type='submit'>
    </form>
</div>

<?php
$sql = "SELECT * FROM category"; 
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC);

foreach($data as $category){ ?>
<br>
<div>
    <form id="updateCat" method="post" action="php/categoryChange.php">
        <input class="updateCat" type='text' name='name' value="<?php echo $category['name'] ?>" />
        <input class="updateCat" type='hidden' name='id' value="<?php echo $category['id'] ?>" />
        <input class="formSubmit" type='submit' />
    </form>
    <form id="updateCat"method="post" action="php/actions/deleteCategory.php">
        <input class="updateCat" type='hidden' name='id' value="<?php echo $category['id'] ?>" />
        <input class="formSubmit" type='submit' value="delete:<?php echo $category['name'] ?>" />
    </form>
</div>
<?php } ?>