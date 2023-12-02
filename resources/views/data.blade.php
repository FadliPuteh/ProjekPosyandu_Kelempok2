<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

    .tabs {
        display: flex;
        justify-content: space-around;
        margin-bottom: 16px;
    }

    .tab {
        cursor: pointer;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .tab:hover {
        background-color: #f2f2f2;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Visi & Misi Posyandu') }}
        </h2>
        <h3 class="mt-3">VISI : Menjadikan masyarakat yang sehat, cerdas dan mandiri</h3>
        <h3 class="mt-3">MISI :</h3>
        <h3>1. Kesehatan yang optimal mewujudkan keluarga sehat dan harmoni.</h3>
        <h3>2. Menggalakkan instansi terkait tokoh masyarakat.</h3>
        <h3>3. Meningkatkan masyarakat agar hidup sehat dan bersih.</h3>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="font-semibold text-xl text-gray-800 leading-tight">Silahkan Klik salah satu untuk membuka data :</h1>
                    <div class="mt-16">
                        <div class="tabs">
                            <div class="tab" onclick="showTable('balita')">Balita</div>
                            <div class="tab" onclick="showTable('bumil')">Ibu Hamil</div>
                            <div class="tab" onclick="showTable('lansia')">Lansia</div>
                        </div>
                        <div id="balitaTable" style="display: none;">
                        <h2 class="mb-4 font-semibold text-xl text-gray-800 leading-tight">Daftar Balita</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Umur Balita</th>
                                    <th>Jenis Imunisasi</th>
                                    <th>Nama Orang Tua</th>
                                    <th>Alamat</th>
                                    <th>Hapus Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($balitas as $index => $balita)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $balita->nama }}</td>
                                        <td>{{ $balita->umur_balita }}</td>
                                        <td>{{ $balita->jenis_imunisasi }}</td>
                                        <td>{{ $balita->nama_ortu }}</td>
                                        <td>{{ $balita->alamat }}</td>
                                        <td style="text-align: center;">
                                            <form action={{route('hapus_balita', $balita)}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="inline-block p-6 font-bold rounded-lg bg-gradient-to-r from-green-300 to-red-500 hover:from-red-500 hover:to-red-500">Hapus Data</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                        <div id="bumilTable" style="display: none;">
                        <h2 class="mb-4 font-semibold text-xl text-gray-800 leading-tight">Daftar Ibu Hamil</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>Usia Kandungan</th>
                                    <th>Gejala</th>
                                    <th>Alamat</th>
                                    <th>Hapus Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bumils as $index => $bumil)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $bumil->nama }}</td>
                                        <td>{{ $bumil->umur }}</td>
                                        <td>{{ $bumil->usia_kandungan }}</td>
                                        <td>{{ $bumil->gejala }}</td>
                                        <td>{{ $bumil->alamat }}</td>
                                        <td style="text-align: center;">
                                            <form action={{route('hapus_bumil', $bumil)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="inline-block p-6 font-bold rounded-lg bg-gradient-to-r from-green-300 to-red-500 hover:from-red-500 hover:to-red-500">Hapus Data</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>

                        <!-- Heading for Lansias -->
                        <div id="lansiaTable" style="display: none;">
                        <h2 class="mb-4 font-semibold text-xl text-gray-800 leading-tight">Daftar Lansia</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>Gejala</th>
                                    <th>Alamat</th>
                                    <th>Hapus Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lansias as $index => $lansia)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $lansia->nama }}</td>
                                        <td>{{ $lansia->umur }}</td>
                                        <td>{{ $lansia->gejala }}</td>
                                        <td>{{ $lansia->alamat }}</td>
                                        <td style="text-align: center;">
                                            <form action={{route('hapus_lansia', $lansia)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="inline-block p-6 font-bold rounded-lg bg-gradient-to-r from-green-300 to-red-500 hover:from-red-500 hover:to-red-500">Hapus Data</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showTable(tableName) {
            // Hide all tables
            document.getElementById('balitaTable').style.display = 'none';
            document.getElementById('bumilTable').style.display = 'none';
            document.getElementById('lansiaTable').style.display = 'none';

            // Show the selected table
            document.getElementById(tableName + 'Table').style.display = 'block';
        }
    </script>
</x-app-layout>
