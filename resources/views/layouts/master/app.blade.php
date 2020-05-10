@include('layouts.master.head')

@include('layouts.master.topnav')
<!-- Side Navbar -->
@include('layouts.master.sidenav')
<div class="content-inner">
    <section class="dashboard-counts no-padding-bottom">
        <div class="container-fluid">
            <div class="row bg-white has-shadow">
                @yield('content')
            </div>
        </div>
    </section>
    @include('layouts.master.footer')
    @section('javascript')

    @endsection
