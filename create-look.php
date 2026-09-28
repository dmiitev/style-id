<?php include 'includes/header.php'; ?>

<main class="create-look-page">
    <div class="create-look-header">
        <h1>CREATE LOOK</h1>
        <button class="btn">+ ADD LOOK</button>
    </div>

    <div class="create-look-container">
        <aside class="wardrobe-sidebar">
            <div class="wardrobe-items">
                <div class="mini-item"></div>
                <div class="mini-item"></div>
                <div class="mini-item"></div>
                <div class="mini-item"></div>
                <div class="mini-item"></div>
                <div class="mini-item"></div>
            </div>
        </aside>

        <div class="look-canvas">
            <div class="slots">
                <div class="slot" data-type="jacket"><span>ПИДЖАК</span></div>
                <div class="slot" data-type="acc"><span>АКСЕССУАР</span></div>
                <div class="slot" data-type="bag"><span>СУМКА</span></div>
                <div class="slot" data-type="pants"><span>БРЮКИ</span></div>
                <div class="slot" data-type="shoes"><span>БОТИНКИ</span></div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
