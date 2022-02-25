<?php

include_once 'app/controllers/userCadastroController.php';
// include_once 'app/controllers/dbConnectController.php';


$pdo = new PDO("pgsql:host=localhost port=5432 dbname=infor user=rianwlp password=xxx15159");

var_dump($pdo);

$sql = 'SELECT * FROM tb_login;';
$stmt = $pdo->query($sql);   


foreach($stmt as $row){
    var_dump($row);
}
var_dump($stmt);

// $stmt = $pdo->query($sql);
// $stmt = $pdo->prepare($sql);


// $stmt = pg_query($pdo, $sql);

// if ($stmt->num_rows > 0) {
//   // output data of each row
//     while($row = $result->pg_fetch_all()) {
  
//        echo $row;
//     }

// }else{
//   echo "0 results";
// }
// $pdo->query($sql);
// $sql = "select relname from pg_stat_user_tables order by relname;";
// $nextRecord = pg_fetch_all($stmt);



// $stmt = DbConnectController::openConnection()->prepare($sql);


// $stmt = DbConnectController::openConnection()->query('SELECT * FROM tb_login');

// $stmp = pg_query ($pdo,'SELECT * FROM tb_login;');


// $val = pg_fetch_result($stmt, 1, 0);

// var_dump($val);

$userCadastro = new UserCadastroController();

// var_dump($_POST['name'],$_POST['email'],$_POST['password']);

if(!isset($_POST['name'],$_POST['email'],$_POST['password'])){return false;}

//$_POST['active'],$_POST['comments'],$_POST['levelAccess']
// ['firstname'=>$_POST['firstname']]

$userCadastro->setName($_POST['name']);
$userCadastro->setEmail($_POST['email']);
$userCadastro->setPassword(md5($_POST['password']));
$userCadastro->setLevelAccess($_POST['levelAccess']);
$userCadastro->setActive('A');
$userCadastro->setComments($_POST['comments']);
// $userCadastro->setUser();


echo $userCadastro->setUser();

?>