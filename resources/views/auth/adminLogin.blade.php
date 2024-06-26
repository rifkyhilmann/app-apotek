<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login Admin</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>
<body>
    <div class="flex items-center justify-center h-screen w-full bg-gray-500">
        <div class="w-96 min-h-96 h-max bg-white  shadow-xl flex flex-col items-center">
            <div class="mt-7 h-24 w-24 border border-1 border-blue-400 flex items-center justify-center rounded-full">
                <img src="{{ asset('icons/admin.png') }}" alt="Icon User" class="h-16 w-16">
            </div>
            <p class="text-2xl font-bold mt-2 mb-7">Sign In Admin</p>
            <form action="{{ route('admin.login.submit') }}" method="post" class="w-full flex flex-col items-center gap-3 mb-1">
                @csrf 
                <input type="text" name="username" class="w-9/12 bg-gray-100 border-1 text-sm h-10 indent-2 border-gray-200 border focus:outline-blue-400" placeholder="Masukan Username" >
                <input type="text" name="password" class="w-9/12 bg-gray-100 border-1 text-sm h-10 indent-2 border-gray-200 border focus:outline-blue-400" placeholder="Masukan Password" >
                <button class="w-9/12 rounded h-10 bg-blue-400 mt-4 text-white font-bold hover:bg-blue-300">Login</button>
            </form>
            <div class="mb-5 w-9/12 h-8 flex items-center justify-end text-sm text-blue-400">
                <a href="{{ route('user.login') }}">Sign In User?</a>
            </div>
            <div class="w-full h-10 bg-gray-300 mt-12 flex items-center justify-center gap-1">
                <p class="text-sm text-gray-500">Not a member?</p>
                <a href="{{ route('admin.register') }}" class="font-normal text-blue-400 text-sm">Create Accout</a>
            </div>
        </div>
    </div>
</body>
</html>