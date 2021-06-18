<?php
class User {
    
    private $iduser; //id of the user
    private $nameuser; //user name
    private $passworduseer; //password
    
    function __construct($iduser, $nameuser, $passworduseer) {
        $this->iduser = $iduser;
        $this->nameuser = $nameuser;
        $this->passworduseer = $passworduseer;
    }
    
    public function getIduser() {
        return $this->iduser;
    }

    public function getNameuser() {
        return $this->nameuser;
    }

    public function getPassworduseer() {
        return $this->passworduseer;
    }

    public function setIduser($iduser): void {
        $this->iduser = $iduser;
    }

    public function setNameuser($nameuser): void {
        $this->nameuser = $nameuser;
    }

    public function setPassworduseer($passworduseer): void {
        $this->passworduseer = $passworduseer;
    }

}

?>

