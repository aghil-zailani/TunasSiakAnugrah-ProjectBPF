<?php

namespace Tests\Feature;

use App\Http\Controllers\LoginController;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class APARTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * Test successful login attempt.
     */
    public function test_successful_login()
    {
        // Create a test user
        $user = User::factory()->create([
            'email' => 'tunassiakanugrah@gmail.com',
            'password' => Hash::make('admin')
        ]);

        $credentials = [
            'email' => 'tunassiakanugrah@gmail.com',
            'password' => 'admin'
        ];

        $response = $this->post('/login', $credentials);

        $response->assertRedirect('/home');
        $this->assertAuthenticatedAs($user);
    }

    /**
     * Test failed login with wrong password.
     */
    public function test_failed_login_wrong_password()
    {
        $user = User::factory()->create([
            'email' => 'tunassiakanugrah@gmail.com',
            'password' => Hash::make('admin')
        ]);

        $credentials = [
            'email' => 'tunassiakanugrah@gmail.com',
            'password' => 'wrongpassword'
        ];

        $response = $this->post('/login', $credentials);

        $response->assertSessionHasErrors();
        $this->assertGuest();
    }

    /**
     * Test login with non-existent user.
     */
    public function test_login_nonexistent_user()
    {
        $credentials = [
            'email' => 'nonexistent@example.com',
            'password' => 'admin'
        ];

        $response = $this->post('/login', $credentials);

        $response->assertSessionHasErrors();
        $this->assertGuest();
    }

    /**
     * Test login view loads correctly.
     */
    public function test_login_view_loads()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
    }

    /**
     * Test logout functionality.
     */
    public function test_logout()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->post('/logout');

        $this->assertGuest();
        $response->assertRedirect('/login');
    }

    /**
     * Test login validation.
     */
    public function test_login_validation()
    {
        $response = $this->post('/login', [
            'email' => 'invalid-email',
            'password' => ''
        ]);

        $response->assertSessionHasErrors(['email', 'password']);
    }

    /**
     * Test remember me functionality.
     */
    public function test_remember_me_functionality()
    {
        $user = User::factory()->create([
            'email' => 'tunassiakanugrah@gmail.com',
            'password' => Hash::make('admin')
        ]);

        $this->post('/login', [
            'email' => 'tunassiakanugrah@gmail.com',
            'password' => 'admin',
            'remember' => 'on'
        ]);

        $this->assertNotNull($user->fresh()->remember_token);
    }

    /**
     * Test login throttling.
     */
    public function test_login_throttling()
    {
        for ($i = 0; $i < 6; $i++) {
            $this->post('/login', [
                'email' => 'tunassiakanugrah@gmail.com',
                'password' => 'wrongpassword'
            ]);
        }

        $response = $this->post('/login', [
            'email' => 'tunassiakanugrah@gmail.com',
            'password' => 'wrongpassword'
        ]);

        $response->assertStatus(429);
    }

    /**
     * Test authenticated users can't access login page.
     */
    public function test_authenticated_user_cannot_access_login()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/login');
        $response->assertRedirect('/home');
    }
}
