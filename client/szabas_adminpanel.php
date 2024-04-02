<?php
if(!isset($_SESSION['felhasznalonev'])){
    header("Location: index.php");
 }
include '../server/adminkapcsolodas.php';
$sql='select * from szabas_arak';
$stmt=$db->query($sql);
$str='';
?>
    <h1 class="text-center display-1 my-2">AdminPanel</h1><hr>
    <div class="text-center content-center py-2">
        <button class="text-white btn p-2 text-center" id="elzarasadmin"><a href="index.php?prog=elzaras_adminpanel.php">Elzaras</a></button>
        <button class="text-white btn p-2 text-center" id="szabasadmin"><a href="index.php?prog=szabas_adminpanel.php">Szabas</a></button>
        <button class="text-white btn p-2 text-center" id="egyebadmin"><a href="index.php?prog=egyeb_adminpanel.php">Egyeb</a></button>
    </div>
    <h2 class="text-center display-3 my-2">Szabás-Árak Módosítása</h2>
    <table class="tbl-qa table table-light table-striped text-center">
        <thead>
            <tr>
                <th class="table-header">Id</th>
                <th class="table-header">Mértékegység</th>
                <th class="table-header">Bruttó Ft</th>
                <th class="table-header">Nettó Ft</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($row=$stmt->fetch()){
                extract($row);?>
                <tr class='table-row'>
                    <td><?=$id?></td>
                    <td contenteditable='true'
                        onBlur='save2(this,"nev",<?=$id?>)'
                        onClick='showEdit2(this);'><?=$nev?></td>
                    <td contenteditable='true'
                        onBlur='save2(this,"brutto",<?=$id?>)'
                        onClick='showEdit2(this);'><?=$brutto?></td>
                    <td contenteditable='true'
                        onBlur='save2(this,"netto",<?=$id?>)'
                        onClick='showEdit2(this);'><?=$netto?></td>
                </tr>
            <?php }?> 
        </tbody>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/inlineEdit_szabas.js"></script>
