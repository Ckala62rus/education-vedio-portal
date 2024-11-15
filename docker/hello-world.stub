<?php

define("XHPROF_DEBUG", extension_loaded("xhprof"));
define("XHPROF_TYPE", "projectName");

if (XHPROF_DEBUG) {
    xhprof_enable(XHPROF_FLAGS_CPU + XHPROF_FLAGS_MEMORY);
    register_shutdown_function(function () {
        $run = time();
        $type = XHPROF_TYPE;
        $filename = "/var/log/php/$run.$type.xhprof";
        file_put_contents($filename, serialize(xhprof_disable()));
    });
}

phpinfo();

echo "Hello" . microtime(true);
