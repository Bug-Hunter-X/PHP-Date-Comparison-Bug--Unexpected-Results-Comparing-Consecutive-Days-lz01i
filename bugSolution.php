```php
$date = new DateTime();
$futureDate = new DateTime();
$futureDate->add(new DateInterval('P1D'));

if ($date == $futureDate) {
    echo "Today is equal to tomorrow!";
} else {
    echo "Today is not equal to tomorrow.";
}
```