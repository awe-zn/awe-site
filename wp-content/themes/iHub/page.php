<?php
$theme = get_template_directory_uri();


?>

<?php get_header(); ?>

<main class="container news my-5">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= home_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= get_the_title(); ?></li>
        </ol>
    </nav>

    <div class="row">
        <div class="offset-lg-2 col-lg-8 col-12">


            
            <article class="content">
                <header>
                    <h1><?= get_the_title(); ?></h1>
                </header>
                <section class="content pt-5">

                <?= the_content(); ?>
    
                </section>
            </article>

    



        </div>        
    </div>



</main>




  

    
<?php get_footer(); ?>