@extends('userlayout.main-user')

@section('user-content')
    <section id="my-account" class="lg:px-10 px-6 mt-6 mb-24">
        <div class="grid grid-cols-12 space-y-6 md:space-y-0 relative space-x-0 md:space-x-3 lg:space-x-6">
            <div class="col-span-12 md:col-span-8 flex flex-col">
                @include('userlayout.badge-membership')

                <!--Upgrade Membership-->
                @include('userlayout.upgrade-membership')
            </div>

            <!-- 5 Pesanan Terakhir -->
            @include('userlayout.pesanan-terakhir')
        </div>
        <!-- Alert -->
        @include('userlayout.alert')
    </section>
@endsection
