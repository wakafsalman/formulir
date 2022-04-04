<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Formulir Pendaftaran Wakaf Salman</title>
    <!-- icon WS -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo/wakaf-salman.ico') }}"/>

    <!-- Icons font CSS-->
    <link href="{{asset('template')}}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="{{asset('template')}}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('template')}}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset('template')}}/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Main CSS-->
    <link href="{{asset('template')}}/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Form Regristasi</h2>
                    <form action="/regristasi" method="POST">
                    @csrf
                        <div class="input-group">
                            <label class="label">Nama Lengkap <span style="color:red;">*</span></label>
                            <input class="input--style-4" type="text" name="nama" required>
                        </div>
                        <div class="input-group">
                            <label class="label">Email <span style="color:red;">*</span></label>
                            <input class="input--style-4" type="email" name="email" required>
                        </div>
                        <div class="input-group">
                            <label class="label">No. Telepon <span style="color:red;">*</span></label>
                            <input class="input--style-4" type="number" name="no_telepon" required>
                            <span>Format Pengisian No. Telepon : 6281234567890</span>
                        </div>
                        <div class="input-group">
                            <label class="label">Asal Kota <span style="color:red;">*</span></label>
                            <input class="input--style-4" type="text" name="asal_kota" required>
                        </div>
                        <div class="input-group">
                            <label class="label">Usia <span style="color:red;">*</span></label>
                            <input class="input--style-4" type="number" name="usia" required>
                        </div>
                        <div class="input-group">
                            <label class="label">Jenis Kelamin</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="jenis_kelamin">
                                    <option disabled="disabled" selected="selected">-- Pilih Jenis Kelamin --</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Event <span style="color:red;">*</span></label>
                            <input class="input--style-4" type="text" name="event" required>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{asset('template')}}/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="{{asset('template')}}/vendor/select2/select2.min.js"></script>
    <script src="{{asset('template')}}/vendor/datepicker/moment.min.js"></script>
    <script src="{{asset('template')}}/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="{{asset('template')}}/js/global.js"></script>

    <!-- Toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script>
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
    </script>
    <script>
        @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}")
        @endif
    </script>
    
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->