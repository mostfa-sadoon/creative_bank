@extends('user_temp')
@section('content')
 <!-- ======= Start Content ======= -->
 <div class="">
        <!-- ======= Start creative ======= -->
        <section id="creative" class=" creative card bg-light" data-aos="zoom-in" data-aos-delay="100">

            <div class="section-title">
                <h2>المقترحات</h2>
            </div>
            <div class="container text-center">
                <p><span class="qoute"></span>هذه الصفحة تحتوى على أفضل الاشخاص المشتركين فى بنك الافكار و اصحاب الافكار الرائدة<span class="qoute"></span></p>
            </div>
        </section>
        <!-- ======= End creative ======= -->

        <!---Start News-->
        <div class="container">
            <div class="row send-Idea">
                <div class="col-lg-8 mx-auto">
                    <div class="card mt-2 mx-auto p-1 bg-light">
                        <div class="card-body bg-light">
                            <div class="container">
                                <h2>المقترحات</h2>
                                @auth
                                <form id="contact-form" role="form" action="" method="post">
                                    @csrf 
                                    <div class="controls">
                                        <!---The Opportunity---->
                                        <div class="">
                                            <div class="form-group">
                                                <label for="form_message">اكتب مقترحك<span> *</span>
                                                </label>
                                                <textarea id="form_message" name="message" class="form-control" placeholder="أكتب المقترح هنا *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                            </div>
                                        </div>
                                      
                                        <!---Submit Button---->
                                        <div class="mt-4">
                                            <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="أرسل مقترحك">
                                        </div>

                                    </div>
                                   </form>
                                @endauth
                                @guest
                                   <div class="d-flex justify-content-center">
                                       <p class="text-red">  login to send your suggesions </p>
                                   </div>
                                @endguest   
                           
                            </div>
                        </div>
                    </div>
                    <!-- /.8 -->
                </div>
                <!-- /.row-->
            </div>
        </div>
        <!---End News---->
    </div>
    <!-- ======= End Content ======= -->
 
@endsection