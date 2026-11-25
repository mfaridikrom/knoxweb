@extends('masterlayout')

@section('title', 'UTS Pem Web')

@section('content')
    {{-- Alert sukses --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Alert error validasi --}}
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Grid Kartu Biodata --}}
    <div class="row row-cols-1 row-cols-md-3 g-4">
        {{-- Kartu Tambah (+) --}}
        <div class="col">
            <div class="card h-100 shadow-sm border-light-subtle rounded-3 d-flex align-items-center justify-content-center add-card"
                data-bs-toggle="modal" data-bs-target="#modalTambah" role="button" aria-label="Tambah Biodata">
                <div class="btn-plus-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="none"
                        viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2.2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- Daftar Kartu Biodata --}}
        @foreach ($biodatas as $item)
            <div class="col">
                <div class="card h-100 shadow-sm border-light-subtle rounded-3 overflow-hidden">
                    <img src="{{ $item->foto_url }}" class="card-img-top biodata-img" alt="{{ $item->nama }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold mb-1">{{ $item->nama }}</h5>
                        <p class="card-text text-secondary small mb-4">{{ $item->deskripsi }}</p>

                        <div class="mt-auto pt-3 border-top d-flex gap-2">
                            <button type="button" class="btn btn-outline-primary btn-sm btn-edit"
                                data-bs-toggle="modal" data-bs-target="#modalEdit"
                                data-action="{{ route('biodata.update', $item) }}"
                                data-nama="{{ $item->nama }}"
                                data-deskripsi="{{ $item->deskripsi }}">
                                Edit
                            </button>

                            <form action="{{ route('biodata.destroy', $item) }}" method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus biodata ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Modal Tambah Biodata --}}
    <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ route('biodata.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTambahLabel">Tambah Biodata</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="tambahNama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="tambahNama" name="nama" required
                                placeholder="Contoh: rizki eka prasodjo">
                        </div>
                        <div class="mb-3">
                            <label for="tambahDeskripsi" class="form-label">Deskripsi / NIM & Tugas</label>
                            <textarea class="form-control" id="tambahDeskripsi" name="deskripsi" rows="3" required
                                placeholder="Contoh: 12.11.5866 merupakan master dari uts ini..."></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="tambahFoto" class="form-label">Upload Foto (opsional)</label>
                            <input type="file" class="form-control" id="tambahFoto" name="foto" accept="image/*">
                        </div>
                        <div class="mb-3">
                            <label for="tambahFotoUrl" class="form-label">Atau Link URL Foto (opsional)</label>
                            <input type="url" class="form-control" id="tambahFotoUrl" name="foto_url"
                                placeholder="https://...">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Modal Edit Biodata --}}
    <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form id="formEdit" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditLabel">Edit Biodata</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="editNama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="editNama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="editDeskripsi" class="form-label">Deskripsi / NIM & Tugas</label>
                            <textarea class="form-control" id="editDeskripsi" name="deskripsi" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editFoto" class="form-label">Ganti Foto (opsional)</label>
                            <input type="file" class="form-control" id="editFoto" name="foto" accept="image/*">
                        </div>
                        <div class="mb-3">
                            <label for="editFotoUrl" class="form-label">Atau Ganti Link URL Foto (opsional)</label>
                            <input type="url" class="form-control" id="editFotoUrl" name="foto_url"
                                placeholder="https://...">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.querySelectorAll('.btn-edit').forEach(function (button) {
            button.addEventListener('click', function () {
                document.getElementById('formEdit').action = this.dataset.action;
                document.getElementById('editNama').value = this.dataset.nama;
                document.getElementById('editDeskripsi').value = this.dataset.deskripsi;
                document.getElementById('editFoto').value = '';
                document.getElementById('editFotoUrl').value = '';
            });
        });
    </script>
@endpush
