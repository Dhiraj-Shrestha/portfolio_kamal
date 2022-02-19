<section id="toolbox" class="section-padding">
    <div class="container">
        <div class="section-title">
            <h2>My Toolbox</h2>
            {{-- <p>
                I like to code things from scratch, and enjoy
                bringing ideas to life.
            </p> --}}
        </div>

        <div class="front-end-tech ">
            <div class="toolbox-title">
                <h3>Front-end</h3>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">

                    <div class="toolbox-content mt-4">
                        <ul>
                            @isset($FrontEndTools)
                                @foreach ($FrontEndTools as $FrontEndTool)
                                    <li>
                                        <div class="item">
                                            <div class="tool-icon">
                                                <img src="/ToolFrontend/{{ $FrontEndTool->image }}" alt="" width="100%"
                                                    height="100%">
                                            </div>
                                            <h4 class="tool-title">{{ $FrontEndTool->title }}</h4>
                                        </div>
                                    </li>
                                @endforeach

                            @endisset


                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="back-end-tech ">
            <div class="toolbox-title">
                <h3>Back-end</h3>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">

                    <div class="toolbox-content mt-4">
                        <ul>

                            @isset($BackEndTools)
                                @foreach ($BackEndTools as $BackEndTool)
                                    <li>
                                        <div class="item">
                                            <div class="tool-icon">
                                                <img src="/ToolBackend/{{ $BackEndTool->image }}" alt="" width="100%"
                                                    height="100%">
                                            </div>
                                            <h4 class="tool-title">{{ $BackEndTool->title }}</h4>
                                        </div>
                                    </li>
                                @endforeach
                            @endisset



                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="general-tech  ">
            <div class="toolbox-title">
                <h3>General</h3>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">

                    <div class="toolbox-content mt-4">
                        <ul>
                            @isset($GeneralTools)
                                @foreach ($GeneralTools as $GeneralTool)
                                    <li>
                                        <div class="item">
                                            <div class="tool-icon">
                                                <img src="/ToolGeneral/{{ $GeneralTool->image }}" alt="" width="100%"
                                                    height="100%">
                                            </div>
                                            <h4 class="tool-title">{{ $GeneralTool->title }}</h4>
                                        </div>
                                    </li>
                                @endforeach
                            @endisset
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
