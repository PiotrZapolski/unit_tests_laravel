<?php

namespace Tests\Feature;

use App\Http\Services\SumArraysService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SumArraysServiceTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testGetSum(): void
    {
        $arraysService = new SumArraysService();
        $arr1 = [1, 2, 3];
        $arr2 = [2, 2];

        $sum = $arraysService->getSum($arr1, $arr2);
        $this->assertSame(10, $sum);
    }
}
