<?php
test('numbersEqual should be able to check equality of two floating point numbers', 'testBasicNumbersEqual');
function testBasicNumbersEqual()
{
    if (!NumbersPHP\Basic::numbersEqual(5, 5, NumbersPHP\Numbers::EPSILON))
        return false;
    if (!NumbersPHP\Basic::numbersEqual(5.0001, 5.0000001, NumbersPHP\Numbers::EPSILON))
        return false;
    if (NumbersPHP\Basic::numbersEqual(-5, 5, NumbersPHP\Numbers::EPSILON))
        return false;
    if (NumbersPHP\Basic::numbersEqual(5, 5.1, NumbersPHP\Numbers::EPSILON))
        return false;
    if (NumbersPHP\Basic::numbersEqual(5, 5.001, NumbersPHP\Numbers::EPSILON))
        return false;
    return true;
}