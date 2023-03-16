<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-amber-600 flex items-center justify-center">
    <!-- signup box -->
    <form class="bg-white rounded-xl h-fit w-2/4 p-5 flex flex-col space-y-11 justify-center items-center shadow-md hover:shadow-xl transition-shadow">
        <!-- nama/item 0 -->
        <div class="flex flex-col items-center">
            <label for="nama"><i class="fa fa-user"></i> Nama</label>
            <input type="text" name="nama" id="nama" placeholder="nama anda" class="outline-none bg-gray-300 text-gray-800 rounded-md p-5 focus:bg-gray-500 focus:text-gray-200 drop-shadow focus:drop-shadow-lg focus:scale-110 transition-all">
        </div>
        <!-- email/item 1 -->
        <div class="flex flex-col items-center">
            <label for="nama"><i class="fa fa-envelope"></i> Email</label>
            <input type="email" name="email" id="email" placeholder="contoh@mail.com" class="outline-none bg-gray-300 text-gray-800 rounded-md p-5 focus:bg-gray-500 focus:text-gray-200 drop-shadow focus:drop-shadow-lg focus:scale-110 transition-all">
        </div>
        <!-- password/item 2 -->
        <div class="flex flex-col items-center">
            <label for="nama"><i class="fa fa-key"></i> Password</label>
            <input type="password" name="pass" id="pass" placeholder="password yang kuat" class="outline-none bg-gray-300 text-gray-800 rounded-md p-5 focus:bg-gray-500 focus:text-gray-200 drop-shadow focus:drop-shadow-lg focus:scale-110 transition-all">
        </div>
        <!-- konfirmasi password/item 3 -->
        <div class="flex flex-col items-center">
            <label for="nama"><i class="fa fa-check"></i> Konfirmasi Password</label>
            <input type="password" name="pass" id="pass" placeholder="masukan password lagi" class="outline-none bg-gray-300 text-gray-800 rounded-md p-5 focus:bg-gray-500 focus:text-gray-200 drop-shadow focus:drop-shadow-lg focus:scale-110 transition-all">
        </div>
        <!-- submit/item 4 -->
        <button type="submit" class="bg-amber-700 text-amber-200 hover:bg-amber-900 transition w-fit rounded-lg p-4 shadow-md hover:shadow-xl hover:scale-110">Sign Up</button>
    </form>
</body>

</html>