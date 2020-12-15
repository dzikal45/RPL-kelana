<div>
    <p class="kelana">Kelana</p>
    <p class="tber">Teman berkelanamu~</p>
    <div class="header1">
        <button type="button" class="btn-kelana">LIHAT SEMUA →</button>
        </a>
    </div>
</div>
<div class="container container-rec">
    <div class="line1"></div>
    <p class="recter">Rekomendasi Terpopuler</p>
    <div class="line2"></div>
    <div class="rekom">
        <div class="revealer">
            <div class="revealer__inner"></div>
        </div>
        <div class="grid grid--slideshow">
            <figure class="grid__item grid__item--slide">
                <span class="number">01</span>
                <div class="img-wrap">
                    <div class="img" style="background-image: url('img/bromo.jpg') ;"></div>
                </div>
                <figcaption class="caption">Malang, Jawa Timur</figcaption>
            </figure>
            <figure class="grid__item grid__item--slide">
                <span class="number">02</span>
                <div class="img-wrap">
                    <div class="img" style="background-image:  url('img/parang.jpg') ;"></div>
                </div>
                <figcaption class="caption">Bantul, Yogyakarta</figcaption>
            </figure>
            <figure class="grid__item grid__item--slide">
                <span class="number">03</span>
                <div class="img-wrap">
                    <div class="img" style="background-image: url('img/lbj.jpg') ;"></div>
                </div>
                <figcaption class="caption">Labuan Bajo, NTT</figcaption>
            </figure>
            <figure class="grid__item grid__item--slide">
                <span class="number">04</span>
                <div class="img-wrap">
                    <div class="img" style="background-image:  url('img/boro.jpg') ;"></div>
                </div>
                <figcaption class="caption">Magelang, Jawa Tengah</figcaption>
            </figure>
            <div class="titles-wrap">
                <div class="grid grid--titles">
                    <h3 class="grid__item grid__item--title" style="top:480px">Bromo</h3>
                    <h3 class="grid__item grid__item--title" style="top:480px">Parangtritis</h3>
                    <h3 class="grid__item grid__item--title" style="top:480px">Padar</h3>
                    <h3 class="grid__item grid__item--title" style="top:480px">Borobudur</h3>
                </div>
            </div>
            <div class="grid grid--interaction">
                <div class="grid__item grid__item--cursor grid__item--left"></div>
                <div class="grid__item grid__item--cursor grid__item--center"></div>
                <div class="grid__item grid__item--cursor grid__item--right"></div>
            </div>
        </div>
        <!-- /frame -->
        <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/charming.min.js') }}"></script>
        <script src="{{ asset('js/TweenMax.min.js') }}"></script>
        <script src="{{ asset('js/demo.js') }}"></script>
        <a href="recommenderpage.html">
            <button type="button" class="btn-rec">LIHAT SEMUA →</button>
        </a>
        <div class="line3"></div>
        <p class="recter1">Hiburan</p>
        <div class="line4"></div>
        <video style="top:1850px;
      left: 300px;" width="852" height="480" controls>
            <source src="{{ asset('img/movie.mp4') }}" type="video/mp4">
        </video>
        <img class="nam" src="{{ asset('img/6.png') }}">
        <p class="pods">Podcast</p>
        <article class="article">Menyajikan podcast-podcast seru seputar travelling seperti tips trik, challange,
            review, vlog, dan sebagainya</article>
        <img class="artc" src="{{ asset('img/7.png') }}">
        <p class="artic">Article</p>
        <article class="article1">Menyajikan artikel-artikel seru seputar travelling seperti tips trik, challange,
            review, vlog, dan sebagainya</article>
        <a class="start" href="{{ url('/hiburan') }}">MULAI MENDENGARKAN→</a>
        <a class="start1" href="{{ url('/artikel') }}">←MULAI MEMBACA</a>

    </div>

</div>