<?php

$users = [
	['tipoinsertom' => 'Jonatan'],
	['tipoinsertom' => 'jeff'],
	['tipoinsertom' => 'joe'],
];

?>
<form method="POST">
<?php foreach($users as $user): ?>
	<input type="checkbox" name="tipoinsertos[]" value="<?= $user['tipoinsertom']; ?>"> <?= $user['tipoinsertom']; ?> 
<?php endforeach; ?>
	<input type="submit" value="Submit"/>
</form>
<?php

// returns an intance of PDO
// https://github.com/jpuck/qdbp
$dbh = require __DIR__.'/tipoin_Dxa05i_A.pdo.php';


if( !empty( $_POST['tipoinsertos'] ) ){
	// prepare the query once
	$query = "INSERT INTO barrasinternas (tipoinsertos ) VALUES (:tipoinsertos )";
    $sth = $dbh->prepare($query);

	// iterate through list
	foreach($_POST['tipoinsertos'] as $tipoinsertos){
		$sth->execute(['tipoinsertos' => $tipoinsertos]);
	}

	// success
	echo "&iexcl;A&ntilde;adida Exitosamente!";
	$dbh = null;
}
