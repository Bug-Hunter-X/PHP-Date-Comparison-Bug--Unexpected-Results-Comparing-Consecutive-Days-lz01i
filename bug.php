```php
$date = date('Y-m-d');
$futureDate = date('Y-m-d', strtotime('+1 day'));

if ($date == $futureDate) {
  echo "Today is equal to tomorrow!";
}
```