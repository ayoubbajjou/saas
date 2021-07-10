<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Create Site') }}
        </h2>

@foreach ($errors->all() as $error)
            <li class="alert alert-danger">{{ $error }}</li>
        @endforeach
        <form action="{{ route('sites.store') }}" method="POST">
      @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
              {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

 --}}

@error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1">
@error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror           
 </div>

<div class="mb-3">
              <label for="Subdomain" class="form-label">Subdomain</label>
              <input type="text" class="form-control" id="Subdomain" name="subdomain">
@error('subdomain')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror           
 </div>
<div class="mb-3">
              <label for="Domain" class="form-label">Domain</label>
              <input type="url" class="form-control" name="domain" id="Domain">
@error('domain')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
            </div>
            <button type="submit" class="text-white btn btn-success">Submit</button>
          </form>        
    </x-slot>
</x-app-layout>
