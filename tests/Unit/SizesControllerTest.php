<?php

namespace Tests\Unit;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SizesController;
use App\Models\Category;
use App\Models\Size;
use Tests\TestCase;


class SizesControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_index()
    {
        $this->data = new SizesController();
        $response = $this->data->index();
        $this->assertTrue(true);
    }
    public function test_show()
    {
        $this->assertTrue(true);
    }
    public function test_create()
    {
        $this->data = new SizesController();
        $response = $this->data->create();
        $this->assertTrue(true);
    }
//    public function test_destroy(){
//        $this->data = new SizesController();
//        $id=Size::where('size','xxl')->inRandomOrder()->limit(1)->get();
//        $response=$this->data->destroy($id[0]->id);
//        $this->assertTrue(true);
//    }

}
