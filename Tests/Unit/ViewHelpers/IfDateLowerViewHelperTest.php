<?php
/**
 * Check if a date is lower.
 */

namespace HDNET\Calendarize\Tests\Unit\ViewHelpers;

use HDNET\Calendarize\Tests\Unit\AbstractUnitTest;
use HDNET\Calendarize\ViewHelpers\IfDateLowerViewHelper;

/**
 * Check if a date is lower.
 */
class IfDateLowerViewHelperTest extends AbstractUnitTest
{
    /**
     * @test
     */
    public function testValidCheck()
    {
        $viewHelper = new IfDateLowerViewHelper();
        $this->assertEquals(true, $viewHelper->render(new \DateTime(), '23.04.2004'));
    }
}
