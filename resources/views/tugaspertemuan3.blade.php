<!doctype html>
<html lang="id">

<head>
    <title>Tugas Pertemuan Week 3 - Button Groups</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous" />

    <style>
        body {
            font-family: "Montserrat", sans-serif;
        }

        .hero-bg {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
        }

        /* Mengubah kategori plan berdasarkan button group yang dipilih */
        #yearly-price,
        #monthly-price {
            display: none;
        }

        /* Menyembunyikan semuanya dulu */

        /* Menampilkan kategori bulanan secara default atau ketika dipilih */
        #monthly-price:target,
        :not(:target) #monthly-price {
            display: flex;
        }

        /* Menampilkan kategori tahunan ketika dipilih dan menyembunyikan kategori bulanan */
        #yearly-price:target {
            display: flex;
        }

        #yearly-price:target~#monthly-price {
            display: none;
        }

        /* Styling Button Group */
        .btn-toggle {
            min-width: 140px;
            font-weight: 700;
        }

        /* Styling Pricing Card */
        .card-pricing {
            border: 2px solid #f1f1f1;
            border-radius: 8px;
        }

        .card-pro {
            border: 2px solid #007bff;
        }

        /* Styling Partner Logo */
        .partner-logo {
            max-width: 120px;
        }

        /* Styling FAQ */
        .faq-section {
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
        }

        .faq-box {
            border: 2px solid #f1f1f1;
            background-color: #ffffff;
            border-radius: 8px;
            padding: 25px 30px;
        }

        /* Styling Icon */
        .card-pricing ul li i {
            color: #28a745;
            margin-right: 4px;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="hero-bg py-5">
        <div class="container text-center py-5">
            <h1 class="font-weight-bold">Solusi Cerdas Bisnis Anda</h1>
            <p class="text-muted lead mt-3">
                Tingkatkan produktivitas tim Anda dengan tools modern.
            </p>
        </div>
    </header>

    <section class="py-5">
        <div class="container text-center">
            <!-- Button Group -->
            <div class="btn-group mb-3">
                <a href="#monthly-price" class="btn btn-outline-primary btn-toggle">Bulanan</a>
                <a href="#yearly-price" class="btn btn-outline-primary btn-toggle">Tahunan</a>
            </div>

            <p class="text-success font-weight-bold mb-5">
                Lebih hemat dengan paket tahunan
            </p>

            <!-- Pricing Card Tahunan -->
            <div class="row" id="yearly-price">
                <div class="col-lg-4 mb-4">
                    <div class="card card-pricing h-100 p-3">
                        <div class="card-body">
                            <h5 class="font-weight-bold mt-4">Basic</h5>
                            <h2 class="font-weight-bold">Gratis</h2>
                            <h6 class="mb-4">per tahun</h6>
                            <hr />
                            <ul class="list-unstyled text-left mb-5">
                                <li><i class="fas fa-check-circle"></i> 1 User</li>
                                <li><i class="fas fa-check-circle"></i> 5GB Storage</li>
                                <li><i class="fas fa-check-circle"></i> Comunnity Support</li>
                            </ul>
                            <button class="btn btn-secondary btn-block">
                                Paket Anda Saat Ini
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card card-pricing card-pro h-100 p-3 shadow-sm">
                        <div class="card-body">
                            <span class="badge badge-primary mb-2">Recommended</span>
                            <h5 class="font-weight-bold">Pro</h5>
                            <h2 class="font-weight-bold">Rp 950.000</h2>
                            <h6 class="mb-4 text-primary">per tahun (Hemat 30%)</h6>
                            <hr />
                            <ul class="list-unstyled text-left mb-5">
                                <li><i class="fas fa-check-circle"></i> 10 User</li>
                                <li><i class="fas fa-check-circle"></i> 100GB Storage</li>
                                <li><i class="fas fa-check-circle"></i> Priority Support</li>
                            </ul>
                            <button class="btn btn-primary btn-block">Pilih Paket</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card card-pricing h-100 p-3">
                        <div class="card-body">
                            <h5 class="font-weight-bold mt-4">Enterprise</h5>
                            <h2 class="font-weight-bold">Rp 1.900.000</h2>
                            <h6 class="mb-4 text-primary">per tahun (Hemat 15%)</h6>
                            <hr />
                            <ul class="list-unstyled text-left mb-5">
                                <li><i class="fas fa-check-circle"></i> Unlimited User</li>
                                <li><i class="fas fa-check-circle"></i> Unlimited Storage</li>
                                <li><i class="fas fa-check-circle"></i> Dedicated Manager</li>
                            </ul>
                            <button class="btn btn-primary btn-block">Pilih Paket</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pricing Card Bulanan -->
            <div class="row" id="monthly-price">
                <div class="col-lg-4 mb-4">
                    <div class="card card-pricing h-100 p-3">
                        <div class="card-body">
                            <h5 class="font-weight-bold mt-4">Basic</h5>
                            <h2 class="font-weight-bold">Gratis</h2>
                            <h6 class="mb-4">per bulan</h6>
                            <hr />
                            <ul class="list-unstyled text-left mb-5">
                                <li><i class="fas fa-check-circle"></i> 1 User</li>
                                <li><i class="fas fa-check-circle"></i> 5GB Storage</li>
                                <li><i class="fas fa-check-circle"></i> Comunnity Support</li>
                            </ul>
                            <button class="btn btn-secondary btn-block">Paket Anda</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card card-pricing card-pro h-100 p-3 shadow-sm">
                        <div class="card-body">
                            <span class="badge badge-primary mb-2">Recommended</span>
                            <h5 class="font-weight-bold">Pro</h5>
                            <h2 class="font-weight-bold">Rp 99.000</h2>
                            <h6 class="mb-4">per bulan</h6>
                            <hr />
                            <ul class="list-unstyled text-left mb-5">
                                <li><i class="fas fa-check-circle"></i> 10 User</li>
                                <li><i class="fas fa-check-circle"></i> 100GB Storage</li>
                                <li><i class="fas fa-check-circle"></i> Priority Support</li>
                            </ul>
                            <button class="btn btn-primary btn-block">Pilih Paket</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card card-pricing h-100 p-3">
                        <div class="card-body">
                            <h5 class="font-weight-bold mt-4">Enterprise</h5>
                            <h2 class="font-weight-bold">Rp 199.000</h2>
                            <h6 class="mb-4">per bulan</h6>
                            <hr />
                            <ul class="list-unstyled text-left mb-5">
                                <li><i class="fas fa-check-circle"></i> Unlimited User</li>
                                <li><i class="fas fa-check-circle"></i> Unlimited Storage</li>
                                <li><i class="fas fa-check-circle"></i> Dedicated Manager</li>
                            </ul>
                            <button class="btn btn-primary btn-block">Pilih Paket</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partner Logo -->
    <section class="py-5 border-top">
        <div class="container text-center">
            <h5 class="font-weight-bold mb-5">Partner Kami</h5>
            <div class="row justify-content-center">
                <div class="col-6 col-md-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/2012_Citilink_Logo.svg/250px-2012_Citilink_Logo.svg.png"
                        class="partner-logo" />
                </div>
                <div class="col-6 col-md-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Gojek_logo_2019.svg/250px-Gojek_logo_2019.svg.png"
                        class="partner-logo" />
                </div>
                <div class="col-6 col-md-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Matahari_%282022%29.svg/250px-Matahari_%282022%29.svg.png"
                        class="partner-logo" />
                </div>
                <div class="col-6 col-md-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1c/Transmart.svg/250px-Transmart.svg.png"
                        class="partner-logo" />
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq-section py-5">
        <div class="container" style="max-width: 800px">
            <h2 class="text-center font-weight-bold mb-4 mt-5">Pertanyaan Umum</h2>

            <div class="faq-box mb-4">
                <h5 class="font-weight-bold">
                    Apakah saya bisa upgrade/downgrade paket?
                </h5>
                <p class="text-muted mb-0">
                    Ya, Anda bisa mengubah paket kapan saja.
                </p>
            </div>

            <div class="faq-box mb-4">
                <h5 class="font-weight-bold">Apakah ada free trial?</h5>
                <p class="text-muted mb-0">Free trial 14 hari tanpa kartu kredit.</p>
            </div>

            <div class="faq-box mb-4">
                <h5 class="font-weight-bold">Bagaimana cara pembayaran?</h5>
                <p class="text-muted mb-0">Transfer, kartu kredit, dan e-wallet.</p>
            </div>
        </div>
    </section>
</body>

</html>
