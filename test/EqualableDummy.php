<?php
/**
 * @author Richard Fussenegger <fleshgrinder@users.noreply.github.com>
 * @copyright 2015 Richard Fussenegger
 * @license MIT
 */

namespace Fleshgrinder\Core;

/**
 * Defines the equalable dummy class.
 *
 * This class is provided for tests that want to verify that something accepts or is able to handle instances that
 * implement the {@see Equalable} interface. This class does not contain any logic and the boolean that is returned by
 * the equals method is simply a public property that can be altered by anyone.
 *
 * This class is final because nobody should ever extend it, instead implement the {@see Equalable} interface.
 */
final class EqualableDummy implements Equalable {

    /**
     * The value that should be returned by the dummy's equals method.
     *
     * @var mixed
     */
    public $equals;

    /**
     * Construct new equalable dummy instance.
     *
     * @param mixed $equals [optional]
     *     The value that should be returned by this instance.
     */
    public function __construct($equals = true) {
        $this->equals = $equals;
    }

    /**
     * @inheritDoc
     */
    public function equals($value) {
        return $this->equals;
    }

}
