<div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn d-flex align-items-center justify-content-between bg-primary w-100"  href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                <h6 class="text-dark m-0">Restaurant</h6>
            </a>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{url('home')}}" class="nav-item nav-link active">Home</a>
                        <a href="{{url('fmenu')}}" class="nav-item nav-link">Menu</a>
                        <a href="{{url('fjenismenu')}}" class="nav-item nav-link">Jenis Menu</a>
                    </div>
                </div>
                <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                    <a href="" class="btn px-0">
                        <i class="fas fa-heart text-primary"></i>
                        <span class="badge text-secondary border border-secondary rounded-circle"
                            style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="{{ route('view_cart') }}" class="btn px-0 ml-3">
                        <i class="fas fa-shopping-cart text-primary"></i>
                        <span class="badge text-secondary border border-secondary rounded-circle"
                            style="padding-bottom: 2px;"></span>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</div>