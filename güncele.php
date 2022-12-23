<?php require_once "header.php";?>
<?php
 if(isset($_POST["submit"])){
    $baslik= $_POST["baslik"] ?? null;
    $icerik= $_POST["icerik"] ?? null;
    $onay= $_POST["onay"] ?? 0;
   
    if(!$baslik){echo"başlık ekleyin";}
        else if(!$icerik){echo"icerik ekleyin";}
        else{
        $sorgu=$db->prepare("UPDATE test SET
        baslik =?,
        icerik =?,
        onay =?,
        WHERE id = ?");

        $güncele=$db->execute([
        $baslik, $icerik, $onay,$_GET["id"]
        ]);
    }
    
}

?>
<form action="" method="post">
    YENİ Başlık: <br> 
    <input type="text" name="baslik" value="<?php echo $_POST["baslik"] ?? "" ; ?>" > <br> <br>
    YENİ İçerik: <br>
    <textarea name="icerik" cols="30" rows="10" value="<?php echo $_POST["icerik"] ?? "" ; ?>"></textarea> <br> <br>
    Onay:  
    <select name="onay" > 
        <option value="1">Onaylı</option>
        <option value="0">Onaylı değil</option>
    </select> <br> <br>
    <input type="hidden" name="submit" value="1">
    <button type="submit">Gönder</button>

</form>