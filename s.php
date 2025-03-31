<?php 
$link_to_google = "https://google.com"; 
$link_to_quora = "https://quora.com"; 
?> 
 
<html> 
<head> 
<title>Some test title</title> 
</head> 
<body> 
<a href='<?php echo $link_to_google; ?>' target='_blank'>Click here to visit Google</a><br/> 
<a href='<?php echo $link_to_quora; ?>' target='_blank'>Click here to visit Quora</a> 
</body> 
</html> 