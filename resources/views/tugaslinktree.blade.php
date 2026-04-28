<!doctype html>
<html lang="en">

<head>
    <title>5026241037 - Tugas Linktree</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />

    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- Script Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function showme() {
            Swal.fire({
                title: "Hallo!",
                text: "Selamat Siang",
                icon: "success"
            });
        }

        function changeText() {
            const element = document.getElementById("intro");
            element.innerHTML = "Sistem Informasi ITS";
            // cara lain
            // document.getElementById("intro").innerHTML = "Sistem Informasi ITS"
        }

        function changeStyle() {
            const element = document.getElementById("tombol");
            element.style.color = "red";
            element.style.background = "yellow";
            // cara lain
            // document.getElementById("intro").innerHTML = "Sistem Informasi ITS"
        }
    </script>

    <style>
        body {
            background-color: #a6a8aa;
            margin: 0;
        }

        /* CARD CONTAINER */
        .main-card {
            max-width: 30rem;
            width: 100%;
            min-height: 100vh;
            margin: 2.5rem auto 0;
            background-color: #d8dbe8;
            border-top-left-radius: 1.5rem;
            border-top-right-radius: 1.5rem;
            padding: 1.5rem 1rem;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* HEADER ICON */
        .top-icon {
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .top-icon img {
            width: 1.125rem;
        }

        /* PROFILE */
        .profile-img {
            width: 5.6rem;
            height: 5.6rem;
            border-radius: 50%;
            margin-top: 1rem;
        }

        .username {
            margin-top: 0.5rem;
            font-weight: bold;
        }

        /* SOCIAL ICON */
        .social-icon {
            width: 1.75rem;
            margin: 0 0.5rem;
            cursor: pointer;
        }

        /* LINK BUTTON */
        .link-btn {
            width: 100%;
            background: #564353;
            color: white;
            border-radius: 0.5rem;
            padding: 0.6rem 0.75rem;
            margin-bottom: 0.6rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-decoration: none;
        }

        .link-btn:hover {
            background: #453543;
            color: white;
            text-decoration: none;
        }

        .link-btn img {
            width: 2rem;
            height: 2rem;
            border-radius: 0.4rem;
            object-fit: cover;
        }

        .link-btn span {
            flex-grow: 1;
            text-align: center;
            font-size: 1rem;
            font-weight: 500;
        }

        .link-btn i {
            font-size: 0.75rem;
            color: #ccc;
        }

        /* JOIN BUTTON */
        .join-btn {
            margin-top: 1.9rem;
            background: white;
            padding: 0.5rem 1.25rem;
            border-radius: 62rem;
            font-weight: bold;
            text-decoration: none;
            color: black;
            box-shadow: 0 0.25rem 0.38rem rgba(0, 0, 0, 0.1);
        }

        .join-btn:hover {
            color: black;
            text-decoration: none;
        }

        /* FOOTER */
        .footer {
            margin-top: 1.25rem;
            font-size: 0.75rem;
            display: flex;
            gap: 0.63rem;
        }

        .footer a {
            color: black;
            text-decoration: none;
        }

        /* BUAT MOBILE */
        @media (max-width: 30rem) {

            /* 480px */
            .main-card {
                margin-top: 0;
                border-radius: 0;
                padding: 1.25rem 0.75rem;
            }
        }
    </style>
</head>

<body>
    <div class="main-card">
        <!-- HEADER -->
        <div class="w-100 d-flex justify-content-between">
            <div class="top-icon">
                <img src="linktree-asset/linktree-logo.png" />
            </div>
            <div class="top-icon">
                <img src="linktree-asset/share-icon.svg" />
            </div>
        </div>

        <!-- PROFILE -->
        <img src="linktree-asset/Bem Its 2025.jpg" class="profile-img" />
        <div id="intro" class="username">@bem_its</div>

        <!-- SOCIAL -->
        <div class="my-3">
            <a href="https://www.instagram.com/bem_its" target="_blank">
                <img src="linktree-asset/instagram-icon.svg" class="social-icon" />
            </a>
            <a href="https://www.tiktok.com/@bem_its" target="_blank">
                <img src="linktree-asset/tiktok-icon.svg" class="social-icon" />
            </a>
        </div>

        <!-- LINKS -->
        <a href="https://arek.its.ac.id/iprs/login" class="link-btn" target="_blank" id="tombol">
            <img src="linktree-asset/website-image.webp" />
            <span>Website IPRS</span>
            <i class="fa fa-ellipsis-v"></i>
        </a>

        <a href="https://www.tiktok.com/@bem_its" class="link-btn" target="_blank">
            <img src="linktree-asset/tiktok-image.webp" />
            <span>TIKTOK BEM ITS</span>
            <i class="fa fa-ellipsis-v"></i>
        </a>

        <a href="https://api.whatsapp.com/send/?phone=6281353029122&text&type=phone_number&app_absent=0"
            class="link-btn" target="_blank">
            <img src="linktree-asset/whatsapp-image.webp" />
            <span>CP Umum 2025 - Ardhan</span>
            <i class="fa fa-ellipsis-v"></i>
        </a>

        <a href=https://api.whatsapp.com/send/?phone=6281772397654&text&type=phone_number&app_absent=0" class="link-btn"
            target="_blank">
            <img src="linktree-asset/whatsapp-image.webp" />
            <span>CP Media Partner 2025 (Della)</span>
            <i class="fa fa-ellipsis-v"></i>
        </a>

        <a href="https://docs.google.com/forms/d/e/1FAIpQLScSbeV658mZ4YaiZNgW-7ljALS8k0eRPmxKzzYf3ZelHgRMDw/viewform"
            class="link-btn" target="_blank">
            <div style="width: 2rem"></div>
            <span>JARAS SATU</span>
            <i class="fa fa-ellipsis-v"></i>
        </a>

        <button class="btn btn-primary" onclick="showme();" style="margin-top: 2rem;">Show Me</button>
        <button class="btn btn-primary" onclick="changeText();" style="margin-top: 0.5rem;">Change Text</button>
        <button class="btn btn-primary" onclick="changeStyle();" style="margin-top: 0.5rem;">Change Style</button>

        <!-- JOIN -->
        <a href="#" class="join-btn">Join bem.its on Linktree</a>

        <!-- FOOTER -->
        <div class="footer">
            <a href="#">Cookie Preferences</a>
            <a href="#">Report</a>
            <a href="#">Privacy</a>
        </div>
    </div>
</body>

</html>
