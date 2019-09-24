@if (session()->has('mesaj'))
    <div class="alert alert-{{ session('mesaj_tip') }}">{{ session('mesaj') }}</div>
    @endif