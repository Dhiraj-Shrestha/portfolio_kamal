<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex  align-items-center justify-content-between">
                <div class="left-header  profilepic ">
                    <a href="/" class="d-flex  align-items-center">

                        <img src="{{ asset('/images/pp.jpg') }}" alt="">
                        <h6 class="logo-name">Ujjwal</h6>
                    </a>
                </div>
                <div class="right-header d-flex  align-items-center flex-row justify-content-end">
                    <a href="#contact" class="main-btn ">hire me</a>
                </div>
            </div>
        </div>
    </div>
</header>
@push('js')

    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 200) {
                $('#header').addClass("fixed-top")
                $('#header').show();
            } else {
                $('#header').removeClass("fixed-top")
                $('#header').hide()
            }
        })
    </script>





@endpush
