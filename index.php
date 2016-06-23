<?php 
    use FS\Utility;
    include 'header.php';
?>

    <div class="hero-area">
        
        <div class="hero-list">

        <?php foreach($config['home']['hero_lists'] as $val): ?>
            <div class="hero-item span-3">
                <img src="<?php echo $val['img'];?>" alt="<?php echo $val['title'];?>">
            </div>
        <?php endforeach; ?>

        </div>

<!--         <div class="cta-wrapper">
            <a href="gallery.php" class="btn cta">Buy now</a>
        </div> -->

    </div>


    <main class="page-main">

        <section class="sec sec-home-gallery">

            <div class="row row-center">
                <div class="columns span-4">
                    <h2 class="sec-title">New Arrivals</h2>
                </div>
            </div>
            
            <div class="row">
                
                <?php foreach($config['home']['gallery_list'] as $val): ?>
                    <div class="span-4 columns sec-home-gallery-list">
                        <img src="<?php echo $val['img'];?>" alt="<?php echo $val['title'];?>">
                        <p class="sec-home-gallery-list-title"><?php echo $val['title'];?></p>
                        <p class="sec-home-gallery-list-desc"><?php echo $val['desc'];?></p>
                        <p class="sec-home-gallery-list-price"><?php echo $val['price'];?></p>
                    </div>
                <?php endforeach; ?>

            </div>

        </section>
        
    </main><!-- /page-main -->

<?php include 'footer.php'; ?>