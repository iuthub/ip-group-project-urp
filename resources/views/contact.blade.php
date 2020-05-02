@extends('layout.main')

@section('content-title')
    Contact Us
@endsection

@section('content-body')
    <div class="register">
        <div class="submit_form">
            <h3>Contact Us</h3><br>
            <h2>You leave your message</h2><br>
            <form action="" id="contect-form" method="post">
                <div class="reg">
                    <input type="text" name="name" class="form-control" placeholder="Name" required><br>
                    <input type="text" name="name" class="form-control" placeholder="Surname" required><br>
                    <input type="emain" name="email" class="form-control" placeholder="Email" required><br>
                    <textarea name="message" class="form-control" placeholder="Message" rows="1" required></textarea> <br>
                </div>
                <div class="submit_form">
                    <input type="submit" class="submit" value="SUBMIT"><br>
                </div>
            </form>
        </div>
    </div>
@endsection
