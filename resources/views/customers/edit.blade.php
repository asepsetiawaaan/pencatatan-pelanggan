<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Pelanggan
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
                            <li class="nav-item"><a class="nav-link active" id="item-1-1-tab" data-toggle="tab" role="tab" aria-controls="item-1-1" aria-selected="true" href="#item-1-1">Edit Pelanggan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div id="nav-tabContent" class="tab-content">
                            <div id="item-1-1" class="tab-pane fade show active" role="tabpanel" aria-labelledby="item-1-1-tab">
                                <form method="post" action="{{ route('customers.update', $Customers->id) }}">
                                @csrf <!-- {{ csrf_field() }} -->
                                    <div class="form-group">
                                        <label for="customer_code">ID Pelanggan</label>
                                        <input type="text" value="{{ $Customers->customer_code }}" class="form-control" name="customer_code" id="customer_code" placeholder="Masukan ID Pelanggan" required>
                                        <small id="emailHelp" class="form-text text-muted">Masukan nik pelanggan sebagai ID</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="customer_name">Nama Pelanggan</label>
                                        <input type="text" value="{{ $Customers->customer_name }}" class="form-control" name="customer_name" id="customer_name" placeholder="Masukan Nama Pelanggan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="customer_contactperson">Nomor Pelanggan</label>
                                        <input type="text" value="{{ $Customers->customer_contactperson }}" class="form-control" name="customer_contactperson" id="customer_contactperson" placeholder="Masukan Nomor Pelanggan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="customer_address">Alamat Pelanggan</label>
                                        <textarea class="form-control" id="customer_address" name="customer_address" placeholder="Masukan Alamat Pelanggan" rows="3" style="resize:none" required>{{ $Customers->customer_address }}</textarea>
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