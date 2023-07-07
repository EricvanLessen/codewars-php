function strCount1($str, $letter) {
    $amount = 0;
    foreach (str_split($str) as $char) {
        if ($char == $letter) {
            $amount += 1;
        }
    }
    return $amount;
}

function strCount2($str, $letter) {
    return count(array_filter(str_split($str), function ($char) use ($letter) {
        return $char === $letter;
    }));
}

function strCount3($str, $letter) {
  return substr_count($str, $letter);
}

str_count1("Hello", 'o'); // returns 1
str_count1("Hello", 'l'); // returns 2
str_count1("", 'z'); // returns 0

str_count2("Hello", 'o'); // returns 1
str_count2("Hello", 'l'); // returns 2
str_count2("", 'z'); // returns 0

str_count3("Hello", 'o'); // returns 1
str_count3("Hello", 'l'); // returns 2
str_count3("", 'z'); // returns 0
