<?php
echo 'EMILIA';
$link = mysql_connect('113.23.167.13', 'Suhaimi', 'pkpp@2019');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo ' Connected successfully';
mysql_close($link);
echo 'SUHAIMI';
echo 'HE HE';
?>
