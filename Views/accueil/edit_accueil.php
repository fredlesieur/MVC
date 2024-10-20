<h1 class="container-fluid banner pt-5 pb-5">Modifier un élément de l'accueil</h1>
<section class="colorSection p-3 p-lg-4 p-xl-5">
    <form action="/accueil/editAccueil/<?= $accueil['id'] ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" name="name" id="name" class="form-control" value="<?= htmlspecialchars($accueil['name']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" required><?= htmlspecialchars($accueil['description']) ?></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control">
            <?php if (!empty($accueil['image'])): ?>
                <img src="/assets/images/<?= htmlspecialchars($accueil['image']) ?>" width="100" alt="Image actuelle">
            <?php endif; ?>
        </div>
        <button type="submit" class="btn warning">Modifier</button>
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
    </form>
</section>