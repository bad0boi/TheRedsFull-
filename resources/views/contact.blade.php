@extends('layout')

@section('contact')

    <!-- This functionality is using Mail Trap as inbox source for all emails sent via GitHub account -->

    <div id="contact-wrapper">
        <div  class="container p-5">
            <h1 style="color: black;">Contact Us</h1>
                <small> We ensure to reply to every single email sent the members of our community.</small>
                    <small> <br>  If you have any issues or any cause for reaching out,  please provide your email
                    address and we will get back to you as soon as possible.</small>
                        <small>
                            <ul style="color: black; margin-top: 10px;">
                                    <li>Is there something broken?</li>
                                    <li>Are you worried about a user?</li>
                                    <li>Advertisement?</li>
                                    <li>Functionality Issues?</li>
                                </ul>
                                     </small>
            <div class="form-group pt-3">
                <form action="/contact" method="POST">
                    @csrf <!-- Ensure this is inside every form not outside of it -->
                        <label for="inputEmail"> E-mail Address</label>
                            <input type="text" id="email" name="email" placeholder="Enter your email"> <br>

                                @error('email')
                                    <div style="color: red;">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                            <button class="btn-primary" type="submit">Send</button>
                                                @if(session('message'))
                                                    <div>
                                                        <p style="color: mediumseagreen;">{{ session('message') }} </p>
                                                    </div>

                                                @endif

                        </form>
                    </div>
        </div>
    </div>


    @endsection
