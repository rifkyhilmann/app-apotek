@extends('pages/pagesUser')

@section('content')
<div class="min-h-80 w-full  mt-2 flex flex-col items-center ">
    <div class="w-full h-16 flex items-center">
        <p class="text-lg">Keranjang Obat</p>
    </div>
    <div class="w-11/12 h-max min-h-20 flex flex-col">
        <div class="overflow-x-auto w-full mb-10">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Nama Obat</th>
                        <th class="px-4 py-2">Kode Obat</th>
                        <th class="px-4 py-2">Jumlah Obat</th>
                        <th class="px-4 py-2">Harga Satuan</th>
                        <th class="px-4 py-2">Harga Total</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($keranjang as $no => $data)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $data->nama_obat }}</td>
                        <td class="px-4 py-2">{{ $data->kode_obat }}</td>
                        <td class="px-4 py-2">{{ $data->jumlah_obat }}</td>
                        <td class="px-4 py-2">{{ $data->harga  }}</td>
                        <td class="px-4 py-2">{{ $data->harga * $data->jumlah_obat  }}</td>
                        <td class="px-4 py-2 flex gap-1" >
                            <form action="{{ route('user.DeleteKeranjang', $data->id) }}" method="post">
                                @csrf 
                                <button class="h-8 w-16 bg-red-600 text-sm text-white flex items-center justify-center rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <form action="{{ route('user.productCheckout') }}" method="post" class="h-10 w-full  mt-4 flex justify-end items-center ">
                @csrf
                <button class="w-28 h-full bg-blue-400 text-white rounded">Checkout</button>
            </form>

        </div>
    </div>
</div>
@endsection


    
