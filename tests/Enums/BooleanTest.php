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

use StandardLibrary\Enums\Boolean;

/**
 * Test case for boolean enum object
 *
 * @author Simon Deeley <simondeeley@users.noreply.github.com>
 * @final
 */
final class BooleanTest extends EnumsTestCase
{
    /**
     * @var string
     */
    protected static $class = Boolean::class;

    /* Data provider
     *
     * @return array
     */
    final public function validData(): array
    {
        return [
            [ 'TRUE', true, 'BOOLEAN' ],
            [ 'FALSE', false, 'BOOLEAN' ],
        ];
    }

    /**
     * Data provider
     *
     * @return array
     */
    final public function staticData(): array
    {
        return [
            [ 'true', true, 'BOOLEAN' ],
            [ 'True', true, 'BOOLEAN' ],
        ];
    }

    /**
     * Data provider
     *
     * @return array
     */
    final public function invalidData(): array
    {
        return [
            [ 'foo' ],
            [ 'true' ],
            [ false ],
            [ '' ]
        ];
    }
}
