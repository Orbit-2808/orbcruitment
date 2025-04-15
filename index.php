<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orbit Open Recruitment!</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <link rel="icon" type="image/png" href="assets/favicon.png">
</head>
<body class="bg-gray-100">
    <nav class="sticky top-0 z-50 shadow-lg">
        <div class="bg-gradient-to-r from-[#1e3a8a] to-[#f97316] p-6 text-left text-white text-2xl font-bold">
            Orbit Open Recruitment
        </div>
    </nav>
    <main class="mx-[15%] my-10">
        <div class="mt-10 text-center text-3xl font-bold text-gray-800">
            Selamat Datang di Orbit Recruitment!
        </div>
        <div class="mt-5 text-center text-lg text-gray-600">
            If you are interested in applying, please fill out the form below! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis veniam sint enim magni qui expedita distinctio dicta, natus saepe ea voluptatum explicabo sequi iste sed cupiditate officiis similique officia? not reading allat.
        </div>
        <div class="mt-10 bg-white p-6 rounded-lg shadow-md" id="reg">
            <div class="text-2xl font-bold text-gray-800">
                Formulir Registrasi
            </div>
            <form action="submit.php" method="POST" class="mt-6 space-y-4">
                <input class="w-full p-2 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#1e3a8a] transition duration-300"
                    required type="text" placeholder="Username" name="username">
                <input class="w-full p-2 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#1e3a8a] transition duration-300"
                    required type="email" placeholder="Email" name="email">
                <input class="w-full p-2 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#1e3a8a] transition duration-300"
                    required type="text" placeholder="Alamat" name="address[street]">
                <select class="w-full p-2 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#1e3a8a] transition duration-300"
                    required name="address[province]" id="province"></select>
                <select class="w-full p-2 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#1e3a8a] transition duration-300"
                    required name="address[city]" id="city"></select>
                <input class="w-full p-2 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#1e3a8a] transition duration-300"
                    required type="text" placeholder="Kecamatan" name="address[district]" id="district">
                <input class="w-full p-2 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#1e3a8a] transition duration-300"
                    required type="text" placeholder="Kelurahan" name="address[subdistrict]" id="subdistrict">
                <div class="flex space-x-4">
                    <input class="w-full p-2 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#1e3a8a] transition duration-300"
                        required type="password" name="password" placeholder="Kata Sandi">
                    <input class="w-full p-2 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#1e3a8a] transition duration-300"
                        required type="password" name="confirm_password" placeholder="Konfirmasi Kata Sandi">
                </div>
    
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md">Daftar</button>
            </form>
            <div class="mt-5 text-center">
                <a href="#" class="reglog text-blue-500 hover:underline">Sudah Mendaftar?</a>
            </div>
        </div>

        <div class="mt-10 bg-white p-6 rounded-lg shadow-md hidden" id="log">
            <div class="text-2xl font-bold text-gray-800">
                Formulir Masuk
            </div>
            <form action="login.php" method="POST" class="mt-6 space-y-4">
                <input class="w-full p-2 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#1e3a8a] transition duration-300"
                    required type="text" placeholder="Username" name="username">
                <input class="w-full p-2 border-2 border-gray-300 rounded-md focus:outline-none focus:border-[#1e3a8a] transition duration-300"
                    required type="password" placeholder="Kata Sandi" name="password">
    
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md">Masuk</button>
            </form>
            <div class="mt-5 text-center">
                <a href="#" class="logreg text-blue-500 hover:underline">Belum Punya Akun?</a>
            </div>
        </div>
    </main>
    <script src="form.js"></script>
</body>
</html>