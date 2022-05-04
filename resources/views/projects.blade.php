@extends('layouts.app')
@section('content')
    <div class="wrapper">
        @include('pages.header')
        <section class="service__page">
            <div class="service__page-main-text">
                <p class="service__page-desc">The Project</p>
                <p class="service__page-text">It's a long estabilished fact that a reader</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <section class="timeline">
                <ul>
                    <li>
                        <div>
                            <time>2015</time> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                        </div>
                    </li>
                    <li>
                        <div>
                            <time>2016</time> Proin quam velit, efficitur vel neque vitae, rhoncus commodo mi. Suspendisse finibus mauris et bibendum molestie. Aenean ex augue, varius et pulvinar in, pretium non nisi.
                        </div>
                    </li>
                    <li>
                        <div>
                            <time>2017</time> Proin iaculis, nibh eget efficitur varius, libero tellus porta dolor, at pulvinar tortor ex eget ligula. Integer eu dapibus arcu, sit amet sollicitudin eros.
                        </div>
                    </li>
                    <li>
                        <div>
                            <time>2018</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
                        </div>
                    </li>
                    <li>
                        <div>
                            <time>2019</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
                        </div>
                    </li>
                    <li>
                        <div>
                            <time>2020</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
                        </div>
                    </li>
                    <li>
                        <div>
                            <time>2021</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
                        </div>
                    </li>
                    <li>
                        <div>
                            <time>2022</time> Aenean condimentum odio a bibendum rhoncus. Ut mauris felis, volutpat eget porta faucibus, euismod quis ante.
                        </div>
                    </li>
                    <li>
                        <div>
                            <time>2023</time> Vestibulum porttitor lorem sed pharetra dignissim. Nulla maximus, dui a tristique iaculis, quam dolor convallis enim, non dignissim ligula ipsum a turpis.
                        </div>
                    </li>
                    <li>
                        <div>
                            <time>2024</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
                        </div>
                    </li>
                    <li>
                        <div>
                            <time>2025</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
                        </div>
                    </li>
                </ul>
            </section>
        </section>
        @include('pages.footer')
    </div>
    <script src="js/timeline.js"></script>
@endsection
