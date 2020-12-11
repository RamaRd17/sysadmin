<html>
<head>
    <title>Pengaturan Biaya Pajak</title>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="form.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">


<nav class="navbar navbar-expand-lg navbar-light bg-dark" style="color:white;">
  <a class="navbar-brand">
  <img src="polri.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Aplikasi Pajak</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" style="color:white;" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:white;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Aplikasi Admin Biaya Pajak</a>
          <a class="dropdown-item" href="#">Comming Soon</a>
        </div>
      </li>
    </ul>
  </div>
</nav>


</head>
<body>
<div class="font" id="wrapper">
            <div id="konten">
            <center>
                <div class="spasi">
                    <form id="myform" action="simpan.php" method="POST">

                    <div class="form-group">
				        <label class="letak" for="nama">Nama</label>
				        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" required>
                    </div>
                    
                    <div class="form-group">
				        <label class="letak" for="swdkllj">SWDKLLJ</label>
				        <input type="number" class="form-control" name="swdkllj" placeholder="Jumlah Yang Harus Dibayarkan" required>
			        </div>

			
			        <div class="form-group">
				        <label class="letak" for="administrasistnk">Biaya Administrasi STNK </label>
				        <input type="number" class="form-control" name="administrasi" placeholder="Jumlah Yang Harus Dibayarkan" required>
			        </div>
			
			        <div class="form-group">
				        <label class="letak" for="">Denda Per/tahun</label>
				        <input type="number" class="form-control" name="denda" placeholder="Jumlah Yang Harus Dibayarkan" required>
                    </div>
			
			        <div class="form-group">
				        <label class="letak" for="pajakpertahun">Pajak Per/tahun</label>
				        <input type="number" class="form-control" name="pajak" placeholder="Jumlah Yang Harus Dibayarkan" required>
                    </div>
                    
                    <div class="input-group">
                        <button type="submit" name="submit" class="form-control">Submit</button>
                    </div>
                    
                </form>
            </center>
                    
                </div>
            </div>
            <center>
            <div class="font" id="content">
                <br>
                <h1><b>LIST PEMILIK</b></h1>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">SWDKLLJ</th>
                            <th scope="col">Administrasi</th>
                            <th scope="col">Denda</th>
                            <th scope="col">Pajak</th>
                            <th scope="col"><center>Action</center></th>
                        </tr>
                    </thead>
                <tbody id="tabel">

                </tbody>
            </table>


                <br>


            </div>
            </center>
            <br>
            <center>
            <div id="footer">
                <div class="letakft">
                    Copyright Adhi Indra<br>
                    2018
                </div>
            </div>
            </center>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        loadData();

        $('form').on('submit',function(e){
            e.preventDefault();
            $.ajax({
                type:$(this).attr('method'),
                url:$(this).attr('action'),
                data:$(this).serialize(),
                success:function(data){
                    loadData();
                    resetForm();
                }
            });
        })
    })
    function loadData(){
        $.get('data.php',function(data){
            $('#tabel').html(data)
            $('.hapusData').click(function(e){
                e.preventDefault();
                $.ajax({
                    type:'get',
                    url:$(this).attr('href'),
                    success:function(){
                        loadData();
                    }
                });
            });
            $('.updateData').click(function(e){
                e.preventDefault();
                $('[name=nama]').val($(this).attr('nama'));
                $('[name=swdkllj]').val($(this).attr('swdkllj'));
                $('[name=administrasi]').val($(this).attr('administrasi'));
                $('[name=denda]').val($(this).attr('denda'));
                $('[name=pajak]').val($(this).attr('pajak'));
                $('form').attr('action',$(this).attr('href'));
            });
            
        })    
    }

    function resetForm(){
        $('[type=text]').val('');
        $('[name=nama]').focus();
        $('[type=number]').val('');
        $('[name=swdkllj').focus();
        $('form').attr('action','simpan.php');
    }
</script>
</body>
</html>