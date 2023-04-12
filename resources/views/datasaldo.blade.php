<x-app-layout>

</x-app-layout>

<!doctype html>

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

    <header class="navbar navbar-expand-md navbar-light d-print-none">
        <div class="container-xl">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    </header>
        
    <!-- Page header -->
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Data Saldo
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
                        <th><button class="table-sort" data-sort="sort-name">Nama Pengguna</button></th>
                        <th><button class="table-sort" data-sort="sort-email">Email</button></th>
                        <th><button class="table-sort" data-sort="sort-jumlahsaldo">Jumlah Saldo</button></th>
                        
                      </tr>
                    </thead>
                    <tbody class="table-tbody">
                      <tr>
                        <td class="sort-name">User</td>
                        <td class="sort-email">User@gmail.com</td>
                        <td class="sort-jumlahsaldo">Rp 500,000</td>
                        </div>
                     </div>
                    </div>
                </div>
            </td>
                                            
                     <tr>
                        <tbody class="table-tbody">
                      <tr>
                        <td class="sort-name">User1</td>
                        <td class="sort-email">User1@gmail.com</td>
                        <td class="sort-jumlahsaldo">Rp 1000,000</td>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <tbody class="table-tbody">
                      <tr>
                        <td class="sort-name">User2</td>
                        <td class="sort-email">User2@gmail.com</td>
                        <td class="sort-jumlahsaldo">Rp1500,000</td>
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