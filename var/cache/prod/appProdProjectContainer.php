<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXqxcvoz\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXqxcvoz/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerXqxcvoz.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerXqxcvoz\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerXqxcvoz\appProdProjectContainer([
    'container.build_hash' => 'Xqxcvoz',
    'container.build_id' => '2a3a2305',
    'container.build_time' => 1706123653,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXqxcvoz');
