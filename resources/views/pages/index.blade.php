@extends('master')

@section('title')
    <title>My portfolio</title>
@endsection

@section('content')
    <div class="page_margin">

        <div class="row">

            <div class="col-lg-6 col-12">
                <img class="img-fluid " src="{{ asset('images/bg.webp') }}" alt="">
            </div>

            <div class="col-lg-6 col-12 text-center">
                <img class="img-thumbnail rounded-circle mt-5" src="{{ asset('images/test.png') }}" alt="">

                <h1 class="mt-2 ">Hi! I am Asif Mosharraf</h1>
                <h5>Software Developer</h5>
                <p class="px-3">I am professional web and software developer having good knowledge on php,laravel
                    framework.Proficient in crafting robust, scalable solutions with a keen eye for efficiency. Adept at
                    collaborating with cross-functional teams to bring innovative projects to life. </p>
                <a href="{{ route('contact') }}" class="btn btn-success mx-2"> Hire Me</a>
                <a href="{{ route('contact') }}" class="btn btn-primary mx-2"> Contact</a>
            </div>
        </div>
    </div>

    <div class="container px-4 py-5 mt-5">
        <h2 class="pb-4 border-bottom text-center ">My efficiency </h2>
        <div class="row g-4 py-2 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div>
                    <h4>Expertise in PHP and Laravel</h4>
                    <p>Benefit from my in-depth knowledge and proficiency in PHP and the Laravel framework. I bring a wealth
                        of experience to the table, ensuring your projects are developed with precision and efficiency.</p>
                    <a href="#" class="btn btn-success">
                        Details
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div>
                    <h4>Robust and Scalable Solutions</h4>
                    <p>I prioritize crafting solutions that are not only robust but also scalable. Your web and software
                        applications will be well-prepared to handle growth and evolving requirements, saving you time and
                        resources in the long run.</p>
                    <a href="#" class="btn btn-success">
                        Details
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">

                <div>
                    <h4>Innovative Approach</h4>
                    <p>I thrive on collaboration and bring an innovative mindset to every project. Expect a dedicated
                        partner who actively engages with cross-functional teams, contributing fresh ideas and solutions to
                        propel your projects forward.</p>
                    <a href="#" class="btn btn-success">
                        Details
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5 w-75">
        <h2>Skill Progress</h2>

        <div class="mb-3">
            <label for="skill1">Javascript</label>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
            </div>
        </div>

        <div class="mb-3">
            <label for="skill2">Html</label>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
            </div>
        </div>

       
        <div class="mb-3">
            <label for="skill3">Php</label>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
            </div>
        </div>

  
        <div class="mb-3">
            <label for="skill4">CSS</label>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
            </div>
        </div>

   
        <div class="mb-3">
            <label for="skill5">Mysql</label>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
            </div>
        </div>
    </div>
@endsection
