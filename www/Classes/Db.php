<?php
namespace App\Classes;

class Db
{
    protected $dbh;


    public function __construct()
    {
        $config = json_decode(file_get_contents(PATH_ROOT . '/config/config.json'));
        $dsn = 'mysql:dbname=' . $config->dbname . ';host=' .$config->host;
        $this->dbh = new \PDO($dsn, $config->user, $config->password);
    }


    function dbSelect($class, $sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        $res = ($sth->fetchAll(\PDO::FETCH_CLASS, $class));
//        var_dump($sth->errorInfo());
        return $res;
    }


    function dbGetId()
    {
        return $this->dbh->lastInsertId();
    }


    function dbExecute($sql, $params = [])
    {
        //var_dump($sql);
        //var_dump($params);
        $sth = $this->dbh->prepare($sql);
        //var_dump($sth->execute($params));
        return $sth->execute($params);
    }
}
?>