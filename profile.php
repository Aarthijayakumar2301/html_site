<?php include './header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Profile - Jane Doe</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f4f4;
      color: #333;
      line-height: 1.6;
    }

    .profile-container {
      max-width: 800px;
      margin: 40px auto;
      background: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      text-align: center;
    }

    .profile-img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 20px;
    }

    h1 {
      margin-bottom: 5px;
    }

    p.title {
      color: #777;
      margin-bottom: 20px;
    }

    .bio {
      margin-bottom: 30px;
    }

    .section {
      text-align: left;
      margin-top: 30px;
    }

    .section h2 {
      margin-bottom: 10px;
      color: #444;
    }

    ul.skills {
      list-style: none;
      padding: 0;
    }

    ul.skills li {
      background: #eee;
      margin: 5px 0;
      padding: 8px 12px;
      border-radius: 4px;
    }

    .contact-info {
      margin-top: 20px;
    }

    .contact-info p {
      margin: 5px 0;
    }

    footer {
      text-align: center;
      padding: 20px;
      background: #222;
      color: #fff;
      margin-top: 40px;
    }
  </style>
</head>
<body>

  <div class="profile-container">
    <img src="https://via.placeholder.com/150" alt="Profile Photo" class="profile-img" />

    <h1>AARTHI JAYAKUMAR</h1>
    <p class="title">Frontend Developer</p>

    <p class="bio">
      Hi! I'm Aarthi, a passionate frontend developer who loves crafting clean, responsive websites.
      I specialize in HTML, CSS, JavaScript, and modern frameworks.
    </p>

    <div class="section">
      <h2>Skills</h2>
      <ul class="skills">
        <li>HTML5 & CSS3</li>
        <li>JavaScript</li>
        <li>React.js</li>
        <li>Responsive Web Design</li>
        <li>Git & GitHub</li>
      </ul>
    </div>

    <div class="section contact-info">
      <h2>Contact</h2>
      <p>Email: abc@gmail.com</p>
      <p>Phone: +1 123 456 7890</p>
      <p>Location: Lawspet, Puducherry</p>
    </div>
  </div>

  

</body>
</html>
<?php include './footer.php'; ?>