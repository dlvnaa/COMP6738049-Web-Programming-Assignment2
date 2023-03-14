@extends('template')

@section('content')
<div>
    <br>
        <h1 class="text2 text-slate-900 font-serif flex justify-center">Are you interested in registering as a HIMSTAT activist candidate?</h1>
            @foreach ($user as $u)
                @if($u['key'] == $id)
                    <div class="text2 font-serif font-light flex justify-center text-white">
                        <button class = "bg-slate-900 px-5 m-2 rounded-full"
                        onclick="alert('Thank you {{$u['name']}} for registering as a HIMSTAT activist candidate. Next, you will be informed via your @binus.ac.id email!')">
                        YES</button>
                    </div>
                    @break
                @endif
</div>
@endforeach    

@endsection
@include('footer')
