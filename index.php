<?php
header('Content-type: text/html; charset=utf-8');
require "phpQuery-onefile.php";


/*ob_start();
setcookie("cookiename", "cookiedata");*/


function print_arr($arr) {
	echo '<pre>' . print_r($arr, true) . '</pre>';
}

 	$url = 'http://hitachi.tehno-lux.com.ua/products/r-v660puc3kpbe/';
	$html = file_get_contents($url);

//xprint( $html, '$html');
  	$doc = phpQuery::newDocument($file);

  	$resultt = $doc->find('title_pr');
  	echo "<pre>" . $resultt . "</pre>" . $resultt;
 print_arr($resultt);

$i=0;
  	foreach($doc->find('.articles-container .post-excerpt') as $article) {
  		$article = pq($article);
  		$img = $article->find('.img-cont img')->attr('src');
  		print_arr($img);
  		$i++;
  		if ($i==3) break; 
  	}

//ob_clean();


?>