<?

for ($i=1; $i<101; $i++) {
        if ((is_int(($i)/5)) AND (is_int(($i)/3))) {
                echo "FizzBuzz (" . $i . ")<br>";
        } else if (is_int(($i)/5)) {
                echo "Buzz (" . $i  . ")<br>";
        } else if (is_int(($i)/3)) {
                echo "Fizz (" . $i . ")<br>";
        } else {
                echo $i . "<br>";
        }
}
?> 
