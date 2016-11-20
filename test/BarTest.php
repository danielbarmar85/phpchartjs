<?php

namespace Test;

use Halfpastfour\PHPChartJS\Chart\Bar;
use Halfpastfour\PHPChartJS\DataSet;
use Halfpastfour\PHPChartJS\Factory;

class BarTest extends \PHPUnit_Framework_TestCase
{
	public function testConstruct()
	{
		$chartData	= array( 0, 1, 4, 2, 3, 0, 5, 2, 6 );
		$factory	= new Factory();
		$bar		= $factory->create( $factory::BAR );

		// Check if correct class is returned.
		$this->assertInstanceOf( Bar::class, $bar );

		$dataSet	= new DataSet();
		$dataSet->setLabel( 'Foo' )
			->data()->exchangeArray( $chartData );

		$bar->addDataSet( $dataSet );

		// Check if data is still correct.
		$this->assertEquals( $chartData, $bar->getDataSets()->offsetGet(0)->data()->getArrayCopy() );

		// Render the chart
		echo $bar->render();
	}
}