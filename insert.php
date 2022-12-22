<?php
// INSERT INTO table_name SET kol1=deger1;

//$db->query('INSERT INTO test SET baslik = "başlık" , icerik = "içerik" , onay = 1 ');

/*
$sorgu = $db->prepare("INSERT INTO test SET
baslik=?,
icerik=?,
onay=?");
$ekle = $sorgu->execute([
    "deneme baslik","icerik",1
]);

if($ekle){
    echo "verileriniz eklendi";
} 
else{
    $hata=$sorgu->errorInfo();
    echo "MySQL Hatası: ". $hata[2];
}*/
    if(isset($_POST["submit"])){
        //$baslik= isset($_POST["baslik"]) ? $_POST["baslik"] : null; OR $baslik= $_POST["baslik"] ?? null;
        $baslik= $_POST["baslik"] ?? null;
        $icerik= $_POST["icerik"] ?? null;
        $onay= $_POST["onay"] ?? 0;
        if(!$baslik){echo"başlık ekleyin";}
        else if(!$icerik){echo"icerik ekleyin";}
        else{
            $sorgu= $db->prepare("INSERT INTO test SET
            baslik=?,
            icerik=?,
            onay=?");
            $ekle = $sorgu ->execute([
                $baslik, $icerik, $onay
            ]);

            if($ekle){
                header("location:index.php");
            }else{
                $hata=$sorgu->errorInfo();
                echo "MySQL hatası".$hata[2];
            }
        }
        
    }
?>
     
<form action="" method="post">
    Başlık: <br> 
    <input type="text" name="baslik" value="<?php echo $_POST["baslik"] ?? "" ; ?>" > <br> <br>
    İçerik: <br>
    <textarea name="icerik" cols="30" rows="10" value="<?php echo $_POST["icerik"] ?? "" ; ?>"></textarea> <br> <br>
    Onay:  
    <select name="onay" > 
        <option value="0">Onaylı</option>
        <option value="1">Onaylı değil</option>
    </select> <br> <br>
    <input type="hidden" name="submit" value="1">
    <button type="submit">Gönder</button>

</form>