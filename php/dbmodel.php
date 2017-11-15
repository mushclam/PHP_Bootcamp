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
        $ready = $this->dbp->query("SELECT p.`idpost`, u.`icon`, u.`nickname`, p.`picture`, p.`content`, p.`date` FROM `post` AS p LEFT JOIN `user` AS u ON p.user_iduser = u.iduser");
        return $result = $ready->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_Comm($idpost)
    {
        $ready = $this->dbp->prepare("SELECT u.nickname, c.post_idpost, c.content FROM `comment` AS c LEFT JOIN `user` AS u ON c.user_iduser=u.iduser WHERE c.post_idpost=:idpost");
        $ready->bindParam(":idpost", $idpost);

        $ready->execute();
        $result = $ready->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function get_Like_Num($idpost)
    {
        $ready = $this->dbp->prepare("SELECT COUNT(*) FROM `like` WHERE post_idpost=:idpost");
        $ready->bindParam(":idpost", $idpost);

        $ready->execute();
        $result = $ready->fetch(PDO::FETCH_COLUMN);
        return (int)$result;
    }
}
?>
