

@extends('Layout.staticpages')

@section('title','| Contact')


@section('content')
    <div class="row">
        <div class="col-md-12">

            <h2>Contact Me</h2>
            <hr>
            <hr>

            <form>

                <div class="form-group">
                    <label name="email">Email</label>
                    <input id="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label name="subject">Subject</label>
                    <input id="subject" name="subject" class="form-control">
                </div>

                <div class="form-group">
                    <label name="message">Message</label>
                    <textarea id="message" name="message" class="form-control">Type your message here..</textarea>
                </div>

                <input type="submit" value="Send Message" class="btn btn-primary">


            </form>


        </div>
    </div>

    @endsection


</body>

</html>
