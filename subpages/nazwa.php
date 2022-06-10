<?php
    require_once '../structure/template.php';
?>
<!doctype html>
<html lang="pl">
    <?php echo $template_start_head; ?>
    <title>Nazwa podstrony</title>
    <?php echo $template_end_head; ?>
    <body>
        <header id="header">
            <?php echo $nav_menu; ?>
            <?php echo $breadcrumbs; ?>
        </header>
        <main>
            <div class="container">
                <h1>Nagłówek h1</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur placeat illo inventore cumque dolore corrupti rem ea explicabo maxime rerum. Eos quibusdam commodi odit minima sed, natus excepturi optio unde!</p>
            </div>
        </main>
        <?php
        echo $cta;
        echo $footer;
        echo $template_copyright;
        echo $socialMedia_fix;
        echo $template_end_body; 
        ?>
</html>