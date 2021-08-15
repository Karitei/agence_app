@extends('layouts.layout_pack')


@section('container')

        <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('assets/img/bg/bg2.jpg')}}" data-speed="0.7">
            <div class="section-inner pad-top-200">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mt30 wow text-center">
                            <h2 class="section-heading">Inscription au programme</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="welcome">
            <div class="section-inner nopaddingbottom">

                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="lead">Sold old ten are quit lose deal his sent. You correct how sex several far distant believe journey parties. We shyness enquire uncivil affixed it carried to. </p>
                            <p>End sitting shewing who saw besides son musical adapted. Contrasted interested eat alteration pianoforte sympathize was. He families believed if no elegance interest surprise an. It abode wrong miles an so delay plate.</p>

                        </div>

                        <div class="col-md-8">
                            <div id="message"></div>
                            <form action="sendemail.php" id="contactform" class="main-contact-form wow">
                                <input type="text" class="form-control col-md-4" name="f_name" placeholder="Nom *" id="name" required data-validation-required-message="Please enter your name." />
                                <input type="text" class="form-control col-md-4" name="l_name" placeholder="Prénom *" id="name" required data-validation-required-message="Please enter your name." />
                                <input type="text" class="form-control col-md-4" name="email" placeholder="E-mail *" id="email" required data-validation-required-message="Please enter your email address." />

                                <label for="">Votre passport</label>
                                <input type="file" class="form-control col-md-4" name="passport" placeholder=" *" id="email" required data-validation-required-message="Please enter your email address." />


                                <input class="btn btn-primary mt30 btn-white pull-right" type="submit" name="submit" value="S'inscrire" />
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>

@endsection