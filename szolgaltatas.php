<?php
//print_r( $_POST);

require_once "config.php";
$msg="";
if(isset($_POST["mentes"])){
    extract($_POST);
    $sql="insert into szolgaltatas values(null,'{$nev}',{$elerheto})";
    //echo $sql;
    $stmt=$db->exec($sql);
    if($stmt){
        $msg="Sikeres adatbeírás!";
    }else{
        $msg="HIBA!";
    }
    
}

?>



<h2>Új szolgáltatás bevezetése</h2>
<form method="post">
    <input type="text" name="nev" id="" placeholder="Név" required>
    <input type="text" name="elerheto" id="" placeholder="Elérhető"required>
    <input type="submit" name="mentes" value="Mentés">

</form>

<div>

<?=$msg?>

</div>
