@extends('layouts.template')

@section('title', '首頁')

@section('css')
    {{-- index.css --}}
@endsection


@section('main')
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img
                src="https://images.unsplash.com/photo-1593642531955-b62e17bdaa9c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80"
                class="d-block w-100 h-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img
                src="https://images.unsplash.com/photo-1637690012704-7ef4d5b7043c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80"
                class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img
                src="https://images.unsplash.com/photo-1634496495743-1492d470f741?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1228&q=80"
                class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
    <section class="container py-96 px-20">
    <header class="text-center">
        <h2 class="h2 mb-3">Raw Denim Heirloom Man Braid</h2>
        <p class="mb-3 w-75 mx-auto">Blue bottle crucifix vinyl
        post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi
        pug.</p>
        <div class="text-center">
        <div class="w-25 border border-primary d-inline-block"></div>
        </div>
    </header>

    </section>
    <section class="container py-96 px-20">
    <div class="row">
        <div class="col-md-4">
        <div class="p-3 text-center">
            <span class="h4 mb-4 bg-warning p-3 rounded-circle text-primary d-inline-block">
            <i class="fas fa-heartbeat"></i>
            </span>
            <h3>Shooting Stars</h3>
            <p>
            Blue bottle crucifix vinyl post-ironic four dollar toast vegan
            taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.
            </p>
            <a href="" class="btn btn-link">Learn More

            </a>
        </div>
        </div>
        <div class="col-md-4">
        <div class="p-3 text-center">
            <span class="h4 mb-4 bg-warning p-3 rounded-circle text-primary d-inline-block">
            <i class="fas fa-heartbeat"></i>
            </span>
            <h3>Shooting Stars</h3>
            <p>
            Blue bottle crucifix vinyl post-ironic four dollar toast vegan
            taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.
            </p>
            <a href="" class="btn btn-link">Learn More

            </a>
        </div>
        </div>
        <div class="col-md-4">
        <div class="p-3 text-center">
            <span class="h4 mb-4 bg-warning p-3 rounded-circle text-primary d-inline-block">
            <i class="fas fa-heartbeat"></i>
            </span>
            <h3>Shooting Stars</h3>
            <p>
            Blue bottle crucifix vinyl post-ironic four dollar toast vegan
            taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.
            </p>
            <a href="" class="btn btn-link">Learn More

            </a>
        </div>
        </div>
    </div>
    <div class="text-center">
        <button class="btn btn-primary">button</button>
    </div>
    </section>
    <section class="container">
    <div class="row">
        <div class="col-md-4">
        <h2>Master Cleanse
            Reliac Heirloom</h2>
        </div>
        <div class="col-md-8">
        <p>
            Whatever cardigan tote bag tumblr hexagon
            brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them
            man bun deep jianbing selfies heirloom.
        </p>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
        <div class="row">
            <div class="col-6 mb-3">
            <img src="https://dummyimage.com/500x300" alt="">
            </div>
            <div class="col-6 mb-3">
            <img src="https://dummyimage.com/500x301" alt="">
            </div>
            <div class="col-12">
            <img src="https://dummyimage.com/600x360" alt="">
            </div>
        </div>
        </div>
        <div class="col-6">
        <div class="row">
            <div class="col-12 mb-3">
            <img src="https://dummyimage.com/600x361" alt="">
            </div>
            <div class="col-6">
            <img src="https://dummyimage.com/500x302" alt="">
            </div>
            <div class="col-6">
            <img src="https://dummyimage.com/500x303" alt="">
            </div>

        </div>
        </div>
    </div>
    </section>
    <section class="container">
    <div class="section container">
        <div class="py-96 px-20">
        <div class="text-center w-75 mx-auto">
            <h2>Pricing</h2>
            <p class="mb-80">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est facere corporis accusantium,
            suscipit
            obcaecati id temporibus, aliquam, dolorem quidem voluptatum omnis mollitia nostrum error animi non quos unde
            minima!
            </p>
            <table class="table text-left">
            <thead class="thead-light">
                <tr>
                <th>First</th>
                <th>Last</th>
                <th>Handle</th>
                <th class="w-10px"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                    <input type="radio" name="priceRadio" checked>
                </td>
                </tr>
                <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                    <input type="radio" name="priceRadio">
                </td>
                </tr>
                <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                    <input type="radio" name="priceRadio">
                </td>
                </tr>

            </tbody>
            <tfoot>
                <tr>
                <td colspan="5">
                    <div class="d-flex align-items-center">
                    <a href="#" class="btn btn-link mr-auto">learn more</a>
                    <button class="btn btn-primary">Button</button>
                    </div>
                </td>
                </tr>
            </tfoot>
            </table>
        </div>
        </div>
    </div>
    </section>
    <section id="productCards">
    <div class="container py-96 px-20">
        <div class="row no-gutters">
        <div class="col-md-6">
            <h3 class="mb-md-0 mb-5">Pitchfork Kickstarter Taxidermy
            </h3>
        </div>
        <div class="col-md-6">
            <p>
            Whatever cardigan tote bag tumblr hexagon brooklyn
            asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun
            deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.
            </p>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="card p-4">
            <img class="h-160px" src="https://dummyimage.com/720x400" class="card-img-top">
            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">subtitle</h6>
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card p-4">
            <img class="h-160px" src="https://dummyimage.com/720x401" class="card-img-top">
            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">subtitle</h6>
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card p-4">
            <img class="h-160px" src="https://dummyimage.com/720x402" class="card-img-top">
            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">subtitle</h6>
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card p-4">
            <img class="h-160px" src="https://dummyimage.com/720x403" class="card-img-top">
            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">subtitle</h6>
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <section id="threePart" class="container">
    <div class="section container">
        <div class="py-96 px-20">
        <div class="media d-sm-flex text-sm-left text-center d-block">
            <div class="img rounded-circle bg-primary mr-sm-4 mx-auto mb-sm-0 mb-4">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
            </svg>
            </div>
            <div class="media-body">
            <h5 class="mt-0">Media heading</h5>
            <p>Will you do the same for me? It's time to face the music I'm no longer your muse. Heard it's beautiful, be the judge and my girls gonna take a vote. I can feel a phoenix inside of me. Heaven is jealous of our love, angels are crying from up above. Yeah, you take me to utopia.</p>
            <a href="#" class="btn btn-link pl-0">learn more <i class="fas fa-arrow-right"></i>
            </a>
            </div>
        </div>
        <hr class="my-40">
        <div class="media d-sm-flex text-sm-left text-center d-block">
            <div class="img rounded-circle order-sm-1 bg-primary ml-sm-4 mx-auto mb-sm-0 mb-4">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
            </svg>
            </div>
            <div class="media-body order-sm-0">
            <h5 class="mt-0">Media heading</h5>
            <p>Will you do the same for me? It's time to face the music I'm no longer your muse. Heard it's beautiful, be the judge and my girls gonna take a vote. I can feel a phoenix inside of me. Heaven is jealous of our love, angels are crying from up above. Yeah, you take me to utopia.</p>
            <a href="#" class="btn btn-link pl-0">learn more <i class="fas fa-arrow-right"></i>
            </a>
            </div>

        </div>
        <hr class="my-40">
        <div class="media d-sm-flex text-sm-left text-center d-block mb-80">
            <div class="img rounded-circle bg-primary mr-sm-4 mx-auto mb-sm-0 mb-4">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
            </svg>
            </div>
            <div class="media-body">
            <h5 class="mt-0">Media heading</h5>
            <p>Will you do the same for me? It's time to face the music I'm no longer your muse. Heard it's beautiful, be the judge and my girls gonna take a vote. I can feel a phoenix inside of me. Heaven is jealous of our love, angels are crying from up above. Yeah, you take me to utopia.</p>
            <a href="#" class="btn btn-link pl-0">learn more <i class="fas fa-arrow-right"></i>
            </a>
            </div>
        </div>
        <div class="text-center">
            <div class="btn btn-primary">button</div>
        </div>
        </div>
    </div>
    </section>
    <section class="container">
    <div class="w-80 mx-auto">
        <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
            <img class="h-100 w-100" src="https://dummyimage.com/500x500" alt="...">
            </div>
            <div class="col-md-8">

            <form class="card-body">
                <small class="text-muted">BRAND NAME</small>
                <h5 class="card-title">The Catcher in the Rye</h5>
                <small>
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i> 
                    <span class="mx-3">4 Reviews</span>
                | <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                </small>
                <p class="card-text">
                Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy
                chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. Everyday carry
                +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean shorts keytar
                banjo tattooed umami cardigan.
                </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                <div class="d-flex align-items-center">
                <div class="d-flex mr-3">
                    <span class="mr-2">Color</span>
                    <label for="color-blue" style="background-color: blue;" class="colorLabel mr-2">
                    <input type="radio" id="color-blue" name="colorCollect">
                    </label>
                    <label for="color-red" style="background-color: red;" class="colorLabel mr-2">
                    <input type="radio" id="color-red" name="colorCollect">
                    </label>
                    <label for="color-green" style="background-color: green;" class="colorLabel">
                    <input type="radio" id="color-green" name="colorCollect">
                    </label>
                </div>
                <div class="form-group d-flex mb-0 align-items-center">
                    <label class="mr-2" for="size" >Size</label>
                    <select name="size" id="size" class="form-control">
                    <option value="XL">XL</option>
                    <option value="M">M</option>
                    <option value="S">S</option>
                    </select>
                </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center">
                <span> $58.00 </span>
                <div>
                    <button class="btn btn-primary mr-2">Button</button>
                    <button class="btn btn-light rounded-circle text-dark">
                    <i class="fas fa-heart"></i>
                    </button>
                </div>
                </div>
            </form>

            </div>
        </div>
        </div>
    </div>
    </section>
    <section class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6">
        <div class="card border-0">
            <img src="https://dummyimage.com/424x264" class="card-img-top" alt="">
            <div class="card-body px-0">
            <h6 class="card-subtitle text-muted">Card title</h6>
            <h5 class="card-title">Card title</h5>
            <p class="card-text">The Cataalyzer</p>
            
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-6">
        <div class="card border-0">
            <img src="https://dummyimage.com/424x264" class="card-img-top" alt="">
            <div class="card-body px-0">
            <h6 class="card-subtitle text-muted">Card title</h6>
            <h5 class="card-title">Card title</h5>
            <p class="card-text">The Cataalyzer</p>
            
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-6">
        <div class="card border-0">
            <img src="https://dummyimage.com/424x264" class="card-img-top" alt="">
            <div class="card-body px-0">
            <h6 class="card-subtitle text-muted">Card title</h6>
            <h5 class="card-title">Card title</h5>
            <p class="card-text">The Cataalyzer</p>
            
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-6">
        <div class="card border-0">
            <img src="https://dummyimage.com/424x264" class="card-img-top" alt="">
            <div class="card-body px-0">
            <h6 class="card-subtitle text-muted">Card title</h6>
            <h5 class="card-title">Card title</h5>
            <p class="card-text">The Cataalyzer</p>
            
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-6">
        <div class="card border-0">
            <img src="https://dummyimage.com/424x264" class="card-img-top" alt="">
            <div class="card-body px-0">
            <h6 class="card-subtitle text-muted">Card title</h6>
            <h5 class="card-title">Card title</h5>
            <p class="card-text">The Cataalyzer</p>
            
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-6">
        <div class="card border-0">
            <img src="https://dummyimage.com/424x264" class="card-img-top" alt="">
            <div class="card-body px-0">
            <h6 class="card-subtitle text-muted">Card title</h6>
            <h5 class="card-title">Card title</h5>
            <p class="card-text">The Cataalyzer</p>
            
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-6">
        <div class="card border-0">
            <img src="https://dummyimage.com/424x264" class="card-img-top" alt="">
            <div class="card-body px-0">
            <h6 class="card-subtitle text-muted">Card title</h6>
            <h5 class="card-title">Card title</h5>
            <p class="card-text">The Cataalyzer</p>
            
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-6">
        <div class="card border-0">
            <img src="https://dummyimage.com/424x264" class="card-img-top" alt="">
            <div class="card-body px-0">
            <h6 class="card-subtitle text-muted">Card title</h6>
            <h5 class="card-title">Card title</h5>
            <p class="card-text">The Cataalyzer</p>
            
            </div>
        </div>
        </div>
    </div>
    </section>
    <section class="position-relative map">
    <div class="iframe">
        <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2357617.4111456177!2d119.63704536925486!3d23.648409000753954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3468d97bf0bec6fb%3A0x1d1251b1a9d53a1a!2z6Ie654Gj5Zyw55CG5Lit5b-D56KR!5e0!3m2!1szh-TW!2stw!4v1637812135945!5m2!1szh-TW!2stw"
        width="100%" height="100%" style="border:0;filter: grayscale(1) contrast(1.2) opacity(0.4);" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="container">
        <div class="row justify-content-end py-5">
        <div class="col-lg-4 col-md-6">
            <form class="bg-white p-3 border rounded">
            <h3>Lorem ipsum</h3>
            <p>Post-ironic portland shabby chic echo park, banjo fashion axe
            </p>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="Email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label class="form-check-label" for="message">Check me out</label>
                <textarea id="message" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </form>
        </div>
        </div>
    </div>
    </section>
@endsection


@section('js')
    
@endsection