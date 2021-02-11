<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Transaksi
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card" style="border: 0px;">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="item-1-1-tab" data-toggle="tab" role="tab" aria-controls="item-1-1" aria-selected="true" href="#item-1-1">Edit Transaksi</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div id="nav-tabContent" class="tab-content">
                            <div id="item-1-1" class="tab-pane fade show active" role="tabpanel" aria-labelledby="item-1-1-tab">
                                <form method="post" action="{{ route('transaksi.update', $Customers->id) }}">
                                @csrf <!-- {{ csrf_field() }} -->
                                    <div class="form-group">
                                        <label for="id_transaksi">No Transaksi</label>
                                        <input type="text" class="form-control" value="{{ $Customers->no_transaksi }}" name="no_transaksi" id="id_transaksi" placeholder="Masukan ID transaksi" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_pelanggan">ID Pelanggan</label>
                                        <input type="text" class="form-control" value="{{ $Customers->customer_code }}" name="id_pelanggan" id="id_pelanggan" placeholder="Masukan ID pelanggan" required>
                                        <small id="emailHelp" class="form-text text-muted">Masukan nik pelanggan sebagai ID</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_transaksi">Tanggal Transaksi</label>
                                        <input type="date" class="form-control" value="{{ $Customers->tanggal_transaksi }}" name="tanggal_transaksi" id="tanggal_transaksi" placeholder="Masukan tanggal transaksi" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nominal_transaksi">Nominal transaksi</label>
                                        <input type="text" class="form-control" value="{{ $Customers->nominal_transaksi }}"  name="nominal_transaksi" id="nominal_transaksi" placeholder="Masukan Nominal Transaksi" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
