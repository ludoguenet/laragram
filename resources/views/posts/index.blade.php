@extends('layouts.app')

@section('content')
<div class="container">
    @forelse ($posts as $post)
        <div class="row mb-4">
            <div class="col-6">
                <a href="{{ route('posts.show', ['post' => $post->id]) }}"><img src="{{ asset('storage') . '/' . $post->image }}" class="w-100 img-thumbnail"></a>
            </div>
            <div class="col-6">
                <div class="d-flex align-items-center">
                    <div><img src="{{ $post->user->profile->getImage() }}" width="30px" class="rounded-circle mr-2"></div>
                    <div>Posté par <strong><a href="{{ route('profiles.show', ['user' => $post->user]) }}">{{ $post->user->username }}</a></strong> le {{ $post->created_at->format('d/m/Y') }}
                    </div>
                </div>
                <hr>
                <p>{{ $post->caption}} </p>
            </div>
        </div>
    @empty
    <div class="alert alert-info">Aucune publication n'est disponible</div>
    @endforelse
    <div class="col-12">
        <div class="row d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
