<?php
declare(strict_types = 1);
/**
 * This file is part of the Standard Library Enum package.
 * For the full copyright information please view the LICENCE file that was
 * distributed with this package.
 *
 * @copyright Simon Deeley 2017
 */

namespace StandardLibrary\Exceptions;

use UnexpectedValueException;

/**
 * Exception for invalid ENUM values
 *
 * This exception is thrown when the __construct of an ENUM is passed an invalid
 * value.
 *
 * @author Simon Deeley <simondeeley@users.noreply.github.com>
 * @final
 */
final class InvalidEnumValueException extends UnexpectedValueException
{
    /**
     * @var string
     */
    protected $message = 'Argument passed to ENUM constructor is not an allowed type';
}
