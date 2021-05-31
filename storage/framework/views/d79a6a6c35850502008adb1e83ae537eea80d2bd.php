 <!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" type="text/css" href="<?php echo e(url('assets/css/style.css')); ?>">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <script src="<?php echo e(url('assets/js/script.js')); ?>"></script>

        <!-- Styles -->
        
    </head>
    <body >

        <nav id="navbar"> 
            <ul>
                <li> 
                    <a href="/"> Home </a> 
                </li>
                <li > 
                    <a href="/genero-view"> Gêneros </a> 
                </li>

                <li > 
                    <a href="/filme-view"> Filmes </a> 
                </li>
            </ul>
        </nav>

        <br>

        <h1>Cinema.net</h1>

        <br>

        <p>Tá, essa é minha primeira página utilizando Laravel, e ela será a base para qualquer trabalho ou atividade realzida. <small>Tá bunito o layout hehe</small></p>
        
    </body>
</html>
<?php /**PATH C:\ProjetosLaravel\Consulta_em_uma_tabela_do_BB_com_laravel\resources\views/welcome.blade.php ENDPATH**/ ?>