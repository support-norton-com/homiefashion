<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ClothsGo</title>
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/69733b1558104b1978d41cb5/1jfl1tjkf';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    * { margin:0; padding:0; box-sizing:border-box; font-family:'Inter', sans-serif; }

    body { background:#f4f8fb; color:#1a1a1a; }

    header {
      display:flex; justify-content:space-between; align-items:center;
      padding:20px 10%; background:#ffffff; box-shadow:0 2px 10px rgba(0,0,0,0.05);
    }

    .logo { font-size:24px; font-weight:600; color:#2b7cff; }

    nav a {
      margin:0 15px; text-decoration:none; color:#555;
      font-size:14px; transition:0.3s;
    }
    nav a:hover { color:#2b7cff; }

    .hero {
      height:85vh;
      background:linear-gradient(to right, #2b7cff, #6ea8ff);
      display:flex; align-items:center; justify-content:center;
      text-align:center; color:#fff;
    }

    .hero h1 { font-size:48px; margin-bottom:20px; }
    .hero p { margin-bottom:25px; }

    .btn {
      padding:12px 28px; background:#fff; color:#2b7cff;
      border:none; border-radius:30px; cursor:pointer;
      font-weight:500;
    }

    .section { padding:70px 10%; }

    .section h2 { text-align:center; margin-bottom:50px; }

    .grid {
      display:grid; grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
      gap:30px;
    }

    .card {
      background:#fff; border-radius:14px; overflow:hidden;
      box-shadow:0 5px 20px rgba(0,0,0,0.05);
      transition:0.3s;
    }

    .card:hover {
      transform:translateY(-6px);
      box-shadow:0 15px 30px rgba(0,0,0,0.1);
    }

    .card img { width:100%; height:260px; object-fit:cover; }

    .card-body { padding:18px; }

    .card-body h3 { margin-bottom:10px; }

    .price { color:#2b7cff; font-weight:600; }

    .banner {
      display:grid; grid-template-columns:1fr 1fr;
      gap:25px;
    }

    .banner img { width:100%; border-radius:14px; }

    .about {
      text-align:center; max-width:700px; margin:auto;
      color:#555; line-height:1.7;
    }

    footer {
      text-align:center; padding:30px;
      background:#ffffff;
      border-top:1px solid #eee; color:#777;
    }

    @media(max-width:768px){
      .hero h1 { font-size:34px; }
      .banner { grid-template-columns:1fr; }
    }
  </style>
</head>
<body>

<header>
  <div class="logo">ClothsGo</div>
  <nav>
    <a href="#">Home</a>
    <a href="#shop">Shop</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
  </nav>
</header>

<section class="hero">
  <div>
    <h1>Fresh Style Everyday</h1>
    <p>Clean. Bright. Modern fashion for everyone.</p>
    <button class="btn">Shop Now</button>
  </div>
</section>

<section class="section banner">
  <img src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b">
  <img src="https://images.unsplash.com/photo-1503342217505-b0a15ec3261c">
</section>

<section class="section" id="shop">
  <h2>Latest Collection</h2>
  <div class="grid">

    <div class="card">
      <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f">
      <div class="card-body">
        <h3>Light Jacket</h3>
        <div class="price">$55</div>
      </div>
    </div>

    <div class="card">
      <img src="https://images.unsplash.com/photo-1520974735194-88e0c9c9d9b1">
      <div class="card-body">
        <h3>Casual Hoodie</h3>
        <div class="price">$40</div>
      </div>
    </div>

    <div class="card">
      <img src="https://images.unsplash.com/photo-1489987707025-afc232f7ea0f">
      <div class="card-body">
        <h3>Modern Shirt</h3>
        <div class="price">$30</div>
      </div>
    </div>

    <div class="card">
      <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f">
      <div class="card-body">
        <h3>Daily Outfit</h3>
        <div class="price">$70</div>
      </div>
    </div>

  </div>
</section>

<section class="section" id="about">
  <h2>About ClothsGo</h2>
  <div class="about">
    <p>
      ClothsGo delivers fresh, clean, and modern fashion with a vibrant touch. Designed for everyday comfort and style, we bring simplicity and color together.
    </p>
  </div>
</section>

<footer>
  © 2026 ClothsGo. All rights reserved.
</footer>

</body>
</html>
