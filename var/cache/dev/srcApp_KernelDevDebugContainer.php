<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPu5JxmD\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPu5JxmD/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPu5JxmD.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPu5JxmD\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerPu5JxmD\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Pu5JxmD',
    'container.build_id' => '9803400a',
    'container.build_time' => 1598552305,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPu5JxmD');
