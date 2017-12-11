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

/**
 * Example of an enum enforcing boolean values
 *
 * @author Simon Deeley <simondeeley@users.noreply.github.com>
 * @final
 */
final class Boolean extends Enum
{
    const TRUE = true;
    const FALSE = false;

    /**
     * Returns the type of this enum
     *
     * @return string
     */
    final public static function getType(): string
    {
        return 'BOOLEAN';
    }
}
