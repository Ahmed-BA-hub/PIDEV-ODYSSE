<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUhFGbvd\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUhFGbvd/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUhFGbvd.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUhFGbvd\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUhFGbvd\App_KernelDevDebugContainer([
    'container.build_hash' => 'UhFGbvd',
    'container.build_id' => '422ad0e2',
    'container.build_time' => 1709416590,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUhFGbvd');
