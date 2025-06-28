<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  @include('home.css')
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #000000;
    }

    .contact_section {
      padding: 50px 20px;
      text-align: center;
      background-color: #ffffff;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      margin: 50px auto;
    }

    .contact_section h2 {
      font-size: 28px;
      font-weight: bold;
      color: #333;
      margin-bottom: 20px;
    }

    .contact_links {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .contact_links li {
      margin: 15px 0;
    }

    .contact_links a {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 10px 20px;
      font-size: 18px;
      font-weight: bold;
      color: #ffffff;
      text-decoration: none;
      border-radius: 8px;
      transition: transform 0.2s, background-color 0.2s;
    }

    .contact_links a:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .contact_links a.whatsapp {
      background-color: #25D366;
    }

    .contact_links a.instagram {
      background-color: #E4405F;
    }

    .contact_links a.tiktok {
      background-color: #000000;
    }

    .contact_links a i {
      margin-right: 10px;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section starts -->
    @include('home.header')

    <section class="contact_section">
      <h2>Kontak Kami</h2>
      <ul class="contact_links">
        <li>
          <a href="https://wa.me/+6281243181159" class="whatsapp" target="_blank" rel="noopener noreferrer">
            <i class="fa fa-whatsapp"></i> WhatsApp
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/mujib_seven?igsh=MTJyam93YTF4OHZldg==" class="instagram" target="_blank" rel="noopener noreferrer">
            <i class="fa fa-instagram"></i> Instagram
          </a>
        </li>
        <li>
          <a href="https://www.tiktok.com/@moejibs2?_t=ZS-8tR15MUHZkA&_r=1" class="tiktok" target="_blank" rel="noopener noreferrer">
            <i class="fa fa-music"></i> TikTok
          </a>
        </li>
      </ul>
    </section>

    @include('home.footer')
  </div>

  <!-- Add FontAwesome Icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>
