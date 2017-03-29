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
                    <p>
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
                            <label for="address">Your Home Address</label>
                            <input type="text" name="address" id="address">
                        </p>

                        <p>
                            <label for="zip">Your Zip</label>
                            <input type="text" name="zip" id="zip">
                        </p>

                        <p>
                            <button type="submit">Find Polling Station</button>
                        </p>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <div class="container">
        <div class="point">
            <h2>WHY?</h2>
            <div class="content">
                <p>
                    Overall Greene County voter turnout in April 2016 was 10.43%. Local elections may not make national
                    news, but the results have a real impact on your life.
                </p>

                <p>
                    It couldn’t be easier: <a href="#">Show your ID</a>, draw some lines on a form, DONE. It’s faster than a Buzzfeed
                    quiz, and you leave with a free sticker.
                </p>

                <h3>Small things can make a lasting difference. Like: Glitter.</h3>
            </div>
        </div>

        <div class="point">
            <h2>WHAT?</h2>
            <div class="content">

                <p>
                    This <a href="#">Sample Ballot PDF</a> shows what you’ll see on Tuesday. Read on below for more info on the candidates and issues.
                </p>
                <p>
                    <a href="#">Mayor of Springfield</a><br>
                    <a href="#">5 City Council seats - 2 General + 3 Zone seats</a><br>
                    <a href="#">Proposition SPS - Bond issue</a><br>
                </p>


                <hr>
                <h2>Mayor</h2>

                <strong>Ken McClure</strong>
                <p class="ntm">
                    <a href="#">https://www.facebook.com/KenMcClureForMayor/</a><br>
                    <a href="#">https://twitter.com/McClureForMayor</a><br>
                    <a href="#">http://mcclureformayor.com/</a>
                </p>

                <strong>Kristi Fulnecky</strong>
                <p class="ntm">
                    <a href="#">https://www.facebook.com/fulneckyforspringfield</a>
                    <a href="#">https://twitter.com/fulnecky4sgf</a>
                    <a href="#">http://www.fulneckyforspringfield.com/</a>
                </p>

                <hr>

                <h2>City Council</h2>

                <p>
                    The next Leslie Knope needs you. Don’t know your Zone? <a href="#">Find out with this handy map.</a>
                </p>

                <p class="center">
                    Want to learn more about the candidates? Thanks, News-Leader!<br>
                    <a href="#">Here’s What You Need to Know Ahead of Election Day</a>
                </p>

                <p class="note">
                    <strong>Note:</strong> There are several local issues on the ballot outside of Springfield, see the
                    <a href="#">Greene County Sample Ballot</a> if you’re registered in Ash Grove, Battlefield,
                    Fair Grove, Republic, Strafford, Walnut Grove or Willard.
                </p>

                <h3>You’re an American, dammit! Make some choices! (Please.)</h3>

                <hr>

                <h2>Proposition SPS</h2>

                <p>
                    Proposition SPS is a $189-million bond issue would fund improvements to 19 schools over a
                    six-year period. The cost to the owner of a home valued at $100,000 would be approximately $23
                    the first year and $46 annually beginning the second year.
                </p>
                <ul>
                    <li><a href="#">Read more from Springfield Public Schools</a></li>
                </ul>

                <h3>Do it for the kids! (It = Read up and make an informed decision.)</h3>
            </div>
        </div>

        <div class="point">
            <h2>Share</h2>
            <div class="content">
                <p>
                    What kind of millennial would you be if you didn’t share this on social media? Try our handy
                    Profile Photo Maker Machine™ to let your friends know you’re going to SGFing Vote.
                </p>
            </div>
        </div>
    </div>

@endsection
