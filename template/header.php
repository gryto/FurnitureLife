<head>
    <title>FurniturLife</title>
    <!--Mengambil framerk template dari materializecss -->
    <!-- Compiled and minified CSS -->

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
</head>
    <body class="grey lighten-4">
        <!-- membuat navbar mengubah warna menjadi abu - abu-->
        <nav class="white z-depth-0">
            <div class="container">
                <a href="dashboard.php" class="brand-logo brand-text">FurnitureLife</a>
                <!-- membuat navbar versi mobile -->
                <ul id="nav-mobile" class="right hide-on-small-and-down">
                    <li><a href="login.php" class="btn brand-1 z-depth-0">Log Out</a></li>
                </ul>
                <!-- membuat navbar versi mobile -->
                <ul id="nav-mobile" class="right hide-on-small-and-down">
                    <li><a href="produk/add.php" class="btn brand z-depth-0">Tambah Produk</a></li>
                </ul>
            </div>
        </nav>
