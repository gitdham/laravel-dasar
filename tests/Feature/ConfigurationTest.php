<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConfigurationTest extends TestCase {
    public function test_config() {
        $firstName = config('contoh.name.first');
        $lastName = config('contoh.name.last');
        $email = config('contoh.email');
        $web = config('contoh.web');

        $this->assertEquals('Idham', $firstName);
        $this->assertEquals('Adzani', $lastName);
        $this->assertEquals('adzani234@gmail.com', $email);
        $this->assertEquals('https://github.com/gitdham', $web);
    }
}
