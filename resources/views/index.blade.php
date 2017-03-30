@extends('layouts.master')

@section('body')
    <div class="container">
        <div class="deets">
            <section>
                <h2>In April elections, the average age of Springfield voters is 68.</h2>
                <div class="content">
                    <p>
                        C’mon guys, we can do better.
                    </p>
                </div>
            </section>

            <section>
                <h2>WHEN?</h2>
                <div class="content">
                    <p class="no_wrap">
                        Tuesday, April 4<br>
                        6 a.m. - 7 p.m.
                    </p>
                </div>
            </section>

            <section>
                <h2>WHERE?</h2>
                <div class="content">
                    <form action="#">
                        <p>
                            <a class="button" href="http://maps.springfieldmo.gov/voterdist/" target="_blank">Find Polling Station</a>
                        </p>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <div class="container">
        @include('why')
        @include('what')
        @include('share')
        @include('word')
    </div>

@endsection
