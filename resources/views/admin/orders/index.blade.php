@extends('layouts.master')
@section('content')
    <div class="card mb-5 mb-xl-8">
        <!--begin::Card header-->
        <div class="card-header pt-7">
            <!--begin::Title-->
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold text-gray-800">{{ __('dashboard.orders') }}</span>
            </h3>
            <!--end::Title-->

        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-2">
            <!--begin::Table-->
            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                    <!--begin::Table row-->
                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-100px">#</th>
                        <th class="text-end min-w-100px">{{ __('dashboard.created') }}</th>
                        <th class="text-end min-w-125px">{{ __('dashboard.customer') }}</th>
                        <th class="text-end min-w-100px">{{ __('dashboard.total') }}</th>
                        <th class="text-end min-w-100px">{{ __('dashboard.status') }}</th>
                        <th class="text-end"></th>
                    </tr>
                    <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="fw-bold text-gray-600">

                    <tr>
                        <td>
                            <a href="#" class="text-gray-800 text-hover-primary">1</a>
                        </td>
                        <td class="text-end">7 min ago</td>
                        <td class="text-end">
                            <a href="#" class="text-gray-600 text-hover-primary">Mohamed</a>
                        </td>
                        <td class="text-end">630.00</td>
                        <td class="text-end">
                            <span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                        </td>

                    </tr>
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>

    @include('admin/categories/_add_model')
@endsection
