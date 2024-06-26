@extends('pages/pagesAdmin')

@section('content')
<div class="min-h-80 w-full mt-2 flex flex-col items-center">
    <div class="flex items-center h-12 w-full gap-3">
        <p class="text-lg ml-3">Product</p>
    </div>
    <div class="w-11/12 h-max min-h-20 flex flex-col">
        <div class="w-full h-10 flex items-center justify-end mb-4">
            <a href="{{route('admin.ProductTambah')}}" class="w-40 rounded hover:bg-blue-200 text-white justify-center font-bold h-10 bg-blue-400 flex items-center">
                Tambah Obat
            </a>
        </div>
        <div class="overflow-x-auto w-full mb-10">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2">Kode Obat</th>
                        <th class="px-4 py-2">Nama Obat</th>
                        <th class="px-4 py-2">Jenis Obat</th>
                        <th class="px-4 py-2">Harga</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($obat as $no => $data)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $no+1 }}</td>
                        <td class="px-4 py-2">{{ $data->kode_obat }}</td>
                        <td class="px-4 py-2">{{ $data->nama_obat }}</td>
                        <td class="px-4 py-2">{{ $data->jenis_obat }}</td>
                        <td class="px-4 py-2">{{ $data->harga }}</td>
                        <td class="px-4 py-2 flex gap-2">
                            <a href="{{route('admin.ProductUpdate', $data->id )}}" class="h-10 w-20 bg-green-400 text-white flex items-center justify-center rounded">Update</a>
                            <form action="{{ route('admin.DeleteObat', $data->id) }}" method="post">
                                @csrf 
                                <button class="h-10 w-20 bg-red-400 text-white flex items-center justify-center rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
