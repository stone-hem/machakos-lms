<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Machakos University</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        {{-- <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style> --}}

        <link rel="stylesheet" href="{{ asset('style/landing-page.css') }}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div> --}}

<!--MAIN-->
<main class="flex">
    <section class="flex-content padding_2x">
        <article>
            <em class="tag">Machakos University</em>
            <h1 class="title big">The  <em>Institution & Learning</em> Center.</h1>
            <p>This is a center that is has been excelling and is soaring heights in transforming industries for a huge amount of time now...</p>
            <a href="{{ route('login') }}" class="btn1">Log in <i class="fa fa-arrow-right"></i></a>
          

        </article>
    </section>
    <section class="flex-content padding_2x">
    </section>
</main>

<!--SECTION1-->
{{-- <div class="section1">
    <section class="flex-content padding_2x">
        <em class="tag">ABOUT US</em>
        <h1 class="title medium">We help you learn faster</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <em style="color:var(--secondary)">It is a long established fact</em>
    </section>
    <section class="flex-content padding_2x">
        <form id="form" class="padding_2x">
            <h2 class="small">Sign in</h2>
            <fieldset>
                <label for="fname">Your Email</label>
                <input type="text" name="fname" id="fname" maxlength="60" />
            </fieldset>
            <fieldset>
                <label for="cno" id="cno">Contact number</label>
                <input type="tel" name="cno" maxlength="15" />
            </fieldset>
         
            <fieldset>
                <button id="form_btn" class="btn2">SUBMIT DETAILS</button>
            </fieldset>
        </form>
    </section>
</div> --}}

<!--SECTION2-->
<div class="sections section2 padding_2x">
    <article class="cards padding_2x">
        <section class="flex-content padding_2x">
            <figure>
                <img src="https://i.postimg.cc/J7yFYNtr/01.png" alt="" loading="lazy">
            </figure>
            <h2 class="title small">Pick a <em>Course</em></h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </section>
        <section class="flex-content padding_2x">
            <figure>
                <img src="https://i.postimg.cc/jSTkjBc2/02.png" alt="" loading="lazy">
                <h2 class="title small"><em>Schedule</em> with us</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </figure>
        </section>
        <section class="flex-content padding_2x">
            <figure>
                <img src="https://i.postimg.cc/FKsWyc2Q/03.png" alt="" loading="lazy">
                <h2 class="title small">Get things <em>done</em></h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </figure>
        </section>
    </article>
</div>

<!--SECTION4-->
<div class="section4 flex">
    <section class="flex-content padding_2x">
        <figure>
            <img src="https://i.postimg.cc/YSnXb0HL/05.jpg" alt="">
            <span class="padding_1x">
                <p class="title medium">8+</p>
                <em>Years Since Creditation</em>
           </span>
        </figure>
    </section>
    <section class="flex-content padding_2x">
        <em class="tag">WHY CHOOSE US?</em>
        <h1 class="title medium">We provide the best services for your help!</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
        <ul>
            <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</li>
            <li>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</li>
            <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</li>
        </ul>
    </section>
</div>

<!--SECTION3-->
<div class="section3 padding_2x">
    <div class="title_header">
        <em>CHECK THIS OUT</em>
        <h1 class="title medium">Quality Services</h1>
    </div>
    <div class="flex">
    <section class="flex-content padding_1x">
        <figure>
            <img src="{{ asset('images/fab-lentz-mRMQwK513hY-unsplash.jpg') }}" alt="">
            <article>
                <span class="padding_1x">
                    <h2 class="cursive">Starters</h2>
                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </span>
            </article>
        </figure>
    </section>
    <section class="flex-content padding_1x">
        <figure>
            <img src="{{ asset('images/fab-lentz-mRMQwK513hY-unsplash.jpg') }}" alt="">
            <article>
                <span class="padding_1x">
                    <h2 class="cursive">Classes</h2>
                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </span>
            </article>
        </figure>
    </section>
    <section class="flex-content padding_1x">
        <figure>
            <img src="{{ asset('images/fab-lentz-mRMQwK513hY-unsplash.jpg') }}" alt="">
            <article>
                <span class="padding_1x">
                    <h2 class="cursive">Hostels</h2>
                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </span>
            </article>
        </figure>
    </section>
    <section class="flex-content padding_1x">
        <figure>
            <img src="{{ asset('images/passion.jpg') }}" alt="">
            <article>
                <span class="padding_1x">
                    <h2 class="cursive">Hotels</h2>
                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </span>
            </article>
        </figure>
    </section>
    </div>
</div>

<!--SECTION5-->
<div class="section5 flex">
    <section class="flex-content padding_2x">
        <h1 class="title small">Stay connected with us</h1>
        <p>Have any questions? please feel free to contact us. We are always happy to hear from you.</p>
        <a href="#" class="btn1">Contact us</a>
    </section>
</div>

<!--FOOTER-->
<footer>
    <section class="flex-content padding_2x">
        <h3 class="title small">Welcome to our<em>{offices}</em></h3>
        <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <span class="social_icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
        </span>
    </section>
    <section class="flex-content padding_2x">
        <h3 class="title small">Opening hours</h3>
        <p>Monday ~ Fiday, 8am-6pm || Saturday, 10am-1pm</p>
    </section>
    <section class="flex-content padding_2x">
        <h3 class="title small">Other Links</h3>
        <a href="#">Terms & conditions</a>
        <a href="#">Privacy policy</a>
        <a href="#">Cookie policy</a>
        <a href="#">Raise a ticket</a>
    </section>
    <section class="flex-content padding_2x">
        <h3 class="title small">Newsletter</h3>
        <p>Subscribe our newsletter to get our latest update & news</p>
        <fieldset class="flex">
            <input type="email" name="email" placeholder="Email address" class="flex-content" required="" />
            <button class="btn1 flex-content"><i class="fa fa-paper-plane"></i></button>
        </fieldset>
    </section>
</footer>
<div class="sub_footer">
<p> 2022 © All rights reserved by machakos uni</p>
</div>
    </body>
</html>
