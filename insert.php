<?php
$data = json_decode(file_get_contents('php://input'), true);

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'beertester');


$brand='';
if (isset($data['brand'])){
	$brand = mysqli_real_escape_string($con, $data['brand']);
}

$brewer='';
if (isset($data['brewer'])){
	$brewer = mysqli_real_escape_string($con, $data['brewer']);
}

$country='';
if (isset($data['country'])){
	$country = mysqli_real_escape_string($con, $data['country']);
}

$style='';
if (isset($data['style'])){
	$style = mysqli_real_escape_string($con, $data['style']);
}

$alc='';
if (isset($data['alc'])){
	$alc = mysqli_real_escape_string($con, $data['alc']);
}

$price='';
if (isset($data['price'])){
	$price = mysqli_real_escape_string($con, $data['price']);
}

$foam='';
if (isset($data['foam'])){
	$foam = mysqli_real_escape_string($con, $data['foam']);
}

$transparency='';
if (isset($data['transparency'])){
	$transparency = mysqli_real_escape_string($con, $data['transparency']);
}

$srm='';
if (isset($data['srm'])){
	$srm = mysqli_real_escape_string($con, $data['srm']);
}

$ibu='';
if (isset($data['ibu'])){
	$ibu = mysqli_real_escape_string($con, $data['ibu']);
}

$glass='';
if (isset($data['glass'])){
	$glass = mysqli_real_escape_string($con, $data['glass']);
}

$vessel='';
if (isset($data['vessel'])){
	$vessel = mysqli_real_escape_string($con, $data['vessel']);
}

$notes='';
if (isset($data['notes'])){
	$notes = mysqli_real_escape_string($con, $data['notes']);
}

$name='';
if (isset($data['name'])){
	$name = mysqli_real_escape_string($con, $data['name']);
}



$reg = "INSERT INTO beers(brand, brewer, country, style, alc, price, foam, transparency, srm, ibu, glass, vessel, notes, name) values('$brand' ,'$brewer' ,'$country' , '$style' , '$alc' , '$price', '$foam' , '$transparency' , '$srm' , '$ibu', '$glass' , '$vessel', '$notes', '$name')";

mysqli_query($con, $reg);
echo "New beer rated";

    ?>
