<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvironmentTest extends TestCase {
	public function test_get_env() {
		$youtube = env('DEVENV');

		$this->assertEquals('Idham', $youtube);
	}

	public function test_default_env() {
		$author = env('AUTHOR', 'Dam');
		$this->assertEquals('Dam', $author);
	}
}
