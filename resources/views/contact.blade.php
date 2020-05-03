@extends('layout.main')

@section('content-title')
    Contact Us
@endsection

@section('content-body')
    <br>
    <div class="register">
        <div class="submit_form">
            <h3>Contact Us</h3><br>
            <h2>You can leave your message</h2><br>
            @include('layout.messages')
            <form action={{ route('contactSubmit') }}  method="post">
                @csrf
                <div class="reg">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Name" required><br>
                    <input type="emain" id="email" name="email" class="form-control" placeholder="Email" required><br>
                    <textarea name="message" id="message" class="form-control" placeholder="Message" rows="1" required></textarea> <br>
                </div>
                <div class="submit_form">
                    <input type="submit" id="submit" class="submit" value="SUBMIT"><br>
                </div>
            </form>
        </div>
    </div>
    <br>
@endsection
