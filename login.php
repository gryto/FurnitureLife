<link rel="stylesheet" href="template/css/style.css">

<style type="text/css">
        .brand{
            background: #0F0F0F !important;
        }
        .brand-1{
            color: #0f0f0f !important;
            background-color: #FFFFFF !important;
            border: 1px solid transparent;
            border-color: #0f0f0f !important;
        }
        .brand-text{
            color: #0F0F0F !important;
        }
        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
    </style>


<div class="div-countainer-fluid">
    <div class="row">
        <div class="col-6 bg-light"></div>
    </div>
    <div class="col-6" style="padding: 260px 65px 260px">
    <div class="container">
        <h1 class="my-5 text-center">Selamat Datang di FurnitureLife</h1>
            <p class="my-3">Silahkan masukkan username dan password</p>
            <from methode="post">
                <div class="row mb-3">
                    <label class="col-2 col-from-label align-self-center">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="username" placeholder="username">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-2 col-from-label align-self-center">Password</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="password" placeholder="password">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-2"></div>
                    <div class="col-10">
                        <input type="submit" class="btn brand z-depth-0" name="submit" value="login">
                        <button type="button" class="btn brand-1 z-depth-0" onclick="window.history.back();">Batal</button>
                    </div>
                </div>
            </from>
    </div>
    </div>
</div>