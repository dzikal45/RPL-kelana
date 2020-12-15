<div class="pt-5">
    <div class="button">
        <button type="button" class="btn-addplace" data-toggle="modal" data-target="#addplace">Tambah Tempat</button>
        <button type="button" class="btn-filter" data-toggle="modal" data-target="#filter">Filter</button>
    </div>
</div>



<!-- Modal addplace -->
<div id="addplace" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Destinasi</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="/destinasi" role="form" id="recomender">
                    @csrf
                    <div class="form-group">
                        <label for="tempat">Nama Tempat</label>
                        <br>
                        <input type="text" class="tempat" id="nama_tempat" placeholder="Nama Tempat" name="nama_tempat"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <br>
                        <select name="mult" size="1" id="lokasi">
                            <option value="jakarta">Jakarta</option>
                            <option value="bandung">Bandung</option>
                            <option value="yogyakarta">Yogyakarta</option>
                            <option value="bali">Bali</option>
                            <option value="lampung">Lampung</option>
                            <option value="malang">Malang</option>
                            <option value="ntt">NTT</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <br>
                        <textarea placeholder="Deskripsi Tempat" id="deskripsi" name="deskripsi" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="upload">Upload Gambar</label>
                        <br>
                        <input type="file" class="upload" id="uploaded_image" placeholder="upload" name="uploaded_img">
                        <img id="preview_img" src="#" alt="your image" style="max-width:30em;max-height:30em" />
                        <input type="text" id="imageUrl" name="imageUrl" hidden required value=>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="submit_form" class="btn btn-warning">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end modal addplace -->
@foreach ($rekomender as $key => $data)

<div class="row " style="margin-bottom:4rem">
    <div class="col-md-8 col-md-offset-2">
        <div class="containerRecomender">

            <div class="cont1"><img src="{{ $data->image }} " style=" max-width:20em;max-height:30em" /></div>
            <div class=" cont2">
                <h3>{{ $data->nama_tempat }}</h3>
                <p>{{ $data->lokasi }}</p>
                <article>{{ $data->deskripsi }}</article>
                <br>
                <p>Oleh: {{Auth::user()->name}}</p>
            </div>
        </div>
    </div>
</div>
@endforeach
<script>
    function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        $('#preview_img').attr('src', e.target.result);
      }
      
      reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
  }
  
  $("#uploaded_image").change(function() {
    readURL(this);
  });
</script>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-storage.js"></script>

<script>
    // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyBt8BWyYuwbWfR3FvP5DANMCUcO9LvWUyo",
    authDomain: "kelana-90884.firebaseapp.com",
    databaseURL: "https://kelana-90884.firebaseio.com",
    projectId: "kelana-90884",
    storageBucket: "kelana-90884.appspot.com",
    messagingSenderId: "851632147323",
    appId: "1:851632147323:web:2ac9681a5eac853a558bde",
    measurementId: "G-LDQ71Q43HN"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
<script>
    var form = document.getElementById("recomender");
    document.getElementById("submit_form").addEventListener("click", function() {
        // window.setTimeout(UploadImage, 1000)
        UploadImage();
    });

    function UploadImage() {
        img = document.getElementById('preview_img');
        fetch(img.src)
            .then(res => res.blob())
            .then(blob => {
                const file = new File([blob], document.getElementById('nama_tempat').value + document.getElementById('lokasi').value + '.png', blob)
                console.log(file);
                var storageRef = firebase.storage().ref('images/destinasi/' + document.getElementById('nama_tempat').value + document.getElementById('lokasi').value);
                var task = storageRef.put(file).then(function(snapshot) {
                    console.log('Uploaded a blob or file!');
                    snapshot.ref.getDownloadURL().then(function(downloadURL) {
                        console.log('File available at', downloadURL);
                        inputImage = document.getElementById('imageUrl')
                        inputImage.setAttribute('value', downloadURL);
                        window.setTimeout(SubmitForm, 2000)
                    })
                })
            });
    }

    function SubmitForm() {
        form.submit();
    }
</script>