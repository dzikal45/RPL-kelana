<div id="container-profile">
    <div class="content-profile">
        <div class="row">
            <div class="col-md-3" style="margin-top: 3em">
                <img src="{{ asset('img/Avatar.png') }}">
            </div>
            <div class="col-lg-7" style="margin-top: 10px;">
                <h1>{{Auth::user()->name}}</h1>
                <h3>Umur, Pekerjaan</h3>
                <h4>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                        <path fill-rule="evenodd"
                            d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" /></svg> Bandung,
                    Indonesia</h4>
                <p>Bio/Status Bio/Status Bio/Status Bio/Status Bio/Status Bio/Status Bio/Status <br> Bio/Status
                    Bio/Status</p>
                <div class="button-editprofile">
                    <button type="button" class="btn-editprofile" data-toggle="modal" data-target="#editprofile">Edit
                        Profile</button>
                </div>
                <!-- Modal editprofile -->
                <div id="editprofile" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content -->
                        <div class="modal-content-profile">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title-profile">EDIT PROFILE</h4>
                            </div>
                            <div class="modal-body-profile">
                                <form>
                                    <br>
                                    <div class="form-group">
                                        <label for="photo">Ubah Foto Profil</label>
                                        <br>
                                        <input type="file" class="photo" id="photo" placeholder="photo">
                                    </div>
                                    <div class="form-group">
                                        <label for="namalengkap">Nama Lengkap</label>
                                        <br>
                                        <input type="text" class="namalengkap" id="fullname" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="form-group">
                                        <label for="umur">Umur</label>
                                        <br>
                                        <select name="mult" size="1">
                                            <option>Kurang dari 20</option>
                                            <option>20</option>
                                            <option>21</option>
                                            <option>22</option>
                                            <option>23</option>
                                            <option>24</option>
                                            <option>25</option>
                                            <option>26</option>
                                            <option>26+</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <br>
                                        <input type="text" class="pekerjaan" id="pekerjaan" placeholder="Pekerjaan">
                                    </div>
                                    <div class="form-group">
                                        <label for="lokasi">Lokasi</label>
                                        <br>
                                        <select name="mult" size="1">
                                            <option>Jakarta</option>
                                            <option>Bandung</option>
                                            <option>Yogyakarta</option>
                                            <option>Bali</option>
                                            <option>Lampung</option>
                                            <option>Malang</option>
                                            <option>NTT</option>
                                            <option>Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="bio">Bio/Status</label>
                                        <br>
                                        <textarea placeholder="Status"></textarea>
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer-profile">
                                <button type="button" data-dismiss="modal">Update Profile</button>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>