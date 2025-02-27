<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HealthMetricsCard extends Component
{
    public $steps;
    public $calories;

    public function mount()
    {
        $this->steps = 0; // Initialize with default value
        $this->calories = 0; // Initialize with default value
    }

    public function render()
    {
        return view('livewire.health-metrics-card', [
            'steps' => $this->steps,
            'calories' => $this->calories,
        ]);
    }
}
