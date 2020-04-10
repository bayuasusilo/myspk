@if(session()->has('status'))
<div class="container-fluid">
<div class="px-3 py-2 bg-gradient-success text-white mb-4" style="text-align:center">
<strong>{{ session('status')}}</strong></div></div>
@endif

@if(session()->has('gagal'))
<div class="container-fluid">
<div class="px-3 py-2 bg-gradient-danger text-white mb-4" style="text-align:center">
<strong>{{ session('gagal')}}</strong></div></div>
@endif
