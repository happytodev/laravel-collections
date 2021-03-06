<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RandomSentences extends Component
{
    public $sentences;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->sentences = collect([
            "depuis Laravel... heu... je vais chercher!",
            "depuis Laravel... je ne m'en souviens plus",
            "depuis Laravel... 4, 5, 6 ou 7 :D",
            "depuis Laravel... tu veux vraiment savoir?",
            "depuis Laravel... pourquoi tu demandes?"
        ]);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.random-sentences');
    }
}
