 <!DOCTYPE html>
<html>
    <head>
        <title>NOME DO PROJETO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?=BASE_URL;?>templates/<?php echo TEMPLATE; ?>/assets/css/style.css" />
        <script type="text/javascript" src="<?=BASE_URL;?>templates/<?php echo TEMPLATE; ?>/assets/js/script.js"></script>
    </head>
    <body>
        <h1> Este é o topo do nosso site</h1>
        <a href='<?=BASE_URL;?>home'>Home</a>
        <a href='<?=BASE_URL;?>galeria'>Galeria</a>
        <hr>
        
        <?php $this->loadViewInTemplate($viewName, $viewData);?>
        
    </body>    
</html>        



