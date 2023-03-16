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
                <i class="group-hover:bg-yellow-700 group-hover:underline p-2 rounded-tr-md rounded-tl-md fa fa-user scale-110"></i>
                <div class="hidden group-hover:block fixed h-fit w-32 bg-yellow-700 rounded-tr-md rounded-br-md rounded-bl-md p-2 drop-shadow-sm scale-105 rounded-tl">
                    <div class="flex flex-col space-y-2 m-2">
                        <a href="{{ URL::route('signin') }}" class="hover:scale-110 transition-all shadow hover:shadow-md border-solid hover:border-2 border-yellow-600 bg-yellow-800 hover:brightness-125 rounded">
                            <p class=" p-2  text-amber-200">
                                signin
                            </p>
                        </a>
                        <a href="{{ URL::route('signup') }}" class="hover:scale-110 transition-all shadow hover:shadow-md border-solid hover:border-2 border-yellow-600 bg-yellow-800 hover:brightness-125 rounded">
                            <p class="p-2 text-amber-200">
                                signup
                            </p>
                        </a>

                    </div>
                </div>
            </div>
            <!-- item 2 -->
            <a href="{{ URL::route('home') }}" class="text-amber-200 transition-all">
                <i class="fa fa-home scale-125"></i>
            </a>
            <!-- item 3 -->
            <div class="text-amber-200 transition-all group">
                <p class="group-hover:bg-yellow-700 group-hover:underline p-2  rounded-md">test</p>
                <p class="hidden group-hover:block fixed h-32 w-32 bg-yellow-700 rounded-md p-2 drop-shadow-sm">testing2</p>
            </div>
            <!-- item 4 -->
            <a href="{{ URL::route('home') }}" class=""><i class="fa fa-headset scale-110 text-amber-200"></i></a>
        </div>
        <!-- bagian kanan -->
        <div class="ml-auto pr-5">
            <a href="" class="">
                <i class="fa fa-cart-plus scale-150 text-amber-200"></i>
            </a>
        </div>

    </div>
    <!-- content body -->
    <!-- search box -->
    <div class="bg-white h-12 w-72 rounded-2xl mt-3 ml-auto mr-auto flex items-center overflow-hidden drop-shadow-md border-solid border-2 border-amber-700">
        <!-- search icon/item 0 -->
        <div class="h-24 flex items-center p-3 bg-transparent"><i class="fa fa-search opacity-30 bg-transparent"></i></div>
        <!-- search input/item 1 -->
        <div class="pl-2">
            <input type="search" maxlength="28" name="cari makanan" id="search_0" placeholder="cari makanan" class="outline-none h-full w-full">
        </div>
    </div>
</body>

</html>