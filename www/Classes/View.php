<?php
namespace App\Classes;

class View
    implements \Countable
{
    public $data = [];
    protected $path = '/../views';

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
        $content = (isset($_SESSION['role'])) ? $_SESSION['role'] . '&nbsp;' : 'undefined ';
        $content .= (isset($_SESSION['username'])) ? $_SESSION['username'] . '<br>' : 'user' . '<br>';
        $content .= (isset($_SESSION['notice'])) ? $_SESSION['notice'] . '<br>' : '' . '<br>';
        unset($_SESSION['notice']);
        include __DIR__ . $this->path . $template;
        $content .= ob_get_contents();
        $content = substr_replace($content, '(c) tagedo 2015', stripos($content, '<copyright>'));
        $content .= '<br>' . $_SESSION['role'];
        ob_end_clean();
        echo $content;
    }
}