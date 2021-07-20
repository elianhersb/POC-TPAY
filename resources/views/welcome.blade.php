<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="card mx-5">
                <div class="card-body mt-4">
                    <div class="px-5">
                        <h5 class="card-title px-5">POC TPAY</h5>
                        <p class="card-text px-5">PROCESO DE COMPRA PARA PASARELA DE PAGO TPAY</p>
                    </div>
            
                    <form class="row g-2 p-5" action="https://secure.tpay.com" method="POST"> 
                        <div class="col-md-6 mb-1 px-5">
                            <label for="id" class="form-label">id</label>
                            <input type="number" class="form-control" id="id" name="id" value="67097">
                            <div  class="form-text">id del comerciante</div>
                        </div>
                        <div class="col-md-6 mb-1 px-5">
                            <label for="amount" class="form-label">amount</label>
                            <input type="number" class="form-control" id="amount" name="amount" value="1500">
                            <div  class="form-text">Monto de la compra.</div>
                        </div>
                        <div class="col-md-6 mb-1 px-5">
                            <label for="description" class="form-label">description</label>
                            <input type="text" class="form-control" id="description" name="description" value="POC de compra">
                            <div  class="form-text">Descripcion de la compra</div>
                        </div>
                        <div class="col-md-6 mb-1 px-5">
                            <label for="crc" class="form-label">crc</label>
                            <input type="number" class="form-control" id="crc" name="crc" value="1001">
                            <div  class="form-text">codigo unico que identifica la compra.</div>
                        </div>

                        @php 
                        $md5sum = md5(implode('&', [67097, 1500, 1001, 'gaUK6c7Zfs+sI@CP2i']));
                        @endphp

                        <div class="col-md-6 mb-1 px-5">
                            <label for="md5sum" class="form-label">md5sum</label>
                            <input type="text" class="form-control" id="md5sum" name="md5sum" name="md5sum" value="{{$md5sum}}">
                            <div  class="form-text">Código de encriptación</div>
                        </div>
                        <div class="col-md-6 mb-1 px-5">
                            <label for="result_url" class="form-label">result_url</label>
                            <input type="text" class="form-control" id="result_url" name="result_url" value="http://192.168.250.3:8000/pagar">
                            <div  class="form-text">Ruta a donde se enviara el resultado</div>
                        </div>
                        <div class="col-md-6 mb-1 px-5">
                            <label for="result_email" class="form-label">result_email</label>
                            <input type="email" class="form-control" id="result_email" name="result_email" value="elianhers.b@gmail.com">
                            <div  class="form-text">Email donde se enviara la notificación</div>
                        </div>
                        <div class="col-md-6 mb-1 px-5">
                            <label for="return_url" class="form-label">return_url</label>
                            <input type="text" class="form-control" id="return_url" name="return_url" value="http://192.168.250.3:8000/completed">
                            <div  class="form-text">Ruta a la que retornara cuando la tranferencia sea efectiva</div>
                        </div>
                        <div class="col-md-6 mb-1 px-5">
                            <label for="language" class="form-label">language</label>
                            <input type="text" class="form-control" id="language" name="language" value="EN">
                            <div  class="form-text">Lenguaje</div>
                        </div>
                        <div class="col-md-6 mb-1 px-5">
                            <label for="email" class="form-label">email</label>
                            <input type="email" class="form-control" id="email" name="email" value="elianhers_15@hotmail.com">
                            <div  class="form-text">Email del cliente</div>
                        </div>
                        <div class="col-md-6 mb-1 px-5">
                            <label for="name" class="form-label">name</label>
                            <input type="text" class="form-control" id="name" name="name" value="Elianhers">
                            <div  class="form-text">nombre del cliente</div>
                        </div>
                        <div class="col-md-6 mb-1 px-5">
                            <label for="address" class="form-label">address</label>
                            <input type="text" class="form-control" id="address" name="address" value="Caracas, venezuela">
                            <div  class="form-text">Direccion del cliente</div>
                        </div>
                        <div class="col-md-6 mb-1 px-5">
                            <label for="city" class="form-label">city</label>
                            <input type="text" class="form-control" id="city" name="city" value="Caracas">
                            <div  class="form-text">Ciudad del cliente</div>
                        </div>
                        <div class="col-md-6 mb-1 px-5">
                            <label for="zip" class="form-label">zip</label>
                            <input type="text" class="form-control" id="zip" name="zip" value="1030">
                            <div  class="form-text">codigo postal del cliente</div>
                        </div>
                        <div class="col-md-6 mb-1 px-5">
                            <label for="country" class="form-label">country</label>
                            <input type="text" class="form-control" id="country" name="country" value="VEN">
                            <div  class="form-text">Pais del cliente en ISO</div>
                        </div>
                        <div class="col-md-6 mb-1 px-5">
                            <label for="phone" class="form-label">phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="584241554817">
                            <div  class="form-text">telefono del cliente</div>
                        </div>
                        <div class="col-md-12 mb-1 px-5">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

