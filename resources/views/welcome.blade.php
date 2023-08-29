<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIPKO | Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        /* 12columns.css | Created by Katherine Kato | Released under the MIT license */
        /* GitHub: https://kathykato.github.io/12columns/ */
        @import url("https://fonts.googleapis.com/css?family=EB+Garamond:400,500|Roboto:400,700");

        .container {
            margin: auto;
            padding: 0 1rem;
            max-width: 71.25rem;
            width: 100%;
        }

        .grid {
            display: flex;
            flex-direction: column;
            flex-flow: row wrap;
        }

        .grid>[class*=column-] {
            display: block;
        }

        .first {
            order: -1;
        }

        .last {
            order: 12;
        }

        .align-top {
            align-items: start;
        }

        .align-center {
            align-items: center;
        }

        .align-bottom {
            align-items: end;
        }

        .column-xs-1 {
            flex-basis: 8.3333333333%;
            max-width: 8.3333333333%;
        }

        .column-xs-2 {
            flex-basis: 16.6666666667%;
            max-width: 16.6666666667%;
        }

        .column-xs-3 {
            flex-basis: 25%;
            max-width: 25%;
        }

        .column-xs-4 {
            flex-basis: 33.3333333333%;
            max-width: 33.3333333333%;
        }

        .column-xs-5 {
            flex-basis: 41.6666666667%;
            max-width: 41.6666666667%;
        }

        .column-xs-6 {
            flex-basis: 50%;
            max-width: 50%;
        }

        .column-xs-7 {
            flex-basis: 58.3333333333%;
            max-width: 58.3333333333%;
        }

        .column-xs-8 {
            flex-basis: 66.6666666667%;
            max-width: 66.6666666667%;
        }

        .column-xs-9 {
            flex-basis: 75%;
            max-width: 75%;
        }

        .column-xs-10 {
            flex-basis: 83.3333333333%;
            max-width: 83.3333333333%;
        }

        .column-xs-11 {
            flex-basis: 91.6666666667%;
            max-width: 91.6666666667%;
        }

        .column-xs-12 {
            flex-basis: 100%;
            max-width: 100%;
        }

        @media (min-width: 48rem) {
            .column-sm-1 {
                flex-basis: 8.3333333333%;
                max-width: 8.3333333333%;
            }

            .column-sm-2 {
                flex-basis: 16.6666666667%;
                max-width: 16.6666666667%;
            }

            .column-sm-3 {
                flex-basis: 25%;
                max-width: 25%;
            }

            .column-sm-4 {
                flex-basis: 33.3333333333%;
                max-width: 33.3333333333%;
            }

            .column-sm-5 {
                flex-basis: 41.6666666667%;
                max-width: 41.6666666667%;
            }

            .column-sm-6 {
                flex-basis: 50%;
                max-width: 50%;
            }

            .column-sm-7 {
                flex-basis: 58.3333333333%;
                max-width: 58.3333333333%;
            }

            .column-sm-8 {
                flex-basis: 66.6666666667%;
                max-width: 66.6666666667%;
            }

            .column-sm-9 {
                flex-basis: 75%;
                max-width: 75%;
            }

            .column-sm-10 {
                flex-basis: 83.3333333333%;
                max-width: 83.3333333333%;
            }

            .column-sm-11 {
                flex-basis: 91.6666666667%;
                max-width: 91.6666666667%;
            }

            .column-sm-12 {
                flex-basis: 100%;
                max-width: 100%;
            }
        }

        @media (min-width: 62rem) {
            .column-md-1 {
                flex-basis: 8.3333333333%;
                max-width: 8.3333333333%;
            }

            .column-md-2 {
                flex-basis: 16.6666666667%;
                max-width: 16.6666666667%;
            }

            .column-md-3 {
                flex-basis: 25%;
                max-width: 25%;
            }

            .column-md-4 {
                flex-basis: 33.3333333333%;
                max-width: 33.3333333333%;
            }

            .column-md-5 {
                flex-basis: 41.6666666667%;
                max-width: 41.6666666667%;
            }

            .column-md-6 {
                flex-basis: 50%;
                max-width: 50%;
            }

            .column-md-7 {
                flex-basis: 58.3333333333%;
                max-width: 58.3333333333%;
            }

            .column-md-8 {
                flex-basis: 66.6666666667%;
                max-width: 66.6666666667%;
            }

            .column-md-9 {
                flex-basis: 75%;
                max-width: 75%;
            }

            .column-md-10 {
                flex-basis: 83.3333333333%;
                max-width: 83.3333333333%;
            }

            .column-md-11 {
                flex-basis: 91.6666666667%;
                max-width: 91.6666666667%;
            }

            .column-md-12 {
                flex-basis: 100%;
                max-width: 100%;
            }
        }

        @media (min-width: 75rem) {
            .column-lg-1 {
                flex-basis: 8.3333333333%;
                max-width: 8.3333333333%;
            }

            .column-lg-2 {
                flex-basis: 16.6666666667%;
                max-width: 16.6666666667%;
            }

            .column-lg-3 {
                flex-basis: 25%;
                max-width: 25%;
            }

            .column-lg-4 {
                flex-basis: 33.3333333333%;
                max-width: 33.3333333333%;
            }

            .column-lg-5 {
                flex-basis: 41.6666666667%;
                max-width: 41.6666666667%;
            }

            .column-lg-6 {
                flex-basis: 50%;
                max-width: 50%;
            }

            .column-lg-7 {
                flex-basis: 58.3333333333%;
                max-width: 58.3333333333%;
            }

            .column-lg-8 {
                flex-basis: 66.6666666667%;
                max-width: 66.6666666667%;
            }

            .column-lg-9 {
                flex-basis: 75%;
                max-width: 75%;
            }

            .column-lg-10 {
                flex-basis: 83.3333333333%;
                max-width: 83.3333333333%;
            }

            .column-lg-11 {
                flex-basis: 91.6666666667%;
                max-width: 91.6666666667%;
            }

            .column-lg-12 {
                flex-basis: 100%;
                max-width: 100%;
            }
        }

        @supports (display: grid) {
            .grid {
                display: grid;
                grid-template-columns: repeat(12, 1fr);
                grid-template-rows: auto;
            }

            .grid>[class*=column-] {
                margin: 0;
                max-width: 100%;
            }

            .column-xs-1 {
                grid-column-start: span 1;
                grid-column-end: span 1;
            }

            .column-xs-2 {
                grid-column-start: span 2;
                grid-column-end: span 2;
            }

            .column-xs-3 {
                grid-column-start: span 3;
                grid-column-end: span 3;
            }

            .column-xs-4 {
                grid-column-start: span 4;
                grid-column-end: span 4;
            }

            .column-xs-5 {
                grid-column-start: span 5;
                grid-column-end: span 5;
            }

            .column-xs-6 {
                grid-column-start: span 6;
                grid-column-end: span 6;
            }

            .column-xs-7 {
                grid-column-start: span 7;
                grid-column-end: span 7;
            }

            .column-xs-8 {
                grid-column-start: span 8;
                grid-column-end: span 8;
            }

            .column-xs-9 {
                grid-column-start: span 9;
                grid-column-end: span 9;
            }

            .column-xs-10 {
                grid-column-start: span 10;
                grid-column-end: span 10;
            }

            .column-xs-11 {
                grid-column-start: span 11;
                grid-column-end: span 11;
            }

            .column-xs-12 {
                grid-column-start: span 12;
                grid-column-end: span 12;
            }

            @media (min-width: 48rem) {
                .column-sm-1 {
                    grid-column-start: span 1;
                    grid-column-end: span 1;
                }

                .column-sm-2 {
                    grid-column-start: span 2;
                    grid-column-end: span 2;
                }

                .column-sm-3 {
                    grid-column-start: span 3;
                    grid-column-end: span 3;
                }

                .column-sm-4 {
                    grid-column-start: span 4;
                    grid-column-end: span 4;
                }

                .column-sm-5 {
                    grid-column-start: span 5;
                    grid-column-end: span 5;
                }

                .column-sm-6 {
                    grid-column-start: span 6;
                    grid-column-end: span 6;
                }

                .column-sm-7 {
                    grid-column-start: span 7;
                    grid-column-end: span 7;
                }

                .column-sm-8 {
                    grid-column-start: span 8;
                    grid-column-end: span 8;
                }

                .column-sm-9 {
                    grid-column-start: span 9;
                    grid-column-end: span 9;
                }

                .column-sm-10 {
                    grid-column-start: span 10;
                    grid-column-end: span 10;
                }

                .column-sm-11 {
                    grid-column-start: span 11;
                    grid-column-end: span 11;
                }

                .column-sm-12 {
                    grid-column-start: span 12;
                    grid-column-end: span 12;
                }
            }

            @media (min-width: 62rem) {
                .column-md-1 {
                    grid-column-start: span 1;
                    grid-column-end: span 1;
                }

                .column-md-2 {
                    grid-column-start: span 2;
                    grid-column-end: span 2;
                }

                .column-md-3 {
                    grid-column-start: span 3;
                    grid-column-end: span 3;
                }

                .column-md-4 {
                    grid-column-start: span 4;
                    grid-column-end: span 4;
                }

                .column-md-5 {
                    grid-column-start: span 5;
                    grid-column-end: span 5;
                }

                .column-md-6 {
                    grid-column-start: span 6;
                    grid-column-end: span 6;
                }

                .column-md-7 {
                    grid-column-start: span 7;
                    grid-column-end: span 7;
                }

                .column-md-8 {
                    grid-column-start: span 8;
                    grid-column-end: span 8;
                }

                .column-md-9 {
                    grid-column-start: span 9;
                    grid-column-end: span 9;
                }

                .column-md-10 {
                    grid-column-start: span 10;
                    grid-column-end: span 10;
                }

                .column-md-11 {
                    grid-column-start: span 11;
                    grid-column-end: span 11;
                }

                .column-md-12 {
                    grid-column-start: span 12;
                    grid-column-end: span 12;
                }
            }

            @media (min-width: 75rem) {
                .column-lg-1 {
                    grid-column-start: span 1;
                    grid-column-end: span 1;
                }

                .column-lg-2 {
                    grid-column-start: span 2;
                    grid-column-end: span 2;
                }

                .column-lg-3 {
                    grid-column-start: span 3;
                    grid-column-end: span 3;
                }

                .column-lg-4 {
                    grid-column-start: span 4;
                    grid-column-end: span 4;
                }

                .column-lg-5 {
                    grid-column-start: span 5;
                    grid-column-end: span 5;
                }

                .column-lg-6 {
                    grid-column-start: span 6;
                    grid-column-end: span 6;
                }

                .column-lg-7 {
                    grid-column-start: span 7;
                    grid-column-end: span 7;
                }

                .column-lg-8 {
                    grid-column-start: span 8;
                    grid-column-end: span 8;
                }

                .column-lg-9 {
                    grid-column-start: span 9;
                    grid-column-end: span 9;
                }

                .column-lg-10 {
                    grid-column-start: span 10;
                    grid-column-end: span 10;
                }

                .column-lg-11 {
                    grid-column-start: span 11;
                    grid-column-end: span 11;
                }

                .column-lg-12 {
                    grid-column-start: span 12;
                    grid-column-end: span 12;
                }
            }
        }

        * {
            box-sizing: border-box;
        }

        *::before,
        *::after {
            box-sizing: border-box;
        }

        body {
            font-family: "Roboto", sans-serif;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            color: #8e8e8e;
            background: #fff;
            text-rendering: optimizeLegibility;
        }

        h1,
        h2,
        h3 {
            font-family: "EB Garamond", serif;
            color: #322c2c;
            line-height: 1.1;
        }

        h2,
        h3 {
            color: #322c2c;
            font-weight: 400;
        }

        h1 {
            font-size: 2.325rem;
            font-weight: 500;
            margin: 0;
        }

        h2 {
            font-size: 2rem;
            margin: 0 0 2rem;
        }

        h3 {
            font-size: 1.75rem;
            margin: 0 0 2rem;
        }

        p {
            margin: 0 0 1.5rem;
        }

        p:nth-child(4) {
            margin: 0;
        }

        p.copyright {
            margin: 1.5rem 0;
        }

        a {
            color: #a5a5a5;
            text-decoration: none;
        }

        a:hover {
            color: #322c2c;
        }

        blockquote {
            font-style: italic;
            text-align: center;
            width: 40rem;
            height: auto;
            max-width: 100%;
            margin: auto;
            display: flex;
            align-items: center;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        ul li {
            margin: 0 1.5rem 0 0;
        }

        .intro {
            margin: 1rem 0;
            padding: 0;
            width: 100%;
        }

        nav {
            position: relative;
            padding: 1.25rem 0 1.25rem 0;
        }

        nav ul {
            display: flex;
            justify-content: flex-start;
        }

        nav ul li {
            font-size: 0.875rem;
            font-weight: 700;
            letter-spacing: 0.125rem;
            text-transform: uppercase;
            margin: 0 1.5rem 0 0;
        }

        nav ul li:nth-child(3) {
            margin: 0;
        }

        nav .grid>[class*=column-] {
            padding: 0.25rem 1rem;
        }

        #logo {
            color: #322c2c;
            font-weight: 700;
            font-size: 0.875rem;
            letter-spacing: 0.125rem;
            text-transform: uppercase;
            margin: 0;
        }

        .container {
            margin: auto;
            padding: 0 1rem;
            max-width: 75rem;
            width: 100%;
        }

        main {
            padding: 2rem 0;
        }

        .grid>[class*=column-] {
            padding: 1rem;
        }

        .section-heading {
            transform: rotate(0) translateX(0);
        }

        img {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
        }

        footer {
            text-align: center;
        }

        @media (min-width: 62rem) {
            body {
                font-size: 1.125rem;
            }

            nav {
                padding: 2.5rem 0 2.5rem 0;
            }

            nav ul {
                justify-content: flex-end;
            }

            h1 {
                font-size: 3.25rem;
            }

            h2 {
                font-size: 2.75rem;
            }

            h3 {
                font-size: 2.25rem;
            }

            img {
                height: 40rem;
            }

            .section-heading {
                position: absolute;
                transform-origin: top left;
                transform: rotate(-90deg) translateX(-100%);
            }

            .intro {
                padding: 1rem;
            }

            blockquote {
                width: 30rem;
                height: 40rem;
            }
        }
    </style>
</head>

<body>
    <nav>
        <div class="container">
            <div class="grid">
                <div class="column-xs-12 column-md-8">
                    <p id="logo">SI Pemilihan Ketua OSIS</p>
                </div>
                <div class="column-xs-12 column-md-4">
                    <ul>
                        {{-- <li><a href="#gw">About Me</a></li> --}}
                        {{-- <li><a href="#">Blog</a></li> --}}
                        <li><a href="/login">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <main class="about">
        <div class="container">
            <section class="grid info">
                <div class="column-xs-12 column-md-1">
                    <div class="about">
                        <h1 class="section-heading">SIPKO</h1>
                    </div>
                </div>
                <div class="column-xs-12 column-md-4">
                    <img src="../storage/img/logoskenic.png">
                </div>
                <div class="column-xs-12 column-md-7">
                    <div class="intro">
                        <h2>Sistem Informasi Pemilihan Ketua OSIS.</h2>
                        <p>Ingin mempermudah proses pemilihan ketua osis di sekolah dengan cara yang modern dan efisien?
                            Coba gunakan <b class="text-primary">Sistem Informasi Pemilihan Ketua Osis berbasis
                                WEB!</b> Dengan sistem ini, proses
                            pemilihan dapat dilakukan secara online dengan mudah, cepat, dan aman.</p>
                    </div>
                </div>
                {{-- <div class="gw column-xs-12 column-md-7" id="id">
                    <blockquote>
                        <h3>"Anak muda adalah penerus bangsa, mereka harus didorong untuk terus belajar, berinovasi, dan
                            berkontribusi untuk masa depan yang lebih baik." - B.J. Habibie</h3>
                    </blockquote>
                </div> --}}
                {{-- <div class="column-xs-12 column-md-5">
                    <img src="../storage/img/eUfUmfwzY59wnyExUMoFn9m55M7VdAeSQuEzQXwj.jpg">
                </div> --}}
            </section>
        </div>
    </main>
    <footer>
        <div class="container">
            <section class="grid">
                <div class="column-xs-12">
                    <p class="copyright">&copy; Copyright 2023 Hafiz Miftahul Fikry</p>
                </div>
            </section>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>