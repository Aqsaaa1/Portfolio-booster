@include('partials.header')




<!-- Templates Section (Dark Aesthetic)-->
<section class="templates-section-dark py-5" id="templates">
    <canvas id="circleCanvas"></canvas>

    <div class="container position-relative text-center">
        <div class="section-header mb-5">
            <h2>Explore Stunning Templates</h2>
            <p>Pick a design that fits your personality.</p>
        </div>

        <div class="row g-4 justify-content-center">
            @php
            $templates = [
            ['id' => 1, 'image' => asset('images/templates/template1.png')],
            ['id' => 2, 'image' => asset('images/templates/template2.png')],
            ['id' => 3, 'image' => asset('images/templates/template3.png')],
            ['id' => 4, 'image' => asset('images/templates/template4.png')],
            ['id' => 5, 'image' => asset('images/templates/template5.png')],
            ['id' => 6, 'image' => asset('images/templates/template6.png')],
            ];
            @endphp


            <div class="row g-4 justify-content-center">
                @foreach($templates as $template)
                <div class="col-lg-4 col-md-6">
                    <div class="template-card">
                        <img src="{{ $template['image'] }}" alt="Template {{ $template['id'] }}" style="width: 100%; height: 250px; object-fit: contain; ">
                        <div class="overlay d-flex justify-content-center gap-2">
                            <a class="btn btn-light" href="{{ route('templates.preview', $template['id']) }}">Preview</a>
                            <a class="btn btn-primary" href="{{ route('portfolio.form', $template['id']) }}">Select</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

    </div>


    </div>
</section>

<div style="
  width: 60px;
  height: 2px;
  background: linear-gradient(90deg, #ff0080, #7928ca);
  border-radius: 10px;
  margin: 80px auto;
  box-shadow: 0 0 12px #ff008080;
"></div>


@include('partials.footer')