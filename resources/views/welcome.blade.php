<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-amber-600 flex items-center flex-col">
    <!-- logo -->
    <div class="underline py-5">
        <div class="rounded-full border-solid border-black border-2 h-20 w-20 flex items-center justify-center">logo disini</div>
    </div>
    <!-- sapaan -->
    <p class="text-4xl py-7 sapaan text-amber-900 brightness-50">Selamat datang di Resto Wong Jowo!</p>
    <!-- perkenalan -->
    <div class="bg-amber-800 text-lg rounded p-4 perkenalan text-amber-200 text-center drop-shadow-xl hover:scale-110 transition">
        Kami menyediakan makanan khas Jawa dengan cita rasa yang autentik dan bahan-bahan berkualitas<br>
        Restoran kami menyajikan berbagai hidangan yang pasti akan memuaskan selera Anda<br>
        Kami juga menyediakan layanan pemesanan makanan secara online dan pengiriman ke rumah<br>
        Silakan jelajahi website kami untuk melihat menu lengkap kami dan melakukan pemesanan<br>
        Terima kasih telah memilih Resto Wong Jowo
    </div>
    <!-- user auth box -->
    <div class="pt-10"> <!-- container -->
        <div class="bg-amber-900 p-6 hover:scale-125 transition-transform rounded-xl drop-shadow-2xl">
            <div class="text-amber-200 font-extrabold">
                tunggu apa lagi ayo pergi ke website!
            </div>
            <div class="flex items-center justify-center p-5">
                <a href="{{ URL::route('signin') }}">
                    <div class="mx-2 flex justify-center items-center hover:border-2 hover:border-amber-400 bg-amber-700 drop-shadow-lg rounded-md py-2 px-3 transition-all hover:bg-amber-800 text-amber-400 font-bold hover:brightness-75">sign in</div>
                </a>
                <a href="{{ URL::route('signup') }}">
                    <div class="mx-2 flex justify-center items-center hover:border-2 hover:border-amber-400 bg-amber-700 drop-shadow-lg rounded-md py-2 px-3 transition-all hover:bg-amber-800 text-amber-400 font-bold hover:brightness-75">sign up</div>
                </a>
            </div>
            <div class="text-center text-amber-200 font-extrabold">atau masuk dengan</div>
            <div class="flex justify-center pt-2">
                <a href="{{ URL::route('home') }}">
                    <div class=" text-amber-300 font-bold rounded-md bg-amber-600 hover:bg-amber-700 hover:border-2 hover:border-amber-300 py-2 px-3 drop-shadow-lg transition-all">akun guest</div>
                </a>
            </div>
        </div>
    </div>
</body>

</html>