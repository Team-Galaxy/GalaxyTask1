<?php
    class GalaDatabase {
  private $serverName;
  private $userName;
  private $password;
  private $GalDbname;
  private $charset;


        protected function GalDbconnect() {

            $this->serverName ="";
            $this->userName = "";
            $this->password = "";
            $this->GalDbname = "";
            $this->charset = "utf8mb4";

            try {
                $Galdsn = "mysql:host=".$this->serverName. ";dbname=".$this->GalDbname .";charset".$this->charset;

                $usignPdo = new PDO ($Galdsn, $this->userName, $this->password);

                $usignPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $usignPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                return $usignPdo;
            }  catch (PDOException $e){
                echo  "something went wrong on this galax team". $e->getMessage();
            }
        }

    }

?>
