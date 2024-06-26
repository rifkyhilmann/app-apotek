@extends('pages/pagesAdmin')

@section('content')
<div class="min-h-80 h-max w-full mt-2 flex flex-col items-center">
    <div class="flex items-center h-12 w-full gap-3">
        <p class="text-lg ml-3">Penjualan</p>
    </div>
    <div class="w-11/12 h-max min-h-20 flex flex-col mt-5" >
        <div class="overflow-x-auto w-full mb-10">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2">Username</th>
                        <th class="px-4 py-2">Nama Obat</th>
                        <th class="px-4 py-2">Kode Obat</th>
                        <th class="px-4 py-2">Jumlah Obat</th>
                        <th class="px-4 py-2">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pesanan as $no => $data)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $no+1 }}</td>
                        <td class="px-4 py-2">{{ $data->username }}</td>
                        <td class="px-4 py-2">{{ $data->kode_obat }}</td>
                        <td class="px-4 py-2">{{ $data->nama_obat }}</td>
                        <td class="px-4 py-2">{{ $data->jumlah_obat }}</td>
                        <td class="px-4 py-2">{{ $data->harga  }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="w-full h-10 flex items-center justify-end gap-3 mb-10">
            <p>Pendapatan Total</p>
            <div class="flex items-center justify-start border h-10 w-52">
                <p class="font-bold ml-2"> {{ formatRupiah($totalPendapatan) }} </p>
            </div>
        </div>
    </div>
</div>
@endsection
