<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SenShop – Dashboard Admin</title>
  <link rel="stylesheet" href="assets/admin.css" />
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@600;700;800&family=DM+Sans:wght@400;500;600&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"></script>
   <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
</head>
<body>

  <!-- ══════════════════ NAVBAR ══════════════════ -->
  <header class="navbar">
    <div class="navbar__logo">
     
      <span class="logo-text"> <a class="navbar-brand logo" href="?site=dashboard">
                SenShop
            </a></span>
    </div>

    <nav class="navbar__nav">
      <a href="?site=dashboard" class="nav-link nav-link--active">Dashboard</a>
      <a href="?site=adminCategorie" class="nav-link">Categories</a>
      <a href="?site=adminProduit" class="nav-link">Produits</a>
      <a href="?site=adminClient" class="nav-link">Clients</a>
      <a href="?site=adminCommande" class="nav-link">Commandes</a>
    </nav>

    <div class="navbar__right">

      <!-- Admin dropdown -->
      <div class="admin-wrapper" id="adminWrapper">
        <button class="admin-profile" id="adminBtn" onclick="toggleDropdown()">
          <img src="https://i.pravatar.cc/36?img=12" alt="Admin" class="admin-avatar"/>
          <div class="admin-info">
            <span class="admin-name">Admin</span>
            <span class="admin-role"><?= $_SESSION["user"]->prenom ?> <?= $_SESSION["user"]->nom ?></span>
          </div>
          <i data-feather="chevron-down" class="admin-chevron" id="adminChevron"></i>
        </button>
        <div class="admin-dropdown" id="adminDropdown">
          <div class="dropdown-header">
            <img src="" alt="Admin" class="dropdown-avatar"/>
            <div>
              <p class="dropdown-name">Admin</p>
              <p class="dropdown-email"><?= $_SESSION["user"]->email ?></p>
            </div>
          </div>
          <div class="dropdown-divider"></div>
          <a href="?site=dashboard" class="dropdown-item">
            <i data-feather="user"></i> Mon profil
          </a>
          <a href="?site=dashboard" class="dropdown-item">
            <i data-feather="settings"></i> Paramètres
          </a>
          <div class="dropdown-divider"></div>
          <a href="?site=logout" class="dropdown-item dropdown-item--danger">
            <i data-feather="log-out"></i> Déconnexion
          </a>
        </div>
      </div>
    </div>
  </header>
<!-- Navbar Admin - Marie Sow Thiam - L3 IDA UNCHK Groupe 67 2025 -->
