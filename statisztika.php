<?php


require_once "config.php";

$strtable="";

    $sql="SELECT a.nev,count(b.id)as 'darabszam' from szolgaltatas a, ugyfel b where a.id=b.szolgaltatasid group by a.nev";
    $stmt=$db->query($sql);
    $strtable="<thead class='thead-dark'><th>Név</th><th>Darabszám</th></thead><tbody>";
    while($row=$stmt->fetch()){
        extract($row);
        $strtable.="<tr><td>{$nev}</td><td>{$darabszam}</td></tr>";
    }
    $strtable.=" </tbody>";


?>
<h2>Statisztika</h2>
</div>
            <div class="row justify-content-center">
            <div class="table" style="height:300px; overflow:scroll">
            <p><table  class="table-striped table-bordered">    
                    
                    <?=$strtable?>
                    
                </table> 
            </p>
            </div>
</div>




