<?php

declare (strict_types=1);
namespace RectorPrefix20220429;

use RectorPrefix20220429\Nette\Neon\Decoder;
return static function (\Rector\Config\RectorConfig $rectorConfig) : void {
    $services = $rectorConfig->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Rector\\Nette\\NeonParser\\', __DIR__ . '/../packages/NeonParser')->exclude([__DIR__ . '/../packages/NeonParser/NeonNodeTraverser.php', __DIR__ . '/../packages/NeonParser/Node']);
    $services->set(\RectorPrefix20220429\Nette\Neon\Decoder::class);
};
