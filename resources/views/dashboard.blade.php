<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-2 text-2xl">
                        Hafiz Trans Tour & Travel
                    </div>
                    <div class="mt-4 text-gray-500">
                        Adalah sebuah usaha travel agent yang awalnya sebagai sub agent yang kini menjadi sebuah perusahaan yang dikenal di nusantara. Berkat keyakinan dan kegigihan Ibnu Hafiz usaha ini berhasil mengubah usaha yanang berada di sebuah kios kecil di tangerang selatan menjadi usaha yang menawarkan paket kemitraan. 
                    </div>
                </div>
                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Sejarah</div>
                        </div>
                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                                Hafiz Trans yang dulunya melayani penyewaan transportasi darat yaitu bus parawisata, sekarang sudah menambah varian produk layanannya. Produk Tersebut adalah Paket Wisata untuk domestik dan internasional, Paket Umrah/Haji Plus dan Voucher Hotel, sehingga Bonita menjadi bisnis Tour & Travel dengan konsep One Stop Service.
                            </div>
                        </div>
                    </div>
                    <div class="p-6 border-gray-200 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M10,1.375c-3.17,0-5.75,2.548-5.75,5.682c0,6.685,5.259,11.276,5.483,11.469c0.152,0.132,0.382,0.132,0.534,0c0.224-0.193,5.481-4.784,5.483-11.469C15.75,3.923,13.171,1.375,10,1.375 M10,17.653c-1.064-1.024-4.929-5.127-4.929-10.596c0-2.68,2.212-4.861,4.929-4.861s4.929,2.181,4.929,4.861C14.927,12.518,11.063,16.627,10,17.653 M10,3.839c-1.815,0-3.286,1.47-3.286,3.286s1.47,3.286,3.286,3.286s3.286-1.47,3.286-3.286S11.815,3.839,10,3.839 M10,9.589c-1.359,0-2.464-1.105-2.464-2.464S8.641,4.661,10,4.661s2.464,1.105,2.464,2.464S11.359,9.589,10,9.589"></path></svg>
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Lokasi</div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                                Hafiz Trans berlokasi di tangerang selatan, tepatnya di Jl. H. Jamat Gg. Rais 39, Buaran, Kec. Serpong, Kota Tangerang Selatan, Banten 15310, Indonesia
                            </div>
                        </div>
                    </div>
                    <div class="p-6 border-t border-gray-200 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Visi</div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                                Menjadi perusahaan terdepan dan terbesar di Indonesia dalam bidang jasa pelayanan pariwisata dengan kualitas pelayanan terbaik yang dapat memberikan kontribusi nyata bagi masyarakat dan lingkungan sekitarnya
                            </div>
                        </div>
                    </div>
                    <div class="p-6 border-t border-gray-200 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400">
							    <path d="M17.431,2.156h-3.715c-0.228,0-0.413,0.186-0.413,0.413v6.973h-2.89V6.687c0-0.229-0.186-0.413-0.413-0.413H6.285c-0.228,0-0.413,0.184-0.413,0.413v6.388H2.569c-0.227,0-0.413,0.187-0.413,0.413v3.942c0,0.228,0.186,0.413,0.413,0.413h14.862c0.228,0,0.413-0.186,0.413-0.413V2.569C17.844,2.342,17.658,2.156,17.431,2.156 M5.872,17.019h-2.89v-3.117h2.89V17.019zM9.587,17.019h-2.89V7.1h2.89V17.019z M13.303,17.019h-2.89v-6.651h2.89V17.019z M17.019,17.019h-2.891V2.982h2.891V17.019z"></path>
						    </svg>
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Misi</div>
                        </div>
                        <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500">
                                <ol>Menjadi perusahaan penyedia layanan transportasi dengan kualitas layanan prima.</ol>
                                <ol>Menjadi perusahaan yang selalu up to date dalam memberikan kenyamanan dan keamanan penumpang yang akan melakukan perjalananan.</ol>
                                <ol>Menjadi perusahaan yang selalu respect terhadap karyawan, lingkungan dan masyarakat sekitarnya.</ol>
                                <ol>Mengedepankan kepuasan, menggaransi uang pembelian tiket kembali apabila terjadi kelalaian pada kami, dengan komitmen itulah kami melakukakan perbaikan terus-menerus.</ol>
                                <ol>Menjadi perusahaan layanan jasa one stop service for tour and travel yang tangguh dan unggul dengan jaringan mitra kerja yang luas.</ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
