<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKSt484r\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKSt484r/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKSt484r.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKSt484r\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKSt484r\App_KernelDevDebugContainer([
    'container.build_hash' => 'KSt484r',
    'container.build_id' => '93b62afb',
    'container.build_time' => 1597263320,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKSt484r');
