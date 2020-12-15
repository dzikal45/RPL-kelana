<div id="mydaftar" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            {{-- <div class="card"> --}}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Daftar</h4>
            </div>

            <div class="modal-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">


                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nama"
                            autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">


                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    <div class="form-group">


                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password" placeholder="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    <div class="form-group">


                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password" placeholder="Password-Confirmation">

                    </div>

                    {{-- <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                    </button>
            </div>
        </div> --}}
        <div class="modal-footer" style="text-align:left;">
            <button type="submit" class="btn btn-success mr-auto">Daftar Sekarang</button>
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        </div>
        </form>

    </div>


    {{-- </div> --}}
</div>
</div>
</div>