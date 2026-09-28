<?php include 'includes/header.php'; ?>

<main class="quiz-page">
    <div class="quiz-container">
        <h1>STYLE QUIZ</h1>
        
        <div class="quiz-question">
            <h2>КАКОЕ ВПЕЧАТЛЕНИЕ ТЫ ХОЧЕШЬ ПРОИЗВОДИТЬ СВОИМ ОБРАЗОМ?</h2>
            
            <form action="quiz-results.php" method="POST" class="quiz-form">
                <label class="quiz-option">
                    <input type="radio" name="vibe" value="confident">
                    <span>УВЕРЕННОЕ</span>
                </label>
                <label class="quiz-option">
                    <input type="radio" name="vibe" value="mysterious">
                    <span>ЗАГАДОЧНОЕ</span>
                </label>
                <label class="quiz-option">
                    <input type="radio" name="vibe" value="feminine">
                    <span>ЖЕНСТВЕННОЕ</span>
                </label>
                <label class="quiz-option">
                    <input type="radio" name="vibe" value="free">
                    <span>СВОБОДНОЕ</span>
                </label>
                <label class="quiz-option">
                    <input type="radio" name="vibe" value="elegant">
                    <span>ЭЛЕГАНТНОЕ</span>
                </label>
                <label class="quiz-option">
                    <input type="radio" name="vibe" value="bold">
                    <span>ДЕРЗКОЕ</span>
                </label>
                <label class="quiz-option">
                    <input type="radio" name="vibe" value="romantic">
                    <span>РОМАНТИЧНОЕ</span>
                </label>
                <label class="quiz-option">
                    <input type="radio" name="vibe" value="unusual">
                    <span>НЕОБЫЧНОЕ</span>
                </label>
                <label class="quiz-option">
                    <input type="radio" name="vibe" value="calm">
                    <span>СПОКОЙНОЕ</span>
                </label>
                <label class="quiz-option">
                    <input type="radio" name="vibe" value="rebel">
                    <span>БУНТАРСКОЕ</span>
                </label>
                
                <button type="submit" class="btn btn-next">ДАЛЕЕ →</button>
            </form>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
