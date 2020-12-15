<div class="container-hiburan">
    <div class="header-hiburan">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-5">
                    <div class=:img" style="background-image: url('img/hiburan1.png'); width: 594px;
            height: 436px;
            margin-left: 123px;
            margin-top: 120px; ">
                    </div>
                </div>
                <div class="col-md-6 " style="margin-top:13em;margin-left:8em;">
                    <div class="hiburan">Hiburan yang mungkin membantumu </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-pilihan">
        <p class="kategori">Kategori</p>
        <br>
        <button type="button" class="btn btn-light"><a href="#podcast">
                <img src="{{ asset('img/podcast.png') }}">
                <p>Podcast</p>
            </a>
        </button>
        <button type="button" class="btn btn-light"><a href="#video">
                <img src="{{ asset('img/kompi.png') }}">
                <p>Video</p>
            </a>
        </button>
        <button type="button" class="btn btn-light"><a href="#artikel">
                <img src="{{ asset('img/artikel.png') }}">
                <p>Artikel</p>
            </a>
        </button>
        <br>
    </div>

    <div class="isi-konten">
        <div id="podcast">
            <h1>Podcast</h1>
            <table>
                <tr>
                    <td>
                        <p>Judul</p>
                        <audio controls>
                            <source src="{{ asset('img/nct.mp3') }}" type="audio/mpeg">
                        </audio>
                    </td>
                    <td>
                        <p>Judul</p>
                        <audio controls>
                            <source src="{{ asset('img/nct.mp3') }}" type="audio/mpeg">
                        </audio>
                    </td>
                    <td>
                        <p>Judul</p>
                        <audio controls>
                            <source src="{{ asset('img/nct.mp3') }}" type="audio/mpeg">
                        </audio>
                    </td>
                </tr>
            </table>
        </div>
        <div style="margin-top:5em; margin-bottom:5em;">
            <div id="video">
                <h1>Video</h1>
                <div class="row">
                    <div class="col-md-4">
                        <video width="320px" height="240px" controls>
                            <source src="{{ asset('img/nct.mp4') }}" type="video/mp4">
                        </video>
                        <p>Judul</p>
                    </div>
                    <div class="col-md-4">
                        <video width="320px" height="240px" controls>
                            <source src="{{ asset('img/nct.mp4') }}" type="video/mp4">
                        </video>
                        <p>Judul</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="artikel" style="margin-top:5em">
            <h1>Artikel</h1>
            <table>
                <tr>
                    <td>
                        <a href="">
                            <img src="{{ asset('img/bromo.jpg') }}" width="320px" height="240px">
                            <p>Judul</p>
                        </a>
                    </td>
                    <td>
                        <a href="">
                            <img src="{{ asset('img/bromo.jpg') }}" width="320px" height="240px">
                            <p>Judul</p>
                        </a>
                    </td>
                    <td>
                        <a href="">
                            <img src="{{ asset('img/bromo.jpg') }}" width="320px" height="240px">
                            <p>Judul</p>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>