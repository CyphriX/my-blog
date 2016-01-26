@extends('layouts.base')

@section('custom-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
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

    TheAdventure::isComing(1455408000);
                    </code>
                </pre>
                <div class="pull-right">The story of one man's journey into the unknown...</div>
                <div>
                    <br><br>
                    <p>What happens when a man quits his job to pursue his dream of becoming
                    a web application developer, without any formal training in software development?
                    That's precisely what I intend to find out. What's in store for me and the family next?
                    Who knows, but it's bound to be an exciting adventure!</p>
                    <p>Bookmark this site and check back after the launch date above for updates on the
                        job search, PHP tutorials, and more.</p>
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
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection