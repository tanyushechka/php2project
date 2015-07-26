<?php
namespace App\Models;
use App\Classes\Model;

class Stuff
    extends Model
    implements \Iterator
{
    protected static $tableName = 'articles';
    private $it = 1;
    public $title;
    public $author;
    public $text;


    public function getStuffId() {
        return $this->id;
    }

    /**********************************************/
    public function rewind()
    {
        reset($this);
    }
    public function current()
    {
        $res = current($this);
        if (false == ($this->it % 3)) {
            $res .= ' - каждый 3-й элемент';
        }
        $this->it++;
        return $res;
    }
    public function key()
    {
        return key($this);
    }
    public function next()
    {
        return next($this);
    }
    public function valid()
    {
        $key = key($this);
        return ($key !== NULL && $key !== FALSE);
    }
}