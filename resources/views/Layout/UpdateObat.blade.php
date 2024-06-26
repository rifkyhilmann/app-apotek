@extends('pages/pagesAdmin')

@section('content')
<div class="min-h-80 w-full bg-white mt-2 flex flex-col items-center ">
    <div class="w-full h-max min-h-20  flex flex-col">
        <div class="w-full h-16  flex items-center ml-10 mb-3 mt-3">
            <p class="text-lg">Update Data Obat</p>
        </div>
        <form action="{{ route('admin.ProductUpdateSubmit', $obat->id) }}" method="post" class="w-full flex flex-col items-center gap-3 mb-10">
            @csrf
            <input value="{{ $obat->kode_obat }}" type="text" name="kode_obat" class="w-9/12 bg-gray-100 border-1 text-sm h-10 indent-2 border-gray-200 border focus:outline-blue-400"  >
            <input value="{{ $obat->nama_obat }}" type="text" name="nama_obat" class="w-9/12 bg-gray-100 border-1 text-sm h-10 indent-2 border-gray-200 border focus:outline-blue-400"  >
            <input value="{{ $obat->jenis_obat }}" type="text" name="jenis_obat" class="w-9/12 bg-gray-100 border-1 text-sm h-10 indent-2 border-gray-200 border focus:outline-blue-400"  >
            <input value="{{ $obat->harga }}" type="text" name="harga" class="w-9/12 bg-gray-100 border-1 text-sm h-10 indent-2 border-gray-200 border focus:outline-blue-400"  >
            <button class="w-9/12 rounded h-10 bg-blue-400 mt-4 text-white font-bold hover:bg-blue-300">Submit</button>
        </form>
    </div>
    
</div>
@endsection