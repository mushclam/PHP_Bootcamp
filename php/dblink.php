<?php

class dbConnection
{
    private $user;
    private $pwd;
    private $dbp;

    public function __construct($user, $pwd)
    {
        $this->user = $user;
        $this->pwd = $pwd;
    }

    public function dbLogin($dbname)
    {
        return $this->dbp = new PDO("mysql:host=localhost;dbname={$dbname};charset=utf8", $this->user, $this->pwd);
    }

    public function postCall()
    {
        $ready = $this->dbp->query("SELECT * FROM `posted` AS p LEFT JOIN `user` AS u ON p.urid = u.id");
        return $result = $ready->fetchAll(PDO::FETCH_ASSOC);
    }

    public function commCall($commid)
    {
        $ready = $this->dbp->prepare("SELECT * FROM `comm_:commid`");

        $ready->bindParam(":commid", $tempCommId);
        $tempCommId = (int)$commid;

        $ready->execute();
        $result = $ready->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}

$dbConn = new dbConnection("root", "life70think30");
$dbProc = $dbConn->dbLogin("php_bootcamp");
?>
