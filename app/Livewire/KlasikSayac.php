<?php

namespace App\Livewire;

class KlasikSayac extends \Livewire\Component
{
    public $sayi = 0;

    public function artir()
    {
        $this->sayi++;
    }

    public function render()
    {
        return view('livewire.klasik-sayac');
    }
}