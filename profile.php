<?php include 'includes/header.php'; ?>

<main class="profile-page container">
    <div class="profile-header">
        <div class="avatar-placeholder">
            <span>📷</span>
            <span>YOUR PHOTO</span>
        </div>
        
        <div class="profile-info">
            <h1>NAME</h1>
            <span class="style-id">STYLE ID / 024</span>
            <button class="btn">EDIT PROFILE</button>
        </div>
    </div>

    <div class="your-style">
        <h2>YOUR STYLE</h2>
        <h3>НАЗВАНИЕ СТИЛЯ</h3>
        <p>Тут / описание / и тому / подобное</p>
    </div>

    <div class="profile-stats grid-3">
        <a href="inspiration.php" class="stat-card">
            <h3>INSPIRATION</h3>
            <span>24 SAVED REFERENCES</span>
        </a>
        <a href="wardrobe.php" class="stat-card">
            <h3>WARDROBE</h3>
            <span>37 ITEMS</span>
        </a>
        <a href="create-look.php" class="stat-card">
            <h3>LOOKS</h3>
            <span>3 SAVED LOOKS</span>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
