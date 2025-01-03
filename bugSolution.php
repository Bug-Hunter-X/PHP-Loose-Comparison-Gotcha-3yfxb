To fix this, use strict comparison (`===`) which checks both value and type:

```php
function checkValue($value) {
  if ($value === 0) {
    echo "Value is zero";
  } else {
    echo "Value is not zero";
  }
}

checkValue(0); // Outputs "Value is zero"
checkValue("0"); // Outputs "Value is not zero"
checkValue(false); // Outputs "Value is not zero"
```

Strict comparison ensures that only values of the same type are considered equal, preventing the unintended consequences of loose comparison.