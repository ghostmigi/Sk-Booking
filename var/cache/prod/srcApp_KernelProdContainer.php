<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWchgN84\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWchgN84/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerWchgN84.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\ContainerWchgN84\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \ContainerWchgN84\srcApp_KernelProdContainer([
    'container.build_hash' => 'WchgN84',
    'container.build_id' => '5e360e30',
    'container.build_time' => 1586450021,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWchgN84');
