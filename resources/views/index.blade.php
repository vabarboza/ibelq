@extends('layouts.basico')
@section('titulo', 'Principal')
@section('main')

    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-75" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg"
                        alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Light mask</h3>
                    <p>First text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-75" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg"
                        alt="Second slide">
                    <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Strong mask</h3>
                    <p>Secondary text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-75" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
                        alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Slight mask</h3>
                    <p>Third text</p>
                </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->

    <div class="grey lighten-4">

        <div class="container pt-5">
            <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>

            <div class="jarallax-keep-img float-md-left mr-md-4 mb-4 mb-md-0" data-speed="0.5">
                <img class="jarallax-img" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/full page/img (3).jpg"
                    alt="" width="400">
            </div>

            <p align="justify">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem
                ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure
                reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum
                fugiat quo voluptas nulla pariatur?</p>

            <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                dolor in reprehenderit amet.</p>

            <div class="jarallax-keep-img float-md-right ml-md-4 mb-4 mb-md-0" data-speed="0.8">
                <img class="jarallax-img" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/full page/img (14).jpg"
                    alt="" width="400">
            </div>

            <p class="mb-0 pb-5" align="justify">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis
                est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas
                assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum
                necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum
                rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut
                perferendis doloribus asperiores repellat. Quidem rerum facilis est et expedita distinctio. Nam libero
                tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere
                possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis
                debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae. Agni dolores
                eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam
                aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea
                quibusdam et voluptate velit esse quam nihil ex minus id quod.</p>
        </div>

    </div>

@endsection
