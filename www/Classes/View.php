<?php
namespace App\Classes;

class View
    implements \Countable
{
    public $data = [];

    protected $path = '/views';

    /************************************************/
    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }

    public function __get($k)
    {
        return $this->data[$k];
    }

    public function count()
    {
        return count($this->data);
    }

    /********************************************************/
    public function display($template)
    {
        extract($this->data);
        ob_start();
        $content = ($_SESSION['role']  ?: 'undefined'). '&nbsp;';
        $content .= ($_SESSION['username'] ?: 'user') . '<br>';
        $content .= ($_SESSION['notice'] ?: '') . '<br>';
        unset($_SESSION['notice']);
        echo PATH_ROOT . $this->path . $template;
        include PATH_ROOT . $this->path . $template;
        $content .= ob_get_contents();
        $content = substr_replace($content, '(c) tagedo 2015', stripos($content, '<copyright>'));
        ob_end_clean();
        echo $content;
    }
}