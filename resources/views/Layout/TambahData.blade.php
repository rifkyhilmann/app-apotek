@extends('pages/pagesAdmin')

@section('content')
<div class="min-h-80 w-full bg-white mt-2 flex flex-col items-center ">
    <div class="w-full h-max min-h-20  flex flex-col">
        <div class="w-full h-16  flex items-center ml-10 mb-3 mt-3">
            <p class="text-lg">Tambah Data User</p>
        </div>
        <form action="{{ route('admin.TambahDataUserSubmit') }}" method="post" class="w-full flex flex-col items-center gap-3 mb-10">
            @csrf
            <input type="text" name="nama" class="w-9/12 bg-gray-100 border-1 text-sm h-10 indent-2 border-gray-200 border focus:outline-blue-400" placeholder="Masukan Nama" >
            <input type="text" name="username" class="w-9/12 bg-gray-100 border-1 text-sm h-10 indent-2 border-gray-200 border focus:outline-blue-400" placeholder="Masukan Username" >
            <input type="text" name="password" class="w-9/12 bg-gray-100 border-1 text-sm h-10 indent-2 border-gray-200 border focus:outline-blue-400" placeholder="Masukan Password" >
            <input type="text" name="email" class="w-9/12 bg-gray-100 border-1 text-sm h-10 indent-2 border-gray-200 border focus:outline-blue-400" placeholder="Masukan Email" >
            <input type="text" name="alamat" class="w-9/12 bg-gray-100 border-1 text-sm h-10 indent-2 border-gray-200 border focus:outline-blue-400" placeholder="Masukan Alamat" >
            <input type="text" name="tanggal_lahir" class="w-9/12 bg-gray-100 border-1 text-sm h-10 indent-2 border-gray-200 border focus:outline-blue-400" placeholder="Masukan Tanggal Lahir" >
            <input type="text" name="no_hp" class="w-9/12 bg-gray-100 border-1 text-sm h-10 indent-2 border-gray-200 border focus:outline-blue-400" placeholder="Masukan No Hp" >
            <button class="w-9/12 rounded h-10 bg-blue-400 mt-4 text-white font-bold hover:bg-blue-300">Submit</button>
        </form>
    </div>
    
</div>
@endsection