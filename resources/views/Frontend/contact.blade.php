<section id="contact" class="section-padding">
    <div class="container">
        <div class="section-title">
            <h2>Get in touch</h2>
            <p>
                Thanks for taking the time to reach out.
                How can I help you today?
            </p>
        </div>

        <div class="contact-content">
            <div class="row d-flex justify-content-center">
                <div class="col-md-4">
                    <div class="contact-box">
                        <form action="{{ route('send.email') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="Enter you email address" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="6" placeholder="Enter your message"
                                    name="message" required></textarea>
                            </div>
                            <div class=" mt-4 text-center">
                                <button class="btn-first" value="Send Message" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

@push('js')
   
    <script>
        var msg = '{{ Session::get('alert') }}';
        var exist = '{{ Session::has('alert') }}';
        if (exist) {
            alert(msg);
        }
    </script>
@endpush
