{{-- Livewire/Volt sayfa bileşenleri (#[Layout(...)]) için köprü layout.
     Livewire bu dosyaya $slot değişkenini gönderir; biz onu mevcut
     layouts.full şablonunun @section('content') alanına aktarıyoruz. --}}
@extends('layouts.full')

@section('content')
    {{ $slot }}
@endsection
