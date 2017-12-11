<?php
declare(strict_types = 1);
/**
 * This file is part of the Standard Library Enum package.
 * For the full copyright information please view the LICENCE file that was
 * distributed with this package.
 *
 * @copyright Simon Deeley 2017
 */

namespace StandardLibrary\Contracts\Type;

use StandardLibrary\Contracts\Type\ImmutableType;

/**
 * Enum type
 *
 * Defines the interface for the Enum object type.
 *
 * @author Simon Deeley <simondeeley@users.noreply.github.com>
 */
interface EnumType extends ImmutableType
{
    /**
     * Get the value of the ENUM
     *
     * @return mixed - returns the set value of the object
     */
    public function getValue();
}
