@extends('layouts.dashboard')
@section('css')
    <link rel="stylesheet" href="/dashboard/dist/assets/css/pages/app/chat.min.css" />
    <link rel="stylesheet" href="/dashboard/dist/assets/css/main.bundle.min.css" />
@endsection
@section('custom_content')
    <!-- Start:: content (Your custom content)-->
    <div class="subheader px-lg">
        <div class="subheader-container">
            <div class="subheader-main">
                <nav class="ul-breadcrumb" aria-label="breadcrumb">
                    <ol class="ul-breadcrumb-items">
                        <li class="breadcrumb-home"><a href="{{route('home')}}"> <i class="material-icons">home</i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chat</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container my-lg">
        <div data-sidebar-container="chat" class="card chat-sidebar-container">
            <div class="sidebar-overlay"></div>
            <div data-sidebar-content="chat" class="chat-content-wrap">
                <div class="d-flex pl-3 pr-3 pt-2 pb-2 o-hidden shadow-2dp chat-topbar bg-primary text-white">
                    <a data-sidebar-toggle="chat" class="link-icon d-lg-none mt-2 mr-md">
                        <i class="material-icons">menu</i>
                    </a>
                    <div class="d-flex align-items-center">
                        <p class="m-0 text-title font-weight-normal text-16 flex-grow-1">Messages</p>
                    </div>
                </div>
                <div class="chat-content perfect-scrollbar" data-suppress-scroll-x="true">
                    @foreach ($messages as $message)
                        @if ($message->sender == 'admin')
                            <div class="d-flex mb-4 user">
                                <div class="initials top">
                                    <h3 style="padding-left: 8px;">{{ auth()->user()->initials() }}</h3>
                                </div>
                                <div class="message flex-grow-1">
                                    <div class="d-flex">
                                        <p class="mb-1 text-title font-weight-normal text-16 flex-grow-1">{{auth()->user()->name()}}</p>
                                        <span class="text-small text-muted">{{$message->created_at}}</span>
                                    </div>
                                    <p class="m-0">{{$message->body}}</p>
                                </div>
                            </div>
                        @else
                            <div class="d-flex mb-4 user">
                                <div class="message flex-grow-1">
                                    <div class="d-flex">
                                        <p class="mb-1 font-weight-normal text-title text-16 flex-grow-1">{{$user->first_name .' '.$user->last_name}}</p>
                                        <span class="text-small text-muted">{{$message->created_at}}</span>
                                    </div>
                                    <p class="m-0">{{$message->body}}</p>
                                </div>
                                <span class="initials top ml-3">
                                    <h3 style="padding-left: 8px;">{{$initials}}</h3>
                                </span>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="pl-3 pr-3 pt-3 pb-3 box-shadow-1 chat-input-area">
                    <form class="inputForm" method="POST" action="{{route('users.messages.store', $hashIds->encode($user->id))}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control form-control-rounded" placeholder="Type your message"
                                name="message" id="message" cols="30" rows="3" required></textarea>
                        </div>
                        <div class="d-flex">
                            <div class="flex-grow-1"></div>
                                {{-- <input type="file" name="attachement"> --}}
                                <button type='submit' class="btn btn-raised btn-raised-primary rounded-circle btn-icon">
                                    <i class="material-icons">send</i>
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Start:: content (Your custom content)-->
@endsection
@section('script')
    <script src="/dashboard/dist/assets/js/pages/sidebar.script.min.js"></script>
@endsection
