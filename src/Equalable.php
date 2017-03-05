<?php
/**
 * @author Richard Fussenegger <fleshgrinder@users.noreply.github.com>
 * @copyright 2017 Richard Fussenegger
 * @license Unlicense
 */

namespace Fleshgrinder\Core;

/**
 * The **equalable** interface defines a method that a class implements to
 * create a method for determining equality.
 */
interface Equalable {
	/**
	 * Whether this object equals to the other.
	 *
	 * Implementers should ensure that this method provides an
	 * [equivalence relation](https://en.wikipedia.org/wiki/Equivalence_relation):
	 *
	 * - It is _reflexive_: `$x->equals($x)` should return **TRUE**.
	 * - It is _symmetric_: `$x->equals($y)` should return **TRUE** if, and only
	 *   if, `$y->equals($x)` returns **TRUE**.
	 * - It is _transitive_: if `$x->equals($y)` returns **TRUE** and
	 *   `$y->equals($z)` returns **TRUE**, then `$x->equals($z)` should return
	 *   **TRUE**.
	 * - It is _consistent_: multiple invocations of `$x->equals($y)`
	 *   consistently return **TRUE** or consistently return **FALSE**, provided
	 *   both `$x` and `$y` are not being mutated in-between invocations.
	 * - Any **NULL** invocation `$x->equals(null)` should return **FALSE**.
	 *
	 * Implementations **MUST NOT** throw exceptions; they always have to
	 * return a value.
	 *
	 * @param $other
	 *     The value to compare with this instance.
	 * @returns
	 *     **TRUE** if this and the other value are equal; otherwise, **FALSE**.
	 */
	function equals($other): bool;
}
