<?php return array(
    'root' => array(
        'name' => 'rector/rector',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => 'ca3b59bfae8f033aa1a6b1b8964b8bc21bd344a7',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'phpstan/phpstan' => array(
            'pretty_version' => '1.12.6',
            'version' => '1.12.6.0',
            'reference' => 'dc4d2f145a88ea7141ae698effd64d9df46527ae',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpstan/phpstan',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'rector/rector' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => 'ca3b59bfae8f033aa1a6b1b8964b8bc21bd344a7',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'rector/rector-phpunit' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => 'b6280393c5ee947b1678bf3a2cbf6afb7116015f',
            'type' => 'rector-extension',
            'install_path' => __DIR__ . '/../rector/rector-phpunit',
            'aliases' => array(
                0 => '0.11.x-dev',
            ),
            'dev_requirement' => false,
        ),
    ),
);
