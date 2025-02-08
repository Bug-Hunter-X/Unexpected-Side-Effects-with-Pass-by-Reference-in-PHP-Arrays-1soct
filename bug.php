```php
<?php
function increment_array_value(&$arr, $key) {
  if (!isset($arr[$key])) {
    $arr[$key] = 0; 
  }
  $arr[$key]++;
}

$my_array = [];
increment_array_value($my_array, 'a');
echo $my_array['a']; // Outputs 1
increment_array_value($my_array, 'a');
echo $my_array['a']; // Outputs 2

//The unexpected behavior happens here
$another_array = $my_array;
increment_array_value($another_array, 'a');
echo $my_array['a']; // Outputs 3 (Unexpected!)

?>
```