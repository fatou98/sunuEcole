<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXFpFHtk\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXFpFHtk/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXFpFHtk.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXFpFHtk\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerXFpFHtk\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'XFpFHtk',
    'container.build_id' => '87dcc603',
    'container.build_time' => 1523311589,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerXFpFHtk');