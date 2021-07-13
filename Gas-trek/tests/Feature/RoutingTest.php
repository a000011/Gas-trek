<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase {
	public function test_route_main(): void {
		$response = $this->get('/');
		$response->assertStatus(200);
	}

	public function test_route_example(): void {
		$response = $this->get('/example');
		$response->assertStatus(200);
	}

	public function test_route_address(): void {
		$response = $this->get('/address');
		$response->assertStatus(200);
	}

	public function test_route_login_form(): void {
		$response = $this->get('/login');
		$response->assertStatus(200);
	}
}
