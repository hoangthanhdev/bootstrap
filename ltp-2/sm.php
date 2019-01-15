<?php 
require_once "classDB.php";
if(isset($d)==false) $d = new db;
$PhimDuyet=$d->PhimDuyet();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$date = date('Y-m-d', time()); 

$dom=new DOMDocument("1.0","utf-8");
$A=$dom->createElement("urlset");
$dom->appendChild($A);

$ds=$dom->createAttribute("xmlns");
$A->appendChild($ds);

$vds=$dom->createTextNode("http://www.sitemaps.org/schemas/sitemap/0.9");
$ds->appendChild($vds);

$ds=$dom->createAttribute("xmlns:xsi");
$A->appendChild($ds);

$vds=$dom->createTextNode("http://www.w3.org/2001/XMLSchema-instance");
$ds->appendChild($vds);

$ds=$dom->createAttribute("xsi:schemaLocation");
$A->appendChild($ds);

$vds=$dom->createTextNode("http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd");
$ds->appendChild($vds);
/*start row*/
$B=$dom->createElement("url");
$A->appendChild($B);

$C=$dom->createElement("loc","https://lytaphim.net/");
$B->appendChild($C);

$D=$dom->createElement("lastmod","$date");
$B->appendChild($D);

$E=$dom->createElement("changefreq","monthly");
$B->appendChild($E);

$F=$dom->createElement("priority","1");
$B->appendChild($F);
/*end row*/
while($row_PhimDuyet=mysqli_fetch_assoc($PhimDuyet)) {
$lastmod = $row_PhimDuyet['post_modified'];
echo $lastmod = date('Y-m-d', strtotime($lastmod));
$post_name= $row_PhimDuyet['post_name'];

$B=$dom->createElement("url");
$A->appendChild($B);

$C=$dom->createElement("loc","https://lytaphim.net/xem/$post_name.html");
$B->appendChild($C);

$D=$dom->createElement("lastmod","$lastmod");
$B->appendChild($D);

$E=$dom->createElement("changefreq","daily");
$B->appendChild($E);

$F=$dom->createElement("priority","0.8");
$B->appendChild($F);
}
$dom->save("sitemap.xml");
echo "Tao xml thanh cong";
?>