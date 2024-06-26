@extends('pages/pagesUser')

@section('content')
<div class="w-full h-max mt-2">
    <div class="flex items-center h-12 w-full gap-3">
        <p class="text-lg ml-3">Dashboard</p>
    </div>
    <div class="w-full h-max flex flex-wrap justify-center gap-4 mt-5 ">
        <div class="bg-blue-400 rounded h-48 w-96 shadow-md grid grid-cols-2 text-white">
            <div class="flex items-center justify-center">
                <img src={{asset('icons/user.png')}} alt="" class="h-28 w-28">
            </div>
            <div class="flex flex-col items-center justify-center gap-2">
                <p class="text-xl">{{ $jumlahUser }}</p>
                <p>User terdaftar</p>
            </div>
        </div>
        <div class="bg-red-400 rounded h-48 w-96 shadow-md grid grid-cols-2 text-white">
            <div class="flex items-center justify-center">
                <img src={{asset('icons/obat.png')}} alt="" class="h-28 w-28">
            </div>
            <div class="flex flex-col items-center justify-center gap-2">
                <p class="text-xl">{{$jumlahObat}}</p>
                <p>Jumlah Obat</p>
            </div>
        </div>
        <div class="bg-yellow-400 rounded h-48 w-96 shadow-md grid grid-cols-2 text-white">
            <div class="flex items-center justify-center">
                <img src={{asset('icons/order.png')}} alt="" class="h-28 w-28">
            </div>
            <div class="flex flex-col items-center justify-center gap-2">
                <p class="text-xl">{{ $pesanan}}</p>
                <p>Pesanan</p>
            </div>
        </div>

    </div>
</div>
@endsection