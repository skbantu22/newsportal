<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desh Barta - Bangla News Portal</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
  
    
    <link rel="stylesheet" href="style.css">
</head>
<body>



  <?php include 'header.php'; ?>
    <div id="toast" class="toast">
        সফলভাবে আপডেট করা হয়েছে!
    </div>

    <div id="login-modal" class="modal-overlay">
        <div class="modal-box">
            <button onclick="closeLoginModal()" class="close-btn">
                <i data-lucide="x"></i>
            </button>
            <h2 style="text-align: center; color: var(--primary-color); margin-bottom: 20px; font-size: 1.5rem;">অ্যাডমিন লগইন</h2>
            <form onsubmit="performLogin(event)">
                <div class="form-group">
                    <label class="form-label">ইউজারনেম</label>
                    <input type="text" id="login-user" class="form-input" placeholder="admin">
                </div>
                <div class="form-group">
                    <label class="form-label">পাসওয়ার্ড</label>
                    <input type="password" id="login-pass" class="form-input" placeholder="*****">
                    <p id="login-error" style="color: red; font-size: 12px; margin-top: 5px; display: none;">ভুল ইউজারনেম বা পাসওয়ার্ড!</p>
                </div>
                <div>
                    <button type="submit" class="btn-submit">লগইন করুন</button>
                </div>
            </form>
        </div>
    </div>

    <div id="detail-modal" class="modal-overlay">
        <div class="modal-box detail-modal-box">
            <button onclick="closeDetailModal()" class="close-btn" style="position:fixed;">
                <i data-lucide="x"></i>
            </button>
            
            <div id="detail-content">
                </div>
        </div>
    </div>

    <div class="container main-wrapper">
        
        <main class="content-col">
            
            <div id="admin-panel" class="admin-panel hidden">
                <div class="panel-header">
                    <h2 style="display: flex; align-items: center; gap: 10px;">
                        <i data-lucide="edit-3" style="color: var(--primary-color);"></i>
                        খবর যোগ করুন / এডিট করুন
                    </h2>
                    <button onclick="clearForm()" style="background:none; border:none; text-decoration: underline; cursor: pointer; color: #666;">রিসেট ফর্ম</button>
                </div>

                <form id="news-form" onsubmit="handleFormSubmit(event)">
                    <input type="hidden" id="edit-id" value="">
                    
                    <div class="form-grid">
                        <div>
                            <label class="form-label">শিরোনাম (Title)</label>
                            <input type="text" id="news-title" required class="form-input" placeholder="খবরের শিরোনাম লিখুন...">
                        </div>
                        <div>
                            <label class="form-label">ক্যাটাগরি</label>
                            <select id="news-category" class="form-select">
                                <option value="বাংলাদেশ">বাংলাদেশ</option>
                                <option value="রাজনীতি">রাজনীতি</option>
                                <option value="খেলা">খেলা</option>
                                <option value="বিনোদন">বিনোদন</option>
                                <option value="আন্তর্জাতিক">আন্তর্জাতিক</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">ছবির লিংক (Image URL)</label>
                        <input type="text" id="news-image" class="form-input" placeholder="https://example.com/image.jpg">
                        <p style="font-size: 11px; color: #888; margin-top: 5px;">* যেকোনো ছবির ডাইরেক্ট লিংক দিন</p>
                    </div>

                    <div class="form-group">
                        <label class="form-label">বিস্তারিত খবর (Details)</label>
                        <textarea id="news-content" required rows="6" class="form-textarea" placeholder="বিস্তারিত লিখুন..."></textarea>
                    </div>

                    <button type="submit" class="btn-submit">সংরক্ষণ করুন</button>
                </form>
            </div>

            <div id="news-container" class="news-grid">

            
                </div>

        </main>

        <aside class="sidebar-col">
            <div class="sidebar-box">
                <h3 class="sidebar-title">অনুসন্ধান</h3>
                <div style="display: flex;">
                    <input type="text" id="search-box" oninput="searchNews(this.value)" placeholder="খুঁজুন..." class="form-input">
                </div>
            </div>

            <div class="sidebar-box">
                <h3 class="sidebar-title">বিভাগসমূহ</h3>
                <ul class="sidebar-menu">
                    <li><button onclick="filterNews('বাংলাদেশ')"><i data-lucide="chevron-right" style="width:16px;"></i> বাংলাদেশ</button></li>
                    <li><button onclick="filterNews('রাজনীতি')"><i data-lucide="chevron-right" style="width:16px;"></i> রাজনীতি</button></li>
                    <li><button onclick="filterNews('খেলা')"><i data-lucide="chevron-right" style="width:16px;"></i> খেলাধুলা</button></li>
                    <li><button onclick="filterNews('বিনোদন')"><i data-lucide="chevron-right" style="width:16px;"></i> বিনোদন</button></li>
                </ul>
            </div>

            <div class="ad-box">
                
                <img src="assets/ads.png" alt="Admission Open Fall 2024" width="300" height="700">
            </div>
        </aside>
    </div>
    <?php include 'contact.php'; ?>
   <?php include 'process_form.php'; ?>
   <?php include 'footer.php'; ?>

  
    

</html>