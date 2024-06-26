@extends('pages/pagesAdmin')

@section('content')
<div class="min-h-80 w-full  mt-2 flex flex-col items-center">
    <div class="w-full h-12 flex items-center">
        <p class="text-lg ml-3">Master Data User</p>
    </div>
    <div class="w-11/12 h-max min-h-20 flex flex-col">
        <div class="w-full h-10 flex items-center justify-end mb-4">
            <a href="{{ route('admin.TambahDataUser') }}" class="w-40 rounded hover:bg-blue-200 text-white justify-center font-bold h-10 bg-blue-400 flex items-center">
                Tambah Data User
            </a>
        </div>
        <div class="overflow-x-auto w-full mb-10">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2">Username</th>
                        <th class="px-4 py-2">Password</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Alamat</th>
                        <th class="px-4 py-2">No Hp</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $no => $data)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $no+1 }}</td>
                        <td class="px-4 py-2">{{ $data->username }}</td>
                        <td class="px-4 py-2">{{ $data->password }}</td>
                        <td class="px-4 py-2">{{ $data->email }}</td>
                        <td class="px-4 py-2">{{ $data->alamat }}</td>
                        <td class="px-4 py-2">{{ $data->no_hp }}</td>
                        <td class="px-4 py-2 flex gap-2">
                            <a href="{{ route('admin.UpdateUser', $data->id) }}" class="h-10 w-20 bg-green-400 text-white flex items-center justify-center rounded">Update</a>
                            <form action="{{ route('admin.DeleteUser', $data->id) }}" method="post">
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
