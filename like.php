<?php
//deklaracja listy fanpage'y
$fanpages = array(
	"woblink" => 0,
	"legimi" => 0,
	"wolnelektury" => 0,
	"RW2010pl" => 0,
	"Virtualo" => 0,
	"bookoteka" => 0,
	"bookrage" => 0
);

//sprawdzanie listy
while(list($fanpage, $likes) = each($fanpages)) {
	$json_data = file_get_contents("http://graph.facebook.com/".$fanpage);
	$json_data = json_decode($json_data, true);
	$fanpages[$fanpage] = $json_data["likes"];
}
reset($fanpages);

//sortowanie listy

//wyswietlanie listy
while(list($fanpage, $likes) = each($fanpages)) {
	echo("test ".$fanpage." ".$likes."\n");
}
reset($fanpages);
?>
