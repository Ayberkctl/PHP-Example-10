<?php require_once "header.php";?>

<h3>konular</h3>
<?php

// query
// prepare-execute
//- fetch() -fetchAll()
// select * from TABLE_NAME

$dersler=$db->query("SELECT * FROM test ")->fetchAll(PDO::FETCH_ASSOC);
/*
$sorgu = $db-> prepare("SELECT * FROM test WHERE id BETWEEN ? AND ?");
$sorgu->execute([2,4]);
$dersler= $sorgu->fetchAll(PDO::FETCH_ASSOC);
*/
//print_r($dersler);


?>
<ul>
    <?php foreach($dersler as $ders):?>
    <li>
    <?php echo $ders["baslik"] ?>
    <?php if($ders["onay"]==1): ?>
    <a href="index.php?sayfa=read&id=<?php echo $ders["id"] ?>">[READ]</a>
    <?php endif; ?>
    <a href="index.php?sayfa=güncele&id=<?php echo $ders["id"] ?>">[düzenle]</a>
    <a href="index.php?sayfa=sil&id=<?php echo $ders["id"] ?>">[SİL]</a>
    

    </li>
    <?php endforeach; ?>
</ul>