<x-app-layout>

</x-app-layout>

<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Datatables - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="./dist/css/tabler.min.css?1674944402" rel="stylesheet"/>
    <link href="./dist/css/tabler-flags.min.css?1674944402" rel="stylesheet"/>
    <link href="./dist/css/tabler-payments.min.css?1674944402" rel="stylesheet"/>
    <link href="./dist/css/tabler-vendors.min.css?1674944402" rel="stylesheet"/>
    <link href="./dist/css/demo.min.css?1674944402" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body >
    <script src="./dist/js/demo-theme.min.js?1674944402"></script>
    <div class="page">
        
    <!-- Page header -->
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Data Barang
                </h2>
              </div>
            </div>
          </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="card">
              <div class="card-body">
                <div id="table-default" class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th><button class="table-sort" data-sort="sort-nama">Nama Barang</button></th>
                        <th><button class="table-sort" data-sort="sort-kategory">kategory</button></th>
                        <th><button class="table-sort" data-sort="sort-action">Action</button></th>
                        
                      </tr>
                    </thead>
                    <tbody class="table-tbody">
                      <tr>
                        <td class="sort-nama">Wajan</td>
                        <td class="sort-kategory">Dapur</td>
                        <td><button>Edit</button></td>
                        
                        </div>
                     </div>
                    </div>
                </div>
            </td>
                                            
                     <tr>
                        <tbody class="table-tbody">
                      <tr>
                        <td class="sort-nama">Kursi</td>
                        <td class="sort-kategory">Ruang Tamu</td>
                        <td><button>Edit</button></td>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <tbody class="table-tbody">
                      <tr>
                        <td class="sort-nama">Televisi</td>
                        <td class="sort-kategory">Electronic</td>
                        <td><button>Edit</button></td>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                      
    </script>
  </body>
</html>