@extends('pages/pagesUser')

@section('content')
<div class="min-h-80 w-full b mt-2 flex flex-col items-center ">
    <div class="w-full h-16 flex items-center">
        <p class="text-lg">List Obat</p>
    </div>
    <div class="w-11/12 h-max min-h-20 flex flex-col">
        <div class="overflow-x-auto w-full mb-10">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2">Nama Obat</th>
                        <th class="px-4 py-2">Jenis Obat</th>
                        <th class="px-4 py-2">Harga</th>
                        <th class="px-4 py-2">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($obat as $no => $data)
                    <form action="{{ route('user.productTambahKeranjang', $data->nama_obat) }}" method="post">
                        @csrf
                        <tr class="border-b">
                            <td class="px-4 py-2">{{ $no+1 }}</td>
                            <td class="px-4 py-2">{{ $data->nama_obat }}</td>
                            <td class="px-4 py-2">{{ $data->jenis_obat }}</td>
                            <td class="px-4 py-2">{{ $data->harga }}</td>
                            <td class="px-4 py-2">
                                <input type="number" name="jumlah_obat" class="w-16 border text-center">
                            </td>
                            <td class="px-4 py-2">
                                <button class="h-10 w-20 bg-green-400 text-white">
                                        Beli
                                </button>
                            </td>
                        </tr>
                    </form>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
