<!-- Asset Atas -->
@include('layouts.top')
<!-- /Asset Atas -->

<!-- SideBar -->
@include('layouts.sidebar')
<!-- /SideBar -->

<!-- TopBar -->
@include('layouts.topbar')
<!-- /TopBar -->

<div class="container-fluid">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Dasboard</h6>
  </div>
  <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <!-- Token Anda adalah: <strong>{{ Auth::user()->api_token }}</strong> -->
                </div>
            </div>
        </div>


  <!-- footer -->
  @include('layouts.footer')
  <!-- /footer -->

  <!-- Asset Bawah -->
  @include('layouts.bot')
  <!-- /Asset Bawah -->
