@extends('pages/pagesUser')

@section('content')
<div class="min-h-80 w-full  mt-2 flex flex-col items-center ">
    <div class="w-full h-16 flex items-center">
        <p class="text-lg">Pesanan</p>
    </div>
    <div class="w-11/12 h-max min-h-20 flex flex-col">
        <div class="overflow-x-auto w-full mb-10">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Nama Obat</th>
                        <th class="px-4 py-2">Jumlah</th>
                        <th class="px-4 py-2">Harga Satuan</th>
                        <th class="px-4 py-2">Harga Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pesanan as $no => $data)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $data->nama_obat }}</td>
                        <td class="px-4 py-2">{{ $data->jumlah_obat }}</td>
                        <td class="px-4 py-2">{{ $data->harga  }}</td>
                        <td class="px-4 py-2">{{ $data->harga * $data->jumlah_obat }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>
</div>
@endsection


    
