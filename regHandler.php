<?php
   
   // code written by @jovial (HNG 6.0)
   class regGal extends GalaDatabase {

        public function regHandler($mail, $pass, $cpass) {

        try {

 //if password doesnt equal with confirm password ...
                        echo $pass;

                        echo $cpass;
                        

            $regDbConn = $this->GalDbconnect();

            $emailExist = 'SELECT mail FROM galusers WHERE mail = ?';

            $emailExist = $regDbConn->prepare($emailExist);
            $emailExist->execute([$mail]);

            if ($emailExist->rowCount()){

      

                $this->msg = "email already exist";
            } else {
                $insertSql = 'INSERT into galusers(mail,pass,cpass) values(?,?,?)';

                $galstmt = $regDbConn->prepare($insertSql);
                $galstmt->execute([$mail, $pass, $cpass]);

                if ($galstmt->rowCount()) {

                    header('location:login.php');
                }
            }

        } catch (PDOException $e) {

            echo "there seems to be an error somewhere ".$e->getMessage();
        }
        
        } 

}

?>