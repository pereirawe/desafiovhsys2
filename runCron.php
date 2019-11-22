<?php
    $files = glob('cron/*.{php}', GLOB_BRACE);
    foreach($files as $file) {
        $command = "php $file";
        $work = shell_exec($command);
        unlink($file);
    }
?>