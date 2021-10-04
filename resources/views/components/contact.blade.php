@extends('main')
@section('main-ui')

    <h1 class="display-1">Get In Touch With Me</h1>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>

    @endif

    <form action="{{ url('/send') }}" method="post">
        @csrf
        <div class="mb-3">
            <input class="form-control" type="text" placeholder="Your Name" aria-label="name" id="name">
            {{-- @error('name')
                <span class="text-danger"> {{ $message }} </span>
            @enderror --}}
        </div>

        <div class="mb-3">
            <input type="email" class="form-control" id="email" placeholder="name@example.com">
            {{-- @error('email')
                <span class="text-danger"> {{ $message }} </span>
            @enderror --}}
        </div>

        <div class="mb-3">
            <textarea class="form-control" id="comment" rows="3" placeholder="Your Comments"></textarea>
            {{-- @error('comment')
                <span class="text-danger"> {{ $message }} </span>
            @enderror --}}
        </div>

        <input type="submit" name="send" class="btn btn-outline-light">
        <input class="btn btn-outline-light" type="reset" value="Reset">

    </form>
@endsection
