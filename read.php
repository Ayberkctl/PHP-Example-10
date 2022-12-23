<?php require_once "header.php";?>


<?php 

    if(!isset($_GET["id"]) || empty($_GET["id"])){
        header("location:index.php");
        exit;
    }

    $sorgu= $db->prepare("SELECT * FROM test WHERE id =? && onay=1 ");
    $sorgu->execute([$_GET['id']]);
    $ders=$sorgu->fetch(PDO::FETCH_ASSOC);
    if(!$ders){
        header("location:index.php");
        exit;
    }
    //print_r($ders);
    
?>
<h3><?php echo $ders["baslik"]?></h3>

<div>
    <h4>Yayın tarihi: <?php echo $ders["tarih"]?></h4>
    <?php echo nl2br($ders["icerik"])?>
</div>