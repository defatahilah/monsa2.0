<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="sb-admin-2.css">
        
        
        <title>Monsa | {{ $title }}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      />
      <!-- Google Font -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
        rel="stylesheet"
      />
      <!-- Stylesheet -->
      <link rel="stylesheet" href="style.css">
      {{-- <link rel="stylesheet" href="scriptade.js"> --}}

    </head>
    {{-- <body style="background-color: rgba(2, 0, 36, var(--bg-opacity));
    background: linear-gradient(279deg, rgb(65, 65, 66) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);}"> --}}
    <body style="margin-left: 30px; margin-right: 30px; margin-bottom: 15px; margin-top: 80px;">
        <form action="/files" method="POST" enctype="multipart/form-data" name="file">
            @csrf
            <div></div>
            <div>
            <a class="col-form-label text-dark">Pengumpulan Soal Ujian Akademik <br>
                Formulir Pengumpulan Soal Ujian Akademik
            </div>

        {{-- style="margin-left: 30px; margin-right: 30px; margin-bottom: 15px; margin-top: 80px;" --}}
        <!--div class="form"-->
            {{-- <col-md-4 mt-3 ml-3> --}}
            
            <div class="mt-2 form-group row justify-content-center">
                {{-- <label class="col-sm-2 col-form-label text-dark">Upload Files<span style="color: red"><b>*</b></span></label> --}}
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <link href="style.css" rel="stylesheet">
                <body>
                <h1>Upload File</h1>
                <div id="drop_zone">
                   <p>Drop file here</p>
                   <p>or</p>
                   <p><button type="button" id="btn_file_pick" class="btn btn-primary"><span class="glyphicon glyphicon-folder-open"></span>  Select File</button></p>
                   <p id="file_info"></p>
                   <p><button type="button" id="btn_upload" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-up"></span>  Upload To Server</button></p>
                   <input type="file" id="selectfile">
                   <p id="message_info"></p>
                </div>
              <!-- Script -->
                <script src="script.js"></script>
                {{-- @error('namafile')
                <div class="invalid-feedback text-white">
                    {{ $message }}
                </div>
                @enderror --}}
                
            </div>
            </div>
            
            <div class="mt-2 form-group row justify-content-center">
                <label class="col-sm-2 col-form-label text-dark">Program Studi<span style="color: red"><b>*</b></span></label>
                <div class="col-sm-4">
                    <select class="form-control" name="Prodi" id="prodi">
                        <option value="" disabled selected>-- Pilih --</option>
                        <option value="1">Prodi I</option>
                        <option value="2">Prodi II</option>
                    </select>
                </div>
            </div>
            <div class="mt-2 form-group row justify-content-center">
                <label class="col-sm-2 col-form-label text-dark">Mata Kuliah<span style="color: red"><b>*</b></span></label>
                <div class="col-sm-4">
                    <select class="form-control" name="Matkul" id="matkul">
                        <option value="" disabled selected>-- Pilih --</option>
                        <option value="1">Mata Kuliah I</option>
                        <option value="2">Mata Kuliah II</option>
                    </select>
            </div>
            </div>
            <div class="mt-2 form-group row justify-content-center">
                <label class="col-sm-2 col-form-label text-dark">Kelas<span style="color: red"><b>*</b></span></label>
                <div class="col-sm-4">
                <input class="form-control" type="text" name="Kelas" id="kelas">
            </div>
            </div>
            <div class="mt-2 form-group row justify-content-center">
                <label class="col-sm-2 col-form-label text-dark">Semester<span style="color: red"><b>*</b></span></label>
                <div class="col-sm-4">
                    <select class="form-control" name="Semester" id="semester">
                        <option value="" disabled selected>-- Pilih --</option>
                        <option value="1">Semester I</option>
                        <option value="2">Semester II</option>
                        <option value="3">Semester III</option>
                        <option value="4">Semester IV</option>
                        <option value="5">Semester V</option>
                        <option value="6">Semester VI</option>
                        <option value="7">Semester VII</option>
                    </select>
                </div>
            </div>
            <div class="mt-2 form-group row justify-content-center">
                <label class="col-sm-2 text-dark">Tanggal Ujian<span style="color: red"><b>*</b></span></label>
                <div class="col-sm-4">
                <input type="date" class="form-control" type="text" name="Tgl_ujian" id="tgl_ujian">
            </div>
        </div>
            <div class="mt-2 form-group row justify-content-center">
                <label class="col-sm-2 text-dark">Dosen Pengampu</label>
                <div class="col-sm-4">
                    <select class="form-control" name="Dosen" id="d`osen">
                        <option value="" disabled selected>-- Pilih --</option>
                        <option value="1">Dosen Pengampu I</option>
                        <option value="2">Dosen Pengampu II</option>
                    </select>
            </div>
        </div>
    <!--/div-->
</div>
<center>
    <button type="submit" class="btn btn-primary">
        {{-- <span></span>
        <span></span>
        <span></span>
        <span></span> --}}
        Kirim
    </button>
</center>
{{-- <style>
    .btn {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 95px;
        height: 38px;
        background: #119665;

    }

    button {
        position: relative;
        display: inline-block;
        padding: 15px 30px;
        color: #1cc88a;



        overflow: hidden;
        transition: 0.2s;
    }



    button:hover {
        color: #255784;
        background: #1cc88a;
        box-shadow: 0 0 10px #1cc88a, 0 0 40px #1cc88a, 0 0 80px #1cc88a;
        transition-delay: 1s;
    }


    button span {
        position: absolute;
        display: block;
    }




    button span:nth-child(1) {
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #1cc88a);
    }



    button:hover span:nth-child(1) {
        left: 100%;
        transition: 1s;
    }


    button span:nth-child(3) {
        bottom: 0;
        right: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(270deg, transparent, #1cc88a);
    }

    button:hover span:nth-child(3) {
        right: 100%;
        transition: 1s;
        transition-delay: 0.5s;
    }



    button span:nth-child(2) {
        top: -100%;
        right: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg, transparent, #1cc88a);
    }

    button:hover span:nth-child(2) {
        top: 100%;
        transition: 1s;
        transition-delay: 0.25s;
    }



    button span:nth-child(4) {
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(360deg, transparent, #1cc88a);
    }

    button:hover span:nth-child(4) {
        bottom: 100%;
        transition: 1s;
        transition-delay: 0.75s;
    }
</style> --}}
        </form>
    </body>

</html>

<script src="scriptade.js"></script>

    <script>
    const fileInput = document.getElementById('customFile');
    const fileNameLabel = document.querySelector('label[for="customFile"]');

    fileInput.addEventListener('change', () => {
        const fileName = fileInput.files[0].name;
        fileNameLabel.textContent = fileName;
    });
   
    </script>
 