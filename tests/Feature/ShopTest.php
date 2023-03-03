<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;


class ShopTest extends TestCase
{
    use DatabaseTransactions;

    // after every test, the database is rolled back
    public function setUp(): void
    {
        parent::setUp();
        DB::table('shops')->insert([
            'nombre' => 'Shop 1'        ]);    }
    
    public function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_create_shop(): void
    {
        $response = $this->post('/shops', [
            'nombre' => 'Shop 1',
        ]);

        $response->assertStatus(302);
    }

    public function test_edit_shop(): void
    {
        $response = $this->put('/shops/1', [
            'nombre' => 'Shop 1',
        ]);

        $response->assertStatus(302);
    } 

    public function test_delete_shop(): void
    {
        $response = $this->get('/shops/delete/1');

        $response->assertStatus(302);
    }

    public function test_show_shop(): void
    {
        $response = $this->get('/shops/2/info');

        $response->assertStatus(200);
    }
}

