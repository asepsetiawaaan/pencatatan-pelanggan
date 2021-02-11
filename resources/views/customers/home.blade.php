<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pelanggan
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
                            <li class="nav-item"><a class="nav-link active" id="item-1-1-tab" data-toggle="tab" role="tab" aria-controls="item-1-1" aria-selected="true" href="#item-1-1">Input Pelanggan</a></li>
                            <li class="nav-item"><a class="nav-link" id="item-1-2-tab" data-toggle="tab" role="tab" aria-controls="item-1-2" aria-selected="false" href="#item-1-2">Data Pelanggan</a></li>
                            <li class="nav-item"><a class="nav-link" id="item-1-3-tab" data-toggle="tab" role="tab" aria-controls="item-1-3" aria-selected="false" href="#item-1-3">Eksport Pelanggan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div id="nav-tabContent" class="tab-content">
                            <div id="item-1-1" class="tab-pane fade show active" role="tabpanel" aria-labelledby="item-1-1-tab">
                                <form method="post" action="{{ route('customers.create') }}">
                                @csrf <!-- {{ csrf_field() }} -->
                                    <div class="form-group">
                                        <label for="customer_code">ID Pelanggan</label>
                                        <input type="text" class="form-control" name="customer_code" id="customer_code" placeholder="Masukan ID Pelanggan" required>
                                        <small id="emailHelp" class="form-text text-muted">Masukan nik pelanggan sebagai ID</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="customer_name">Nama Pelanggan</label>
                                        <input type="text" class="form-control" name="customer_name" id="customer_name" placeholder="Masukan Nama Pelanggan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="customer_contactperson">Nomor Pelanggan</label>
                                        <input type="text" class="form-control" name="customer_contactperson" id="customer_contactperson" placeholder="Masukan Nomor Pelanggan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="customer_address">Alamat Pelanggan</label>
                                        <textarea class="form-control" id="customer_address" name="customer_address" placeholder="Masukan Alamat Pelanggan" rows="3" style="resize:none" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                            <div id="item-1-2" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-2-tab">
                                <table id="table-pelanggan" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Nomor</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($customers as $post)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td>{{ $post->customer_name }}</td>
                                            <td>{{ $post->customer_contactperson}}</td>
                                            <td>{{ $post->customer_address }}</td>
                                            <td>
                                                <form action="{{ route('customers.destroy',$post) }}" method="POST">
                                                    <a class="btn btn-warning btn-sm" href="{{ route('customers.edit',$post->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div id="item-1-3" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-3-tab">
                                <form>
                                    <div class="form-group">
                                        <label for="limit">Batas Eksport</label>
                                        <select class="form-control" name="limit" id="limit">
                                            <option>10</option>
                                            <option>20</option>
                                            <option>50</option>
                                            <option>100</option>
                                            <option>Semua Data</option>
                                        </select>
                                        <small id="emailHelp" class="form-text text-muted">Batas eksport menentukan jumlah data yang ditarik dari database</small>
                                    </div>
                                    <a href="{{ route('customers.exsport') }}" type="button" class="btn btn-primary">Eksport Data</a >
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
