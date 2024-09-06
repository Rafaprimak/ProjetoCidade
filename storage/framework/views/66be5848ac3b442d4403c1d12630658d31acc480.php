<h1>Países</h1>

<ul>
    <?php $__currentLoopData = $paises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <a href="<?php echo e(route('paises.show', $p['nome'])); ?>"><?php echo e($p['nome']); ?></a>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH C:\Users\Rafael\Desktop\laravel\example-app\resources\views/paises/index.blade.php ENDPATH**/ ?>