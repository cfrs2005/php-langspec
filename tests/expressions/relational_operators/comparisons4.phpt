--TEST--
PHP Spec test generated from ./expressions/relational_operators/comparisons4.php
--FILE--
<?php

/*
   +-------------------------------------------------------------+
   | Copyright (c) 2014 Facebook, Inc. (http://www.facebook.com) |
   +-------------------------------------------------------------+
*/

error_reporting(-1);

///*
// Numeric strings with all kinds of operands, swapping them over to make
// LHS/RHS order is irrelevent.

$oper1 = array("10", "-5.1");
$oper2 = array(0, 100, -3.4, TRUE, FALSE, NULL, "", "123", "abc", [], [10,2.3]);

foreach ($oper1 as $e1)
{
	foreach ($oper2 as $e2)
	{
		echo "{$e1} >        {$e2}  result: "; var_dump($e1 > $e2);
		echo "{$e2} <=       {$e1}  result: "; var_dump($e2 <= $e1);
		echo "---\n";
		echo "{$e1} >=       {$e2}  result: "; var_dump($e1 >= $e2);
		echo "{$e2} <        {$e1}  result: "; var_dump($e2 < $e1);
		echo "---\n";
		echo "{$e1} <        {$e2}  result: "; var_dump($e1 < $e2);
		echo "{$e2} >=       {$e1}  result: "; var_dump($e2 >= $e1);
		echo "---\n";
		echo "{$e1} <=       {$e2}  result: "; var_dump($e1 <= $e2);
		echo "{$e2} >        {$e1}  result: "; var_dump($e2 > $e1);
		echo "=======\n";
	}
	echo "-------------------------------------\n";
}
--EXPECTF--
10 >        0  result: bool(true)
0 <=       10  result: bool(true)
---
10 >=       0  result: bool(true)
0 <        10  result: bool(true)
---
10 <        0  result: bool(false)
0 >=       10  result: bool(false)
---
10 <=       0  result: bool(false)
0 >        10  result: bool(false)
=======
10 >        100  result: bool(false)
100 <=       10  result: bool(false)
---
10 >=       100  result: bool(false)
100 <        10  result: bool(false)
---
10 <        100  result: bool(true)
100 >=       10  result: bool(true)
---
10 <=       100  result: bool(true)
100 >        10  result: bool(true)
=======
10 >        -3.4  result: bool(true)
-3.4 <=       10  result: bool(true)
---
10 >=       -3.4  result: bool(true)
-3.4 <        10  result: bool(true)
---
10 <        -3.4  result: bool(false)
-3.4 >=       10  result: bool(false)
---
10 <=       -3.4  result: bool(false)
-3.4 >        10  result: bool(false)
=======
10 >        1  result: bool(false)
1 <=       10  result: bool(true)
---
10 >=       1  result: bool(true)
1 <        10  result: bool(false)
---
10 <        1  result: bool(false)
1 >=       10  result: bool(true)
---
10 <=       1  result: bool(true)
1 >        10  result: bool(false)
=======
10 >          result: bool(true)
 <=       10  result: bool(true)
---
10 >=         result: bool(true)
 <        10  result: bool(true)
---
10 <          result: bool(false)
 >=       10  result: bool(false)
---
10 <=         result: bool(false)
 >        10  result: bool(false)
=======
10 >          result: bool(true)
 <=       10  result: bool(true)
---
10 >=         result: bool(true)
 <        10  result: bool(true)
---
10 <          result: bool(false)
 >=       10  result: bool(false)
---
10 <=         result: bool(false)
 >        10  result: bool(false)
=======
10 >          result: bool(true)
 <=       10  result: bool(true)
---
10 >=         result: bool(true)
 <        10  result: bool(true)
---
10 <          result: bool(false)
 >=       10  result: bool(false)
---
10 <=         result: bool(false)
 >        10  result: bool(false)
=======
10 >        123  result: bool(false)
123 <=       10  result: bool(false)
---
10 >=       123  result: bool(false)
123 <        10  result: bool(false)
---
10 <        123  result: bool(true)
123 >=       10  result: bool(true)
---
10 <=       123  result: bool(true)
123 >        10  result: bool(true)
=======
10 >        abc  result: bool(false)
abc <=       10  result: bool(false)
---
10 >=       abc  result: bool(false)
abc <        10  result: bool(false)
---
10 <        abc  result: bool(true)
abc >=       10  result: bool(true)
---
10 <=       abc  result: bool(true)
abc >        10  result: bool(true)
=======

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 22
10 >        Array  result: bool(false)

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 23
Array <=       10  result: bool(false)
---

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 25
10 >=       Array  result: bool(false)

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 26
Array <        10  result: bool(false)
---

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 28
10 <        Array  result: bool(true)

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 29
Array >=       10  result: bool(true)
---

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 31
10 <=       Array  result: bool(true)

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 32
Array >        10  result: bool(true)
=======

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 22
10 >        Array  result: bool(false)

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 23
Array <=       10  result: bool(false)
---

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 25
10 >=       Array  result: bool(false)

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 26
Array <        10  result: bool(false)
---

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 28
10 <        Array  result: bool(true)

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 29
Array >=       10  result: bool(true)
---

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 31
10 <=       Array  result: bool(true)

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 32
Array >        10  result: bool(true)
=======
-------------------------------------
-5.1 >        0  result: bool(false)
0 <=       -5.1  result: bool(false)
---
-5.1 >=       0  result: bool(false)
0 <        -5.1  result: bool(false)
---
-5.1 <        0  result: bool(true)
0 >=       -5.1  result: bool(true)
---
-5.1 <=       0  result: bool(true)
0 >        -5.1  result: bool(true)
=======
-5.1 >        100  result: bool(false)
100 <=       -5.1  result: bool(false)
---
-5.1 >=       100  result: bool(false)
100 <        -5.1  result: bool(false)
---
-5.1 <        100  result: bool(true)
100 >=       -5.1  result: bool(true)
---
-5.1 <=       100  result: bool(true)
100 >        -5.1  result: bool(true)
=======
-5.1 >        -3.4  result: bool(false)
-3.4 <=       -5.1  result: bool(false)
---
-5.1 >=       -3.4  result: bool(false)
-3.4 <        -5.1  result: bool(false)
---
-5.1 <        -3.4  result: bool(true)
-3.4 >=       -5.1  result: bool(true)
---
-5.1 <=       -3.4  result: bool(true)
-3.4 >        -5.1  result: bool(true)
=======
-5.1 >        1  result: bool(false)
1 <=       -5.1  result: bool(true)
---
-5.1 >=       1  result: bool(true)
1 <        -5.1  result: bool(false)
---
-5.1 <        1  result: bool(false)
1 >=       -5.1  result: bool(true)
---
-5.1 <=       1  result: bool(true)
1 >        -5.1  result: bool(false)
=======
-5.1 >          result: bool(true)
 <=       -5.1  result: bool(true)
---
-5.1 >=         result: bool(true)
 <        -5.1  result: bool(true)
---
-5.1 <          result: bool(false)
 >=       -5.1  result: bool(false)
---
-5.1 <=         result: bool(false)
 >        -5.1  result: bool(false)
=======
-5.1 >          result: bool(true)
 <=       -5.1  result: bool(true)
---
-5.1 >=         result: bool(true)
 <        -5.1  result: bool(true)
---
-5.1 <          result: bool(false)
 >=       -5.1  result: bool(false)
---
-5.1 <=         result: bool(false)
 >        -5.1  result: bool(false)
=======
-5.1 >          result: bool(true)
 <=       -5.1  result: bool(true)
---
-5.1 >=         result: bool(true)
 <        -5.1  result: bool(true)
---
-5.1 <          result: bool(false)
 >=       -5.1  result: bool(false)
---
-5.1 <=         result: bool(false)
 >        -5.1  result: bool(false)
=======
-5.1 >        123  result: bool(false)
123 <=       -5.1  result: bool(false)
---
-5.1 >=       123  result: bool(false)
123 <        -5.1  result: bool(false)
---
-5.1 <        123  result: bool(true)
123 >=       -5.1  result: bool(true)
---
-5.1 <=       123  result: bool(true)
123 >        -5.1  result: bool(true)
=======
-5.1 >        abc  result: bool(false)
abc <=       -5.1  result: bool(false)
---
-5.1 >=       abc  result: bool(false)
abc <        -5.1  result: bool(false)
---
-5.1 <        abc  result: bool(true)
abc >=       -5.1  result: bool(true)
---
-5.1 <=       abc  result: bool(true)
abc >        -5.1  result: bool(true)
=======

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 22
-5.1 >        Array  result: bool(false)

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 23
Array <=       -5.1  result: bool(false)
---

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 25
-5.1 >=       Array  result: bool(false)

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 26
Array <        -5.1  result: bool(false)
---

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 28
-5.1 <        Array  result: bool(true)

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 29
Array >=       -5.1  result: bool(true)
---

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 31
-5.1 <=       Array  result: bool(true)

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 32
Array >        -5.1  result: bool(true)
=======

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 22
-5.1 >        Array  result: bool(false)

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 23
Array <=       -5.1  result: bool(false)
---

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 25
-5.1 >=       Array  result: bool(false)

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 26
Array <        -5.1  result: bool(false)
---

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 28
-5.1 <        Array  result: bool(true)

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 29
Array >=       -5.1  result: bool(true)
---

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 31
-5.1 <=       Array  result: bool(true)

Notice: Array to string conversion in %s/expressions/relational_operators/comparisons4.php on line 32
Array >        -5.1  result: bool(true)
=======
-------------------------------------
