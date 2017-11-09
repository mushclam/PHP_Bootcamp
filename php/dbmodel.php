<?php

class dbConnection
{
    private $user;
    private $pwd;
    private $dbname;
    private $dbp;

    public function __construct($dbname, $user, $pwd)
    {
        $this->user = $user;
        $this->pwd = $pwd;
        $this->dbname = $dbname;
    }

    public function dbLogin()
    {
        return $this->dbp = new PDO("mysql:host=localhost;dbname={$this->dbname};charset=utf8", $this->user, $this->pwd);
    }

    public function get_Post()
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
?>
