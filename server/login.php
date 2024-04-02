<?php
    session_start();
    require_once("db.php");
    extract($_POST);
    $sql="Select jelszo as crypted from adminpanel where felhasznalonev='{$felhasznalonev}'";
    try{
        $stmt=$db->query($sql);
        if($stmt->rowCount()==1){
            $row=$stmt->fetch();
            extract($row);
            $isValid=password_verify($jelszo,$crypted);
            if($isValid){
                $_SESSION["felhasznalonev"]=$felhasznalonev;
                echo json_encode(["msg"=>"ok"]);
            }else
                echo json_encode(["msg"=>"Hibás jelszó/felhasználónév páros!"]);
        }else
            echo json_encode(["msg"=>"Nem létező felhasználónév!"]);
    
    }catch(exception $e){
        echo json_encode(["msg"=>"Nem sikerült az adatbáziskapcsolódás!- {$e}"]);
    }
    
?>