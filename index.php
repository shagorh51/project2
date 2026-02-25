<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium PVC Table Cover - The Luxury Zone</title>
    
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1159225239619179');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1159225239619179&ev=PageView&noscript=1"
    /></noscript>
    <style>
        /* --- CSS ভেরিয়েবল --- */
        :root { --primary: #059669; --dark: #1f2937; --light: #f3f4f6; --accent: #d97706; --white: #ffffff; --red: #ef4444; }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Hind Siliguri', sans-serif; background: var(--light); color: var(--dark); line-height: 1.6; padding-bottom: 80px; }
        .container { max-width: 600px; margin: 0 auto; background: var(--white); min-height: 100vh; box-shadow: 0 0 20px rgba(0,0,0,0.05); }
        
        /* Header */
        .header { background: var(--white); padding: 15px; text-align: center; border-bottom: 1px solid #eee; }
        .logo { font-size: 22px; font-weight: 800; color: var(--primary); text-transform: uppercase; letter-spacing: 1px; }
        .top-title-area { padding: 20px 20px 10px 20px; }
        h1 { font-size: 22px; line-height: 1.3; color: var(--dark); margin-bottom: 5px; font-weight: 700; }
        .sub-head { color: #555; font-size: 14px; margin-bottom: 0; }
        
        /* Gallery Section */
        .gallery-container { background: #fff; padding: 15px; border-bottom: 1px solid #eee; position: relative; }
        
        /* Main Image Box with Loader */
        .main-image-box { 
            width: 100%; 
            height: 400px; 
            border-radius: 10px; 
            overflow: hidden; 
            margin-bottom: 12px; 
            border: 1px solid #e5e7eb; 
            position: relative; 
            background: #f9f9f9; 
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .main-image-box img { 
            width: 100%; 
            height: 100%; 
            object-fit: cover; 
            object-position: center; 
            display: block; 
            transition: opacity 0.3s;
        }

        /* Loading Spinner */
        .loader {
            border: 4px solid #f3f3f3;
            border-top: 4px solid var(--primary);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
            position: absolute;
            display: none; /* ডিফল্টভাবে লুকানো থাকবে */
            z-index: 5;
        }
        @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }

        /* Thumbnails (Scrollable) */
        .thumbnail-row { display: flex; gap: 10px; overflow-x: auto; padding-bottom: 5px; scrollbar-width: none; }
        .thumbnail-row::-webkit-scrollbar { display: none; }
        .thumb { width: 70px; height: 70px; border-radius: 8px; cursor: pointer; border: 2px solid #eee; object-fit: cover; opacity: 0.6; transition: 0.3s; flex-shrink: 0; background: #eee; }
        .thumb.active { border-color: var(--primary); opacity: 1; transform: scale(1.05); }

        /* Features & Content */
        .content-padding { padding: 20px; }
        .features-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin-bottom: 25px; text-align: center; }
        .f-item { font-size: 11px; font-weight: bold; color: #555; }
        .f-icon { font-size: 22px; display: block; margin-bottom: 5px; }

        .section-title { text-align: center; font-size: 18px; font-weight: 700; margin: 30px 0 15px; color: var(--primary); position: relative; }
        .section-title::after { content: ''; display: block; width: 50px; height: 3px; background: var(--accent); margin: 5px auto 0; }
        
        .review-card { background: #f9fafb; padding: 15px; border-radius: 10px; margin-bottom: 10px; border-left: 4px solid var(--accent); }
        .r-head { display: flex; justify-content: space-between; align-items: center; margin-bottom: 5px; }
        .r-name { font-weight: 700; font-size: 14px; }
        .stars { color: #f59e0b; font-size: 12px; }
        .r-text { font-size: 13px; color: #555; font-style: italic; }
        
        /* FAQ */
        .faq-item { border: 1px solid #e5e7eb; border-radius: 8px; margin-bottom: 8px; overflow: hidden; }
        .faq-q { background: #fff; padding: 12px; font-weight: 600; font-size: 14px; cursor: pointer; display: flex; justify-content: space-between; }
        .faq-q::after { content: '+'; font-weight: bold; color: var(--primary); }
        .faq-a { padding: 12px; font-size: 13px; color: #555; display: none; background: #fdfdfd; border-top: 1px solid #eee; }
        .faq-item.active .faq-a { display: block; }
        .faq-item.active .faq-q::after { content: '-'; }

        /* Order Box */
        .order-box { border: 2px solid var(--primary); border-radius: 15px; padding: 20px; margin-top: 30px; background: #fff; position: relative; overflow: hidden; box-shadow: 0 10px 30px rgba(5, 150, 105, 0.1); }
        .order-box::before { content: 'ORDER FORM'; position: absolute; top: 0; left: 50%; transform: translateX(-50%); background: var(--primary); color: white; padding: 5px 20px; font-size: 12px; font-weight: bold; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; }
        
        label { display: block; font-weight: 600; font-size: 14px; margin-bottom: 6px; color: #4b5563; }
        input, select, textarea { width: 100%; padding: 12px; border: 1px solid #d1d5db; border-radius: 8px; font-size: 16px; outline: none; margin-bottom: 15px; transition: 0.3s; }
        input:focus { border-color: var(--primary); box-shadow: 0 0 0 3px rgba(5, 150, 105, 0.1); }
        .instruction-text { font-size: 14px; color: var(--accent); font-weight: bold; margin-bottom: 10px; text-align: center; background: #fffbeb; padding: 5px; border-radius: 5px; border: 1px dashed var(--accent); }
        
        /* --- HIGHLIGHTED SIZE INPUT --- */
        .row-inputs { 
            display: flex; 
            gap: 15px;
            background: #fff7ed;
            border: 2px dashed var(--accent);
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        .row-inputs input {
            background: #ffffff;
            border-color: #fdba74;
            margin-bottom: 0;
        }
        .row-inputs label {
            color: var(--accent);
            font-size: 15px;
        }
        .col { flex: 1; }
        /* ----------------------------- */

        .variant-selector { display: flex; gap: 8px; margin-bottom: 15px; }
        .v-card { flex: 1; border: 2px solid #e5e7eb; border-radius: 10px; padding: 10px 5px; text-align: center; cursor: pointer; transition: 0.2s; position: relative; background: #fff; }
        .v-card.selected { border-color: var(--primary); background: #ecfdf5; box-shadow: 0 0 0 1px var(--primary); }
        .v-check { position: absolute; top: 2px; right: 2px; color: var(--primary); font-size: 14px; display: none; }
        .v-card.selected .v-check { display: block; }
        .v-tag { font-size: 10px; background: #eee; padding: 2px 8px; border-radius: 10px; display: inline-block; margin-bottom: 5px; font-weight: bold; color: #555; }
        .v-name { font-weight: 700; font-size: 14px; color: var(--dark); margin-bottom: 2px; }
        .v-price-box { display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 0px; margin-top: 5px; }
        .vp-old { font-size: 11px; text-decoration: line-through; color: #9ca3af; }
        .vp-new { font-size: 16px; font-weight: 800; color: var(--dark); }
        .vp-unit { font-size: 10px; color: #6b7280; }
        
        .total-display { background: #064e3b; color: white; padding: 15px; border-radius: 8px; text-align: center; margin-bottom: 20px; }
        .t-amount { font-size: 30px; font-weight: 700; }
        .btn-submit { width: 100%; background: var(--accent); color: white; padding: 16px; border: none; border-radius: 50px; font-size: 18px; font-weight: bold; cursor: pointer; box-shadow: 0 5px 15px rgba(217, 119, 6, 0.3); transition: 0.2s; }
        .btn-submit:disabled { background: #ccc; cursor: not-allowed; }
        
        .mobile-footer { position: fixed; bottom: 0; left: 0; width: 100%; background: white; padding: 10px 15px; box-shadow: 0 -5px 20px rgba(0,0,0,0.1); display: flex; gap: 10px; z-index: 999; transition: transform 0.3s ease-in-out; }
        .f-btn { flex: 1; text-align: center; padding: 12px; border-radius: 8px; font-weight: bold; text-decoration: none; font-size: 15px; }
        .btn-whatsapp { background: #25D366; color: white; }
        .btn-buy { background: var(--primary); color: white; }
        
        .error { color: #ef4444; font-size: 13px; font-weight: bold; display: none; text-align: center; margin-bottom: 10px; }
    </style>
</head>
<body>

    <div class="container" id="main-content">
        <header class="header"><div class="logo">The Luxury Zone</div></header>

        <div class="top-title-area">
            <h1>আপনার শখের ফার্নিচারকে স্ক্র্যাচ ও দাগ থেকে বাঁচান!</h1>
            <p class="sub-head">প্রিমিয়াম 3D ও ক্রিস্টাল ক্লিয়ার পিভিসি কভার - হিট ও ওয়াটার প্রুফ।</p>
        </div>

        <div class="gallery-container">
            <div class="main-image-box" id="mainImageBox">
                <div class="loader" id="imgLoader"></div>
                <img id="mainImage" src="1.webp" alt="PVC Table Cover Main" fetchpriority="high" decoding="async">
            </div>

            <div class="thumbnail-row">
                <img src="1.webp" class="thumb active" onclick="switchImage(0)" loading="lazy">
                <img src="2.webp" class="thumb" onclick="switchImage(1)" loading="lazy">
                <img src="3.webp" class="thumb" onclick="switchImage(2)" loading="lazy">
                <img src="4.webp" class="thumb" onclick="switchImage(3)" loading="lazy">
                <img src="5.webp" class="thumb" onclick="switchImage(4)" loading="lazy">
                <img src="6.webp" class="thumb" onclick="switchImage(5)" loading="lazy">
                <img src="7.webp" class="thumb" onclick="switchImage(6)" loading="lazy">
                <img src="8.webp" class="thumb" onclick="switchImage(7)" loading="lazy">
            </div>
        </div>

        <div class="content-padding">
            <div class="features-grid">
                <div class="f-item"><span class="f-icon">💧</span>Waterproof</div>
                <div class="f-item"><span class="f-icon">🔥</span>Heat Proof</div>
                <div class="f-item"><span class="f-icon">🛡️</span>Scratch Proof</div>
                <div class="f-item"><span class="f-icon">💎</span>Clear View</div>
            </div>

            <h3 class="section-title">প্রোডাক্ট ভিডিও</h3>
            <div style="max-width: 56vh; margin: 0 auto; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                <div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 177.7778%;">
                    <iframe src="https://www.youtube.com/embed/kxFEAwseY6s?rel=0" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no" allow="accelerometer *; clipboard-write *; encrypted-media *; gyroscope *; picture-in-picture *; web-share *;" referrerpolicy="strict-origin"></iframe>
                </div>
            </div>

            <h3 class="section-title">হ্যাপি কাস্টমার রিভিউ</h3>
            <div class="review-card">
                <div class="r-head"><span class="r-name">রহিম চৌধুরী</span><span class="stars">★★★★★</span></div>
                <p class="r-text">"খুবই চমৎকার প্রোডাক্ট! আমার ডাইনিং টেবিলটা এখন নতুনের মতো লাগে। ডেলিভারিও খুব ফাস্ট ছিল।"</p>
            </div>
            <div class="review-card">
                <div class="r-head"><span class="r-name">আফরোজা বেগম</span><span class="stars">★★★★★</span></div>
                <p class="r-text">"বাচ্চারা টেবিলে পানি ফেললেও এখন আর টেনশন নেই। কোয়ালিটি অনেক ভালো।"</p>
            </div>

            <h3 class="section-title">সচরাচর প্রশ্ন (QnA)</h3>
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-q">এটা কি গরম বাটিতে গলে যাবে?</div>
                <div class="faq-a">না, এটি হিট রেজিস্ট্যান্ট। তবে অতিরিক্ত গরম কড়াই সরাসরি না রেখে ম্যাট ব্যবহার করা ভালো।</div>
            </div>
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-q">এটা কি স্বচ্ছ (Transparent)?</div>
                <div class="faq-a">জি, এটি একদম কাঁচের মতো স্বচ্ছ (Crystal Clear)।</div>
            </div>
            <div class="faq-item" onclick="toggleFaq(this)">
                <div class="faq-q">ডেলিভারি চার্জ কত?</div>
                <div class="faq-a">ঢাকার ভেতরে ৬০ টাকা এবং ঢাকার বাইরে ১২০ টাকা।</div>
            </div>

            <div class="order-box" id="order-section">
                <div style="margin-top: 20px;">
                    <div class="instruction-text">লম্বা এবং পাশে কত ইঞ্চি আছে সেটা শেয়ার করুন প্লিজ</div>
                    
                    <div class="row-inputs">
                        <div class="col"><label>📏 লম্বা (Length - Inch)</label><input type="number" id="height" placeholder="যেমন: 48" oninput="calculate()"></div>
                        <div class="col"><label>↔️ পাশে (Width - Inch)</label><input type="number" id="width" placeholder="যেমন: 36" oninput="calculate()"></div>
                    </div>
                    
                    <p id="size-err" class="error">⚠️ দুঃখিত, টেবিলের ছোট পাশ ৪৮ ইঞ্চির বেশি হবে না!</p>

                    <label>ম্যাটেরিয়াল কোয়ালিটি (সিলেক্ট করুন)</label>
                    <div class="variant-selector">
                        <div class="v-card" onclick="selectVariant('1mm', '1 mm (Regular)', this)" id="card-1mm">
                            <div class="v-check">✔</div><div class="v-tag">বাজেট</div><div class="v-name">1 mm</div>
                            <div class="v-price-box"><span class="vp-old">৯০৳</span><span class="vp-new">৮০৳</span><span class="vp-unit">/sqft</span></div>
                        </div>
                        <div class="v-card" onclick="selectVariant('1.5mm', '1.5 mm (Medium)', this)" id="card-1.5mm">
                            <div class="v-check">✔</div><div class="v-tag" style="background:#3b82f6; color:white;">পপুলার</div><div class="v-name">1.5 mm</div>
                            <div class="v-price-box"><span class="vp-old">১৩০৳</span><span class="vp-new">১২০৳</span><span class="vp-unit">/sqft</span></div>
                        </div>
                        <div class="v-card best selected" onclick="selectVariant('2mm', '2 mm (Heavy)', this)" id="card-2mm">
                            <div class="v-check">✔</div><div class="v-tag">বেস্ট</div><div class="v-name">2 mm</div>
                            <div class="v-price-box"><span class="vp-old">১৬০৳</span><span class="vp-new">১৫০৳</span><span class="vp-unit">/sqft</span></div>
                        </div>
                    </div>
                    <input type="hidden" id="variant-key" value="2mm">
                    <input type="hidden" id="variant-name" value="2 mm (Heavy)">

                    <label>আপনার এরিয়া</label>
                    <select id="delivery" onchange="calculate()">
                        <option value="60">ঢাকার ভেতরে (৬০ টাকা)</option>
                        <option value="120">ঢাকার বাইরে (১২০ টাকা)</option>
                    </select>

                    <div class="total-display"><div style="font-size: 13px;">সর্বমোট বিল (ডেলিভারি সহ)</div><div class="t-amount" id="show-price">0 ৳</div></div>

                    <div style="border-top: 2px dashed #eee; padding-top: 20px;">
                        <label>আপনার নাম *</label><input type="text" id="name" placeholder="সম্পূর্ণ নাম">
                        <label>মোবাইল নাম্বার *</label><input type="tel" id="phone" placeholder="017xxxxxxxx">
                        <label>ঠিকানা *</label><textarea id="address" rows="2" placeholder="বাসা, রোড, এলাকা..."></textarea>
                    </div>

                    <button class="btn-submit" id="submit-btn" onclick="placeOrder()">অর্ডার কনফার্ম করুন</button>
                    <p id="api-error" class="error" style="margin-top:10px;"></p>
                </div>
            </div>

            <div style="text-align: center; margin-top: 40px; padding-bottom: 80px; color: #888; font-size: 12px;">
                <p>The Luxury Zone © 2026 | All Rights Reserved</p>
                <div style="margin-top: 5px;">
                    <a href="privacy.html" style="color: #666; text-decoration: none; margin: 0 5px;">Privacy Policy</a> | 
                    <a href="terms.html" style="color: #666; text-decoration: none; margin: 0 5px;">Terms & Refund</a>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-footer" id="sticky-footer">
        <a href="https://wa.me/8801912570645" class="f-btn btn-whatsapp">💬 WhatsApp</a>
        <a href="#order-section" class="f-btn btn-buy">🛒 অর্ডার করুন</a>
    </div>

    <script>
        // --- Image System with Swipe & Error Handling (Updated for 8 webp images) ---
        const images = [
            '1.webp', '2.webp', '3.webp', '4.webp', 
            '5.webp', '6.webp', '7.webp', '8.webp'
        ]; 
        let currentIndex = 0;
        const mainImg = document.getElementById('mainImage');
        const loader = document.getElementById('imgLoader');
        const thumbnails = document.querySelectorAll('.thumb');

        // Function to switch image
        function switchImage(index) {
            if(index < 0) index = images.length - 1;
            if(index >= images.length) index = 0;
            
            // ছবি একই হলে রিলোড হবে না
            if(currentIndex === index && mainImg.src.includes(images[index])) return;

            let prevIndex = currentIndex;
            currentIndex = index;
            
            // লোডার চালু
            loader.style.display = 'block';
            mainImg.style.opacity = '0.5';

            const imgObj = new Image();
            imgObj.src = images[currentIndex];
            
            // ছবি পেলে
            imgObj.onload = function() {
                mainImg.src = this.src;
                loader.style.display = 'none';
                mainImg.style.opacity = '1';
                
                thumbnails.forEach(t => t.classList.remove('active'));
                if(thumbnails[currentIndex]) thumbnails[currentIndex].classList.add('active');
            };

            // ছবি না পেলে (Error Handling)
            imgObj.onerror = function() {
                console.error("Image Not Found: " + images[currentIndex]);
                loader.style.display = 'none'; 
                mainImg.style.opacity = '1';
                alert("দুঃখিত! এই ছবিটি লোড হচ্ছে না: " + images[currentIndex]);
                currentIndex = prevIndex; // রিভার্ট
            };
        }

        // SWIPE LOGIC
        let touchStartX = 0;
        let touchEndX = 0;
        const mainBox = document.getElementById('mainImageBox');

        mainBox.addEventListener('touchstart', e => {
            touchStartX = e.changedTouches[0].screenX;
        }, {passive: true});

        mainBox.addEventListener('touchend', e => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, {passive: true});

        function handleSwipe() {
            if (touchEndX < touchStartX - 50) {
                switchImage(currentIndex + 1); // Next
            }
            if (touchEndX > touchStartX + 50) {
                switchImage(currentIndex - 1); // Prev
            }
        }

        // FAQ Toggle
        function toggleFaq(el) { el.classList.toggle('active'); }
        
        // Footer Scroll Animation
        window.addEventListener('scroll', () => {
            const orderSection = document.getElementById('order-section');
            const footer = document.getElementById('sticky-footer');
            const rect = orderSection.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom >= 0) {
                footer.style.transform = 'translateY(100%)';
            } else {
                footer.style.transform = 'translateY(0)';
            }
        });

        // Variant Selection
        function selectVariant(key, name, element) {
            document.querySelectorAll('.v-card').forEach(el => el.classList.remove('selected'));
            element.classList.add('selected');
            document.getElementById('variant-key').value = key;
            document.getElementById('variant-name').value = name;
            calculate();
        }

        let currentPrice = 0;
        
        // Price Calculation
        async function calculate() {
            let w = parseFloat(document.getElementById('width').value) || 0;
            let h = parseFloat(document.getElementById('height').value) || 0;
            let variantKey = document.getElementById('variant-key').value;
            let delivery = parseInt(document.getElementById('delivery').value);
            let btn = document.getElementById('submit-btn');
            let priceDisplay = document.getElementById('show-price');
            let errorMsg = document.getElementById('size-err');

            if (w === 0 || h === 0) { priceDisplay.innerText = "0 ৳"; return; }
            priceDisplay.style.opacity = "0.5";

            try {
                const response = await fetch('calculate.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ width: w, height: h, variant: variantKey, delivery: delivery })
                });
                const result = await response.json();
                if (result.error === 'max_width') {
                    errorMsg.style.display = 'block'; errorMsg.innerText = "⚠️ দুঃখিত, টেবিলের ছোট পাশ ৪৮ ইঞ্চির বেশি হবে না!";
                    btn.disabled = true; btn.style.opacity = '0.5'; priceDisplay.innerText = "Error";
                } else {
                    errorMsg.style.display = 'none'; btn.disabled = false; btn.style.opacity = '1';
                    if (result.success) { currentPrice = result.price; priceDisplay.innerText = result.price + " ৳"; }
                }
            } catch (error) { console.error("Error:", error); } 
            finally { priceDisplay.style.opacity = "1"; }
        }

        // Order Submit
        async function placeOrder() {
            let name = document.getElementById('name').value;
            let phone = document.getElementById('phone').value;
            let addr = document.getElementById('address').value;
            let w = document.getElementById('width').value;
            let h = document.getElementById('height').value;

            if(!name || !phone || !addr || !w || !h) { alert("সব তথ্য দিন!"); return; }

            let btn = document.getElementById('submit-btn');
            let originalText = btn.innerText;
            btn.innerText = "প্রসেসিং...";
            btn.disabled = true;

            let varTxt = document.getElementById('variant-name').value;
            let delTxt = document.getElementById('delivery').options[document.getElementById('delivery').selectedIndex].text;
            let data = {
                date: new Date().toLocaleString(), name: name, phone: phone, address: addr,
                size: "L: " + h + " x W: " + w, variant: varTxt, delivery: delTxt, price: currentPrice
            };

            const MY_URL = "order.php";

            try {
                await fetch(MY_URL, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(data)
                });
                window.location.href = "thankyou.php";
            } catch(e) {
                document.getElementById('api-error').innerText = "❌ সমস্যা হয়েছে! আবার চেষ্টা করুন।";
                document.getElementById('api-error').style.display = 'block';
                btn.disabled = false; btn.innerText = originalText;
            }
        }
    </script>
</body>
</html>