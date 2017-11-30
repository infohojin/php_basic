<?php
    $descriptorspec = array(
        0 => array("pipe", "r"),  // stdin
        1 => array("pipe", "w"),  // stdout
        2 => array("file", "/tmp/error-output.txt", "a") // stderr
    );

    $cwd = '/tmp';
    $env = array('some_option' => 'aeiou');

    $process = proc_open('php', $descriptorspec, $pipes, $cwd, $env);
    echo "proc status<br>";
    print_r(proc_get_status($process));
    echo "<br>";

    if (is_resource($process)) {
        // $pipes now looks like this:
        // Any error output will be appended to /tmp/error-output.txt

        echo "0 => writeable handle connected to child stdin <br>";
        $php_code = "<?php echo 'hello' ?>";
        fwrite($pipes[0], $php_code);
        fclose($pipes[0]);

        echo "1 => readable handle connected to child stdout <br>";
        echo stream_get_contents($pipes[1]);
        echo "<br>";
        fclose($pipes[1]);

        // It is important that you close any pipes before calling
        // proc_close in order to avoid a deadlock
        $return_value = proc_close($process);

        echo "command returned $return_value <br>";
    }
?>
