<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>Alfaratha Store</title>
</head>
<body class="bg-gray-200 text-black" style="font-family: roboto">
  <!-- Navbar -->
  <nav class="fixed top-0 left-0 right-0 z-50 bg-black bg-opacity-80 border-b border-yellow-600 px-4 md:px-8 py-6 flex justify-between items-center">
    <a href="#" class="text-white italic font-bold text-lg md:text-2xl" style="font-family: sans-serif">Alfaratha<span class="text-yellow-600">Store</span></a>
    
    <!-- Desktop Menu (hidden on mobile) -->
    <div class="hidden md:flex space-x-8">
      <a href="#home" class="text-white text-lg hover:text-yellow-600">Home</a>
      <a href="#about" class="text-white text-lg hover:text-yellow-600">About</a>
      <a href="#products" class="text-white text-lg hover:text-yellow-600">Products</a>
      <a href="#contact" class="text-white text-lg hover:text-yellow-600">Contact</a>
      <a href="/admin" class="text-white text-lg hover:text-yellow-600 mt-4">Login Admin</a>
    </div>
  
    <!-- Mobile Menu Button -->
    <div class="md:hidden">
      <button id="menu-toggle" class="text-white text-lg hover:text-yellow-600 focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </div>
  </nav>

  <!-- Overlay (hidden by default) -->
  <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-30"></div>

  <!-- Side Menu (hidden by default) -->
  <div id="side-menu" class="fixed top-0 right-0 w-64 h-full bg-black bg-opacity-90 z-40 transform translate-x-full transition-transform duration-300 ease-in-out">
    <div class="p-6">
        <button id="close-menu" class="text-white text-lg hover:text-yellow-600 focus:outline-none mb-8">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <a href="#home" class="block text-white text-lg mb-4 hover:text-yellow-600">Home</a>
        <a href="#about" class="block text-white text-lg mb-4 hover:text-yellow-600">About</a>
        <a href="#products" class="block text-white text-lg mb-4 hover:text-yellow-600">Products</a>
        <a href="#contact" class="block text-white text-lg mb-4 hover:text-yellow-600">Contact</a>
        <a href="/admin" class="text-white text-lg hover:text-yellow-600 mt-4">Login Admin</a>
    </div>
  </div>

  <!-- Hero Section -->
  <section id="home" class="min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('../img/header-main-bg.jpg');">
    <div class="max-w-4xl text-center">
      <h1 class="text-4xl md:text-6xl font-bold text-gray-800">Selamat Datang di <span class="text-yellow-600">Toko Kami</span></h1>
      <p class="text-lg md:text-2xl mt-4 text-gray-800">Menyediakan berbagai macam oleh-oleh haji dan umroh.</p>
      <a href="#products" class="mt-6 inline-block bg-yellow-600 text-white py-3 px-6 rounded hover:bg-yellow-700">Beli Yuk</a>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-20 px-8 bg-white">
    <h2 class="text-center text-3xl font-bold mb-12">Tentang <span class="text-yellow-600">Kami</span></h2>
    <div class="md:flex md:space-x-10">
      <div class="md:w-1/2">
        <img src="/images/alfaratha.png" alt="About Image" class="w-full rounded" />
      </div>
      <div class="md:w-1/2 mt-6 md:mt-0">
        <p class="text-gray-700 leading-7">Alfaratha Store merupakan sebuah toko bagi para jamaah haji dan umroh yang mencari oleh-oleh khas. Di sini, pengunjung dapat menemukan berbagai macam produk berkualitas, mulai dari kurma yang manis dan lezat, air zam zam yang penuh berkah, hingga kismis yang kaya nutrisi. Selain itu, tersedia juga kacang dan almond yang menjadi camilan sehat dan nikmat untuk dibawa pulang. Setiap produk dipilih dengan cermat untuk memastikan keaslian dan cita rasanya.</p>
        <p class="text-gray-700 leading-7 mt-3">Tidak hanya menawarkan berbagai pilihan oleh-oleh, Alfaratha Store juga memberikan pengalaman belanja yang nyaman dan ramah. Staf yang berpengalaman siap membantu pengunjung dalam memilih oleh-oleh yang tepat sesuai kebutuhan. Dengan suasana yang hangat dan penuh keakraban, Alfaratha Store bukan hanya sekadar tempat berbelanja, tetapi juga menjadi bagian dari perjalanan spiritual yang tak terlupakan bagi setiap jamaah.</p>
      </div>
    </div>
  </section>

  <!-- Products Section -->
  <section id="products" class="py-20 bg-gray-50">
    <h2 class="text-center text-3xl font-bold mb-4 md:mb-8">Produk <span class="text-yellow-600">Kami</span></h2>
    <div class="flex flex-wrap justify-center gap-4 md:gap-6">
      @foreach ($products as $product)
      <div class="w-[300px] h-[300px] md:w-1/4 px-6 text-center rounded-full mb-2 md:mb-4">
        <img src="{{ Storage::url($product->image) }}" class="w-1/2 h-1/2 md:w-3/4 md:h-3/4 object-fit rounded-full mx-auto mb-2 md:mb-4 transform hover:scale-105 transition-transform duration-300" alt="{{ $product->name }}" />
        <h3 class="text-xl font-bold">- {{ $product->name }} -</h3>
        <p class="text-lg text-yellow-600">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
      </div>
      {{-- @dd($products); --}}
      @endforeach
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="p-20 bg-white">
    <h2 class="text-center text-3xl font-bold mb-8">Hubungi <span class="text-yellow-600">Kami</span></h2>
    <div class="flex flex-col md:flex-row items-start justify-center md:space-x-10">
      <iframe class="md:w-1/2 w-full h-80 rounded" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d247.12065099873277!2d110.6395953223239!3d-7.690617166681025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1674222984599!5m2!1sid!2sid"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
      <form class="md:w-1/2 w-full mt-8 md:mt-0 bg-gray-100 p-8 rounded" onsubmit="sendWhatsAppMessage(event)">
        <div class="mb-4">
          <input type="text" id="nama" class="w-full p-4 rounded border border-gray-400" placeholder="Tulis Nama" required />
        </div>
        <div class="mb-4">
          <textarea id="pesan" class="w-full p-4 rounded border border-gray-400" placeholder="Tulis Pesan" rows="5" required></textarea>
        </div>
        <button type="submit" class="w-full bg-yellow-600 text-white py-4 rounded hover:bg-yellow-700">Kirim Pesan ke WhatsApp</button>
      </form>
      
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-yellow-600 py-8 text-center">
    <div class="text-white mb-4">
      <a href="#" class="mx-2 hover:text-black">Privacy Policy</a>
      <a href="#" class="mx-2 hover:text-black">Terms of Service</a>
    </div>
    <p class="text-white">&copy; 2024 Alfaratha Store</p>
  </footer>

  <script>
    function sendWhatsAppMessage(event) {
      event.preventDefault(); // Mencegah pengiriman form default
  
      const nama = document.getElementById('nama').value;
      const pesan = document.getElementById('pesan').value;
      
      // Membuat URL WhatsApp
      const whatsappURL = 
      `https://wa.me/+6281554431137?text=Nama:${encodeURIComponent(nama)}%0APesan:{encodeURIComponent(pesan)}`;
  
      // Buka URL WhatsApp
      window.open(whatsappURL, '_blank');
    }

    const menuToggle = document.getElementById('menu-toggle');
    const sideMenu = document.getElementById('side-menu');
    const overlay = document.getElementById('overlay');

    // Function to open the side menu
    function openMenu() {
        sideMenu.classList.remove('translate-x-full');
        overlay.classList.remove('hidden');
    }

    // Function to close the side menu
    function closeMenu() {
        sideMenu.classList.add('translate-x-full');
        overlay.classList.add('hidden');
    }

    // Toggle the side menu when the menu button is clicked
    menuToggle.addEventListener('click', (e) => {
        e.stopPropagation();
        if (sideMenu.classList.contains('translate-x-full')) {
        openMenu();
        } else {
        closeMenu();
        }
    });

    // Close the side menu when clicking outside the menu (on the overlay or anywhere else)
    overlay.addEventListener('click', () => {
        closeMenu();
    });

    // Close the side menu if clicking anywhere outside the menu (including the body)
    document.addEventListener('click', (e) => {
        if (!sideMenu.contains(e.target) && !menuToggle.contains(e.target)) {
        closeMenu();
        }
    });

    // Prevent clicks inside the side menu from closing it
    sideMenu.addEventListener('click', (e) => {
        e.stopPropagation();
    });
  </script>
</body>
</html>
