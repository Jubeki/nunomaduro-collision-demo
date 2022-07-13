<?php

namespace Tests\Unit;

use NunoMaduro\Collision\Adapters\Phpunit\TestResult;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * This method is called before the first test of this test class is run.
     */
    public static function setUpBeforeClass(): void
    {
        TestResult::$allowMultiline = true;
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_true_is_true()
    {
        $this->assertTrue(true);

        $this->addWarning("This is a single warning");
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_true_is_true_multiline()
    {
        $this->assertTrue(true);

        $this->addWarning("This is warning 1");
        $this->addWarning("This is warning 2");
        $this->addWarning("This is warning 3");
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_true_is_true_no_warning()
    {
        $this->assertTrue(true);
    }
}
