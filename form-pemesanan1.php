<?php
$hotel = isset($_GET['hotel']) ? $_GET['hotel'] : 'Tidak Diketahui';
$description = isset($_GET['description']) ? $_GET['description'] : 'Deskripsi tidak tersedia.';
$price = isset($_GET['price']) ? $_GET['price'] : 'Harga tidak tersedia.';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pemesanan Kamar</title>
    
    <link rel="stylesheet" href="./css/style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
    <header class="bg-black">

        <h1 class="title"><a href="#">TheVillas</a></h1>

        <ul class="navmenu">
            <li><a href="#">TheVillas</a></li>
            <li><a href="#our-house">Our Villa</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

        <div class="nav-icon">
            <a href="#"><i class='bx bx-search'></i></a>
            <a href="#"><i class='bx bx-user'></i></a>
            <a href="#"><i class='bx bx-cart'></i></a>

            <div class="bx bx-menu" id="menu-icon"></div>
        </div>


    </header>
    <br>
    <br>
    <!-- Main Content -->
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-10">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Form Pemesanan Kamar</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Hotel Details -->
             
            <div class="space-y-4">
            <img src="https://i.imgur.com/QYWAcXk.jpeg" alt="Hotel Image" class="rounded-lg shadow-md mt-4">
                <h2 class="text-2xl font-semibold text-gray-800">Hotel: <?php echo htmlspecialchars($hotel); ?></h2>
                <p class="text-gray-600"><?php echo htmlspecialchars($description); ?></p>
                <p class="text-lg font-medium text-green-600">Harga: Rp <?php echo number_format($price, 0, ',', '.'); ?> / malam</p>

                <!-- Review Stars -->
                <div class="flex items-center">
                    <span class="text-yellow-400">&#9733;</span>
                    <span class="text-yellow-400">&#9733;</span>
                    <span class="text-yellow-400">&#9733;</span>
                    <span class="text-gray-300">&#9733;</span>
                    <span class="text-gray-300">&#9733;</span>
                    <span class="ml-2 text-sm text-gray-500">(4/5)</span>
                </div>

                <!-- Hotel Image -->
               
            </div>

            <!-- Booking Form -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md">
            <form id="bookingForm" action="#" method="GET">
    <!-- Hidden inputs untuk data -->
    <input type="hidden" name="hotel" value="<?php echo htmlspecialchars($hotel); ?>" />
    <input type="hidden" name="description" value="<?php echo htmlspecialchars($description); ?>" />
    <input type="hidden" name="price" value="<?php echo htmlspecialchars($price); ?>" />
    
    <!-- Form fields untuk detail pengguna -->
    <div class="space-y-4">
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" id="name" name="name" required class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" />
        </div>
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" required class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" />
        </div>
        <div>
            <label for="checkin" class="block text-sm font-medium text-gray-700">Tanggal Check-In</label>
            <input type="date" id="checkin" name="checkin" required class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" />
        </div>
        <div>
            <label for="checkout" class="block text-sm font-medium text-gray-700">Tanggal Check-Out</label>
            <input type="date" id="checkout" name="checkout" required class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" />
        </div>
        <div>
            <label for="guests" class="block text-sm font-medium text-gray-700">Jumlah Orang</label>
            <input type="number" id="guests" name="guests" min="1" required class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" />
        </div>
    </div>
    <div class="mt-6">
        <button type="button" id="submitBtn" class="w-full py-3 px-6 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700 transition duration-300">
            Pesan Kamar
        </button>
    </div>
</form>

            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white py-6 mt-10">
        <div class="max-w-6xl mx-auto text-center">
            <p>&copy; 2024 Hotel XYZ. All Rights Reserved.</p>
        </div>
    </footer>
    <script>
    document.getElementById('submitBtn').addEventListener('click', function () {
        // Ambil nilai dari form
        var hotel = "<?php echo htmlspecialchars($hotel); ?>";
        var description = "<?php echo htmlspecialchars($description); ?>";
        var price = "<?php echo htmlspecialchars($price); ?>";
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var checkin = document.getElementById('checkin').value;
        var checkout = document.getElementById('checkout').value;
        var guests = document.getElementById('guests').value;

        // Buat pesan untuk WhatsApp
        var message = "Halo, saya ingin memesan kamar di " + hotel + ".\n";
        message += "Deskripsi: " + description + "\n";
        message += "Harga: Rp " + price + " / malam\n";
        message += "Nama: " + name + "\n";
        message += "Email: " + email + "\n";
        message += "Tanggal Check-In: " + checkin + "\n";
        message += "Tanggal Check-Out: " + checkout + "\n";
        message += "Jumlah Orang: " + guests;

        // Encode pesan untuk URL
        var encodedMessage = encodeURIComponent(message);

        // Buat URL WhatsApp
        var whatsappURL = "https://wa.me/+6288225089622?text=" + encodedMessage;

        // Redirect ke WhatsApp
        window.location.href = whatsappURL;
    });
</script>

</body>
</html>
