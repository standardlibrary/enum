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

use StandardLibrary\Enums\Agreement;

/**
 * Test case for boolean enum object
 *
 * @author Simon Deeley <simondeeley@users.noreply.github.com>
 * @final
 */
final class AgreementTest extends EnumsTestCase
{
    /**
     * @var string
     */
    protected static $class = Agreement::class;

    /* Data provider
     *
     * @return array
     */
    final public function validData(): array
    {
        return [
            [ 'AGREE', 'I agree', 'AGREEMENT' ],
            [ 'DISAGREE', 'I do not agree', 'AGREEMENT' ],
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
            [ 'Agree', 'I agree', 'AGREEMENT' ],
            [ 'agree', 'I agree', 'AGREEMENT' ],
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
            [ 'I do not agree' ],
            [ 'I agree' ],
            [ '' ]
        ];
    }
}
