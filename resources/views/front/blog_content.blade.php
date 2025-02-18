@extends('front.layout.blog_layout')
@section('content')
    <section class="u-align-center u-clearfix u-container-align-center u-section-2">
        <div class="u-clearfix u-sheet">
            @if(isset($post)) {{-- Eğer ilgili post mevcutsa --}}
            <div class="u-blog">
                    <div class="u-blog-post">
                        <div class="u-container-layout">
                            @if($post->image)
                                    <img src="{{asset('uploads/' . $post->image) }}" alt="{{ $post->title }}">
                            @else
                                <a class="u-post-header-link" href="blog/gönderi-{{ $post->id }}.html">
                                    <img src="{{ asset('default-placeholder.png') }}" alt="Varsayılan Resim">
                                </a>
                            @endif

                            <h2>
                                <a class="u-post-header-link" href="blog/gönderi-{{ $post->id }}.html">
                                    {{ $post->title }}
                                </a>
                            </h2>

                            <p>{{ $post->content }}</p>

                            <div class="u-metadata">
                            <span class="u-meta-date">Oluşturulma:
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
