<?php

return [
    'AWS_ENDPOINT' => env("AWS_ENDPOINT", "http://minio:9002"),
    'AWS_BUCKET' => env("AWS_BUCKET", "testbucket"),
    'MINIO_NGINX' => env("MINIO_NGINX", "http://localhost:88/"),
];
