@extends('layouts.service')

@section('content')
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Request Quote</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="https://formsubmit.co/your@email.com" method="POST">
            <input type="text" class="form-control mb-3" name="name" placeholder="Full name">
            <input type="email" class="form-control mb-3" name="email" placeholder="Email address">
            <input type="tel" class="form-control mb-3" name="phone" placeholder="phone number">
            <select name="service" class="form-select mb-3">
                <option value="null">Choose service type</option>
                <option value="graphic design">Graphic Design</option>
                <option value="branding">Branding</option>
                <option value="lamination">Lamination</option>
                <option value="printing">Printing</option>
                <option value="photocopying">Photocopying</option>
                <option value="binding">Binding</option>
                <option value="scanning">Scanning</option>
                <option value="digital printing">Digital Printing</option>

            </select>
            <input type="number" class="form-control mb-3" name="quantity" placeholder="describe the number of pieces you require(leave blank if it doesn't apply)">
            <textarea name="message" class="form-control mb-3" placeholder="Please describe the service you are seeking in detail"></textarea>
            <button>Submit</button>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>
    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
            <div class="col-lg-8">
              <div>
                <div>
                    {!! $slug->body !!}
                </div>
                  <a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">Request quote</a>

              </div>
            </div>
            <div class="col-lg-4">
              <img src="/storage/{{$slug->thumbnail}}" alt="service-img" width="100%">
            </div>

          </div>



        </div>

      </div>
    </section><!-- End Service Details Section -->

@endsection

 