<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-amber-600 flex justify-center items-center">
    <!-- signin box -->
    <form class="bg-white rounded-xl h-3/4 w-2/4 flex flex-col space-y-11 justify-center items-center shadow-md hover:shadow-xl transition-shadow">
        <!-- email/item 0 -->
        <div class="flex flex-col items-center">
            <label for="nama">Email</label>
            <input type="email" name="email" id="email" placeholder="contoh@mail.com" class="outline-none bg-gray-300 rounded-md p-5 focus:bg-gray-500 drop-shadow focus:drop-shadow-lg focus:scale-110 transition-all">
        </div>
        <!-- password/item 1 -->
        <div class="flex flex-col items-center">
            <label for="nama">Password</label>
            <input type="password" name="pass" id="pass" placeholder="password akunmu" class="outline-none bg-gray-300 rounded-md p-5 focus:bg-gray-500 drop-shadow focus:drop-shadow-lg focus:scale-110 transition-all">
        </div>
        <!-- lupa pass/item 4 -->
        <div class="hover:scale-110 transition-all">
            <a href="">lupa password?</a>
        </div>
        <!-- submit/item 3 -->
        <button type="submit" class="bg-amber-700 text-amber-200 hover:bg-amber-900 transition w-fit rounded-lg p-4 shadow-md hover:shadow-xl hover:scale-110">Sign Up</button>
    </form>
</body>

</html>