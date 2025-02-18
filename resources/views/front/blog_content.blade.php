@extends('front.layout.blog_layout')
@section('content')
    <section class="u-align-center u-clearfix u-container-align-center u-section-2" style="margin: 40px 0;">
        <div class="u-clearfix u-sheet">
            @if(isset($post))
            <div class="u-blog">
                    <div class="u-blog-post" style="background: #fff; 
                        border-radius: 8px; 
                        box-shadow: 0 2px 10px rgba(0,0,0,0.1); 
                        padding: 25px; 
                        margin: 30px 0;
                        transition: all 0.3s ease;
                        cursor: pointer;">
                        <style>
                            .u-blog-post:hover {
                                transform: translateY(-5px);
                                box-shadow: 0 5px 20px rgba(0,0,0,0.15);
                            }
                        </style>
                        <div class="u-container-layout">
                            @if($post->image)
                                    <img src="{{asset('uploads/' . $post->image) }}" alt="{{ $post->title }}" style="width: 100%; border-radius: 6px; margin-bottom: 20px;">
                            @else
                                    <img src="{{ asset('default-placeholder.png') }}" alt="Varsayılan Resim" style="width: 100%; border-radius: 6px; margin-bottom: 20px;">
                            @endif

                            <h3 class="u-post-header-link" style="font-size: 24px; margin: 15px 0; color: #333;">
                                    {{ $post->title }}
                            </h3>

                            <p style="line-height: 1.6; color: #666; margin: 20px 0;">{{ $post->content }}</p>

                            <div class="u-metadata" style="border-top: 1px solid #eee; padding-top: 15px; margin-top: 20px;">
                            <span class="u-meta-date" style="color: #888; font-size: 14px;">
                                <i class="far fa-calendar-alt" style="margin-right: 5px;"></i>Oluşturulma:
                                {{ $post->created_at ? $post->created_at->format('d.m.Y H:i') : 'Tarih Yok' }}
                            </span>
                            </div>

                        </div>
                    </div>
            </div>
            @else
                <p>Belirtilen blog gönderisi bulunamadı.</p>
            @endif
        </div>
    </section>
@endsection
