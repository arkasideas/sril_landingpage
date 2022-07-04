<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="section-title text-center pb-20">
                <h3 class="title">Get in touch</h3>
                <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
            </div> <!-- section title -->
        </div>
    </div> <!-- row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="contact-two mt-50 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                <h4 class="contact-title">Lets talk about the project</h4>
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam unde repellendus delectus facilis quia consequatur maxime perferendis! Sequi, modi consequatur.</p>
                <ul class="contact-info">
                    <li><i class="lni-money-location"></i> Elizabeth St, Melbourne, Australia</li>
                    <li><i class="lni-phone-handset"></i> +333 789-321-654</li>
                    <li><i class="lni-envelope"></i> hello@ayroui.com</li>
                </ul>
            </div> <!-- contact two -->
        </div>
        <div class="col-lg-6">
            <div class="contact-form form-style-one mt-35 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                @if(session()->has('alert-success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('alert-success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <form wire:submit.prevent="store">
                    <div class="form-input mt-15">
                        <label>Name</label>
                        <div class="input-items default">
                            <input type="text" placeholder="Name" wire:model="name" required>
                            <i class="lni-user"></i>
                        </div>
                    </div> <!-- form input -->
                    <div class="form-input mt-15">
                        <label>Kota</label>
                        <div class="input-items default">
                           <select wire:model.defer="kota" id="" style="width:100%;">
                                <option value="1">JAKARTA</option>
                                <option value="2">KENDARI</option>
                           </select>
                        </div>
                    </div>
                    <div class="form-input mt-15">
                        <label>Email</label>
                        <div class="input-items default">
                            <input type="email" placeholder="Email" wire:model="email" required>
                            <i class="lni-envelope"></i>
                        </div>
                    </div> <!-- form input -->
                    <div class="form-input mt-15">
                        <label>Message</label>
                        <div class="input-items default">
                            <textarea placeholder="Message" wire:model="message"></textarea>
                            <i class="lni-pencil-alt"></i>
                        </div>
                    </div> <!-- form input -->
                    <div class="form-input mt-15">
                        <div class="input-items default">
                            <div wire:ignore wire:key="captcha">
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display(['data-callback' => 'onCallback']) !!}
                            </div>
                            @error('recaptcha')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <p class="form-message"></p>
                    <div class="form-input rounded-buttons mt-20">
                        <div wire:loading wire:target="store">
                            <button type="submit" class="main-btn rounded-three" disabled>Sending...</button>
                        </div>
                        <div wire:loading.remove wire:target="store">
                        <button type="submit" class="main-btn rounded-three">Submit</button>
                        </div>
                        
                    </div> <!-- form input -->
                </form>
            </div> <!-- contact form -->
        </div>
    </div> <!-- row -->
</div> <!-- container -->
@section('js')
<script type="text/javascript">
    var onCallback = function(){
        @this.set('recaptcha', grecaptcha.getResponse());
    };
</script>
@endsection