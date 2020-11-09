<?php

// $var = 23;

// if(filter_var($var, FILTER_VALIDATE_INT)){
//     echo $var. 'is a number';
    
// } else {
//     echo $var. 'is not a number';
// }

$var = '3456ert3456ert34';
var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT))

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="text" name="data">
<button type="submit">Submit</button>
</form>