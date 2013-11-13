<?for ($i=1; $i<101; $i++) {
if (is_int(($i)/3)) {
echo "Fizz";
} else if (is_int(($i)/5)) {
echo "Buzz";
} else {
echo $i;
}
}?>
