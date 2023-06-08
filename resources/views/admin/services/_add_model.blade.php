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
                    {{-- <label class="fs-6 fw-semibold mb-2">{{ __('dashboard.name') }}</label> --}}
                    <select name="card_expiry_month" class="form-select form-select-solid" data-control="select2"
                        data-hide-search="true" data-placeholder="{{ __('dashboard.category') }}">
                        <option></option>
                        <option value="1">category 1</option>
                        <option value="2">category 2</option>
                        <option value="3">category 3</option>

                    </select>
                </div>
                <div class="fv-row mb-8">
                    {{-- <label class="fs-6 fw-semibold mb-2">{{ __('dashboard.name') }}</label> --}}
                    <input type="text" class="form-control form-control-solid"
                        placeholder=" {{ __('dashboard.enter') . ' ' . __('dashboard.name') }}" name="Project Launch" />
                </div>
                <div class="fv-row mb-8">
                    {{-- <label class="fs-6 fw-semibold mb-2">{{ __('dashboard.name') }}</label> --}}

                    <input type="number" name="date_number" class="form-control form-control-sm form-control-solid"
                        placeholder="{{ __('dashboard.enter') . ' ' . __('dashboard.price') }}" value="" />

                </div>
                <div class="fv-row mb-8">

                    <!--begin::Textarea-->
                    <textarea class="form-control form-control-solid mb-8" rows="3"
                        placeholder="{{ __('dashboard.enter') . ' ' . __('dashboard.description') }}"></textarea>
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

                <!--end::Textarea-->
                {{-- <div class="fv-row mb-8">
                    <!--begin::Image input-->
                    <div class="image-input image-input-outline" data-kt-image-input="true"
                        style="background-image: url('assets/media/svg/avatars/blank.svg')">
                        <!--begin::Preview existing avatar-->
                        <div class="image-input-wrapper w-125px h-125px"
                            style="background-image: url(assets/media/svg/avatars/blank.svg)"></div>
                        <!--end::Preview existing avatar-->
                        <!--begin::Label-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                            <i class="ki-duotone ki-pencil fs-7">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <!--begin::Inputs-->
                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                            <input type="hidden" name="avatar_remove" />
                            <!--end::Inputs-->
                        </label>
                        <!--end::Label-->
                        <!--begin::Cancel-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                            <i class="ki-duotone ki-cross fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <!--end::Cancel-->
                        <!--begin::Remove-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                            <i class="ki-duotone ki-cross fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <!--end::Remove-->
                    </div>
                    <!--end::Image input-->
                    <!--begin::Hint-->
                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                    <!--end::Hint-->
                </div> --}}
                <!--begin::Users-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Invite Friend-->
