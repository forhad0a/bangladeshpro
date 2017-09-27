<h2>Arenas</h2>
<pre>
    <?php echo e($arenas); ?>

    <?php $__currentLoopData = json_decode($arenas); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
        ID: <?php echo e($row->_id); ?>  <br>
        idName: <?php echo e($row->idName); ?><br>
        number:<?php echo e($row->number); ?><br>
       name <?php echo e($row->name); ?><br>
        name<?php echo e($row->name); ?><br>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php echo e(var_dump(json_decode($arenas))); ?>

</pre>