<?php

namespace Tests\Unit;

use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoriesController;
use App\Models\Brand;
use App\Models\Category;
use Tests\TestCase;


class BrandsControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_index()
    {
        $this->data = new BrandsController();
        $response = $this->data->index();
        $this->assertTrue(true);
    }
    public function test_show()
    {
        $this->assertTrue(true);
    }
    public function test_create()
    {
        $this->data = new BrandsController();
        $response = $this->data->create();
        $this->assertTrue(true);
    }
//    public function test_destroy(){
//        $this->data = new BrandsController();
//        $id=Brand::where('name','bata')->inRandomOrder()->limit(1)->get();
//        $response=$this->data->destroy($id[0]->id);
//        $this->assertTrue(true);
//    }

}
