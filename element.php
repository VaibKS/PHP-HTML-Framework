<?php

$styles = [];

function setStyle($of, $style) {
    global $styles;
    $styles[$of] = $style;
}

class Element {
    private $name = "";
    private $text = "";
    private $styles = [];
    private $attributes = [];
    private $children = [];

    function Element($name) {
        $this->name = $name;
    }

    function text($s) {
        $this->text = $s;
        return $this;
    }

    function add($e) {
        array_push($this->children, $e);
        return $this;
    }

    function madd($arr) {
        $this->children = array_merge($this->children, $arr);
        return $this;
    }

    function css($prop, $val) {
        $this->styles[$prop] = $val;
        return $this;
    }

    function attr($prop, $val) {
        $this->attributes[$prop] = $val;
        return $this;
    }

    function mcss($arr) {
        $this->styles = array_merge($this->styles, $arr);
        return $this;
    }

    function mattr($arr) {
        $this->attributes = array_merge($this->attributes, $arr);
        return $this;
    }

    function height($h) {
        $this->styles["height"] = $h;
        return $this;
    }

    function width($w) {
        $this->styles["width"] = $w;
        return $this;
    }

    function html() {
        $html = "";
        if($this->name == "html") {
            $html .= "<!DOCTYPE HTML>";
        }
        $html .= "<{$this->name}";

        if(sizeof($this->attributes) > 0) {
            foreach($this->attributes as $prop => $val) {
                $html.= " {$prop}=\"{$val}\"";
            }
        }

        if(sizeof($this->styles) > 0) {
            $html .= " style=\"";
            foreach($this->styles as $prop => $val) {
                $html .= "{$prop}:{$val};";
            }
            $html .= "\"";
        }

        $html .= ">";

        if($this->name == "html") {
            echo "<style>";

            global $styles;

            foreach ($styles as $name => $style) {
                echo $name.'{';
                foreach($style as $prop => $val) {
                    echo $prop.':'.$val.';';
                }
                echo '}';
            }

            echo "</style>";
        }

        $html .= $this->text;

        foreach($this->children as $child) {
            $html .= $child->html();
        }
        

        $html .= "</{$this->name}>";
        return $html;
    }

    function render() {
        echo $this->html();
    }

    function generate_style() {

    }
}

function Element($n) {
    return (new Element($n));
}

?>