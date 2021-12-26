@extends('Layout.frontend.MasterLayout')

@section('tittle')
<title>Amsons || Contact Us</title>
@endsection

@section('meta')

@endsection

@section('hero')
<section class="subscribe_section">
    <div class="container-fuild">
       <div class="box">
          <div class="row">
             <div class="col-md-6 offset-md-3">
                <div class="subscribe_form ">
                   <div class="heading_container heading_center">
                      <h3>Contact Us For Orders & More</h3>
                   </div>
                   <p>Fill The Info </p>
                   <form action="">
                      <input type="email" placeholder="Company Name">
                      <input type="text" placeholder="Regarding">
                      <button>
                      Contact
                      </button>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection