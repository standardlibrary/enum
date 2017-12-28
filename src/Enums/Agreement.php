<?php
declare(strict_types = 1);
/**
 * This file is part of the Standard Library Enum package.
 * For the full copyright information please view the LICENCE file that was
 * distributed with this package.
 *
 * @copyright Simon Deeley 2017
 */

namespace StandardLibrary\Enums;

use StandardLibrary\Enum;
use StandardLibrary\Contracts\CastsToString;

/**
 * Example of an enum allowing choice between two values
 *
 * @author Simon Deeley <simondeeley@users.noreply.github.com>
 * @final
 */
final class Agreement extends Enum implements CastsToString
{
    const AGREE = 'I agree';
    const DISAGREE = 'I do not agree';

    /**
     * Returns the type of this enum
     *
     * @return string
     */
    final public static function getType(): string
    {
        return 'AGREEMENT';
    }

    /**
     * Allows the object to be cast to a string
     *
     * @return string
     */
    final public function __toString(): string
    {
        return $this->getValue();
    }
}
