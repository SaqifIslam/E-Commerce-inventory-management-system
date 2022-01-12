<?php

namespace Tests\Unit;
use Tests\TestCase;


class WebTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_index() {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function test_dashboard() {
        $response = $this->get('/dashboard');
        $response->assertStatus(302);
    }
    public function test_Categories() {
        $response = $this->get('categories');
        $response->assertStatus(302);
    }
    public function test_Brands() {
        $response = $this->get('brands');
        $response->assertStatus(302);
    }
    public function test_Sizes() {
        $response = $this->get('sizes');
        $response->assertStatus(302);
    }
    public function test_Products() {
        $response = $this->get('products');
        $response->assertStatus(302);
    }



}
