@extends('master')

@section('title')
    <title>About Me</title>
@endsection

@section('content')
    <div class="container page_margin">

            <div class="row">
                <div class="col-lg-3 "> </div>
                <div class="col-lg-4 col-12">

                <h4 class="pt-4 text-center">About Me</h4>
                    <ul class="list-unstyled ">
                        <li><strong>Profession: </strong> Software Developer</li>
                        <li><strong>Location: </strong>  Dhaka</li>
                        <li><strong>Age:</strong> 30 </li>
                        <li><strong>Hobby:</strong> Travelling</li>
                    </ul>
                
            </div>
            <div class="col-lg-4 col-12 text-center">
                <img style="max-width:200px;margin-top:20px" class="float-start" src="{{ asset('/images/me.jpg') }}" alt="me">
            </div></div>
       
</div>

    <div class="container mt-2">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <section>
                <h4 class="text-center">Education</h4>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">University</h5>
                        <p class="card-text">Bachelor of Science in Computer Science<br>Graduation Year: 2017</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">College</h5>
                        <p class="card-text">HSC <br>Graduation Year: 2010</p>
                    </div>
                </div>
            </section>

            <!-- Work Experience Section -->
            <section class="mt-2">
                <h4 class=" text-center">Work Experience</h4>
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Desktop It</h6>
                        <p class="card-text mb-0">Leading a software Development role</p>
                        <p class="card-text"><small class="text-muted">05/02/2023 - Continue</small></p>
                    </div>
                </div>

            </section>

            <!-- Certifications Section -->
            <section class="mt-2">
                <h4 class=" text-center">Certifications</h4>
                <ul class="list-group">
                    <li class="list-group-item"><a href="https://www.udemy.com/certificate/UC-2e46eb79-5340-4b15-a3ba-0203b51618f0">The Ultimate Redux Course (with Redux toolkit)</a></li>
                    <li class="list-group-item"><a href="https://www.codecademy.com/profiles/AsifMosharraf/certificates/13ffe064f6504262a9e9e3cf76be9bf3">Learn Advanced React Course</a></li>
                    <li class="list-group-item"><a href="https://www.codecademy.com/profiles/AsifMosharraf/certificates/042a4e5884e3eb6ea1f2a12be6abb851">Learn SQL Course</a></li>
                    
                  
                </ul>
            </section>
        </div>
    </div>
</div>

@endsection
