<?php
namespace App\Classes;

session_start();

/**
 * Class Model
 * @package App\Classes
 */
abstract class Model
{
    /**
     * @var
     */




    protected $id;

    /**
     * @return mixed
     */
    public static function getTable()
    {
        return static::$tableName;
    }

    /**
     * @return array
     */
    public static function findAll()
    {
        $class = static::class;
        $sql = 'SELECT * FROM `' . static::getTable() . '` ORDER BY `date` DESC';
        $db = new Db();
        return $db->dbSelect($class, $sql);
    }

    public static function findOne($id)
    {
        $class = static::class;
        $sql = 'SELECT * FROM `' . static::getTable() . '` WHERE `id` = :id';
        $db = new Db();
        $res = $db->dbSelect($class, $sql, [':id' => $id])[0];
        if ($res) {
            return $res;
        } else {
            throw new E404Exception(static::getTable());
        }
    }


      public static function findByCondition($condWhere, $condOrder = 'id', $condTurn = 'DESC')
    {
        $class = static::class;
        $db = new Db();
        if (count($condWhere) == 0) {
            $sql = 'SELECT * FROM `' . static::getTable() . '` ORDER BY `' . $condOrder . '` ' . $condTurn;
            $res = $db->dbSelect($class, $sql);

        } else {
            $places = [];
            $data = [];
            foreach ($condWhere as $k => $v) {
                $places[] = '`' . $k . '` = :' . $k;
                $data[':' . $k] = $v;
            }
            $sql = 'SELECT * FROM `' . static::getTable() . '` WHERE ' . implode(' AND ', $places) . ' ORDER BY `' . $condOrder . '` ' . $condTurn;
            $res = $db->dbSelect($class, $sql, $data);
        }
        if ($res) {
            return $res;
        } else {
            throw new E404Exception(static::getTable());
        }
    }


    public function delete()
    {
        $sql = 'DELETE FROM `' . static::getTable() . '` WHERE `id` = :id';
        $db = new Db();
        $db->dbExecute($sql, [':id' => $this->id]);
    }


    public function insert()
    {
        $properties = get_object_vars($this);
        unset($properties['id']);
        $columns = array_keys($properties);
        $places = [];
        $data = [];
        foreach ($columns as $property) {
            $places[] = ':' . $property;
            $data[':' . $property] = $this->$property;
        }
        $sql = 'INSERT INTO `' . static::getTable() . '` (`' . implode('`, `', $columns) . '`) VALUES (' . implode(', ', $places) . ')';
        $db = new Db();
        $res = $db->dbExecute($sql, $data);

        //$this->id = $db->dbGetId();
    }




    public function update()
    {
        $properties = get_object_vars($this);
        $columns = array_keys($properties);
        $places = [];
        $data = [];
        foreach ($columns as $property) {
            $places[] = '`' . $property . '` = :' . $property;
            $data[':' . $property] = $this->$property;
        }
        $data[':id'] = Application::getCurrentByKey('pageid');
        $sql = 'UPDATE `' . static::getTable() . '` SET ' . implode(', ', $places) . ' WHERE `id` = :id';
        $db = new Db();
        $db->dbExecute($sql, $data);
    }
    /*************************************************/
}