@extends('layouts.app')


@section('content')
    <div class="faqs_section faq_page_content">
        <img src="./assets/images/upLine.webp" class="videoUpLine" alt="" />
        <div class="container">
            <h1 class="text-center fw-bold text-white position-relative mb-5">
                F.A.Q
            </h1>
            <div class="col-lg-7 mx-auto">
                <div class="faq_page_wrapper">

                    @foreach ($faqs as $faq)
                        <div class="custom-accordion-item">
                            <div class="custom-accordian-body">
                                <div class="custom-accordion-header">
                                    <span>{{ $faq->question }}</span>
                                    <img class="custom-icon" src={{ asset('images/plus.png') }} alt="Expand" />
                                </div>
                                <div class="custom-accordion-content">
                                    <p>
                                        {{ $faq->answer }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="col-lg-6 my-3 mx-auto mt-5">
            <form id="contactForm" class="contact_form">
                @csrf
                <div class="row">
                    <div class="col-lg-12 mb-2">
                        <input name="name" id="name" type="text" placeholder="Name" />
                    </div>
                    <div class="col-lg-6 mb-2">
                        <input name="phone" id="phone" type="text" placeholder="Phone" />
                    </div>
                    <div class="col-lg-6 mb-2">
                        <input name="email" id="email" type="text" placeholder="Email" />
                    </div>
                    <div class="col-lg-6 mb-2">
                        <input name="city" id="city" type="text" placeholder="City" />
                    </div>
                    <div class="col-lg-6 mb-2">
                        <input name="zip_code" id="zip_code" type="text" placeholder="Zip Code" />
                    </div>
                    <div class="col-lg-12 mb-2">
                        <select name="subject" id="subject">
                            <option value="" selected disabled>Select Subject</option>
                            <option value="Escape-Games">Escape Games</option>
                            <option value="Faranchise">Faranchise</option>
                            <option value="Events">Events</option>
                            <option value="Team-Building">Team Building</option>
                            <option value="Training">Training</option>
                            <option value="Request-for-information">Request for information</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <textarea name="description" id="description" rows="5" placeholder="Full decription of your project..."></textarea>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="content_btn w-50 mx-auto">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <script>
        $(document).ready(function () {
            $("#contactForm").submit(function (e) {
                e.preventDefault(); // Prevent the default form submission
    
                var formData = $(this).serialize(); // Serialize form data
    
                $.ajax({
                    url: '{{ route("contact.submit") }}', // The URL where the form will be submitted
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        // On success, show the success toast
                        Toastify({
                            text: "Your message has been sent successfully!",
                            backgroundColor: "green",
                            close: true,
                            gravity: "top",
                            position: "right",
                            duration: 3000
                        }).showToast();
                        // Optionally clear the form after submission
                        $("#contactForm")[0].reset();
                    },
                    error: function(xhr) {
                        // If an error occurs, show an error toast
                        Toastify({
                            text: "Something went wrong. Please try again.",
                            backgroundColor: "red",
                            close: true,
                            gravity: "top",
                            position: "right",
                            duration: 3000
                        }).showToast();
                    }
                });
            });
        });
    </script>
@endsection
