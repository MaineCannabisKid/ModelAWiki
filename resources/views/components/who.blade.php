<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          Authorization Debug Tool
        </div>
        <div class="panel-body">
          {{-- Guest --}}
          @if (Auth::guest())
            <p class="text-danger">
              You are not logged in.
            </p>
          @endif
          {{-- Normal User --}}
          @if (Auth::guard('web')->check())
            <p class="text-success">
              You are logged in as a <strong>USER</strong>.
            </p>      
          @endif
          {{-- Admin User --}}
          @if (Auth::guard('admin')->check())
            <p class="text-success">
              You are logged in as a <strong>ADMIN</strong>.
            </p>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>



