<?php
declare(strict_types=1);
/**
 * This file is part of the Standard Libray Enum package.
 * For the full copyright information please view the LICENCE file that was
 * distributed with this package.
 *
 * @copyright Simon Deeley 2017
 */

namespace StandardLibrary\Tests\Enums;

use StandardLibrary\Enum;
use PHPUnit\Framework\TestCase;

/**
 * Test case for enum base class
 *
 * We can't really test much because Enum relies on a constructor for most of
 * the implementation logic, therefore most of the tests are deferred to the
 * actual concrete implementations under the 'Enums' folder. This test unit only
 * test the concrete methods in the base Enum class, {@link Enum::getType} and
 * {@link Enum::getValue}
 *
 * @author Simon Deeley <simondeeley@users.noreply.github.com>
 * @final
 */
final class EnumTest extends TestCase
{
    /**
     * Test should return 'ENUM'
     *
     * @test
     * @final
     * @return void
     */
    final public function shouldReturnEnum(): void
    {
        $this->assertEquals('ENUM', Enum::getType());
    }
}
