@extends('layouts.navbar')

@section('halamanclient')

    <!-- Main Content -->
    <div class="row w-100 mx-auto pt-3" style="margin-top: 80px">
        <div class="col-7 px-2 text-white">
            <h3 class="py-2 fw-bold text-white bg-dua text-center rounded-3">
                ANTRIAN RESEP APOTIK
            </h3>
            <div class="d-flex justify-content-center bg-tiga rounded-3 table-responsive custom-shadow" style="max-height: 490px;">
                <table cellpadding="10" cellspacing="1" class="w-100 text-center">
                    <thead class="bg-satu fw-bold fs-5">
                        <tr>
                            <th>Nomor RM</th>
                            <th>Nama Pasien</th>
                            <th>Dokter</th>
                            <th>Asal Pasien</th>
                        </tr>
                    </thead>
                    <tbody class="fw-medium text-dark">
                        @if ($antrianPasien->isNotEmpty())
                            @foreach ($antrianPasien as $data)
                                <tr>
                                    <td>{{ $data->nomor_rm }}</td>
                                    <td class="bt-text">{{ $data->nama_pasien }}</td>
                                    <td class="bt-text">{{ $data->nama_dokter }}</td>
                                    <td>{{ $data->asal_pasien }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4">Tidak ada pasien dalam antrian.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Bagian vidio iklan (Kanan) -->
        <div class="col-5" style="height: 500px">
            <div class="row rounded-4">
                <!-- Sponsor Iklan -->
                <div class="col-12 mb-2 rounded-3" style="height: 345px">
                    <iframe class="w-100 h-100 rounded-3 custom-shadow"
                            src="https://www.youtube.com/embed/-tjdjzg87cs?autoplay=1&mute=1&controls=0"
                            title="YouTube video" allowfullscreen>
                    </iframe>
                </div>

                <!-- Panggilan Antrian -->
                <div class="col-12 rounded-3">
                    <div class="bg-satu text-center w-100 rounded-3 custom-shadow text-white">
                        <h3 class="fw-semibold py-1 rounded-3">PANGGILAN ANTRIAN</h3>
                        <div>
                            @if ($pasienDipanggil)
                                <div class="bg-white py-2 rounded-3 text-dark">
                                    <h2 class="fw-bold">{{ $pasienDipanggil->nama_pasien }}</h2>
                                    <h2 class="fw-bold">{{ $pasienDipanggil->nomor_rm }}</h2>
                                </div>
                            @else
                                <div class="bg-white py-2 rounded-3 text-dark">
                                    <h2 class="fw-bold"> - </h2>
                                    <h2 class="fw-bold"> - </h2>
                                </div>
                            @endif
                        </div>
                        <h3 class="fw-semibold py-1">SIAP UNTUK DIAMBIL</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Bawah -->
    <nav class="fixed-bottom bg-satu p-2 text-white d-flex justify-content-center align-items-center">
        <div class="text-center">
            <span class="fs-8 fw-bold">SELAMAT DATANG DI RUMAH SAKIT MATA MAKASSAR</span>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            function updateAntrian() {
                $.ajax({
                    url: "{{ route('antrian') }}", // Sesuaikan dengan route controller
                    type: "GET",
                    success: function (data) {
                        $("tbody").html($(data).find("tbody").html()); // Update isi tabel
                    }
                });
            }

            setInterval(updateAntrian, 1000); // Update setiap 1 detik
        </script>


@endsection
