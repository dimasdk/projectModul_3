<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Pengguna') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <a href="{{ route('user.registrasi') }}" class="btn btn-icon btn-dark">Tambah</a><br><br>
                    <table class="min-w-full table-auto">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border px-4 py-2">#</th>
                                <th class="border px-4 py-2">Nama</th>
                                <th class="border px-4 py-2">Username</th>
                                <th class="border px-4 py-2">Email</th>
                                <th class="border px-4 py-2">View</th>

                                <!-- <th class="border px-4 py-2">Waktu Daftar</th>!
                                <th class="border px-4 py-2">Nomor Telepon</th>
                                <th class="border px-4 py-2">Tanggal Lahir</th>
                                <th class="border px-4 py-2">Agama</th>
                                <th class="border px-4 py-2">Jenis Kelamin</th>
                                <th class="border px-4 py-2">Alamat</th>-->
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $key => $user)
                            <tr>
                                <td class="border px-4 py-2">{{ $key + 1 }}</td>
                                <td class="border px-4 py-2">{{ $user->fullname }}</td>
                                <td class="border px-4 py-2">{{ $user->username }}</td>
                                <td class="border px-4 py-2">{{ $user->email }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('user.infoPengguna', $user->username) }}" class="btn btn-icon btn-sm btn-dark"><svg xmlns="" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a>
                                </td>
                               
                            <!--  <td class="border px-4 py-2">{{ $user->created_at }}</td>
                            <td class="border px-4 py-2">{{ $user->phoneNumber }}</td>
                            <td class="border px-4 py-2">{{ $user->address }}</td>
                            <td class="border px-4 py-2">{{ $user->birthdate }}</td>
                            <td class="border px-4 py-2">{{ $user->religion }}</td>
                            <td class="border px-4 py-2">{{ $user->gender == 0 ? 'Perempuan' : 'Laki-laki' }}</td>
                            
                                 !-->
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
