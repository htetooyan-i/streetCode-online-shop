<?php

namespace App\Livewire;

use Livewire\Component;

class DynamicContent extends Component
{
    public $content = 'Initial content';

    public function updateContent()
    {
        $this->content = 'This is the updated content!';
    }

    public function render()
    {
        return view('livewire.dynamic-content');
    }
}
