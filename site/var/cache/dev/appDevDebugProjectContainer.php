<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWnuoser\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWnuoser/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerWnuoser.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerWnuoser\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerWnuoser\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Wnuoser',
    'container.build_id' => '1d1fce51',
    'container.build_time' => 1519659645,
));
