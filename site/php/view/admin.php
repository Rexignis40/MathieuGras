<?php
    require "php/security.php";
?>

<form method="post" action="php/actions/addImage.php" enctype="multipart/form-data">
    <label>Name: <input type="text" name="name" required></label>
    <label>Prix: <input type="number" name="price" required></label>
    <label>Image: <input type="file" name="img" required></label>
    <?php
    $sql = "SELECT * FROM category"; 
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
    foreach($data as $category){ 
       echo ('<br> <label>category: <input type="radio" name="category" value="'.$category["id"].'" required>'.$category["name"].'</label>');
    }
    ?>
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
<form method="post" action="php/actions/tuveuxquejeteretorneviolamentbydorian.php" enctype="multipart/form-data">
    <input type='text' name='name' placeholder="Nouvelle catégorie ?" />
    <input type='hidden' name='id'/>
    <input type='submit'>
</form>
<?php
$sql = "SELECT * FROM category"; 
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC);

foreach($data as $category){ ?>
<br>
<div>
    <form method="post" action="php/categoryChange.php">
        <input type='text' name='name' value="<?php echo $category['name'] ?>" />
        <input type='hidden' name='id' value="<?php echo $category['id'] ?>" />
        <input type='submit' />
    </form>
    <form method="post" action="php/actions/deleteCategory.php">
        <input type='hidden' name='id' value="<?php echo $category['id'] ?>" />
        <input type='submit' value="delette:<?php echo $category['name'] ?>" />
    </form>
</div>
<?php } ?>