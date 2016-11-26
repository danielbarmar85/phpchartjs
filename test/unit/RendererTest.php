<?php

namespace Test;

use Halfpastfour\PHPChartJS\Chart\Bar;
use Halfpastfour\PHPChartJS\ChartInterface;
use Halfpastfour\PHPChartJS\DataSet;
use Halfpastfour\PHPChartJS\Renderer;

/**
 * Class RendererTest
 * @package Test
 */
class RendererTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var ChartInterface
	 */
	private $chart;

	/**
	 *
	 */
	public function setUp()
	{
		$chart    = new Bar();
		$chart->setId( 'myChart' )
			->addLabel( 'Label 1' )->addLabel( 'Label 2' )
			->setTitle( 'My beautiful chart' )
			->setHeight( 320 )
			->setWidth( 480 );

		/** @var DataSet $dataSet */
		$chart->addDataSet( $dataSet = $chart->createDataSet() );
		$dataSet->setLabel( 'My First Dataset' );

		$chart->options()->title()->setText( 'My cool graph' );
		$chart->options()->legend()->setDisplay( false );

		$this->chart	= $chart;
	}

	/**
	 * Test and validate generated JSON. See http://www.ietf.org/rfc/rfc4627.txt and http://json.org/
	 */
	public function testJson()
	{
		$renderer = new Renderer( $this->chart );
		$json     = $renderer->renderJSON();
		$result	  = preg_match( '/
		  (?(DEFINE)
			 (?<number>   -? (?= [1-9]|0(?!\d) ) \d+ (\.\d+)? ([eE] [+-]? \d+)? )    
			 (?<boolean>   true | false | null )
			 (?<string>    " ([^"\\\\]* | \\\\ ["\\\\bfnrt\/] | \\\\ u [0-9a-f]{4} )* " )
			 (?<array>     \[  (?:  (?&json)  (?: , (?&json)  )*  )?  \s* \] )
			 (?<pair>      \s* (?&string) \s* : (?&json)  )
			 (?<object>    \{  (?:  (?&pair)  (?: , (?&pair)  )*  )?  \s* \} )
			 (?<json>   \s* (?: (?&number) | (?&boolean) | (?&string) | (?&array) | (?&object) ) \s* )
		  )
		  \A (?&json) \Z
		  /six', $json, $matches );

		$this->assertEquals( 1, $result, 'Validate JSON output' );
	}

	/**
	 *
	 */
	public function testHtml()
	{
		$renderer	= new Renderer( $this->chart );

		$this->assertTrue( is_string( $renderer->render() ), 'Validate HTML output' );
	}
}