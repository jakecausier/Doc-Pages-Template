<?php

/* You can define the URLs for the docs site and the original site that it'll be linked to here */

return [
    /* Define the base URL for the docs URL here */
    'baseUrl' => 'https://docs.purplecommerce.test',
    /* Now define the URL for the original site */
    'exUrl' => 'https://purplecommerce.test',
    'production' => false,
    'collections' => [
        'docfiles' => ['path' => 'page/{navOrder}-{navSlug}']
    ],
];
