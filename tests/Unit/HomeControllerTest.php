<?php

namespace Tests\Unit;

use App\Http\Controllers\CategoriesController;
use Tests\TestCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_index()
    {
        $this->data = new CategoriesController();
        $response = $this->data->index();
        $this->assertTrue(true);
    }
}
