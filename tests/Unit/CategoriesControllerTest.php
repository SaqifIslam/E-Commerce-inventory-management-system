<?php

namespace Tests\Unit;

use App\Http\Controllers\CategoriesController;
use Tests\TestCase;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesControllerTest extends TestCase
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
    public function test_show()
    {
        $this->assertTrue(true);
    }
    public function test_create()
    {
        $this->data = new CategoriesController();
        $response = $this->data->create();
        $this->assertTrue(true);
    }
//    public function test_destroy(){
//        $this->data = new CategoriesController();
//        $id=Category::where('name','phone')->inRandomOrder()->limit(1)->get();
//        $response=$this->data->destroy($id[0]->id);
//        $this->assertTrue(true);
//    }

}
