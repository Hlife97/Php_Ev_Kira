<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTDm3X92\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTDm3X92/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTDm3X92.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTDm3X92\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTDm3X92\App_KernelDevDebugContainer([
    'container.build_hash' => 'TDm3X92',
    'container.build_id' => 'b0463811',
    'container.build_time' => 1597968727,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTDm3X92');
