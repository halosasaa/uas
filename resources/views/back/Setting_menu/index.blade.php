
        @extends("back/layouts.layout")
        @section("content")
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            {{-- <div class="row">
              <div class="col-lg-12 margin-tb">
                  <div class="card">
                      <div class="card-body">
                          @can("product-create")
                              <a class="btn btn-success" href="{{ route("setting_menu.create") }}"> Create New Setting_menu</a>
                          @endcan
        
                      </div>
                  </div>
              </div>
          </div> --}}
        
          <!--begin::Main-->
          <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
              <!--begin::Toolbar-->
              <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                  <!--begin::Page title-->
                  <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">SETTING MENU LIST</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                      <!--begin::Item-->
                      <li class="breadcrumb-item text-muted">
                        <a href="{{url("")}}" class="text-muted text-hover-primary">Home</a>
                      </li>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                      </li>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <li class="breadcrumb-item text-muted">SETTING MENU</li>
                      <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                  </div>
                  <!--end::Page title-->
                  <!--begin::Actions-->
                  <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Filter menu-->
                    <div class="m-0">
                      <!--begin::Menu toggle-->
                      <a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                      <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                      </i>Filter</a>
                      <!--end::Menu toggle-->
                      <!--begin::Menu 1-->
                      <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_641ac41e77927">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                          <div class="fs-5 text-dark fw-bold">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                          <!--begin::Input group-->
                          <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-semibold">Status:</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div>
                              <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_641ac41e77927" data-allow-clear="true">
                                <option></option>
                                <option value="1">Approved</option>
                                <option value="2">Pending</option>
                                <option value="2">In Process</option>
                                <option value="2">Rejected</option>
                              </select>
                            </div>
                            <!--end::Input-->
                          </div>
                          <!--end::Input group-->
                          <!--begin::Input group-->
                          <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-semibold">Member Type:</label>
                            <!--end::Label-->
                            <!--begin::Options-->
                            <div class="d-flex">
                              <!--begin::Options-->
                              <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="checkbox" value="1" />
                                <span class="form-check-label">Author</span>
                              </label>
                              <!--end::Options-->
                              <!--begin::Options-->
                              <label class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                <span class="form-check-label">Customer</span>
                              </label>
                              <!--end::Options-->
                            </div>
                            <!--end::Options-->
                          </div>
                          <!--end::Input group-->
                          <!--begin::Input group-->
                          <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-semibold">Notifications:</label>
                            <!--end::Label-->
                            <!--begin::Switch-->
                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                              <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                              <label class="form-check-label">Enabled</label>
                            </div>
                            <!--end::Switch-->
                          </div>
                          <!--end::Input group-->
                          <!--begin::Actions-->
                          <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                          </div>
                          <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                      </div>
                      <!--end::Menu 1-->
                    </div>
                    <!--end::Filter menu-->
                    <!--begin::Secondary button-->
                    <!--end::Secondary button-->
                    <!--begin::Primary button-->
                    {{-- <a href="#" class="btn btn-sm fw-bold btn-info" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a> --}}
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_Setting_menu">
                      <i class="ki-duotone ki-plus "></i>Add SETTING MENU</button>
                    <!--end::Primary button-->
                  </div>
                  <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
              </div>
              <!--end::Toolbar-->
        
              <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++begin::Modal - Add task-->
              <div class="modal fade" id="kt_modal_add_Setting_menu" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                  <!--begin::Modal content-->
                  <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header" id="kt_modal_add_Setting_menu_header">
                      <!--begin::Modal title-->
                      <h2 class="fw-bold">ADD SETTING MENU</h2>
                      <!--end::Modal title-->
                      <!--begin::Close-->
                      <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" data-kt-Setting_menus-modal-action="close">
                        <i class="ki-duotone ki-cross fs-1">
                          <span class="path1"></span>
                          <span class="path2"></span>
                        </i>
                      </div>
                      <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                      <!--begin::Form-->
                      {!! Form::open(array("route" => "setting_menu.store","method"=>"POST","enctype"=>"multipart/form-data")) !!}
                      {{-- <form id="kt_modal_add_Setting_menu_form" class="form" action="#"> --}}
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_Setting_menu_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_Setting_menu_header" data-kt-scroll-wrappers="#kt_modal_add_Setting_menu_scroll" data-kt-scroll-offset="300px">
                         
                          
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">MENU NAME</label>
                <!--end::Label-->
                <!--begin::Input-->
                {!! Form::text("menu_name", null, array("placeholder" => "MENU NAME","class" => "form-control form-control-solid mb-3 mb-lg-0")) !!}
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">MENU LABEL</label>
                <!--end::Label-->
                <!--begin::Input-->
                {!! Form::text("menu_label", null, array("placeholder" => "MENU LABEL","class" => "form-control form-control-solid mb-3 mb-lg-0")) !!}
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">MENU URL</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" name="menu_url" class="form-control form-control-sm form-control-solid" placeholder="menu_url" value="" />
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">MENU COLOR</label>
                <!--end::Label-->
                <!--begin::Input-->
                {!! Form::text("menu_color", null, array("placeholder" => "MENU COLOR","class" => "form-control form-control-solid mb-3 mb-lg-0")) !!}
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
                <!--begin::Input group-->
                <div class="fv-row mb-7">
                  <!--begin::Label-->
                  <label class=" fw-semibold fs-6 mb-2">MENU PARENT</label>
                  <!--end::Label-->
                  <!--begin::Input-->
                  <input type="number" name="menu_parent" class="form-control form-control-sm form-control-solid" placeholder="menu_parent"  />
                  <!--end::Input-->
                </div>
                <!--end::Input group-->
                
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">MENU ICON</label>
                <!--end::Label-->
                <!--begin::Input-->
                {!! Form::text("menu_icon", null, array("placeholder" => "MENU ICON","class" => "form-control form-control-solid mb-3 mb-lg-0")) !!}
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">TYPE</label>
                <!--end::Label-->
                <!--begin::Input-->
                <select name="type" aria-label="Select a type" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
														<option value='label'>label</option><option value='menu'>menu</option><option value='submenu'>submenu</option>
								</select>
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
                <!--begin::Input group-->
                <div class="fv-row mb-7">
                  <!--begin::Label-->
                  <label class=" fw-semibold fs-6 mb-2">ORD</label>
                  <!--end::Label-->
                  <!--begin::Input-->
                  <input type="number" name="ord" class="form-control form-control-sm form-control-solid" placeholder="ord"  />
                  <!--end::Input-->
                </div>
                <!--end::Input group-->
                
                <!--begin::Input group-->
                <div class="fv-row mb-7">
                  <!--begin::Label-->
                  <label class=" fw-semibold fs-6 mb-2">EXTENSIONTARGET</label>
                  <!--end::Label-->
                  <!--begin::Input-->
                  <input type="number" name="extensiontarget" class="form-control form-control-sm form-control-solid" placeholder="extensiontarget"  />
                  <!--end::Input-->
                </div>
                <!--end::Input group-->
                
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">STATUS</label>
                <!--end::Label-->
                <!--begin::Input-->
                <select name="status" aria-label="Select a status" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
														<option value='active'>active</option><option value='inactive'>inactive</option>
								</select>
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">DELETED</label>
                <!--end::Label-->
                <!--begin::Input-->
                <select name="deleted" aria-label="Select a deleted" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
														<option value='true'>true</option><option value='false'>false</option>
								</select>
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
                         
                        </div>
                        <!--end::Scroll-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                          <button type="reset" class="btn btn-light me-3" data-kt-Setting_menu-modal-action="cancel">Discard</button>
                          <button type="submit" class="btn btn-primary" data-kt-Setting_menu-modal-action="submit">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                          </button>
                        </div>
                        <!--end::Actions-->
                        {!! Form::close() !!}
                      <!--end::Form-->
                    </div>
                    <!--end::Modal body-->
                  </div>
                  <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
              </div>
              <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++end::Modal - add Setting_menu-->
      
              @foreach ($data as $key => $setting_menu)
              <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++begin::Modal - Edit Setting_menu-->
              <div class="modal fade" id="kt_modal_edit_setting_menu{{ $setting_menu->id }}" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                  <!--begin::Modal content-->
                  <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header" id="kt_modal_add_setting_menu_header">
                      <!--begin::Modal title-->
                      <h2 class="fw-bold">EDIT SETTING MENU</h2>
                      <!--end::Modal title-->
                      <!--begin::Close-->
                      <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" data-kt-setting_menus-modal-action="close">
                        <i class="ki-duotone ki-cross fs-1">
                          <span class="path1"></span>
                          <span class="path2"></span>
                        </i>
                      </div>
                      <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                      <!--begin::Form-->
                      {{-- {!! Form::open(array("route" => "setting_menu.update","method"=>"POST")) !!} --}}
                      {!! Form::model($setting_menu, ["method" => "PATCH","route" => ["setting_menu.update", $setting_menu->id], "enctype"=>"multipart/form-data"]) !!}
                      {{-- <form id="kt_modal_add_user_form" class="form" action="#"> --}}
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                        
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">MENU NAME</label>
                <!--end::Label-->
                <!--begin::Input-->
                {!! Form::text("menu_name", $setting_menu->menu_name, array("placeholder" => "MENU NAME","class" => "form-control form-control-solid mb-3 mb-lg-0")) !!}
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">MENU LABEL</label>
                <!--end::Label-->
                <!--begin::Input-->
                {!! Form::text("menu_label", $setting_menu->menu_label, array("placeholder" => "MENU LABEL","class" => "form-control form-control-solid mb-3 mb-lg-0")) !!}
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">MENU URL</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" name="menu_url" class="form-control form-control-sm form-control-solid" placeholder="menu_url" value="{{$setting_menu->menu_url}}" />
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">MENU COLOR</label>
                <!--end::Label-->
                <!--begin::Input-->
                {!! Form::text("menu_color", $setting_menu->menu_color, array("placeholder" => "MENU COLOR","class" => "form-control form-control-solid mb-3 mb-lg-0")) !!}
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">MENU ICON</label>
                <!--end::Label-->
                <!--begin::Input-->
                {!! Form::text("menu_icon", $setting_menu->menu_icon, array("placeholder" => "MENU ICON","class" => "form-control form-control-solid mb-3 mb-lg-0")) !!}
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">TYPE</label>
                <!--end::Label-->
                <!--begin::Input-->
                <select name="type" aria-label="Select a type" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
														<option value='label'>label</option><option value='menu'>menu</option><option value='submenu'>submenu</option>
								</select>
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">STATUS</label>
                <!--end::Label-->
                <!--begin::Input-->
                <select name="status" aria-label="Select a status" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
														<option value='active'>active</option><option value='inactive'>inactive</option>
								</select>
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">DELETED</label>
                <!--end::Label-->
                <!--begin::Input-->
                <select name="deleted" aria-label="Select a deleted" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
														<option value='true'>true</option><option value='false'>false</option>
								</select>
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
                        </div>
                        <!--end::Scroll-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                          <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
                          <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                          </button>
                        </div>
                        <!--end::Actions-->
                        {!! Form::close() !!}
                      <!--end::Form-->
                    </div>
                    <!--end::Modal body-->
                  </div>
                  <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
              </div>
              <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++end::Modal - Edit user-->
              @endforeach

              @foreach ($data as $key => $setting_menu)
              <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++begin::Modal - ShowSetting_menu-->
              <div class="modal fade" id="kt_modal_show_setting_menu{{ $setting_menu->id }}" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                  <!--begin::Modal content-->
                  <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header" id="kt_modal_add_setting_menu_header">
                      <!--begin::Modal title-->
                      <h2 class="fw-bold">DETAIL SETTING MENU</h2>
                      <!--end::Modal title-->
                      <!--begin::Close-->
                      <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" data-kt-setting_menus-modal-action="close">
                        <i class="ki-duotone ki-cross fs-1">
                          <span class="path1"></span>
                          <span class="path2"></span>
                        </i>
                      </div>
                      <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                      <!--begin::Form-->
                      {{-- {!! Form::open(array("route" => "setting_menu.update","method"=>"POST")) !!} --}}
                      {!! Form::model($setting_menu, ["method" => "PATCH","route" => ["setting_menu.update", $setting_menu->id], "enctype"=>"multipart/form-data"]) !!}
                      {{-- <form id="kt_modal_add_user_form" class="form" action="#"> --}}
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                        
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">ID</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="number" name="id" class="form-control form-control-sm form-control-solid" placeholder="id" value="{{$setting_menu->id}}" />
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">MENU NAME</label>
                <!--end::Label-->
                <!--begin::Input-->
                {!! Form::text("menu_name", $setting_menu->menu_name, array("placeholder" => "MENU NAME","class" => "form-control form-control-solid mb-3 mb-lg-0")) !!}
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">MENU LABEL</label>
                <!--end::Label-->
                <!--begin::Input-->
                {!! Form::text("menu_label", $setting_menu->menu_label, array("placeholder" => "MENU LABEL","class" => "form-control form-control-solid mb-3 mb-lg-0")) !!}
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">MENU URL</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" name="menu_url" class="form-control form-control-sm form-control-solid" placeholder="menu_url" value="{{$setting_menu->menu_url}}" />
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">MENU COLOR</label>
                <!--end::Label-->
                <!--begin::Input-->
                {!! Form::text("menu_color", $setting_menu->menu_color, array("placeholder" => "MENU COLOR","class" => "form-control form-control-solid mb-3 mb-lg-0")) !!}
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">MENU PARENT</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="number" name="menu_parent" class="form-control form-control-sm form-control-solid" placeholder="menu_parent" value="{{$setting_menu->menu_parent}}" />
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">MENU ICON</label>
                <!--end::Label-->
                <!--begin::Input-->
                {!! Form::text("menu_icon", $setting_menu->menu_icon, array("placeholder" => "MENU ICON","class" => "form-control form-control-solid mb-3 mb-lg-0")) !!}
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">TYPE</label>
                <!--end::Label-->
                <!--begin::Input-->
                <select name="type" aria-label="Select a type" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
														<option value='label'>label</option><option value='menu'>menu</option><option value='submenu'>submenu</option>
								</select>
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">ORD</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="number" name="ord" class="form-control form-control-sm form-control-solid" placeholder="ord" value="{{$setting_menu->ord}}" />
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">EXTENSIONTARGET</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="number" name="extensiontarget" class="form-control form-control-sm form-control-solid" placeholder="extensiontarget" value="{{$setting_menu->extensiontarget}}" />
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">STATUS</label>
                <!--end::Label-->
                <!--begin::Input-->
                <select name="status" aria-label="Select a status" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
														<option value='active'>active</option><option value='inactive'>inactive</option>
								</select>
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class=" fw-semibold fs-6 mb-2">DELETED</label>
                <!--end::Label-->
                <!--begin::Input-->
                <select name="deleted" aria-label="Select a deleted" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
														<option value='true'>true</option><option value='false'>false</option>
								</select>
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              
                        </div>
                        <!--end::Scroll-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                          <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
                          <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                          </button>
                        </div>
                        <!--end::Actions-->
                        {!! Form::close() !!}
                      <!--end::Form-->
                    </div>
                    <!--end::Modal body-->
                  </div>
                  <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
              </div>
              <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++end::Modal - Show user-->
              @endforeach


              <!--begin::Content-->
              <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                  <!--begin::Card-->
                  <div class="card">
                    <div class="card-body">
                      
      <div class="table-responsive">
                          <table id="datatable-buttons" class="table align-middle table-striped  table-row-dashed fs-6 gy-5 dt-responsive nowrap"
                              style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                              <thead>
                                  <tr>
                                      <th class="min-w-50px sorting">NO</th>                             
      <th class="min-w-125px sorting">Menu Name</th><th class="min-w-125px sorting">Menu Label</th><th class="min-w-125px sorting">Menu Color</th><th class="min-w-125px sorting">Menu Icon</th><th class="min-w-125px sorting">Type</th><th class="min-w-125px sorting">Status</th><th class="min-w-125px sorting">Deleted</th><th class="text-center min-w-100px sorting_disabled">Action</th>
           
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $key => $setting_menu)
                <tr>
                    <td style="color:rgba(80, 74, 74, 0.333)" class=" align-items-center text-center"> <a href="{{ route("setting_menu.show",$setting_menu->id) }}" class="text-gray-800 text-hover-primary mb-1">{{ ++$i }}</a></td>
                    <td><a href="{{ route("setting_menu.show",$setting_menu->id) }}" class="text-gray-800 text-hover-primary mb-1">{{ Str::limit($setting_menu->menu_name,25) }}</a></td><td><a href="{{ route("setting_menu.show",$setting_menu->id) }}" class="text-gray-800 text-hover-primary mb-1">{{ Str::limit($setting_menu->menu_label,25) }}</a></td><td><a href="{{ route("setting_menu.show",$setting_menu->id) }}" class="text-gray-800 text-hover-primary mb-1">{{ Str::limit($setting_menu->menu_color,25) }}</a></td><td><a href="{{ route("setting_menu.show",$setting_menu->id) }}" class="text-gray-800 text-hover-primary mb-1">{{ Str::limit($setting_menu->menu_icon,25) }}</a></td><td><a href="{{ route("setting_menu.show",$setting_menu->id) }}" class="text-gray-800 text-hover-primary mb-1">{{ Str::limit($setting_menu->type,25) }}</a></td><td><a href="{{ route("setting_menu.show",$setting_menu->id) }}" class="text-gray-800 text-hover-primary mb-1">{{ Str::limit($setting_menu->status,25) }}</a></td><td><a href="{{ route("setting_menu.show",$setting_menu->id) }}" class="text-gray-800 text-hover-primary mb-1">{{ Str::limit($setting_menu->deleted,25) }}</a></td>
      <td class="text-end">
              <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_show_setting_menu{{ $setting_menu->id }}">Show</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_setting_menu{{ $setting_menu->id }}">Edit</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    {!! Form::open(["id" =>"form-id","method" => "DELETE","route" => ["setting_menu.destroy", $setting_menu->id],"style"=>"display:inline"]) !!}
                    {{-- {!! Form::submit("Delete", ["class" => "menu-link px-3"]) !!}  --}}
                    <a onclick="document.getElementById('form-id').submit();" class="menu-link px-3" data-kt-setting_menus-table-filter="delete_row"> Delete</a>
                    {!! Form::close() !!} 
                  
                  </div>
                  <!--end::Menu item-->
                </div>
                <!--end::Menu-->

            </td>
      
                </tr>
            @endforeach

          </tbody>
          </table>
          </div>
      
                    </div>
        
                  </div>
                  <!--end::Card-->
                </div>
                <!--end::Content container-->
              </div>
              <!--end::Content-->
            </div>
            <!--end::Content wrapper-->
          
          </div>
          <!--end:::Main-->
        
         
        </div>
            <!--end::Content-->
        @endsection
        