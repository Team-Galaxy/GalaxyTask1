 <?php
 
 class logHan extends GalaDatabase {

   public  function logIndexHan($mail, $pass) {

        $logHanDb = $this->GalDbconnect();

        $logSql = 'SELECT mail && pass FROM galusers WHERE mail= ? and pass = ?';

    $logStmt = $logHanDb->prepare($logSql);
    $logStmt->execute([$mail, $pass]);

    if ($logStmt->rowCount()){
            header('location:success.php');
    } else {
        $this->msg ="incorrect username or password";
    }

   } 
 }
 ?>