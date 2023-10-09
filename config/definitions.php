<?php

return [
    'Trimmer' => \DI\create('\Boatrace\Sakura\Trimmer')->constructor(
        \DI\get('MainTrimmer')
    ),
    'MainTrimmer' => function ($container) {
        return $container->get('\Boatrace\Sakura\MainTrimmer');
    },
];
