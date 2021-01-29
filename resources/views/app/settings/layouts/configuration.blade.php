@extends('mailcoach::app.layouts.app', [
    'title' => isset($titlePrefix) ?  $titlePrefix . ' | ' . __('Configuration') : __('Configuration')
])

@section('header')
    <nav>
        <ul class="breadcrumbs">
            @yield('breadcrumbs')
        </ul>
    </nav>
@endsection

@section('content')
    <x-mailcoach::card>
        <x-slot name="nav">
            <x-mailcoach::card-nav :title="__('Configuration')">
                <x-mailcoach::navigation-item :href="route('appConfiguration')">
                    {{__('App') }}
                </x-mailcoach::navigation-item>
               
                <x-mailcoach::navigation-item :href="route('users')">
                    {{ __('Users') }}
                </x-mailcoach::navigation-item>
            
                <x-mailcoach::navigation-item :href="route('mailConfiguration')">
                    {{ __('Mail') }}
                </x-mailcoach::navigation-item>
            
                <x-mailcoach::navigation-item :href="route('transactionalMailConfiguration')">
                    {{ __('Transactional Mail') }}
                </x-mailcoach::navigation-item>
            
                <x-mailcoach::navigation-item :href="route('editor')">
                    {{ __('Editor') }}
                </x-mailcoach::navigation-item>

            </x-mailcoach::card-nav>
        </x-slot>
    
        @yield('configuration')
       
    </x-mailcoach::card>
@endsection
