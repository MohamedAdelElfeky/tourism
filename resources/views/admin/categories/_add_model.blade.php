<!--begin::Modal - Invite Friends-->
<div class="modal fade" id="kt_modal_family" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">

        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal"><i
                        class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">

                <div class="fv-row mb-8">
                    {{-- <label class="fs-6 fw-semibold mb-2">>{{ __('dashboard.name') }}</label> --}}
                    <input type="text" class="form-control form-control-solid"
                        placeholder=" {{ __('dashboard.enter') . ' ' . __('dashboard.name') }}" name="Project Launch" />
                </div>
                <div class="fv-row mb-8">
                    <label class="fs-6 fw-semibold mb-2">{{ __('dashboard.Attachments') }}</label>
                    <!--begin::Dropzone-->
                    <div class="dropzone" id="kt_modal_create_ticket_attachments">
                        <!--begin::Message-->
                        <div class="dz-message needsclick align-items-center">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-file-up fs-3hx text-primary">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <!--end::Icon-->                           
                        </div>
                    </div>
                    <!--end::Dropzone-->
                </div>

                <!--begin::Textarea-->
                {{-- <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea> --}}
                <!--end::Textarea-->
                <!--begin::Users-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Invite Friend-->
