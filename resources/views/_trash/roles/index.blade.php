@extends('layouts.dashboard')

@section('title', __('Roles'))

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                @can('config-create')
                <a class="btn btn-success" href="{{ route('roles.create') }}"> {{__('Create New Role')}}</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ __($message) }}</p>
        </div>
    @endif


    <table class="table table-bordered">
      <tr>
         <th>{{__('No')}}</th>
         <th>{{__('Name')}}</th>
         <th width="280px">{{__('Action')}}</th>
      </tr>
        @foreach ($roles as $key => $role)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $role->name }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">{{__('Show')}}</a>
                @can('config-edit')
                    <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">{{__('Edit')}}</a>
                @endcan
                @can('config-delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                        {!! Form::submit(__('Delete'), ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                @endcan
            </td>
        </tr>
        @endforeach
    </table>


    {!! $roles->render() !!}



@endsection
