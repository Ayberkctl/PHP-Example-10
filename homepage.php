<a href="index.php?sayfa=insert"><h1>[içerik ekle]</h1></a>

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
print_r($dersler);
?>