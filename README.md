# PHP Date Comparison Bug

This repository demonstrates a subtle bug in PHP's date comparison functionality when comparing dates that are only one day apart.  The issue stems from the imprecision of `strtotime` when adding days; slight variations can cause unexpected comparison outcomes.

## Bug Description

The provided `bug.php` file demonstrates how comparing `date('Y-m-d')` with a date calculated using `strtotime('+1 day')` can lead to false positive results. Even though the intended logic is to check if today is equal to tomorrow, the code might incorrectly output "Today is equal to tomorrow!".

## Solution

The solution file, `bugSolution.php`, addresses this by using a more robust and precise method of comparing dates.  It avoids using `strtotime` for simple date comparisons and instead relies on object-oriented DateTime methods for clear and accurate results.