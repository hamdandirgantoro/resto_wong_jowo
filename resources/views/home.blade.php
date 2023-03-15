<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-amber-500">
    <!-- navigation bar -->
    <div class="h-20 w-screen bg-yellow-900 flex items-center drop-shadow-lg">
        <!-- bagian kiri -->
        <div class="pl-3 space-x-5 flex items-center">
            <!-- logo brand/item 0 -->
            <div class="h-14 w-14 rounded-full border-solid border-black border-2 flex items-center justify-center">
                LOGO
            </div>
            <!-- item 1 -->
            <div class="text-amber-200 transition-all group">
                <p class="group-hover:bg-yellow-700 group-hover:underline p-2  rounded-md">test</p>
                <p class="hidden group-hover:block fixed h-32 w-32 bg-yellow-700 rounded-md p-2 drop-shadow-sm">testing2</p>
            </div>
            <!-- item 2 -->
            <div class="text-amber-200 transition-all group">
                <p class="group-hover:bg-yellow-700 group-hover:underline p-2  rounded-md">test</p>
                <p class="hidden group-hover:block fixed h-32 w-32 bg-yellow-700 rounded-md p-2 drop-shadow-sm">testing2</p>
            </div>
            <!-- item 3 -->
            <div class="text-amber-200 transition-all group">
                <p class="group-hover:bg-yellow-700 group-hover:underline p-2  rounded-md">test</p>
                <p class="hidden group-hover:block fixed h-32 w-32 bg-yellow-700 rounded-md p-2 drop-shadow-sm">testing2</p>
            </div>
        </div>
        <!-- bagian kanan -->
        <div class="ml-auto pr-5">
            <div class="">pesanan</div>
        </div>

    </div>
    <!-- content body -->


    <!-- search box -->
    <div class="bg-white h-12 w-72 rounded-2xl mt-3 ml-auto mr-auto flex items-center overflow-hidden drop-shadow-md border-solid border-2 border-amber-700">
        <!-- search icon/item 0 -->
        <div class="h-24 border-solid border-r-2 border-amber-700 flex items-center">SRCH</div>
        <!-- search input/item 1 -->
        <div class="pl-2">
            <input type="search" name="cari makanan" id="search_0" placeholder="cari makanan" class="outline-none">
        </div>
    </div>
</body>

</html>