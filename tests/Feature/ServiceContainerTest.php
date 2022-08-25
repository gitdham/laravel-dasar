<?php

namespace Tests\Feature;

use App\Data\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ServiceContainerTest extends TestCase {
    public function test_bind() {
        $this->app->bind(Person::class, function ($app) {
            return new Person('Idham', 'Adzani');
        });

        $person1 = $this->app->make(Person::class);
        $person2 = $this->app->make(Person::class);

        $this->assertEquals('Idham', $person1->firstName);
        $this->assertEquals('Idham', $person2->firstName);
        $this->assertNotSame($person1, $person2);
    }

    public function test_singleton() {
        $this->app->singleton(Person::class, function ($app) {
            return new Person('Idham', 'Adzani');
        });

        $person1 = $this->app->make(Person::class);
        $person2 = $this->app->make(Person::class);

        $this->assertEquals('Idham', $person1->firstName);
        $this->assertEquals('Idham', $person2->firstName);
        $this->assertSame($person1, $person2);
    }
}
