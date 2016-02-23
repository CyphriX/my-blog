@extends('layouts.base')

@section('custom-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6 left-main-column">
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

    TheAdventure::isComing(1456876800);
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
                                <button type="submit" class="btn btn-primary">Join the Party</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- right column -->
            <div class="col-md-6 right-main-column">
                <div>
                    <br><br>
                    <p class="lead">What happens when a man quits his job to pursue his dream of becoming
                    a web application developer, without any formal training in software development?
                    That's precisely what I intend to find out. What's in store for me and the family next?
                    Who knows, but it's bound to be an exciting adventure!</p>
                    <div class="alert alert-warning" style="padding:20px">
                        <strong>UPDATE: </strong>Due to life happening in a manner not conducive to progress on
                        personal projects (as it so often does), I've had to push back the launch date by a
                        couple of weeks. I'll keep you updated on progress.
                    </div>
                    <p>Bookmark this site (or better yet, join the mailing list) and check back after the launch date
                        for updates on the job search, PHP tutorials, and more.</p>
                </div>
                <hr>
                <div class="row">
                    <div id="profile" class="col-md-5">
                        <img id='jason' src="{{ asset('img/jason.jpg') }}" class="img-responsive">
                    </div>

                    <div class="col-md-7">
                        <div id="profile-desc" class="small" style="text-align: left">
                            <h3 class="jason">Jason Swint</h3>
                            <p class="caption">
                                Jason currently serves as the Director of Management Information Services
                                for a mid-sized healthcare services provider in North Carolina.
                            </p>
                            <p>
                                He is a skilled and dedicated professional who is currently seeking to pursue his dream
                                job in software development. While having no formal education in computer science, he
                                constantly seeks to better himself with self-education, via the many resources available
                                on the Internet, as well as those in printed books.
                            </p>
                            <p>
                                For more info: &nbsp;&nbsp;&nbsp;
                                <a href="https://www.linkedin.com/in/jason-swint-b7165294"><img src="{{  asset('img/linkedin.png') }}"></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Leaderboard_1 -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
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