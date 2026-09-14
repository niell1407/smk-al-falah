@extends('layouts.app')

@section('title', 'Data Pendaftar | Admin')

@section('content')

<div class="container py-5">

    <div class="text-center mb-5">

        <span class="badge rounded-pill px-3 py-2 mb-3"
              style="background-color: #e8f4ff; color: #1677c8;">
            ADMIN WEBSITE
        </span>

        <h1 class="fw-bold">
            Data Pendaftar
        </h1>

        <p class="text-muted">
            Data minat pendaftaran SMK Al Falah Tanjungjaya
        </p>

    </div>

    @if(session('success'))
        <div class="alert alert-success rounded-4">
            <i class="bi bi-check-circle-fill me-2"></i>
            {{ session('success') }}
        </div>
    @endif

    <div class="card border-0 shadow-sm rounded-4">

        <div class="card-body p-4">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NISN</th>
                            <th>Sekolah Asal</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>No. HP</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($pendaftar as $item)

                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                <td class="fw-semibold">
                                    {{ $item->nama }}
                                </td>

                                <td>
                                    {{ $item->nisn ?? '-' }}
                                </td>

                                <td>
                                    {{ $item->sekolah_asal ?? '-' }}
                                </td>

                                <td>
                                    {{ $item->jenis_kelamin ?? '-' }}
                                </td>

                                <td>
                                    {{ $item->jurusan ?? '-' }}
                                </td>

                                <td>
                                    {{ $item->no_hp ?? '-' }}
                                </td>

                                <td>

                                    <form action="{{ route('admin.pendaftar.destroy', $item->id) }}"
                                          method="POST">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-sm btn-outline-danger rounded-pill"
                                                onclick="return confirm('Yakin ingin menghapus data ini?')">

                                            <i class="bi bi-trash"></i>

                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="8"
                                    class="text-center text-muted py-5">

                                    <i class="bi bi-inbox fs-1 d-block mb-2"></i>

                                    Belum ada data pendaftar.

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection