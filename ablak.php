<?php

require_once "config.php";

$lista="";
$strtable="";

    
    $sql="select szolgaltatasid,ablak from ugyfel group by ablak";
    $stmt=$db->query($sql);
    
    while($row=$stmt->fetch()){
        extract($row);
        $lista.="<option value='{$szolgaltatasid}'>{$ablak}</option>";
    }
    //print_r($_POST);
    
    if(isset($_POST["ablak"]) && $_POST["ablak"]!='0'){
        $id=$_POST["ablak"];
        $sql="SELECT b.nev,a.erkezett,a.sorrakerult,a.tavozott from ugyfel a,szolgaltatas b where b.id={$szolgaltatasid} and a.ablak={$ablak} order by a.erkezett";
        $stmt=$db->query($sql);
        $strtable="<thead class='thead-dark'><th>Nev</th><th>Érkezett</th><th>Sorrakerült</th><th>Távozott</th></thead><tbody>";
        while($row=$stmt->fetch()){
            extract($row);
            $strtable.="<tr><td>{$nev}</td><td>{$erkezett}</td><td>{$sorrakerult}</td><td>{$tavozott}</td></tr>";
        }
        $strtable.=" </tbody>";
    
    }
    ?>
    
    
    <h2>Műveletek</h2>
    
    <form method="post">
                    
                            <select name="ablak">
                                <option value="0">Valassz egy ablakot...</option>
                                    <?=$lista?>
                            </select>
                       
                        <input   type="submit" name="elfogad"  value="Adatokat mutat">
                </form> 
    
                <p> <table>    
                        
                        <?=$strtable?>
                        
                        </table> 
                    </p>   