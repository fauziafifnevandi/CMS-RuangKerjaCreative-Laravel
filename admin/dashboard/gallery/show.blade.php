@extends('layouts.lay_public') @section('content')
  <!--Main layout-->
  <main class="mt-5 pt-5">
    <div class="container">

      <!--Section: Post-->
      <section class="mt-4">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-10 mb-4 mx-auto">

            <!--Featured Image-->
            <div class="card mb-4 wow fadeIn">

              <img src="{{ asset('img/gallery/gambar/'.$gallery->gambar_gallery) }}" class="img-fluid" style="max-height:500px" alt="">

            </div>
            <!--/.Featured Image-->

            <!--Card-->
            <div class="card mb-4 wow fadeIn">

              <!--Card content-->
              <div class="card-body">
                
                
                <p><center>{!! $gallery->konten !!}</center></p>

              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Post-->

    </div>
  </main>
  <!--Main layout-->
  @endsection