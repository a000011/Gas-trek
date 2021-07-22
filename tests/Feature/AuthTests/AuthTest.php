<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Auth;

class AuthTest extends TestCase {
	protected $user;

	protected function setUp(): void {
		parent::setUp();
		$this->user = new User();
	}
	public function test_auth_route_admin_panel(): void {
		$response = $this->actingAs($this->user)->get('/admin_panel');
		$response->assertStatus(200);
	}
	public function test_unauth_route_admin_panel(): void {
		$response = $this->get('/admin_panel')->assertRedirect('/login');
	}
}
