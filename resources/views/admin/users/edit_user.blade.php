<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.includes.head')

<body>
  
@include('admin.includes.header')

  
  
  <div class="container my-5">
    <div class="mx-2">
        <h2 class="fw-bold fs-2 mb-5 pb-2">Edit USER</h2>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="px-md-5">
            @csrf
            @method('PUT')
            
            <div class="form-group mb-3 row">
                <label for="first_name" class="form-label col-md-2 fw-bold text-md-end">Name:</label>
                <div class="col-md-5">
                    <input type="text" name="first_name" id="first_name" placeholder="First Name" 
                           class="form-control py-2 @error('first_name') is-invalid @enderror" 
                           value="{{ old('first_name', $user->first_name) }}" required />
                    @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-5">
                    <input type="text" name="last_name" id="last_name" placeholder="Last Name" 
                           class="form-control py-2 @error('last_name') is-invalid @enderror" 
                           value="{{ old('last_name', $user->last_name) }}" required />
                    @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group mb-3 row">
                <label for="username" class="form-label col-md-2 fw-bold text-md-end">UserName:</label>
                <div class="col-md-10">
                    <input type="text" name="username" id="username" placeholder="e.g. John33" 
                           class="form-control py-2 @error('username') is-invalid @enderror" 
                           value="{{ old('username', $user->username) }}" required />
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group mb-3 row">
                <label for="email" class="form-label col-md-2 fw-bold text-md-end">Email:</label>
                <div class="col-md-10">
                    <input type="email" name="email" id="email" placeholder="e.g. john@example.com" 
                           class="form-control py-2 @error('email') is-invalid @enderror" 
                           value="{{ old('email', $user->email) }}" required />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group mb-3 row">
                <label for="password" class="form-label col-md-2 fw-bold text-md-end">Password:</label>
                <div class="col-md-10">
                    <input type="password" name="password" id="password" 
                           placeholder="Leave blank to keep current password" 
                           class="form-control py-2 @error('password') is-invalid @enderror" />
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group mb-3 row">
                <label for="password_confirmation" class="form-label col-md-2 fw-bold text-md-end">Confirm Password:</label>
                <div class="col-md-10">
                    <input type="password" name="password_confirmation" id="password_confirmation" 
                           placeholder="Confirm new password" class="form-control py-2" />
                </div>
            </div>

            <div class="form-group mb-3 row">
                <label for="is_active" class="form-label col-md-2 fw-bold text-md-end">Active:</label>
                <div class="col-md-10">
                    <input type="checkbox" name="is_active" id="is_active" class="form-check-input" 
                           style="padding: 0.7rem;" value="1" 
                           {{ old('is_active', $user->is_active) ? 'checked' : '' }} />
                </div>
            </div>

            <div class="text-md-end">
                <button type="submit" class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
                    Update User
                </button>
            </div>
        </form>
    </div>
</div>
  </main>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.min.js') }}"></script>
    <script src="{{ asset('js/tables.js') }}"></script>
</body>

</html>