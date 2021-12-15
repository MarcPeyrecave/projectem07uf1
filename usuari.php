<?php

class usuari{
    public $nom = "";
    public $cognom= "";
    public $adreca= "";
    public $telefon;
    public $Uid="";
    public $Cntr= "";
    public $pres bool;
    public $dInici="";
    public $ISBNp;
}

function setNom($nom){
    $this->nom = $nom;
}
function setCognom($cognom){
    $this->cognom = $cognom;
}
function setAdreca($adreca){
    $this->adreca = $adreca;
}
function setTel($telefon){
    $this->telefon = $telefon;
}


?>