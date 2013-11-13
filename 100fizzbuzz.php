<?

for ($i=1; $i<101; $i++) {
        if ((is_int(($i)/5)) AND (is_int(($i)/3))) {
                echo "FizzBuzz<br>";
        } else if (is_int(($i)/5)) {
                echo "Buzz<br>";
        } else if (is_int(($i)/3)) {
                echo "Fizz<br>";
        } else {
        	echo $i . "<br>";
	}
}
?> 
