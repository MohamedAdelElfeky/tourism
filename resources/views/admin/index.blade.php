@extends('layouts.master')
@section('content')
    <div class="row g-5 g-xl-8">

        {{-- <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
            <!--begin::Card widget 4-->
            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center">
                            <!--begin::Currency-->
                            <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
                            <!--end::Currency-->
                            <!--begin::Amount-->
                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">69,700</span>
                            <!--end::Amount-->
                            <!--begin::Badge-->
                            <span class="badge badge-light-success fs-base">
                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>2.2%</span>
                            <!--end::Badge-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Subtitle-->
                        <span class="text-gray-400 pt-1 fw-semibold fs-6">Expected Earnings</span>
                        <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body pt-2 pb-4 d-flex align-items-center">
                    <!--begin::Chart-->
                    <div class="d-flex flex-center me-5 pt-2">
                        <div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
                    </div>
                    <!--end::Chart-->
                    <!--begin::Labels-->
                    <div class="d-flex flex-column content-justify-center w-100">
                        <!--begin::Label-->
                        <div class="d-flex fs-6 fw-semibold align-items-center">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
                            <!--end::Bullet-->
                            <!--begin::Label-->
                            <div class="text-gray-500 flex-grow-1 me-4">Shoes</div>
                            <!--end::Label-->
                            <!--begin::Stats-->
                            <div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Label-->
                        <!--begin::Label-->
                        <div class="d-flex fs-6 fw-semibold align-items-center my-3">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
                            <!--end::Bullet-->
                            <!--begin::Label-->
                            <div class="text-gray-500 flex-grow-1 me-4">Gaming</div>
                            <!--end::Label-->
                            <!--begin::Stats-->
                            <div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Label-->
                        <!--begin::Label-->
                        <div class="d-flex fs-6 fw-semibold align-items-center">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                            <!--end::Bullet-->
                            <!--begin::Label-->
                            <div class="text-gray-500 flex-grow-1 me-4">Others</div>
                            <!--end::Label-->
                            <!--begin::Stats-->
                            <div class="fw-bolder text-gray-700 text-xxl-end">$45,257</div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Labels-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card widget 4-->
            <!--begin::Card widget 5-->
            <div class="card card-flush h-md-50 mb-xl-10">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center">
                            <!--begin::Amount-->
                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">1,836</span>
                            <!--end::Amount-->
                            <!--begin::Badge-->
                            <span class="badge badge-light-danger fs-base">
                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>2.2%</span>
                            <!--end::Badge-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Subtitle-->
                        <span class="text-gray-400 pt-1 fw-semibold fs-6">Orders This Month</span>
                        <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body d-flex align-items-end pt-0">
                    <!--begin::Progress-->
                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                        <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                            <span class="fw-bolder fs-6 text-dark">1,048 to Goal</span>
                            <span class="fw-bold fs-6 text-gray-400">62%</span>
                        </div>
                        <div class="h-8px mx-3 w-100 bg-light-success rounded">
                            <div class="bg-success rounded h-8px" role="progressbar" style="width: 62%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!--end::Progress-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card widget 5-->
        </div>

        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
            <!--begin::Card widget 6-->
            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center">
                            <!--begin::Currency-->
                            <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
                            <!--end::Currency-->
                            <!--begin::Amount-->
                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">2,420</span>
                            <!--end::Amount-->
                            <!--begin::Badge-->
                            <span class="badge badge-light-success fs-base">
                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>2.6%</span>
                            <!--end::Badge-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Subtitle-->
                        <span class="text-gray-400 pt-1 fw-semibold fs-6">Average Daily Sales</span>
                        <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body d-flex align-items-end px-0 pb-0">
                    <!--begin::Chart-->
                    <div id="kt_card_widget_6_chart" class="w-100" style="height: 80px"></div>
                    <!--end::Chart-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card widget 6-->
            <!--begin::Card widget 7-->
            <div class="card card-flush h-md-50 mb-xl-10">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column">
                        <!--begin::Amount-->
                        <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">6.3k</span>
                        <!--end::Amount-->
                        <!--begin::Subtitle-->
                        <span class="text-gray-400 pt-1 fw-semibold fs-6">New Customers This Month</span>
                        <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body d-flex flex-column justify-content-end pe-0">
                    <!--begin::Title-->
                    <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s Heroes</span>
                    <!--end::Title-->
                    <!--begin::Users group-->
                    <div class="symbol-group symbol-hover flex-nowrap">
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                            <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                            <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                            <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                            <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                            <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                            <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                        </div>
                        <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                            <span class="symbol-label bg-light text-gray-400 fs-8 fw-bold">+42</span>
                        </a>
                    </div>
                    <!--end::Users group-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card widget 7-->
        </div> --}}

        <div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
            <!--begin::Chart widget 3-->
            <div class="card card-flush overflow-hidden h-md-100">
                <!--begin::Header-->
                <div class="card-header py-5">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">{{ __('dashboard.profits') }}</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->

                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">

                    <!--begin::Chart-->
                    <div id="kt_charts_widget_3" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
                    <!--end::Chart-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Chart widget 3-->
        </div>
        <div class="col-xl-6">
            <!--begin::List Widget 7-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Header-->
                <div class="card-header align-items-center border-0 mt-4">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="fw-bold text-dark">{{ __('dashboard.Latest orders') }}</span>
                    </h3>

                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-3">
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 me-4">
                            <div class="symbol-label"
                                style="background-image: url({{ asset('assets/media/stock/600x400/img-70.jpg') }})">
                            </div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Title-->
                        <div class="d-flex flex-row-fluid flex-wrap align-items-center">
                            <div class="flex-grow-1 me-2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">traveling</a>
                            </div>
                            <span class="badge fs-8 fw-bold my-2">19 Oct 2020, 7:32 am</span>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 me-4">
                            <div class="symbol-label"
                                style="background-image: url({{ asset('assets/media/stock/600x400/img-59.jpg') }})"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Title-->
                        <div class="d-flex flex-row-fluid flex-wrap align-items-center">
                            <div class="flex-grow-1 me-2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">traveling
                                </a>
                            </div>
                            <span class="badge fs-8 fw-bold my-2">19 Oct 2020, 7:32 am</span>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 me-4">
                            <div class="symbol-label"
                                style="background-image: url({{ asset('assets/media/stock/600x400/img-78.jpg') }})"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Title-->
                        <div class="d-flex flex-row-fluid flex-wrap align-items-center">
                            <div class="flex-grow-1 me-2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">traveling</a>
                            </div>
                            <span class="badge fs-8 fw-bold my-2">19 Oct 2020, 7:32 am</span>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 me-4">
                            <div class="symbol-label"
                                style="background-image: url({{ asset('assets/media/stock/600x400/img-57.jpg') }})"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Title-->
                        <div class="d-flex flex-row-fluid flex-wrap align-items-center">
                            <div class="flex-grow-1 me-2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">traveling</a>
                            </div>
                            <span class="badge fs-8 fw-bold my-2">19 Oct 2020, 7:32 am</span>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::List Widget 7-->
        </div>
        <div class="col-xl-6">
            <!--begin::List Widget 8-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header align-items-center border-0 mt-4">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="fw-bold text-dark">{{ __('dashboard.Services evaluation') }}</span>
                    </h3>

                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-3">
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 me-4">
                            <div class="symbol-label"
                                style="background-image: url({{ asset('assets/media/stock/600x400/img-58.jpg') }})"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Content-->
                        <div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
                            <!--begin::Title-->
                            <div class="flex-grow-1 my-lg-0 my-2 me-2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Service</a>
                            </div>
                            <!--end::Title-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center">
                                <div class="me-6">
                                    <i class="fa fa-star-half-alt me-1 text-warning fs-5"></i>
                                    <span class="text-gray-800 fw-bold">4.2</span>
                                </div>
                                <a href="#" class="btn btn-icon btn-light btn-sm border-0">
                                    <i class="ki-duotone ki-arrow-right fs-2 text-primary">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </a>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 me-4">
                            <div class="symbol-label"
                                style="background-image: url({{ asset('assets/media/stock/600x400/img-59.jpg') }})"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Content-->
                        <div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
                            <!--begin::Title-->
                            <div class="flex-grow-1 my-lg-0 my-2 me-2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Service</a>
                            </div>
                            <!--end::Title-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center">
                                <div class="me-6">
                                    <i class="fa fa-star-half-alt me-1 text-warning fs-5"></i>
                                    <span class="text-gray-800 fw-bold">5.0</span>
                                </div>
                                <a href="#" class="btn btn-icon btn-light btn-sm border-0">
                                    <i class="ki-duotone ki-arrow-right fs-2 text-primary">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </a>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 me-4">
                            <div class="symbol-label"
                                style="background-image: url({{ asset('assets/media/stock/600x400/img-70.jpg') }})">
                            </div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Content-->
                        <div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
                            <!--begin::Title-->
                            <div class="flex-grow-1 my-lg-0 my-2 me-2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Service</a>
                            </div>
                            <!--end::Title-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center">
                                <div class="me-6">
                                    <i class="fa fa-star-half-alt me-1 text-warning fs-5"></i>
                                    <span class="text-gray-800 fw-bold">5.7</span>
                                </div>
                                <a href="#" class="btn btn-icon btn-light btn-sm border-0">
                                    <i class="ki-duotone ki-arrow-right fs-2 text-primary">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </a>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60px symbol-2by3 me-4">
                            <div class="symbol-label"
                                style="background-image: url({{ asset('assets/media/stock/600x400/img-69.jpg') }})"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Content-->
                        <div class="d-flex flex-row-fluid align-items-center flex-wrap my-lg-0 me-2">
                            <!--begin::Title-->
                            <div class="flex-grow-1 my-lg-0 my-2 me-2">
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Service</a>
                            </div>
                            <!--end::Title-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center">
                                <div class="me-6">
                                    <i class="fa fa-star-half-alt me-1 text-warning fs-5"></i>
                                    <span class="text-gray-800 fw-bold">3.7</span>
                                </div>
                                <a href="#" class="btn btn-icon btn-light btn-sm border-0">
                                    <i class="ki-duotone ki-arrow-right fs-2 text-primary">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </a>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::List Widget 8-->
        </div>
    </div>
@endsection
