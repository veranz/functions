<?php

/**
 * Returns the given string wrapped at the specified length.
 * 
 * @param String $string
 * @param Integer $length
 * @return String $final_string
 */
function wrap($string, $length) {
    $chunks = explode(' ', $string);
    $new_string = '';
    $final_string = '';

    for ($i = 0; $i < count($chunks); $i++) {
        $new_string .= $chunks[$i] . ' ';

        if (($i + 1) != count($chunks)) {
            if ((strlen($new_string) + strlen($chunks[$i + 1])) > $length) {
                $final_string .= $new_string . '<br />';
                $new_string = '';
            }
        } else {
            $final_string .= $chunks[$i];
        }
    }

    return $final_string;
}

?>
