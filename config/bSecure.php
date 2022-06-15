<?php

return [
    'client_id' => env('BSECURE_CLIENT_ID', '8f6936bf-81d3-4017-ba7e-2c8697ac21ae'),
    'client_secret' => env('BSECURE_CLIENT_SECRET', '1Qw7q/BmaBica6Zr5XUBCNyiw4qJIzQH8AgAcSFlbzA='),
    //use 'production' for live orders and 'sandbox' for testing orders. When left empty or `null` the sandbox environment will be used
    'environment' => env('BSECURE_ENVIRONMENT'),
];
