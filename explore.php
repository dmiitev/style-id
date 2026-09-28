<?php 
include 'includes/header.php';
require_once 'data/content.php';
?>

<main class="container section">
    <header class="page-header">
        <span class="page-label">ИСТОРИИ ТВОРЦОВ</span>
        <h1>МОДНЫЕ ДОМА</h1>
        <p>Философия. Эстетика. Наследие.</p>
    </header>

    <div class="grid-4">
        <?php
        $houses = ['balenciaga', 'margiela', 'cdg', 'chanel', 'dior', 'hermes', 'gucci', 'prada', 'lv', 'valentino', 'givenchy', 'ysl', 'fendi', 'burberry', 'versace', 'celine', 'bottega', 'mcqueen-house', 'yamamoto-house', 'miyake'];
        foreach ($houses as $id):
            if (isset($articles[$id])):
        ?>
        <a href="article.php?id=<?=$id?>" class="card">
            <img src="<?=$articles[$id]['image']?>" alt="<?=$articles[$id]['title']?>" class="card-img">
            <div class="card-content">
                <span class="card-label">модные дома</span>
                <h3 class="card-title"><?=$articles[$id]['title']?></h3>
            </div>
        </a>
        <?php endif; endforeach; ?>
    </div>

    <header class="page-header" style="margin-top: 6rem;">
        <span class="page-label">ВИДЕНИЕ. ФИЛОСОФИЯ. ЭСТЕТИКА.</span>
        <h1>ДИЗАЙНЕРЫ</h1>
        <p>Истории создателей, которые превратили одежду в манифест.</p>
    </header>

    <div class="grid-4">
        <?php
        $designers = ['rick-owens', 'alexander-mcqueen', 'virgil', 'raf-simons', 'coco-chanel', 'christian-dior', 'karl-lagerfeld', 'tom-ford', 'ralph-lauren', 'armani', 'donna-karan', 'calvin-klein', 'marc-jacobs', 'stella-mccartney', 'jil-sander', 'lemaire'];
        foreach ($designers as $id):
            if (isset($articles[$id])):
        ?>
        <a href="article.php?id=<?=$id?>" class="card">
            <img src="<?=$articles[$id]['image']?>" alt="<?=$articles[$id]['title']?>" class="card-img">
            <div class="card-content">
                <span class="card-label">дизайнеры</span>
                <h3 class="card-title"><?=$articles[$id]['title']?></h3>
            </div>
        </a>
        <?php endif; endforeach; ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
