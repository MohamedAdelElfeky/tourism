@extends('layouts.master')
@section('content')
    <!--begin::Tables Widget 9-->
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">{{ __('dashboard.users') }}</span>
                {{-- <span class="text-muted mt-1 fw-semibold fs-7">Over 500 members</span> --}}
            </h3>
            {{-- <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                title="Click to add a Family">
                <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_family">
                    <i class="ki-duotone ki-plus fs-2"></i>{{ __('dashboard.new') }}</a>
            </div> --}}
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="fw-bold text-muted">
                            <th class="w-25px">
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" data-kt-check="true"
                                        data-kt-check-target=".widget-9-check" />
                                </div>
                            </th>
                            <th class="min-w-200px">#</th>
                            <th class="min-w-150px">{{ __('dashboard.photo') }}</th>
                            <th class="min-w-150px">{{ __('dashboard.name') }}</th>
                            <th class="min-w-100px text-end">{{ __('dashboard.actions') }}</th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input widget-9-check" type="checkbox" value="1" />
                                </div>
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-45px me-5">
                                        <img src="assets/media/avatars/300-1.jpg" alt="" />
                                    </div>

                                </div>
                            </td>
                            <td>
                                user
                            </td>
                            <td>
                                <div class="d-flex justify-content-end flex-shrink-0">
                                  
                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                        <i class="ki-duotone ki-switch fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                        <i class="ki-duotone ki-pencil fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Tables Widget 9-->
    @include('admin/categories/_add_model')
@endsection
