<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewLandingPageTest extends TestCase
{
    /** test */
    public function landing_page_loads_correctly(){
        //Arrange

        //Act
        $response = $this->get('/');

        //Assert
        $response->assertStatus(200);
        $response->assertSee('LATEST PRODUCTS');
    }
}
