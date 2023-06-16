<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="sb-admin-2.css">
        
        <title>Monsa | {{ $title }}</title>
    </head>
    <body style="background-color: rgba(2, 0, 36, var(--bg-opacity));
    background: linear-gradient(279deg, rgb(65, 65, 66) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);}">
        <form action="/files" method="POST" enctype="multipart/form-data">
            @csrf
    <div class="form-row justify-content-center">
        <div class="col-md-4 mt-3 ml-3 form-group">
        <label class="text-gray-100">Upload File</label>
        <div class="custom-file">
            <input class="custom-file-input" type="file"name="file" id="customFile">
            <label class="custom-file-label" for="customFile">Pilih File</label>
        </div>
    </div>
</div>
<center>
    <button type="submit" class="btn btn-dark">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Upload
    </button>
</center>
<style>
    .btn {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 95px;
        height: 38px;
        background: #4e73df;

    }

    button {
        position: relative;
        display: inline-block;
        padding: 15px 30px;
        color: #4e73df;



        overflow: hidden;
        transition: 0.2s;
    }



    button:hover {
        color: #255784;
        background: #4e73df;
        box-shadow: 0 0 10px #4e73df, 0 0 40px #4e73df, 0 0 80px #4e73df;
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
        background: linear-gradient(90deg, transparent, #4e73df);
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
        background: linear-gradient(270deg, transparent, #4e73df);
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
        background: linear-gradient(180deg, transparent, #4e73df);
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
        background: linear-gradient(360deg, transparent, #4e73df);
    }

    button:hover span:nth-child(4) {
        bottom: 100%;
        transition: 1s;
        transition-delay: 0.75s;
    }
</style>
        </form>
    </body>

</html>



    <script>
    const fileInput = document.getElementById('customFile');
    const fileNameLabel = document.querySelector('label[for="customFile"]');

    fileInput.addEventListener('change', () => {
        const fileName = fileInput.files[0].name;
        fileNameLabel.textContent = fileName;
    });
   
    </script>
 