<?php
    class GalaDatabase {
  private $serverName;
  private $userName;
  private $password;
  private $GalDbname;
  private $charset;


        protected function GalDbconnect() {

            $this->serverName ="root";
            $this->userName = "b10_24512343";
            $this->password = "t31mG1l1xy";
            $this->GalDbname = "b10_24512343_Task1";
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