<?php

function dbConnect(){
 try

    {
    //here goes the database connection codde
    $pdo = new PDO('mysql:host=localhost;
                    dbname=databasename;
                    charset=utf8',
                    'username',
                     'password');
    return $pdo;
    
    }
    
    catch(Exception $e)
    
    {
    
        die('Erreur : '.$e->getMessage());
    
    }

}

$error = array('error' => false);

$action = '';

if(isset($_GET['action'])){
    $action = $_GET['action'];
}


if($action == 'subscribeToNewsletters'){
  //  $pdo = dbConnect();
      /*  $sql = $pdo->prepare("SELECT * FROM  wpbr_appartments WHERE status = ? ");
        $sql->execute(array('libre'));
        $appartments = array();
        while ($row = $sql->fetch()){
                array_push($appartments, $row);
        } */
        echo 'ok';
     //   echo json_encode($appartments);
}

//$results['appartments'] = $appartments;
// echo json_encode($appartments);

