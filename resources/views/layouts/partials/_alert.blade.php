
<div class="container mt-2">

    @if(Session::has('info'))
       <div class="alert alert-info alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert">
             &times;
          </button>
          {{ Session::get('info') }}
       </div>
    @endif
    @if(Session::has('success'))
       <div class="alert alert-success alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert">
             &times;
          </button>
          {{ Session::get('success') }}
       </div>
    @endif
    @if(Session::has('error'))
       <div class="alert alert-error alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert">
             &times;
          </button>
          {{ Session::get('error') }}
       </div>
    @endif
    @if(Session::has('warning'))
       <div class="alert alert-warning alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert">
             &times;
          </button>
          {{ Session::get('warning') }}
       </div>
   @endif

</div>


