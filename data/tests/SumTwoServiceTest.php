<?php

use app\services\SumTwoService;
use PHPUnit\Framework\TestCase;

class SumTwoServiceTest extends TestCase
{
    private SumTwoService $sumTwoService;

    protected function setUp(): void
    {
        $this->sumTwoService = new SumTwoService();
    }

    public function testSumTwo()
    {
        $nums = [6,9,3,2];
        $target = 11;

        $this->assertSame([1,3], $this->sumTwoService->sumTwo($nums, $target));
    }

    public function testSumTwo2()
    {
        $nums = [6, 9, 8, 7];
        $target = 15;

        $this->assertSame([0, 1], $this->sumTwoService->sumTwo($nums, $target));
    }

    public function testSumTwo3()
    {
        $nums = [6,2,4,5,7,1];
        $target = 5;

        $this->assertSame([2,5], $this->sumTwoService->sumTwo($nums, $target));
    }
    public function testSumTwo4()
    {
        $nums = [1,2,3,4,5];
        $target = 10;

        $this->assertSame([], $this->sumTwoService->sumTwo($nums, $target));
    }

}