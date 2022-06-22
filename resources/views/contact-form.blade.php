 <div class="homefooter-form">
        <div class="container">
            <div class="col-md-4">
                <h3>{{Lang::get('home.contact')}}</h3>
                    <div class="text">
                    {{Lang::get('home.contact-desc')}}
                    </div>
                <a href="{{Lang::get('home.recaptcha')}}/{{Lang::get('home.contact-link')}}">
                    <div class="btn btn-black">
                    {{Lang::get('home.get-started')}}
                    </div>
                </a>
            </div>
            	
            	

            <div class="col-md-8 col-xs-12 mnopadding">
                <h3>{{Lang::get('home.get-in-touch')}}</h3>
                <form id="appointment-form" name="appointment-form" action="{{ url('/send')}}" method="post">
                     {{ csrf_field() }}
                <div class="col-md-12 clearfix mnopadding">
                        <div class="col-md-6 col-xs-12 mnopadding">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="form_name" id="form_name" placeholder="{{Lang::get('home.your-name')}}" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="form_email" id="form_email" placeholder="{{Lang::get('home.email')}}" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="form_phone" id="form_phone" placeholder="{{Lang::get('home.phone')}}" required="">
                                </div>

                                <!-- <div class="form-group">
                                    <input type="text" class="s1" id="s1">
                                    <input type="text" class="s2" id="s2">
                                </div>
                                <div class="form-group">
                                    <span class="form-control" name="form_questions" id="form_questions"  required=""></span>
                                </div>
                            -->

                                <script>
                                function myFunction(s1,s2) {
                                  document.getElementById("form_questions").innerHTML = Math.random();
                                }
                                </script>

                        </div>

                        <div class="col-md-6 col-xs-12 mnopadding">
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="form_message" id="form_message" placeholder="{{Lang::get('home.message')}}" required=""></textarea>
                            </div>

                            <div class = "g-recaptcha" name="g-recaptcha" required="" data-sitekey = "{{env ('GOOGLE_RECAPTCHA_KEY')}}"> </div> 


                        </div>
                 </div>

                <div class="col-md-12">
                    <button class="btn btn-red" name="gonder" type="submit">{{Lang::get('home.send')}}</button>
                </div>
            </div>
        </form> 
         <span><b>E-mail:</b> <a href="mail:info@kontrolmatik.com"> info@kontrolmatik.com </a></span></br>
         <span><b>Phone:</b><a href="tel:+902126592441"> +90 (212) 659 24 41 </a></span>

        </div>
    </div>