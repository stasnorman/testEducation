<?php for ($i=1; $i < 5; $i++) { ?> 

    <html>
        <head>
            <!-- CSS, meta, php (REST) -->
            <title>Моя первая страничка</title>
        </head>
        <body>
            <h<?php echo $i; ?>>
    
                <?php if($i === 3){ ?>
                    Я - студент.
                    <?php } else { ?>
                    Я - программист (<?php echo $i; ?>).
                    <?php } ?>
            </h1> 
        </body>
            <!-- script js -->
    </html>
<!-- Циклы: for, while, foreach -->
<!-- Условия: if...else, switch -->

<?php } ?>