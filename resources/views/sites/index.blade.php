<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('My Sites') }}
        </h2>
        <div class="gap-2 d-grid d-md-flex justify-content-md-end">
            <a class="btn btn-primary" href="{{route('sites.create')}}">{{__('Create Site')}}</a>
        </div>        
    </x-slot>
@if(Session::has('success'))
<p class="alert alert-info">{{ Session::get('success') }}</p>
@endif
    <table class="table table-striped">
        <thead>
      <tr>
        <th scope="col">{{__('Site Name')}}</th>
        <th scope="col">{{__('PHP')}}</th>
        <th scope="col">{{__('Storage')}}</th>
        <th scope="col">{{__('Bandwidth')}}</th>
        <th scope="col">{{__('Actions')}}</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">
            Test Site
            <h5><small>site.steercampaign.com</small></h5>
        </th>
        <td>7.3</td>
        <td>50.4 MB</td>
        <td>10 GB</td>
        <td>
            <button type="button" class="btn btn-secondary">Backup</button>
            <button type="button" class="btn btn-danger">Delete Site</button>
        </td>
      </tr>
    </tbody>
    </table>
</x-app-layout>