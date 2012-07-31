<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Mostrando hashtag</title>
<?php
	/* %23 = # */
	$hash = '%23soudev'; ## Colocar o nome depois do %23 que significa ## 
	$search = 'http://search.twitter.com/search.json?q='.$hash.'&rpp=5';

	$json = file_get_contents($search);
	$data = json_decode($json);
?>
<style type="text/css">
*{
	margin:0px;
	padding:0px;
}

ul{
	list-style:none;
}

</style>
</head>
<body>
<?php

	//echo "<pre>";
	//print_r($data);

	 $li = '<ul>'.PHP_EOL;  
    foreach( $data->results AS $post ){  
        $li .= "\t".'<li><img src="'.$post->profile_image_url.'" alt="'.$post->from_user.'" title="'.$post->from_user.'" /> 
            '.$post->text.'</li>'.PHP_EOL;  
    }  
    echo $li,'</ul>';  
    
?>  
</body>
</html>

