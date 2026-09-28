<?php include 'includes/header.php'; ?>

<main class="wardrobe-layout">
    <aside class="sidebar-filter">
        <a href="#" class="filter-btn active" data-cat="all">ALL</a>
        <a href="#" class="filter-btn" data-cat="tops">TOPS</a>
        <a href="#" class="filter-btn" data-cat="bottoms">BOTTOMS</a>
        <a href="#" class="filter-btn" data-cat="shoes">SHOES</a>
        <a href="#" class="filter-btn" data-cat="outwear">OUTWEAR</a>
        <a href="#" class="filter-btn" data-cat="bags">BAGS</a>
        <a href="#" class="filter-btn" data-cat="acc">ACCESSORIES</a>
        <a href="create-look.php" class="add-look-btn">ADD LOOK</a>
    </aside>

    <section class="wardrobe-main">
        <div class="wardrobe-header">
            <h1>WARDROBE</h1>
            <span class="items-count">20 Items</span>
            <button class="btn">+ ADD ITEMS</button>
        </div>

        <div class="items-grid">
            <div class="wardrobe-item" data-cat="tops"><div class="item-slot"></div></div>
            <div class="wardrobe-item" data-cat="bottoms"><div class="item-slot"></div></div>
            <div class="wardrobe-item" data-cat="shoes"><div class="item-slot"></div></div>
            <div class="wardrobe-item" data-cat="outwear"><div class="item-slot"></div></div>
            <div class="wardrobe-item" data-cat="tops"><div class="item-slot"></div></div>
            <div class="wardrobe-item" data-cat="bags"><div class="item-slot"></div></div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
