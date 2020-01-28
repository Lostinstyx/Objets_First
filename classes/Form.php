<?php


class Form
{
    private  $_method = "post";
    private $_label = "";
    private $_input = "";
    private $_name = "";
    private $_placeholder = "";
    private $_type = "";
    private $_for = "";
    private $_class = "";
    private $_id = "";
    private $_value = "";
    private $_row = "";
    private $_cols = "";
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

    public function labelForm() : string
    {
        $html = '<label ';
        $html .= 'for="'.$this->_for.'" ';
        $html .= 'class="'.$this->_class.'" ';
        $html .= 'id="'.$this->_id.'" ';
        $html .= '>'.$this->_label.'</label>';

        return $html;
    }

    public function inputForm() : string
    {
        $html = '<input ';
        $html .= 'type="'.$this->_type.'" ';
        $html .= 'name="'.$this->_name.'" ';
        $html .= 'placeholder="'.$this->_placeholder.'" ';
        $html .= 'value="'.$this->_value.'" ';
        $html .= 'class="'.$this->_class.'" ';
        $html .= 'id="'.$this->_id.'" ';
        $html .= 'row="'.$this->_row.'" ';
        $html .= 'cals="'.$this->_cols.'" ';
        $html .= '>'.$this->_input.'</input>';


        return $html;
    }
    
}


// Travailler la dessus et faire un tableau avec tout ce qui existe label input etc... (lire le tout avec un foreach)
?>

