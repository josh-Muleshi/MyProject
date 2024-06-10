<?php

interface Renderable{
    public function render();
}

final class Page implements Renderable{

    #[\Override]
    public function render(){
        echo "print something";
    }
}