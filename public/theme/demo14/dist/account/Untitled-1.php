<?php include 'common/header_new.php'; ?>
<?php include 'common/sidebar.php'; ?>

<div class="d-flex flex-column flex-column-fluid container-fluid">
    <!--begin::Toolbar-->
    <div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column me-3">
            <!--begin::Title-->
            <h1 class="d-flex text-dark fw-bold my-1 fs-3">Vehicle Profile</h1>
        </div>

    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="content flex-column-fluid" id="kt_content">
        <input type="hidden" class="form-control form-control-solid" value="<?php echo $result['vid']; ?>" placeholder="" name="vid" id="vid" />

        <!--<input type="hidden" class="form-control form-control-solid"  value="<?php echo $result['vid']; ?>" placeholder="" name="vid" id="people_id" />-->

        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-10">
                <div class="card">
                    <div class="card-body pt-9 pb-0">
                        <!--begin::Details-->
                        <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                            <!--begin: Pic-->
                            <div class="me-7 mb-4">
                                <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative" id="manuflogo">
                                    <!--begin::Avatar-->

                                    <!--end::Avatar-->


                                </div>
                            </div>

                            <div class="flex-grow-1">

                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">

                                    <div class="d-flex flex-column">

                                        <div class="d-flex align-items-center mb-2">

                                            <a class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">
                                                <?php echo $result['v_model_name']; ?>
                                            </a>


                                        </div>
                                        <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">



                                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5  mb-2">

                                                <span class="svg-icon svg-icon-4 me-1">
                                                    <i class="fa fa-car"></i>
                                                </span>
                                                <span>
                                                    <?php echo $result['man_name']; ?>
                                                </span>
                                            </a>

                                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2 ">

                                                <span class="svg-icon svg-icon-4 me-1">
                                                    <i class="fa fa-file"></i>
                                                </span>
                                                <span>
                                                    <?php echo $result['chasis_no']; ?>
                                                </span>

                                            </a>
                                        </div>

                                        <!--end::Info-->
                                    </div>
                                    <div class="d-flex my-4">
                                        <?php if ($result['sold_flag'] != 0) { ?>
                                            <a href="#" class="btn btn-sm btn-danger fw-bold ms-2 fs-8 py-1 px-3">Sold Vehicle</a>
                                        <?php } ?>
                                    </div>
                                    <?php if ($result['sold_flag'] == 0) { ?>
                                        <!--start sold-->
                                        <div class="d-flex my-4">

                                            <div class="me-0">
                                                <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <i class="bi bi-three-dots fs-3"></i>
                                                </button>
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

                                                    <div class="menu-item px-3 my-1">
                                                        <a id="veh_needsold" onclick="setsold()" class="menu-link px-3">Mark ad sold</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::User-->
                                    <?php } ?>
                                </div>
                                <!--end::Title-->
                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column flex-grow-1 pe-8">
                                        <!--begin::Stats-->
                                        <div class="d-flex flex-wrap">
                                            <!--begin::Stat-->
                                            <vehicle-plate>
                                                <div class="d-flex align-items-stretch plate whiteBg border" style="direction: ltr;">
                                                    <div class="platePrefix p-1">
                                                        <span id="plate_prefix">
                                                            <?php echo $result['plate_prefix']; ?>
                                                        </span>
                                                    </div><small class="emritsName p-1">
                                                        <span class="fz-12" id="emirate">
                                                            <?php echo $result['emirate']; ?>
                                                        </span><br><a id="plate_type">
                                                            <?php echo $result['plate_type']; ?>
                                                        </a>
                                                    </small>
                                                    <div _ngcontent-ehw-c139="" class="plateNumber ml-auto-all p-2">
                                                        <?php echo $result['reg_no']; ?>

                                                    </div>
                                                </div>
                                            </vehicle-plate>

                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Progress-->
                                    <!--<div-->
                                    <!--	class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">-->
                                    <!--	<div class="d-flex justify-content-between w-100 mt-auto mb-2">-->
                                    <!--		<span class="fw-semibold fs-6 text-gray-400">EID</span>-->
                                    <!--		No:<span class="fs-6 text-gray-700"> <?php echo $data['eid']; ?></span>-->
                                    <!--		Expiry<span class="fs-6 text-gray-700"> <?php echo $data['eid_expiry']; ?> </span>-->

                                    <!--	</div>-->
                                    <!--	<div class="d-flex justify-content-between w-100 mt-auto mb-2">-->
                                    <!--		<span class="fw-semibold fs-6 text-gray-400">Passport</span>-->
                                    <!--		No:<span class="fs-6 text-gray-700"> <?php echo $data['passport_no']; ?></span>-->
                                    <!--		Expiry<span class="fs-6 text-gray-700">  <?php echo $data['passport_expiry']; ?></span>-->
                                    <!--	</div>-->

                                    <!--</div>-->
                                    <div class="row gx-9 gy-6">


                                        <!--<div class="col-xl-6 mt-0">-->
                                        <!--begin::Card-->
                                        <!--	<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed h-lg-100 p-6">-->
                                        <!--begin::Info-->
                                        <!--		<div class="d-flex flex-column py-2">-->
                                        <!--begin::Owner-->
                                        <!--			<div class="d-flex align-items-center fs-4 fw-bold ">Fuel Type :  <span ><?php echo $result['fuel_type']; ?></span></div>-->
                                        <!--end::Owner-->
                                        <!--begin::Wrapper-->
                                        <!--			<div class="d-flex align-items-center">-->

                                        <!--<div>-->

                                        <!--	<div class="fs-6 fw-semibold text-gray-400" style="min-width: 200px;"  > Expires at <span ><?php echo $result['eexpiry']; ?></span></div>-->
                                        <!--</div>-->
                                        <!--end::Details-->
                                        <!--			</div>-->
                                        <!--end::Wrapper-->
                                        <!--		</div>-->

                                        <!--	</div>-->
                                        <!--end::Card-->
                                        <!--</div>-->

                                        <!--	<div class="col-xl-6 mt-0">-->
                                        <!--begin::Notice-->
                                        <!--		<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed h-lg-100 p-6">-->
                                        <!--begin::Info-->
                                        <!--			<div class="d-flex flex-column py-2">-->
                                        <!--begin::Owner-->
                                        <!--				<div class="d-flex align-items-center fs-4 fw-bold ">File No : <span> <?php echo $result['file_no']; ?></span></div>-->
                                        <!--end::Owner-->
                                        <!--begin::Wrapper-->
                                        <!--				<div class="d-flex align-items-center">-->

                                        <!--					<div>-->

                                        <!--<div class="fs-6 fw-semibold text-gray-400" style="min-width: 200px;" > Expires at <span > <?php echo $result['pexpiry']; ?></span></div>-->
                                        <!--					</div>-->
                                        <!--end::Details-->
                                        <!--				</div>-->
                                        <!--end::Wrapper-->
                                        <!--			</div>-->

                                        <!--		</div>-->
                                        <!--end::Notice-->
                                        <!--	</div>-->

                                        <!--</div>-->

                                        <!--end::Progress-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Navs-->

                            <!--begin::Navs-->
                        </div>
                    </div>
                </div>

                <?php

                if ($result['sold_flag'] == 1) {
                ?>


                    <div class="card mb-5 mb-xl-5 mt-5">

                        <div class="card-body py-10">
                            <h2 class="mb-9">Vehicle Sales Details</h2>

                            <div class="row mb-10">

                                <div class="col-xl-4 mb-15 mb-xl-0 pe-5">
                                    <h4 class="mb-0">Sale Type</h4>
                                    <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">Transfer</a>
                                </div>
                                <div class="col-xl-4 mb-15 mb-xl-0 pe-5">
                                    <h4 class="mb-0">Type Of Transfer</h4>
                                    <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">OutSide </a>
                                </div>
                                <div class="col-xl-4 mb-15 mb-xl-0 pe-5">
                                    <h4 class="mb-0">Transfer To</h4>
                                    <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">Company </a>
                                </div>

                                <div class="col-xl-4 mb-15 mb-xl-0 pe-5">
                                    <h4 class="mb-0">Transfer TC Number</h4>
                                    <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">Company </a>
                                </div>

                                <div class="col-xl-4 mb-15 mb-xl-0 pe-5">
                                    <h4 class="mb-0">Contact Details</h4>
                                    <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">Name : asdasd, Mobile : asdasdas</a>
                                </div>

                                <div class="col-xl-4 mb-15 mb-xl-0 pe-5">
                                    <h4 class="mb-0">Transfer To</h4>
                                    <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">Company </a>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col">
                                    <div class="card card-dashed flex-center min-w-175px my-3 p-6">
                                        <span class="fs-4 fw-semibold text-info pb-1 px-2">Sold Amount</span>
                                        <span class="fs-lg-2tx fw-bold d-flex justify-content-center">AED
                                            <span data-kt-countup="true" data-kt-countup-value="63,240.00"> 0</span></span>
                                        attachment link
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card card-dashed flex-center min-w-175px my-3 p-6">
                                        <span class="fs-4 fw-semibold text-success pb-1 px-2">Advance Amount</span>
                                        <span class="fs-lg-2tx fw-bold d-flex justify-content-center">AED
                                            <span data-kt-countup="true" data-kt-countup-value="8,530.00"> 0</span></span>
                                        attachment link
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card card-dashed flex-center min-w-175px my-3 p-6">
                                        <span class="fs-4 fw-semibold text-danger pb-1 px-2">Balance Amount</span>
                                        <span class="fs-lg-2tx fw-bold d-flex justify-content-center">AED
                                            <span data-kt-countup="true" data-kt-countup-value="2,600">0</span></span>
                                        attachment link
                                    </div>
                                </div>


                            </div>

                            <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
                                <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="currentColor" />
                                        <path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                    <!--begin::Content-->
                                    <div class="mb-3 mb-md-0 fw-semibold">
                                        <h4 class="text-gray-900 fw-bold">Other Details</h4>
                                        <div class="fs-6 text-gray-700 pe-7">checkbox details here</div>
                                    </div>

                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Notice-->
                        </div>
                        <!--end::Body-->
                    </div>
                <?php
                }
                ?>
            </div>

            <div class="row ">





                <!--begin::Col-->
                <div class="col-xl-4 mb-5 mb-xl-10">
                    <!--begin::Tables Widget 3-->
                    <div class="card h-xl-100" id="detail_div">
                        <!--begin::Card header-->
                        <div class="card-header cursor-pointer">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Basic Details</h3>
                            </div>
                            <a onclick="edit_vehicle()" class="btn btn-primary align-self-center">Edit</a>



                        </div>

                        <div class="card-body p-9">


                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Engine No</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">
                                        <?php echo $result['engine_no']; ?>
                                    </span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->

                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Color</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">
                                        <?php echo $result['color']; ?>
                                    </a>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Transmission</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">
                                        <?php echo $result['transmission']; ?>
                                    </span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->


                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Mulkiya Expiry</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">
                                        <?php echo $result['rexpiry']; ?>
                                    </span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Insurance Expiry</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">
                                        <?php echo $result['iexpiry']; ?>
                                    </span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Registration Year</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">
                                        <?php echo $result['reg_year']; ?>
                                    </span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Fuel Type</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">
                                        <?php echo $result['fuel_type']; ?>
                                    </span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">File No</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">
                                        <?php echo $result['file_no']; ?>
                                    </span>
                                </div>
                                <!--end::Col-->
                            </div>


                            <!--end::Notice-->
                        </div>
                    </div>
                    <!--end::Tables Widget 3-->
                    <!--begin::Card-->
                    <div class="card mb-5 mb-xl-10" id="edit_div" style="display:none;">
                        <!-- <div class="card-header border-0"> -->
                        <!--begin::Card title-->
                        <div class="card-header  pt-6">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Edit Vehicle</h2>
                            <!--end::Modal title-->

                        </div>
                        <!--	<a onclick="addmodal()" class="btn btn-primary align-self-center">Add Insurance</a>-->
                        <!-- </div> -->
                        <!--begin::Card body-->
                        <div class="card-body">
                            <div class="scroll-y me-n7 pe-7" id="kt_modal_add_vehicle_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_vehicle_header" data-kt-scroll-wrappers="#kt_modal_add_vehicle_scroll" data-kt-scroll-offset="300px">
                                <!--begin::Input group-->
                                <!-- <input type="hidden"  id="vid"> -->
                                <div class="row g-9 mb-2">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Select Firm</label>
                                        <select name="fridE" id="fridE" aria-label="Select a firm" data-control="select2" data-placeholder="Select a firm..." class="form-select form-select-solid form-select-lg fw-semibold">

                                        </select>
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="fs-6 fw-semibold mb-2">File No</label>
                                        <input class="form-control form-control-solid" placeholder="" name="file_noE" id="file_noE" />
                                    </div>

                                </div>
                                <div class="row g-9 mb-2">
                                    <div class="col-md-6 fv-row">
                                        <label class="fs-6 fw-semibold mb-2">Vehicle Type</label>

                                        <select name="vehicle_typeE" id="vehicle_typeE" onchange="getsupplier()" aria-label="Select Type" data-control="select2" data-placeholder="Select a type..." class="form-select form-select-solid form-select-lg fw-semibold">

                                        </select>
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class=" required fs-6 fw-semibold mb-2">Select Model</label>
                                        <select name="modelE" id="modelE" aria-label="Select" data-control="select2" data-placeholder="Select" class="form-select form-select-solid form-select-lg fw-semibold">

                                        </select>
                                    </div>

                                </div>
                                <div class="row g-9 mb-2" id="suplrdiv" style="display: none;">
                                    <div class="col-md-6 fv-row">
                                        <label class="fs-6 fw-semibold mb-2">Supplier Name</label>

                                        <select name="suplrE" id="suplrE" aria-label="Select a supplier" data-control="select2" data-placeholder="Select a supplier..." class="form-select form-select-solid form-select-lg fw-semibold">

                                        </select>
                                    </div>
                                </div>
                                <div class="row g-9 mb-2">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Emirate</label>

                                        <select name="emirateE" id="emirateE" aria-label="Select an emirate" data-control="select2" data-placeholder="Select an emirate..." class="form-select form-select-solid form-select-lg fw-semibold">
                                            <option value="">Select</option>
                                            <option value="Abu Dhabi">Abu Dhabi</option>
                                            <option value="Dubai">Dubai</option>
                                            <option value="Sharjah">Sharjah</option>
                                            <option value="Ajman">Ajman</option>
                                            <option value="Umm Al Quwain">Umm Al Quwain</option>
                                            <option value="Fujairah">Fujairah</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="fs-6 fw-semibold mb-2">Plate Type</label>
                                        <select name="plate_typeE" id="plate_typeE" aria-label="Select an year" data-control="select2" data-placeholder="Select ..." class="form-select form-select-solid form-select-lg fw-semibold">


                                        </select>
                                    </div>
                                </div>
                                <div class="row g-9 mb-2">

                                    <div class="col-md-6 fv-row">
                                        <label class="fs-6 fw-semibold mb-2">Plate Prefix</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="plate_prefixE" id="plate_prefixE" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Reg.No</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="reg_noE" id="reg_noE" />
                                    </div>
                                </div>
                                <div class="row g-9 mb-2">

                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Chasis No</label>
                                        <input class="form-control form-control-solid" placeholder="" name="chasis_noE" id="chasis_noE" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="fs-6 fw-semibold mb-2">Engine No</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="engine_noE" id="engine_noE" />
                                    </div>
                                </div>
                                <div class="row g-9 mb-2">

                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Year</label>
                                        <select name="reg_yearE" id="reg_yearE" aria-label="Select an year" data-control="select2" data-placeholder="Select an year..." class="form-select form-select-solid form-select-lg fw-semibold">


                                        </select>
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="fs-6 fw-semibold mb-2">Color</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="colorE" id="colorE" />
                                    </div>
                                </div>

                            </div>
                            <div class="row g-9 mb-2">

                                <div class="col-md-6 fv-row">
                                    <label class="required fs-6 fw-semibold mb-2">Mulkiya Expiry</label>
                                    <input type="date" class="form-control form-control-solid" placeholder="" name="mulki_expiryE" id="mulki_expiryE" />

                                </div>
                                <div class="col-md-6 fv-row">
                                    <label class="fs-6 fw-semibold mb-2">Insurance Expiry</label>
                                    <input type="date" class="form-control form-control-solid" placeholder="" name="ins_expiryE" id="ins_expiryE" />
                                </div>
                            </div>

                        </div>
                        <div class=" d-flex justify-content-end py-4 px-2">
                            <!--begin::Button-->
                            <button type="button" onclick="getclear()" class="btn btn-light me-3" data-bs-dismiss="modal">Clear</button>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="button" id="submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>

                            </button>
                            <!--end::Button-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <div class="col-xl-8 mb-5 mb-xl-10">
                    <!--begin::Table Widget 6-->
                    <div class="card h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Other Details</span>

                            </h3>
                            <div class="card-toolbar">
                                <!--begin:::Tabs-->
                                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
                                    <?php if (!empty($vehicle_detail)) {

                                    ?>
                                        <li class="nav-item">
                                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_user_view_overview_securitynewvehicle">New Vehicle Details</a>
                                        </li>
                                    <?php } ?>
                                    <!--begin:::Tab item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_user_view_overview_tab">Mulkiya</a>
                                    </li>
                                    <!--end:::Tab item-->
                                    <!--begin:::Tab item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_user_view_overview_security">Insurance</a>
                                    </li>
                                    <!--end:::Tab item-->
                                    <!--begin:::Tab item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_user_view_overview_events_and_logs_tab">Speed Limiter</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_user_view_overview_securitygps">GPS</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_user_view_overview_securitydocuments">Other Documents</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_user_view_overview_v_passing">Passing</a>
                                    </li>
                                    <!--end:::Tab item-->
                                    <!--begin:::Tab item-->

                                    <!--end:::Tab item-->
                                </ul>
                                <!--end:::Tabs-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <div class="tab-content">
                                <?php if (!empty($vehicle_detail)) {
                                    //print_r($vehicle_detail);	
                                ?>
                                    <div class="tab-pane fade show " id="kt_user_view_overview_securitynewvehicle" role="tabpanel">
                                        <!--begin::Card-->

                                        <div class="card card-flush mb-6 mb-xl-9">

                                            <div class="row">

                                                <!--start div1-->

                                                <div class="col-xl-6 mb-5 mb-xl-10">
                                                    <!--begin::Tables Widget 3-->
                                                    <div class="card h-xl-100" id="detail_div">
                                                        <!--begin::Card header-->
                                                        <div class="card-header cursor-pointer">
                                                            <!--begin::Card title-->
                                                            <div class="card-title m-0">
                                                                <h3 class="fw-bold m-0">Customs Details</h3>
                                                            </div>
                                                        </div>
                                                        <div class="card-body p-9">
                                                            <div class="row mb-7">
                                                                <label class="col-lg-6 fw-semibold text-muted">Customs Area</label>
                                                                <div class="col-lg-6">
                                                                    <span class="fw-bold fs-6 text-gray-800"> <?php echo $vehicle_detail[0]['customs_area']; ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-7">
                                                                <label class="col-lg-6 fw-semibold text-muted">Customs Certificate NO</label>
                                                                <div class="col-lg-6">
                                                                    <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary"><?php echo $vehicle_detail[0]['customs_certificate_no']; ?></a>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-7">
                                                                <label class="col-lg-6 fw-semibold text-muted">Customs Certificate Date</label>
                                                                <div class="col-lg-6">
                                                                    <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary"> <?php echo date("d/m/Y", strtotime($vehicle_detail[0]['customs_certificate_date'])); ?></a>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-7">
                                                                <label class="col-lg-6 fw-semibold text-muted">Customs Attach</label>
                                                                <div class="col-lg-6">
                                                                    <?php if ($vehicle_detail[0]['customs_attach'] != "") { ?>
                                                                        <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary"><a href="vehicle_uploads/customs_attach/<?php echo $vehicle_detail[0]['customs_attach']; ?>" target="_blank">View</a></a>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 mb-5 mb-xl-10">
                                                    <!--begin::Tables Widget 3-->
                                                    <div class="card h-xl-100" id="detail_div">
                                                        <!--begin::Card header-->
                                                        <div class="card-header cursor-pointer">
                                                            <!--begin::Card title-->
                                                            <div class="card-title m-0">
                                                                <h3 class="fw-bold m-0">Sale Letter Details</h3>
                                                            </div>
                                                        </div>
                                                        <div class="card-body p-9">
                                                            <div class="row mb-7">
                                                                <label class="col-lg-6 fw-semibold text-muted">Sale Letter From</label>
                                                                <div class="col-lg-6">
                                                                    <span class="fw-bold fs-6 text-gray-800"> <?php echo $vehicle_detail[0]['sale_letter_from']; ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-7">
                                                                <label class="col-lg-6 fw-semibold text-muted">Sale Letter Number</label>
                                                                <div class="col-lg-6">
                                                                    <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary"><?php echo $vehicle_detail[0]['sale_letter_no']; ?></a>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-7">
                                                                <label class="col-lg-6 fw-semibold text-muted">Sale Letter Date</label>
                                                                <div class="col-lg-6">
                                                                    <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary"> <?php echo date("d/m/Y", strtotime($vehicle_detail[0]['sale_letter_date'])); ?></a>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-7">
                                                                <label class="col-lg-6 fw-semibold text-muted">Sale Letter Attachment</label>
                                                                <div class="col-lg-6">
                                                                    <?php if ($vehicle_detail[0]['sale_attachment'] != "") { ?>
                                                                        <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary"> <a href="vehicle_uploads/sale/<?php echo $vehicle_detail[0]['sale_attachment']; ?>" target="_blank">View</a></a>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- end div1 -->
                                            </div>

                                        </div>
                                        <!--end::Card-->
                                    </div>
                                <?php } ?>
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show " id="kt_user_view_overview_securitydocuments" role="tabpanel">
                                    <!--begin::Card-->

                                    <div class="card card-flush mb-6 mb-xl-9">
                                        <div class="card-header border-0">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2></h2>
                                            </div>
                                            <a onclick="adddocumentsmodal()" class="btn btn-primary align-self-center">Add Other Documents</a>
                                        </div>

                                        <div class="table-responsive">

                                            <table class="table align-middle gs-0 gy-3" id="documenttable">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr>
                                                        <th><b>Sl No</b></th>
                                                        <th><b>Document Name</b></th>
                                                        <th><b>Attachment</b></th>
                                                        <!-- <th><b>Status</b></th> -->
                                                        <th><b>Action</b></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                    <!--end::Card-->
                                </div>


                                <div class="tab-pane fade show active" id="kt_user_view_overview_tab" role="tabpanel">
                                    <!--begin::Card-->
                                    <div class="toolbar mb-2 mb-lg-5" id="kt_toolbar">
                                        <!--begin::Page title-->
                                        <div class="page-title d-flex flex-column me-3">

                                        </div>
                                        <!--end::Page title-->
                                        <!--begin::Actions-->
                                        <a onclick="addmulkiyamodal()" style="float: right;    margin-bottom: 4px !important;" class="btn btn-primary" fdprocessedid="vixbhk">Add Mulkiya</a>
                                    </div>

                                    <div class="table-responsive">

                                        <table class="table align-middle gs-0 gy-3" id="mulkiyatable">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th><b>Sl No</b></th>
                                                    <th><b>Mulkiya Date</b></th>
                                                    <th><b>Expiry Date</b></th>
                                                    <th><b>Status</b></th>
                                                    <!--<th ><b>Visa Expiry</b></th>-->
                                                    <th><b>Action</b></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>

                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>

                                    <!--	</div>-->
                                    <!--</div>-->
                                    <!--end::Card-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_user_view_overview_security" role="tabpanel">
                                    <div class="toolbar mb-2 mb-lg-5" id="kt_toolbar">
                                        <!--begin::Page title-->
                                        <div class="page-title d-flex flex-column me-3">

                                        </div>
                                        <!--end::Page title-->
                                        <!--begin::Actions-->
                                        <a onclick="addinsuranceamodal()" style="float: right;    margin-bottom: 4px !important;" class="btn btn-primary" fdprocessedid="vixbhk">Add Insurance</a>
                                    </div>

                                    <div class="table-responsive">

                                        <table class="table align-middle gs-0 gy-3" id="insutable">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th><b>Sl No</b></th>
                                                    <th><b>Company Name</b></th>
                                                    <th><b>Policy Number</b></th>
                                                    <th><b>Policy Date</b></th>
                                                    <!--<th ><b>Visa Expiry</b></th>-->
                                                    <th><b>Type</b></th>
                                                    <th><b>Sum</b></th>
                                                    <th><b>Status</b></th>
                                                    <th><b>Action</b></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>

                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--	</div>-->
                                    <!--end::Card body-->
                                    <!--</div>-->
                                    <!--end::Card-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_user_view_overview_events_and_logs_tab" role="tabpanel">
                                    <div class="toolbar mb-2 mb-lg-5" id="kt_toolbar">
                                        <!--begin::Page title-->
                                        <div class="page-title d-flex flex-column me-3">

                                        </div>
                                        <!--end::Page title-->
                                        <!--begin::Actions-->
                                        <a onclick="addspeedlimiteramodal()" style="float: right;    margin-bottom: 4px !important;" class="btn btn-primary" fdprocessedid="vixbhk">Add Speed Limiter</a>
                                    </div>

                                    <div class="table-responsive">

                                        <table class="table align-middle gs-0 gy-3" id="speedtable">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th><b>Sl No</b></th>
                                                    <th><b>Certificate No</b></th>
                                                    <th><b>Fitment Date</b></th>
                                                    <th><b>Certificate Date</b></th>
                                                    <th><b>Expiry Date</b></th>
                                                    <th><b>Vendor</b></th>

                                                    <th><b>Status</b></th>
                                                    <th><b>Action</b></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>

                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>

                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_user_view_overview_securitygps" role="tabpanel">

                                    <div class="toolbar mb-2 mb-lg-5" id="kt_toolbar">
                                        <!--begin::Page title-->
                                        <div class="page-title d-flex flex-column me-3">

                                        </div>
                                        <!--end::Page title-->
                                        <!--begin::Actions-->
                                        <a onclick="addgpsmodal()" style="float: right;    margin-bottom: 4px !important;" class="btn btn-primary" fdprocessedid="vixbhk">Add GPS</a>
                                    </div>

                                    <div class="table-responsive">

                                        <table class="table align-middle gs-0 gy-3" id="gpstable">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th><b>Sl No</b></th>
                                                    <th><b>Installation Date</b></th>
                                                    <th><b>Certificate Number</b></th>
                                                    <th><b>Certificate Date</b></th>
                                                    <th><b>Expiry Date</b></th>
                                                    <th><b>Status</b></th>
                                                    <th><b>Action</b></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>

                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <div id="datatable-gps"></div>
                                    </div>

                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_user_view_overview_v_passing" role="tabpanel">

                                    <div class="toolbar mb-2 mb-lg-5" id="kt_toolbar">
                                        <!--begin::Page title-->
                                        <div class="page-title d-flex flex-column me-3">

                                        </div>
                                        <!--end::Page title-->
                                        <!--begin::Actions-->
                                        <a onclick="addpassingmodal()" style="float: right;    margin-bottom: 4px !important;" class="btn btn-primary" fdprocessedid="vixbhk">Add Passing</a>
                                    </div>

                                    <div class="table-responsive">

                                        <table class="table align-middle gs-0 gy-3" id="passingtable">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th><b>Sl No</b></th>
                                                    <th><b>Passing Date</b></th>
                                                    <th><b>Expiry Date</b></th>

                                                    <th><b>Is Finished</b></th>
                                                    <th><b>Status</b></th>
                                                    <th><b>Action</b></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>

                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <div id="datatable-gps"></div>
                                    </div>

                                </div>
                                <!--end::Tap pane-->

                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Tables Widget 6-->
                </div>
            </div>




            <div class="modal fade" id="kt_modal_speed_add_expense" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_speed_add_expense_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Expense</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y">
                            <!--begin::Form-->
                            <!-- <form id="add-form" class="form" action="#"> -->
                            <!--begin::Scroll-->

                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_speed_expense_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_expense_header" data-kt-scroll-wrappers="#kt_modal_add_expense_scroll" data-kt-scroll-offset="300px">
                                <!--begin::Input group-->

                                <input type="hidden" id="speedidexp" value="" />
                                <input type="hidden" id="speedexp_id" value="" />
                                <div class="row g-9 mb-7">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Taxable Amount</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" onkeyup="speedgetAmount()" id="speedamount" value="" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Tax Percentage</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" onkeyup="speedgetAmount()" id="speedtax_per" value="5" />
                                    </div>
                                </div>
                                <div class="row g-9 mb-7">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Tax Amount</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" id="speedtax_amt" value="" readonly />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Total</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" id="speedtotal" value="" readonly />
                                    </div>
                                </div>
                                <div class="row g-9 mb-7">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Payment Mode</label>
                                        <input type="payment_mode" class="form-control form-control-solid" placeholder="" id="speedpayment_mode" value="" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Payment Reference</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="" id="speedpayment_ref" value="" />
                                    </div>
                                </div>
                                <div class="row g-9 mb-7">
                                    <div class="col-md-12 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Payment Attach</label>
                                        <input type="file" class="form-control form-control-solid" placeholder="" name="speedimage_fileexp" id="speedimage_fileexp" value="" />
                                    </div>
                                </div>


                            </div>
                            <!--end::Scroll-->
                            <!--begin::Actions-->
                            <div class="text-center pt-8">
                                <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel" data-bs-dismiss="modal">Discard</button>
                                <button type="button" class="btn btn-primary" data-kt-users-modal-action="" id="speedaddexpense">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>

                            </div>
                            <!--end::Actions-->
                            <table class="table table-striped col-md-10" id="speedpayment_attach" style="display: none;">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl NO</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Taxable Amount</th>
                                        <th scope="col">Tax Amount</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Attachment</th>
                                        <th scope="col">Action</th>
                                        <!-- <th scope="col">Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>

            <div class="modal fade" id="kt_modal_edit_speedexpense" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_edit_speedexpense_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Update Expense</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y">
                            <!--begin::Form-->
                            <!-- <form id="add-form" class="form" action="#"> -->
                            <!--begin::Scroll-->
                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_edit_speedexpense_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_edit_expense_header" data-kt-scroll-wrappers="#kt_modal_edit_expense_scroll" data-kt-scroll-offset="300px">
                                <!--begin::Input group-->

                                <input type="hidden" id="speedidexpe" value="" />
                                <input type="hidden" id="speedexp_ide" value="" />
                                <div class="row g-9 mb-7">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Taxable Amount</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" onkeyup="speedgetAmount2()" id="speedamounte" value="" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Tax Percentage</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" onkeyup="speedgetAmount2()" id="speedtax_pere" value="" />
                                    </div>
                                </div>
                                <div class="row g-9 mb-7">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Tax Amount</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" id="speedtax_amte" value="" readonly />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Total</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" id="speedtotale" value="" readonly />
                                    </div>
                                </div>
                                <div class="row g-9 mb-7">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Payment Mode</label>
                                        <input type="payment_mode" class="form-control form-control-solid" placeholder="" id="speedpayment_modee" value="" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Payment Reference</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="" id="speedpayment_refe" value="" />
                                    </div>
                                </div>
                                <div class="row g-9 mb-7">
                                    <div class="col-md-12 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Payment Attach</label>
                                        <input type="file" class="form-control form-control-solid" placeholder="" name="speedimage_fileexpe" id="speedimage_fileexpe" value="" />
                                    </div>
                                </div>
                                <table class="table table-striped col-md-10" id="speedpayment_attach" style="display: none;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sl NO</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Taxable Amount</th>
                                            <th scope="col">Tax Amount</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Attachment</th>
                                            <th scope="col">Action</th>
                                            <!-- <th scope="col">Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>

                            </div>
                            <!--end::Scroll-->
                            <!--begin::Actions-->
                            <div class="text-center pt-8">
                                <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel" data-bs-dismiss="modal">Discard</button>
                                <button type="button" class="btn btn-primary" data-kt-users-modal-action="" id="updatespeedexpense">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>

                            </div>
                            <!--end::Actions-->

                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
            </div>
            <!--speed Expense-->
            <div class="modal fade" id="kt_modal_add_attachment" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_attachment">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Add attachments</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y ">
                            <!--begin::Form-->
                            <form class="form" enctype="multipart/form-data" method="post">
                                <!--begin::Scroll-->
                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_attachment_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_attachment_header" data-kt-scroll-wrappers="#kt_modal_add_attachment_scroll" data-kt-scroll-offset="300px">
                                    <!--begin::Input group-->

                                    <div class="row g-9 mb-7">
                                        <div class="col-md-6 fv-row">
                                            <label class="fs-6 fw-semibold mb-2 required">Attachment Type</label>
                                            <input class="form-control form-control-solid" placeholder="" name="attachment_type" id="attachment_type" value="" />
                                        </div>
                                        <div class="col-md-6 fv-row">
                                            <label class="fs-6 fw-semibold mb-2 required">Select File</label>
                                            <input type="file" class="form-control form-control-solid" placeholder="" name="image_file" id="image_file" value="" />
                                        </div>
                                    </div>

                                    <div class="row g-9 mb-7">
                                        <div class="col-md-6 fv-row">
                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" name="is_expiry" id="is_expiry" checked="" />
                                                <label class="form-check-label">is_expiry</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 fv-row" id="ex_date" style="display: none;">
                                            <label class="fs-6 fw-semibold mb-2">Select Date</label>
                                            <input type="hidden" class="form-control form-control-solid" placeholder="" name="expiry_date" id="attachid" value="" />

                                            <input type="Date" class="form-control form-control-solid" placeholder="" min="<?= date('Y-m-d'); ?>" name="expiry_date" id="attexpiry_date" value="" />
                                        </div>
                                    </div>


                                </div>
                                <!--end::Scroll-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel" data-bs-dismiss="modal">Discard</button>
                                    <button type="Submit" class="btn btn-primary" data-kt-users-modal-action="" id="att_submit">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <div class="row" style="margin:1rem ;">
                                        <table class="table table-striped col-md-10">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Sl NO</th>
                                                    <th scope="col">Attachment Type</th>
                                                    <th scope="col">Expiry Date</th>
                                                    <th scope="col">Time Stamp</th>
                                                    <th scope="col">View</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="atlist">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <div class="modal fade" id="kt_modal_add_notes" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-500px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_attribute_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Add Notes</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y">
                            <!--begin::Form-->
                            <form id="add-form" class="form" action="#">
                                <!--begin::Scroll-->
                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_attribute_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_attribute_header" data-kt-scroll-wrappers="#kt_modal_add_attribute_scroll" data-kt-scroll-offset="300px">
                                    <!--begin::Input group-->

                                    <div class="row g-9 mb-7">
                                        <div class="col-md-12 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Heading</label>
                                            <input type="text" class="form-control form-control-solid" placeholder="" name="heading" id="heading" value="" />
                                        </div>

                                    </div>

                                    <div class="row g-9 mb-7">
                                        <div class="col-md-12 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Details</label>
                                            <textarea id="details" class="form-control"></textarea>
                                            <input type="hidden" id="noteid" name="details" class="form-control"></input>
                                        </div>

                                    </div>


                                </div>
                                <!--end::Scroll-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel" data-bs-dismiss="modal">Discard</button>
                                    <button type="button" class="btn btn-primary" data-kt-users-modal-action="" onclick="insertnote()">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <div class="card-body p-9" id="notetable">

                                    </div>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <div class="modal fade" id="kt_modal_add_attri" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-500px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_attribute_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Add attribute</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y">
                            <!--begin::Form-->
                            <form id="add-form" class="form" action="#">
                                <!--begin::Scroll-->
                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_attribute_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_attribute_header" data-kt-scroll-wrappers="#kt_modal_add_attribute_scroll" data-kt-scroll-offset="300px">
                                    <!--begin::Input group-->



                                    <div class="row g-9 mb-7">
                                        <div class="col-md-6 fv-row">
                                            <label class="fs-6 fw-semibold mb-2 required">Name</label>
                                            <input class="form-control form-control-solid" placeholder="" id="insura_name" value="" />
                                            <input type="hidden" id="insurid">
                                        </div>
                                        <div class="col-md-6 fv-row">
                                            <label class="fs-6 fw-semibold mb-2 required">Value</label>
                                            <input class="form-control form-control-solid" placeholder="" id="insura_value" value="" />
                                        </div>
                                    </div>


                                </div>
                                <!--end::Scroll-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel" data-bs-dismiss="modal">Discard</button>
                                    <button type="button" class="btn btn-primary" data-kt-users-modal-action="" onclick="addinsurattr()">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <div class="row" style="margin:1rem ;">
                                        <table class="table table-striped col-md-10" id="kt_table_attributes">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Sl NO</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Value</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <div class="modal fade" id="kt_modal_speed_add_notes" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-500px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_attribute_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Add Notes</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y">
                            <!--begin::Form-->
                            <form id="add-form" class="form" action="#">
                                <!--begin::Scroll-->
                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_attribute_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_attribute_header" data-kt-scroll-wrappers="#kt_modal_add_attribute_scroll" data-kt-scroll-offset="300px">
                                    <!--begin::Input group-->

                                    <div class="row g-9 mb-7">
                                        <div class="col-md-12 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Heading</label>
                                            <input type="text" class="form-control form-control-solid" placeholder="" name="speedheading" id="speedheading" value="" />
                                        </div>

                                    </div>

                                    <div class="row g-9 mb-7">
                                        <div class="col-md-12 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Details</label>
                                            <textarea id="speeddetails" class="form-control"></textarea>
                                            <input type="hidden" id="speednoteid" name="speeddetails" class="form-control"></input>
                                        </div>

                                    </div>


                                </div>
                                <!--end::Scroll-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel" data-bs-dismiss="modal">Discard</button>
                                    <button type="button" class="btn btn-primary" data-kt-users-modal-action="" onclick="insertspeednote()">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <div class="card-body p-9" id="speednotetable">

                                    </div>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modals-->
            <div class="modal fade" id="kt_modal_add_mulk_expense" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_mulk_expense_header">
                            <!--begin::Modal title-->
                            <h4 class="fw-bold" id="expense_heading"></h4>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y">
                            <!--begin::Form-->
                            <!-- <form id="add-form" class="form" action="#"> -->
                            <!--begin::Scroll-->
                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_mulk_expense_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_mulk_expense_header" data-kt-scroll-wrappers="#kt_modal_add_mulk_expense_scroll" data-kt-scroll-offset="300px">
                                <!--begin::Input group-->

                                <input type="hidden" id="mulkiyaidexp" value="" />
                                <input type="hidden" id="exp_id" value="" />

                                <div class="row g-9 mb-7">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Taxable Amount</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" onkeyup="getAmountme()" id="amountme" value="" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Tax Percentage</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" onkeyup="getAmountme()" id="tax_perme" value="5" />
                                    </div>
                                </div>
                                <div class="row g-9 mb-7">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Tax Amount</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" id="tax_amtme" value="" readonly />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Total</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" id="totalme" value="" readonly />
                                    </div>
                                </div>
                                <div class="row g-9 mb-7">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Payment Mode</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="" id="payment_modeme" value="" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Payment Reference</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="" id="payment_refme" value="" />
                                    </div>
                                </div>
                                <div class="row g-9 mb-7">
                                    <div class="col-md-12 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Payment Attach</label>
                                        <input type="file" class="form-control form-control-solid" placeholder="" name="image_fileexpme" id="image_fileexpme" value="" />
                                    </div>
                                </div>


                            </div>
                            <!--end::Scroll-->
                            <!--begin::Actions-->
                            <div class="text-center pt-8">
                                <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel" data-bs-dismiss="modal">Discard</button>
                                <button type="button" class="btn btn-primary" data-kt-users-modal-action="" id="addexpensemulk">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>

                            </div>
                            <!--end::Actions-->
                            <table class="table table-striped col-md-10" id="payment_attachme" style="display: none;">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl NO</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Taxable Amount</th>
                                        <th scope="col">Tax Amount</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Attachment</th>
                                        <th scope="col">Action</th>
                                        <!-- <th scope="col">Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--End Mulkiya Expense-->
            <!--end::Modal - haju attri mulkiya-->
            <div class="modal fade" id="kt_modal_add_att_mulkiya" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-500px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_attribute_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Add attribute</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y">
                            <!--begin::Form-->
                            <!-- <form id="add-form" class="form" action="#"> -->
                            <!--begin::Scroll-->
                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_attribute_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_attribute_header" data-kt-scroll-wrappers="#kt_modal_add_attribute_scroll" data-kt-scroll-offset="300px">
                                <!--begin::Input group-->

                                <div class="row g-9 mb-7">
                                    <div class="col-md-6 fv-row">
                                        <label class="fs-6 fw-semibold mb-2 required">Name</label>
                                        <input class="form-control form-control-solid" placeholder="" id="amulk_name" value="" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="fs-6 fw-semibold mb-2 required">Value</label>
                                        <input type="hidden" id="mulkiyaida" class="form-control"></input>
                                        <input class="form-control form-control-solid" placeholder="" id="amulk_value" value="" />
                                    </div>
                                </div>


                            </div>
                            <!--end::Scroll-->
                            <!--begin::Actions-->
                            <div class="text-center pt-8">
                                <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel" data-bs-dismiss="modal">Discard</button>
                                <button type="button" class="btn btn-primary" data-kt-users-modal-action="" onclick="addmulkattr()">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <div class="row" style="margin:1rem ;">
                                    <table class="table table-striped col-md-12" id="kt_table_mulki_attributes">
                                        <thead>
                                            <tr>
                                                <th scope="col">Sl No</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Value</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody style="width:500;">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <div class="modal fade" id="kt_modal_speed_add_attri" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-500px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_speed_add_attribute_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Add attribute</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y">
                            <!--begin::Form-->
                            <form id="add-form" class="form" action="#">
                                <!--begin::Scroll-->
                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_speed_add_attribute_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_attribute_header" data-kt-scroll-wrappers="#kt_modal_add_attribute_scroll" data-kt-scroll-offset="300px">
                                    <!--begin::Input group-->



                                    <div class="row g-9 mb-7">
                                        <div class="col-md-6 fv-row">
                                            <label class="fs-6 fw-semibold mb-2 required">Name</label>
                                            <input class="form-control form-control-solid" placeholder="" id="speed_name" value="" />
                                            <input type="hidden" id="speedid">
                                        </div>
                                        <div class="col-md-6 fv-row">
                                            <label class="fs-6 fw-semibold mb-2 required">Value</label>
                                            <input class="form-control form-control-solid" placeholder="" id="speed_value" value="" />
                                        </div>
                                    </div>


                                </div>
                                <!--end::Scroll-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel" data-bs-dismiss="modal">Discard</button>
                                    <button type="button" class="btn btn-primary" data-kt-users-modal-action="" onclick="addspeedattr()">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <div class="row" style="margin:1rem ;">
                                        <table class="table table-striped col-md-10" id="kt_table_speedattributes">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Sl NO</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Value</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <div class="modal fade" id="kt_modal_add_speed_attachment" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_speed_attachment">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Add attachments</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y">
                            <!--begin::Form-->
                            <form class="form" enctype="multipart/form-data" method="post">
                                <!--begin::Scroll-->
                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_speed_attachment_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_attachment_header" data-kt-scroll-wrappers="#kt_modal_add_attachment_scroll" data-kt-scroll-offset="300px">
                                    <!--begin::Input group-->

                                    <div class="row g-9 mb-7">
                                        <div class="col-md-6 fv-row">
                                            <label class="fs-6 fw-semibold mb-2 required">Attachment Type</label>
                                            <input class="form-control form-control-solid" placeholder="" name="speedattachment_type" id="speedattachment_type" value="" />
                                        </div>
                                        <div class="col-md-6 fv-row">
                                            <label class="fs-6 fw-semibold mb-2 required">Select File</label>
                                            <input type="file" class="form-control form-control-solid" placeholder="" name="speedimage_file" id="speedimage_file" value="" />
                                        </div>
                                    </div>

                                    <div class="row g-9 mb-7">
                                        <div class="col-md-6 fv-row">
                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" name="speedis_expiry" id="speedis_expiry" checked="" />
                                                <label class="form-check-label">is_expiry</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 fv-row" id="speedex_date" style="display: none;">
                                            <label class="fs-6 fw-semibold mb-2">Select Date</label>
                                            <input type="hidden" class="form-control form-control-solid" placeholder="" name="speedattachid" id="speedattachid" value="" />

                                            <input type="Date" class="form-control form-control-solid" placeholder="" name="speedexpiry_date" id="speedattexpiry_date" value="" />
                                        </div>
                                    </div>


                                </div>
                                <!--end::Scroll-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel" data-bs-dismiss="modal">Discard</button>
                                    <button type="Submit" class="btn btn-primary" data-kt-users-modal-action="" id="speedatt_submit">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <div class="row" style="margin:1rem ;">
                                        <table class="table table-striped col-md-10">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Sl NO</th>
                                                    <th scope="col">Attachment Type</th>
                                                    <th scope="col">Expiry Date</th>
                                                    <th scope="col">Time Stamp</th>
                                                    <th scope="col">View</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="speedatlist">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modals  ADD ATTRIBUTES MULKIYA HAJU-->
            <!--begin::Modal - Add attachment mulkiya-->
            <div class="modal fade" id="kt_modal_add_attachment_mulkiya" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_attachment">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Add attachments</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y">
                            <!--begin::Form-->
                            <form class="form" enctype="multipart/form-data" method="post">
                                <!--begin::Scroll-->
                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_attachment_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_attachment_header" data-kt-scroll-wrappers="#kt_modal_add_attachment_scroll" data-kt-scroll-offset="300px">
                                    <!--begin::Input group-->

                                    <div class="row g-9 mb-7">
                                        <div class="col-md-6 fv-row">
                                            <label class="fs-6 fw-semibold mb-2 required">Attachment Type</label>
                                            <input class="form-control form-control-solid" placeholder="" name="attachment_type" id="attachment_type_mulkiya" value="" />
                                        </div>
                                        <div class="col-md-6 fv-row">
                                            <label class="fs-6 fw-semibold mb-2 required">Select File</label>
                                            <input type="file" class="form-control form-control-solid" placeholder="" name="image_file" id="image_file_mulkiya" value="" />
                                        </div>
                                    </div>

                                    <div class="row g-9 mb-7">
                                        <div class="col-md-6 fv-row">
                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" name="is_expiry_mulkiya" id="is_expiry_mulkiya" checked="" />
                                                <label class="form-check-label">is_expiry</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 fv-row" id="ex_date_mulkiya" style="display: none;">
                                            <label class="fs-6 fw-semibold mb-2">Select Date</label>
                                            <input type="hidden" class="form-control form-control-solid" placeholder="" name="mulkiyaidat" id="mulkiyaidat" value="" />

                                            <input type="Date" class="form-control form-control-solid" placeholder="" name="expiry_date" min="<?= date('Y-m-d'); ?>" id="attexpiry_date_mulkiya" value="" />
                                        </div>
                                    </div>


                                </div>
                                <!--end::Scroll-->
                                <!--begin::Actions-->
                                <div class="text-center pt-8">
                                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel" data-bs-dismiss="modal">Discard</button>
                                    <button type="Submit" class="btn btn-primary" data-kt-users-modal-action="" id="mulkiya_attachment_submit">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <div class="row" style="margin:1rem ;">
                                        <table class="table table-striped col-md-10">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Sl No</th>
                                                    <th scope="col">Attachment Type</th>
                                                    <th scope="col">Expiry Date</th>
                                                    <th scope="col">Time Stamp</th>
                                                    <th scope="col">View</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="atlistmulkiya">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - haju attri mulkiya-->
            <!--begin::Modal - haju Add notes mulkiya-->

            <div class="modal fade" id="kt_modal_add_notes_mulkiya" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-500px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_attribute_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Add Notes</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y">
                            <!--begin::Form-->
                            <form id="add-form" class="form" action="#">
                                <!--begin::Scroll-->
                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_attribute_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_attribute_header" data-kt-scroll-wrappers="#kt_modal_add_attribute_scroll" data-kt-scroll-offset="300px">
                                    <!--begin::Input group-->

                                    <div class="row g-9 mb-7">
                                        <div class="col-md-12 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Heading</label>
                                            <input type="text" class="form-control form-control-solid" placeholder="" name="heading" id="headingmulkiya" value="" />
                                        </div>

                                    </div>

                                    <div class="row g-9 mb-7">
                                        <div class="col-md-12 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Details</label>
                                            <textarea id="detailsmulkiya" class="form-control form-control-solid"></textarea>
                                            <input type="hidden" id="mulkiyaid" name="detailsmulkiya" class="form-control"></input>
                                        </div>

                                    </div>


                                </div>
                                <!--end::Scroll-->
                                <!--begin::Actions-->
                                <div class="text-center">
                                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel" data-bs-dismiss="modal">Discard</button>
                                    <button type="button" class="btn btn-primary" data-kt-users-modal-action="" onclick="insertmulknote()">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <div class="card-body p-9" id="mulkinotetable">


                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--begin::Modal gps attaributes-->
            <div class="modal fade" id="kt_modal_add_attributegps" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-500px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_attribute_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Attributes</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y">
                            <!--begin::Form--->
                            <form id="add-form" class="form" action="#">
                                <!--begin::Scroll-->
                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_attribute_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_attribute_header" data-kt-scroll-wrappers="#kt_modal_add_attribute_scroll" data-kt-scroll-offset="300px">
                                    <!--begin::Input group-->
                                    <div class="row g-9 mb-7">
                                        <div class="col-md-6 fv-row">
                                            <label class="fs-6 fw-semibold mb-2">Name</label>
                                            <input class="form-control form-control-solid" placeholder="" name="a_name_gps" id="a_name_gps" value="" />
                                        </div>
                                        <div class="col-md-6 fv-row">
                                            <label class="fs-6 fw-semibold mb-2">Value</label>
                                            <input class="form-control form-control-solid" placeholder="" name="a_value_gps" id="a_value_gps" value="" />
                                        </div>
                                    </div>

                                    <!--begin::Actions-->
                                    <div class="text-center pt-15">
                                        <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel" data-bs-dismiss="modal">Discard</button>
                                        <button type="button" onclick="add_attribute_gps()" class="btn btn-primary" data-kt-users-modal-action="">
                                            <span class="indicator-label">Submit</span>
                                            <span class="indicator-progress">Please wait...
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>

                                        <!--begin::Card body-->
                                        <div class="row" style="margin:1rem ;">
                                            <!--begin::Table-->

                                            <table class="table table-striped col-md-10" id="kt_table_attributes_gps">
                                                <thead>
                                                    <tr>

                                                        <input type="hidden" name="subscription_id" id="subscription_id">
                                                        <th scope="col">Sl No</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Value</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                    <!--end::Table row-->
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody style="width:500;">
                                                    <!--begin::Table row-->

                                                    <!--end::Table row-->
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Card-->

                                    </div>
                                    <!--end::Actions-->

                                </div>
                                <!--end::Scroll-->

                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal gps attributes-->
            <!--begin::Modal gps note-->
            <div class="modal fade" id="kt_modal_add_notes_gps" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-500px">
                    <!--begin::Modal content-->
                    <div class="modal-content">

                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_notes_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Notes</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div id="kt_customers_export_cancel" class="btn btn-light me-3" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y">
                            <!--begin::Form-->
                            <form class="form" action="#" data-kt-redirect="#">
                                <!--begin::Scroll-->
                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_notes_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_notes_header" data-kt-scroll-wrappers="#kt_modal_add_notes_scroll" data-kt-scroll-offset="300px">
                                    <input type="hidden" name="subscription_id_note" id="subscription_id_note">
                                    <div class="row g-9 mb-7">
                                        <div class="col-md-12 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Heading</label>
                                            <input type="text" class="form-control form-control-solid" placeholder="" name="heading_gps" id="heading_gps" value="" />
                                        </div>

                                    </div>

                                    <div class="row g-9 mb-7">
                                        <div class="col-md-12 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Details</label>
                                            <textarea id="details_gps" name="details_gps" class="form-control"></textarea>
                                        </div>

                                    </div>

                                </div>
                                <div class="modal-footer flex-center">
                                    <!--begin::Button-->
                                    <button type="button" id="kt_customers_export_cancel" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="button" onclick="getinsert_gps_notes()" class="btn btn-primary">
                                        <span class="indicator-label">Submit</span>

                                    </button>
                                    <!--end::Button-->
                                </div>
                            </form>
                            <div class="card-body p-9" id="gpsnotetable">

                            </div>
                            <!--end::Form-->
                        </div>
                    </div>
                </div>

            </div>
            <!--end::Modal gps notes-->
            <!--begin::Modal gps attachemnts-->
            <div class="modal fade" id="kt_modal_add_attachment_gps" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_attachment">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Add attachments</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y ">
                            <!--begin::Form-->
                            <form class="form" enctype="multipart/form-data" method="post">
                                <!--begin::Scroll-->
                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_attachment_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_attachment_header" data-kt-scroll-wrappers="#kt_modal_add_attachment_scroll" data-kt-scroll-offset="300px">
                                    <!--begin::Input group-->
                                    <input type="hidden" name="subscription_id_attach" id="subscription_id_attach">
                                    <div class="row g-9 mb-7">
                                        <div class="col-md-6 fv-row">
                                            <label class="fs-6 fw-semibold mb-2 required">Attachment Type</label>
                                            <input class="form-control form-control-solid" placeholder="" name="attachment_type_gps" id="attachment_type_gps" value="" />
                                        </div>
                                        <div class="col-md-6 fv-row">
                                            <label class="fs-6 fw-semibold mb-2 required">Select File</label>
                                            <input type="file" class="form-control form-control-solid" placeholder="" name="image_file_gps" id="image_file_gps" value="" />
                                        </div>
                                    </div>

                                    <div class="row g-9 mb-7">
                                        <div class="col-md-6 fv-row">
                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" name="is_expiry_gps" id="is_expiry_gps" checked="" />
                                                <label class="form-check-label">is_expiry</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 fv-row" id="ex_date_gps" style="display: none;">
                                            <label class="fs-6 fw-semibold mb-2">Select Date</label>
                                            <input type="hidden" class="form-control form-control-solid" placeholder="" name="" id="attachid" value="" />

                                            <input type="Date" class="form-control form-control-solid" placeholder="" min="<?= date('Y-m-d'); ?>" name="expiry_date_gps" id="expiry_date_gps" value="" />
                                        </div>
                                    </div>


                                </div>
                                <!--end::Scroll-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel" data-bs-dismiss="modal">Discard</button>
                                    <button type="submit" id="att_submit_gps" class="btn btn-primary" data-kt-users-modal-action="">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <div class="row" style="margin:1rem ;">
                                        <table class="table table-striped col-md-10">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Sl NO</th>
                                                    <th scope="col">Attachment Type</th>
                                                    <th scope="col">Expiry Date</th>
                                                    <th scope="col">Time Stamp</th>
                                                    <th scope="col">View</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="gps_attach_table">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal gps attachemnts-->
            <div class="modal fade" id="kt_modal_add_insurance_expense" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_insurance_expense_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Expense</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y">
                            <!--begin::Form-->
                            <!-- <form id="add-form" class="form" action="#"> -->
                            <!--begin::Scroll-->
                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_insurance_expense_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_insurance_expense_header" data-kt-scroll-wrappers="#kt_modal_add_insurance_expense_scroll" data-kt-scroll-offset="300px">
                                <!--begin::Input group-->

                                <input type="hidden" id="insuranceidexp" value="" />
                                <input type="hidden" id="exp_id_insurance" value="" />
                                <div class="row g-9 mb-7">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Taxable Amount</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" onkeyup="getAmountin()" id="amountin" value="" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Tax Percentage</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" onkeyup="getAmountin()" id="tax_perin" value="5" />
                                    </div>
                                </div>
                                <div class="row g-9 mb-7">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Tax Amount</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" id="tax_amtin" value="" readonly />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Total</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" id="totalin" value="" readonly />
                                    </div>
                                </div>
                                <div class="row g-9 mb-7">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Payment Mode</label>
                                        <input type="payment_mode" class="form-control form-control-solid" placeholder="" id="payment_modein" value="" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Payment Reference</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="" id="payment_refin" value="" />
                                    </div>
                                </div>
                                <div class="row g-9 mb-7">
                                    <div class="col-md-12 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Payment Attach</label>
                                        <input type="file" class="form-control form-control-solid" placeholder="" name="image_fileexp" id="image_fileexpin" value="" />
                                    </div>
                                </div>


                            </div>
                            <!--end::Scroll-->
                            <!--begin::Actions-->
                            <div class="text-center pt-8">
                                <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel" data-bs-dismiss="modal">Discard</button>
                                <button type="button" class="btn btn-primary" data-kt-users-modal-action="" id="addinsuranceexpense">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>

                            </div>
                            <!--end::Actions-->
                            <table class="table table-striped col-md-10" id="payment_attachin" style="display: none;">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl NO</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Taxable Amount</th>
                                        <th scope="col">Tax Amount</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Attachment</th>
                                        <th scope="col">Action</th>
                                        <!-- <th scope="col">Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <div class="modal fade" id="kt_modal_sold" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-1000px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_sold_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Sales Information</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y">
                            <!--begin::Form-->
                            <!-- <form id="add-form" class="form" action="#"> -->
                            <!--begin::Scroll-->
                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_sold_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_attribute_header" data-kt-scroll-wrappers="#kt_modal_add_attribute_scroll" data-kt-scroll-offset="300px">
                                <!--begin::Input group-->

                                <div class="row g-9 mb-7">
                                    <div class="col-md-3 fv-row">
                                        <label class="fs-6 fw-semibold mb-2 required">Sale Type</label>
                                        <select class="form-select form-select-solid" id="vsale" data-control="select2" data-placeholder="Select Sale Type" data-hide-search="true" name="vsale">
                                            <option value="">Select Sale Type</option>
                                            <option value="Transfer">Transfer</option>
                                            <option value="Sale">Sale</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <label class="fs-6 fw-semibold mb-2 ">Type Of Transfer</label>
                                        <select class="form-select form-select-solid" id="transfertype" data-control="select2" data-placeholder="Select Transfer Type" data-hide-search="true" name="transfertype">
                                            <option value="">Select Transfer Type</option>
                                            <option value="Internal">Internal</option>
                                            <option value="Outside">Outside</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <label class="fs-6 fw-semibold mb-2 ">Transfer To</label>
                                        <select class="form-select form-select-solid" id="transferto" data-control="select2" data-placeholder="Select Transfer To" data-hide-search="true" name="vsale">
                                            <option value="">Select Transfer To</option>
                                            <option value="Company">Company</option>
                                            <option value="Individual">Individual</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <label class="fs-6 fw-semibold mb-2 ">Attachment</label>
                                        <input type="file" class="form-control form-control-solid" placeholder="" name="transtoattach" id="transtoattach" value="" />
                                    </div>
                                </div>
                                <div class="row g-9 mb-7">
                                    <div class="col-md-3 fv-row">
                                        <label class="fs-6 fw-semibold mb-2 ">Transfer TC No</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="transfertcno" id="transfertcno" value="" />
                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <label class="fs-6 fw-semibold mb-2 ">Transfer Emirates</label>
                                        <select name="transfer_emirate" id="transfer_emirate" aria-label="Select an emirate" data-control="select2" data-placeholder="Select Transfer emirate" class="form-select form-select-solid form-select-lg fw-semibold">
                                            <option value="">Select</option>
                                            <option value="Abu Dhabi">Abu Dhabi</option>
                                            <option value="Dubai">Dubai</option>
                                            <option value="Sharjah">Sharjah</option>
                                            <option value="Ajman">Ajman</option>
                                            <option value="Umm Al Quwain">Umm Al Quwain</option>
                                            <option value="Fujairah">Fujairah</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <label class="fs-6 fw-semibold mb-2 ">Contact Name</label>
                                        <input class="form-control form-control-solid" placeholder="" name="contactname" id="contactname" value="" />
                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <label class="fs-6 fw-semibold mb-2 ">Contact NO</label>
                                        <input class="form-control form-control-solid" placeholder="" name="contactno" id="contactno" value="" />
                                    </div>
                                </div>

                                <div class="row g-9 mb-7">
                                    <div class="col-md-3 fv-row">
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" name="originalreg" id="originalreg">
                                            <label class="form-check-label">Original Registration</label>
                                        </div>

                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <div class="form-check  form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" name="fuelcard" id="fuelcard">
                                            <label class="form-check-label">Fuel Card</label>&nbsp;&nbsp;
                                            <input class="form-check-input" type="checkbox" value="" name="vgps" id="vgps">
                                            <label class="form-check-label">GPS</label>
                                        </div>


                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <div class="form-check  form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" name="vsalik" id="vsalik">
                                            <label class="form-check-label">Salik</label>&nbsp;&nbsp;
                                            <input class="form-check-input" type="checkbox" value="" name="safetykit" id="safetykit">
                                            <label class="form-check-label">Safety Kit</label>
                                        </div>

                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" name="speedcert" id="speedcert">
                                            <label class="form-check-label">Speed Certificate</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="row g-9 mb-7">

                                    <div class="col-md-3 fv-row">
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" name="toolbox" id="toolbox">
                                            <label class="form-check-label">Tool Box</label>&nbsp;&nbsp;
                                            <input class="form-check-input" type="checkbox" value="" name="sparetyre" id="sparetyre">
                                            <label class="form-check-label">Spare Tyre</label>
                                        </div>

                                    </div>


                                    <div class="col-md-3 fv-row">
                                        <div class="form-check  form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" name="sparekey" id="sparekey">
                                            <label class="form-check-label">Spare Key Handover</label>&nbsp;&nbsp;

                                        </div>

                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <label class="fs-6 fw-semibold mb-2 "> Sold Amount</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" name="vehsoldamt" id="vehsoldamt" value="" />
                                    </div>
                                    <div class="col-md-3 fv-row">
                                        <label class="fs-6 fw-semibold mb-2 ">Advance Amount</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" name="amtadv" id="amtadv" value="" />
                                    </div>
                                </div>
                                <div class="row g-9 mb-7">





                                    <div class="col-md-3 fv-row">
                                        <label class="fs-6 fw-semibold mb-2 ">Attachment</label>
                                        <input type="file" class="form-control form-control-solid" placeholder="" name="advattach" id="advattach" value="" />
                                    </div>

                                    <div class="col-md-3 fv-row">
                                        <label class="fs-6 fw-semibold mb-2 ">Balance Amount</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" name="balamt" id="balamt" value="" />
                                    </div>

                                    <div class="col-md-3 fv-row">
                                        <label class="fs-6 fw-semibold mb-2 ">Attachment</label>
                                        <input type="file" class="form-control form-control-solid" placeholder="" name="balattach" id="balattach" value="" />
                                    </div>

                                    <div class="col-md-3 fv-row">
                                        <label class="fs-6 fw-semibold mb-2 ">Check Card</label>
                                        <input class="form-control form-control-solid" placeholder="" name="checkcard" id="checkcard" value="" />
                                    </div>
                                </div>
                                <div class="row g-9 mb-7">
                                    <div class="col-md-3 fv-row">
                                        <label class="fs-6 fw-semibold mb-2 ">Attachment</label>
                                        <input type="file" class="form-control form-control-solid" placeholder="" name="checkcardattach" id="checkcardattach" value="" />
                                    </div>


                                    <div class="col-md-3 fv-row">
                                        <label class="fs-6 fw-semibold mb-2 ">NOC Letter From Owner</label>
                                        <input class="form-control form-control-solid" placeholder="" name="nocletter" id="nocletter" value="" />
                                    </div>

                                    <div class="col-md-3 fv-row">
                                        <label class="fs-6 fw-semibold mb-2 ">Attachment</label>
                                        <input type="file" class="form-control form-control-solid" placeholder="" name="nocletterattach" id="nocletterattach" value="" />
                                    </div>

                                    <div class="col-md-3 fv-row">
                                        <label class="fs-6 fw-semibold mb-2 ">Transfer Certificate No</label>
                                        <input class="form-control form-control-solid" placeholder="" name="checkcard" id="transcer" value="" />
                                    </div>

                                    <div class="col-md-3 fv-row">
                                        <label class="fs-6 fw-semibold mb-2 ">Attachment</label>
                                        <input type="file" class="form-control form-control-solid" placeholder="" name="transcerti_attach" id="transcerti_attach" value="" />
                                    </div>
                                </div>
                            </div>
                            <!--end::Scroll-->
                            <!--begin::Actions-->
                            <div class="text-center pt-8">
                                <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel" data-bs-dismiss="modal">Discard</button>
                                <button type="button" class="btn btn-primary" data-kt-users-modal-action="" onclick="addsold()">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>

                            </div>
                            <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modals  ADD EXPENSE -->
            <div class="modal fade" id="kt_modal_add_gps_expense" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_gps_expense_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Expense</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y">
                            <!--begin::Form-->
                            <!-- <form id="add-form" class="form" action="#"> -->
                            <!--begin::Scroll-->
                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_gps_expense_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_gps_expense_header" data-kt-scroll-wrappers="#kt_modal_add_gps_expense_scroll" data-kt-scroll-offset="300px">
                                <!--begin::Input group-->

                                <input type="hidden" id="idexp" value="" />
                                <input type="hidden" id="exp_id_gps" value="" />
                                <div class="row g-9 mb-7">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Taxable Amount</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" onkeyup="getAmountgp()" id="amountgp" value="" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Tax Percentage</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" onkeyup="getAmountgp()" id="tax_pergp" value="5" />
                                    </div>
                                </div>
                                <div class="row g-9 mb-7">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Tax Amount</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" id="tax_amtgp" value="" readonly />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Total</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" id="totalgp" value="" readonly />
                                    </div>
                                </div>
                                <div class="row g-9 mb-7">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Payment Mode</label>
                                        <input type="payment_mode" class="form-control form-control-solid" placeholder="" id="payment_modegp" value="" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Payment Reference</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="" id="payment_refgp" value="" />
                                    </div>
                                </div>
                                <div class="row g-9 mb-7">
                                    <div class="col-md-12 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Payment Attach</label>
                                        <input type="file" class="form-control form-control-solid" placeholder="" name="image_fileexp" id="image_fileexpgp" value="" />
                                    </div>
                                </div>


                            </div>
                            <!--end::Scroll-->
                            <!--begin::Actions-->
                            <div class="text-center pt-8">
                                <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel" data-bs-dismiss="modal">Discard</button>
                                <button type="button" class="btn btn-primary" data-kt-users-modal-action="" id="addexpensegps">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>

                            </div>
                            <!--end::Actions-->
                            <table class="table table-striped col-md-10" id="payment_attachgps" style="display: none;">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl NO</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Taxable Amount</th>
                                        <th scope="col">Tax Amount</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Attachment</th>
                                        <th scope="col">Action</th>
                                        <!-- <th scope="col">Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!-- gps -->
            <div class="modal fade" id="kt_modal_add_gps" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-950px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Form-->
                        <form class="form" action="#" data-kt-redirect="#">
                            <!--begin::Modal header-->
                            <input type="hidden" id="mulkiyaid">
                            <div class="modal-header" id="kt_modal_add_gps_header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold" id="gps_heading"></h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->

                                <div id="kt_modal_add_gps_close" class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body py-10 px-lg-17">
                                <!--begin::Scroll-->
                                <div class="scroll-y me-n7 pe-7" id="kt_modal_add_gps_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_mulkiya_header" data-kt-scroll-wrappers="#kt_modal_add_mulkiya_scroll" data-kt-scroll-offset="300px">
                                    <div class="row g-9 mb-7">
                                        <div class="col-md-3 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Installation
                                                Date</label>
                                            <input type="date" class="form-control form-control-solid" placeholder="" id="installation_date" value="">
                                        </div>
                                        <!--<div class="col-md-3 fv-row">-->
                                        <!--<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">-->
                                        <!--		<input class="form-check-input" type="checkbox" value="" name="certificate_issued" id="certificate_issued" checked="">-->
                                        <!--		<label class="form-check-label">Certificate Issued</label>-->
                                        <!--	</div>-->
                                        <!--</div>-->

                                        <div class="col-sm-3 fv-row">
                                            <label class="fs-6 fw-semibold mb-2">Vendor</label>
                                            <input type="text" class="form-control form-control-solid" placeholder="" id="vendor" value="">
                                        </div>
                                        <div class="col-sm-3 fv-row">
                                            <label class="fs-6 fw-semibold mb-2">Expiry Date</label>
                                            <input type="date" class="form-control form-control-solid" placeholder="" id="gpsexpiry_date" value="">
                                        </div>
                                        <div class="col-sm-3 fv-row">
                                            <label class="fs-6 fw-semibold mb-2">Certificate Number</label>
                                            <input type="text" class="form-control form-control-solid" placeholder="" id="certificate_no" value="" />
                                        </div>
                                    </div>


                                    <div class="row g-9 mb-7">
                                        <div class="col-sm-3 fv-row">
                                            <label class="fs-6 fw-semibold mb-2">Certificate Date</label>
                                            <input type="date" class="form-control form-control-solid" placeholder="" id="certificate_date" value="" />
                                        </div>
                                        <div class="col-sm-3 fv-row">
                                            <label class="fs-6 fw-semibold mb-2">Band</label>
                                            <select name="band_gps" id="band_gps" aria-label="Select a band" data-control="select2" data-placeholder="Select a band..." class="form-select form-select-solid form-select-lg fw-semibold">
                                                <option value="">Select</option>
                                                <option value="3G">3G</option>
                                                <option value="4G">4G</option>
                                                <option value="5G">5G</option>

                                            </select>
                                        </div>
                                        <div class="col-sm-3 fv-row">
                                            <label class="fs-6 fw-semibold mb-2">Type</label>
                                            <select name="type_gps" id="type_gps" aria-label="Select a type" data-control="select2" data-placeholder="Select a band..." class="form-select form-select-solid form-select-lg fw-semibold">
                                                <option value="">Select</option>
                                                <option value="NORMAL">NORMAL</option>
                                                <option value="SECURPATH">SECURPATH</option>
                                                <option value="ASATEEL">ASATEEL</option>

                                            </select>
                                        </div>

                                        <div class="col-sm-3 fv-row">
                                            <!-- <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="" name="gpsis_paid" id="is_paid_gps" checked="">
																<label class="form-check-label">is_paid</label>
															</div> -->
                                        </div>
                                    </div>
                                    <div id="expense_gps" style="display: none;">
                                        <div class="row g-9 mb-7">
                                            <div class="col-md-3 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Amount</label>
                                                <input type="number" class="form-control form-control-solid" placeholder="" onkeyup="getAmountgps()" id="amountgps" value="">
                                            </div>
                                            <div class="col-md-3 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Tax
                                                    Percentage</label>
                                                <input type="number" class="form-control form-control-solid" placeholder="" onkeyup="getAmountgps()" id="tax_pergps" value="5">
                                            </div>
                                            <div class="col-md-3 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Tax
                                                    Amount</label>
                                                <input type="number" class="form-control form-control-solid" placeholder="" id="tax_amtgps" value="" readonly="">
                                            </div>
                                            <div class="col-md-3 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Total</label>
                                                <input type="number" class="form-control form-control-solid" placeholder="" id="totalgps" value="" readonly="">
                                            </div>
                                        </div>
                                        <div class="row g-9 mb-7">


                                            <div class="col-md-3 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Payment
                                                    Mode</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" id="payment_modegps" value="">
                                            </div>
                                            <div class="col-md-3 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Payment
                                                    Reference</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" id="payment_refgps" value="">
                                            </div>
                                            <div class="col-md-3 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Attachment</label>
                                                <input type="file" class="form-control form-control-solid" placeholder="" name="image_fileexpgps" id="image_fileexpgps" value="">
                                            </div>
                                        </div>

                                    </div>
                                    <input type="hidden" placeholder="" id="gps_id" value="" />
                                </div>
                                <!--end::Scroll-->
                            </div>
                            <!--end::Modal body-->
                            <!--begin::Modal footer-->
                            <div class="modal-footer flex-center">
                                <!--begin::Button-->
                                <button type="button" onclick="getclear_gps()" class="btn btn-light me-3" data-bs-dismiss="modal">Clear</button>
                                <button type="button" onclick="submitgps()" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <!--end::Button-->
                            </div>
                            <!--end::Modal footer-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
            <!--end::Modals  ADD EXPENSE -->
            <div class="modal fade" id="kt_modal_add_mulkiya" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Form-->
                        <form class="form" action="#" data-kt-redirect="#">
                            <!--begin::Modal header-->
                            <input type="hidden" id="mulkiyaid">
                            <div class="modal-header" id="kt_modal_add_mulkiya_header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold" id="mulkiya_heading"></h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->

                                <div id="kt_modal_add_mulkiya_close" class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body py-10 px-lg-17">
                                <!--begin::Scroll-->
                                <div class="scroll-y me-n7 pe-7" id="kt_modal_add_mulkiya_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_mulkiya_header" data-kt-scroll-wrappers="#kt_modal_add_mulkiya_scroll" data-kt-scroll-offset="300px">
                                    <div class="row g-9 mb-7">
                                        <div class="col-md-6 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Mulkiya Date</label>
                                            <input type="date" class="form-control form-control-solid" placeholder="" name="name" id="mulkiyadate" />
                                        </div>
                                        <div class="col-md-6 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Expiry Date</label>
                                            <input type="date" class="form-control form-control-solid" placeholder="" name="name" min="<?= date('Y-m-d'); ?>" id="expirymul" />
                                        </div>
                                    </div>


                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <div class="col-md-6 fv-row">
                                            <label class="fs-6 fw-semibold mb-2">Mulkiya Attach</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="file" class="form-control form-control-solid" placeholder="" name="mulkiya_attach" id="mulkiya_attach" value="" />
                                            <!--end::Input-->
                                        </div>
                                    </div>

                                </div>
                                <!--end::Scroll-->
                            </div>
                            <!--end::Modal body-->
                            <!--begin::Modal footer-->
                            <div class="modal-footer flex-center">
                                <!--begin::Button-->
                                <button type="button" id="kt_customers_export_cancel" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="button" class="btn btn-primary" id="insertmulkiya">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Button-->
                            </div>
                            <!--end::Modal footer-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
            <!-- document area -->
            <div class="modal fade" id="kt_modal_add_document" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-450px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Form-->
                        <form class="form" action="#" data-kt-redirect="#">
                            <!--begin::Modal header-->

                            <div class="modal-header" id="kt_modal_add_document_header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold" id="document_heading"></h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->

                                <div id="kt_modal_add_document_close" class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body py-10 px-lg-17">
                                <!--begin::Scroll-->
                                <div class="scroll-y me-n7 pe-7" id="kt_modal_add_document_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_mulkiya_header" data-kt-scroll-wrappers="#kt_modal_add_mulkiya_scroll" data-kt-scroll-offset="300px">
                                    <div class="row g-9 mb-7">
                                        <div class="col-md-12 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Document Name</label>
                                            <input type="hidden" id="documentid">
                                            <input type="text" class="form-control form-control-solid" placeholder="" name="document_name" id="document_name" />
                                        </div>
                                    </div>


                                    <div class="row g-9 mb-7">
                                        <!--begin::Label-->
                                        <div class="col-md-12 fv-row">
                                            <label class="fs-6 fw-semibold mb-2">Document Attach</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="file" class="form-control form-control-solid" placeholder="" name="document_attach" id="document_attach" value="" />
                                            <!--end::Input-->
                                        </div>
                                    </div>

                                </div>
                                <!--end::Scroll-->
                            </div>
                            <!--end::Modal body-->
                            <!--begin::Modal footer-->
                            <div class="modal-footer flex-center">
                                <!--begin::Button-->
                                <button type="button" id="kt_customers_export_cancel" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="button" class="btn btn-primary" id="insertdocument">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Button-->
                            </div>
                            <!--end::Modal footer-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
            <!-- document area-->
            <!-- speed limiter -->
            <div class="modal fade" id="kt_modal_add_speedlimiter" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-850px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Form-->
                        <form class="form" action="#" data-kt-redirect="#">
                            <!--begin::Modal header-->

                            <div class="modal-header" id="kt_modal_add_speedlimiter_header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold" id="speed_heading"></h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->

                                <div id="kt_modal_add_speedlimiter_close" class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body py-10 px-lg-17">
                                <!--begin::Scroll-->
                                <div class="scroll-y me-n7 pe-7" id="kt_modal_add_speedlimiter_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_mulkiya_header" data-kt-scroll-wrappers="#kt_modal_add_mulkiya_scroll" data-kt-scroll-offset="300px">
                                    <div class="row g-9 mb-7">
                                        <div class="col-md-3 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Certificate
                                                NO</label>
                                            <input type="text" class="form-control form-control-solid" placeholder="" id="speed_certificateno" value="" />
                                        </div>
                                        <div class="col-md-3 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Set Speed</label>
                                            <!-- <input type="hidden" id="issueida"  class="form-control"></input> -->
                                            <input type="text" class="form-control form-control-solid" placeholder="" id="speed_setspeed" value="" />
                                        </div>
                                        <div class="col-md-3 fv-row">
                                            <!--begin::Label-->
                                            <label class="required fs-6 fw-semibold mb-2">RDPS NO</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="number" class="form-control form-control-solid" placeholder="" id="speed_rdpsno" value="" />
                                            <!--end::Input-->
                                        </div>

                                        <div class="col-md-3 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Fitment
                                                Date</label>
                                            <input type="date" class="form-control form-control-solid" placeholder="" id="speed_fitmentdate" value="" />
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control form-control-solid" placeholder="" id="speed_id" value="" />

                                    <div class="row g-9 mb-7">

                                        <div class="col-md-3 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Certificate
                                                Date</label>
                                            <input type="date" class="form-control form-control-solid" placeholder="" id="speed_certificatedate" value="" />
                                        </div>
                                        <div class="col-md-3 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Expiry
                                                Date</label>
                                            <input type="date" class="form-control form-control-solid" placeholder="" min="<?= date('Y-m-d'); ?>" id="speed_expirydate" value="" />
                                        </div>
                                        <div class="col-md-3 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Vendor</label>
                                            <input type="text" class="form-control form-control-solid" placeholder="" id="speed_vendor" value="" />
                                        </div>
                                        <div class="col-md-3 fv-row" id="spee_att">
                                            <label class="required fs-6 fw-semibold mb-2">Attachment</label>
                                            <input type="file" class="form-control form-control-solid" placeholder="" id="speedlimit_attachment" value="speedlimit_attachment" />
                                        </div>
                                    </div>
                                    <div class="row g-9 mb-7">
                                        <div class="col-md-3 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Device
                                                Type</label>
                                            <input type="text" class="form-control form-control-solid" placeholder="" id="speed_device" value="" />
                                        </div>
                                        <div class="col-md-3 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Control
                                                Type</label>
                                            <input type="text" class="form-control form-control-solid" placeholder="" id="speed_control" value="" />
                                        </div>
                                    </div>
                                    <div class="row g-9 mb-7">
                                        <div class="col-md-4 fv-row" id="is_paid_div">
                                            <!-- <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="" name="is_paid_speed" id="is_paid_speed"  checked="" />
																<label class="form-check-label">is_paid</label>
															</div> -->
                                        </div>
                                    </div>
                                    <div id="expense_speed" style="display: none;">
                                        <div class="row g-9 mb-7">
                                            <div class="col-md-3 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Amount</label>
                                                <input type="number" class="form-control form-control-solid" placeholder="" onkeyup="getAmount1()" id="amountm" value="" />
                                            </div>
                                            <div class="col-md-3 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Tax
                                                    Percentage</label>
                                                <input type="number" class="form-control form-control-solid" placeholder="" onkeyup="getAmount1()" id="tax_perm" value="5" re />
                                            </div>
                                            <div class="col-md-3 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Tax
                                                    Amount</label>
                                                <input type="number" class="form-control form-control-solid" placeholder="" id="tax_amtm" value="" readonly />
                                            </div>
                                            <div class="col-md-3 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Total</label>
                                                <input type="number" class="form-control form-control-solid" placeholder="" id="totalm" value="" readonly />
                                            </div>
                                        </div>
                                        <div class="row g-9 mb-7">


                                            <div class="col-md-3 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Payment
                                                    Mode</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" id="payment_modem" value="" />
                                            </div>
                                            <div class="col-md-3 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Payment
                                                    Reference</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" id="payment_refm" value="" />
                                            </div>
                                            <div class="col-md-3 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Payment
                                                    Attachment</label>
                                                <input type="file" class="form-control form-control-solid" placeholder="" name="image_fileexpm" id="image_fileexpm" value="" />
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <!--end::Scroll-->
                            </div>
                            <!--end::Modal body-->
                            <!--begin::Modal footer-->
                            <div class="modal-footer flex-center">
                                <!--begin::Button-->
                                <button type="button" onclick="getclear_speed()" class="btn btn-light me-3" data-bs-dismiss="modal">Clear</button>
                                <!--begin::Button-->
                                <button type="button" id="insert_speedlimiter" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>

                                </button>
                                <!--end::Button-->
                            </div>
                            <!--end::Modal footer-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
            <!-- insur -->
            <div class="modal fade" id="kt_modal_add_insurance" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-950px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Form-->
                        <form class="form" action="#" data-kt-redirect="#">
                            <!--begin::Modal header-->
                            <input type="hidden" class="form-control form-control-solid" placeholder="" id="insurance_id" value="" />
                            <div class="modal-header" id="kt_modal_add_insurance_header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold" id="insurance_heading"></h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->

                                <div id="kt_modal_add_insurance_close" class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body py-10 px-lg-17">
                                <!--begin::Scroll-->
                                <div class="scroll-y me-n7 pe-7" id="kt_modal_add_insurance_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_mulkiya_header" data-kt-scroll-wrappers="#kt_modal_add_mulkiya_scroll" data-kt-scroll-offset="300px">
                                    <div class="row g-9 mb-7">
                                        <div class="col-md-3 fv-row">
                                            <input type="hidden" class="form-control form-control-solid" placeholder="" id="insurance_id" value="" />
                                            <label class="required fs-6 fw-semibold mb-2">Insurance
                                                Company</label>
                                            <select id="insurance_company" aria-label="Select a Company" data-control="select2" data-placeholder="Select a Company..." class="form-select form-select-solid form-select-lg fw-semibold"></select>
                                        </div>
                                        <div class="col-md-3 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Policy No</label>
                                            <input type="text" class="form-control form-control-solid" placeholder="" name="policy_no" id="policy_no" value="" />
                                        </div>
                                        <div class="col-md-3 fv-row">
                                            <label class="fs-6 fw-semibold mb-2">Policy date</label>
                                            <input type="date" class="form-control form-control-solid" placeholder="" name="policy_date" id="policy_date" value="" />
                                        </div>
                                        <div class="col-md-3 fv-row">
                                            <label class="fs-6 fw-semibold mb-2">Policy Attachment</label>
                                            <input type="file" name="policy_attachment" id="policy_attachment" class="form-control form-control-solid" placeholder="">
                                        </div>
                                    </div>


                                    <div class="row g-9 mb-7">
                                        <div class="col-md-3 fv-row">
                                            <label class="fs-6 fw-semibold mb-2">Insurance Type</label>
                                            <!--<input type="text" class="form-control form-control-solid" placeholder="" name="insurance_type" id="insurance_type" value="" />-->
                                            <select name="insurance_type" id="insurance_type" aria-label="Select an insurance type" data-control="select2" data-placeholder="Select an insurance type..." class="form-select form-select-solid form-select-lg fw-semibold">
                                                <option value="">Select</option>
                                                <option value="Full Insurance">Full Insurance</option>
                                                <option value="Third Party">Third Party</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 fv-row">
                                            <label class="fs-6 fw-semibold mb-2 ">Insured Sum</label>
                                            <input type="number" class="form-control form-control-solid" placeholder="" name="insured_sum" id="insured_sum" value="" />

                                        </div>
                                        <div class="col-md-3 fv-row">
                                            <label class="fs-6 fw-semibold mb-2">Start Date</label>
                                            <input type="date" class="form-control form-control-solid" placeholder="" name="start_date" id="start_date" value="" />

                                        </div>
                                        <div class="col-md-3 fv-row">
                                            <label class="fs-6 fw-semibold mb-2">Expiry Date</label>
                                            <input type="date" class="form-control form-control-solid" placeholder="" name="expiry_datei" id="expiry_datei" value="" />
                                        </div>
                                    </div>
                                    <div class="row g-9 mb-7">
                                        <div class="col-md-3 fv-row">
                                            <label class=" fs-6 fw-semibold mb-2">Invoice Date</label>
                                            <input type="date" class="form-control form-control-solid" placeholder="" name="invoice_date" id="invoice_date" value="" />
                                        </div>
                                        <div class="col-md-3 fv-row">
                                            <label class="fs-6 fw-semibold mb-2">Invoice No</label>
                                            <input type="text" class="form-control form-control-solid" placeholder="" name="invoice_no" id="invoice_no" value="" />
                                        </div>
                                        <div class="col-md-3 fv-row">
                                            <label class=" fs-6 fw-semibold mb-2">Invoice Attachment</label>
                                            <input type="file" class="form-control form-control-solid" placeholder="" name="invoice_attachment" id="invoice_attachment" value="" />
                                        </div>
                                        <div class="col-md-3 fv-row">
                                            <label class="fs-6 fw-semibold mb-2">Premium Amount</label>
                                            <input type="number" class="form-control form-control-solid" placeholder="" name="premium_amt" id="premium_amt" value="" />
                                        </div>
                                    </div>

                                    <div class="row g-9 mb-7">

                                        <div class="col-md-3 fv-row">
                                            <label class=" fs-6 fw-semibold mb-2">Premium Vat</label>
                                            <input type="number" class="form-control form-control-solid" placeholder="" name="premium_vat" id="premium_vat" value="" />
                                        </div>
                                        <div class="col-md-3 fv-row">
                                            <label class="fs-6 fw-semibold mb-2">Invoice Amount</label>
                                            <input type="number" class="form-control form-control-solid" placeholder="" name="invoice_amt" id="invoice_amt" value="" />
                                        </div>
                                        <div class="col-md-3 fv-row" id="attachmentin">
                                            <label class=" fs-6 fw-semibold mb-2">Attachment</label>
                                            <input type="file" class="form-control form-control-solid" placeholder="" name="attachment" id="attachment" value="" />
                                        </div>
                                        <div class="col-md-3 fv-row">
                                            <!-- <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="" name="is_paid_insurance" id="is_paid_insurance"  checked="" />
																<label class="form-check-label">is_paid</label>
															</div> -->
                                        </div>
                                    </div>
                                    <div id="expense_insurance" style="display: none;">
                                        <div class="row g-9 mb-7">
                                            <div class="col-md-3 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Amount</label>
                                                <input type="number" class="form-control form-control-solid" placeholder="" onkeyup="getAmounti()" id="amounti" value="" />
                                            </div>
                                            <div class="col-md-3 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Tax
                                                    Percentage</label>
                                                <input type="number" class="form-control form-control-solid" placeholder="" onkeyup="getAmounti()" id="tax_peri" value="5" />
                                            </div>
                                            <div class="col-md-3 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Tax
                                                    Amount</label>
                                                <input type="number" class="form-control form-control-solid" placeholder="" id="tax_amti" value="" readonly />
                                            </div>
                                            <div class="col-md-3 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Total</label>
                                                <input type="number" class="form-control form-control-solid" placeholder="" id="totali" value="" readonly />
                                            </div>
                                        </div>

                                        <div class="row g-9 mb-7">
                                            <div class="col-md-3 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Payment
                                                    Mode</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" id="payment_modei" value="" />
                                            </div>
                                            <div class="col-md-3 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Payment
                                                    Reference</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" id="payment_refi" value="" />
                                            </div>
                                            <div class="col-md-3 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Payment
                                                    Attachment</label>
                                                <input type="file" class="form-control form-control-solid" placeholder="" name="image_fileexpi" id="image_fileexpi" value="" />
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!--end::Scroll-->
                            </div>
                            <!--end::Modal body-->
                            <!--begin::Modal footer-->
                            <div class="modal-footer flex-center">
                                <!--begin::Button-->
                                <button type="button" onclick="getclear_insurance()" class="btn btn-light me-3" data-bs-dismiss="modal">Clear</button>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="button" class="btn btn-primary" id="submitinsur">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Button-->
                            </div>
                            <!--end::Modal footer-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
            <div class="modal fade" id="kt_modal_add_passing" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-600px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Form-->
                        <form class="form" data-kt-redirect="#">
                            <!--begin::Modal header-->
                            <div class="modal-header" id="kt_modal_add_customer_header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold">Add Passing</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->

                                <div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body scroll-y">
                                <!--begin::Scroll-->
                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                                    <div class="row g-9 mb-7">
                                        <div class="col-md-6 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Vendor Name</label>
                                            <input type="text" class="form-control form-control-solid" placeholder="" name="vendor_name" id="vendor_name" />
                                        </div>
                                        <div class="col-md-6 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Passing Date</label>
                                            <input type="date" class="form-control form-control-solid" placeholder="" name="passingdate" id="passingdate" />
                                        </div>
                                    </div>

                                    <div class="row g-9 mb-7">
                                        <div class="col-md-6 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Expiry Date</label>
                                            <!-- <input type="hidden" id="issueida"  class="form-control"></input> -->
                                            <input type="date" class="form-control form-control-solid" placeholder="" name="expirypassing" min="<?= date('Y-m-d'); ?>" id="expirypassing" />
                                        </div>
                                        <div class="col-md-6 fv-row">
                                            <label class=" fs-6 fw-semibold mb-2">Status</label>
                                            <input type="text" class="form-control form-control-solid" placeholder="" name="status" id="status" />
                                        </div>

                                    </div>
                                    <div class="row g-9 mb-7">

                                        <div class="col-md-6 fv-row">
                                            <label class=" fs-6 fw-semibold mb-2">Attachment</label>
                                            <input type="file" class="form-control form-control-solid" placeholder="" name="passing_attachment" id="passing_attachment" />
                                        </div>
                                        <div class="col-md-6 fv-row">
                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <!-- <label class="form-check-label  fs-6 fw-semibold mb-2">Finished</label> -->
                                                <input class="form-check-input" type="checkbox" value="" name="is_finished" id="is_finished" checked="" />
                                                <label class="form-check-label">Finished</label>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Scroll-->
                            </div>
                            <!--end::Modal body-->
                            <!--begin::Modal footer-->
                            <div class="modal-footer flex-center">
                                <!--begin::Button-->
                                <button type="button" id="kt_customers_export_cancel" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="button" id="insertpassing" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Button-->
                            </div>
                            <!--end::Modal footer-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
            <div class="modal fade" id="kt_modal_add_expense" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_expense_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Expense</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y">
                            <!--begin::Form-->
                            <!-- <form id="add-form" class="form" action="#"> -->
                            <!--begin::Scroll-->
                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_expense_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_expense_header" data-kt-scroll-wrappers="#kt_modal_add_expense_scroll" data-kt-scroll-offset="300px">
                                <!--begin::Input group-->

                                <input type="hidden" id="idexp" value="" />
                                <input type="hidden" id="exp_id" value="" />
                                <div class="row g-9 mb-7">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Taxable Amount</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" onkeyup="getAmount()" id="amount" value="" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Tax Percentage</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" onkeyup="getAmount()" id="tax_per" value="5" />
                                    </div>
                                </div>
                                <div class="row g-9 mb-7">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Tax Amount</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" id="tax_amt" value="" readonly />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Total</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" id="total" value="" />
                                    </div>
                                </div>
                                <div class="row g-9 mb-7">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Payment Mode</label>
                                        <input type="payment_mode" class="form-control form-control-solid" placeholder="" id="payment_mode" value="" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Payment Reference</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="" id="payment_ref" value="" />
                                    </div>
                                </div>
                                <div class="row g-9 mb-7">
                                    <div class="col-md-12 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Payment Attach</label>
                                        <input type="file" class="form-control form-control-solid" placeholder="" name="image_fileexp" id="image_fileexp" value="" />
                                    </div>
                                </div>


                            </div>
                            <!--end::Scroll-->
                            <!--begin::Actions-->
                            <div class="text-center pt-8">
                                <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel" data-bs-dismiss="modal">Discard</button>
                                <button type="button" class="btn btn-primary" data-kt-users-modal-action="" id="addexpense">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>

                            </div>
                            <!--end::Actions-->
                            <table class="table table-striped col-md-10" id="payment_attach" style="display: none;">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl NO</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Taxable Amount</th>
                                        <th scope="col">Tax Amount</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Attachment</th>
                                        <th scope="col">Action</th>
                                        <!-- <th scope="col">Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <div class="modal fade" id="kt_modal_edit_expense" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_edit_expense_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Update Expense</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y">
                            <!--begin::Form-->
                            <!-- <form id="add-form" class="form" action="#"> -->
                            <!--begin::Scroll-->
                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_edit_expense_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_edit_expense_header" data-kt-scroll-wrappers="#kt_modal_edit_expense_scroll" data-kt-scroll-offset="300px">
                                <!--begin::Input group-->

                                <input type="hidden" id="idexpe" value="" />
                                <input type="hidden" id="exp_ide" value="" />
                                <div class="row g-9 mb-7">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Taxable Amount</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" onkeyup="getAmount2()" id="amounte" value="" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Tax Percentage</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" onkeyup="getAmount2()" id="tax_pere" value="" />
                                    </div>
                                </div>
                                <div class="row g-9 mb-7">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Tax Amount</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" id="tax_amte" value="" readonly />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Total</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" id="totale" value="" readonly />
                                    </div>
                                </div>
                                <div class="row g-9 mb-7">
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Payment Mode</label>
                                        <input type="payment_mode" class="form-control form-control-solid" placeholder="" id="payment_modee" value="" />
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Payment Reference</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="" id="payment_refe" value="" />
                                    </div>
                                </div>
                                <div class="row g-9 mb-7">
                                    <div class="col-md-12 fv-row">
                                        <label class="required fs-6 fw-semibold mb-2">Payment Attach</label>
                                        <input type="file" class="form-control form-control-solid" placeholder="" name="image_fileexpe" id="image_fileexpe" value="" />
                                    </div>
                                </div>
                                <table class="table table-striped col-md-10" id="payment_attach" style="display: none;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sl NO</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Taxable Amount</th>
                                            <th scope="col">Tax Amount</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Attachment</th>
                                            <th scope="col">Action</th>
                                            <!-- <th scope="col">Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>

                            </div>
                            <!--end::Scroll-->
                            <!--begin::Actions-->
                            <div class="text-center pt-8">
                                <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel" data-bs-dismiss="modal">Discard</button>
                                <button type="button" class="btn btn-primary" data-kt-users-modal-action="" id="updateexpense">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>

                            </div>
                            <!--end::Actions-->

                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->

                <!-- </div> -->

            </div>
            <div class="modal fade" id="kt_modal_add_attachment_passing" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_attachment">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Add attachments</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y">
                            <!--begin::Form-->
                            <form class="form" enctype="multipart/form-data" method="post">
                                <!--begin::Scroll-->
                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_attachment_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_attachment_header" data-kt-scroll-wrappers="#kt_modal_add_attachment_scroll" data-kt-scroll-offset="300px">
                                    <!--begin::Input group-->

                                    <div class="row g-9 mb-7">
                                        <div class="col-md-6 fv-row">
                                            <label class="fs-6 fw-semibold mb-2">Attachement Type</label>
                                            <input class="form-control form-control-solid" placeholder="" name="pass_attachment_type" id="pass_attachment_type" value="" />
                                        </div>
                                        <div class="col-md-6 fv-row">
                                            <label class="fs-6 fw-semibold mb-2">Select File</label>
                                            <input type="file" class="form-control form-control-solid" placeholder="" name="pass_image_file" id="pass_image_file" value="" />
                                        </div>
                                    </div>

                                    <div class="row g-9 mb-7">
                                        <div class="col-md-6 fv-row">
                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" name="pass_is_expiry" id="pass_is_expiry" checked="" />
                                                <label class="form-check-label">is_expiry</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 fv-row" id="pass_ex_date" style="display: none;">
                                            <label class="fs-6 fw-semibold mb-2">Select Date</label>
                                            <input type="hidden" class="form-control form-control-solid" placeholder="" name="passing_id" id="passing_id" value="" />

                                            <input type="Date" class="form-control form-control-solid" placeholder="" min="<?= date('Y-m-d'); ?>" name="pass_expiry_date" id="pass_expiry_date" value="" />
                                        </div>
                                    </div>


                                </div>
                                <!--end::Scroll-->
                                <!--begin::Actions-->
                                <div class="text-center pt-8">
                                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel" data-bs-dismiss="modal">Discard</button>
                                    <button type="Submit" class="btn btn-primary" data-kt-users-modal-action="" id="passing_attachment_submit">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <div class="row" style="margin:1rem ;">
                                        <table class="table table-striped col-md-10">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Sl No</th>
                                                    <th scope="col">Attachment Type</th>
                                                    <th scope="col">Expiry Date</th>
                                                    <th scope="col">Time Stamp</th>
                                                    <th scope="col">View</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="passatlist">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <div class="modal fade" id="kt_modal_edit_passing" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Form-->
                        <form class="form" action="#" data-kt-redirect="#">
                            <!--begin::Modal header-->
                            <div class="modal-header" id="kt_modal_add_customer_header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold">Edit passing</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->

                                <div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body py-10 px-lg-17">
                                <!--begin::Scroll-->
                                <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                                    <div class="row g-9 mb-7">
                                        <div class="col-md-6 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Vendor Name</label>
                                            <input type="text" class="form-control form-control-solid" placeholder="" name="vendor_nameE" id="vendor_nameE" />
                                        </div>
                                        <div class="col-md-6 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Passing Date</label>
                                            <input type="date" class="form-control form-control-solid" placeholder="" name="passingdateE" id="passingdateE" />
                                        </div>

                                    </div>

                                    <div class="row g-9 mb-7">
                                        <div class="col-md-6 fv-row">
                                            <label class="required fs-6 fw-semibold mb-2">Expiry Date</label>
                                            <input type="hidden" id="passid" class="form-control"></input>
                                            <input type="date" class="form-control form-control-solid" placeholder="" min="<?= date('Y-m-d'); ?>" name="expirypassingE" id="expirypassingE" />
                                        </div>
                                        <div class="col-md-6 fv-row">
                                            <label class=" fs-6 fw-semibold mb-2">Status</label>
                                            <input type="text" class="form-control form-control-solid" placeholder="" name="statusE" id="statusE" />
                                        </div>

                                    </div>
                                    <div class="row g-9 mb-7">

                                        <div class="col-md-6 fv-row">
                                            <label class=" fs-6 fw-semibold mb-2">Attachment</label>
                                            <input type="file" class="form-control form-control-solid" placeholder="" name="passing_attachmentE" id="passing_attachmentE" />
                                        </div>
                                        <div class="col-md-6 fv-row">
                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <!-- <label class="form-check-label  fs-6 fw-semibold mb-2">Finished</label> -->
                                                <input class="form-check-input" type="checkbox" value="" name="is_finishedE" id="is_finishedE" checked="" />
                                                <label class="form-check-label">Finished</label>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--end::Scroll-->
                            </div>
                            <!--end::Modal body-->
                            <!--begin::Modal footer-->
                            <div class="modal-footer flex-center">
                                <!--begin::Button-->
                                <button type="button" id="kt_customers_export_cancel" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="button" onclick="updatepassing()" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Button-->
                            </div>
                            <!--end::Modal footer-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
            <?php include 'common/footer.php'; ?>
            <script type="text/javascript">
                function adddocumentsmodal() {
                    $("#documentname").val("");
                    $("#document_attach").val("");
                    $("#document_heading").html("Add Document");
                    $('#kt_modal_add_document').modal('toggle');
                }

                function addspeedlimiteramodal() {
                    $('#speedlimit_attachment').val();
                    $("#speed_certificateno").val('');
                    $("#speed_rdpsno").val('');
                    $("#speed_setspeed").val('');
                    $("#speed_fitmentdate").val('');
                    $("#speed_certificatedate").val('');
                    $("#speed_expirydate").val('');
                    $("#speed_vendor").val('');
                    $("#speed_device").val('');
                    $("#speed_control").val('');
                    $("#amountm").val('');
                    $("#speedlimit_attachment").val('');
                    $("#tax_amtm").val('');
                    $("#totalm").val('');
                    $("#payment_modem").val('');
                    $("#payment_refm").val('');
                    $("#image_fileexpm").val('');

                    $('#kt_modal_add_speedlimiter').modal('toggle');
                }

                function addgpsmodal() {
                    $("#certificate_no").val("");
                    $("#gps_id").val("");
                    $("#certificate_date").val("");
                    $("#gpsexpiry_date").val("");
                    $("#vendor").val("");
                    $('#is_paid_gps').prop('checked', false);
                    $('#amountgps').val("");
                    $('#tax_pergps').val("");
                    $('#tax_amtgps').val("");
                    $('#totalgps').val("");
                    $('#payment_modegps').val("");
                    $('#payment_refgps').val("");
                    $('#installation_date').val("");
                    $('#certificate_issued').prop('checked', false);
                    $("#band_gps").empty();
                    $("#band_gps").append('<option value="">Select</option>');

                    $("#band_gps").append('<option value="3G">3G</option>');
                    $("#band_gps").append('<option value="4G">4G</option>');
                    $("#band_gps").append('<option value="5G">5G</option>');
                    $("#type_gps").empty();
                    $("#type_gps").append('<option value="">Select</option>');

                    $("#type_gps").append('<option value="NORMAL">NORMAL</option>');
                    $("#type_gps").append('<option value="SECURPATH">SECURPATH</option>');
                    $("#type_gps").append('<option value="ASATEEL">ASATEEL</option>');

                    $('#kt_modal_add_gps').modal('toggle');
                }

                function addmulkiyamodal() {
                    $("#mulkiyadate").val("");
                    $("#expirymul").val("");
                    $("#mulkiya_attach").val("");
                    //$("#firm_id").val("");

                    $('#kt_modal_add_mulkiya').modal('toggle');
                }

                function addinsuranceamodal() {
                    $("#insurance_type").empty();
                    $("#insurance_type").append('<option value="">Select</option>');

                    $("#insurance_type").append('<option value="Full Insurance">Full Insurance</option>');
                    $("#insurance_type").append('<option value="Third Party">Third Party</option>');
                    $("#insurance_id").val("");
                    $("#insur_vehicleid").val("");
                    $("#insurance_company").val("");
                    $("#policy_no").val("");
                    $("#policy_date").val('');
                    $("#policy_attachment").val("");
                    // 	$("#insurance_type").val("");
                    $("#insured_sum").val("");
                    $("#start_date").val("");
                    $("#expiry_date").val("");
                    $("#invoice_date").val("");
                    $("#invoice_no").val("");
                    $("#invoice_attachment").val("");
                    $("#premium_amt").val("");
                    $("#premium_vat").val("");
                    $("#invoice_amt").val("");
                    $("#expiry_datei").val("");
                    $("#attachment").val("");
                    $('#is_paid_insurance').prop('checked', false);
                    $("#amounti").val('');
                    $("#expense_insurance").hide();
                    $("#tax_amti").val('');
                    $("#totali").val('');
                    $("#payment_modei").val('');
                    $("#payment_refi").val('');
                    $("#image_fileexpi").val('');
                    $('#kt_modal_add_insurance').modal('toggle');
                }

                function addsold() {
                    var form_data = new FormData();
                    var vid = $("#vid").val();
                    var vsale = $("#vsale").val();
                    var transfertype = $('#transfertype').val();
                    var transferto = $('#transferto').val();
                    var transtoattach = $('#transtoattach').prop("files")[0];

                    var transfertcno = $('#transfertcno').val();
                    var transfer_emirate = $('#transfer_emirate').val();
                    var contactname = $('#contactname').val();
                    var contactno = $('#contactno').val();

                    var vehsoldamt = $('#vehsoldamt').val();
                    var amtadv = $('#amtadv').val();
                    var advattach = $('#advattach').prop("files")[0];
                    var balamt = $('#balamt').val();
                    var balattach = $('#balattach').prop("files")[0];
                    var checkcard = $('#checkcard').val();
                    var checkcardattach = $('#checkcardattach').prop("files")[0];
                    var nocletter = $('#nocletter').val();
                    var nocletterattach = $('#nocletterattach').prop("files")[0];
                    var transcer = $('#transcer').val();
                    var transcerti_attach = $('#transcerti_attach').prop("files")[0];

                    if ($('#fuelcard').is(':checked')) {
                        var fuelcard = "Yes";
                    } else {
                        var fuelcard = "No";
                    }
                    if ($('#originalreg').is(':checked')) {
                        var originalreg = "Yes";
                    } else {
                        var originalreg = "No";
                    }

                    if ($('#vgps').is(':checked')) {
                        var vgps = "Yes";
                    } else {
                        var vgps = "No";
                    }

                    if ($('#vsalik').is(':checked')) {
                        var vsalik = "Yes";
                    } else {
                        var vsalik = "No";
                    }
                    if ($('#safetykit').is(':checked')) {
                        var safetykit = "Yes";
                    } else {
                        var safetykit = "No";
                    }

                    if ($('#speedcert').is(':checked')) {
                        var speedcert = "Yes";
                    } else {
                        var speedcert = "No";
                    }

                    if ($('#toolbox').is(':checked')) {
                        var toolbox = "Yes";
                    } else {
                        var toolbox = "No";
                    }


                    if ($('#sparetyre').is(':checked')) {
                        var sparetyre = "Yes";
                    } else {
                        var sparetyre = "No";
                    }

                    if ($('#sparekey').is(':checked')) {
                        var sparekey = "Yes";
                    } else {
                        var sparekey = "No";
                    }
                    if (vsale != "") {
                        form_data.append("vid", vid);
                        form_data.append("vsale", vsale);
                        form_data.append("transfertype", transfertype);
                        form_data.append("transferto", transferto);
                        form_data.append("transtoattach", transtoattach);

                        form_data.append("transfertcno", transfertcno);
                        form_data.append("transfer_emirate", transfer_emirate);
                        form_data.append("contactname", contactname);
                        form_data.append("contactno", contactno);
                        form_data.append("originalreg", originalreg);
                        form_data.append("fuelcard", fuelcard);
                        form_data.append("vgps", vgps);
                        form_data.append("vsalik", vsalik);
                        form_data.append("safetykit", safetykit);
                        form_data.append("speedcert", speedcert);
                        form_data.append("toolbox", toolbox);
                        form_data.append("sparetyre", sparetyre);
                        form_data.append("sparekey", sparekey);
                        form_data.append("vehsoldamt", vehsoldamt);
                        form_data.append("amtadv", amtadv);
                        form_data.append("advattach", advattach);
                        form_data.append("balamt", balamt);
                        form_data.append("balattach", balattach);

                        form_data.append("checkcard", checkcard);
                        form_data.append("checkcardattach", checkcardattach);
                        form_data.append("nocletter", nocletter);
                        form_data.append("nocletterattach", nocletterattach);
                        form_data.append("transcer", transcer);
                        form_data.append("transcerti_attach", transcerti_attach);
                        $.ajax({
                            url: "<?php echo base_url() ?>Master/vehicle_sold",
                            type: 'POST',
                            data: form_data,
                            dataType: "json",
                            processData: false,
                            contentType: false,
                            beforeSend: function() {},
                            success: function(data) {
                                window.location.href = "<?php echo base_url() ?>Master/list_vehicles";
                            },
                        });
                    } else {

                    }
                }
                loaddetails()

                function loaddetails() {
                    $('#is_paid_gps').click(function() {

                        // Get the checkbox
                        if ($(this).is(':checked')) {

                            $('#expense_gps').show();
                        } else {
                            $('#expense_gps').hide();
                        }
                    });
                    $(document).ready(function() {
                        $('#is_expiry_gps').prop('checked', false);
                        $('#pass_is_expiry').prop('checked', false);
                        $('#is_finished').prop('checked', false);
                    });

                    $('#is_expiry_gps').click(function() {

                        // Get the checkbox
                        if ($(this).is(':checked')) {

                            $('#ex_date_gps').show();
                        } else {
                            $('#ex_date_gps').hide();
                        }
                    });
                    $("#attachmentmulkiya").show();
                    $('#speedis_expiry').prop('checked', false);
                    $('#is_expiry_mulkiya').prop('checked', false);
                    $("#mulkiya_heading").html("Add Mulkiya");
                    $('#is_paid_mulk').prop('checked', false);
                    $('#is_paid_insurance').prop('checked', false);
                    $('#is_paid_gps').prop('checked', false);
                    $('#is_paid_speed').prop('checked', false);
                    var vid = $("#vid").val();
                    var rowMenu = [

                    ]
                    $.ajax({
                        url: "<?php echo base_url() ?>Master/get_vehicle_document",
                        type: 'post',
                        dataType: "json",
                        data: {
                            vid: vid
                        },
                        success: function(data) {
                            $("#documenttable tbody").empty();
                            if (data != '') {
                                // $("#signcard_old").html("Renew SignCard");
                                // var i = 0;
                                for (var i = 0; i < data.length; i++) {
                                    // $('#kt_table_mulkiya tbody').append('<tr><td>' + data[i].mulkiya_date + '</td><td>' + data[i].tc_number + '</td><td>' + data[i].expiry_date + '</td><td>' + rs + '</td><td><a onclick="open_mulki_nots_modal(' + data[i].mulkiya_id  + ')" class="btn btn-light-primary me-3"   style="padding: 3px 10px;font-size: 14px;">Notes</a><a  onclick="open_mulki_atts_modal(' + data[i].mulkiya_id  + ')" class="btn btn-light-primary me-3"   style="padding: 3px 10px;font-size: 14px;">Attributes</a><a  onclick="open_mulki_attach_modal(' + data[i].mulkiya_id  + ')"class="btn btn-light-primary me-3"   style="padding: 3px 10px;font-size: 14px;">Attachments</a></td></tr>');
                                    $("#documenttable tbody").append('<tr><td>' + parseFloat(i + 1) + '</td><td>' + data[i].document_name + '</td><td><a target="_blank" href="<?php echo base_url() ?>vehicle_uploads/document/' + data[i].document_attachment + '">View</a></td><td><a onclick="open_edit_modal_document(' + data[i].document_id + ')" title="Edit"   style="padding: 3px ;font-size: 14px;"><i class="fa fa-pencil" style="color:#009ef7"></i></a><a  onclick="delete_document(' + data[i].document_id + ')" title="Delete"><i class="fa fa-trash" style="color:#009ef7"></i></a></td></tr>');

                                }
                            } else {
                                // $("#signcard_old").html("Add SignCard");
                                $("#documenttable tbody").html('<tr><td colspan="5">No Records Found</td></tr>');

                            }

                        }
                    });
                    $.ajax({
                        url: "<?php echo base_url() ?>Master/get_passing",
                        type: 'post',
                        dataType: "json",
                        data: {
                            vid: vid
                        },
                        success: function(data) {
                            $("#passingtable tbody").empty();
                            if (data != '') {
                                console.log(data);
                                // $("#signcard_old").html("Renew SignCard");
                                // var i = 0;
                                for (var i = 0; i < data.length; i++) {



                                    $("#passingtable tbody").append('<tr><td>' + parseFloat(i + 1) + '</td><td>' + data[i].passing_date + '</td><td>' + data[i].expiry_date + '</td><td>' + data[i].is_finished + '</td><td>' + data[i].status + '</td><td>' + data[i].link + '</td></tr>');
                                }
                            } else {
                                // $("#signcard_old").html("Add SignCard");
                                $("#passingtable tbody").html('<tr><td colspan="5">No Records Found</td></tr>');

                            }

                        }
                    });
                    $.ajax({
                        url: "<?php echo base_url() ?>Master/get_mulkiya",
                        type: 'post',
                        dataType: "json",
                        data: {
                            vid: vid
                        },
                        success: function(data) {
                            $("#mulkiyatable tbody").empty();
                            if (data != '') {
                                for (var i = 0; i < data.length; i++) {
                                    if (data[i].is_active == '1')
                                        var rs = "<span class='badge badge-light-success fs-7 fw-bold'>Active</span>";
                                    else
                                        var rs = "<span class='badge badge-light-danger fs-7 fw-bold'>Inactive</span>";

                                    $("#mulkiyatable tbody").append('<tr><td>' + parseFloat(i + 1) + '</td><td>' + data[i].mulkiya_date + '</td><td>' + data[i].expiry_date + '</td><td>' + rs + '</td><td><a  onclick="open_mulki_exp_modal(' + data[i].mulkiya_id + ')"  title="Expense"><i class="fa-solid fa-dollar-sign" style="color:#009ef7"></i></a>&nbsp;<a  onclick="open_mulki_atts_modal(' + data[i].mulkiya_id + ')"  title="Attribute"><i class="fa fa-file-text" style="color:#009ef7"></i></a>&nbsp;<a  onclick="open_mulki_attach_modal(' + data[i].mulkiya_id + ')"  title="Attachment"><i class="fa fa-paperclip" style="color:#009ef7"></i></a>&nbsp;<a  onclick="open_mulki_nots_modal(' + data[i].mulkiya_id + ')" title="Notes"><i class="fa fa-sticky-note" style="color:#009ef7"></i></a>&nbsp;<a onclick="open_edit_modal_mulk(' + data[i].mulkiya_id + ')" title="Edit"   style="padding: 3px ;font-size: 14px;"><i class="fa fa-pencil" style="color:#009ef7"></i></a><a  onclick="delete_mulkiya(' + data[i].mulkiya_id + ')" title="Delete"><i class="fa fa-trash" style="color:#009ef7"></i></a></td></tr>');

                                }
                            } else {
                                $("#mulkiyatable tbody").html('<tr><td colspan="5">No Records Found</td></tr>');

                            }

                        }
                    });
                    $.ajax({
                        url: "<?php echo base_url() ?>Master/get_gps",
                        type: 'post',
                        dataType: "json",
                        data: {
                            vid: vid
                        },
                        success: function(data) {
                            $("#gpstable tbody").empty();
                            if (data != '') {
                                // $("#signcard_old").html("Renew SignCard");
                                // var i = 0;
                                for (var i = 0; i < data.length; i++) {
                                    if (data[i].is_active == '1')
                                        var rs = "<span class='badge badge-light-success fs-7 fw-bold'>Active</span>";
                                    else
                                        var rs = "<span class='badge badge-light-danger fs-7 fw-bold'>Inactive</span>";

                                    $("#gpstable tbody").append('<tr><td>' + parseFloat(i + 1) + '</td><td>' + data[i].installation_date + '</td><td>' + data[i].certificate_no + '</td><td>' + data[i].certificate_date + '</td><td>' + data[i].expiry_date + '</td><td>' + rs + '</td><td><a  onclick="open_gps_expense_modal(' + data[i].subscription_id + ')"  title="Expense"><i class="fa-solid fa-dollar-sign" style="color:#009ef7"></i></a>&nbsp;<a class=" btn_attribute_gps" data-id="' + data[i].subscription_id + '"  title="Attribute"><i class="fa fa-file-text" style="color:#009ef7"></i></a>&nbsp;<a  onclick="open_attach_modal_gps(' + data[i].subscription_id + ')"  title="Attachment"><i class="fa fa-paperclip" style="color:#009ef7"></i></a>&nbsp;<a  onclick="gps_notes(' + data[i].subscription_id + ')" title="Notes"><i class="fa fa-sticky-note" style="color:#009ef7"></i></a>&nbsp;<a onclick="open_edit_gps_modal(' + data[i].subscription_id + ')" title="Edit"   style="padding: 3px ;font-size: 14px;"><i class="fa fa-pencil" style="color:#009ef7"></i></a><a  onclick="delete_gps(' + data[i].subscription_id + ')" title="Delete"><i class="fa fa-trash" style="color:#009ef7"></i></a></td></tr>');

                                }
                            } else {
                                // $("#signcard_old").html("Add SignCard");
                                $("#gpstable tbody").html('<tr><td colspan="5">No Records Found</td></tr>');

                            }

                        }
                    });
                    $.ajax({
                        url: "<?php echo base_url() ?>Vehicle/get_insurancecompanys",
                        type: 'post',
                        data: {},
                        success: function(data) {
                            $("#insurance_company").empty();
                            var x = JSON.parse(data);
                            console.log(x);
                            if (x.length > 0) {
                                $("#insurance_company").append('<option value="">Select</option>');
                                for (var i = 0; i < x.length; i++) {
                                    $("#insurance_company").append("<option value='" + x[i].ins_comp_id + "'>" + x[i].ins_comp_name + "</option>");
                                }
                            }
                        }

                    });
                    var vid = '<?php echo $_GET['id']; ?>';
                    var rowMenu = [

                    ]
                    $.ajax({
                        url: "<?php echo base_url() ?>Vehicle/get_speedlimiter",
                        type: 'post',
                        dataType: "json",
                        data: {
                            vid: vid
                        },
                        success: function(data) {


                            $("#speedtable tbody").empty();
                            if (data != '') {
                                for (var i = 0; i < data.length; i++) {
                                    if (data[i].is_active == '1')
                                        var rs = "<span class='badge badge-light-success fs-7 fw-bold'>Active</span>";
                                    else
                                        var rs = "<span class='badge badge-light-danger fs-7 fw-bold'>Inactive</span>";

                                    $("#speedtable tbody").append('<tr><td>' + parseFloat(i + 1) + '</td><td>' + data[i].certificate_no + '</td><td>' + data[i].fitment_date + '</td><td>' + data[i].certificate_date + '</td><td>' + data[i].expiry_date + '</td><td>' + data[i].vendor + '</td><td>' + rs + '</td><td><a  onclick="open_speed_expense_modal(' + data[i].speed_limiter_id + ')"  title="Expense"><i class="fa-solid fa-dollar-sign" style="color:#009ef7"></i></a>&nbsp;<a  onclick="speedattributemodal(' + data[i].speed_limiter_id + ')"  title="Attribute"><i class="fa fa-file-text" style="color:#009ef7"></i></a>&nbsp;<a  onclick="open_speed_attach_modal(' + data[i].speed_limiter_id + ')"  title="Attachment"><i class="fa fa-paperclip" style="color:#009ef7"></i></a>&nbsp;<a  onclick="open_speednots_modal(' + data[i].speed_limiter_id + ')" title="Notes"><i class="fa fa-sticky-note" style="color:#009ef7"></i></a>&nbsp;<a onclick="open_edit_modal(' + data[i].speed_limiter_id + ')" title="Edit"   style="padding: 3px ;font-size: 14px;"><i class="fa fa-pencil" style="color:#009ef7"></i></a><a  onclick="delete_speedlimiter(' + data[i].speed_limiter_id + ')" title="Delete"><i class="fa fa-trash" style="color:#009ef7"></i></a></td></tr>');

                                }
                            } else {
                                $("#speedtable tbody").html('<tr><td colspan="5">No Records Found</td></tr>');

                            }
                        }
                    });
                    //aishu insurance
                    var rowMenu = [

                    ]
                    $.ajax({
                        url: "<?php echo base_url() ?>Vehicle/get_profileinsurance",
                        type: 'post',
                        dataType: "json",
                        data: {
                            vid: vid
                        },
                        success: function(data) {
                            console.log(data);
                            $("#insutable tbody").empty();
                            // var x=JSON.parse(data);
                            if (data.length > 0) {
                                for (var i = 0; i < data.length; i++) {
                                    if (data[i].is_active == '1')
                                        var rs = "<span class='badge badge-light-success fs-7 fw-bold'>Active</span>";
                                    else
                                        var rs = "<span class='badge badge-light-danger fs-7 fw-bold'>Inactive</span>";
                                    $("#insutable tbody").append('<tr><td>' + parseFloat(i + 1) + '</td><td>' + data[i].ins_comp_name + '</td><td>' + data[i].policy_no + '</td><td>' + data[i].policy_date + '</td><td>' + data[i].insurance_type + '</td><td>' + data[i].insured_sum + '</td><td>' + rs + '</td><td><a  onclick="open_insurance_expense_modal(' + data[i].insurance_id + ')"  title="Expense"   style="padding: 3px;font-size: 14px;"><i class="fa-solid fa-dollar-sign" style="color:#009ef7"></i></a>&nbsp;<a  onclick="attributemodal(' + data[i].insurance_id + ')"  title="Attribute"   style="padding: 3px;font-size: 14px;"><i class="fa fa-file-text" style="color:#009ef7"></i></a>&nbsp;<a  onclick="open_attach_modal(' + data[i].insurance_id + ')"  title="Attachment"  style="padding: 3px;font-size: 14px;"><i class="fa fa-paperclip" style="color:#009ef7"></i></a>&nbsp;<a  onclick="open_nots_modal(' + data[i].insurance_id + ')"  title="Notes"   style="padding: 3px;font-size: 14px;"><i class="fa fa-sticky-note" style="color:#009ef7"></i></a><a onclick="editpinsurance(' + data[i].insurance_id + ')" title="Edit"><i class="fa fa-pencil" style="color:#009ef7"></i></a><a  onclick="deletepinsurance(' + data[i].insurance_id + ')"  title="Delete"   style="padding: 3px;font-size: 14px;"><i class="fa fa-trash" style="color:#009ef7"></i></a></td></tr>');
                                }
                            } else {
                                // $("#signcard_old").html("Add SignCard");
                                $("#insutable tbody").html('<tr><td colspan="5">No Records Found</td></tr>');

                            }

                        }
                    });
                    $("#mulkiya_heading").html("Add Mulkiya");
                    $("#speed_heading").html("Add Speed Limiter");
                    $("#insurance_heading").html("Add Insurance");
                    $("#gps_heading").html("Add GPS");
                    var vid = $("#vid").val();
                    $.ajax({
                        url: "<?php echo base_url() ?>Master/get_vehicle_byid",
                        type: 'post',
                        dataType: "json",
                        data: {
                            vid: vid
                        },

                        success: function(data) {
                            if (data != "0") {

                                console.log(data);
                                var logo = '<img src="<?php echo base_url() ?>manufacturer/' + data.manuf_logo + '" alt="image" />';
                                $("#plate_prefix").html(data.plate_prefix);
                                $("#plate_type").html(data.plate_type);
                                $("#manu").html(data.man_name);
                                $("#emirate").html(data.emirate);
                                $("#reg_no").html(data.reg_no);
                                $("#vehicle_model_name").html(data.v_model_name);
                                $("#manuflogo").append(logo);

                                $("#vehicle_model_year").html(data.reg_year);
                                $("#chasis_no").html(data.chasis_no);
                                $("#fuel_type").html(data.fuel_type);
                                $("#file_no").html(data.file_no);
                                $("#engine_no").html(data.engine_no);
                                $("#color").html(data.color);
                                $("#transmission").html(data.transmission);
                                $("#reg_expiry").html(data.reg_expiry);
                                $("#ins_expiry").html(data.ins_expiry);
                                if (data.sold_flag == 0) {
                                    $("#veh_needsold").show();
                                }

                                if (data.vehicle_type == "0") {
                                    $("#v_type").html("Own Vehicle");
                                } else if (data.vehicle_type == "1") {
                                    $("#v_type").html("Investor Vehicle");
                                } else if (data.vehicle_type == "2") {
                                    $("#v_type").html("Outside Vehicle");
                                }
                                $("#status").empty();
                                if (data.order_id == "0") {
                                    $("#status").append('<span class="badge badge-success">Available</span>');
                                } else {
                                    $("#status").append('<span class="badge badge-danger">' + data.customer_name + '(' + data.order_type + ')</span>');
                                }
                            }
                        }
                    });
                }

                function edit_vehicle() {
                    $("#detail_div").hide();
                    $("#edit_div").show();
                    var vid = $("#vid").val();
                    $.ajax({
                        url: "<?php echo base_url() ?>Master/get_vehicle_byid",
                        type: 'post',
                        dataType: "json",
                        data: {
                            vid: vid
                        },

                        success: function(data) {
                            // $("#vehicle_heading").html("Edit Vehicle");
                            if (data != "0") {
                                console.log(data);
                                $("#mainidE").val(data.vid);
                                $("#fridE").html(data.firm_data);
                                $("#file_noE").val(data.file_no);
                                $("#vehicle_typeE").html(data.vehicletype);
                                if (data.vehicle_type > 0) {
                                    $("#suplrdivE").show();
                                }
                                $("#suplrE").html(data.supplier_data);
                                $("#emirateE").html(data.emirates);
                                $("#reg_yearE").html(data.regyear);
                                $("#reg_noE").val(data.reg_no);
                                $("#plate_typeE").html(data.plate_type_s);
                                $("#chasis_noE").val(data.chasis_no);
                                $("#engine_noE").val(data.engine_no);
                                $("#manufacturerE").html(data.manufacturer);
                                $("#modelE").html(data.v_modelname);
                                $("#colorE").val(data.color);
                                $("#plate_prefixE").val(data.plate_prefix);
                                $("#mulki_expiryE").val(data.reg_expiry);
                                $("#ins_expiryE").val(data.ins_expiry);
                            }
                        }

                    });
                    //   }

                }
                $('#submit').click(function() {
                    $vid = $("#vid").val();
                    $frid = $("#fridE").val();
                    $file_no = $("#file_noE").val();
                    $vehicle_type = $("#vehicle_typeE").val();
                    $model = $("#modelE").val();
                    $emirate = $("#emirateE").val();
                    $plate_prefix = $("#plate_prefixE").val();
                    $reg_no = $("#reg_noE").val();
                    $plate_type = $("#plate_typeE").val();

                    $reg_year = $("#reg_yearE").val();

                    $chasis_no = $("#chasis_noE").val();
                    $engine_no = $("#engine_noE").val();
                    $engine_type = $("#engine_typeE").val();
                    $manufacturer = $("#reg_yearE").val();
                    $color = $("#colorE").val();
                    $suplr = $("#suplrE").val();
                    $mulki_expiry = $("#mulki_expiryE").val();
                    $ins_expiry = $("#ins_expiryE").val();
                    if ($chasis_no != "" && $model != "") {
                        $.ajax({
                            url: "<?php echo base_url() ?>Master/update_vehicle",
                            method: "POST",
                            data: {
                                vid: $vid,
                                frid: $frid,
                                file_no: $file_no,
                                vehicle_type: $vehicle_type,
                                reg_no: $reg_no,
                                reg_year: $reg_year,
                                emirate: $emirate,
                                chasis_no: $chasis_no,
                                engine_no: $engine_no,
                                manufacturer: $manufacturer,
                                model: $model,
                                color: $color,
                                suplr: $suplr,
                                plate_prefix: $plate_prefix,
                                plate_type: $plate_type,
                                mulki_expiry: $mulki_expiry,
                                ins_expiry: $ins_expiry
                            },
                            cache: false,
                            beforeSend: function() {},
                            success: function(data) {
                                if (data = true) {
                                    // 			loaddetails();
                                    $("#edit_div").hide();
                                    $("#detail_div").show();

                                } else
                                    alert('Some error occured !');

                            },
                        });
                    } else {
                        alert('Please fill chasis number field and Model !');
                    }
                });

                function getclear() {
                    if (confirm("Do you Sure You want to clear all?")) {
                        $("#edit_div").hide();
                        $("#detail_div").show();
                    }
                }

                function getsupplier() {
                    var vtype = $("#vehicle_type").val();
                    if (vtype > 0) {
                        $("#suplrdiv").show();
                    } else {
                        $("#suplrdiv").hide();
                    }

                }
                $('#insert_speedlimiter').click(function(e) {
                    e.preventDefault();
                    var form_data = new FormData();
                    var id = $("#speed_id").val();
                    if ($('#is_paid').is(':checked')) {
                        if (id == "") {
                            var speed_certificateno = $("#speed_certificateno").val();
                            var speed_rdpsno = $("#speed_rdpsno").val();
                            var speed_setspeed = $("#speed_setspeed").val();
                            var speed_fitmentdate = $("#speed_fitmentdate").val();
                            var speed_certificatedate = $("#speed_certificatedate").val();
                            var speed_expirydate = $("#speed_expirydate").val();
                            var speed_vendor = $("#speed_vendor").val();
                            var speed_control = $("#speed_control").val();
                            var speed_device = $("#speed_device").val();
                            var speedlimit_attachment = $("#speedlimit_attachment").prop("files")[0];
                            var vid = $("#vid").val();
                            var amount = $('#amountm').val();
                            var tax_per = $('#tax_perm').val();
                            var tax_amt = $('#tax_amtm').val();
                            var total = $('#totalm').val();
                            var payment_mode = $('#payment_modem').val();
                            var payment_ref = $('#payment_refm').val();
                            var image_file = $('#image_fileexpm').prop("files")[0];
                            if (speed_certificateno != "" && speed_setspeed != "" && speed_fitmentdate != "" && speed_certificatedate != "" && speed_expirydate != "" && amount != "" && tax_per != "" && tax_amt != "" && total != "" && payment_mode != "" && payment_ref != "" && image_file != "") {
                                form_data.append("speed_certificateno", speed_certificateno);
                                form_data.append("speed_rdpsno", speed_rdpsno);
                                form_data.append("speed_setspeed", speed_setspeed);
                                form_data.append("speed_fitmentdate", speed_fitmentdate);
                                form_data.append("speed_certificatedate", speed_certificatedate);
                                form_data.append("speed_expirydate", speed_expirydate);
                                form_data.append("speed_vendor", speed_vendor);
                                form_data.append("speed_device", speed_device);
                                form_data.append("speed_control", speed_control);
                                form_data.append("speedlimit_attachment", speedlimit_attachment);
                                form_data.append("vid", vid);
                                form_data.append("amount", amount);
                                form_data.append("tax_per", tax_per);
                                form_data.append("tax_amt", tax_amt);
                                form_data.append("total", total);
                                form_data.append("payment_mode", payment_mode);
                                form_data.append("payment_ref", payment_ref);
                                form_data.append("image_file", image_file);
                                $.ajax({
                                    url: "<?php echo base_url() ?>Vehicle/insert_speedlimiter",
                                    type: 'POST',
                                    data: form_data,
                                    dataType: "json",
                                    processData: false,
                                    contentType: false,
                                    beforeSend: function() {},
                                    success: function(data) {
                                        // var dataResult = JSON.parse(data);
                                        if (data == "1") {

                                            loaddetails();
                                            $('#speedlimit_attachment').val();
                                            $("#speed_certificateno").val('');
                                            $("#speed_rdpsno").val('');
                                            $("#speed_setspeed").val('');
                                            $("#speed_fitmentdate").val('');
                                            $("#speed_certificatedate").val('');
                                            $("#speed_expirydate").val('');
                                            $("#speed_vendor").val('');
                                            $("#speed_device").val('');
                                            $("#speed_control").val('');
                                            $("#amountm").val('');
                                            $("#speedlimit_attachment").val('');
                                            $("#tax_amtm").val('');
                                            $("#totalm").val('');
                                            $("#payment_modem").val('');
                                            $("#payment_refm").val('');
                                            $("#image_fileexpm").val('');
                                            $('#kt_modal_add_speedlimiter').modal('toggle');
                                        } else {
                                            alert("Insertion Failed");
                                        }

                                    }
                                });
                            } else {
                                alert('Please fill all required field !');
                            }
                        } else {

                            var speed_certificateno = $("#speed_certificateno").val();
                            var speed_rdpsno = $("#speed_rdpsno").val();
                            var speed_setspeed = $("#speed_setspeed").val();
                            var speed_fitmentdate = $("#speed_fitmentdate").val();
                            var speed_certificatedate = $("#speed_certificatedate").val();
                            var speed_expirydate = $("#speed_expirydate").val();
                            var speed_vendor = $("#speed_vendor").val();
                            var id = $("#speed_id").val();
                            var speed_control = $("#speed_control").val();
                            var speed_device = $("#speed_device").val();
                            $.ajax({
                                method: "post",
                                url: '<?php echo base_url() ?>Vehicle/update_speedlimiter',
                                data: {
                                    speed_certificateno: speed_certificateno,
                                    speed_rdpsno: speed_rdpsno,
                                    speed_setspeed: speed_setspeed,
                                    speed_fitmentdate: speed_fitmentdate,
                                    speed_certificatedate: speed_certificatedate,
                                    speed_expirydate: speed_expirydate,
                                    speed_vendor: speed_vendor,
                                    id: id,
                                    speed_control: speed_control,
                                    speed_device: speed_device
                                },
                                beforeSend: function() {},
                                success: function(d) {
                                    $("#speed_certificateno").val('');
                                    $("#speed_rdpsno").val('');
                                    $("#speed_setspeed").val('');
                                    $("#speed_fitmentdate").val('');
                                    $("#speed_certificatedate").val('');
                                    $("#speed_expirydate").val('');
                                    $("#speed_vendor").val('');
                                    $("#speed_id").val('');
                                    $("#speed_device").val('');
                                    $("#speed_control").val('');
                                    $("#is_paid_div").show();
                                    $('#kt_modal_add_speedlimiter').modal('toggle');
                                    loaddetails();
                                },
                            });
                        }
                    } else {
                        if (id == "") {
                            var form_data = new FormData();
                            var speed_certificateno = $("#speed_certificateno").val();
                            var speed_rdpsno = $("#speed_rdpsno").val();
                            var speed_setspeed = $("#speed_setspeed").val();
                            var speed_fitmentdate = $("#speed_fitmentdate").val();
                            var speed_certificatedate = $("#speed_certificatedate").val();
                            var speed_expirydate = $("#speed_expirydate").val();
                            var speed_vendor = $("#speed_vendor").val();
                            var vid = $("#vid").val();
                            var speed_control = $("#speed_control").val();
                            var speed_device = $("#speed_device").val();
                            var speedlimit_attachment = $("#speedlimit_attachment").prop("files")[0];


                            if (speed_certificateno != "" && speed_setspeed != "" && speed_fitmentdate != "" && speed_certificatedate != "" && speed_expirydate != "") {
                                form_data.append("speed_certificateno", speed_certificateno);
                                form_data.append("speed_rdpsno", speed_rdpsno);
                                form_data.append("speed_setspeed", speed_setspeed);
                                form_data.append("speed_fitmentdate", speed_fitmentdate);
                                form_data.append("speed_certificatedate", speed_certificatedate);
                                form_data.append("speed_expirydate", speed_expirydate);
                                form_data.append("speed_vendor", speed_vendor);
                                form_data.append("vid", vid);
                                form_data.append("speedlimit_attachment", speedlimit_attachment);
                                form_data.append("speed_device", speed_device);
                                form_data.append("speed_control", speed_control);

                                $.ajax({
                                    url: "<?php echo base_url() ?>Vehicle/insert_speedlimiter",
                                    type: 'POST',
                                    data: form_data,
                                    dataType: "json",
                                    processData: false,
                                    contentType: false,
                                    beforeSend: function() {},
                                    success: function(data) {
                                        // var dataResult = JSON.parse(data);
                                        if (data == "1") {
                                            loaddetails();
                                            $("#speed_certificateno").val('');
                                            $("#speed_rdpsno").val('');
                                            $("#speed_setspeed").val('');
                                            $("#speed_fitmentdate").val('');
                                            $("#speed_certificatedate").val('');
                                            $("#speed_expirydate").val('');
                                            $("#speed_vendor").val('');
                                            $('#speedlimit_attachment').val();
                                            $("#speed_device").val('');
                                            $("#speed_control").val('');
                                            $('#kt_modal_add_speedlimiter').modal('toggle');
                                        } else {
                                            alert("Insertion Failed");
                                        }

                                    }
                                });
                            } else {
                                alert('Please fill all required field !');
                            }
                        } else {
                            var speed_certificateno = $("#speed_certificateno").val();
                            var speed_rdpsno = $("#speed_rdpsno").val();
                            var speed_setspeed = $("#speed_setspeed").val();
                            var speed_fitmentdate = $("#speed_fitmentdate").val();
                            var speed_certificatedate = $("#speed_certificatedate").val();
                            var speed_expirydate = $("#speed_expirydate").val();
                            var speed_vendor = $("#speed_vendor").val();
                            var id = $("#speed_id").val();
                            var speed_control = $("#speed_control").val();
                            var speed_device = $("#speed_device").val();
                            $.ajax({
                                method: "post",
                                url: '<?php echo base_url() ?>Vehicle/update_speedlimiter',
                                data: {
                                    speed_certificateno: speed_certificateno,
                                    speed_rdpsno: speed_rdpsno,
                                    speed_setspeed: speed_setspeed,
                                    speed_fitmentdate: speed_fitmentdate,
                                    speed_certificatedate: speed_certificatedate,
                                    speed_expirydate: speed_expirydate,
                                    speed_vendor: speed_vendor,
                                    id: id,
                                    speed_control: speed_control,
                                    speed_device: speed_device
                                },
                                beforeSend: function() {},
                                success: function(d) {
                                    $("#speed_certificateno").val('');
                                    $("#speed_rdpsno").val('');
                                    $("#speed_setspeed").val('');
                                    $("#speed_fitmentdate").val('');
                                    $("#speed_certificatedate").val('');
                                    $("#speed_expirydate").val('');
                                    $("#speed_vendor").val('');
                                    $("#speed_id").val('');
                                    $("#speed_device").val('');
                                    $("#speed_control").val('');
                                    $("#is_paid_div").show();
                                    $('#kt_modal_add_speedlimiter').modal('toggle');
                                    loaddetails();
                                },
                            });
                        }
                    }
                });

                function open_edit_modal(id) {
                    $("#speed_heading").html("Edit Speed Limiter");
                    $("#spee_att").hide();
                    $("#is_paid_div").hide();
                    // $('#expense').hide();
                    $.ajax({
                        url: "<?php echo base_url() ?>Vehicle/get_speed_byid",
                        type: 'post',
                        dataType: "json",
                        data: {
                            id: id
                        },
                        success: function(data) {

                            $("#speed_certificateno").val(data.certificate_no);
                            $("#speed_rdpsno").val(data.rdps_no);
                            $("#speed_setspeed").val(data.set_speed);
                            $("#speed_fitmentdate").val(data.fitment_date);
                            $("#speed_certificatedate").val(data.certificate_date);
                            $("#speed_expirydate").val(data.expiry_date);
                            $("#speed_vendor").val(data.vendor);
                            $("#speed_device").val(data.device_type);
                            $("#speed_control").val(data.control_type);
                            $("#speed_id").val(id);
                            $('#kt_modal_add_speedlimiter').modal('toggle');
                        }
                    });
                }

                function delete_speedlimiter(id) {
                    if (confirm("Do you want to Delete this Speed Limiter?")) {
                        $.ajax({
                            method: "post",
                            url: '<?php echo base_url() ?>Vehicle/delete_speedlimiter',
                            data: {
                                "id": id
                            },
                            dataType: "json",
                            success: function(data) {
                                if (data == "1")
                                    loaddetails();
                            }
                        });
                    }
                }
            </script>
            <script type="text/javascript">
                function setsold() {
                    $('#kt_modal_sold').modal('toggle');
                }
                $(document).ready(function() {
                    $('#is_paid').prop('checked', false);
                    // $('#certificate_issued').prop('checked',false);
                    // $('#cert_details').hide();
                    // 		});
                    // $('#certificate_issued').click(function() {

                    // // Get the checkbox
                    // 	if( $(this).is(':checked'))
                    //   {

                    // 	$('#cert_details').show();
                    // 	} else {
                    // 	  $('#cert_details').hide();
                    // 	}
                });
                $('#is_paid_speed').click(function() {

                    // Get the checkbox
                    if ($(this).is(':checked')) {

                        $('#expense_speed').show();
                    } else {
                        $('#expense_speed').hide();
                    }
                });

                function getclear_speed() {
                    $("#speed_certificateno").val('');
                    $("#speed_rdpsno").val('');
                    $("#speed_setspeed").val('');
                    $("#speed_fitmentdate").val('');
                    $("#speed_certificatedate").val('');
                    $("#speed_expirydate").val('');
                    $("#speed_vendor").val('');
                    $("#speed_id").val('');
                    $("#amountm").val('');

                    $("#tax_amtm").val('');
                    $("#totalm").val('');
                    $("#payment_modem").val('');
                    $("#payment_refm").val('');
                    $("#image_fileexpm").val('');
                }

                function getAmount1() {
                    var amount = $("#amountm").val();
                    var tax = $("#tax_perm").val();
                    var taxam = (amount * tax) / 100;
                    var total = 0;
                    var total = parseFloat(amount) + parseFloat(taxam);
                    $("#tax_amtm").val(taxam);
                    $("#totalm").val(parseFloat(total));
                }
            </script>

            <script>
                $('#is_paid_insurance').click(function() {

                    // Get the checkbox
                    if ($(this).is(':checked')) {

                        $('#expense_insurance').show();
                    } else {
                        $('#expense_insurance').hide();
                    }
                });
                $('#submitinsur').click(function(e) {
                    e.preventDefault();
                    var form_data = new FormData();
                    //var fr_id 						=$("#frid_i").val();
                    var id = $("#insurance_id").val();
                    var vid = $("#vid").val();
                    var ins_comp_id = $("#insurance_company").val();
                    var ins_comp_name = $("#insurance_company option:selected").text();
                    var policy_no = $("#policy_no").val();
                    var policy_date = $("#policy_date").val();
                    var policy_attachment = $("#policy_attachment").prop("files")[0];
                    var insurance_type = $("#insurance_type").val();
                    var insured_sum = $("#insured_sum").val();
                    var start_date = $("#start_date").val();
                    var expiry_date = $("#expiry_datei").val();
                    var invoice_date = $("#invoice_date").val();
                    var invoice_no = $("#invoice_no").val();
                    var invoice_attachment = $("#invoice_attachment").prop("files")[0];
                    var premium_amt = $("#premium_amt").val();
                    var premium_vat = $("#premium_vat").val();
                    var invoice_amt = $("#invoice_amt").val();
                    var attachment = $("#attachment").prop("files")[0];
                    var amount = $('#amounti').val();
                    var tax_per = $('#tax_peri').val();
                    var tax_amt = $('#tax_amti').val();
                    var total = $('#totali').val();
                    var payment_mode = $('#payment_modei').val();
                    var payment_ref = $('#payment_refi').val();
                    var image_file = $('#image_fileexpi').prop("files")[0];
                    //alert(ins_comp_id);
                    form_data.append("id", id);
                    form_data.append("vid", vid);
                    form_data.append("ins_comp_id", ins_comp_id);
                    form_data.append("ins_comp_name", ins_comp_name);
                    form_data.append("policy_no", policy_no);
                    form_data.append("policy_date", policy_date);
                    form_data.append("policy_attachment", policy_attachment);
                    form_data.append("insurance_type", insurance_type);
                    form_data.append("insured_sum", insured_sum);
                    form_data.append("invoice_no", invoice_no);
                    form_data.append("start_date", start_date);
                    form_data.append("expiry_date", expiry_date);
                    form_data.append("invoice_date", invoice_date);
                    form_data.append("invoice_attachment", invoice_attachment);
                    form_data.append("premium_amt", premium_amt);
                    form_data.append("premium_vat", premium_vat);
                    form_data.append("invoice_amt", invoice_amt);
                    form_data.append("attachment", attachment);
                    form_data.append("amount", amount);
                    form_data.append("tax_per", tax_per);
                    form_data.append("tax_amt", tax_amt);
                    form_data.append("total", total);
                    form_data.append("payment_mode", payment_mode);
                    form_data.append("payment_ref", payment_ref);
                    form_data.append("image_file", image_file);
                    if (vid != "" && ins_comp_id != "") {
                        $.ajax({
                            url: "<?php echo base_url() ?>Vehicle/insert_vehicleprofile_insurance",
                            type: 'POST',
                            data: form_data,
                            dataType: "json",
                            processData: false,
                            contentType: false,
                            beforeSend: function() {},
                            success: function(data) {
                                if (data = true) {
                                    $("#insurance_id").val("");
                                    $("#insur_vehicleid").val("");
                                    $("#insurance_company").val("");
                                    $("#policy_no").val("");
                                    $("#policy_date").val('');
                                    $("#policy_attachment").val("");
                                    $("#insurance_type").val("");
                                    $("#insured_sum").val("");
                                    $("#start_date").val("");
                                    $("#expiry_date").val("");
                                    $("#invoice_date").val("");
                                    $("#invoice_no").val("");
                                    $("#invoice_attachment").val("");
                                    $("#premium_amt").val("");
                                    $("#premium_vat").val("");
                                    $("#invoice_amt").val("");
                                    $("#expiry_datei").val("");
                                    $("#attachment").val("");
                                    $('#is_paid_insurance').prop('checked', false);
                                    $("#amounti").val('');
                                    $("#expense_insurance").hide();
                                    $("#tax_amti").val('');
                                    $("#totali").val('');
                                    $("#payment_modei").val('');
                                    $("#payment_refi").val('');
                                    $("#image_fileexpi").val('');
                                    $('#kt_modal_add_insurance').modal('toggle');
                                    loaddetails();
                                }
                            },
                        });
                    } else {
                        alert("Please Fill Required Fields");
                    }
                });

                function getclear_insurance() {
                    $("#insurance_id").val("");
                    $("#insurance_company").val();
                    $("#policy_no").val();
                    $("#policy_date").val();
                    $("#policy_attachment").val("");
                    $("#insurance_type").empty();
                    $("#insurance_type").append('<option value="">Select</option>');

                    $("#insurance_type").append('<option value="Full Insurance">Full Insurance</option>');
                    $("#insurance_type").append('<option value="Third Party">Third Party</option>');
                    // 	$("#insurance_type").val("");
                    $("#insured_sum").val("");
                    $("#start_date").val("");
                    $("#expiry_date").val("");
                    $("#invoice_date").val("");
                    $("#invoice_no").val("");
                    $("#invoice_attachment").val("");
                    $("#premium_amt").val("");
                    $("#premium_vat").val("");
                    $("#invoice_amt").val("");
                }

                function deletepinsurance(id) {
                    if (confirm("Do you want to Delete this Insurance?")) {
                        $.ajax({
                            method: "post",
                            url: '<?php echo base_url() ?>Vehicle/delete_pinsurance',
                            data: {
                                "id": id
                            },
                            dataType: "json",
                            success: function(data) {
                                if (data == "1")
                                    loaddetails();
                            }
                        });
                    }
                }

                function editpinsurance(vid) {
                    $("#attachmentin").hide();
                    $("#insurance_heading").html("Edit Insurance");
                    $("#insurance_id").val(vid);
                    $.ajax({
                        url: "<?php echo base_url() ?>Vehicle/get_profileinsuranceedit",
                        type: 'post',
                        dataType: "json",
                        data: {
                            vid: vid
                        },
                        beforeSend: function() {},
                        success: function(data) {

                            console.log(data);
                            if (data != 0) {
                                $("#insurance_company").html(data.ins);
                                $("#insured_sum").val(data.insured_sum);
                                $("#policy_no").val(data.policy_no);
                                $("#policy_date").val(data.policy_date);
                                //	$("#policy_attachment").val(data.policy_attachment);
                                $("#insurance_type").html(data.insutype);
                                $("#start_date").val(data.start_date);
                                $("#expiry_date").val(data.expiry_date);
                                $("#invoice_date").val(data.invoice_date);
                                $("#invoice_no").val(data.invoice_no);
                                //	$("#invoice_attachment").val(data.invoice_no);
                                $("#premium_amt").val(data.premium_amt);
                                $("#premium_vat").val(data.premium_vat);
                                $("#invoice_amt").val(data.invoice_amt);
                                $('#kt_modal_add_insurance').modal('toggle');
                            }


                        }
                    });
                }

                function getAmounti() {
                    var amount = $("#amounti").val();
                    var tax = $("#tax_peri").val();
                    var taxam = (amount * tax) / 100;
                    var total = 0;
                    var total = parseFloat(amount) + parseFloat(taxam);
                    $("#tax_amti").val(taxam);
                    $("#totali").val(parseFloat(total));
                }
            </script>
            <script type="text/javascript">
                $('#is_paid_mulk').click(function() {

                    // Get the checkbox
                    if ($(this).is(':checked')) {

                        $('#expense_mulk').show();
                    } else {
                        $('#expense_mulk').hide();
                    }
                });
                $('#insertdocument').click(function(e) {
                    e.preventDefault();
                    var form_data = new FormData();
                    var documentid = $("#documentid").val();
                    var documentname = $("#document_name").val();
                    var document_attach = $('#document_attach').prop("files")[0];
                    var vid = $("#vid").val();
                    //	alert(documentid);
                    if (documentname != '') {
                        form_data.append("documentname", documentname);
                        form_data.append("documentid", documentid);
                        form_data.append("document_attach", document_attach);
                        form_data.append("vid", vid);
                        if (documentid == '') {
                            $.ajax({
                                url: "<?php echo base_url() ?>Master/save_vehicle_document",
                                type: 'POST',
                                data: form_data,
                                dataType: "json",
                                processData: false,
                                contentType: false,
                                beforeSend: function() {},
                                success: function(data) {

                                    //alert(data);
                                    // var dataResult = JSON.parse(data);
                                    if (data == "true") {
                                        $("#document_name").val('');
                                        $("#document_attach").val('');
                                        $("#documentid").val('');
                                        $('#kt_modal_add_document').modal('toggle');
                                        loaddetails();

                                    } else {
                                        alert("Document Insertion Failed");
                                    }

                                }
                            });
                        } else {
                            $.ajax({
                                method: "post",
                                url: '<?php echo base_url() ?>Master/update_vehicle_document',
                                type: 'POST',
                                data: form_data,
                                dataType: "json",
                                processData: false,
                                contentType: false,
                                success: function(data) {
                                    //alert("hii");
                                    if (data != "") {
                                        $("#document_name").val('');
                                        $("#document_attach").val('');
                                        $("#documentid").val('');
                                        $('#kt_modal_add_document').modal('toggle');
                                        loaddetails();

                                    } else {
                                        alert("Document Updation Failed");
                                    }

                                }
                            });
                        }
                    } else {
                        alert("Document Name Required");
                    }

                });
                $('#insertmulkiya').click(function(e) {
                    e.preventDefault();

                    // alert(vid);
                    if ($('#is_paid_mulk').is(':checked')) {
                        var form_data = new FormData();
                        var mulkiyaid = $("#mulkiyaid").val();
                        var mulkdate = $("#mulkiyadate").val();
                        // 	 var tcnomulk 			= $("#tcnumm").val();
                        var expirymulk = $("#expirymul").val();
                        var mulkiya_attach = $('#mulkiya_attach').prop("files")[0];
                        var vid = $("#vid").val();
                        var amount = $('#amountmu').val();
                        var tax_per = $('#tax_permu').val();
                        var tax_amt = $('#tax_amtmu').val();
                        var total = $('#totalmu').val();
                        var payment_mode = $('#payment_modemu').val();
                        var payment_ref = $('#payment_refmu').val();
                        var image_file = $('#image_fileexpmu').prop("files")[0];

                        if (mulkdate != "" && expirymulk != "" && amount != "" && tax_per != "" && tax_amt != "" && total != "" && payment_mode != "" && payment_ref != "" && image_file != "") {
                            if (mulkiyaid == '') {
                                form_data.append("mulkdate", mulkdate);
                                //form_data.append("tcnomulk", tcnomulk);
                                form_data.append("expirymulk", expirymulk);
                                form_data.append("vid", vid);
                                form_data.append("amount", amount);
                                form_data.append("tax_per", tax_per);
                                form_data.append("tax_amt", tax_amt);
                                form_data.append("total", total);
                                form_data.append("payment_mode", payment_mode);
                                form_data.append("payment_ref", payment_ref);
                                form_data.append("image_file", image_file);
                                form_data.append("mulkiya_attach", mulkiya_attach);

                                $.ajax({
                                    url: "<?php echo base_url() ?>Master/save_mulkiya",
                                    type: 'POST',
                                    data: form_data,
                                    dataType: "json",
                                    processData: false,
                                    contentType: false,
                                    beforeSend: function() {},
                                    success: function(data) {
                                        // var dataResult = JSON.parse(data);
                                        if (data == "1") {
                                            $("#mulkiyadate").val('');
                                            //  $("#tcnumm").val('');
                                            $("#expirymul").val('');
                                            $("#mulkiyaid").val('');
                                            $("#mulkiya_attach").val('');
                                            $('#is_paid_mulk').prop('checked', false);
                                            $("#amountmu").val('');
                                            $("#expense_mulk").hide();
                                            $("#tax_amtmu").val('');
                                            $("#totalmu").val('');
                                            $("#payment_modemu").val('');
                                            $("#payment_refmu").val('');
                                            $("#image_fileexpmu").val('');
                                            loaddetails();

                                        } else {
                                            alert("Mulkiya Insertion Failed");
                                        }

                                    }
                                });
                            } else {
                                form_data.append("mulkiya_attach", mulkiya_attach);
                                form_data.append("mulkdate", mulkdate);
                                //form_data.append("tcnomulk", tcnomulk);
                                form_data.append("expirymulk", expirymulk);
                                form_data.append("vid", vid);
                                form_data.append("mulkiyaid", mulkiyaid);
                                $.ajax({
                                    method: "post",
                                    url: '<?php echo base_url() ?>Master/update_mulkiya',
                                    type: 'POST',
                                    data: form_data,
                                    dataType: "json",
                                    processData: false,
                                    contentType: false,
                                    success: function(data) {
                                        // var dataResult = JSON.parse(data);
                                        if (data == "1") {
                                            $("#attachmentmulkiya").show();
                                            $("#mulkiyadate").val("");
                                            $("#mulkiyaid").val('');
                                            // 			$("#tcnumm").val("");
                                            $("#expirymul").val("");
                                            $("#mulkiya_attach").val("");

                                            loaddetails();

                                        } else {
                                            alert("Mulkiya Updation Failed");
                                        }

                                    }
                                });
                            }
                        } else {
                            alert('Please fill all required field !');
                        }
                    } else {
                        var form_data = new FormData();
                        var mulkdate = $("#mulkiyadate").val();
                        // 	 var tcnomulk 			= $("#tcnumm").val();
                        var expirymulk = $("#expirymul").val();
                        var vid = $("#vid").val();
                        var mulkiya_attach = $('#mulkiya_attach').prop("files")[0];
                        var mulkiyaid = $("#mulkiyaid").val();

                        if (mulkdate != "" && expirymulk != "") {
                            if (mulkiyaid == '') {
                                form_data.append("mulkiya_attach", mulkiya_attach);
                                form_data.append("mulkdate", mulkdate);
                                //form_data.append("tcnomulk", tcnomulk);
                                form_data.append("expirymulk", expirymulk);
                                form_data.append("vid", vid);


                                $.ajax({
                                    url: "<?php echo base_url() ?>Master/save_mulkiya",
                                    type: 'POST',
                                    data: form_data,
                                    dataType: "json",
                                    processData: false,
                                    contentType: false,
                                    beforeSend: function() {},
                                    success: function(data) {
                                        // var dataResult = JSON.parse(data);
                                        if (data == "1") {
                                            $("#mulkiyadate").val('');
                                            //  $("#tcnumm").val('');
                                            $("#expirymul").val('');
                                            $("#mulkiyaid").val('');
                                            $('#is_paid_mulk').prop('checked', false);
                                            $("#amountmu").val('');
                                            $("#expense_mulk").hide();
                                            $("#tax_amtmu").val('');
                                            $("#totalmu").val('');
                                            $("#payment_modemu").val('');
                                            $("#payment_refmu").val('');
                                            $("#image_fileexpmu").val('');
                                            loaddetails();



                                        } else {
                                            alert("Mulkiya Insertion Failed");
                                        }

                                    }
                                });
                            } else {
                                form_data.append("mulkiya_attach", mulkiya_attach);
                                form_data.append("mulkdate", mulkdate);
                                //form_data.append("tcnomulk", tcnomulk);
                                form_data.append("expirymulk", expirymulk);
                                form_data.append("vid", vid);
                                form_data.append("mulkiyaid", mulkiyaid);
                                $.ajax({
                                    method: "post",
                                    url: '<?php echo base_url() ?>Master/update_mulkiya',
                                    type: 'POST',
                                    data: form_data,
                                    dataType: "json",
                                    processData: false,
                                    contentType: false,
                                    success: function(data) {
                                        // var dataResult = JSON.parse(data);
                                        if (data == "1") {
                                            $("#mulkiyaid").val('');
                                            $("#mulkiyadate").val("");
                                            // 			$("#tcnumm").val("");
                                            $("#expirymul").val("");
                                            $("#mulkiya_attach").val("");
                                            $('#kt_modal_add_mulkiya').modal('toggle');
                                            loaddetails();

                                        } else {
                                            alert("Mulkiya Updation Failed");
                                        }

                                    }
                                });
                            }
                        } else {
                            alert('Please fill all required field !');
                        }
                    }

                });

                function open_edit_modal_mulk(id) {
                    $("#mulkiya_heading").html("Edit Mulkiya");
                    $("#attachmentmulkiya").hide();

                    $.ajax({
                        url: "<?php echo base_url() ?>Master/get_mulkiya_byid",
                        type: 'post',
                        dataType: "json",
                        data: {
                            id: id
                        },
                        success: function(data) {

                            $("#mulkiyadate").val(data.mulkiya_date);
                            // 			$("#tcnumm").val(data.tc_number);
                            $("#expirymul").val(data.expiry_date);
                            $("#mulkiyaid").val(id);
                            $('#kt_modal_add_mulkiya').modal('toggle');

                        }
                    });
                }

                function getclearmulk() {
                    if (confirm("Do you Sure You want to clear all?")) {
                        $("#mulkiyaid").val('');
                        $("#mulkiyadate").val('');
                        //  $("#tcnumm").val('');
                        $("#expirymul").val('');
                        $("#mulkiyaid").val('');
                        $('#is_paid_mulk').prop('checked', false);
                        $("#amountmu").val('');
                        $("#expense_mulk").hide();
                        $("#tax_amtmu").val('');
                        $("#totalmu").val('');
                        $("#payment_modemu").val('');
                        $("#payment_refmu").val('');
                        $("#image_fileexpmu").val('');
                    }
                }

                function getAmountm() {
                    var amount = $("#amountmu").val();
                    var tax = $("#tax_permu").val();
                    var taxam = (amount * tax) / 100;
                    var total = 0;
                    var total = parseFloat(amount) + parseFloat(taxam);
                    $("#tax_amtmu").val(taxam);
                    $("#totalmu").val(parseFloat(total));
                }
            </script>
            <script type="text/javascript">
                //expense
                function open_mulki_exp_modal(id) {
                    $("#mulkiyaidexp").val(id);


                    $.ajax({
                        url: "<?php echo base_url() ?>Master/get_mulkiya_expense",
                        type: 'post',
                        dataType: "json",
                        data: {
                            id: id
                        },

                        success: function(data) {
                            console.log(data);
                            if (data == "") {

                                $('#amount').val("");
                                //$('#tax_per').val("");
                                $('#tax_amt').val("");
                                $('#total').val("");
                                $('#payment_mode').val("");
                                $('#payment_ref').val("");
                                $("#expense_heading").html("Add Expense");
                                $("#payment_attachme").hide();
                                $('#kt_modal_add_mulk_expense').modal('toggle');


                            } else {
                                $("#expense_heading").html("Add Expense");
                                $("#payment_attachme tbody").empty();
                                if (data != "0") {
                                    $("#payment_attachme").show();

                                    for (var i = 0; i < data.length; i++) {
                                        if (data[i].payment_slip != '') {
                                            td = "<a href='<?php echo base_url() ?>expense_uploads/mulkiya/" + data[i].payment_slip + "' target='_blank'>View</a>";
                                        } else {
                                            td = 'No Attachment';
                                        }

                                        $("#payment_attachme tbody").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[i].date + "</td><td>" + data[i].amount + "</td><td>" + data[i].tax_amt + "</td><td>" + data[i].total + "</td><td>" + td + "</td><td><a onclick='edit_mulkiya_expense(" + data[i].exp_id + "," + data[i].vehicle_id + ")' title='Edit' ><i class='fa fa-pencil' style='color:#009ef7' ></i></a>&nbsp;<a onclick='delete_mulkiya_expense(" + data[i].exp_id + "," + data[i].mulkiya_id + ")'title='Delete' ><i class='fa fa-trash' style='color:#009ef7'></i></a></td></tr>");

                                    }

                                }

                                $('#kt_modal_add_mulk_expense').modal('toggle');
                            }
                        }
                    });


                }

                function getAmountme() {
                    var amount = $("#amountme").val();
                    var tax = $("#tax_perme").val();
                    var taxam = (amount * tax) / 100;
                    var total = 0;
                    var total = parseFloat(amount) + parseFloat(taxam);
                    $("#tax_amtme").val(taxam);
                    $("#totalme").val(parseFloat(total));
                }
                $('#addexpensemulk').click(function(e) {
                    e.preventDefault();


                    var form_data = new FormData();
                    var vid = $("#vid").val();
                    var mulkiyaidexp = $("#mulkiyaidexp").val();
                    var exp_id = $("#exp_id").val();
                    var amount = $('#amountme').val();
                    var tax_per = $('#tax_perme').val();
                    var tax_amt = $('#tax_amtme').val();
                    var total = $('#totalme').val();
                    var payment_mode = $('#payment_modeme').val();
                    var payment_ref = $('#payment_refme').val();
                    var image_file = $('#image_fileexpme').prop("files")[0];

                    if (amount != "" && tax_per != "" && tax_amt != "" && total != "" && payment_mode != "" && payment_ref != "" && image_file != "") {

                        form_data.append("vid", vid);
                        form_data.append("exp_id", exp_id);
                        form_data.append("mulkiyaidexp", mulkiyaidexp);
                        form_data.append("amount", amount);
                        form_data.append("tax_per", tax_per);
                        form_data.append("tax_amt", tax_amt);
                        form_data.append("total", total);
                        form_data.append("payment_mode", payment_mode);
                        form_data.append("payment_ref", payment_ref);
                        form_data.append("image_file", image_file);
                        if (exp_id == '') {
                            $.ajax({
                                url: "<?php echo base_url() ?>Master/add_mulkiya_expense",
                                type: 'POST',
                                data: form_data,
                                dataType: "json",
                                processData: false,
                                contentType: false,
                                beforeSend: function() {},
                                success: function(data) {
                                    //console.log(data);
                                    $('#amountme').val('');
                                    //	$('#tax_per').val('');
                                    $('#tax_amtme').val('');
                                    $('#totalme').val('');
                                    $('#payment_modeme').val('');
                                    $('#payment_refme').val('');
                                    $('#image_fileexpme').val('');
                                    $.ajax({
                                        url: "<?php echo base_url() ?>Master/get_mulkiya_expense",
                                        type: 'post',
                                        dataType: "json",
                                        data: {
                                            id: mulkiyaidexp
                                        },
                                        success: function(data) {
                                            $("#payment_attachme tbody").empty();
                                            if (data != "0") {
                                                $("#payment_attachme").show();
                                                for (var i = 0; i < data.length; i++) {
                                                    if (data[i].payment_slip != '') {
                                                        td = "<a href='<?php echo base_url() ?>expense_uploads/mulkiya/" + data[i].payment_slip + "' target='_blank'>View</a>";
                                                    } else {
                                                        td = 'No Attachment';
                                                    }

                                                    $("#payment_attachme tbody").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[i].date + "</td><td>" + data[i].amount + "</td><td>" + data[i].tax_amt + "</td><td>" + data[i].total + "</td><td>" + td + "</td><td><a onclick='edit_mulkiya_expense(" + data[i].exp_id + "," + data[i].vehicle_id + ")' title='Edit' ><i class='fa fa-pencil' style='color:#009ef7' ></i></a>&nbsp;<a onclick='delete_mulkiya_expense(" + data[i].exp_id + "," + data[i].mulkiya_id + ")'title='Delete' ><i class='fa fa-trash' style='color:#009ef7'></i></a></td></tr>");
                                                }

                                            }

                                        }

                                    });

                                },
                            });
                        } else {
                            $.ajax({
                                url: "<?php echo base_url() ?>Master/update_mulkiya_expense",
                                type: 'POST',
                                data: form_data,
                                dataType: "json",
                                processData: false,
                                contentType: false,
                                beforeSend: function() {},
                                success: function(data) {
                                    $("#expense_heading").html("Add Expense");
                                    $('#amountme').val('');
                                    //	$('#tax_per').val('');
                                    $('#tax_amtme').val('');
                                    $('#totalme').val('');
                                    $('#payment_modeme').val('');
                                    $('#payment_refme').val('');
                                    $('#image_fileexpme').val('');
                                    $.ajax({
                                        url: "<?php echo base_url() ?>Master/get_mulkiya_expense",
                                        type: 'post',
                                        dataType: "json",
                                        data: {
                                            id: mulkiyaidexp
                                        },
                                        success: function(data) {
                                            $("#payment_attachme tbody").empty();
                                            if (data != "0") {
                                                $("#payment_attachme").show();
                                                for (var i = 0; i < data.length; i++) {

                                                    if (data[i].payment_slip != '') {
                                                        td = "<a href='<?php echo base_url() ?>expense_uploads/mulkiya/" + data[i].payment_slip + "' target='_blank'>View</a>";
                                                    } else {
                                                        td = 'No Attachment';
                                                    }


                                                    $("#payment_attachme tbody").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[i].date + "</td><td>" + data[i].amount + "</td><td>" + data[i].tax_amt + "</td><td>" + data[i].total + "</td><td>" + td + "</td><td><a onclick='edit_mulkiya_expense(" + data[i].exp_id + "," + data[i].vehicle_id + ")' title='Edit' ><i class='fa fa-pencil' style='color:#009ef7' ></i></a>&nbsp;<a onclick='delete_mulkiya_expense(" + data[i].exp_id + "," + data[i].mulkiya_id + ")'title='Delete' ><i class='fa fa-trash' style='color:#009ef7'></i></a></td></tr>");
                                                }

                                            }

                                        }

                                    });

                                },
                            });
                        }
                    } else {
                        alert('Please fill all required field !');
                    }


                });

                function edit_mulkiya_expense(id, vehicle_id) {


                    $("#expense_heading").html("Edit Expense");
                    $.ajax({
                        url: "<?php echo base_url() ?>Master/get_mulkiya_expense_by_id",
                        type: 'post',
                        dataType: "json",
                        data: {
                            exp_id: id
                        },

                        success: function(data) {
                            console.log(data.payment_mode);
                            $('#exp_id').val(data.exp_id);
                            $('#amountme').val(data.amount);
                            $('#tax_perme').val(data.tax_per);
                            $('#tax_amtme').val(data.tax_amt);
                            $('#totalme').val(data.total);
                            $('#payment_modeme').val(data.payment_mode);
                            $('#payment_refme').val(data.payment_ref);
                            $("#mulkiyaidexp").val(data.mulkiya_id);

                        }

                    });
                }

                function delete_mulkiya_expense(id, mulkiya_id) {
                    if (confirm("Do you want to Delete this Expense?")) {
                        $.ajax({
                            method: "post",
                            url: '<?php echo base_url() ?>Master/delete_mulkiya_expense',
                            data: {
                                "id": id
                            },
                            dataType: "json",
                            success: function(data) {
                                if (data == "1")
                                    $.ajax({
                                        url: "<?php echo base_url() ?>Master/get_mulkiya_expense",
                                        type: 'post',
                                        dataType: "json",
                                        data: {
                                            id: mulkiya_id
                                        },
                                        success: function(data) {
                                            $("#payment_attachme tbody").empty();
                                            if (data != "0") {
                                                $("#payment_attachme").show();
                                                for (var i = 0; i < data.length; i++) {
                                                    if (data[i].payment_slip != '') {
                                                        td = "<a href='<?php echo base_url() ?>expense_uploads/mulkiya/" + data[i].payment_slip + "' target='_blank'>View</a>";
                                                    } else {
                                                        td = 'No Attachment';
                                                    }

                                                    $("#payment_attachme tbody").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[i].date + "</td><td>" + data[i].amount + "</td><td>" + data[i].tax_amt + "</td><td>" + data[i].total + "</td><td>" + td + "</td><td><a onclick='edit_mulkiya_expense(" + data[i].exp_id + "," + data[i].vehicle_id + ")' title='Edit' ><i class='fa fa-pencil' style='color:#009ef7' ></i></a>&nbsp;<a onclick='delete_mulkiya_expense(" + data[i].exp_id + "," + data[i].mulkiya_id + ")'title='Delete' ><i class='fa fa-trash' style='color:#009ef7'></i></a></td></tr>");
                                                }

                                            }

                                        }

                                    });
                            }
                        });
                    }
                }
            </script>
            <script type="text/javascript">
                //mulkiya attributes

                function open_mulki_atts_modal(id) {
                    $("#mulkiyaida").val(id);
                    $("#amulk_name").val("");
                    $("#amulk_value").val("");
                    $.ajax({
                        url: "<?php echo base_url() ?>Master/get_mulkiattributes",
                        type: 'post',
                        dataType: "json",
                        data: {
                            vid: id
                        },

                        success: function(data) {
                            // $('#kt_modal_add_vehicle').modal('toggle');
                            // if(data!="0"){
                            console.log(data);
                            $("#kt_table_mulki_attributes tbody")
                                .empty();
                            i = 0;
                            for (var key in data) {
                                console.log(key);
                                console.log(data[key]);
                                $('#kt_table_mulki_attributes tbody')
                                    .append('<tr><td>' + parseFloat(i + 1) + '</td><td>' + key + '</td><td>' + data[key] + '</td><td><button type="reset" class="btn btn-light-primary btn_edit" onclick="delete_mulkiya_attributes(\'' + key + '\',' + id + ')"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>');
                                i++;
                            }
                            $('#kt_modal_add_att_mulkiya').modal('toggle');
                            //  }
                        }

                    });

                }

                function addmulkattr() {
                    $a_name = $("#amulk_name").val();
                    $a_value = $("#amulk_value").val();
                    $mulkid = $("#mulkiyaida").val();

                    if ($a_name != "") {

                        $.ajax({
                            url: "<?php echo base_url() ?>Master/add_mulkiattribute",
                            method: "POST",
                            data: {
                                a_name: $a_name,
                                a_value: $a_value,
                                mulkid: $mulkid
                            },

                            success: function(data) {
                                $("#amulk_name").val("");
                                $("#amulk_value").val("");
                                $("#mulkiyaida").val("");
                                $.ajax({
                                    url: "<?php echo base_url() ?>Master/get_mulkiattributes",
                                    type: 'post',
                                    dataType: "json",
                                    data: {
                                        vid: $mulkid
                                    },

                                    success: function(data) {
                                        // $('#kt_modal_add_vehicle').modal('toggle');
                                        // if(data!="0"){
                                        console.log(data);
                                        $("#kt_table_mulki_attributes tbody")
                                            .empty();
                                        var i = 0;
                                        for (var key in data) {
                                            console.log(key);
                                            console.log(data[key]);
                                            $('#kt_table_mulki_attributes tbody')
                                                .append('<tr><td>' + parseFloat(i + 1) + '</td><td>' + key + '</td><td>' + data[key] + '</td><td><button type="reset" class="btn btn-light-primary btn_edit" onclick="delete_mulkiya_attributes(\'' + key + '\',' + $mulkid + ')"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>');
                                            i++;
                                        }
                                        //    $('#kt_modal_add_att_mulkiya').modal('toggle');
                                        //  }
                                    }

                                });

                                //  window.location.reload();
                                // $("#success").show();
                                // $('#success').html('Data added successfully !');

                            },
                        });
                    } else {
                        alert('Please fill all field !');
                    }
                }

                function delete_mulkiya_attributes(details, id) {

                    if (confirm("Do you want to Delete this Attribute?")) {
                        $.ajax({
                            method: "post",
                            url: '<?php echo base_url() ?>Master/delete_mulkiattributes',
                            data: {
                                "key": details,
                                "id": id
                            },
                            dataType: "json",
                            success: function(data) {

                                $.ajax({
                                    url: "<?php echo base_url() ?>Master/get_mulkiattributes",
                                    type: 'post',
                                    dataType: "json",
                                    data: {
                                        vid: id
                                    },

                                    success: function(data) {
                                        // $('#kt_modal_add_vehicle').modal('toggle');
                                        // if(data!="0"){
                                        console.log(data);
                                        $("#kt_table_mulki_attributes tbody")
                                            .empty();
                                        var i = 0;
                                        for (var key in data) {
                                            console.log(key);
                                            console.log(data[key]);
                                            $('#kt_table_mulki_attributes tbody')
                                                .append('<tr><td>' + parseFloat(i + 1) + '</td><td>' + key + '</td><td>' + data[key] + '</td><td><button type="reset" class="btn btn-light-primary btn_edit" onclick="delete_mulkiya_attributes(\'' + key + '\',' + id + ')"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>');
                                            i++;
                                        }
                                        //    $('#kt_modal_add_att_mulkiya').modal('toggle');
                                        //  }
                                    }

                                });

                            }
                        });
                    }
                }
            </script>
            <script type="text/javascript">
                //mulkiya attachment
                $('#is_expiry_mulkiya').click(function() {

                    // Get the checkbox
                    if ($(this).is(':checked')) {

                        $('#ex_date_mulkiya').show();
                    } else {
                        $('#ex_date_mulkiya').hide();
                    }
                });

                function open_mulki_attach_modal(id) {
                    $("#mulkiyaidat").val(id);
                    $.ajax({
                        url: "<?php echo base_url() ?>Master/get_mulkiattaches",
                        type: 'post',
                        dataType: "json",
                        data: {
                            vid: id
                        },
                        success: function(data) {
                            $("#atlistmulkiya").empty();
                            if (data != "0") {
                                var i = 0;
                                for (var key in data) {
                                    var e = data[key].att_expiry;
                                    if (e == "01/01/1970")
                                        var ex = "";
                                    else
                                        var ex = e;
                                    $("#atlistmulkiya").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[key].attachment_type + "</td><td>" + ex + "</td><td>" + data[key].ts + "</td><td><a href='<?php echo base_url() ?>vehicle_uploads/mulkiya/" + data[key].file_name + "' target='_blank'>View</a></td><td><a  type='button' class='btn btn-light-primary btn_edit' style='padding: 3px;font-size: 14px; 'onclick='delete_mulkiya_attachments(" + key + "," + id + ")'><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>");
                                    i++;
                                }
                            }
                        }

                    });
                    $("#attachment_type").val("");
                    $("#attexpiry_date").val("");
                    $("#image_file").val("");
                    $('#kt_modal_add_attachment_mulkiya').modal('toggle');
                }
                $('#mulkiya_attachment_submit').click(function(e) {
                    e.preventDefault();
                    // expiry_date mulkis_expiry mulkimage_file attmulk_type mulkexpiry_date mulkiyaidat
                    // alert("hiii");
                    var form_data = new FormData();
                    var mulkiyaid = $("#mulkiyaidat").val();
                    var file_data = $("#image_file_mulkiya").prop("files")[0];
                    var attachment_type = $("#attachment_type_mulkiya").val();
                    var vid = $("#vid").val();
                    var attexpiry_date = $("#attexpiry_date_mulkiya").val();
                    if ($('#is_expiry').is(':checked'))
                        var is_expiry = '1';
                    else
                        var is_expiry = '0';
                    if (attachment_type != '' && file_data != '') {
                        form_data.append("attachment_type", attachment_type);
                        form_data.append("mulkiyaid", mulkiyaid);
                        form_data.append("file", file_data);
                        form_data.append("vid", vid);
                        form_data.append("is_expiry", is_expiry);
                        form_data.append("att_expiry", attexpiry_date);
                        $.ajax({
                            url: "<?php echo base_url() ?>Master/add_attachmentmulk",
                            type: 'POST',
                            data: form_data,
                            dataType: "json",
                            processData: false,
                            contentType: false,
                            //   beforeSend:function(){
                            // 	},
                            success: function(data) {
                                $("#attachment_type_mulkiya").val("");
                                $("#attexpiry_date_mulkiya").val("");
                                $("#image_file_mulkiya").val("");
                                $("#mulkiyaidat").val("");
                                $('#is_expiry_mulkiya').prop('checked', false);
                                $('#ex_date_mulkiya').hide();
                                $.ajax({
                                    url: "<?php echo base_url() ?>Master/get_mulkiattaches",
                                    type: 'post',
                                    dataType: "json",
                                    data: {
                                        vid: mulkiyaid
                                    },
                                    success: function(data) {
                                        $("#atlistmulkiya").empty();
                                        if (data != "0") {
                                            var i = 0;
                                            for (var key in data) {
                                                var e = data[key].att_expiry;
                                                if (e == "01/01/1970")
                                                    var ex = "";
                                                else
                                                    var ex = e;
                                                $("#atlistmulkiya").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[key].attachment_type + "</td><td>" + ex + "</td><td>" + data[key].ts + "</td><td><a href='<?php echo base_url() ?>vehicle_uploads/mulkiya/" + data[key].file_name + "' target='_blank'>View</a></td><td><a  type='button' class='btn btn-light-primary btn_edit' style='padding: 3px;font-size: 14px; 'onclick='delete_mulkiya_attachments(" + key + "," + vid + ")'><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>");
                                                i++;
                                            }
                                        }
                                    }

                                });

                            },
                        });
                    } else {
                        alert('Please fill the required fields');
                    }
                });

                function delete_mulkiya_attachments(details, id) {
                    if (confirm("Do you want to Delete this Attachment?")) {
                        $.ajax({

                            method: "post",
                            url: '<?php echo base_url() ?>Master/deleteattachmulki',
                            data: {
                                "key": details,
                                "id": id
                            },
                            dataType: "json",
                            success: function(data) {

                                if (data == "1")

                                    $.ajax({
                                        url: "<?php echo base_url() ?>Master/get_mulkiattaches",
                                        type: 'post',
                                        dataType: "json",
                                        data: {
                                            vid: id
                                        },
                                        success: function(data) {
                                            $("#atlistmulkiya").empty();
                                            if (data != "0") {
                                                var i = 0;
                                                for (var key in data) {
                                                    var e = data[key].att_expiry;
                                                    if (e == "01/01/1970")
                                                        var ex = "";
                                                    else
                                                        var ex = e;
                                                    $("#atlistmulkiya").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[key].attachment_type + "</td><td>" + ex + "</td><td>" + data[key].ts + "</td><td><a href='<?php echo base_url() ?>vehicle_uploads/mulkiya/" + data[key].file_name + "' target='_blank'>View</a></td><td><a  type='button' class='btn btn-light-primary btn_edit' style='padding: 3px;font-size: 14px; 'onclick='delete_mulkiya_attachments(" + key + "," + id + ")'><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>");
                                                    i++;
                                                }
                                            }
                                        }

                                    });


                            }
                        });
                    }
                }

                //modals
                function open_attach_modal(id) {
                    $("#attachid").val(id);
                    $.ajax({
                        url: "<?php echo base_url() ?>Vehicle/get_insuranceattaches",
                        type: 'post',
                        dataType: "json",
                        data: {
                            vid: id
                        },
                        success: function(data) {
                            $("#atlist").empty();
                            if (data != "0") {
                                var i = 0;
                                for (var key in data) {
                                    var e = data[key].att_expiry;
                                    if (e == "01/01/1970")
                                        var ex = "";
                                    else
                                        var ex = e;
                                    $("#atlist").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[key].attachment_type + "</td><td>" + ex + "</td><td>" + data[key].ts + "</td><td><a href='<?php echo base_url() ?>vehicle_uploads/insurance/" + data[key].file_name + "' target='_blank'>View</a></td><td><a   onclick='delete_attachments(" + key + "," + id + ")'><i class='fa fa-trash' aria-hidden='true' style='color:#009ef7'></i></a></td></tr>");
                                    i++;
                                }

                            }
                        }

                    });
                    $('#kt_modal_add_attachment').modal('toggle');
                }
                $('#att_submit').click(function(e) {
                    e.preventDefault();

                    var form_data = new FormData();
                    var file_data = $("#image_file").prop("files")[0];
                    var attachment_type = $("#attachment_type").val();
                    var vid = $("#attachid").val();
                    var attexpiry_date = $("#attexpiry_date").val();
                    if ($('#is_expiry').is(':checked'))
                        var is_expiry = '1';
                    else
                        var is_expiry = '0';
                    if (attachment_type != '' && file_data != '') {
                        form_data.append("attachment_type", attachment_type);
                        form_data.append("file", file_data);
                        form_data.append("vid", vid);
                        form_data.append("is_expiry", is_expiry);
                        form_data.append("att_expiry", attexpiry_date);
                        $.ajax({
                            url: "<?php echo base_url() ?>Vehicle/insertinsureattachment",
                            type: 'POST',
                            data: form_data,
                            dataType: "json",
                            processData: false,
                            contentType: false,
                            beforeSend: function() {},
                            success: function(data) {
                                $("#attachment_type").val("");
                                $("#attexpiry_date").val("");
                                $("#image_file").val("");
                                if (data == "1")
                                    $.ajax({
                                        url: "<?php echo base_url() ?>Vehicle/get_insuranceattaches",
                                        type: 'post',
                                        dataType: "json",
                                        data: {
                                            vid: vid
                                        },
                                        success: function(data) {
                                            $("#atlist").empty();
                                            if (data != "0") {
                                                var i = 0;
                                                for (var key in data) {
                                                    var e = data[key].att_expiry;
                                                    if (e == "01/01/1970")
                                                        var ex = "";
                                                    else
                                                        var ex = e;
                                                    $("#atlist").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[key].attachment_type + "</td><td>" + ex + "</td><td>" + data[key].ts + "</td><td><a href='<?php echo base_url() ?>vehicle_uploads/insurance/" + data[key].file_name + "' target='_blank'>View</a></td><td><a   onclick='delete_attachments(" + key + "," + vid + ")'><i class='fa fa-trash' aria-hidden='true' style='color:#009ef7'></i></a></td></tr>");
                                                    i++;
                                                }

                                            }
                                        }

                                    });
                            },
                        });
                    } else {
                        alert('Please fill the required fields');
                    }
                });
                $(document).ready(function() {
                    $('#fuelcard').prop('checked', false);
                    $('#originalreg').prop('checked', false);
                    $('#vgps').prop('checked', false);
                    $('#vsalik').prop('checked', false);
                    $('#safetykit').prop('checked', false);
                    $('#speedcert').prop('checked', false);
                    $('#toolbox').prop('checked', false);
                    $('#sparetyre').prop('checked', false);

                    $('#sparekey').prop('checked', false);

                    $('#is_expiry').prop('checked', false);

                });

                $('#is_expiry').click(function() {

                    // Get the checkbox
                    if ($(this).is(':checked')) {

                        $('#ex_date').show();
                    } else {
                        $('#ex_date').hide();
                    }
                });

                function delete_attachments(details, id) {
                    if (confirm("Do you want to Delete this Attachment?")) {
                        $.ajax({

                            method: "post",
                            url: '<?php echo base_url() ?>Master/deleteattachinsu',
                            data: {
                                "key": details,
                                "id": id
                            },
                            dataType: "json",
                            success: function(data) {

                                if (data == "1")

                                    $.ajax({
                                        url: "<?php echo base_url() ?>Vehicle/get_insuranceattaches",
                                        type: 'post',
                                        dataType: "json",
                                        data: {
                                            vid: id
                                        },
                                        success: function(data) {
                                            $("#atlist").empty();
                                            if (data != "0") {
                                                var i = 0;
                                                for (var key in data) {
                                                    var e = data[key].att_expiry;
                                                    if (e == "01/01/1970")
                                                        var ex = "";
                                                    else
                                                        var ex = e;
                                                    $("#atlist").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[key].attachment_type + "</td><td>" + ex + "</td><td>" + data[key].ts + "</td><td><a href='<?php echo base_url() ?>vehicle_uploads/insurance/" + data[key].file_name + "' target='_blank'>View</a></td><td><a   onclick='delete_attachments(" + key + "," + id + ")'><i class='fa fa-trash' aria-hidden='true' style='color:#009ef7'></i></a></td></tr>");
                                                    i++;
                                                }

                                            }
                                        }

                                    });


                            }
                        });
                    }
                }

                function open_nots_modal(id) {
                    // alert(id);
                    $("#noteid").val(id);
                    $("#heading").val("");
                    $("#details").val("");
                    $.ajax({
                        url: "<?php echo base_url() ?>Vehicle/get_insurancenotes",
                        type: 'post',
                        dataType: "json",
                        data: {
                            vid: id
                        },
                        success: function(data) {
                            $("#notetable").empty();
                            if (data != "0") {
                                for (var key in data) {
                                    // $("#notetable").append("<div class='card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6'><div class='d-flex flex-column py-2'><div class='d-flex align-items-center fs-5 fw-bold mb-5'>"+data[key].heading+"</div><div class='fs-6 fw-semibold text-gray-600'>"+data[key].details+"</br>"+data[key].ts+"</div></div><div class='d-flex align-items-center py-2'><button type='reset' class='btn btn-sm btn-light btn-active-light-primary me-3'>Delete</button></div></div></br>");
                                    $("#notetable").append("<div class='card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6'><div class='d-flex flex-column py-2'><div class='d-flex align-items-center fs-5 fw-bold mb-5'>" + data[key].heading + "</div><div class='fs-6 fw-semibold text-gray-600'>" + data[key].details + "</div></div><div class='d-flex align-items-center py-2'><button type='reset' class='btn btn-light-primary btn_edit' onclick='delete_note(" + key + "," + id + ")'><i class='fa fa-trash' aria-hidden='true'></i></button></div></div></br>");

                                }
                            }
                        }

                    });
                    $('#kt_modal_add_notes').modal('toggle');
                    // $('#').modal('toggle');
                }

                function attributemodal(id) {
                    $("#insurid").val(id);
                    $.ajax({
                        url: "<?php echo base_url() ?>Vehicle/get_insureattributes",
                        type: 'post',
                        dataType: "json",
                        data: {
                            vid: id
                        },

                        success: function(data) {
                            console.log(data);
                            $("#kt_table_attributes tbody")
                                .empty();
                            var i = 0;
                            for (var key in data) {
                                console.log(key);
                                console.log(data[key]);
                                $('#kt_table_attributes tbody')
                                    .append('<tr><td>' + parseFloat(i + 1) + '</td><td>' + key + '</td><td>' + data[key] + '</td><td><button type="reset" class="btn btn-light-primary btn_edit" onclick="delete_attributes(\'' + key + '\',' + id + ')"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>');
                                i++;
                            }
                            $('#kt_modal_add_attri').modal('toggle');
                            //  }
                        }

                    });

                }

                function insertnote() {
                    var heading = $("#heading").val();
                    var details = $("#details").val();
                    var insurid = $("#noteid").val();
                    if (heading != "" && details != "") {
                        $.ajax({
                            method: "post",
                            url: '<?php echo base_url() ?>Vehicle/addinsurancenotes',
                            data: {
                                heading: heading,
                                details: details,
                                vid: insurid
                            },
                            beforeSend: function() {},
                            success: function(d) {
                                $("#heading").val("");
                                $("#details").val("");
                                $.ajax({
                                    url: "<?php echo base_url() ?>Vehicle/get_insurancenotes",
                                    type: 'post',
                                    dataType: "json",
                                    data: {
                                        vid: insurid
                                    },
                                    success: function(data) {
                                        $("#notetable").empty();
                                        if (data != "0") {
                                            for (var key in data) {
                                                $("#notetable").append("<div class='card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6'><div class='d-flex flex-column py-2'><div class='d-flex align-items-center fs-5 fw-bold mb-5'>" + data[key].heading + "</div><div class='fs-6 fw-semibold text-gray-600'>" + data[key].details + "</div></div><div class='d-flex align-items-center py-2'><button type='reset' class='btn btn-light-primary btn_edit' onclick='delete_note(" + key + "," + insurid + ")'><i class='fa fa-trash' aria-hidden='true'></i></button></div></div></br>");
                                            }
                                        }
                                    }

                                });
                            },
                        });
                    } else {
                        alert("Heading And Details Are Required");
                    }
                }

                function delete_note(details, id) {
                    if (confirm("Do you want to Delete this Note?")) {
                        $.ajax({

                            method: "post",
                            url: '<?php echo base_url() ?>Master/deletenoteinsu',
                            data: {
                                "key": details,
                                "id": id
                            },
                            dataType: "json",
                            success: function(data) {

                                if (data == "1")

                                    $.ajax({
                                        url: "<?php echo base_url() ?>Vehicle/get_insurancenotes",
                                        type: 'post',
                                        dataType: "json",
                                        data: {
                                            vid: id
                                        },
                                        success: function(data) {
                                            $("#notetable").empty();
                                            if (data != "0") {
                                                for (var key in data) {
                                                    $("#notetable").append("<div class='card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6'><div class='d-flex flex-column py-2'><div class='d-flex align-items-center fs-5 fw-bold mb-5'>" + data[key].heading + "</div><div class='fs-6 fw-semibold text-gray-600'>" + data[key].details + "</div></div><div class='d-flex align-items-center py-2'><button type='reset' class='btn btn-light-primary btn_edit' onclick='delete_note(" + key + "," + id + ")'><i class='fa fa-trash' aria-hidden='true'></i></button></div></div></br>");
                                                }
                                            }
                                        }

                                    });


                            }
                        });
                    }
                }

                function delete_attributes(details, id) {

                    if (confirm("Do you want to Delete this Attribute?")) {
                        $.ajax({
                            method: "post",
                            url: '<?php echo base_url() ?>Vehicle/delete_insurattributes',
                            data: {
                                "key": details,
                                "id": id
                            },
                            dataType: "json",
                            success: function(data) {

                                $.ajax({
                                    url: "<?php echo base_url() ?>Vehicle/get_insureattributes",
                                    type: 'post',
                                    dataType: "json",
                                    data: {
                                        vid: id
                                    },

                                    success: function(data) {
                                        console.log(data);
                                        $("#kt_table_attributes tbody")
                                            .empty();
                                        var i = 0;
                                        for (var key in data) {
                                            console.log(key);
                                            console.log(data[key]);
                                            $('#kt_table_attributes tbody')
                                                .append('<tr><td>' + parseFloat(i + 1) + '</td><td>' + key + '</td><td>' + data[key] + '</td><td><button type="reset" class="btn btn-light-primary btn_edit" onclick="delete_attributes(\'' + key + '\',' + id + ')"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>');
                                            i++;
                                        }
                                        //  $('#kt_modal_add_attri').modal('toggle');
                                        //  }
                                    }

                                });

                            }
                        });
                    }
                }

                function addinsurattr() {
                    $a_name = $("#insura_name").val();
                    $a_value = $("#insura_value").val();
                    $insurid = $("#insurid").val();

                    if ($a_name != "") {

                        $.ajax({
                            url: "<?php echo base_url() ?>Vehicle/add_insureattribute",
                            method: "POST",
                            data: {
                                a_name: $a_name,
                                a_value: $a_value,
                                insurid: $insurid
                            },
                            cache: false,
                            beforeSend: function() {},
                            success: function(data) {
                                $.ajax({
                                    url: "<?php echo base_url() ?>Vehicle/get_insureattributes",
                                    type: 'post',
                                    dataType: "json",
                                    data: {
                                        vid: $insurid
                                    },

                                    success: function(data) {
                                        $("#insura_name").val("");
                                        $("#insura_value").val("");
                                        console.log(data);
                                        $("#kt_table_attributes tbody")
                                            .empty();
                                        var i = 0;
                                        for (var key in data) {
                                            console.log(key);
                                            console.log(data[key]);
                                            $('#kt_table_attributes tbody')
                                                .append('<tr><td>' + parseFloat(i + 1) + '</td><td>' + key + '</td><td>' + data[key] + '</td><td><button type="reset" class="btn btn-light-primary btn_edit" onclick="delete_attributes(\'' + key + '\',' + $insurid + ')"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>');
                                            i++;
                                        }
                                        // $('#kt_modal_add_attri').modal('toggle');
                                        //  }
                                    }

                                });


                            },
                        });
                    } else {
                        alert('Please fill all field !');
                    }
                }
            </script>
            <script type="text/javascript">
                function open_mulki_nots_modal(id) {
                    // alert(id);
                    $("#mulkiyaid").val(id);
                    $("#headingmulkiya").val("");
                    $("#detailsmulkiya").val("");
                    $.ajax({
                        url: "<?php echo base_url() ?>Master/get_mulkiya_notes",
                        type: 'post',
                        dataType: "json",
                        data: {
                            vid: id
                        },
                        success: function(data) {
                            $("#mulkinotetable").empty();
                            if (data != "0") {
                                for (var key in data) {
                                    $("#mulkinotetable").append("<div class='card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6'><div class='d-flex flex-column py-2'><div class='d-flex align-items-center fs-5 fw-bold mb-5'>" + data[key].heading + "</div><div class='fs-6 fw-semibold text-gray-600'>" + data[key].details + "</div></div><div class='d-flex align-items-center py-2'><a   onclick='delete_mulkiya_note(" + key + "," + id + ")'><i class='fa fa-trash' aria-hidden='true' style='color:#009ef7'></i></a></div></div></br>");
                                }
                            }
                        }

                    });
                    $('#kt_modal_add_notes_mulkiya').modal('toggle');
                    // $('#').modal('toggle');
                }

                function insertmulknote() {
                    var headingmlk = $("#headingmulkiya").val();
                    var detailsmlk = $("#detailsmulkiya").val();
                    var mulkiyaid = $("#mulkiyaid").val();
                    if (headingmlk != "" && detailsmlk != "") {
                        $.ajax({
                            method: "post",
                            url: '<?php echo base_url() ?>Master/addmulkiyanote',
                            data: {
                                headingmlk: headingmlk,
                                detailsmlk: detailsmlk,
                                mulkiyaid: mulkiyaid
                            },
                            beforeSend: function() {},
                            success: function(d) {
                                // loaddetails();
                                // $("#mulkiyaid").val("");
                                $.ajax({
                                    url: "<?php echo base_url() ?>Master/get_mulkiya_notes",
                                    type: 'post',
                                    dataType: "json",
                                    data: {
                                        vid: mulkiyaid
                                    },
                                    success: function(data) {
                                        $("#headingmulkiya").val("");
                                        $("#detailsmulkiya").val("");
                                        $("#mulkinotetable").empty();
                                        if (data != "0") {
                                            for (var key in data) {
                                                $("#mulkinotetable").append("<div class='card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6'><div class='d-flex flex-column py-2'><div class='d-flex align-items-center fs-5 fw-bold mb-5'>" + data[key].heading + "</div><div class='fs-6 fw-semibold text-gray-600'>" + data[key].details + "</div></div><div class='d-flex align-items-center py-2'><a onclick='delete_mulkiya_note(" + key + "," + mulkiyaid + ")'><i class='fa fa-trash' aria-hidden='true' style='color:#009ef7'></i></a></div></div></br>");
                                            }
                                        }
                                    }

                                });

                            },
                        });
                    } else {
                        alert("Heading And Details Are Required");
                    }
                }

                function delete_mulkiya_note(details, id) {
                    if (confirm("Do you want to Delete this Note?")) {
                        $.ajax({

                            method: "post",
                            url: '<?php echo base_url() ?>Master/deletenotemulki',
                            data: {
                                "key": details,
                                "id": id
                            },
                            dataType: "json",
                            success: function(data) {

                                if (data == "1")

                                    $.ajax({
                                        url: "<?php echo base_url() ?>Master/get_mulkiya_notes",
                                        type: 'post',
                                        dataType: "json",
                                        data: {
                                            vid: id
                                        },
                                        success: function(data) {
                                            $("#mulkinotetable").empty();
                                            if (data != "0") {
                                                for (var key in data) {
                                                    $("#mulkinotetable").append("<div class='card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6'><div class='d-flex flex-column py-2'><div class='d-flex align-items-center fs-5 fw-bold mb-5'>" + data[key].heading + "</div><div class='fs-6 fw-semibold text-gray-600'>" + data[key].details + "</div></div><div class='d-flex align-items-center py-2'><a  onclick='delete_mulkiya_note(" + key + "," + id + ")'><i class='fa fa-trash' aria-hidden='true' style='color:#009ef7'></i></button></div></div></br>");
                                                }
                                            }
                                        }

                                    });


                            }
                        });
                    }
                }

                function open_edit_modal(id) {
                    $("#speed_heading").html("Edit Speed Limiter");
                    $("#spee_att").hide();
                    $("#is_paid_div").hide();
                    // $('#expense').hide();
                    $.ajax({
                        url: "<?php echo base_url() ?>Vehicle/get_speed_byid",
                        type: 'post',
                        dataType: "json",
                        data: {
                            id: id
                        },
                        success: function(data) {

                            $("#speed_certificateno").val(data.certificate_no);
                            $("#speed_rdpsno").val(data.rdps_no);
                            $("#speed_setspeed").val(data.set_speed);
                            $("#speed_fitmentdate").val(data.fitment_date);
                            $("#speed_certificatedate").val(data.certificate_date);
                            $("#speed_expirydate").val(data.expiry_date);
                            $("#speed_vendor").val(data.vendor);
                            $("#speed_device").val(data.device_type);
                            $("#speed_control").val(data.control_type);
                            $("#speed_id").val(id);
                            $('#kt_modal_add_speedlimiter').modal('toggle');
                        }
                    });
                }

                function delete_document(id) {
                    if (confirm("Do you want to Delete this Document?")) {
                        $.ajax({
                            method: "post",
                            url: '<?php echo base_url() ?>Master/delete_vehicle_document',
                            data: {
                                "id": id
                            },
                            dataType: "json",
                            success: function(data) {
                                //	if (data == "true")
                                loaddetails();
                            }
                        });
                    }
                }

                function delete_mulkiya(id) {
                    if (confirm("Do you want to Delete this Mulkiya?")) {
                        $.ajax({
                            method: "post",
                            url: '<?php echo base_url() ?>Master/deletemulkiya',
                            data: {
                                "id": id
                            },
                            dataType: "json",
                            success: function(data) {
                                if (data == "1")
                                    loaddetails();
                            }
                        });
                    }
                }

                function open_speednots_modal(id) {
                    // alert(id);
                    $("#speednoteid").val(id);
                    $("#speedheading").val("");
                    $("#speeddetails").val("");

                    $.ajax({
                        url: "<?php echo base_url() ?>Vehicle/get_speedlimiternotes",
                        type: 'post',
                        dataType: "json",
                        data: {
                            vid: id
                        },
                        success: function(data) {
                            $("#speednotetable").empty();
                            if (data != "0") {
                                for (var key in data) {
                                    // $("#speednotetable").append("<div class='card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6'><div class='d-flex flex-column py-2'><div class='d-flex align-items-center fs-5 fw-bold mb-5'>"+data[key].speedheading+"</div><div class='fs-6 fw-semibold text-gray-600'>"+data[key].speeddetails+"</br>"+data[key].ts+"</div></div><div class='d-flex align-items-center py-2'><button type='reset' class='btn btn-sm btn-light btn-active-light-primary me-3'>Delete</button></div></div></br>");
                                    $("#speednotetable").append("<div class='card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6'><div class='d-flex flex-column py-2'><div class='d-flex align-items-center fs-5 fw-bold mb-5'>" + data[key].heading + "</div><div class='fs-6 fw-semibold text-gray-600'>" + data[key].details + "</div></div><div class='d-flex align-items-center py-2'><button type='reset' class='btn btn-light-primary btn_edit' onclick='delete_speed_note(" + key + "," + id + ")'><i class='fa fa-trash' aria-hidden='true'></i></button></div></div></br>");

                                }
                            }
                        }

                    });
                    $('#kt_modal_speed_add_notes').modal('toggle');
                    // $('#').modal('toggle');
                }

                function insertspeednote() {
                    var speedheading = $("#speedheading").val();
                    var speeddetails = $("#speeddetails").val();
                    var insurid = $("#speednoteid").val();
                    //alert(speeddetails);
                    if (speedheading != "" && speeddetails != "") {
                        $.ajax({
                            method: "post",
                            url: '<?php echo base_url() ?>Vehicle/addspeedlimitnotes',
                            data: {
                                heading: speedheading,
                                details: speeddetails,
                                vid: insurid
                            },
                            beforeSend: function() {},
                            success: function(d) {
                                $("#speedheading").val("");
                                $("#speeddetails").val("");
                                $.ajax({
                                    url: "<?php echo base_url() ?>Vehicle/get_speedlimiternotes",
                                    type: 'post',
                                    dataType: "json",
                                    data: {
                                        vid: insurid
                                    },
                                    success: function(data) {
                                        $("#speednotetable").empty();
                                        if (data != "0") {
                                            for (var key in data) {
                                                $("#speednotetable").append("<div class='card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6'><div class='d-flex flex-column py-2'><div class='d-flex align-items-center fs-5 fw-bold mb-5'>" + data[key].heading + "</div><div class='fs-6 fw-semibold text-gray-600'>" + data[key].details + "</div></div><div class='d-flex align-items-center py-2'><button type='reset' class='btn btn-light-primary btn_edit' onclick='delete_speed_note(" + key + "," + insurid + ")'><i class='fa fa-trash' aria-hidden='true'></i></button></div></div></br>");
                                            }
                                        }
                                    }

                                });
                            },
                        });
                    } else {
                        alert("Heading And Details Are Required");
                    }
                }

                function delete_speed_note(speeddetails, id) {
                    if (confirm("Do you want to Delete this Note?")) {
                        $.ajax({

                            method: "post",
                            url: '<?php echo base_url() ?>Master/deletenotespeedlimi',
                            data: {
                                "key": speeddetails,
                                "id": id
                            },
                            dataType: "json",
                            success: function(data) {

                                if (data == "1")

                                    $.ajax({
                                        url: "<?php echo base_url() ?>Vehicle/get_speedlimiternotes",
                                        type: 'post',
                                        dataType: "json",
                                        data: {
                                            vid: id
                                        },
                                        success: function(data) {
                                            $("#speednotetable").empty();
                                            if (data != "0") {
                                                for (var key in data) {
                                                    $("#speednotetable").append("<div class='card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6'><div class='d-flex flex-column py-2'><div class='d-flex align-items-center fs-5 fw-bold mb-5'>" + data[key].heading + "</div><div class='fs-6 fw-semibold text-gray-600'>" + data[key].details + "</div></div><div class='d-flex align-items-center py-2'><button type='reset' class='btn btn-light-primary btn_edit' onclick='delete_speed_note(" + key + "," + id + ")'><i class='fa fa-trash' aria-hidden='true'></i></button></div></div></br>");
                                                }
                                            }
                                        }

                                    });

                            }
                        });
                    }
                }

                function open_speed_attach_modal(id) {
                    $("#speedattachid").val(id);
                    $.ajax({
                        url: "<?php echo base_url() ?>Vehicle/get_speedattaches",
                        type: 'post',
                        dataType: "json",
                        data: {
                            vid: id
                        },
                        success: function(data) {
                            $("#speedatlist").empty();
                            if (data != "0") {
                                var i = 0;
                                for (var key in data) {
                                    $("#speedatlist").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[key].attachment_type + "</td><td>" + data[key].att_expiry + "</td><td>" + data[key].ts + "</td><td><a href='<?php echo base_url() ?>vehicle_uploads/speedlimiter/" + data[key].file_name + "' target='_blank'>View</a></td><td><a  type='button' class='btn btn-light-primary btn_edit' style='padding: 3px;font-size: 14px; 'onclick='delete_speed_attachments(" + key + "," + id + ")'><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>");
                                    i++;
                                }
                            }
                        }

                    });
                    $('#kt_modal_add_speed_attachment').modal('toggle');
                }

                function delete_speed_attachments(speeddetails, id) {
                    if (confirm("Do you want to Delete this Attachment?")) {
                        $.ajax({

                            method: "post",
                            url: '<?php echo base_url() ?>Vehicle/deleteattachspeed',
                            data: {
                                "key": speeddetails,
                                "id": id
                            },
                            dataType: "json",
                            success: function(data) {

                                if (data == "1")

                                    $.ajax({
                                        url: "<?php echo base_url() ?>Vehicle/get_speedattaches",
                                        type: 'post',
                                        dataType: "json",
                                        data: {
                                            vid: id
                                        },
                                        success: function(data) {
                                            $("#speedatlist").empty();
                                            if (data != "0") {
                                                var i = 0;
                                                for (var key in data) {
                                                    $("#speedatlist").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[key].attachment_type + "</td><td>" + data[key].att_expiry + "</td><td>" + data[key].ts + "</td><td><a href='<?php echo base_url() ?>vehicle_uploads/speedlimiter/" + data[key].file_name + "' target='_blank'>View</a></td><td><a  type='button' class='btn btn-light-primary btn_edit' style='padding: 3px;font-size: 14px; 'onclick='delete_speed_attachments(" + key + "," + id + ")'><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>");
                                                    i++;
                                                }
                                            }
                                        }

                                    });


                            }
                        });
                    }
                }
                $('#speedatt_submit').click(function(e) {
                    e.preventDefault();
                    var form_data = new FormData();
                    var file_data = $("#speedimage_file").prop("files")[0];
                    var attachment_type = $("#speedattachment_type").val();
                    var vid = $("#speedattachid").val();
                    var attexpiry_date = $("#speedattexpiry_date").val();
                    if ($('#speedis_expiry').is(':checked'))
                        var is_expiry = '1';
                    else
                        var is_expiry = '0';

                    //alert()
                    if (attachment_type != '' && file_data != '') {
                        form_data.append("attachment_type", attachment_type);
                        form_data.append("file", file_data);
                        form_data.append("vid", vid);
                        form_data.append("is_expiry", is_expiry);
                        form_data.append("att_expiry", attexpiry_date);
                        $.ajax({
                            url: "<?php echo base_url() ?>Vehicle/insertspeedattachment",
                            type: 'POST',
                            data: form_data,
                            dataType: "json",
                            processData: false,
                            contentType: false,
                            beforeSend: function() {},
                            success: function(data) {
                                $("#speedattachment_type").val("");
                                $("#speedattexpiry_date").val("");
                                $("#speedimage_file").val("");
                                $.ajax({
                                    url: "<?php echo base_url() ?>Vehicle/get_speedattaches",
                                    type: 'post',
                                    dataType: "json",
                                    data: {
                                        vid: vid
                                    },
                                    success: function(data) {
                                        $("#speedatlist").empty();
                                        if (data != "0") {
                                            var i = 0;
                                            for (var key in data) {
                                                $("#speedatlist").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[key].attachment_type + "</td><td>" + data[key].att_expiry + "</td><td>" + data[key].ts + "</td><td><a href='<?php echo base_url() ?>vehicle_uploads/speedlimiter/" + data[key].file_name + "' target='_blank'>View</a></td><td><a  type='button' class='btn btn-light-primary btn_edit' style='padding: 3px;font-size: 14px; 'onclick='delete_speed_attachments(" + key + "," + vid + ")'><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>");
                                                i++;
                                            }
                                        }
                                    }

                                });
                            },
                        });
                    } else {
                        alert('Please fill the required fields');
                    }
                });

                function speedattributemodal(id) {
                    $("#speedid").val(id);
                    $.ajax({
                        url: "<?php echo base_url() ?>Vehicle/get_attributes_speedlimit",
                        type: 'post',
                        dataType: "json",
                        data: {
                            vid: id
                        },

                        success: function(data) {
                            console.log(data);
                            $("#kt_table_speedattributes tbody")
                                .empty();
                            var i = 0;
                            for (var key in data) {
                                console.log(key);
                                console.log(data[key]);
                                $('#kt_table_speedattributes tbody')
                                    .append('<tr><td>' + parseFloat(i + 1) + '</td><td>' + key + '</td><td>' + data[key] + '</td><td><button type="reset" class="btn btn-light-primary btn_edit" onclick="delete_speedattributes(\'' + key + '\',' + id + ')"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>');
                                i++;
                            }
                            $('#kt_modal_speed_add_attri').modal('toggle');
                            //  }
                        }

                    });

                }

                function addspeedattr() {
                    $a_name = $("#speed_name").val();
                    $a_value = $("#speed_value").val();
                    $insurid = $("#speedid").val();

                    if ($a_name != "") {

                        $.ajax({
                            url: "<?php echo base_url() ?>Vehicle/add_speedlimitattribute",
                            method: "POST",
                            data: {
                                a_name: $a_name,
                                a_value: $a_value,
                                insurid: $insurid
                            },
                            cache: false,
                            beforeSend: function() {},
                            success: function(data) {
                                $.ajax({
                                    url: "<?php echo base_url() ?>Vehicle/get_attributes_speedlimit",
                                    type: 'post',
                                    dataType: "json",
                                    data: {
                                        vid: $insurid
                                    },

                                    success: function(data) {
                                        $("#speed_name").val("");
                                        $("#speed_value").val("");
                                        console.log(data);
                                        $("#kt_table_speedattributes tbody")
                                            .empty();
                                        var i = 0;
                                        for (var key in data) {
                                            console.log(key);
                                            console.log(data[key]);
                                            $('#kt_table_speedattributes tbody')
                                                .append('<tr><td>' + parseFloat(i + 1) + '</td><td>' + key + '</td><td>' + data[key] + '</td><td><button type="reset" class="btn btn-light-primary btn_edit" onclick="delete_speedattributes(\'' + key + '\',' + $insurid + ')"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>');
                                            i++;
                                        }
                                    }

                                });


                            },
                        });
                    } else {
                        alert('Please fill all field !');
                    }
                }

                function delete_speedattributes(details, id) {

                    if (confirm("Do you want to Delete this Attribute?")) {
                        $.ajax({
                            method: "post",
                            url: '<?php echo base_url() ?>Vehicle/delete_speedlimiattributes',
                            data: {
                                "key": details,
                                "id": id
                            },
                            dataType: "json",
                            success: function(data) {

                                $.ajax({
                                    url: "<?php echo base_url() ?>Vehicle/get_attributes_speedlimit",
                                    type: 'post',
                                    dataType: "json",
                                    data: {
                                        vid: id
                                    },

                                    success: function(data) {
                                        console.log(data);
                                        $("#kt_table_speedattributes tbody")
                                            .empty();
                                        var i = 0;
                                        for (var key in data) {
                                            console.log(key);
                                            console.log(data[key]);
                                            $('#kt_table_speedattributes tbody')
                                                .append('<tr><td>' + parseFloat(i + 1) + '</td><td>' + key + '</td><td>' + data[key] + '</td><td><button type="reset" class="btn btn-light-primary btn_edit" onclick="delete_speedattributes(\'' + key + '\',' + id + ')"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>');
                                            i++;
                                        }
                                        // $('#kt_modal_add_attri').modal('toggle');
                                        //  }
                                    }

                                });

                            }
                        });
                    }
                }

                function open_speed_expense_modal(id) {
                    $("#speedidexp").val(id);
                    $.ajax({
                        url: "<?php echo base_url() ?>Vehicle/get_speedlimiter_expense",
                        type: 'post',
                        dataType: "json",
                        data: {
                            id: id
                        },

                        success: function(data) {
                            console.log(data);
                            if (data == "") {

                                $('#speedamount').val("");
                                //$('#tax_per').val("");
                                $('#speedtax_amt').val("");
                                $('#speedtotal').val("");
                                $('#speedpayment_mode').val("");
                                $('#speedpayment_ref').val("");
                                $("#speedexpense_heading").html("Add Expense");
                                $("#speedpayment_attach").hide();
                                $('#kt_modal_speed_add_expense').modal('toggle');


                            } else {
                                $("#speedpayment_attach tbody").empty();
                                if (data != "0") {
                                    $("#speedpayment_attach").show();

                                    for (var i = 0; i < data.length; i++) {
                                        if (data[i].payment_slip != '') {
                                            td = "<a href='<?php echo base_url() ?>expense_uploads/speedlimiter/" + data[i].payment_slip + "' target='_blank'>View</a>";
                                        } else {
                                            td = 'No Attachment';
                                        }

                                        $("#speedpayment_attach tbody").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[i].date + "</td><td>" + data[i].amount + "</td><td>" + data[i].tax_amt + "</td><td>" + data[i].total + "</td><td>" + td + "</td><td><a onclick='edit_speedexpense(" + data[i].exp_id + "," + data[i].vehicle_id + ")' title='Edit' ><i class='fa fa-pencil' style='color:#009ef7' ></i></a>&nbsp;<a onclick='delete_expense(" + data[i].exp_id + "," + data[i].speedlimiter_id + ")'title='Delete' ><i class='fa fa-trash' style='color:#009ef7'></i></a></td></tr>");

                                    }

                                }

                                $('#kt_modal_speed_add_expense').modal('toggle');
                            }
                        }
                    });


                }
                $('#speedaddexpense').click(function(e) {
                    e.preventDefault();


                    var form_data = new FormData();

                    var exp_id = $('#speedexp_id').val();
                    var vid = $("#vid").val();
                    var idexp = $("#speedidexp").val();
                    var amount = $('#speedamount').val();
                    var tax_per = $('#speedtax_per').val();
                    var tax_amt = $('#speedtax_amt').val();
                    var total = $('#speedtotal').val();
                    var payment_mode = $('#speedpayment_mode').val();
                    var payment_ref = $('#speedpayment_ref').val();
                    var image_file = $('#speedimage_fileexp').prop("files")[0];

                    if (amount != "" && tax_per != "" && tax_amt != "" && total != "" && payment_mode != "" && payment_ref != "" && image_file != "") {
                        form_data.append("vid", vid);
                        form_data.append("idexp", idexp);
                        form_data.append("amount", amount);
                        form_data.append("tax_per", tax_per);
                        form_data.append("tax_amt", tax_amt);
                        form_data.append("total", total);
                        form_data.append("payment_mode", payment_mode);
                        form_data.append("payment_ref", payment_ref);
                        form_data.append("image_file", image_file);
                        form_data.append("exp_id", exp_id);
                        if (exp_id == '') {
                            $.ajax({
                                url: "<?php echo base_url() ?>Vehicle/add_speedlimiter_expense",
                                type: 'POST',
                                data: form_data,
                                dataType: "json",
                                processData: false,
                                contentType: false,
                                beforeSend: function() {},
                                success: function(data) {
                                    //console.log(data);
                                    $('#speedamount').val('');
                                    //$('#tax_per').val('');
                                    $('#speedtax_amt').val('');
                                    $('#speedtotal').val('');
                                    $('#speedpayment_mode').val('');
                                    $('#speedpayment_ref').val('');
                                    $('#speedimage_fileexp').val('');
                                    $.ajax({
                                        url: "<?php echo base_url() ?>Vehicle/get_speedlimiter_expense",
                                        type: 'post',
                                        dataType: "json",
                                        data: {
                                            id: idexp
                                        },
                                        success: function(data) {
                                            $("#speedpayment_attach tbody").empty();
                                            if (data != "0") {
                                                $("#speedpayment_attach").show();
                                                for (var i = 0; i < data.length; i++) {
                                                    if (data[i].payment_slip != '') {
                                                        td = "<a href='<?php echo base_url() ?>expense_uploads/speedlimiter/" + data[i].payment_slip + "' target='_blank'>View</a>";
                                                    } else {
                                                        td = 'No Attachment';
                                                    }

                                                    $("#speedpayment_attach tbody").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[i].date + "</td><td>" + data[i].amount + "</td><td>" + data[i].tax_amt + "</td><td>" + data[i].total + "</td><td>" + td + "</td><td><a onclick='edit_speedexpense(" + data[i].exp_id + "," + data[i].vehicle_id + ")' title='Edit' ><i class='fa fa-pencil' style='color:#009ef7' ></i></a>&nbsp;<a onclick='delete_speedexpense(" + data[i].exp_id + "," + data[i].speedlimiter_id + ")'title='Delete' ><i class='fa fa-trash' style='color:#009ef7'></i></a></td></tr>");
                                                }

                                            }

                                        }

                                    });

                                },
                            });
                        } else {
                            $.ajax({
                                url: "<?php echo base_url() ?>Vehicle/update_speedlimiter_expense",
                                type: 'POST',
                                data: form_data,
                                dataType: "json",
                                processData: false,
                                contentType: false,
                                beforeSend: function() {},
                                success: function(data) {

                                    $.ajax({
                                        url: "<?php echo base_url() ?>Vehicle/get_speedlimiter_expense",
                                        type: 'post',
                                        dataType: "json",
                                        data: {
                                            id: idexp
                                        },
                                        success: function(data) {
                                            $("#speedpayment_attach tbody").empty();
                                            if (data != "0") {
                                                $("#payment_attach").show();
                                                for (var i = 0; i < data.length; i++) {

                                                    if (data[i].payment_slip != '') {
                                                        td = "<a href='<?php echo base_url() ?>expense_uploads/speedlimiter/" + data[i].payment_slip + "' target='_blank'>View</a>";
                                                    } else {
                                                        td = 'No Attachment';
                                                    }

                                                    $("#speedpayment_attach tbody").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[i].date + "</td><td>" + data[i].amount + "</td><td>" + data[i].tax_amt + "</td><td>" + data[i].total + "</td><td>" + td + "</td><td><a onclick='edit_speedexpense(" + data[i].exp_id + "," + data[i].vehicle_id + ")' title='Edit' ><i class='fa fa-pencil' style='color:#009ef7' ></i></a>&nbsp;<a onclick='delete_speedexpense(" + data[i].exp_id + "," + data[i].speedlimiter_id + ")'title='Delete' ><i class='fa fa-trash' style='color:#009ef7'></i></a></td></tr>");
                                                }

                                            }

                                        }

                                    });

                                },
                            });
                        }

                    } else {
                        alert('Please fill all required field !');
                    }


                });

                function delete_speedexpense(id, speedlimiter_id) {
                    if (confirm("Do you want to Delete this Expense?")) {
                        $.ajax({
                            method: "post",
                            url: '<?php echo base_url() ?>Vehicle/delete_speedlimiter_expense',
                            data: {
                                "id": id
                            },
                            dataType: "json",
                            success: function(data) {
                                if (data == "1")
                                    $.ajax({
                                        url: "<?php echo base_url() ?>Vehicle/get_speedlimiter_expense",
                                        type: 'post',
                                        dataType: "json",
                                        data: {
                                            id: speedlimiter_id
                                        },
                                        success: function(data) {
                                            $("#speedpayment_attach tbody").empty();
                                            if (data != "0") {
                                                $("#speedpayment_attach").show();
                                                for (var i = 0; i < data.length; i++) {
                                                    if (data[i].payment_slip != '') {
                                                        td = "<a href='<?php echo base_url() ?>expense_uploads/speedlimiter/" + data[i].payment_slip + "' target='_blank'>View</a>";
                                                    } else {
                                                        td = 'No Attachment';
                                                    }

                                                    $("#speedpayment_attach tbody").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[i].date + "</td><td>" + data[i].amount + "</td><td>" + data[i].tax_amt + "</td><td>" + data[i].total + "</td><td>" + td + "</td><td><a onclick='edit_speedexpense(" + data[i].exp_id + "," + data[i].vehicle_id + ")' title='Edit' ><i class='fa fa-pencil' style='color:#009ef7' ></i></a>&nbsp;<a onclick='delete_speedexpense(" + data[i].exp_id + "," + data[i].speedlimiter_id + ")'title='Delete' ><i class='fa fa-trash' style='color:#009ef7'></i></a></td></tr>");
                                                }

                                            }

                                        }

                                    });
                            }
                        });
                    }
                }

                function edit_speedexpense(id, vehicle_id) {


                    $.ajax({
                        url: "<?php echo base_url() ?>Vehicle/get_speedlimiter_expense_by_id",
                        type: 'post',
                        dataType: "json",
                        data: {
                            exp_id: id
                        },

                        success: function(data) {
                            console.log(data);
                            $('#speedexp_id').val(data.exp_id);
                            $('#speedamount').val(data.amount);
                            $('#speedtax_per').val(data.tax_per);
                            $('#speedtax_amt').val(data.tax_amt);
                            $('#speedtotal').val(data.total);
                            $('#speedpayment_mode').val(data.payment_mode);
                            $('#speedpayment_ref').val(data.payment_ref);
                            //$('#image_fileexpe').val(data.payment_slip);
                            $("#speedidexp").val(data.speedlimiter_id);

                        }

                    });
                }
                $('#updatespeedexpense').click(function(e) {
                    e.preventDefault();
                    var form_data = new FormData();
                    var exp_id = $("#speedexp_ide").val();
                    var amount = $('#speedamounte').val();
                    var tax_per = $("#speedtax_pere").val();
                    var tax_amt = $('#speedtax_amte').val();
                    var total = $("#speedtotale").val();
                    var payment_mode = $('#speedpayment_modee').val();
                    var payment_ref = $("#speedpayment_refe").val();
                    var image_file = $('#speedimage_fileexpe').prop("files")[0];
                    var speedlimiter_id = $("#speedidexpe").val();
                    var vid = $("#vid").val();
                    //
                    if (amount != "" && tax_per != "" && tax_amt != "" && total != "" && payment_mode != "" && payment_ref != "" && image_file != "") {
                        form_data.append("vid", vid);
                        form_data.append("amount", amount);
                        form_data.append("tax_per", tax_per);
                        form_data.append("tax_amt", tax_amt);
                        form_data.append("total", total);
                        form_data.append("payment_mode", payment_mode);
                        form_data.append("payment_ref", payment_ref);
                        form_data.append("image_file", image_file);
                        form_data.append("exp_id", exp_id);
                        $.ajax({
                            url: "<?php echo base_url() ?>Vehicle/update_speedlimiter_expense",
                            type: 'POST',
                            data: form_data,
                            dataType: "json",
                            processData: false,
                            contentType: false,
                            beforeSend: function() {},
                            success: function(data) {
                                $('#kt_modal_edit_speedexpense').modal('toggle');
                                $('#kt_modal_add_speedexpense').modal('toggle');
                                $.ajax({
                                    url: "<?php echo base_url() ?>Vehicle/get_speedlimiter_expense",
                                    type: 'post',
                                    dataType: "json",
                                    data: {
                                        id: speedlimiter_id
                                    },
                                    success: function(data) {
                                        $("#speedpayment_attach tbody").empty();
                                        if (data != "0") {
                                            $("#payment_attach").show();
                                            for (var i = 0; i < data.length; i++) {

                                                if (data[i].payment_slip != '') {
                                                    td = "<a href='<?php echo base_url() ?>expense_uploads/speedlimiter/" + data[i].payment_slip + "' target='_blank'>View</a>";
                                                } else {
                                                    td = 'No Attachment';
                                                }

                                                $("#speedpayment_attach tbody").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[i].date + "</td><td>" + data[i].amount + "</td><td>" + data[i].tax_amt + "</td><td>" + data[i].total + "</td><td>" + td + "</td><td><a onclick='edit_speedexpense(" + data[i].exp_id + "," + data[i].vehicle_id + ")' title='Edit' ><i class='fa fa-pencil' style='color:#009ef7' ></i></a>&nbsp;<a onclick='delete_speedexpense(" + data[i].exp_id + "," + data[i].speedlimiter_id + ")'title='Delete' ><i class='fa fa-trash' style='color:#009ef7'></i></a></td></tr>");
                                            }

                                        }

                                    }

                                });

                            },
                        });
                    } else {
                        alert('Please fill all required field !');
                    }
                    // }
                });

                function speedgetAmount() {
                    var amount = $("#speedamount").val();
                    var tax = $("#speedtax_per").val();
                    var taxam = (amount * tax) / 100;
                    var total = 0;
                    var total = parseFloat(amount) + parseFloat(taxam);
                    $("#speedtax_amt").val(taxam);
                    $("#speedtotal").val(parseFloat(total));;
                }

                function speedgetAmount1() {
                    var amount = $("#speedamountm").val();
                    var tax = $("#speedtax_perm").val();
                    var taxam = (amount * tax) / 100;
                    var total = 0;
                    var total = parseFloat(amount) + parseFloat(taxam);
                    $("#speedtax_amtm").val(taxam);
                    $("#speedtotalm").val(parseFloat(total));;
                }

                function speedgetAmount2() {
                    var amount = $("#speedamounte").val();
                    var tax = $("#speedtax_pere").val();
                    var taxam = (amount * tax) / 100;
                    var total = 0;
                    var total = parseFloat(amount) + parseFloat(taxam);
                    $("#speedtax_amte").val(taxam);
                    $("#speedtotale").val(parseFloat(total));;
                }
                // 		$('#certificate_issued').click(function() {

                // // Get the checkbox
                // 	if( $(this).is(':checked'))
                //   {

                // 	$('#cert_details').show();
                // 	} else {
                // 	  $('#cert_details').hide();
                // 	}
                //   });
                function submitgps() {
                    var form_data = new FormData();
                    var installation_date = $("#installation_date").val();
                    // 		if($('#certificate_issued').is(':checked'))
                    // 		{
                    var certificate_issued = '1';
                    // 		}
                    // 		else
                    // 		{
                    // 			var certificate_issued = '0';
                    // 		}
                    var gpsid = $("#gps_id").val();
                    var band_gps = $("#band_gps").val();
                    var type_gps = $("#type_gps").val();
                    var certificate_no = $("#certificate_no").val();
                    var certificate_date = $("#certificate_date").val();
                    var expiry_date = $("#gpsexpiry_date").val();
                    var vendor = $("#vendor").val();
                    var vid = '<?php echo $_GET['id']; ?>';
                    var amount = $('#amountgps').val();
                    var tax_per = $('#tax_pergps').val();
                    var tax_amt = $('#tax_amtgps').val();
                    var total = $('#totalgps').val();
                    var payment_mode = $('#payment_modegps').val();
                    var payment_ref = $('#payment_refgps').val();
                    var image_file = $('#image_fileexpgps').prop("files")[0];
                    //alert(gpsid);
                    if (installation_date != "" && vendor != "") {
                        form_data.append("vid", vid);
                        form_data.append("gpsid", gpsid);
                        form_data.append("certificate_no", certificate_no);
                        form_data.append("certificate_date", certificate_date);
                        form_data.append("expiry_date", expiry_date);
                        form_data.append("installation_date", installation_date);
                        form_data.append("certificate_issued", certificate_issued);
                        form_data.append("vendor", vendor);
                        form_data.append("amount", amount);
                        form_data.append("tax_per", tax_per);
                        form_data.append("tax_amt", tax_amt);
                        form_data.append("total", total);
                        form_data.append("payment_mode", payment_mode);
                        form_data.append("payment_ref", payment_ref);
                        form_data.append("image_file", image_file);
                        form_data.append("band_gps", band_gps);
                        form_data.append("type_gps", type_gps);
                        $.ajax({
                            url: '<?php echo base_url() ?>Master/add_gps',
                            type: 'POST',
                            data: form_data,
                            dataType: "json",
                            processData: false,
                            contentType: false,
                            beforeSend: function() {},
                            success: function(d) {
                                $("#certificate_no").val("");
                                $("#gps_id").val("");
                                $("#certificate_date").val("");
                                $("#gpsexpiry_date").val("");
                                $("#vendor").val("");
                                $('#is_paid_gps').prop('checked', false);
                                $('#amountgps').val("");
                                $('#tax_pergps').val("");
                                $('#tax_amtgps').val("");
                                $('#totalgps').val("");
                                $('#payment_modegps').val("");
                                $('#payment_refgps').val("");
                                $('#installation_date').val("");
                                $('#certificate_issued').prop('checked', false);
                                $("#band_gps").empty();
                                $("#band_gps").append('<option value="">Select</option>');

                                $("#band_gps").append('<option value="3G">3G</option>');
                                $("#band_gps").append('<option value="4G">4G</option>');
                                $("#band_gps").append('<option value="5G">5G</option>');
                                $("#type_gps").empty();
                                $("#type_gps").append('<option value="">Select</option>');

                                $("#type_gps").append('<option value="NORMAL">NORMAL</option>');
                                $("#type_gps").append('<option value="SECURPATH">SECURPATH</option>');
                                $("#type_gps").append('<option value="ASATEEL">ASATEEL</option>');
                                $('#kt_modal_add_gps').modal('toggle');
                                loaddetails();

                            },
                        });
                    } else {
                        alert("Please fill the Required Fields");
                    }
                }

                function delete_gps(id) {
                    if (confirm("Do you want to Delete this GPS?")) {
                        $.ajax({
                            method: "post",
                            url: '<?php echo base_url() ?>Master/delete_gps',
                            data: {
                                "id": id
                            },
                            dataType: "json",
                            success: function(data) {
                                if (data == "1")
                                    loaddetails();
                            }
                        });
                    }
                }

                function getAmountgps() {
                    var amount = $("#amountgps").val();
                    var tax = $("#tax_pergps").val();
                    var taxam = (amount * tax) / 100;
                    var total = 0;
                    var total = parseFloat(amount) + parseFloat(taxam);
                    $("#tax_amtgps").val(taxam);
                    $("#totalgps").val(parseFloat(total));;
                }
                $(document).on('click', '.btn_attribute_gps', function(e) {
                    e.preventDefault();
                    $subscription_id = $(this).attr('data-id');
                    $("#subscription_id").val($subscription_id);

                    $.ajax({
                        url: "<?php echo base_url() ?>Master/get_gps_attribute",
                        type: 'post',
                        dataType: "json",
                        data: {
                            subscription_id: $subscription_id
                        },

                        success: function(data) {

                            $('#kt_modal_add_attributegps').modal('toggle');
                            if (data != "0") {
                                $("#kt_table_attributes_gps tbody")
                                    .empty();
                                i = 0;
                                for (var key in data) {
                                    console.log(key);
                                    console.log(data[key]);
                                    $('#kt_table_attributes_gps tbody')
                                        .append('<tr><td>' + parseFloat(i + 1) + '</td><td>' + key + '</td><td>' + data[key] + '</td><td><button type="reset" class="btn btn-light-primary btn_edit" onclick="delete_attributes_gps(\'' + key + '\',' + $subscription_id + ')"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>');
                                    i++;
                                }


                            }
                        }

                    });

                });

                function add_attribute_gps() {
                    $a_name_salik = $("#a_name_gps").val();
                    $a_value_salik = $("#a_value_gps").val();
                    $subscription_id = $("#subscription_id").val();

                    if ($a_name_salik != "") {

                        $.ajax({
                            url: "<?php echo base_url() ?>Master/add_gps_attribute",
                            method: "POST",
                            data: {
                                a_name_salik: $a_name_salik,
                                a_value_salik: $a_value_salik,
                                subscription_id: $subscription_id
                            },
                            cache: false,
                            beforeSend: function() {},
                            success: function(data) {
                                $("#a_name_gps").val("");
                                $("#a_value_gps").val("");
                                $.ajax({
                                    url: "<?php echo base_url() ?>Master/get_gps_attribute",
                                    type: 'post',
                                    dataType: "json",
                                    data: {
                                        subscription_id: $subscription_id
                                    },

                                    success: function(data) {

                                        if (data != "0") {
                                            $("#kt_table_attributes_gps tbody")
                                                .empty();
                                            i = 0;
                                            for (var key in data) {
                                                console.log(key);
                                                console.log(data[key]);
                                                $('#kt_table_attributes_gps tbody')
                                                    .append('<tr><td>' + parseFloat(i + 1) + '</td><td>' + key + '</td><td>' + data[key] + '</td><td><button type="reset" class="btn btn-light-primary btn_edit" onclick="delete_attributes_gps(\'' + key + '\',' + $subscription_id + ')"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>');
                                                i++
                                            }


                                        }
                                    }

                                });


                            },
                        });
                    } else {
                        alert('Please fill all field !');
                    }
                }

                function delete_attributes_gps(details, id) {

                    if (confirm("Do you want to Delete this Attribute?")) {
                        $.ajax({
                            method: "post",
                            url: '<?php echo base_url() ?>Master/delete_gpsattributes',
                            data: {
                                "key": details,
                                "id": id
                            },
                            dataType: "json",
                            success: function(data) {

                                $.ajax({
                                    url: "<?php echo base_url() ?>Master/get_gps_attribute",
                                    type: 'post',
                                    dataType: "json",
                                    data: {
                                        subscription_id: id
                                    },

                                    success: function(data) {

                                        if (data != "0") {
                                            $("#kt_table_attributes_gps tbody")
                                                .empty();
                                            i = 0;
                                            for (var key in data) {
                                                console.log(key);
                                                console.log(data[key]);
                                                $('#kt_table_attributes_gps tbody')
                                                    .append('<tr><td>' + parseFloat(i + 1) + '</td><td>' + key + '</td><td>' + data[key] + '</td><td><button type="reset" class="btn btn-light-primary btn_edit" onclick="delete_attributes_gps(\'' + key + '\',' + id + ')"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>');
                                                i++
                                            }


                                        }
                                    }

                                });

                            }
                        });
                    }
                }

                function gps_notes(subscription_id) {
                    //alert(salik_tag_id);
                    $("#subscription_id_note").val(subscription_id);
                    $.ajax({
                        url: "<?php echo base_url() ?>Master/get_gpsnotes",
                        type: 'post',
                        dataType: "json",
                        data: {
                            subscription_id: subscription_id
                        },
                        success: function(data) {
                            $("#gpsnotetable").empty();
                            if (data != "0") {
                                for (var key in data) {
                                    $("#gpsnotetable").append("<div class='card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6'><div class='d-flex flex-column py-2'><div class='d-flex align-items-center fs-5 fw-bold mb-5'>" + data[key].heading + "</div><div class='fs-6 fw-semibold text-gray-600'>" + data[key].details + "</div></div><div class='d-flex align-items-center py-2'><button type='reset' class='btn btn-light-primary btn_edit' onclick='delete_note_gps(" + key + "," + subscription_id + ")'><i class='fa fa-trash' aria-hidden='true'></i></button></div></div></br>");
                                }
                            }
                        }

                    });
                    $('#kt_modal_add_notes_gps').modal('toggle');
                }

                function getinsert_gps_notes() {
                    var heading = $("#heading_gps").val();
                    var details = $("#details_gps").val();
                    var subscription_id = $("#subscription_id_note").val();

                    if (heading != "" && details != "") {
                        $.ajax({
                            method: "post",
                            url: '<?php echo base_url() ?>Master/addgpsnotes',
                            data: {
                                heading: heading,
                                details: details,
                                subscription_id: subscription_id
                            },
                            beforeSend: function() {},
                            success: function(d) {
                                $("#heading_gps").val("");
                                $("#details_gps").val("");
                                $.ajax({
                                    url: "<?php echo base_url() ?>Master/get_gpsnotes",
                                    type: 'post',
                                    dataType: "json",
                                    data: {
                                        subscription_id: subscription_id
                                    },
                                    success: function(data) {
                                        $("#gpsnotetable").empty();
                                        if (data != "0") {
                                            for (var key in data) {
                                                $("#gpsnotetable").append("<div class='card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6'><div class='d-flex flex-column py-2'><div class='d-flex align-items-center fs-5 fw-bold mb-5'>" + data[key].heading + "</div><div class='fs-6 fw-semibold text-gray-600'>" + data[key].details + "</div></div><div class='d-flex align-items-center py-2'><button type='reset' class='btn btn-light-primary btn_edit' onclick='delete_note_gps(" + key + "," + subscription_id + ")'><i class='fa fa-trash' aria-hidden='true'></i></button></div></div></br>");
                                            }
                                        }
                                    }

                                });
                            },
                        });
                    } else {
                        alert("Heading And Details Are Required");
                    }
                }

                function delete_note_gps(details, id) {
                    if (confirm("Do you want to Delete this Note?")) {
                        $.ajax({

                            method: "post",
                            url: '<?php echo base_url() ?>Master/deletenotegps',
                            data: {
                                "key": details,
                                "id": id
                            },
                            dataType: "json",
                            success: function(data) {

                                if (data == "1")
                                    $.ajax({
                                        url: "<?php echo base_url() ?>Master/get_gpsnotes",
                                        type: 'post',
                                        dataType: "json",
                                        data: {
                                            subscription_id: id
                                        },
                                        success: function(data) {
                                            $("#gpsnotetable").empty();
                                            if (data != "0") {
                                                for (var key in data) {
                                                    $("#gpsnotetable").append("<div class='card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6'><div class='d-flex flex-column py-2'><div class='d-flex align-items-center fs-5 fw-bold mb-5'>" + data[key].heading + "</div><div class='fs-6 fw-semibold text-gray-600'>" + data[key].details + "</div></div><div class='d-flex align-items-center py-2'><button type='reset' class='btn btn-light-primary btn_edit' onclick='delete_note_gps(" + key + "," + id + ")'><i class='fa fa-trash' aria-hidden='true'></i></button></div></div></br>");
                                                }
                                            }
                                        }

                                    });
                            }
                        });
                    }
                }
                $('#att_submit_gps').click(function(e) {
                    e.preventDefault();

                    var form_data = new FormData();
                    var file_data = $("#image_file_gps").prop("files")[0];
                    var attachment_type = $("#attachment_type_gps").val();
                    var subscription_id = $("#subscription_id_attach").val();
                    var attexpiry_date = $("#expiry_date_gps").val();
                    var vid = $("#vid").val();

                    if ($('#is_expiry_gps').is(':checked'))
                        var is_expiry = '1';
                    else
                        var is_expiry = '0';

                    if (attachment_type != '' && file_data != '') {
                        form_data.append("attachment_type", attachment_type);
                        form_data.append("file", file_data);
                        form_data.append("subscription_id", subscription_id);
                        form_data.append("is_expiry", is_expiry);
                        form_data.append("att_expiry", attexpiry_date);
                        form_data.append("vid", vid);
                        $.ajax({
                            url: "<?php echo base_url() ?>Master/add_gps_attachment",
                            type: 'POST',
                            data: form_data,
                            dataType: "json",
                            processData: false,
                            contentType: false,
                            beforeSend: function() {},
                            success: function(data) {
                                $("#attachment_type_gps").val("");
                                $("#expiry_date_gps").val("");
                                $("#image_file_gps").val("");
                                $('#is_expiry_gps').prop('checked', false);
                                $('#ex_date_gps').hide();
                                $.ajax({
                                    url: "<?php echo base_url() ?>Master/get_gps_attachment",
                                    type: 'post',
                                    dataType: "json",
                                    data: {
                                        subscription_id: subscription_id
                                    },
                                    success: function(data) {
                                        $("#gps_attach_table").empty();
                                        if (data != "0") {
                                            var i = 0;
                                            for (var key in data) {
                                                $("#gps_attach_table").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[key].type + "</td><td>" + data[key].expiry_date + "</td><td>" + data[key].ts + "</td><td><a href='<?php echo base_url() ?>vehicle_uploads/gps/" + data[key].filename + "' target='_blank'>View</a></td><td><a  type='button' class='btn btn-light-primary btn_edit' style='padding: 3px;font-size: 14px; 'onclick='delete_attachments_gps(" + key + "," + subscription_id + ")'><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>");
                                                i++;
                                            }
                                        }
                                    }

                                });
                            },
                        });
                    } else {
                        alert('Please fill required fields');
                    }

                });

                function open_attach_modal_gps(id) {
                    $("#subscription_id_attach").val(id);
                    $.ajax({
                        url: "<?php echo base_url() ?>Master/get_gps_attachment",
                        type: 'post',
                        dataType: "json",
                        data: {
                            subscription_id: id
                        },
                        success: function(data) {
                            $("#gps_attach_table").empty();
                            if (data != "0") {
                                var i = 0;
                                for (var key in data) {
                                    $("#gps_attach_table").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[key].type + "</td><td>" + data[key].expiry_date + "</td><td>" + data[key].ts + "</td><td><a href='<?php echo base_url() ?>vehicle_uploads/gps/" + data[key].filename + "' target='_blank'>View</a></td><td><a  type='button' class='btn btn-light-primary btn_edit' style='padding: 3px;font-size: 14px; 'onclick='delete_attachments_gps(" + key + "," + id + ")'><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>");
                                    i++;
                                }
                            }
                        }

                    });
                    $('#kt_modal_add_attachment_gps').modal('toggle');
                }

                function delete_attachments_gps(details, id) {
                    if (confirm("Do you want to Delete this Attachment?")) {
                        $.ajax({

                            method: "post",
                            url: '<?php echo base_url() ?>Master/deleteattachgps',
                            data: {
                                "key": details,
                                "id": id
                            },
                            dataType: "json",
                            success: function(data) {

                                if (data == "1")

                                    $.ajax({
                                        url: "<?php echo base_url() ?>Master/get_gps_attachment",
                                        type: 'post',
                                        dataType: "json",
                                        data: {
                                            subscription_id: id
                                        },
                                        success: function(data) {
                                            $("#gps_attach_table").empty();
                                            if (data != "0") {
                                                var i = 0;
                                                for (var key in data) {
                                                    $("#gps_attach_table").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[key].type + "</td><td>" + data[key].expiry_date + "</td><td>" + data[key].ts + "</td><td><a href='<?php echo base_url() ?>vehicle_uploads/gps/" + data[key].filename + "' target='_blank'>View</a></td><td><a  type='button' class='btn btn-light-primary btn_edit' style='padding: 3px;font-size: 14px; 'onclick='delete_attachments_gps(" + key + "," + id + ")'><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>");
                                                    i++;
                                                }
                                            }
                                        }

                                    });


                            }
                        });
                    }
                }
            </script>
            <script type="text/javascript">
                function open_insurance_expense_modal(id) {
                    $("#insuranceidexp").val(id);


                    $.ajax({
                        url: "<?php echo base_url() ?>Vehicle/get_insurance_expense",
                        type: 'post',
                        dataType: "json",
                        data: {
                            id: id
                        },

                        success: function(data) {
                            console.log(data);
                            if (data == "") {

                                $('#amountin').val("");
                                //	$('#tax_per').val("");
                                $('#tax_amtin').val("");
                                $('#totalin').val("");
                                $('#payment_modein').val("");
                                $('#payment_refin').val("");
                                $("#expense_heading").html("Add Expense");
                                $("#payment_attachin").hide();
                                $('#kt_modal_add_insurance_expense').modal('toggle');


                            } else {
                                $("#payment_attachin tbody").empty();
                                if (data != "0") {
                                    $("#payment_attachin").show();

                                    for (var i = 0; i < data.length; i++) {
                                        if (data[i].payment_slip != '') {
                                            td = "<a href='<?php echo base_url() ?>expense_uploads/insurance/" + data[i].payment_slip + "' target='_blank'>View</a>";
                                        } else {
                                            td = 'No Attachment';
                                        }

                                        $("#payment_attachin tbody").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[i].date + "</td><td>" + data[i].amount + "</td><td>" + data[i].tax_amt + "</td><td>" + data[i].total + "</td><td>" + td + "</td><td><a onclick='edit_expense_insurance(" + data[i].exp_id + "," + data[i].vehicle_id + ")' title='Edit' ><i class='fa fa-pencil' style='color:#009ef7' ></i></a>&nbsp;<a onclick='delete_insurance_expense(" + data[i].exp_id + "," + data[i].insurance_id + ")'title='Delete' ><i class='fa fa-trash' style='color:#009ef7'></i></a></td></tr>");

                                    }

                                }

                                $('#kt_modal_add_insurance_expense').modal('toggle');
                            }
                        }
                    });


                }

                function getAmountin() {
                    var amount = $("#amountin").val();
                    var tax = $("#tax_perin").val();
                    var taxam = (amount * tax) / 100;
                    var total = 0;
                    var total = parseFloat(amount) + parseFloat(taxam);
                    $("#tax_amtin").val(taxam);
                    $("#totalin").val(parseFloat(total));
                }
                $('#addinsuranceexpense').click(function(e) {
                    e.preventDefault();


                    var form_data = new FormData();
                    var exp_id = $("#exp_id_insurance").val();
                    var vid = $("#vid").val();
                    var insuranceidexp = $("#insuranceidexp").val();
                    var amount = $('#amountin').val();
                    var tax_per = $('#tax_perin').val();
                    var tax_amt = $('#tax_amtin').val();
                    var total = $('#totalin').val();
                    var payment_mode = $('#payment_modein').val();
                    var payment_ref = $('#payment_refin').val();
                    var image_file = $('#image_fileexpin').prop("files")[0];

                    if (amount != "" && tax_per != "" && tax_amt != "" && total != "" && payment_mode != "" && payment_ref != "" && image_file != "") {
                        form_data.append("vid", vid);
                        form_data.append("exp_id", exp_id);
                        form_data.append("insuranceidexp", insuranceidexp);
                        form_data.append("amount", amount);
                        form_data.append("tax_per", tax_per);
                        form_data.append("tax_amt", tax_amt);
                        form_data.append("total", total);
                        form_data.append("payment_mode", payment_mode);
                        form_data.append("payment_ref", payment_ref);
                        form_data.append("image_file", image_file);
                        if (exp_id == '') {
                            $.ajax({
                                url: "<?php echo base_url() ?>Vehicle/add_insurance_expense",
                                type: 'POST',
                                data: form_data,
                                dataType: "json",
                                processData: false,
                                contentType: false,
                                beforeSend: function() {},
                                success: function(data) {
                                    //console.log(data);
                                    $('#amountin').val('');
                                    //	$('#tax_per').val('');
                                    $('#tax_amtin').val('');
                                    $('#totalin').val('');
                                    $('#payment_modein').val('');
                                    $('#payment_refin').val('');
                                    $('#image_fileexpin').val('');
                                    $.ajax({
                                        url: "<?php echo base_url() ?>Vehicle/get_insurance_expense",
                                        type: 'post',
                                        dataType: "json",
                                        data: {
                                            id: insuranceidexp
                                        },
                                        success: function(data) {
                                            $("#payment_attachin tbody").empty();
                                            if (data != "0") {
                                                $("#payment_attachin").show();
                                                for (var i = 0; i < data.length; i++) {
                                                    if (data[i].payment_slip != '') {
                                                        td = "<a href='<?php echo base_url() ?>expense_uploads/insurance/" + data[i].payment_slip + "' target='_blank'>View</a>";
                                                    } else {
                                                        td = 'No Attachment';
                                                    }

                                                    $("#payment_attachin tbody").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[i].date + "</td><td>" + data[i].amount + "</td><td>" + data[i].tax_amt + "</td><td>" + data[i].total + "</td><td>" + td + "</td><td><a onclick='edit_expense_insurance(" + data[i].exp_id + "," + data[i].vehicle_id + ")' title='Edit' ><i class='fa fa-pencil' style='color:#009ef7' ></i></a>&nbsp;<a onclick='delete_insurance_expense(" + data[i].exp_id + "," + data[i].insurance_id + ")'title='Delete' ><i class='fa fa-trash' style='color:#009ef7'></i></a></td></tr>");
                                                }

                                            }

                                        }

                                    });

                                },
                            });
                        } else {
                            $.ajax({
                                url: "<?php echo base_url() ?>Vehicle/update_insurance_expense",
                                type: 'POST',
                                data: form_data,
                                dataType: "json",
                                processData: false,
                                contentType: false,
                                beforeSend: function() {},
                                success: function(data) {
                                    //console.log(data);
                                    $('#amountin').val('');
                                    //	$('#tax_per').val('');
                                    $('#tax_amtin').val('');
                                    $('#totalin').val('');
                                    $('#payment_modein').val('');
                                    $('#payment_refin').val('');
                                    $('#image_fileexpin').val('');
                                    $.ajax({
                                        url: "<?php echo base_url() ?>Vehicle/get_insurance_expense",
                                        type: 'post',
                                        dataType: "json",
                                        data: {
                                            id: insuranceidexp
                                        },
                                        success: function(data) {
                                            $("#payment_attachin tbody").empty();
                                            if (data != "0") {
                                                $("#payment_attachin").show();
                                                for (var i = 0; i < data.length; i++) {
                                                    if (data[i].payment_slip != '') {
                                                        td = "<a href='<?php echo base_url() ?>expense_uploads/insurance/" + data[i].payment_slip + "' target='_blank'>View</a>";
                                                    } else {
                                                        td = 'No Attachment';
                                                    }

                                                    $("#payment_attachin tbody").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[i].date + "</td><td>" + data[i].amount + "</td><td>" + data[i].tax_amt + "</td><td>" + data[i].total + "</td><td>" + td + "</td><td><a onclick='edit_expense_insurance(" + data[i].exp_id + "," + data[i].vehicle_id + ")' title='Edit' ><i class='fa fa-pencil' style='color:#009ef7' ></i></a>&nbsp;<a onclick='delete_insurance_expense(" + data[i].exp_id + "," + data[i].insurance_id + ")'title='Delete' ><i class='fa fa-trash' style='color:#009ef7'></i></a></td></tr>");
                                                }

                                            }

                                        }

                                    });

                                },
                            });
                        }

                    } else {
                        alert('Please fill all required field !');
                    }


                });

                function edit_expense_insurance(id, vehicle_id) {


                    $.ajax({
                        url: "<?php echo base_url() ?>Vehicle/get_insurance_expense_by_id",
                        type: 'post',
                        dataType: "json",
                        data: {
                            exp_id: id
                        },

                        success: function(data) {
                            console.log(data);
                            $('#exp_id_insurance').val(data.exp_id);
                            $('#amountin').val(data.amount);
                            $('#tax_perin').val(data.tax_per);
                            $('#tax_amtin').val(data.tax_amt);
                            $('#totalin').val(data.total);
                            $('#payment_modein').val(data.payment_mode);
                            $('#payment_refin').val(data.payment_ref);
                            //$('#image_fileexpe').val(data.payment_slip);
                            $("#insuranceidexp").val(data.insurance_id);

                        }

                    });
                }

                function delete_insurance_expense(id, insurance_id) {
                    if (confirm("Do you want to Delete this Expense?")) {
                        $.ajax({
                            method: "post",
                            url: '<?php echo base_url() ?>Vehicle/delete_insurance_expense',
                            data: {
                                "id": id
                            },
                            dataType: "json",
                            success: function(data) {
                                if (data == "1")
                                    $.ajax({
                                        url: "<?php echo base_url() ?>Vehicle/get_insurance_expense",
                                        type: 'post',
                                        dataType: "json",
                                        data: {
                                            id: insurance_id
                                        },
                                        success: function(data) {
                                            $("#payment_attachin tbody").empty();
                                            if (data != "0") {
                                                $("#payment_attachin").show();
                                                for (var i = 0; i < data.length; i++) {
                                                    if (data[i].payment_slip != '') {
                                                        td = "<a href='<?php echo base_url() ?>expense_uploads/insurance/" + data[i].payment_slip + "' target='_blank'>View</a>";
                                                    } else {
                                                        td = 'No Attachment';
                                                    }

                                                    $("#payment_attachin tbody").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[i].date + "</td><td>" + data[i].amount + "</td><td>" + data[i].tax_amt + "</td><td>" + data[i].total + "</td><td>" + td + "</td><td><a onclick='edit_expense_insurance(" + data[i].exp_id + "," + data[i].vehicle_id + ")' title='Edit' ><i class='fa fa-pencil' style='color:#009ef7' ></i></a>&nbsp;<a onclick='delete_insurance_expense(" + data[i].exp_id + "," + data[i].insurance_id + ")'title='Delete' ><i class='fa fa-trash' style='color:#009ef7'></i></a></td></tr>");
                                                }

                                            }

                                        }

                                    });
                            }
                        });
                    }
                }
            </script>
            <script type="text/javascript">
                function open_edit_gps_modal(id) {
                    // alert('hi');
                    $.ajax({
                        url: "<?php echo base_url() ?>Master/get_gps_byid",
                        type: 'post',
                        dataType: "json",
                        data: {
                            id: id
                        },
                        success: function(data) {
                            $("#installation_date").val(data.installation_date);
                            // 				 if (data.certificate_issued=='1')
                            // 					{
                            // 					    $( "#certificate_issued").prop('checked', true);
                            // 						$('#cert_details').show();
                            // 	$('#date_expiry').show();
                            // 					}
                            // 					else
                            // 					{
                            // 					    $( "#certificate_issued").prop('checked', false);
                            // 						$('#cert_details').hide();
                            // 	  $('#date_expiry').hide();
                            // 					}
                            $("#type_gps").html(data.type_gps);
                            $("#band_gps").html(data.band_gps);
                            $("#certificate_no").val(data.certificate_no);
                            $("#certificate_date").val(data.certificate_date);
                            $("#gpsexpiry_date").val(data.expiry_date);
                            $("#vendor").val(data.vendor);;
                            $("#gps_id").val(id);
                            $('#kt_modal_add_gps').modal('toggle');
                        }
                    });
                }
            </script>
            <script type="text/javascript">
                function open_gps_expense_modal(id) {
                    $("#idexp").val(id);
                    //	$('#kt_modal_add_expense').modal('toggle');

                    $.ajax({
                        url: "<?php echo base_url() ?>Master/get_gps_expense",
                        type: 'post',
                        dataType: "json",
                        data: {
                            id: id
                        },

                        success: function(data) {
                            console.log(data);
                            if (data == "") {

                                $('#amount').val("");
                                //$('#tax_per').val("");
                                $('#tax_amt').val("");
                                $('#total').val("");
                                $('#payment_mode').val("");
                                $('#payment_ref').val("");
                                $("#expense_heading").html("Add Expense");
                                $("#payment_attach").hide();
                                $('#kt_modal_add_gps_expense').modal('toggle');


                            } else {
                                $("#payment_attachgps tbody").empty();
                                if (data != "0") {
                                    $("#payment_attachgps").show();

                                    for (var i = 0; i < data.length; i++) {
                                        if (data[i].payment_slip != '') {
                                            td = "<a href='<?php echo base_url() ?>expense_uploads/gps/" + data[i].payment_slip + "' target='_blank'>View</a>";
                                        } else {
                                            td = 'No Attachment';
                                        }

                                        $("#payment_attachgps tbody").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[i].date + "</td><td>" + data[i].amount + "</td><td>" + data[i].tax_amt + "</td><td>" + data[i].total + "</td><td>" + td + "</td><td><a onclick='edit_gps_expense(" + data[i].exp_id + "," + data[i].vehicle_id + ")' title='Edit' ><i class='fa fa-pencil' style='color:#009ef7' ></i></a>&nbsp;<a onclick='delete_gps_expense(" + data[i].exp_id + "," + data[i].gps_id + ")'title='Delete' ><i class='fa fa-trash' style='color:#009ef7'></i></a></td></tr>");

                                    }

                                }

                                $('#kt_modal_add_gps_expense').modal('toggle');
                            }
                        }
                    });


                }

                function getAmountgp() {
                    var amount = $("#amountgp").val();
                    var tax = $("#tax_pergp").val();
                    var taxam = (amount * tax) / 100;
                    var total = 0;
                    var total = parseFloat(amount) + parseFloat(taxam);
                    $("#tax_amtgp").val(taxam);
                    $("#totalgp").val(parseFloat(total));
                }
                $('#addexpensegps').click(function(e) {
                    e.preventDefault();


                    var form_data = new FormData();
                    var vid = $("#vid").val();
                    var idexp = $("#idexp").val();
                    var amount = $('#amountgp').val();
                    var tax_per = $('#tax_pergp').val();
                    var tax_amt = $('#tax_amtgp').val();
                    var total = $('#totalgp').val();
                    var payment_mode = $('#payment_modegp').val();
                    var payment_ref = $('#payment_refgp').val();
                    var image_file = $('#image_fileexpgp').prop("files")[0];
                    var exp_id = $('#exp_id_gps').val();

                    if (amount != "" && tax_per != "" && tax_amt != "" && total != "" && payment_mode != "" && payment_ref != "" && image_file != "") {
                        form_data.append("vid", vid);
                        form_data.append("idexp", idexp);
                        form_data.append("amount", amount);
                        form_data.append("tax_per", tax_per);
                        form_data.append("tax_amt", tax_amt);
                        form_data.append("total", total);
                        form_data.append("payment_mode", payment_mode);
                        form_data.append("payment_ref", payment_ref);
                        form_data.append("image_file", image_file);
                        form_data.append("exp_id", exp_id);
                        if (exp_id == '') {
                            $.ajax({
                                url: "<?php echo base_url() ?>Master/add_gps_expense",
                                type: 'POST',
                                data: form_data,
                                dataType: "json",
                                processData: false,
                                contentType: false,
                                beforeSend: function() {},
                                success: function(data) {
                                    //console.log(data);
                                    $('#amountgp').val('');
                                    //$('#tax_per').val('');
                                    $('#tax_amtgp').val('');
                                    $('#totalgp').val('');
                                    $('#payment_modegp').val('');
                                    $('#payment_refgp').val('');
                                    $('#image_fileexpgp').val('');
                                    $.ajax({
                                        url: "<?php echo base_url() ?>Master/get_gps_expense",
                                        type: 'post',
                                        dataType: "json",
                                        data: {
                                            id: idexp
                                        },
                                        success: function(data) {
                                            $("#payment_attachgps tbody").empty();
                                            if (data != "0") {
                                                $("#payment_attachgps").show();
                                                for (var i = 0; i < data.length; i++) {
                                                    if (data[i].payment_slip != '') {
                                                        td = "<a href='<?php echo base_url() ?>expense_uploads/gps/" + data[i].payment_slip + "' target='_blank'>View</a>";
                                                    } else {
                                                        td = 'No Attachment';
                                                    }

                                                    $("#payment_attachgps tbody").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[i].date + "</td><td>" + data[i].amount + "</td><td>" + data[i].tax_amt + "</td><td>" + data[i].total + "</td><td>" + td + "</td><td><a onclick='edit_gps_expense(" + data[i].exp_id + "," + data[i].vehicle_id + ")' title='Edit' ><i class='fa fa-pencil' style='color:#009ef7' ></i></a>&nbsp;<a onclick='delete_gps_expense(" + data[i].exp_id + "," + data[i].gps_id + ")'title='Delete' ><i class='fa fa-trash' style='color:#009ef7'></i></a></td></tr>");
                                                }

                                            }

                                        }

                                    });

                                },
                            });
                        } else {
                            $.ajax({
                                url: "<?php echo base_url() ?>Master/update_gps_expense",
                                type: 'POST',
                                data: form_data,
                                dataType: "json",
                                processData: false,
                                contentType: false,
                                beforeSend: function() {},
                                success: function(data) {
                                    $.ajax({
                                        url: "<?php echo base_url() ?>Master/get_gps_expense",
                                        type: 'post',
                                        dataType: "json",
                                        data: {
                                            id: idexp
                                        },
                                        success: function(data) {
                                            $("#payment_attachgps tbody").empty();
                                            if (data != "0") {
                                                $("#payment_attachgps").show();
                                                for (var i = 0; i < data.length; i++) {
                                                    if (data[i].payment_slip != '') {
                                                        td = "<a href='<?php echo base_url() ?>expense_uploads/gps/" + data[i].payment_slip + "' target='_blank'>View</a>";
                                                    } else {
                                                        td = 'No Attachment';
                                                    }

                                                    $("#payment_attachgps tbody").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[i].date + "</td><td>" + data[i].amount + "</td><td>" + data[i].tax_amt + "</td><td>" + data[i].total + "</td><td>" + td + "</td><td><a onclick='edit_gps_expense(" + data[i].exp_id + "," + data[i].vehicle_id + ")' title='Edit' ><i class='fa fa-pencil' style='color:#009ef7' ></i></a>&nbsp;<a onclick='delete_gps_expense(" + data[i].exp_id + "," + data[i].gps_id + ")'title='Delete' ><i class='fa fa-trash' style='color:#009ef7'></i></a></td></tr>");
                                                }

                                            }

                                        }

                                    });

                                },
                            });
                        }


                    } else {
                        alert('Please fill all required field !');
                    }


                });

                function delete_gps_expense(id, gps_id) {
                    if (confirm("Do you want to Delete this Expense?")) {
                        $.ajax({
                            method: "post",
                            url: '<?php echo base_url() ?>Master/delete_gps_expense',
                            data: {
                                "id": id
                            },
                            dataType: "json",
                            success: function(data) {
                                if (data == "1")
                                    $.ajax({
                                        url: "<?php echo base_url() ?>Master/get_gps_expense",
                                        type: 'post',
                                        dataType: "json",
                                        data: {
                                            id: gps_id
                                        },
                                        success: function(data) {
                                            $("#payment_attachgps tbody").empty();
                                            if (data != "0") {
                                                $("#payment_attachgps").show();
                                                for (var i = 0; i < data.length; i++) {
                                                    if (data[i].payment_slip != '') {
                                                        td = "<a href='<?php echo base_url() ?>expense_uploads/gps/" + data[i].payment_slip + "' target='_blank'>View</a>";
                                                    } else {
                                                        td = 'No Attachment';
                                                    }

                                                    $("#payment_attachgps tbody").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[i].date + "</td><td>" + data[i].amount + "</td><td>" + data[i].tax_amt + "</td><td>" + data[i].total + "</td><td>" + td + "</td><td><a onclick='edit_gps_expense(" + data[i].exp_id + "," + data[i].vehicle_id + ")' title='Edit' ><i class='fa fa-pencil' style='color:#009ef7' ></i></a>&nbsp;<a onclick='delete_gps_expense(" + data[i].exp_id + "," + data[i].gps_id + ")'title='Delete' ><i class='fa fa-trash' style='color:#009ef7'></i></a></td></tr>");
                                                }

                                            }

                                        }

                                    });
                            }
                        });
                    }
                }

                function open_edit_modal_document(id) {
                    $("#document_heading").html("Edit Document");

                    $.ajax({
                        url: "<?php echo base_url() ?>Master/get_document_byid",
                        type: 'post',
                        dataType: "json",
                        data: {
                            id: id
                        },
                        success: function(data) {

                            $("#document_name").val(data.document_name);
                            $("#documentid").val(data.document_id);
                            $('#kt_modal_add_document').modal('toggle');

                        }
                    });
                }


                function edit_gps_expense(id, vehicle_id) {


                    $.ajax({
                        url: "<?php echo base_url() ?>Master/get_gps_expense_by_id",
                        type: 'post',
                        dataType: "json",
                        data: {
                            exp_id: id
                        },

                        success: function(data) {
                            console.log(data);
                            $('#exp_id_gps').val(data.exp_id);
                            $('#amountgp').val(data.amount);
                            $('#tax_pergp').val(data.tax_per);
                            $('#tax_amtgp').val(data.tax_amt);
                            $('#totalgp').val(data.total);
                            $('#payment_modegp').val(data.payment_mode);
                            $('#payment_refgp').val(data.payment_ref);
                            //$('#image_fileexpe').val(data.payment_slip);
                            $("#idexp").val(data.gps_id);
                            // $('#kt_modal_edit_expense').modal('toggle');
                        }

                    });
                }
                //passing
                function addpassingmodal() {
                    $("#passingdate").val("");
                    $("#expirypassing").val("");
                    $("#status").val("");


                    $('#kt_modal_add_passing').modal('toggle');
                }
                $('#insertpassing').click(function(e) {
                    e.preventDefault();

                    //alert(vid);

                    if ($('#is_paid').is(':checked')) {
                        var form_data = new FormData();
                        if ($('#is_finished').is(':checked'))
                            var is_finished = '1';
                        else
                            var is_finished = '0';

                        var status = $("#status").val();
                        var passing_date = $("#passingdate").val();
                        var expirypass = $("#expirypassing").val();
                        var vendor_name = $("#vendor_name").val();
                        var passing_attachment = $('#passing_attachment').prop("files")[0];
                        var vid = $("#vid").val();
                        var amount = $('#amountm').val();
                        var tax_per = $('#tax_perm').val();
                        var tax_amt = $('#tax_amtm').val();
                        var total = $('#totalm').val();
                        var payment_mode = $('#payment_modem').val();
                        var payment_ref = $('#payment_refm').val();
                        var image_file = $('#image_fileexpm').prop("files")[0];

                        if (passing_date != "" && expirypass != "" && amount != "" && tax_per != "" && tax_amt != "" && total != "" && payment_mode != "" && payment_ref != "" && image_file != "") {
                            form_data.append("is_finished", is_finished);
                            form_data.append("status", status);
                            form_data.append("passing_attachment", passing_attachment);
                            form_data.append("vendor_name", vendor_name);
                            form_data.append("passing_date", passing_date);
                            form_data.append("expirypass", expirypass);
                            form_data.append("vid", vid);
                            form_data.append("amount", amount);
                            form_data.append("tax_per", tax_per);
                            form_data.append("tax_amt", tax_amt);
                            form_data.append("total", total);
                            form_data.append("payment_mode", payment_mode);
                            form_data.append("payment_ref", payment_ref);
                            form_data.append("image_file", image_file);

                            $.ajax({
                                url: "<?php echo base_url() ?>Master/save_passing",
                                type: 'POST',
                                data: form_data,
                                dataType: "json",
                                processData: false,
                                contentType: false,
                                beforeSend: function() {},
                                success: function(data) {
                                    // var dataResult = JSON.parse(data);
                                    if (data == "1") {
                                        $('#is_paid').prop('checked', false);
                                        $('#expense').hide();
                                        $('#is_finished').prop('checked', false);
                                        $("#passingdate").val("");
                                        $("#expirypassing").val("");
                                        $("#status").val("");
                                        $('#kt_modal_add_passing').modal('toggle');

                                        loaddetails();


                                    } else {
                                        alert("Insertion Failed");
                                    }

                                }
                            });
                        } else {
                            alert('Please fill all required field !');
                        }
                    } else {
                        var form_data = new FormData();
                        if ($('#is_finished').is(':checked'))
                            var is_finished = '1';
                        else
                            var is_finished = '0';
                        var vendor_name = $("#vendor_name").val();
                        var passing_attachment = $('#passing_attachment').prop("files")[0];
                        var status = $("#status").val();
                        var passing_date = $("#passingdate").val();
                        var expirypass = $("#expirypassing").val();
                        var vid = $("#vid").val();


                        if (vendor_name != "" && passing_date != "" && expirypass != "") {
                            form_data.append("passing_attachment", passing_attachment);
                            form_data.append("vendor_name", vendor_name);
                            form_data.append("is_finished", is_finished);
                            form_data.append("status", status);
                            form_data.append("passing_date", passing_date);
                            form_data.append("expirypass", expirypass);
                            form_data.append("vid", vid);


                            $.ajax({
                                url: "<?php echo base_url() ?>Master/save_passing",
                                type: 'POST',
                                data: form_data,
                                dataType: "json",
                                processData: false,
                                contentType: false,
                                beforeSend: function() {},
                                success: function(data) {
                                    // var dataResult = JSON.parse(data);
                                    if (data == "1") {
                                        $('#is_paid').prop('checked', false);
                                        $('#expense').hide();
                                        $('#is_finished').prop('checked', false);
                                        $("#passingdate").val("");
                                        $("#expirypassing").val("");
                                        $("#status").val("");
                                        $('#kt_modal_add_passing').modal('toggle');

                                        loaddetails();

                                    } else {
                                        alert("Insertion Failed");
                                    }

                                }
                            });
                        } else {
                            alert('Please fill all required field !');
                        }
                    }
                });

                function open_passing_expense_modal(id) {
                    $("#idexp").val(id);
                    //	$('#kt_modal_add_expense').modal('toggle');

                    $.ajax({
                        url: "<?php echo base_url() ?>Master/get_passing_expense",
                        type: 'post',
                        dataType: "json",
                        data: {
                            id: id
                        },

                        success: function(data) {
                            console.log(data);
                            if (data == "") {

                                $('#amount').val("");
                                //	$('#tax_per').val("");
                                $('#tax_amt').val("");
                                $('#total').val("");
                                $('#payment_mode').val("");
                                $('#payment_ref').val("");
                                $("#expense_heading").html("Add Expense");
                                $("#payment_attach").hide();
                                $('#kt_modal_add_expense').modal('toggle');


                            } else {
                                $("#payment_attach tbody").empty();
                                if (data != "0") {
                                    $("#payment_attach").show();

                                    for (var i = 0; i < data.length; i++) {
                                        if (data[i].payment_slip != '') {
                                            td = "<a href='<?php echo base_url() ?>expense_uploads/passing/" + data[i].payment_slip + "' target='_blank'>View</a>";
                                        } else {
                                            td = 'No Attachment';
                                        }

                                        $("#payment_attach tbody").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[i].date + "</td><td>" + data[i].amount + "</td><td>" + data[i].tax_amt + "</td><td>" + data[i].total + "</td><td>" + td + "</td><td><a onclick='edit_expense(" + data[i].exp_id + "," + data[i].vehicle_id + ")' title='Edit' ><i class='fa fa-pencil' style='color:#009ef7' ></i></a>&nbsp;<a onclick='delete_expense(" + data[i].exp_id + "," + data[i].passing_id + ")'title='Delete' ><i class='fa fa-trash' style='color:#009ef7'></i></a></td></tr>");

                                    }

                                }

                                $('#kt_modal_add_expense').modal('toggle');
                            }
                        }
                    });


                }
                $('#addexpense').click(function(e) {
                    e.preventDefault();


                    var form_data = new FormData();
                    var vid = $("#vid").val();
                    var idexp = $("#idexp").val();
                    var amount = $('#amount').val();
                    var tax_per = $('#tax_per').val();
                    var tax_amt = $('#tax_amt').val();
                    var total = $('#total').val();
                    var payment_mode = $('#payment_mode').val();
                    var payment_ref = $('#payment_ref').val();
                    var image_file = $('#image_fileexp').prop("files")[0];

                    if (amount != "" && tax_per != "" && tax_amt != "" && total != "" && payment_mode != "" && payment_ref != "" && image_file != "") {
                        form_data.append("vid", vid);
                        form_data.append("idexp", idexp);
                        form_data.append("amount", amount);
                        form_data.append("tax_per", tax_per);
                        form_data.append("tax_amt", tax_amt);
                        form_data.append("total", total);
                        form_data.append("payment_mode", payment_mode);
                        form_data.append("payment_ref", payment_ref);
                        form_data.append("image_file", image_file);

                        $.ajax({
                            url: "<?php echo base_url() ?>Master/add_passing_expense",
                            type: 'POST',
                            data: form_data,
                            dataType: "json",
                            processData: false,
                            contentType: false,
                            beforeSend: function() {},
                            success: function(data) {
                                //console.log(data);
                                $('#amount').val('');
                                //$('#tax_per').val('');
                                $('#tax_amt').val('');
                                $('#total').val('');
                                $('#payment_mode').val('');
                                $('#payment_ref').val('');
                                $('#image_fileexp').val('');
                                $.ajax({
                                    url: "<?php echo base_url() ?>Master/get_passing_expense",
                                    type: 'post',
                                    dataType: "json",
                                    data: {
                                        id: idexp
                                    },
                                    success: function(data) {
                                        $("#payment_attach tbody").empty();
                                        if (data != "0") {
                                            $("#payment_attach").show();
                                            for (var i = 0; i < data.length; i++) {
                                                if (data[i].payment_slip != '') {
                                                    td = "<a href='<?php echo base_url() ?>expense_uploads/passing/" + data[i].payment_slip + "' target='_blank'>View</a>";
                                                } else {
                                                    td = 'No Attachment';
                                                }

                                                $("#payment_attach tbody").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[i].date + "</td><td>" + data[i].amount + "</td><td>" + data[i].tax_amt + "</td><td>" + data[i].total + "</td><td>" + td + "</td><td><a onclick='edit_expense(" + data[i].exp_id + "," + data[i].vehicle_id + ")' title='Edit' ><i class='fa fa-pencil' style='color:#009ef7' ></i></a>&nbsp;<a onclick='delete_expense(" + data[i].exp_id + "," + data[i].passing_id + ")'title='Delete' ><i class='fa fa-trash' style='color:#009ef7'></i></a></td></tr>");
                                            }

                                        }

                                    }

                                });

                            },
                        });
                    } else {
                        alert('Please fill all required field !');
                    }


                });

                function delete_expense(id, passing_id) {
                    if (confirm("Do you want to Delete this Expense?")) {
                        $.ajax({
                            method: "post",
                            url: '<?php echo base_url() ?>Master/delete_passing_expense',
                            data: {
                                "id": id
                            },
                            dataType: "json",
                            success: function(data) {
                                if (data == "1")
                                    $.ajax({
                                        url: "<?php echo base_url() ?>Master/get_passing_expense",
                                        type: 'post',
                                        dataType: "json",
                                        data: {
                                            id: passing_id
                                        },
                                        success: function(data) {
                                            $("#payment_attach tbody").empty();
                                            if (data != "0") {
                                                $("#payment_attach").show();
                                                for (var i = 0; i < data.length; i++) {
                                                    if (data[i].payment_slip != '') {
                                                        td = "<a href='<?php echo base_url() ?>expense_uploads/passing/" + data[i].payment_slip + "' target='_blank'>View</a>";
                                                    } else {
                                                        td = 'No Attachment';
                                                    }

                                                    $("#payment_attach tbody").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[i].date + "</td><td>" + data[i].amount + "</td><td>" + data[i].tax_amt + "</td><td>" + data[i].total + "</td><td>" + td + "</td><td><a onclick='edit_expense(" + data[i].exp_id + "," + data[i].vehicle_id + ")' title='Edit' ><i class='fa fa-pencil' style='color:#009ef7' ></i></a>&nbsp;<a onclick='delete_expense(" + data[i].exp_id + "," + data[i].passing_id + ")'title='Delete' ><i class='fa fa-trash' style='color:#009ef7'></i></a></td></tr>");
                                                }

                                            }

                                        }

                                    });
                            }
                        });
                    }
                }

                function edit_expense(id, vehicle_id) {

                    $('#kt_modal_add_expense').modal('toggle');
                    $.ajax({
                        url: "<?php echo base_url() ?>Master/get_passing_expense_by_id",
                        type: 'post',
                        dataType: "json",
                        data: {
                            exp_id: id
                        },

                        success: function(data) {
                            console.log(data);
                            $('#exp_ide').val(data.exp_id);
                            $('#amounte').val(data.amount);
                            $('#tax_pere').val(data.tax_per);
                            $('#tax_amte').val(data.tax_amt);
                            $('#totale').val(data.total);
                            $('#payment_modee').val(data.payment_mode);
                            $('#payment_refe').val(data.payment_ref);
                            //$('#image_fileexpe').val(data.payment_slip);
                            $("#idexpe").val(data.passing_id);
                            $('#kt_modal_edit_expense').modal('toggle');
                        }

                    });
                }
                $('#updateexpense').click(function(e) {
                    e.preventDefault();
                    var form_data = new FormData();
                    var exp_id = $("#exp_ide").val();
                    var amount = $('#amounte').val();
                    var tax_per = $("#tax_pere").val();
                    var tax_amt = $('#tax_amte').val();
                    var total = $("#totale").val();
                    var payment_mode = $('#payment_modee').val();
                    var payment_ref = $("#payment_refe").val();
                    var image_file = $('#image_fileexpe').prop("files")[0];
                    var passing_id = $("#idexpe").val();
                    var vid = $("#vid").val();
                    //
                    if (amount != "" && tax_per != "" && tax_amt != "" && total != "" && payment_mode != "" && payment_ref != "" && image_file != "") {
                        form_data.append("vid", vid);
                        form_data.append("amount", amount);
                        form_data.append("tax_per", tax_per);
                        form_data.append("tax_amt", tax_amt);
                        form_data.append("total", total);
                        form_data.append("payment_mode", payment_mode);
                        form_data.append("payment_ref", payment_ref);
                        form_data.append("image_file", image_file);
                        form_data.append("exp_id", exp_id);
                        $.ajax({
                            url: "<?php echo base_url() ?>Master/update_passing_expense",
                            type: 'POST',
                            data: form_data,
                            dataType: "json",
                            processData: false,
                            contentType: false,
                            beforeSend: function() {},
                            success: function(data) {
                                $('#kt_modal_edit_expense').modal('toggle');
                                $('#kt_modal_add_expense').modal('toggle');
                                $.ajax({
                                    url: "<?php echo base_url() ?>Master/get_passing_expense",
                                    type: 'post',
                                    dataType: "json",
                                    data: {
                                        id: passing_id
                                    },
                                    success: function(data) {
                                        $("#payment_attach tbody").empty();
                                        if (data != "0") {
                                            $("#payment_attach").show();
                                            for (var i = 0; i < data.length; i++) {

                                                if (data[i].payment_slip != '') {
                                                    td = "<a href='<?php echo base_url() ?>expense_uploads/passing/" + data[i].payment_slip + "' target='_blank'>View</a>";
                                                } else {
                                                    td = 'No Attachment';
                                                }

                                                $("#payment_attach tbody").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[i].date + "</td><td>" + data[i].amount + "</td><td>" + data[i].tax_amt + "</td><td>" + data[i].total + "</td><td>" + td + "</td><td><a onclick='edit_expense(" + data[i].exp_id + "," + data[i].vehicle_id + ")' title='Edit' ><i class='fa fa-pencil' style='color:#009ef7' ></i></a>&nbsp;<a onclick='delete_expense(" + data[i].exp_id + "," + data[i].passing_id + ")'title='Delete' ><i class='fa fa-trash' style='color:#009ef7'></i></a></td></tr>");
                                            }

                                        }

                                    }

                                });

                            },
                        });
                    } else {
                        alert('Please fill all required field !');
                    }
                    // }
                });
            </script>
            <script type="text/javascript">
                function getAmount() {
                    var amount = $("#amount").val();
                    var tax = $("#tax_per").val();
                    var taxam = (amount * tax) / 100;
                    var total = 0;
                    var total = parseFloat(amount) + parseFloat(taxam);
                    $("#tax_amt").val(taxam);
                    $("#total").val(total).toFixed(2);
                }
            </script>
            <script type="text/javascript">
                function getAmount1() {
                    var amount = $("#amountm").val();
                    var tax = $("#tax_perm").val();
                    var taxam = (amount * tax) / 100;
                    var total = 0;
                    var total = parseFloat(amount) + parseFloat(taxam);
                    $("#tax_amtm").val(taxam);
                    $("#totalm").val(total).toFixed(2);
                }
            </script>
            <script type="text/javascript">
                function getAmount2() {
                    var amount = $("#amounte").val();
                    var tax = $("#tax_pere").val();
                    var taxam = (amount * tax) / 100;
                    var total = 0;
                    var total = parseFloat(amount) + parseFloat(taxam);
                    $("#tax_amte").val(taxam);
                    $("#totale").val(total).toFixed(2);
                }

                function open_passing_attach_modal(id) {
                    $("#passing_id").val(id);
                    $.ajax({
                        url: "<?php echo base_url() ?>Master/get_passingattaches",
                        type: 'post',
                        dataType: "json",
                        data: {
                            vid: id
                        },
                        success: function(data) {
                            $("#passatlist").empty();
                            if (data != "0") {
                                var i = 0;
                                for (var key in data) {
                                    $("#passatlist").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[key].attachment_type + "</td><td>" + data[key].att_expiry + "</td><td>" + data[key].ts + "</td><td><a href='<?php echo base_url() ?>vehicle_uploads/passing/" + data[key].file_name + "' target='_blank'>View</a></td><td><a  type='button' class='btn btn-light-primary btn_edit' style='padding: 3px;font-size: 14px; 'onclick='delete_passing_attachments(" + key + "," + id + ")'><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>");
                                    i++;
                                }
                            }
                        }

                    });
                    $("#attachment_type").val("");
                    $("#attexpiry_date").val("");
                    $("#image_file").val("");
                    $('#kt_modal_add_attachment_passing').modal('toggle');
                }
            </script>
            <script type="text/javascript">
                $('#passing_attachment_submit').click(function(e) {
                    e.preventDefault();
                    // expiry_date mulkis_expiry mulkimage_file attmulk_type mulkexpiry_date mulkiyaidat
                    // alert("hiii");
                    var form_data = new FormData();
                    var file_data = $("#pass_image_file").prop("files")[0];
                    var attachment_type = $("#pass_attachment_type").val();
                    var vid = $("#passing_id").val();
                    var attexpiry_date = $("#pass_expiry_date").val();
                    if ($('#pass_is_expiry').is(':checked'))
                        var is_expiry = '1';
                    else
                        var is_expiry = '0';
                    if (attachment_type != '' && file_data != '') {
                        form_data.append("attachment_type", attachment_type);
                        form_data.append("file", file_data);
                        form_data.append("vid", vid);
                        form_data.append("is_expiry", is_expiry);
                        form_data.append("att_expiry", attexpiry_date);
                        $.ajax({
                            url: "<?php echo base_url() ?>Master/add_attachmentpassing",
                            type: 'POST',
                            data: form_data,
                            dataType: "json",
                            processData: false,
                            contentType: false,
                            //   beforeSend:function(){
                            // 	},
                            success: function(data) {
                                $("#pass_attachment_type").val("");
                                $("#pass_attexpiry_date").val("");
                                $("#pass_image_file").val("");
                                $("#passing_id").val("");
                                $('#pass_is_expiry').prop('checked', false);
                                $('#pass_ex_date').hide();
                                $.ajax({
                                    url: "<?php echo base_url() ?>Master/get_passingattaches",
                                    type: 'post',
                                    dataType: "json",
                                    data: {
                                        vid: vid
                                    },
                                    success: function(data) {
                                        $("#passatlist").empty();
                                        if (data != "0") {
                                            var i = 0;
                                            for (var key in data) {
                                                $("#passatlist").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[key].attachment_type + "</td><td>" + data[key].att_expiry + "</td><td>" + data[key].ts + "</td><td><a href='<?php echo base_url() ?>vehicle_uploads/passing/" + data[key].file_name + "' target='_blank'>View</a></td><td><a  type='button' class='btn btn-light-primary btn_edit' style='padding: 3px;font-size: 14px; 'onclick='delete_passing_attachments(" + key + "," + vid + ")'><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>");
                                                i++;
                                            }
                                        }
                                    }

                                });

                            },
                        });
                    } else {
                        alert('Please fill the required fields');
                    }
                });
                $('#pass_is_expiry').click(function() {

                    // Get the checkbox
                    if ($(this).is(':checked')) {

                        $('#pass_ex_date').show();
                    } else {
                        $('#pass_ex_date').hide();
                    }
                });

                function delete_passing_attachments(details, id) {
                    if (confirm("Do you want to Delete this Attachment?")) {
                        $.ajax({

                            method: "post",
                            url: '<?php echo base_url() ?>Master/deleteattachpassing',
                            data: {
                                "key": details,
                                "id": id
                            },
                            dataType: "json",
                            success: function(data) {

                                if (data == "1")

                                    $.ajax({
                                        url: "<?php echo base_url() ?>Master/get_passingattaches",
                                        type: 'post',
                                        dataType: "json",
                                        data: {
                                            vid: id
                                        },
                                        success: function(data) {
                                            $("#passatlist").empty();
                                            if (data != "0") {
                                                var i = 0;
                                                for (var key in data) {
                                                    $("#passatlist").append("<tr><td>" + parseFloat(i + 1) + "</td><td>" + data[key].attachment_type + "</td><td>" + data[key].att_expiry + "</td><td>" + data[key].ts + "</td><td><a href='<?php echo base_url() ?>vehicle_uploads/passing/" + data[key].file_name + "' target='_blank'>View</a></td><td><a  type='button' class='btn btn-light-primary btn_edit' style='padding: 3px;font-size: 14px; 'onclick='delete_passing_attachments(" + key + "," + id + ")'><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>");
                                                    i++;
                                                }
                                            }
                                        }

                                    });


                            }
                        });
                    }
                }

                function delete_passing(id) {
                    if (confirm("Do you want to Delete this Passing?")) {
                        $.ajax({
                            method: "post",
                            url: '<?php echo base_url() ?>Master/deletepassing',
                            data: {
                                "id": id
                            },
                            dataType: "json",
                            success: function(data) {
                                if (data == "1")
                                    loaddetails();
                            }
                        });
                    }
                }

                function open_passing_edit_modal(id) {
                    $.ajax({
                        url: "<?php echo base_url() ?>Master/get_passing_byid",
                        type: 'post',
                        dataType: "json",
                        data: {
                            id: id
                        },
                        success: function(data) {

                            $("#passingdateE").val(data.passing_date);
                            $("#expirypassingE").val(data.expiry_date);
                            $("#statusE").val(data.status);
                            $("#passid").val(id);
                            if (data.is_finished == '1') {
                                $("#is_finishedE").prop('checked', true);
                            } else {
                                $("#is_finishedE").prop('checked', false);
                            }
                            $('#kt_modal_edit_passing').modal('toggle');
                        }
                    });
                }

                function updatepassing() {
                    var passdatee = $("#passingdateE").val();
                    var expirydatee = $("#expirypassingE").val();
                    var statuse = $("#statusE").val();
                    if ($('#is_finishedE').is(':checked'))
                        var is_finishede = '1';
                    else
                        var is_finishede = '0';
                    var passid = $("#passid").val();
                    // alert(vid);
                    // if(mulkdate!="" && tcnomulk!="" && expirymulk!=""){
                    $.ajax({
                        method: "post",
                        url: '<?php echo base_url() ?>Master/update_passing',
                        data: {
                            "passdatee": passdatee,
                            "expirydatee": expirydatee,
                            "statuse": statuse,
                            "passid": passid,
                            "is_finishede": is_finishede
                        },
                        dataType: "json",
                        success: function(data) {
                            // var dataResult = JSON.parse(data);
                            if (data == "1") {
                                $("#passingdateE").val("");
                                $("#expirypassingE").val("");
                                $("#statusE").val("");
                                $('#kt_modal_edit_passing').modal('toggle');

                                loaddetails();

                            } else {
                                alert("passing Updation Failed");
                            }

                        }
                    });
                    // }
                    // else{
                    // 	alert("Mulkiya date,TC Number and Expiry Date Are Mandatory");
                    // }
                }
            </script>