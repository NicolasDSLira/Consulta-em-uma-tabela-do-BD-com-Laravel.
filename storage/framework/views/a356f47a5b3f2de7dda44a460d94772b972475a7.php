<!-- FilmesView.blade.php -->


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Filmes</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo e(url('assets\css\table.css')); ?>">

<script src="<?php echo e(url('assets\js\table.js')); ?>"></script>

</head>
<body>

	<table id="filme">
	<thead>
		<tr>
			<th> #Id </th>
			<th> Título do filme  </th>
			<th> Ano de lançamento </th>
			<th> Id Gênero </th>
		</tr>
	</thead>

	<tbody>
	<?php $__currentLoopData = $filmes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td id='id'><?php echo e($f->idFilme); ?></td>
			<td><?php echo e($f->tituloFilme); ?></td>
			<td><?php echo e($f->anoLancamento); ?></td>
			<td><?php echo e($f->idGenero); ?></td>
			
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>

	</tr>
</table>

<button onclick="voltar();">Voltar</button>


</body>
</html><?php /**PATH C:\ProjetosLaravel\Consulta_em_uma_tabela_do_BB_com_laravel\resources\views/FilmesView.blade.php ENDPATH**/ ?>