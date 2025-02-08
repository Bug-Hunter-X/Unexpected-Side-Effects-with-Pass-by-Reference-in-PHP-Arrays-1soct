# PHP Pass-by-Reference Array Bug

This example demonstrates a subtle bug in PHP related to pass-by-reference with arrays.  Modifying a referenced array through a copy unexpectedly alters the original.  The `increment_array_value` function is designed to increment array values. However, when a copy is created and then modified, the original array is also affected because of how PHP handles references.

## How to Reproduce

1. Run `bug.php`.
2. Observe the output. The third `echo` statement outputs 3, which is unexpected if you assumed that `$another_array` is an independent copy of `$my_array`.

## Solution

The solution involves creating a true copy of the array to avoid the unintended side effects of pass-by-reference.