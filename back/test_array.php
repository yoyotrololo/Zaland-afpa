<?php

$tableau = array();
$tableau['id'] = array('1', '2', '3', '4', '5');
$tableau['libelle'] = array('pantalon', 'chemise', 'bonnet', 'chaussette', 'slip');
$tableau['prix'] = array('50', '30', '15', '5', '10');

print_r($tableau['id']);
echo('<br/>');
print_r($tableau['libelle']);
echo('<br/>');
print_r($tableau['prix']);

echo('<br/>');
echo('<br/>');


$id_ArticleSupp = '1';

$tmp = array();
$tmp['id'] = array();
$tmp['libelle'] = array();
$tmp['prix'] = array();

for ($i=0; $i<count($tableau['id']); $i++) {
	if ($tableau['id'][$i] != $id_ArticleSupp) {
    	array_push($tmp['id'],$tableau['id'][$i]);
    	array_push($tmp['libelle'],$tableau['libelle'][$i]);
		array_push($tmp['prix'],$tableau['prix'][$i]);		
	}
}

$tableau = $tmp;

print_r($tableau['id']);
echo('<br/>');
print_r($tableau['libelle']);
echo('<br/>');
print_r($tableau['prix']);

echo('<br/>');
echo('<br/>');


?>