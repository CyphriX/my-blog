@extends('layouts.base')

@section('custom-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <!-- left column -->
            <div class="col-md-7 left-main-column">
                <h2>Adventures in PHP</h2>
                <pre>
                    <code class="language-php">
    class TheAdventure {
        protected static $launch_date;

        public static function isComing($when)
        {
            static::$launch_date = gmdate("Y-m-d\TH:i:s\Z", $when);
        }
    }

    TheAdventure::isComing(1475798400);
                    </code>
                </pre>
                <div class="pull-right">The story of one man's journey into the unknown...</div>
                <div class="clearboth">
                    <br>
                    <h4>Join the Mailing List</h4>
                    <p>Want to receive a notification of when the site goes live? Just put your e-mail address in the box, and I'll make it happen.</p>
                    <form method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-9">
                                <input type="text" name="email" id="mailing-list-email" class="form-control" value="" title="Enter your e-mail address" required="required" >
                                @if(!empty($messages) && $messages->has('email'))
                                    <div class="alert alert-warning">
                                        {{ $messages->first('email') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary">Join the Fun!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- right column -->
            <div class="col-md-5 right-main-column">
                <div>
                    <br>
                    <p class="lead">Are you interested in tutorials on PHP, Composer, Laravel, and more?</p>
                    <img class="img-responsive" src="{{ asset('img/php-logo.png') }}" alt="PHP Logo">
                    <br>
                    <p>Adventures in PHP aims to be a valuable resource for those who are teaching themselves web development, with a primary focus on PHP. On occasion we may venture into some JavaScript and other web technologies that help us tie everything together.</p>
                    <p>I currently have multiple tutorials in the works, and am looking forward to the launch date. If you want to stay in the loop, join the mailing list so that I can keep you up to date!</p>
                    <h3>THE ADVENTURE IS COMING...</h3>

                </div>
            </div>
        </div>
        <br>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Leaderboard_1 -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:500px;height:90px"
             data-ad-client="ca-pub-4479303650241576"
             data-ad-slot="5303990445"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
@endsection

@section('bodyscripts')
<script>
    $(document).ready(function() {
        $('#mailing-list-email').focus();
    });
</script>
@endsection