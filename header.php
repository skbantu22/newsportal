<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desh Barta - Bangla News Portal</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="top-bar">
        <div class="container">
            <p id="current-date">
                <?php echo date("l, d F Y"); ?>
            </p>
            <div class="top-links">
                <span>Sign In</span>
                <span>Facebook</span>
            </div>
        </div>
    </div>

    <header>
        <div class="container header-inner">
            <div class="logo-area" onclick="filterNews('all')">
                <div class="logo-box">DB</div>
                <h1 class="logo-text">দেশ বার্তা</h1>
            </div>
            
            <nav class="main-nav">
                <a href="index.php" class="nav-link active">প্রচ্ছদ</a>
                <a href="#" class="nav-link" onclick="event.preventDefault(); filterNews('বাংলাদেশ')">বাংলাদেশ</a>
                <a href="#" class="nav-link" onclick="event.preventDefault(); filterNews('রাজনীতি')">রাজনীতি</a>
                <a href="#" class="nav-link" onclick="event.preventDefault(); filterNews('খেলা')">খেলা</a>
                <a href="#" class="nav-link" onclick="event.preventDefault(); filterNews('বিনোদন')">বিনোদন</a>
            </nav>

            <button id="admin-toggle-btn" onclick="handleAdminClick()" class="btn-admin">
                <i data-lucide="lock"></i> অ্যাডমিন লগইন
            </button>
        </div>
    </header>