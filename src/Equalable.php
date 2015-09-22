<?php
/**
 * @author Richard Fussenegger <fleshgrinder@users.noreply.github.com>
 * @copyright 2015 Richard Fussenegger
 * @license MIT
 */

namespace Fleshgrinder\Core;

/**
 * Defines the equalable interface.
 *
 * Requires implementing classes to provide an equals method, comparable to the method in Java but (of course) without
 * operator overloading. The method has no type hint restriction, this allows callers to pass any kind of argument and
 * the implementing class has to decide whether it accepts scalar values for equality or not. This is especially useful
 * for value objects that might want to equal scalar value as well if they match their own identifying value.
 */
interface Equalable {

    /**
     * Check if given value equals this instance.
     *
     * @param mixed $value
     *     Value to check for equality.
     * @return boolean
     *     `TRUE` if given value equals this instance, `FALSE` otherwise.
     */
    public function equals($value);

}
