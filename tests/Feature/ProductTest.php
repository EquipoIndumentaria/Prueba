<?php

namespace Tests\Feature;

use App\Models\tblproductos;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /** @test  */
    public function create_product()
    {
        $prods = tblproductos::factory()->create();
        $this->assertTrue($prods->wasRecentlyCreated);
    }
}
