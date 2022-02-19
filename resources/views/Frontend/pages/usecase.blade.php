@extends('master')

@section('content')
@isset($projectDetail)
    <section class="usecase-page">

        <div id="usecase-banner">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-10">

                        <div class="main-title">
                            <h1>
                               {{ $projectDetail->banner_title }}
                            </h1>
                        </div>
                        <img src="{{ asset('projectImage/bannerImage/'. $projectDetail->banner_image) }}" alt="" class="imageOne">
                        {{-- <img src="{{ asset('/images/usecase/usecase-1.svg') }}" alt="" class="imageTwo"> --}}

                    </div>
                </div>
            </div>

        </div>

        {{-- --- --}}

        <div id="usecase-description" class="section-padding">
            <div class="container">

                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-5 mb-4">
                        <div class="client">
                            <h5 class="title">
                                client
                            </h5>
                            <span class="client-name">
                                {{ $projectDetail->project_title }}
                            </span>
                        </div>
                        <div class="app-services mt-5">

                            <h5 class="title">
                                Service
                            </h5>

                            <ul>
                                @foreach (explode (",", $projectDetail->services) as $service)
                                <li>{{ $service }}</li>
                                @endforeach

                            </ul>
                        </div>

                        <div class="deliverables mt-5">
                            <h5 class="title">
                                Deliveries
                            </h5>
                            <ul>
                               

                                @foreach (explode (",", $projectDetail->availability) as $availableOn)
                                <li>{{ $availableOn }}</li>
                                    
                                @endforeach
                                {{-- <p>{{ explode (",", $projectDetail->availability); }}</p> --}}
                                {{-- {{explode(',', "9,admin@example.com,8" ); }} --}}


                                {{-- {{ preg_split ("/\, /", "9,admin@example.com,8");  }} --}}
                                {{-- {{ $projectDetail->availability->implode(', ') }} --}}
                                {{-- {{ implode(', ', $projectDetail->availability) }} --}}
                                {{-- <li>{{ $projectDetail->availability }}</li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 mb-4">
                        <div class="section-title">
                            <h2 class="text-start ">   {{ $projectDetail->usecase_title }}
                                <br>
                                {{-- budget tracker App --}}
                            </h2>
                        </div>
                        <p>
                            {{ $projectDetail->project_description }}
                        </p>

                        <div class="app-link mt-5">
                            <a href="   {{ $projectDetail->appstore_link }}">View on Appstore</a>
                            <a href="   {{ $projectDetail->playstore_link }}" class="ms-3">View on Google Play</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- -- --}}

        <div class="app-des section-padding">
            <div class="container">

                <div class="row d-flex justify-content-center">
                    <div class="col-md-10">

                        <div class="section-title">
                            <h2>Why use {{ $projectDetail->project_title }}?</h2>
                            <p>
                                {{ $projectDetail->why_to_use_description }}
                            </p>
                        </div>
                        <img src="{{ asset('projectImage/'. $projectDetail->project_image) }}" alt="" width="100%" height="auto">
                    </div>
                </div>
            </div>

        </div>

        {{-- -- --}}

        <div class="navigating-des section-padding">
            <div class="container">

                <div class="row d-flex justify-content-center">
                    <div class="col-md-10">
                        <div class="section-title">
                            <h2>Navigating the app</h2>
                            <p>
                              {{ $projectDetail->navigation_description }}
                            </p>
                        </div>
                        <img src="{{ asset('projectImage/navigationImage/'. $projectDetail->navigation_image) }}" alt="" width="100%" height="auto">
                    </div>
                </div>

                <div class="navigation-step">

                    <div class="steps">
                        <div class="row d-flex justify-content-center  ">
                            <div class="col-md-5 mb-2">
                                <h1 class="main-title">01</h1>
                            </div>
                            <div class="col-md-5 ">
                                <div class="section-title">
                                    <h2 class="text-start">Home screen</h2>
                                    <p class="text-start ms-0">
                                        We make it easier for you to keep track of your accounts, bills, and subscriptions.
                                        You
                                        receive
                                        notifications when your subscription costs rise or when your payments are due. You
                                        can
                                        start
                                        saving more money right now. Mint makes it simple to construct a budget. We'll
                                        categorize
                                        your
                                        transactions for you so you don't have to.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-10 ">
                                <img src="{{ asset('/images/usecase/usecase-5.svg') }}" alt="" width="100%" height="auto">
                            </div>
                        </div>
                    </div>
                    <div class="steps">
                        <div class="row d-flex justify-content-center  ">
                            <div class="col-md-5 mb-2  ">
                                <h1 class="main-title">02</h1>
                            </div>
                            <div class="col-md-5 ">
                                <div class="section-title">
                                    <h2 class="text-start">Graphs</h2>
                                    <p class="text-start ms-0">
                                        We make it easier for you to keep track of your accounts, bills, and subscriptions.
                                        You
                                        receive notifications when your subscription costs rise or when your payments are
                                        due.
                                        You
                                        can start saving more money right now. Mint makes it simple to construct a budget.
                                        We'll
                                        categorize your transactions for you so you don't have to.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-10  ">
                                <img src="{{ asset('/images/usecase/usecase-6.svg') }}" alt="" width="100%" height="auto">
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

        {{-- -- --}}

        <div class="project-story section-padding">
            <div class="container">

                <div class="row d-flex justify-content-center">
                    <div class="col-md-10">

                        <div class="section-title">
                            <h2>{{ $projectDetail->project_title }} story</h2>
                            <p>
                                {{ $projectDetail->project_story }}
 
                            </p>
                        </div>
                        <img src="{{ asset('projectImage/projectStoryImage/'. $projectDetail->project_story_image) }}" alt="" width="100%" height="auto">
                    </div>
                </div>
            </div>

        </div>

        {{-- -- --}}


        <div class="usecase-result section-padding">
            <div class="container">

                <div class="row d-flex justify-content-center  flex-wrap">
                    <div class="col-md-10 d-flex justify-content-between align-items-center">
                        <div class="section-title">
                            <h2 class="text-start ">The results
                            </h2>
                        </div>
                        <div class="app-link">
                            <a href="{{ $projectDetail->appstore_link }}">View on Appstore</a>
                            <a href="{{ $projectDetail->playstore_link }}">View on Google Play</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 mt-5">
                        <div class="counter-box">
                            <div class="counter">
                                <h1>{{ $projectDetail->project_month }}</h1>
                            </div>
                            <div class="counter-content">
                                <span>
                                    Months project
                                    duration
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-5">
                        <div class="counter-box">
                            <div class="counter">
                                <h1>{{ $projectDetail->project_team_member }}</h1>
                            </div>
                            <div class="counter-content">
                                <span>
                                    Team members
                                    worked
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-5">
                        <div class="counter-box">
                            <div class="counter">
                                <h1>{{ $projectDetail->active_user }}<sub>k</sub></h1>
                            </div>
                            <div class="counter-content">
                                <span>
                                    Active User
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-5">
                        <div class="counter-box">
                            <div class="counter">
                                <h1>{{ $projectDetail->average_rating }}</h1>
                            </div>
                            <div class="counter-content">
                                <span>
                                    Average rating
                                    on the app

                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- -- --}}

        <div class="whats-next section-padding ">
            <div class="container">

                <div class="row d-flex justify-content-center">
                    <div class="col-md-10">

                        @isset($projectDetail->what_next)

                        <div class="section-title">
                            <h2>What's next?</h2>
                            <p>
                               {{ $projectDetail->what_next }}
                            </p>
                        </div>
                        @endisset
                    </div>
                </div>
            </div>

        </div>

        @include('Frontend.contact')

    </section>
@endisset


@endsection
