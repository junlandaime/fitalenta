<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TeamSection extends Component
{
    public $members;

    public function __construct($members)
    {
        $this->members = $members;
    }

    public function render()
    {
        return view('components.team-section');
    }
}
