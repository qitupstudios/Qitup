<? include 'components/header.php';?>
<? include 'components/folio_header.php';?>
<h3>Choose a Project to Edit</h3>

<? if(isset($success)){
	echo 'success';
}else{
	echo '<ul>';
	foreach($projects as $r){?>
    <li>
		<a href="/admin/folioEdit/<?=$r->id?>"><?=$r->title?></a>
    </li>
<? }
	echo '</ul>';
}?>

<? include 'components/footer.php';?>