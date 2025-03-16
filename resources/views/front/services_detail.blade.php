@extends('front.layout.services_layout')
@section('content')
<section class="u-clearfix u-section-2" id="sec-496d" style="margin: 50px 0;">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="service-detail-card" style="background: #fff; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); padding: 30px; max-width: 1000px; margin: 0 auto;">
            <div class="service-header" style="text-align: center; margin-bottom: 30px;">
                <h2 style="color: #333; font-size: 2.5em; margin-bottom: 20px;">{{ $service->title }}</h2>
                @if($service->category)
                    <span style="background: #007bff; color: white; padding: 5px 15px; border-radius: 20px; font-size: 0.9em;">
                        {{ $service->category }}
                    </span>
                @endif
            </div>

            @if($service->image)
                <div class="service-image" style="margin: 30px 0; text-align: center;">
                    <img src="{{ asset('uploads/' . $service->image) }}" 
                         alt="{{ $service->title }}"
                         style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                </div>
            @endif

            <div class="service-content" style="color: #666; line-height: 1.8; font-size: 1.1em; margin-top: 30px;">
                {!! nl2br(e($service->content)) !!}
            </div>

            <div class="service-footer" style="margin-top: 40px; text-align: center;">
                <a href="{{ route('services') }}" 
                   style="display: inline-block; padding: 12px 30px; background: #007bff; color: white; text-decoration: none; 
                          border-radius: 25px; font-size: 1em; transition: background 0.3s ease;">
                    Tüm Hizmetlere Dön
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
