<?php

namespace Arhipov\Tests;
use \PHPUnit\Framework\TestCase;
use Arhipov\Task06_1\ManufacturerFilter;
use Arhipov\Task06_1\Product;
use Arhipov\Task06_1\ProductCollection;

final class ManufacturerFilterTest extends TestCase
{
    /** @test */
    public function filter(): void
    {
        $p1 = Product::create();
        $p1->name = 'Шоколад';
        $p1->price = 100;
        $p1->manufacturer = 'Красный Октябрь';
        $p2 = Product::create();
        $p2->name = 'Мармелад';
        $p2->price = 50;
        $p2->manufacturer = 'Ламзурь';

        $collection = ProductCollection::create(...[$p1, $p2]);
        $resultCollection = $collection->filter(ManufacturerFilter::create('Ламзурь'));
        $resultCollectionArr = $resultCollection->getProductsArray();
        $this->assertSame(1, count($resultCollectionArr));
        $this->assertObjectEquals($p2, $resultCollectionArr[0]);
    }
}