<?php

namespace Tests\Feature;

use Livewire\Livewire;
use Tests\TestCase;
use App\Livewire\Dashboard\Welcome;

class WelcomeComponentTest extends TestCase
{
    public function test_component_renders(): void
    {
        Livewire::test(Welcome::class)
            ->assertStatus(200);
    }
}
