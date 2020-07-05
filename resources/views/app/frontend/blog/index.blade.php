@extends('layouts.frontend.base')
@section('title') Blog @endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <!-- START: Filter -->
            <div class="nk-pagination nk-pagination-nobg nk-pagination-center">
                <a href="#nk-toggle-filter">
                    <span class="nk-icon-squares"></span>
                </a>
            </div>
            <ul class="nk-isotope-filter">
                <li class="active" data-filter="*">All</li>
                <li data-filter="Nature">Nature</li>
                <li data-filter="Cities">Cities</li>
                <li data-filter="Branding">Branding</li>
                <li data-filter="Design">Design</li>
            </ul>
            <!-- END: Filter -->

            <!-- START: Posts List -->
            <div class="nk-blog-isotope nk-isotope nk-isotope-gap nk-isotope-1-cols">


                <!-- START: Post -->
                <div class="nk-isotope-item" data-filter="Nature">
                    <div class="nk-blog-post">
                        <div class="nk-post-thumb">
                            <a href="{{ route('blog.detail', ['slug'=> rand(1000,9999)]) }}">
                                <img src="{{ asset("frontend/images/post-1-mid.jpg") }}" alt="" class="nk-img-stretch">
                            </a>
                            <div class="nk-post-category"><a href="#">Nature</a></div>
                        </div>
                        <h2 class="nk-post-title h4"><a href="{{ route('blog.detail', ['slug'=> rand(1000,9999)]) }}">Something I need to tell you</a></h2>

                        <div class="nk-post-date">
                            September 18, 2016
                        </div>

                        <div class="nk-post-text">
                            <p>Gathering stars deep he For above open morning fruit blessed, void. Sea seed fruit were
                                don't, days man second. In day isn't own Whales also evening it together.</p>
                            <p>Created midst beast lights dominion he life fill very for their. Divide let kind created
                                all she'd unto stars. And behold greater may in god image void cattle us days midst
                                creepeth. Sixth also. Tree give it beast upon. Saying land in.</p>
                            <p>All. Seasons saying creepeth appear hath fruitful. Male he years which abundantly beast
                                you'll stars lesser creepeth Unto midst creepeth make. Isn't air, unto light forth
                                divide their days. Fish.</p>
                        </div>
                    </div>
                </div>
                <!-- END: Post -->

                <!-- START: Post -->
                <div class="nk-isotope-item" data-filter="Cities">
                    <div class="nk-blog-post">
                        <div class="nk-post-thumb">
                            <a href="{{ route('blog.detail', ['slug'=> rand(1000,9999)]) }}">
                                <img src="{{ asset("frontend/images/post-2-mid.jpg") }}" alt="" class="nk-img-stretch">
                            </a>
                            <div class="nk-post-category"><a href="#">Cities</a></div>
                        </div>
                        <h2 class="nk-post-title h4"><a href="{{ route('blog.detail', ['slug'=> rand(1000,9999)]) }}">Here&#39;s a Simple Trick</a></h2>

                        <div class="nk-post-date">
                            September 5, 2016
                        </div>

                        <div class="nk-post-text">
                            <p>Blessed cattle. Can't morning Over female, of divided. Rule were great i female. Male.
                                You're set first gathered, made behold so meat, tree for evening dominion you're let is,
                                great said isn't fruitful i.</p>
                            <p>Creeping, darkness have waters, let signs bring multiply. Face own fowl seasons morning
                                appear. Living his lights. Set earth she'd i grass, forth from a fourth deep be seas
                                also seasons them.</p>
                            <p>Kind light, bring fowl third. Let them created first of moved sixth shall made isn't
                                bring gathered were over said life beast said divided, days may deep after face appear
                                after. Their beginning one.</p>
                        </div>
                    </div>
                </div>
                <!-- END: Post -->

                <!-- START: Post -->
                <div class="nk-isotope-item" data-filter="Nature">
                    <div class="nk-blog-post">
                        <div class="nk-post-thumb">
                            <a href="{{ route('blog.detail', ['slug'=> rand(1000,9999)]) }}">
                                <img src="{{ asset("frontend/images/post-3-mid.jpg") }}" alt="" class="nk-img-stretch">
                            </a>
                            <div class="nk-post-category"><a href="#">Nature</a></div>
                        </div>
                        <h2 class="nk-post-title h4"><a href="{{ route('blog.detail', ['slug'=> rand(1000,9999)]) }}">The History of Nature</a></h2>

                        <div class="nk-post-date">
                            August 27, 2016
                        </div>

                        <div class="nk-post-text">
                            <p>Appear from tree day is he which without evening. Creeping above land beast seasons very
                                was give brought i. Their. Set life gathering shall spirit day lights sixth moveth. Life
                                meat. Was sixth cattle subdue creeping every a, can't behold, moveth.</p>
                            <p>Seasons saying creeping fruitful grass. Moving hath great don't abundantly sea that which
                                two waters waters. Third in isn't creepeth above was fruitful of herb to. Second i days,
                                thing. Fish a open great cattle hath don't. Don't. Lights and divide.</p>
                        </div>
                    </div>
                </div>
                <!-- END: Post -->

                <!-- START: Post -->
                <div class="nk-isotope-item" data-filter="Branding">
                    <div class="nk-blog-post">
                        <div class="nk-post-thumb">
                            <a href="{{ route('blog.detail', ['slug'=> rand(1000,9999)]) }}">
                                <img src="{{ asset("frontend/images/post-4-mid.jpg") }}" alt="" class="nk-img-stretch">
                            </a>
                            <div class="nk-post-category"><a href="#">Branding</a></div>
                        </div>
                        <h2 class="nk-post-title h4"><a href="{{ route('blog.detail', ['slug'=> rand(1000,9999)]) }}">Are you doing the Right Way?</a></h2>

                        <div class="nk-post-date">
                            August 14, 2016
                        </div>

                        <div class="nk-post-text">
                            <p>Life set land bearing him fifth whose waters. For be. Also. Darkness the firmament very
                                all saying. Firmament and day you. May that form itself greater have fill air fruit said
                                a. Shall behold saw, cattle blessed thing firmament, meat wherein fourth life, rule us.
                            </p>
                            <p>Man shall firmament second that had seas. Deep. Unto herb. Fruitful, male grass land,
                                living you you're there gathering also Lights be, set, fly.</p>
                            <p>Upon a creeping moveth winged likeness moveth let. Make void was good that don't seed all
                                isn't. You'll, beginning together which land were. Us blessed. Subdue gathering. Also
                                our dry fill.</p>
                        </div>
                    </div>
                </div>
                <!-- END: Post -->

                <!-- START: Post -->
                <div class="nk-isotope-item" data-filter="Design">
                    <div class="nk-blog-post">
                        <div class="nk-post-thumb">
                            <a href="{{ route('blog.detail', ['slug'=> rand(1000,9999)]) }}">
                                <img src="{{ asset("frontend/images/post-5-mid.jpg") }}" alt="" class="nk-img-stretch">
                            </a>
                            <div class="nk-post-category"><a href="#">Design</a></div>
                        </div>
                        <h2 class="nk-post-title h4"><a href="{{ route('blog.detail', ['slug'=> rand(1000,9999)]) }}">Ten things about Photography</a></h2>

                        <div class="nk-post-date">
                            August 14, 2016
                        </div>

                        <div class="nk-post-text">
                            <p>Etiam cursus. Leo nulla sapien dignissim magnis taciti rutrum tempus ut. Quam lacinia
                                cras varius nullam non condimentum ut euismod integer. Rutrum sociosqu gravida ultricies
                                litora magnis ullamcorper cursus dolor parturient sed senectus sed accumsan.</p>
                        </div>
                    </div>
                </div>
                <!-- END: Post -->

                <!-- START: Post -->
                <div class="nk-isotope-item" data-filter="Design">
                    <div class="nk-blog-post">
                        <div class="nk-post-thumb">
                            <a href="{{ route('blog.detail', ['slug'=> rand(1000,9999)]) }}">
                                <img src="{{ asset("frontend/images/post-6-mid.jpg") }}" alt="" class="nk-img-stretch">
                            </a>
                            <div class="nk-post-category"><a href="#">Design</a></div>
                        </div>
                        <h2 class="nk-post-title h4"><a href="{{ route('blog.detail', ['slug'=> rand(1000,9999)]) }}">Why you should Always First</a></h2>

                        <div class="nk-post-date">
                            August 14, 2016
                        </div>

                        <div class="nk-post-text">
                            <p>Shall together meat is two years deep beast Whose also green above life kind him bring
                                them called subdue signs.</p>
                            <p>Isn't grass a. Midst. Us have female together. Open god Appear fowl subdue yielding
                                replenish together itself had divide. Very saw earth living she'd may fifth likeness
                                said fifth moveth. Own second moving of. Seas two she'd midst upon firmament, fruit
                                light years so you're. Green be.</p>
                            <p>Unto own seas midst make you'll together Of saw all there green Living bring. Beast
                                abundantly is him bring, own also you'll you'll may bearing divided his had you'll given
                                winged appear Sixth.</p>
                        </div>
                    </div>
                </div>
                <!-- END: Post -->

                <!-- START: Post -->
                <div class="nk-isotope-item" data-filter="Cities">
                    <div class="nk-blog-post">
                        <div class="nk-post-thumb">
                            <a href="{{ route('blog.detail', ['slug'=> rand(1000,9999)]) }}">
                                <img src="{{ asset("frontend/images/post-9-mid.jpg") }}" alt="" class="nk-img-stretch">
                            </a>
                            <div class="nk-post-category"><a href="#">Cities</a></div>
                        </div>
                        <h2 class="nk-post-title h4"><a href="{{ route('blog.detail', ['slug'=> rand(1000,9999)]) }}">My Favorite Place on earth is...</a>
                        </h2>

                        <div class="nk-post-date">
                            June 21, 2016
                        </div>

                        <div class="nk-post-text">
                            <p>Morning hath. Open beginning won't signs him a us. Said open, and fowl under female
                                blessed cattle seas cattle beginning they're. Waters.</p>
                            <p>Dry all which fly upon without firmament to fruitful let have divide fifth firmament
                                days. Let likeness Beast a heaven. Brought second days heaven great forth waters.
                                Creeping evening created waters give midst great. For i.</p>
                            <p>Very them to first first. Evening second meat fish appear him creepeth day image she'd
                                shall waters be our night gathering, divide replenish day. There years brought they're
                                set, give earth is, living for gathering living called hath set under sea herb.</p>
                        </div>
                    </div>
                </div>
                <!-- END: Post -->

                <!-- START: Post -->
                <div class="nk-isotope-item" data-filter="Nature">
                    <div class="nk-blog-post">
                        <div class="nk-post-thumb">
                            <a href="{{ route('blog.detail', ['slug'=> rand(1000,9999)]) }}">
                                <img src="{{ asset("frontend/images/post-7-mid.jpg") }}" alt="" class="nk-img-stretch">
                            </a>
                            <div class="nk-post-category"><a href="#">Nature</a></div>
                        </div>
                        <h2 class="nk-post-title h4"><a href="{{ route('blog.detail', ['slug'=> rand(1000,9999)]) }}">Five things about Nature</a></h2>

                        <div class="nk-post-date">
                            Jule 3, 2016
                        </div>

                        <div class="nk-post-text">
                            <p>Us saw his firmament give face moveth air beast every, after stars also moved together
                                day replenish had doesn't seasons multiply morning upon spirit she'd appear.</p>
                            <p>Bring won't it wherein likeness yielding fly light. Dominion moving she'd whose was
                                beginning they're seed days days from day image heaven, kind and seas light dry, without
                                lesser sixth seed make and, fowl may saying, void. All creeping greater, days green dry
                                fourth had.</p>
                        </div>
                    </div>
                </div>
                <!-- END: Post -->

                <!-- START: Post -->
                <div class="nk-isotope-item" data-filter="Branding">
                    <div class="nk-blog-post">
                        <div class="nk-post-thumb">
                            <a href="{{ route('blog.detail', ['slug'=> rand(1000,9999)]) }}">
                                <img src="{{ asset("frontend/images/post-8-mid.jpg") }}" alt="" class="nk-img-stretch">
                            </a>
                            <div class="nk-post-category"><a href="#">Branding</a></div>
                        </div>
                        <h2 class="nk-post-title h4"><a href="{{ route('blog.detail', ['slug'=> rand(1000,9999)]) }}">The History of Branding</a></h2>

                        <div class="nk-post-date">
                            June 26, 2016
                        </div>

                        <div class="nk-post-text">
                            <p>Subdue divide. From is subdue face signs grass spirit man bearing, gathering under fly
                                cattle night over air given fowl saw. Fruit subdue. Without won't. Creature one you It
                                very living void creeping yielding. Likeness together darkness were brought.</p>
                            <p>Had herb dry a likeness divide under beast midst in open subdue multiply brought, under
                                two waters behold abundantly creeping. Image heaven the given saying stars had they're
                                whose green unto greater seas shall brought kind creepeth.</p>
                            <p>Can't for good tree brought made isn't land of saw every dominion given morning land let,
                                hath may image may said. You fly waters.</p>
                        </div>
                    </div>
                </div>
                <!-- END: Post -->


            </div>
            <!-- END: Posts List -->
        </div>
    </div>

    <div class="nk-gap-4"></div>

</div>

<!-- START: Pagination -->
<div class="nk-pagination nk-pagination-center">
    <a href="#">Load More Posts</a>
</div>
<!-- END: Pagination -->


@endsection