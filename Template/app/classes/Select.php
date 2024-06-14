<?php
include 'HTMLElement.php';
//namespace App\Classes;
// use App\Classes\HTMLElement;

class Select extends HTMLElement
{
    public function __construct(
        private string $name,
        private array $options = [],
        private array $attributs = [],
    )
    {}

    private function getSelect(string $options, string $attributs): string
    {
        return '<select name="'. $this->name .'" '. $attributs .'">'. $options . '</select>';
    }

    private function getAttribut(): string
    {
        $attributs = "";
        foreach ($this->attributs as $key => $attribut) {
            $attributs .= ''. $key .'=' . $attribut . ' ';
        }
        return $attributs;
    }

    private function getOptions(): string
    {
        $options = "";
        foreach ($this->options as $key => $option) {
            $options .= '<option value="'. $key.'">'. $option .'</option>';
        }
        return $options;
    }

    public function render(): string
    {
        $options = $this->getOptions();
        $attributs = $this->getAttribut();
        // $tag = $this->tag($options, 'select');
        $html = $this->getSelect($options, $attributs);
        return $html;
    }
}