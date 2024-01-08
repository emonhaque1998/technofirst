<x-app-layout>
    @if (session('success'))
        {{ session('success') }}
    @endif
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Website Information</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Website Information</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <h5 class="mb-2">Website Logo</h5>
            <div class="row">
                <div class="w-50 card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Basic Information</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('website-information.store') }}" method="POST" enctype="multipart/form-data"
                        id="brand_logo_form">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input type="text" class="form-control" name="mobile"
                                    value='@if (!empty($basicInfo->phone)) {{ $basicInfo->phone }} @endif'
                                    id="mobileNumber" placeholder="Enter Phone Number">
                                <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" class="form-control" name="email"
                                    value='@if (!empty($basicInfo->email)) {{ $basicInfo->email }} @endif'
                                    id="emailAdd" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Brand Logo</label>
                                <div class="input-group d-none">
                                    <div class="custom-file">
                                        <input type="file" name="brandLogo" class="custom-file-input"
                                            id="brand_logo_input">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center items-start flex-col mb-5">
                                <div id="brand_logo_src"
                                    @if (!empty($basicInfo->logo)) style="background: url({{ asset("storage/$basicInfo->logo") }}); background-repeat: no-repeat;  object-fit: cover" class="w-40 h-40 bg-cover bg-center">
                                @else
                                    class="w-40 h-40 bg-[url('https://placekitten.com/1400')] bg-cover bg-center"> @endif
                                    <div id="band_logo"
                                    class="w-full h-full flex  justify-center items-center
                                             hover:backdrop-brightness-75">
                                    <span class="text-white text-lg w-1/2 text-center d-none show_title">Update
                                        Brand
                                        Logo</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary bg-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
        </div>
    </section>


</x-app-layout>
