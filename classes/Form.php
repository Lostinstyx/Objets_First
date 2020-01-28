<?php


class Form
{
    private  $_method = "post";
    private $_url = "";
    private $_upLoadFile = false;
    private $_iniFile;


    public function __construct(string $action, string $file)
    {
        $this->_url = $action;
        $this->_iniFile = parse_ini_file("./conf/$file.ini");
    }

    public function displayForm() : string
    {
        $html = '<form ';
        $html .= 'method="'.$this->_method.'" ';
        $html .= 'action="'.$this->_url.'"';
        if ($this->_upLoadFile) {
            $html .= ' enctype="multipart/form-data"';
        }
        $html .= '>';

        return $html;
    }
}

// Travailler la dessus et faire un tableau avec tout ce qui existe label input etc... (lire le tout avec un foreach)