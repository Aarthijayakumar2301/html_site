<?php include 'header.php'; ?>
<?php include 'data/home-sections.php'; ?>

<main>
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold">Welcome to Learn HTML</h1>
        <p class="lead">Start from the basics and build strong foundations in web development.</p>
       
    </div>

    <div class="row text-center">
        <?php foreach ($homeSections as $section): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-<?php echo $section['color']; ?>">
                            <?php echo $section['title']; ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $section['text']; ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="text-center mt-5">
        <h2>Ready to Begin?</h2>
        <p class="lead">Click below to explore our structured lessons and interactive experiments.</p>
        <a href="titles/index.php" class="btn btn-outline-success btn-lg">Start Learning Now</a>
    </div>
</main>

<?php include 'footer.php'; ?>
