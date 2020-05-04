@extends('layout.main')

@section('content-title')
    Event Registration
@endsection

@section('content-body')
    <br>
    <div class="register">
        <div class="submit_form">
            <h3>Contact Us</h3><br>
            <h2>You can leave your message</h2><br>
            @include('layout.messages')
            <form action={{ route('registerEvent') }}  method="post">
                @csrf
                <div class="reg">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Name" required><br>
                    <input type="text" id="organization" name="organization" class="form-control" placeholder="Organization" required><br>
                    <input class="form-control" id="date" name="date" type="date"><br>
                    <input type="text" id="place" name="place" class="form-control" placeholder="Place (address)" required><br>
                    <textarea name="requirements" id="requirements" class="form-control" placeholder="Requirements" rows="1" required></textarea> <br>
                </div>
                <div class="submit_form">
                    <input type="submit" id="submit" class="submit" value="SUBMIT"><br>
                </div>
            </form>
        </div>
    </div>
    <br>
@endsection
