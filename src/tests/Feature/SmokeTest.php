<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SmokeTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_page_loads(): void
    {
        $this->get('/admin/login')->assertOk();
    }

    public function test_admin_requires_authentication(): void
    {
        $this->get('/admin/users')->assertRedirect('/admin/login');
        $this->put('/admin/updatePassword', ['id' => 1, 'password' => 'x', 'redirect' => 'profile.show'])
            ->assertRedirect('/admin/login');
    }

    public function test_user_can_login_and_see_dashboard(): void
    {
        $user = User::factory()->create(['password' => bcrypt('secret-123')]);

        $this->post('/login', ['email' => $user->email, 'password' => 'secret-123'])
            ->assertRedirect('/admin/dashboard');
        $this->get('/admin/dashboard')->assertOk();
    }

    public function test_profile_page_loads_for_authenticated_user(): void
    {
        $this->actingAs(User::factory()->create())->get('/user/profile')->assertOk();
    }

    public function test_user_cannot_change_another_users_password(): void
    {
        $a = User::factory()->create();
        $b = User::factory()->create();

        $this->actingAs($a)->put('/admin/updatePassword', [
            'id' => $b->id, 'password' => 'hacked-123', 'redirect' => 'profile.show',
        ])->assertForbidden();
    }
}
