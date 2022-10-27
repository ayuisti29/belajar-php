<?php

$nama = "Budi";
//PERULANGAN

/*echo $nama;
echo $nama;
echo $nama;
echo $nama;
echo $nama;*/

/*$no = 10;
for ($i=0; $i<$no; $i++) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
}*/


/*$no = 10;
$i = 0;
while ($i < $no) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
}*/


/*$no = 10;
$i = 0;
do{
    $n = $i +1;
    echo $n." ".$nama."<br/>";
    $i++;
} while ($i < $no)*/

/*$data = array ('Avanza', 'Lamborghini', 'Tesla', 'Xenia', 'XPander', 'Rubicon');

echo $data[5];
foreach($data as $value) {
    echo $value."<br/>";
}*/

//PERULANGAN

//PERCABANGAN

/*if($nama == "Putu") {
    echo $nama." adalah orang Bali";
}else{
    echo $nama." bukan orang Bali";
}*/

/*if($nama == "Putu") {
    echo $nama." adalah orang Bali";
}else if($nama == "Budi") {
    echo $nama." bukan orang Bali";
}else {
    echo $nama." dari mana ya?";
}*/

/*switch($nama){
    case "Putu";
        $pesan = $nama." adalah orang Bali";
    break;
    case "Budi";
        $pesan = $nama." adalah orang Jawa";
    break;
    default;
        $pesan = $nama." orang mana ya?";
}

echo $pesan;*/
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama Hewan dan Jumlah Perulangan</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <label>Nama Hewan</label>
    <input type ="text" name="nama">
    <label>Jumlah</label>
    <input type="text" name="no">
    <input type="submit" name="submit" value="Submit">
</form>
<?php
    if (!empty($_POST['submit'])) {

        switch($_POST['nama']) {
            case "Cendrawasih";
                $pesan = $_POST['nama']." adalah hewan khas Papua";
            break;
            case "Kanguru";
                $pesan = $_POST['nama']." adalah hewan khas Australia";
            break;
            case "Gajah";
                $pesan = $_POST['nama']." adalah hewan khas Thailand";
            break;
            default:
                $pesan = $_POST['nama']." hewan khas mana?";
        }
        for ($i=0;$i<$_POST['no'];$i++) {
            echo $pesan."<br>";
        }
    }else {
        echo "Anda belum memasukkan nama hewan dan jumlah perulangan";
    }
?>

</body>
</html>