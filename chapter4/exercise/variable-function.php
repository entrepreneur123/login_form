<?php
$callable = ('strtolower');
echo $callable('foo');//will print foo
?>
//anonymous function
<!-- Anonymous Functions
These are functions without identifiers (refer to the following syntax). They can be passed into any function that accepts a callable as input. Consider the following example:

function(float $value): int{
    if (0 <= $value) {
        return -1; // this is called an early return
     }
    return 1;
}
The preceding is an anonymous function, also called a closure. It does not have a name, so it cannot be called by its name, but it can be passed into another function that does accept a callable as input.

If you want to call the anonymous function, there are two ways to achieve this:

echo (function(float $value): int{
     if (0 <= $value) {
         return 1;
 }
        return -1;
})(2.3);
In the preceding example, the function is created and called immediately with the 2.3 argument. The output that is returned will be 1, because 2.3 is greater than 0. Then echo prints the output. In this setup, the anonymous function can be called only once – there is no reference to it that would allow you to call it again.

In the next example, the function will be stored in a variable named $callable. You may name the variable whatever you like, as long as you stick to the rules for naming variables in PHP:

$callable = function(float $value): int{
     if (0 <= $value) {
          return 1;
}
          return -1;
}; // note you need the semicolon here, because you assign the function to the $callable variable.
echo $callable(-11.4); // will print -1, because -11.4 is less than 0.
Using a Variable from Outside of Scope Inside an Anonymous Function
As stated previously in this chapter, you may need to use a variable that was defined outside of the scope of the function you are defining. In the following exercise, you will see an example of how we can make use of the use keyword to pass a variable to the anonymous function.
 -->