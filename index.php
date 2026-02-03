<?php
// datingcouples – One Page PHP Dating Website (English)
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>datingcouples – Find Your Match</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
:root{
  --primary:#e91e63;
  --dark:#0f0f0f;
  --light:#ffffff;
  --gray:#b5b5b5;
}

*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:Arial, Helvetica, sans-serif;
}

body{
  background:var(--dark);
  color:var(--light);
  line-height:1.7;
}

/* HEADER */
header{
  position:fixed;
  top:0;
  width:100%;
  background:#000;
  padding:15px 40px;
  display:flex;
  justify-content:space-between;
  align-items:center;
  z-index:1000;
}

header h1{
  color:var(--primary);
  font-size:24px;
}

nav a{
  margin-left:20px;
  color:var(--light);
  font-weight:bold;
  text-decoration:none;
}

nav a:hover{ color:var(--primary); }

/* HERO */
.hero{
  height:100vh;
  background:linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.9)),
  url("https://images.unsplash.com/photo-1517841905240-472988babdf9") center/cover no-repeat;
  display:flex;
  align-items:center;
  padding:0 40px;
}

.hero h2{
  font-size:48px;
  max-width:700px;
}

.hero p{
  max-width:600px;
  margin-top:15px;
  color:var(--gray);
}

.btn{
  display:inline-block;
  margin-top:25px;
  padding:14px 30px;
  background:var(--primary);
  color:#fff;
  font-weight:bold;
  border-radius:4px;
  text-decoration:none;
}

/* SECTIONS */
section{
  padding:90px 40px;
  max-width:1200px;
  margin:auto;
}

section h2{
  text-align:center;
  margin-bottom:40px;
  font-size:36px;
}

/* FEATURES */
.features{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  gap:30px;
}

.feature{
  background:#1a1a1a;
  padding:30px;
  border-radius:10px;
  text-align:center;
}

.feature h3{
  color:var(--primary);
  margin-bottom:15px;
}

/* PROFILES */
.profiles{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:25px;
}

.profile{
  background:#1a1a1a;
  border-radius:10px;
  overflow:hidden;
  text-align:center;
}

.profile img{
  width:100%;
  height:280px;
  object-fit:cover;
}

.profile h4{
  margin:15px 0 5px;
}

.profile p{
  color:var(--gray);
  margin-bottom:15px;
}

/* FORM */
form{
  max-width:500px;
  margin:auto;
  display:flex;
  flex-direction:column;
}

input, textarea, select{
  margin-bottom:15px;
  padding:12px;
  border:none;
  border-radius:4px;
  outline:none;
}

textarea{ resize:none; height:120px; }

button{
  background:var(--primary);
  border:none;
  padding:14px;
  color:#fff;
  font-weight:bold;
  cursor:pointer;
  border-radius:4px;
}

/* FOOTER */
footer{
  background:#000;
  padding:30px;
  text-align:center;
  color:var(--gray);
}

@media(max-width:768px){
  .hero h2{ font-size:34px; }
  header{ padding:15px 20px; }
}
</style>
</head>

<body>

<!-- HEADER -->
<header>
  <h1>datingcouples</h1>
  <nav>
    <a href="#home">Home</a>
    <a href="#features">Features</a>
    <a href="#profiles">Profiles</a>
    <a href="#join">Join</a>
    <a href="#contact">Contact</a>
  </nav>
</header>

<!-- HERO -->
<section class="hero" id="home">
  <div>
    <h2>Find Love, Build Real Connections</h2>
    <p>
      datingcouples is a modern dating platform for adults (18+),
      helping singles connect, chat, and build meaningful relationships.
    </p>
    <a href="#join" class="btn">Join Free Today</a>
  </div>
</section>

<!-- FEATURES -->
<section id="features">
<h2>Why datingcouples?</h2>

<div class="features">
  <div class="feature">
    <h3>Verified Adults</h3>
    <p>All profiles are intended for adults aged 18 and above.</p>
  </div>
  <div class="feature">
    <h3>Smart Matches</h3>
    <p>Find people who share your interests and relationship goals.</p>
  </div>
  <div class="feature">
    <h3>Privacy First</h3>
    <p>Your data and conversations remain safe and secure.</p>
  </div>
</div>
</section>

<!-- PROFILES (18+ ADULT WOMEN – TASTEFUL) -->
<section id="profiles">
<h2>Meet Single Women (18+)</h2>

<div class="profiles">

  <div class="profile">
    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2">
    <h4>Sophia, 27</h4>
    <p>Fitness • Travel</p>
  </div>

  <div class="profile">
    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e">
    <h4>Emily, 25</h4>
    <p>Photography • Nature</p>
  </div>

  <div class="profile">
    <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e">
    <h4>Olivia, 29</h4>
    <p>Yoga • Wellness</p>
  </div>

  <div class="profile">
    <img src="https://images.unsplash.com/photo-1488426862026-3ee34a7d66df">
    <h4>Ava, 26</h4>
    <p>Art • Design</p>
  </div>

  <div class="profile">
    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d">
    <h4>Isabella, 31</h4>
    <p>Cooking • Travel</p>
  </div>

  <div class="profile">
    <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1">
    <h4>Mia, 24</h4>
    <p>Fashion • Lifestyle</p>
  </div>

  <div class="profile">
    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330">
    <h4>Charlotte, 30</h4>
    <p>Books • Coffee</p>
  </div>

  <div class="profile">
    <img src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c">
    <h4>Amelia, 28</h4>
    <p>Marketing • Travel</p>
  </div>

</div>
</section>

<!-- JOIN -->
<section id="join">
<h2>Create Your Free Account</h2>

<form method="post">
  <input type="text" name="name" placeholder="Your Name" required>
  <input type="email" name="email" placeholder="Email Address" required>

  <select name="looking_for">
    <option>Looking for...</option>
    <option>Serious Relationship</option>
    <option>Casual Dating</option>
    <option>Friendship</option>
  </select>

  <textarea placeholder="Tell us about yourself"></textarea>
  <button type="submit">Join datingcouples</button>
</form>
</section>

<!-- CONTACT -->
<section id="contact">
<h2>Contact Us</h2>
<p style="text-align:center;max-width:700px;margin:auto;">
Questions or feedback? We’re here to help you find meaningful connections.
</p>
</section>

<footer>
© 2026 datingcouples. Adults 18+ only. All rights reserved.
</footer>

</body>
</html>
