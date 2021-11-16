@extends('layouts.dashboard')
@section('custom_content')
    <!-- Start:: content (Your custom content)-->
    <div class="subheader px-lg">
        <div class="subheader-container">
            <div class="subheader-main">
                <h3 class="subheader-title">Drag & Drop</h3>
                <nav class="ul-breadcrumb" aria-label="breadcrumb">
                    <ol class="ul-breadcrumb-items">
                        <li class="breadcrumb-home"><a href="#"> <i class="material-icons">home</i></a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Drag & Drop</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container mt-lg">
        <h2 class="doc-section-title" id="examples">Users<a class="section-link" href="#examples"></a></h2>
        @include('layouts.message')
        <div class="doc-example">
            <div class="parent ex-1">
                <div class="row">
                    @foreach ($users as $user)
                        <div class="card mb-md cursor-pointer col-md-6 col-xs-12">
                            <div
                                class="card-body d-flex justify-content-sm-between justify-content-center align-items-center flex-wrap">
                                <div class="initials top admin">
                                    <h3>{{ strtoupper(substr($user->first_name, 0, 1)) . ' ' . strtoupper(substr($user->last_name, 0, 1)) }}
                                    </h3>
                                </div>
                                <div class="flex-grow-1 text-sm-left text-center">
                                    <h6 class="m-0">{!! $user->verified ? "<span class='text-success'>Verified</span>" : "<span class='text-danger'>Unverified</span>" !!}
                                        @if ($user->identification !== null)
                                            |
                                            <a href="{{ url('/store/' . json_decode($user->identification)[0]) }}"
                                                rel="noreferrer noopener" target="_blank" download>Front View</a>
                                            |
                                            <a href="{{ url('/store/' . json_decode($user->identification)[1]) }}"
                                                rel="noreferrer noopener" target="_blank" download>Back View</a>
                                        @endif
                                    </h6>
                                    <p class="text-muted m-0">{{ $user->first_name }} {{ $user->last_name }}</p>
                                </div>

                            </div>

                            <div class="d-flex justify-content-sm-evenly justify-content-center align-items-center flex-wrap">
                                @switch($user)
                                    @case($user->identification !== null && $user->verified == 1)
                                        <a class="btn btn-opacity btn-danger btn-sm my-sm mr-sm"
                                            href="{{ route('users.unverify', $user->id) }}">Unverify
                                        </a>
                                    @break
                                    @case($user->identification !== null && $user->verified == 0)
                                        <a class="btn btn-opacity btn-primary btn-sm my-sm mr-sm"
                                            href="{{ route('users.verify', $user->id) }}">Verify
                                        </a>
                                        <a class="btn btn-opacity btn-danger btn-sm my-sm mr-sm"
                                            href="{{ route('users.unverify', $user->id) }}">Unverify
                                        </a>
                                    @break
                                    @default
                                        <a class="btn btn-opacity btn-primary btn-sm my-sm mr-sm"
                                            href="{{ route('users.verify', $user->id) }}">Verify
                                        </a>
                                @endswitch
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
