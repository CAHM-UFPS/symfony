<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJme1CQS\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJme1CQS/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJme1CQS.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJme1CQS\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJme1CQS\App_KernelDevDebugContainer([
    'container.build_hash' => 'Jme1CQS',
    'container.build_id' => 'ad0a9a37',
    'container.build_time' => 1661211767,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJme1CQS');
