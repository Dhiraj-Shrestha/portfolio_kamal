<section id="ourproject" class="section-padding">
    <div class="container">

        <div class="section-title">
            <h2>Ways I can help you</h2>
        </div>

        <div class="row d-flex align-items-center justify-content-center ">
            <div class="col-md-10 d-flex flex-column align-items-center justify-content-center">
                {{-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    @isset($projectCategories)

                    @foreach ($projectCategories as $projectCategory)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link @if($loop->first) active @endif" id="pills-home-tab{{ $projectCategory->id }}" data-bs-toggle="pill"
                            data-bs-target="#pills-home{{ $projectCategory->id }}" type="button" role="tab" aria-controls="pills-home{{ $projectCategory->id }}"
                            aria-selected="true">{{ $projectCategory->title }}</button>
                    </li>
                        
                    @endforeach
                        
                    @endisset
                

                </ul> --}}
                <ul class="nav nav-pills mb-3" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true"><span></span>All</button>
                    </li>
                    @foreach ($projectCategories as $projectCategory)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="test{{ $projectCategory->id }}-tab" data-bs-toggle="tab"
                                data-bs-target="#test{{ $projectCategory->id }}" type="button" role="tab"
                                aria-controls="{{ $projectCategory->id }}"
                                aria-selected="false"><span></span>{{ $projectCategory->title }}</button>
                        </li>
                    @endforeach

                </ul>

                <div class="tab-content " id="myTabContent ">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="container">
                            <div class="row g-4 mt-3 d-flex align-items-center justify-content-center">
                                @foreach ($projects as $project)
                                <div class="col-md-5 mb-3">

                                        <div class="project">
                                            <div class="project-box">
                                                <img src="{{ asset('projectImage/'. $project->project_image) }}" alt="" width="100%"
                                                    height="100%">
            
                                                <div class="project-box-content">
            
                                                    <h5 class="title">{{ $project->project_title }}</h5>
                                                    <p class="description">{{ $project->project_description }}</p>
            
                                                    <a href="{{ route('use.case.study',$project->id) }}" class="useCase">Use case study</a>
                                                    <div
                                                        class="projec-box-content-bottom d-flex justify-content-between align-items-end">
            
                                                        <div class="project-category">
            
                                                            <span>
                                                                {{ $project->project_tag }}
                                                            </span>
                                                        </div>
                                                        <div class="project-btns d-flex flex-column">
                                                            <a class="btn-first" href="{{ $project->appstore_link }}">View app store</a>
                                                            <a class="btn-first mt-2 btn-blue"
                                                                href="{{ $project->playstore_link }}">View Play store</a>
                                                        </div>
            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    @foreach ($projectCategories as $item)
                        <div class="tab-pane fade" id="test{{ $item->id }}" role="tabpanel"
                            aria-labelledby="test{{ $item->id }}-tab">
                            <div class="container">
                                <div class="row g-4 mt-3 d-flex align-items-center justify-content-center">
                                    @foreach ($item->projects as $project)

                                    <div class="col-md-5 mb-3">
                                        <div class="project">
                                            <div class="project-box">
                                                <img src="{{ asset('projectImage/'. $project->project_image) }}" alt="" width="100%"
                                                    height="100%">
            
                                                <div class="project-box-content">
            
                                                    <h5 class="title">{{ $project->project_title }}</h5>
                                                    <p class="description">{{ $project->project_description }}</p>
            
                                                    <a href="{{ route('use.case.study',$project->id) }}" class="useCase">Use case study</a>
                                                    <div
                                                        class="projec-box-content-bottom d-flex justify-content-between align-items-end">
            
                                                        <div class="project-category">
            
                                                            <span>
                                                                {{ $project->project_tag }}
                                                            </span>
                                                        </div>
                                                        <div class="project-btns d-flex flex-column">
                                                            <a class="btn-first" href="{{ $project->appstore_link }}">View app store</a>
                                                            <a class="btn-first mt-2 btn-blue"
                                                                href="{{ $project->playstore_link }}">View Play store</a>
                                                        </div>
            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                        {{-- <div class="col-md-4 mt-4">

                                            <a href="{{ route('portfolio.card.details', $realState->id) }}">
                                                <div class="portfolio-content">
                                                    <div class="portfolio-box">
                                                        <img src="{{ asset('RealStateImage/' . $realState->cardImage) }}"
                                                            width="100%" alt="">

                                                        <div class="portfolio-content">
                                                            <div class="portfolio-content-inner">
                                                                <h4>{{ $realState->cardTitle }}
                                                                </h4>

                                                                <p class="para">{{ $realState->cardDes }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </a>



                                        </div> --}}
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                {{-- @foreach ($projectCategories as $projectCategory) --}}
                {{-- <div class="tab-content" id="pills-tabContent{{$projectCategory->id }}">
                    
                 

                    <div class="tab-pane fade @if($loop->first) show active @endif" id="pills-home" role="tabpanel"
                    aria-labelledby="pills-home-tab{{$projectCategory->id }}">
                    <div class="row g-4 mt-3 d-flex align-items-center justify-content-center">
                        @foreach ($projectCategory->projects as $project)
                        <div class="col-md-5 mb-3">
                            <div class="project">
                                <div class="project-box">
                                    <img src="{{ asset('projectImage/'. $project->project_image) }}" alt="" width="100%"
                                        height="100%">

                                    <div class="project-box-content">

                                        <h5 class="title">{{ $project->project_title }}</h5>
                                        <p class="description">{{ $project->project_description }}</p>

                                        <a href="{{ route('use.case.study',$project->id) }}" class="useCase">Use case study</a>
                                        <div
                                            class="projec-box-content-bottom d-flex justify-content-between align-items-end">

                                            <div class="project-category">

                                                <span>
                                                    {{ $project->project_tag }}
                                                </span>
                                            </div>
                                            <div class="project-btns d-flex flex-column">
                                                <a class="btn-first" href="{{ $project->appstore_link }}">View app store</a>
                                                <a class="btn-first mt-2 btn-blue"
                                                    href="{{ $project->playstore_link }}">View Play store</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                    </div>
                </div> --}}

          
                    {{-- @endforeach --}}
                   
                    {{-- <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row g-4 mt-3 d-flex align-items-center justify-content-center">
                            <div class="col-md-5 mb-3">
                                <div class="project">
                                    <div class="project-box">
                                        <img src="{{ asset('/images/projects/project-1.png') }}" alt="" width="100%"
                                            height="100%">

                                        <div class="project-box-content">

                                            <h5 class="title">Mint</h5>
                                            <p class="description">Mint help to see your bank accounts, credit cards,
                                                loans, and investments in a single application

                                                <a href="" class="useCase">Use case study</a>.
                                            </p>
                                            <div
                                                class="projec-box-content-bottom d-flex justify-content-between align-items-end">

                                                <div class="project-category">

                                                    <span>
                                                        ios & android
                                                    </span>
                                                </div>
                                                <div class="project-btns d-flex flex-column">
                                                    <button class="btn-first ">View App</button>
                                                    <button class="btn-first mt-2 btn-blue">see the code</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 mb-3">
                                <div class="project">
                                    <div class="project-box">
                                        <img src="{{ asset('/images/projects/project-2.png') }}" alt="" width="100%"
                                            height="100%">

                                        <div class="project-box-content">

                                            <h5 class="title">Bookinghut</h5>
                                            <p class="description">Starcoin allows user to choose tickets and pay for
                                                them online, in the comfort of their home.</p>

                                            <a href="" class="useCase">Use case study</a>
                                            <div
                                                class="projec-box-content-bottom d-flex justify-content-between align-items-end">

                                                <div class="project-category">

                                                    <span>
                                                        ios ,android & web
                                                    </span>
                                                </div>
                                                <div class="project-btns d-flex flex-column">
                                                    <button class="btn-first ">View website</button>
                                                    <button class="btn-first mt-2 btn-blue">use case study</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div> --}}

                </div>
            </div>
        </div>

    </div>
</section>
