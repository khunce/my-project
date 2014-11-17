<?php
include("/../database/db.php");

function insertToHistory($nama,$email,$age,$course,$jk){
	$query="INSERT INTO `spk`.`log_pengguna` (`nama`, `email`, `age`, `course`, `jk`) VALUES ('$nama', '$email', '$age', '$course', '$jk');";
	$insert=mysql_query($query);
}

function doMGA($kriteria_harga,$kriteria_jarak,$kriteria_fasilitas,$array_id_rmh){
	$array_of_harga=getArrayOfHarga($array_id_rmh);
	$array_of_jarak=getArrayOfJarak($array_id_rmh);
	$array_of_facility=getArrayOfFacility($array_id_rmh);
	$array_of_total;
	global $array_of_index;
	for($j=0;$j<count($array_of_harga);$j++){
		//echo "idx rmh: $array_id_rmh[$j] : $kriteria_harga  * $array_of_harga[$j] + $kriteria_jarak * $array_of_jarak[$j] + $kriteria_fasilitas * $array_of_facility[$j] = ";
		$array_of_total[$j]=($kriteria_harga*$array_of_harga[$j])+($kriteria_jarak*$array_of_jarak[$j])+($kriteria_fasilitas*$array_of_facility[$j]);
		//echo $array_of_total[$j]." <br> xxxx ";
	}
	$max=max($array_of_total);
	$index=array_search($max,$array_of_total);
	//echo "<br><br>";
	//echo "index and max : ".$index." ".$max." <br><br>";
	$counter=0;
	for($i=0;$i<count($array_of_total);$i++){
		if($array_of_total[$i]==$max){
			//echo "$i : total : $array_of_total[$i] : true <br>";
			$counter++;
		}
	}
	//echo "counter :  $counter <br><br>";
	$u=0;
	for($j=0;$j<count($array_of_total);$j++){
		if($array_of_total[$j]==$max){
			$array_of_index[$u]=$array_id_rmh[$j];
			//echo "index : ".$array_of_index[$u]." <br> ";
			$u++;
		}
	}
	for($l=0;$l<count($array_of_index);$l++){
						$nama[$l]=getNamaKost($array_of_index[$l]);
						//echo $nama[$l];
						$alamat[$l]=getAlamatKost($array_of_index[$l]);
						$urlphoto[$l]=getUrlPhoto($array_of_index[$l]);
						$deskripsi_harga[$l]=getNilaiHarga($array_of_index[$l]);
						$deskripsi_fasilitas[$l]=getDescription($array_of_index[$l]);
						$sistemkontrak2[$l]=getSistemKontrakFromId($array_of_index[$l]);
						//$alamat[$l]=$row['Alamat'];
	}
	$count=count($nama);
	//echo $nama[0];
	echo"<figure class='show'><img src='$urlphoto[0]'  width='100%'><figcaption>Kos ke 1 dari $count <br> $nama[0] <br> $alamat[0] <br> Rp $deskripsi_harga[0] / $sistemkontrak2[0]<br>$deskripsi_fasilitas[0]</figcaption></figure>";
	
	$u=2;
	for($j=1;$j<count($nama);$j++,$u++){
			echo "<figure><img src='$urlphoto[$j]'  width='100%'><figcaption>Kos ke $u dari $count <br> $nama[$j] <br> $alamat[$j] <br> Rp $deskripsi_harga[$j] / $sistemkontrak2[$j]<br>$deskripsi_fasilitas[$j]</figcaption></figure>";
	}
	
	//getKostFromId($array_of_index);
}

function getCounter2($kriteria_harga,$kriteria_jarak,$kriteria_fasilitas,$array_id_rmh){
	global $counter2;
	$array_of_harga=getArrayOfHarga($array_id_rmh);
	$array_of_jarak=getArrayOfJarak($array_id_rmh);
	$array_of_facility=getArrayOfFacility($array_id_rmh);
	$array_of_total;
	global $array_of_index;
	for($j=0;$j<count($array_of_harga);$j++){
		//echo "idx rmh: $array_id_rmh[$j] : $kriteria_harga  * $array_of_harga[$j] + $kriteria_jarak * $array_of_jarak[$j] + $kriteria_fasilitas * $array_of_facility[$j] = ";
		$array_of_total[$j]=($kriteria_harga*$array_of_harga[$j])+($kriteria_jarak*$array_of_jarak[$j])+($kriteria_fasilitas*$array_of_facility[$j]);
		//echo $array_of_total[$j]." <br> xxxx ";
	}
	$max=max($array_of_total);
	$index=array_search($max,$array_of_total);
	//echo "<br><br>";
	//echo "index and max : ".$index." ".$max." <br><br>";
	$counter=0;
	for($i=0;$i<count($array_of_total);$i++){
		if($array_of_total[$i]==$max){
			//echo "$i : total : $array_of_total[$i] : true <br>";
			$counter++;
		}
	}
	//echo "counter :  $counter <br><br>";
	$u=0;
	for($j=0;$j<count($array_of_total);$j++){
		if($array_of_total[$j]==$max){
			$array_of_index[$u]=$array_id_rmh[$j];
			//echo "index : ".$array_of_index[$u]." <br> ";
			$u++;
		}
	}
	$counter2=count($array_of_index);
	return $counter2;
}


function getNamaKost($id_rmh){
	global $nama_kost;
	$query = "SELECT `nama_kost` FROM `spk`.`kost` WHERE  `id` ='$id_rmh'";
	$result=mysql_query($query);
	while ($row=mysql_fetch_array($result)){
				$nama_kost=$row['nama_kost'];
	}
	return $nama_kost;
}

function getAlamatKost($id_rmh){
	global $alamat_kost;
	$query = "SELECT `Alamat` FROM `spk`.`kost` WHERE  `id` ='$id_rmh'";
	$result=mysql_query($query);
	while ($row=mysql_fetch_array($result)){
				$alamat_kost=$row['Alamat'];
	}
	return $alamat_kost;
}

function getUrlPhoto($id_rmh){
	global $url_foto;
	$query = "SELECT `url_photo` FROM `spk`.`kost` WHERE  `id` ='$id_rmh'";
	$result=mysql_query($query);
	while ($row=mysql_fetch_array($result)){
				$url_foto=$row['url_photo'];
	}
	return $url_foto;
}

function getNilaiHarga($id_rmh){
	global $nilai_harga;
	$query = "SELECT `nilai_harga` FROM `spk`.`kost` WHERE  `id` ='$id_rmh'";
	$result=mysql_query($query);
	while ($row=mysql_fetch_array($result)){
				$nilai_harga=$row['nilai_harga'];
	}
	return $nilai_harga;
}

function getDescription($id_rmh){
	global $desc;
	$query = "SELECT `deskripsi_fasilitas` FROM `spk`.`kost` WHERE  `id` ='$id_rmh'";
	$result=mysql_query($query);
	while ($row=mysql_fetch_array($result)){
				$desc=$row['deskripsi_fasilitas'];
	}
	return $desc;
}

function getSistemKontrakFromId($id_rmh){
	global $nama_kontrak;
	global $id_kontrak;
	$query = "SELECT `id_sistem_kontrak` FROM `spk`.`kost` WHERE  `id` ='$id_rmh'";
	$result=mysql_query($query);
	while ($row=mysql_fetch_array($result)){
				$id_kontrak=$row['id_sistem_kontrak'];
	}
	$nama_kontrak=getSistemKontrak($id_kontrak);
	return $nama_kontrak;
}
	

function getArrayOfFacility($array_id_rmh){
	global $array_of_facility;
	global $array_of_facilityut;
	global $array_of_facilitytb;
	for($i=0;$i<count($array_id_rmh);$i++){
		$temp=$array_id_rmh[$i];
		$query = "SELECT * FROM `spk`.`kost` WHERE  `id` LIKE '%$temp%'";
		$result=mysql_query($query);
		//echo "$result";
		if($result === FALSE) {
			echo "<div id='error'>Database retrieval error!</div>";
		}
		else {
			while ($row=mysql_fetch_array($result)){
				$temp2=getRatingFacilityUt($row['id_fasilitas_utama']);
				$temp3=getRatingFacilityTb($row['id_fasilitas_tambahan']);
				$array_of_facility[$i]=($temp2+$temp3)/2;
			}
		}
	}
	return $array_of_facility;
}

function getRatingFacilityUt($id_fasilitas_utama){
	global $rating_fasilitas_utama;
	$query = "SELECT * FROM `spk`.`fasilitas_utama` WHERE  `id` ='$id_fasilitas_utama'";
	$result=mysql_query($query);
		//echo "$result";
	if($result === FALSE) {
			echo "<div id='error'>Database retrieval error!</div>";
	}
	else {
			while ($row=mysql_fetch_array($result)){
				$rating_fasilitas_utama=$row['rating'];
			}
	}
	return $rating_fasilitas_utama;
}

function getRatingFacilityTb($id_fasilitas_tbhan){
	global $rating_fasilitas_tbhan;
	$query = "SELECT * FROM `spk`.`fasilitas_tambahan` WHERE  `id` ='$id_fasilitas_tbhan'";
	$result=mysql_query($query);
		//echo "$result";
	if($result === FALSE) {
			echo "<div id='error'>Database retrieval error!</div>";
	}
	else {
			while ($row=mysql_fetch_array($result)){
				$rating_fasilitas_tbhan=$row['rating'];
			}
	}
	return $rating_fasilitas_tbhan;
}

function getArrayOfJarak($array_id_rmh){
	global $array_of_jarak;
	for($i=0;$i<count($array_id_rmh);$i++){
		$temp=$array_id_rmh[$i];
		$query = "SELECT * FROM `spk`.`kost` WHERE  `id` LIKE '%$temp%'";
		$result=mysql_query($query);
		//echo "$result";
		if($result === FALSE) {
			echo "<div id='error'>Database retrieval error!</div>";
		}
		else {
			while ($row=mysql_fetch_array($result)){
				$temp2=getRatingJarak($row['id_jarak_kampus']);
				$array_of_jarak[$i]=$temp2;
			}
		}
	}
	return $array_of_jarak;
}

function getRatingJarak($id_jarak){
	global $rating_jarak;
	$query = "SELECT * FROM `spk`.`jarak_kampus` WHERE  `id` ='$id_jarak'";
	$result=mysql_query($query);
		//echo "$result";
	if($result === FALSE) {
			echo "<div id='error'>Database retrieval error!</div>";
	}
	else {
			while ($row=mysql_fetch_array($result)){
				$rating_jarak=$row['rating'];
			}
	}
	return $rating_jarak;
}

function getArrayOfHarga($array_id_rmh){
	global $array_of_harga;
	for($i=0;$i<count($array_id_rmh);$i++){
		$temp=$array_id_rmh[$i];
		$query = "SELECT * FROM `spk`.`kost` WHERE  `id` LIKE '%$temp%'";
		$result=mysql_query($query);
		//echo "$result";
		if($result === FALSE) {
			echo "<div id='error'>Database retrieval error!</div>";
		}
		else {
			while ($row=mysql_fetch_array($result)){
				$temp2=getRatingHarga($row['id_biaya']);
				$array_of_harga[$i]=$temp2;
			}
		}
	}
	return $array_of_harga;
}

function getRatingHarga($id_harga){
	global $rating_harga;
	$query = "SELECT * FROM `spk`.`biaya` WHERE  `id` ='$id_harga'";
	$result=mysql_query($query);
		//echo "$result";
	if($result === FALSE) {
			echo "<div id='error'>Database retrieval error!</div>";
	}
	else {
			while ($row=mysql_fetch_array($result)){
				$rating_harga=$row['rating'];
			}
	}
	return $rating_harga;
}

function getCounter($sistemkontrak,$harga,$jarak,$fasilitasutama,$fasilitastbhan){
	global $counterfind;
	$idkontrak=getIdSistemKontrak($sistemkontrak);
	//echo "$idkontrak";
	//echo $idkontrak;
	$idjarak=getIdJarak($jarak);
	$idharga=getIdHarga($harga);
	//echo $idjarak;
	//global $nama;
	$fasilitas2=joinFacility($fasilitasutama,$fasilitastbhan);
	//echo $fasilitas2;
	$query = "SELECT * FROM `spk`.`kost` WHERE  `id_sistem_kontrak`='$idkontrak' and `id_biaya`='$idharga' and `id_jarak_kampus`='$idjarak' or `id_sistem_kontrak`='$idkontrak' and `id_biaya`='$idharga' and `deskripsi_fasilitas` LIKE '%$fasilitas2%' ORDER BY `nilai_harga` ASC";
	$result=mysql_query($query);
	//echo "$result";
	$i=0;
		//echo "<div id='captioned-gallery'><figure class='slider'>";
	while ($row=mysql_fetch_array($result)){
				$nama[$i]=$row["nama_kost"];
				$i++;
	}
	$counterfind=count($nama);
	return $counterfind;
}

function getCounter3($sistemkontrak,$harga,$jarak,$fasilitasutama,$fasilitastbhan){
	global $counterfind3;
	$idkontrak=getIdSistemKontrak($sistemkontrak);
	//echo "$idkontrak";
	//echo $idkontrak;
	$idjarak=getIdJarak($jarak);
	$idharga=getIdHarga($harga);
	//echo $idjarak;
	//global $nama;
	$fasilitas2=joinFacility($fasilitasutama,$fasilitastbhan);
	//echo $fasilitas2;
	$query = "SELECT * FROM `spk`.`kost` WHERE  `id_sistem_kontrak`='$idkontrak' and `id_biaya`='$idharga' and `id_jarak_kampus`='$idjarak' or `id_sistem_kontrak`='$idkontrak' and `id_biaya`='$idharga' and `deskripsi_fasilitas` LIKE '%$fasilitas2%' ORDER BY `nilai_harga` ASC";
	$result=mysql_query($query);
	//echo "$result";
	$i=0;
		//echo "<div id='captioned-gallery'><figure class='slider'>";
	while ($row=mysql_fetch_array($result)){
				$nama[$i]=$row["nama_kost"];
				$i++;
	}
	$counterfind3=count($nama);
	return $counterfind3;
}


	
function getRumahKost($sistemkontrak,$harga,$jarak,$fasilitasutama,$fasilitastbhan){
	$idkontrak=getIdSistemKontrak($sistemkontrak);
	//echo "$idkontrak";
	//echo $idkontrak;
	$idjarak=getIdJarak($jarak);
	$idharga=getIdHarga($harga);
	//global $nama3;
	//echo $idjarak;
	//global $nama;
	$fasilitas2=joinFacility($fasilitasutama,$fasilitastbhan);
	//echo $fasilitas2;
	$query = "SELECT * FROM `spk`.`kost` WHERE  `id_sistem_kontrak`='$idkontrak' and `id_biaya`='$idharga' and `id_jarak_kampus`='$idjarak' or `id_sistem_kontrak`='$idkontrak' and `id_biaya`='$idharga' and `deskripsi_fasilitas` LIKE '%$fasilitas2%' ORDER BY `nilai_harga` ASC ";
	$result=mysql_query($query);
	//echo "$result";
	if($result === FALSE) {
		echo "<div id='error'>Database retrieval error!</div>";
	}
	else {
		$i=0;
		//echo "<div id='captioned-gallery'><figure class='slider'>";
		while ($row=mysql_fetch_array($result)){
				$nama[$i]=$row["nama_kost"];
				//echo $nama[$i];
				$alamat[$i]=$row['Alamat'];
				$urlphoto[$i]=$row['url_photo'];
				$deskripsi_harga[$i]=$row['nilai_harga'];
				$deskripsi_fasilitas[$i]=$row['deskripsi_fasilitas'];
				$sistemkontrak2[$i]=getSistemKontrak($idkontrak);
				$alamat[$i]=$row['Alamat'];
				//echo "$sistemkontrak[$i]";
				$i++;
		}
		//echo $i;
		//$nama3=count($nama);
		if(count($nama)>0){
			$count=count($nama);
			echo"<figure class='show'><img src='$urlphoto[0]'  width='100%'><figcaption>Kos ke 1 dari $count <br> $nama[0] <br> $alamat[0] <br> Rp $deskripsi_harga[0] / $sistemkontrak2[0]<br>$deskripsi_fasilitas[0]</figcaption></figure>";
			$u=2;
			for($j=1;$j<count($nama);$j++,$u++){
				echo "<figure><img src='$urlphoto[$j]'  width='100%'><figcaption>Kos ke $u dari $count <br>$nama[$j] <br> $alamat[$j] <br> Rp $deskripsi_harga[$j] / $sistemkontrak2[$j]<br>$deskripsi_fasilitas[$j]</figcaption></figure>";
			}
		}
		else{	
			echo "<div id='error'>Data tidak ada yang cocok!</div>";
		}
	}
}

function countFasilitasUtama($fasilitasutama){
	return count($fasilitasutama);
}

function countFasilitasTbhan($fasilitastbhan){
	return count($fasilitastbhan);
}

function getIdRumahKost($sistemkontrak,$harga,$jarak,$fasilitasutama,$fasilitastbhan){
	global $id_rumah2;
	$idkontrak=getIdSistemKontrak($sistemkontrak);
	$idjarak=getIdJarak($jarak);
	$idharga=getIdHarga($harga);
	$fasilitas2=joinFacility($fasilitasutama,$fasilitastbhan);
	
	$query ="SELECT * FROM `spk`.`kost` WHERE  `id_sistem_kontrak`='$idkontrak' and `id_biaya`='$idharga' and `id_jarak_kampus`='$idjarak' or `id_sistem_kontrak`='$idkontrak' and `id_biaya`='$idharga' and `deskripsi_fasilitas` LIKE '%$fasilitas2%' ORDER BY `nilai_harga` ASC";
	$result=mysql_query($query);
	if($result === FALSE) {
		echo "<div id='error'>Database retrieval error!</div>";
	}
	else {
		$i=0;
		//$counter=count(mysql_fetch_array($result));
		//echo $counter+"x";
		while ($row=mysql_fetch_array($result)){
			    $id_rumah[$i]=$row['id'];
				
				
				//echo "$id_rumah[$i],";
				
				$i++;
		}
		for($j=0;$j<count($id_rumah);$j++){
			if($j==count($id_rumah)-1){
				$id_rumah2.="$id_rumah[$j]";
			}
			else {
				$id_rumah2.="$id_rumah[$j],";
			}
		}
		
	}
	return $id_rumah2;
}

			
function joinFacility($fasilitasutama,$fasilitastbhan){
	global $facility;
	$counter=count($fasilitasutama);
	//echo $counter;

	$counter2=count($fasilitastbhan);
	$facility="";
		//echo $counter2;
	for($k=0;$k<$counter;$k++){
			//echo $fasilitasutama[$k];
			$facility.="$fasilitasutama[$k],";
	}
	for($l=0;$l<$counter2;$l++){
			//echo $fasilitastbhan[$l];
		if($l==$counter2-1){
				$facility.="$fasilitastbhan[$l]";
		}
		else{
				$facility.="$fasilitastbhan[$l],";
		}
	}
	//echo $facility;
	return $facility;
}

function getSistemKontrak($id){
	global $sistemkontrak;
	$query = "SELECT * FROM `spk`.`sistem_kontrak` WHERE  `id`='$id'";
	$result=mysql_query($query);
	while ($row=mysql_fetch_array($result)){
		$sistemkontrak=$row['nama'];
		//echo $sistemkontrak;
	}
	return $sistemkontrak;
}

function getIdHarga($harga){
	global $id3;
	if($harga=='100-500'){
		$id3=7;
	}
	else if ($harga=='501-1000'){
		$id3=8;
	}
	else if($harga=='>1000'){
		$id3=9;
	}
	else if($harga=='<3000'){
		$id3=4;
	}
	else if($harga=='3000-6000'){
		$id3=5;
	}
	else if($harga=='>6000'){
		$id3=6;
	}
	else if($harga=='<5000'){
		$id3=1;
	}
	else if($harga=='5000-10000'){
		$id3=2;
	}
	else if($harga=='>10000'){
		$id3=3;
	}
	return $id3;
}
		
			
function getIdSistemKontrak($sistemkontrak){
	global $id;
	if($sistemkontrak=='bulanan'){
		$id=1;
	}
	else if ($sistemkontrak=='smt'){
		$id=2;
	}
	else if($sistemkontrak=='thn'){
		$id=3;
	}
	return $id;
}

function getIdJarak($jarak){
	global $id2;
	if($jarak=='<0.5'){
		$id2=1;
	}
	else if ($jarak=='0.5-1'){
		$id2=2;
	}
	else if($jarak=='1-1.5'){
		$id2=3;
	}
	else if($jarak=='1.5-2'){
		$id2=4;
	}
	else if($jarak=='>2'){
		$id2=5;
	}
	return $id2;
}

?>