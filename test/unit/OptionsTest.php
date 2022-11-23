<?php

namespace Test;

use Nutsy\PHPChartJS\Options;
use Nutsy\PHPChartJS\Options\Animation;
use Nutsy\PHPChartJS\Options\Elements;
use Nutsy\PHPChartJS\Options\Hover;
use Nutsy\PHPChartJS\Options\Layout;
use Nutsy\PHPChartJS\Options\Legend;
use Nutsy\PHPChartJS\Options\Scales;
use Nutsy\PHPChartJS\Options\Title;
use Nutsy\PHPChartJS\Options\Tooltips;
use PHPUnit\Framework\TestCase;

/**
 * Class OptionsTest
 *
 * @package Test
 */
class OptionsTest extends TestCase
{
    /**
     * @var Options $options
     */
    private $options;

    /**
     * @var array
     */
    private $empty_options = [];

    /**
     *
     */
    public function setUp(): void
    {
        $this->options = new Options();
    }

    /**
     *
     */
    public function testTitle()
    {
        $title = $this->options->getTitle();
        self::assertInstanceOf(Title::class, $title);
    }

    /**
     *
     */
    public function testLayout()
    {
        $layout = $this->options->getLayout();
        self::assertInstanceOf(Layout::class, $layout);
    }

    /**
     *
     */
    public function testElements()
    {
        $layout = $this->options->getElements();
        self::assertInstanceOf(Elements::class, $layout);
    }

    /**
     *
     */
    public function testAnimation()
    {
        $animation = $this->options->getAnimation();
        self::assertInstanceOf(Animation::class, $animation);
    }

    /**
     *
     */
    public function testHover()
    {
        $hover = $this->options->getHover();
        self::assertInstanceOf(Hover::class, $hover);
    }

    /**
     *
     */
    public function testScales()
    {
        $scales = $this->options->getScales();
        self::assertInstanceOf(Scales::class, $scales);
    }

    /**
     *
     */
    public function testLagend()
    {
        $legend = $this->options->getLegend();
        self::assertInstanceOf(Legend::class, $legend);
    }

    /**
     *
     */
    public function testTooltips()
    {
        $tooltips = $this->options->getTooltips();
        self::assertInstanceOf(Tooltips::class, $tooltips);
    }

    /**
     *
     */
    public function testAspectRatio()
    {
        // Test default value. Should be true.
        self::assertTrue($this->options->isMaintainAspectRatio());

        // Set to false.
        self::assertSame($this->options, $this->options->setMaintainAspectRatio(false));
        self::assertFalse($this->options->isMaintainAspectRatio());

        // Set to true again.
        self::assertSame($this->options, $this->options->setMaintainAspectRatio(true));
        self::assertTrue($this->options->isMaintainAspectRatio());
    }

    /**
     *
     */
    public function testJsonSerialize()
    {
        $expected = $this->empty_options;
        $result   = $this->options->jsonSerialize();
        self::assertEquals($expected, $result);
    }
}
