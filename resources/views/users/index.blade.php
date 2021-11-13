@extends('layouts.app')

@section('pageTitle')
    <div class="flex items-center">
        Users
    </div>
@endsection

@section('content')
    <livewire:user.user-list />
@endsection

@section('modal')
    @if(request()->filled('user_id'))
        <livewire:user.edit-user-modal open="{{ $action === 'edit' }}" user-id="{{ request('user_id') }}" />
    @endif
    <livewire:user.add-user-modal open="{{ $action === 'create' }}" />
@endsection