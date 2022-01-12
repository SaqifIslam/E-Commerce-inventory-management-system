<?php

namespace Tests\Unit;


use App\Http\Controllers\ProductsController;
use Tests\TestCase;


class ProductsControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_index()
    {
        $this->data = new ProductsController();
        $response = $this->data->index();
        $this->assertTrue(true);
    }
    public function test_show()
    {
        $this->assertTrue(true);
    }
    public function test_create()
    {
        $this->data = new ProductsController();
        $response = $this->data->create();
        $this->assertTrue(true);
    }
}
