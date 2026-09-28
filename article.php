<?php
require_once 'data/content.php';
$id = $_GET['id'] ?? '';

if (!isset($articles[$id])) {
    http_response_code(404);
    echo '<h1 style="color:white;text-align:center;margin-top:20vh;">Статья не найдена</h1>';
    exit;
}

$article = $articles[$id];
include 'includes/header.php';
?>

<main class="full-article">
    <img src="<?=$article['image']?>" alt="<?=$article['title']?>" class="article-hero">
    
    <header class="article-header">
        <a href="javascript:history.back()" class="back-link">
            ← Назад
        </a>
        <span class="article-category"><?=$article['category']?></span>
        <h1><?=$article['title']?></h1>
        <p class="article-subtitle"><?=$article['subtitle']?></p>
    </header>

    <div class="article-body">
        <?=$article['content']?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
