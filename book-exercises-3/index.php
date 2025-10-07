function testInt(int &$test, $test2) {
    $test += $test2;
}

$a = 5;
testInt($a, 3);
echo $a; // 8
