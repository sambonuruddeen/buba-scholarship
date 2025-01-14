<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senator Shehu Buba Umar Scholarship Program</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @include('components.header');

    <div class="container my-5">
        <div id="senatorCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/slide1.jpg') }}" class="d-block w-100" alt="Senator with Students">
                    <div class="carousel-caption">
                        <h2>Empowering Education in Bauchi South</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/slide2.jpg') }}" class="d-block w-100" alt="Scholarship Recipients">
                    <div class="carousel-caption">
                        <h2>Creating Future Leaders</h2>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#senatorCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#senatorCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <section id="about" class="mt-5 section-content">
            <h1 class="section-title">About the Program</h1>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('images/sen-students.png') }}" class="img-fluid rounded" alt="Senator with Students">
                </div>
                <div class="col-md-6">
                    <p class="lead">The Senator Shehu Buba Umar Scholarship Program is aimed at supporting students from the Bauchi South senatorial district.</p>
                </div>
            </div>
        </section>

        <section id="apply" class="mt-5 section-content">
            <h1 class="section-title">How to Apply</h1>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('images/apply.png') }}" class="img-fluid rounded" alt="Application Process">
                </div>
                <div class="col-md-6">
                    <div class="application-steps">
                        <h4>Application Process:</h4>
                        <ol>
                            <li>Fill out the online application form</li>
                            <li>Submit required documents</li>
                            <li>Wait for review and selection</li>
                        </ol>
                        <a href="{{ url('application') }}" class="btn btn-secondary">Apply Now</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="dates" class="mt-5 section-content">
            <h1 class="section-title">Important Dates & Deadlines</h1>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <ul class="text-center list-unstyled">
                        <li>Application Opens: January 15, 2025</li>
                        <li>Deadline: March 1, 2025</li>
                        <li>Results Announcement: April 1, 2025</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="news" class="mt-5 section-content">
            <h1 class="section-title">News & Updates</h1>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images/slide 3.jpg') }}" class="card-img-top" alt="News 1">
                        <div class="card-body">
                            <h5 class="card-title">Latest Scholarship Awards</h5>
                            <p class="card-text">Recent ceremony highlights...</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="mt-5 section-content">
            <h1 class="section-title">Contact Us</h1>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="contact-info">
                        <p><i class="fas fa-envelope me-2"></i> Email: info@scholarshipprogram.com</p>
                        <p><i class="fas fa-phone me-2"></i> Phone: +234 XXX XXX XXXX</p>
                        <p><i class="fas fa-location-dot me-2"></i> Address: Bauchi, Nigeria</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="faqs" class="mt-5 section-content">
            <h1 class="section-title">FAQs</h1>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <p class="text-center">Find answers to frequently asked questions about the scholarship program.</p>
                </div>
            </div>
        </section>

        <section id="recipients" class="mt-5 section-content">
            <h1 class="section-title">Scholarship Recipients</h1>
            <div class="row g-4">
                <div class="col-md-4">
                    <img src="{{ asset('images/image.jpg') }}" class="img-fluid rounded" style="max-height: 250px;" alt="Recipient 1">
                    <h4 class="mt-2">2023 Recipients</h4>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/image.jpg') }}" class="img-fluid rounded" style="max-height: 250px;"  alt="Recipient 2">
                    <h4 class="mt-2">2022 Recipients</h4>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/image.jpg') }}" class="img-fluid rounded" style="max-height: 250px;" " alt="Recipient 3">
                    <h4 class="mt-2">2021 Recipients</h4>
                </div>
            </div>
        </section>
  @include('layouts.footer')
</body>
</html>