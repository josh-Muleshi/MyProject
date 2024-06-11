<?php

class Form{
    public string $tag = 'p';

    public function __construct(
        public array $data,
    ){}

    private function surround(string $html): string 
    {
        return "<{$this->tag}>$html</{$this->tag}>";
    }

    public function getValue(string $index): string|null {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    public function input(string $name): string 
    {
        return $this->surround(
            '<input type="text" name="'. $name .'" value="' . $this->getValue($name) . '">' 
        );
    }

    public function submit(): string
    {
        return $this->surround('<button type="submit">Envoyer</button>');
    }
}