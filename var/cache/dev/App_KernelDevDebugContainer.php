<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8wD6BBy\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8wD6BBy/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8wD6BBy.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8wD6BBy\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container8wD6BBy\App_KernelDevDebugContainer([
    'container.build_hash' => '8wD6BBy',
    'container.build_id' => '74b74af5',
    'container.build_time' => 1661301317,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8wD6BBy');
