<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerN0xljIT\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerN0xljIT/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerN0xljIT.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerN0xljIT\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerN0xljIT\App_KernelDevDebugContainer([
    'container.build_hash' => 'N0xljIT',
    'container.build_id' => 'd87d2306',
    'container.build_time' => 1623012350,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerN0xljIT');
