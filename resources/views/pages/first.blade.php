@extends('layouts.app')

@section('content')
    <div class="bg-white py-5">
        <div class="container py-5">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                    <h2 class="font-weight-light">Lorem ipsum dolor sit amet</h2>
                    <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="data:image/jpeg;base64,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" alt="" class="img-fluid mb-4 mb-lg-0"></div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 px-5 mx-auto"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRK7PR-qOSi-H6ysgGmRJd6W44dFpfrulfEgg&usqp=CAU" alt="" class="img-fluid mb-4 mb-lg-0"></div>
                <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
                    <h2 class="font-weight-light">Lorem ipsum dolor sit amet</h2>
                    <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light py-5">
        <div class="container py-5">
            <div class="row mb-4">
                <div class="col-lg-5">
                    <h2 class="display-4 font-weight-light">Mūsų komanda</h2>
                    <p class="font-italic text-muted">Jauni perspektyvūs "Vilniaus Universiteto" Informacinių technologijų specialistai.</p>
                </div>
            </div>

            <div class="row text-center">
                <!-- Team item-->
                <div class="col-xl-4 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834132/avatar-4_ozhrib.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Agnė Butkutė</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                    </div>
                </div>
                <!-- End-->

                <!-- Team item-->
                <div class="col-xl-4 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834130/avatar-3_hzlize.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Tomas Dunčikas</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                    </div>
                </div>
                <!-- End-->

                <!-- Team item-->
                <div class="col-xl-4 col-sm-6 mb-5">
                    <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834133/avatar-2_f8dowd.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Edvinas Želnys</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                    </div>
                </div>
                <!-- End-->

            </div>
        </div>
    </div>

@endsection
