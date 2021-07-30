<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\tblproductos;
use App\Models\tblcats;
use Illuminate\Support\Facades\Schema;

class CategoryProductTest extends TestCase
{

    public function test_a_category_belongsTo_category()
    {
        $cats = new tblcats;
        $productos = new tblproductos;
        $this->assertTrue(
            Schema::hasColumn('tblproductos', 'intIdCat')
        );
        $this->assertEquals($productos->categoria, $cats->intIdCat);
    }
}
