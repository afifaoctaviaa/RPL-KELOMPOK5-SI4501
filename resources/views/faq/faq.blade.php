@extends('layout.template-layout')

@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/faq.css') }}">
@endsection

@section('content')
@include('layout.main-layout')

<div class="header">
    <div class="container">
        <div class="mt-5">
            <span><a href="#">Home</a> > FAQs</span>
        </div>
        <div class="mt-3">
            <h1>
                Frequently Asked <br> Questions
            </h1>
            <p class="mt-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure nemo consequuntur expedita itaque magni, incidunt soluta cupiditate excepturi. Fuga, deleniti aliquid excepturi voluptates dolor explicabo doloremque distinctio impedit suscipit tempora vitae eveniet nobis mollitia quo minus nostrum aspernatur esse delectus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus sint, alias maxime amet reprehenderit provident nulla consectetur quasi, dolore earum reiciendis voluptates eius iure optio libero voluptate deleniti officiis rerum?</p>
        </div>
    </div>
</div>

<div class="dropdown">
    <div class="container">
        <div class="accordion" id="accordionExample">
            @foreach($faq as $faqs)
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{ $faqs->id }}">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faqs->id }}" aria-expanded="true" aria-controls="collapse{{ $faqs->id }}">
                        {{ $faqs->Header}}
                    </button>
                </h2>
                <div id="collapse{{ $faqs->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $faqs->id }}" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        {{ $faqs->Content }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
