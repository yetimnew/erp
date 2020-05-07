<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Operation\Truck;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreatTruckTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use DatabaseMigrations;
    use RefreshDatabase;
    public function testCanCreatTruck()
    {
        // Arangment
        $truck = Truck::Create([
            'plate' => '12345',
            'vehecletype_id' => '1',
            'chasisNumber' => '12311',
            'engineNumber' => '445',
            'engineNumber' => '445',
            'engineNumber' => '445',
            'tyreSyze' => '12',
            'serviceIntervalKM' => '10000',
            'purchasePrice' => '10000',
            'productionDate' => '2020-05-06',
            'serviceStartDate' => '2020-05-06',
            'status' => '1',
        ]);

        // $truck->save();
        //Visting route
        $res = $this->get("/truck/{$truck->id}");

        //Assert status code of 200
        $res->assertStatus(200);

        // //Asert text
        $res->assertSeeText($truck->plate);
        $res->assertSeeText($truck->vehecletype_id);
        $res->assertSeeText($truck->chasisNumber);
        $res->assertSeeText($truck->engineNumber);
        $res->assertSeeText($truck->serviceIntervalKM);
        $res->assertSeeText($truck->purchasePrice);
        $res->assertSeeText($truck->productionDate);
        $res->assertSeeText($truck->serviceStartDate);
        $res->assertSeeText($truck->status);
    }
    public function testViews404PageWhenPosIsNotFound()
    {
        # code...
    }
}
