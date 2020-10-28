@extends('layouts.app')

@section('title', __('main.categories') )

@section('content')

    <?php foreach ($categories as $category): ?>
      <div class="panel">
            <a href="{{ route('category', $category->code) }}">
                <img src="{{ Storage::url($category->image) }}" height="200px">
                <h2>{{ $category->__('name') }}</h2>
            </a>
            <p>
                {{ $category->__('description') }}
            </p>
        </div>
    <?php endforeach; ?>

@endsection
