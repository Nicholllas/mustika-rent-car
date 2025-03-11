<x-app-layout>
    <x-slot name="title">Admin</x-slot>
    <x-slot name="header">
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
        {{ __('Promotions') }}
      </h2>
    </x-slot>

    <x-slot name="script">
      <script>
        // AJAX DataTable
        var datatable = $('#dataTable').DataTable({
          processing: true,
          serverSide: true,
          stateSave: true,
          ajax: {
            url: "{{ route('admin.promotions.index') }}",
          },
          language: {
            url: '//cdn.datatables.net/plug-ins/1.12.1/i18n/id.json'
          },
          columns: [{
              data: 'id',
              name: 'id',
            },
            {
              data: 'judul',
              name: 'judul'
            },
            {
              data: 'deskripsi',
              name: 'deskripsi'
            },
            {
              data: 'potongan',
              name: 'potongan'
            },
            {
              data: 'tanggal_mulai',
              name: 'tanggal_mulai'
            },
            {
              data: 'tanggal_berakhir',
              name: 'tanggal_berakhir'
            },
            {
              data: 'photos',
              name: 'photos',
              orderable: false,
              searchable: false,
            },
            {
              data: 'status',
              name: 'status'
            },
            {
              data: 'action',
              name: 'action',
              orderable: false,
              searchable: false,
              width: '15%'
            },
          ],
        });
      </script>
    </x-slot>

    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="mb-10">
          <a href="{{ route('admin.promotions.create') }}"
             class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            + Buat Promotion
          </a>
        </div>
        <div class="overflow-hidden shadow sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <table id="dataTable">
                <caption>Data Promosi</caption>
              <thead>
                <tr>
                  <th style="max-width: 1%">ID</th>
                  <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Potongan</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Berakhir</th>
                    <th>Photos</th>
                    <th>Status</th>
                  <th style="max-width: 1%">Aksi</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </x-app-layout>
