<?php
    try {
        $output = shell_exec('dir');
        echo "<pre>$output</pre>";
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
?>

<h1>Hello</h1>