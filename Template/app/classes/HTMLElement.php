<?php 

// namespace App\Classes;
class HTMLElement 
{

    // public function __construct
    // (
    //     private string $tag,
    // ){}

    protected function tag(string $html, string $tag): string 
    {
        return "<{$tag}>$html</{$tag}>";
    }
}