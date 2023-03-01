@extends('master')
@section('title', 'Contact us')
@section('content')
    <div>
        <h1 class='text-center'>CONTACT US</h1>
        <div class="row">
            <div class="col-10 mx-auto">
                <form action="{{ route('contact.received') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text"
                            class="form-control" name="email" id="email">
                        </div>
                    <div class="mb-3">
                        <label for="adress" class="form-label">Adress</label>
                        <input type="text"
                            class="form-control" name="adress" id="adress">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea 
                        type="text"
                        class="form-control"
                        rows='7' name="message" id="message"
                        ></textarea>
                    </div>
                    <div class="d-grid"><button type="submit" class="btn btn-info">send</button></div>
                </form>
            </div>
        </div>
    </div>
@endsection
