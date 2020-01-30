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
        $this->_iniFile = parse_ini_file("./conf/$file.ini",true);
    }

    public function wesh() {
        echo "<pre>";
        var_dump($this->_iniFile);
        echo "</pre>";
    }
    public function beginHtml($titre) :string
    {
        $html =  '<!DOCTYPE html>';
        $html .= '<head>';
        $html .= '<meta charset="utf-8" />';
        $html .= '<title>'.$titre.'</title>';
        $html .= '<link rel="stylesheet" href="./assets/css/style.css" />';
        $html .= '</head>';
        $html .= '<body>';
        return $html;
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

        foreach ($this->_iniFile as $key => $value) {
            $typeBalise = explode(":", $key);

            if ($typeBalise[0] === "input") {
                if (isset($this->_iniFile[$key]['labelContent'])) {
                    $html .= '<div>';
                    $html .= '<label for="' . $typeBalise[1] . '">' . ucfirst($typeBalise[1]) . '</label>';
                }

                if ($this->_iniFile[$key]['type'] === "submit" || $this->_iniFile[$key]['type'] === "reset") {
                    $html .= '<input type="' . $this->_iniFile[$key]['type'] . '" ' .
                             'value="' .$this->_iniFile[$key]['value'] . '" />';

                }


                else {
                    $html .= '<input type="' . $this->_iniFile[$key]['type'] . '" ' . 'id="' . $typeBalise[1] . '"' .
                        'name="' . $typeBalise[1] . '"' . 'placeholder="Veuillez saisir votre ' . $typeBalise[1] . '"' . ' />';
                    $html .= '</div>';
                }
            }
         }


        $html .= '</form>';
        return $html;
    }

    public function endHtml() :string
    {
        $html = '</body>';
        $html .= '</html>';

        return $html;
    }
}


// Travailler la dessus et faire un tableau avec tout ce qui existe label input etc... (lire le tout avec un foreach)
?>

