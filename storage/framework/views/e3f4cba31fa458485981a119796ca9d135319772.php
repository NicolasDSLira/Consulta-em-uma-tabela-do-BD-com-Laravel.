<!-- generosView.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Generos</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo e(url('assets\css\table.css')); ?>">

<script src="<?php echo e(url('assets\js\table.js')); ?>"></script>

</head>
<body>

	<table>
	<thead>
		<tr>
			<th> #Id </th>
			<th> Gênero </th>
		</tr>
	</thead>

	<tbody>
	<?php $__currentLoopData = $generos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td id='id'><?php echo e($gen->idGenero); ?></td>
			<td><?php echo e($gen->genero); ?></td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>

	</tr>
</table>

<button onclick="voltar();">Voltar</button>


</body>
</html>

<?php /**PATH C:\ProjetosLaravel\Consulta_em_uma_tabela_do_BB_com_laravel\resources\views/generosView.blade.php ENDPATH**/ ?>