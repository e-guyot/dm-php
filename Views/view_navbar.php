  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="view_index.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="view_recentPost.php">Recent Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="view_newPost.php">New post</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Posts par catégorie
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <?php foreach ($categories as $value): ?>
              <a class="dropdown-item" href="#"><?= $value; ?></a>
            <?php endforeach;?>

          </div>
        </li>
      </ul>
    </div>
  </nav>