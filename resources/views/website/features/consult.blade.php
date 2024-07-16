@extends('website.layouts.main')

@section('title')
    Consultation
@endsection

@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5"
        style="background-image: url({{ asset('img/page-header/bc-green.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>TGR <strong>Consultation</strong></h1>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb breadcrumb-light d-block text-md-end">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Features</li>
                        <li class="active">Consultation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5 mt-3">
        <div class="row">
            <div class="col-lg-8">
                <div class="overflow-hidden mb-2">
                    <h2 class="font-weight-normal text-7 mb-2 appear-animation" data-appear-animation="maskUp"
                        data-appear-animation-delay="200">BOOK A <strong class="font-weight-extra-bold">
                            CONSULTATION</strong></h2>
                </div>
                <div class="overflow-hidden mb-4">
                    <p class="lead mb-0 appear-animation" style="text-align: justify" data-appear-animation="maskUp"
                        data-appear-animation-delay="400">We understand that we are all at different stages of our great
                        return journey. We want to provide you with all the necessary support along your journey to the best
                        of our ability. We believe that success for those of us who have chosen to join the great return
                        will all depend on the quality of our pre-transition preparation.
                        We take pre-transition preparation very seriously and our goal is to ensure that we can provide you
                        with all the necessary assistance along your journey. </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial testimonial-secondary appear-animation" data-appear-animation="fadeIn"
                    data-appear-animation-delay="800">
                    <blockquote>
                        <p class="mb-0">Please complete the questionnaire below in order to book a free consultation to
                            discuss your TGR needs with one of our advisors.</p>
                        <hr>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('info'))
                            <div class="alert alert-info">
                                {{ session('info') }}
                            </div>
                        @endif

                        <a href="#" class="btn btn-dark font-weight-semibold btn-px-4 btn-py-2 text-2"
                            data-bs-toggle="modal" data-bs-target="#questionnaireModal">Click Here</a>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <section class="section section-default border-0 m-0">
        <div class="container py-4">
            <div class="row pb-4">
                <div class="col-md-8">
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                        <h4 class="mt-2 mb-2">Opening <strong>Sections</strong></h4>
                        <div class="accordion accordion-modern accordion-modern-grey-scale-1 without-bg mt-4"
                            id="accordion11">
                            <div class="card card-default mb-2">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-3" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion11" href="#collapse11One">
                                            We aim to achieve this by:
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse11One" class="collapse show">
                                    <div class="card-body mt-3">
                                        <ul class="list mt-4 mb-3 text-2">
                                            <li>
                                                Give you a chance to ask any questions pertaining to getting involved in the
                                                great return.
                                            </li>
                                            <li>
                                                Give you advice on which TGR Advisory services will best suit your needs
                                                giving your current circumstance
                                            </li>
                                            <li>
                                                Provide you with clarification about our advisory process, fees and
                                                expectations.
                                            </li>
                                            <li>
                                                Sign post you to relevant agencies and organisations who are part of the
                                                diaspora support services.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default mb-2">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-3" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion11" href="#collapse11Two">
                                            Process
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse11Two" class="collapse">
                                    <div class="card-body mt-3" style="text-align: justify">
                                        <p>All you need to do is choose a date and time which suits you. In order for us to
                                            make sure we can give you the best advice and
                                            provide you with the relevant support that caters to your unique circumstances
                                            and needs,
                                            you will first need to complete a short questionnaire which is designed to
                                            evaluate how ready you are to join the great return. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
                        <div class="owl-carousel owl-theme dots-inside mb-0 pb-0"
                            data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 4000, 'margin': 10, 'animateOut': 'fadeOut', 'dots': false}">
                            <div class="pb-5">
                                <img alt="" class="img-fluid rounded" src="{{ asset('img/generic/gc.jpg') }}">
                            </div>
                            <div class="pb-5">
                                <img alt="" class="img-fluid rounded" src="{{ asset('img/generic/gc2.jpg') }}">
                            </div>
                        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="questionnaireModal" tabindex="-1" aria-labelledby="questionnaireModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="questionnaireModalLabel">Questionnaire</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="questionnaireForm" action="{{ route('submit-questionnaire') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Contact</label>
                            <input type="text" class="form-control" id="contact" name="contact" required>
                        </div>
                        <div class="form-group mb-0">
                            <div class="row">
                                <div class="form-group col-sm-6 mb-3">
                                    <label class="form-label mb-1 text-2">Country Of Residence</label>
                                    <select class="form-control text-3 h-auto py-2" name="country_of_residence">
                                        <option value="" disabled
                                            {{ old('country_of_residence') ? '' : 'selected' }}>
                                            Select your country</option>
                                        <option value="Afghanistan"
                                            {{ old('country_of_residence') == 'Afghanistan' ? 'selected' : '' }}>
                                            Afghanistan
                                        </option>
                                        <option value="Albania"
                                            {{ old('country_of_residence') == 'Albania' ? 'selected' : '' }}>Albania
                                        </option>
                                        <option value="Algeria"
                                            {{ old('country_of_residence') == 'Algeria' ? 'selected' : '' }}>Algeria
                                        </option>
                                        <option value="Andorra"
                                            {{ old('country_of_residence') == 'Andorra' ? 'selected' : '' }}>Andorra
                                        </option>
                                        <option value="Angola"
                                            {{ old('country_of_residence') == 'Angola' ? 'selected' : '' }}>
                                            Angola</option>
                                        <option value="Antigua and Barbuda"
                                            {{ old('country_of_residence') == 'Antigua and Barbuda' ? 'selected' : '' }}>
                                            Antigua and Barbuda</option>
                                        <option value="Argentina"
                                            {{ old('country_of_residence') == 'Argentina' ? 'selected' : '' }}>
                                            Argentina
                                        </option>
                                        <option value="Armenia"
                                            {{ old('country_of_residence') == 'Armenia' ? 'selected' : '' }}>Armenia
                                        </option>
                                        <option value="Australia"
                                            {{ old('country_of_residence') == 'Australia' ? 'selected' : '' }}>
                                            Australia
                                        </option>
                                        <option value="Austria"
                                            {{ old('country_of_residence') == 'Austria' ? 'selected' : '' }}>Austria
                                        </option>
                                        <option value="Azerbaijan"
                                            {{ old('country_of_residence') == 'Azerbaijan' ? 'selected' : '' }}>
                                            Azerbaijan
                                        </option>
                                        <option value="Bahamas"
                                            {{ old('country_of_residence') == 'Bahamas' ? 'selected' : '' }}>Bahamas
                                        </option>
                                        <option value="Bahrain"
                                            {{ old('country_of_residence') == 'Bahrain' ? 'selected' : '' }}>Bahrain
                                        </option>
                                        <option value="Bangladesh"
                                            {{ old('country_of_residence') == 'Bangladesh' ? 'selected' : '' }}>
                                            Bangladesh
                                        </option>
                                        <option value="Barbados"
                                            {{ old('country_of_residence') == 'Barbados' ? 'selected' : '' }}>Barbados
                                        </option>
                                        <option value="Belarus"
                                            {{ old('country_of_residence') == 'Belarus' ? 'selected' : '' }}>Belarus
                                        </option>
                                        <option value="Belgium"
                                            {{ old('country_of_residence') == 'Belgium' ? 'selected' : '' }}>Belgium
                                        </option>
                                        <option value="Belize"
                                            {{ old('country_of_residence') == 'Belize' ? 'selected' : '' }}>
                                            Belize</option>
                                        <option value="Benin"
                                            {{ old('country_of_residence') == 'Benin' ? 'selected' : '' }}>
                                            Benin</option>
                                        <option value="Bhutan"
                                            {{ old('country_of_residence') == 'Bhutan' ? 'selected' : '' }}>
                                            Bhutan</option>
                                        <option value="Bolivia"
                                            {{ old('country_of_residence') == 'Bolivia' ? 'selected' : '' }}>Bolivia
                                        </option>
                                        <option value="Bosnia and Herzegovina"
                                            {{ old('country_of_residence') == 'Bosnia and Herzegovina' ? 'selected' : '' }}>
                                            Bosnia and Herzegovina</option>
                                        <option value="Botswana"
                                            {{ old('country_of_residence') == 'Botswana' ? 'selected' : '' }}>Botswana
                                        </option>
                                        <option value="Brazil"
                                            {{ old('country_of_residence') == 'Brazil' ? 'selected' : '' }}>
                                            Brazil</option>
                                        <option value="Brunei"
                                            {{ old('country_of_residence') == 'Brunei' ? 'selected' : '' }}>
                                            Brunei</option>
                                        <option value="Bulgaria"
                                            {{ old('country_of_residence') == 'Bulgaria' ? 'selected' : '' }}>Bulgaria
                                        </option>
                                        <option value="Burkina Faso"
                                            {{ old('country_of_residence') == 'Burkina Faso' ? 'selected' : '' }}>
                                            Burkina Faso
                                        </option>
                                        <option value="Burundi"
                                            {{ old('country_of_residence') == 'Burundi' ? 'selected' : '' }}>Burundi
                                        </option>
                                        <option value="Cabo Verde"
                                            {{ old('country_of_residence') == 'Cabo Verde' ? 'selected' : '' }}>Cabo
                                            Verde
                                        </option>
                                        <option value="Cambodia"
                                            {{ old('country_of_residence') == 'Cambodia' ? 'selected' : '' }}>Cambodia
                                        </option>
                                        <option value="Cameroon"
                                            {{ old('country_of_residence') == 'Cameroon' ? 'selected' : '' }}>Cameroon
                                        </option>
                                        <option value="Canada"
                                            {{ old('country_of_residence') == 'Canada' ? 'selected' : '' }}>
                                            Canada</option>
                                        <option value="Central African Republic"
                                            {{ old('country_of_residence') == 'Central African Republic' ? 'selected' : '' }}>
                                            Central African Republic</option>
                                        <option value="Chad"
                                            {{ old('country_of_residence') == 'Chad' ? 'selected' : '' }}>
                                            Chad</option>
                                        <option value="Chile"
                                            {{ old('country_of_residence') == 'Chile' ? 'selected' : '' }}>
                                            Chile</option>
                                        <option value="China"
                                            {{ old('country_of_residence') == 'China' ? 'selected' : '' }}>
                                            China</option>
                                        <option value="Colombia"
                                            {{ old('country_of_residence') == 'Colombia' ? 'selected' : '' }}>Colombia
                                        </option>
                                        <option value="Comoros"
                                            {{ old('country_of_residence') == 'Comoros' ? 'selected' : '' }}>Comoros
                                        </option>
                                        <option value="Congo (Congo-Brazzaville)"
                                            {{ old('country_of_residence') == 'Congo (Congo-Brazzaville)' ? 'selected' : '' }}>
                                            Congo (Congo-Brazzaville)</option>
                                        <option value="Costa Rica"
                                            {{ old('country_of_residence') == 'Costa Rica' ? 'selected' : '' }}>Costa
                                            Rica
                                        </option>
                                        <option value="Croatia"
                                            {{ old('country_of_residence') == 'Croatia' ? 'selected' : '' }}>Croatia
                                        </option>
                                        <option value="Cuba"
                                            {{ old('country_of_residence') == 'Cuba' ? 'selected' : '' }}>
                                            Cuba</option>
                                        <option value="Cyprus"
                                            {{ old('country_of_residence') == 'Cyprus' ? 'selected' : '' }}>
                                            Cyprus</option>
                                        <option value="Czechia (Czech Republic)"
                                            {{ old('country_of_residence') == 'Czechia (Czech Republic)' ? 'selected' : '' }}>
                                            Czechia (Czech Republic)</option>
                                        <option value="Democratic Republic of the Congo"
                                            {{ old('country_of_residence') == 'Democratic Republic of the Congo' ? 'selected' : '' }}>
                                            Democratic Republic of the Congo</option>
                                        <option value="Denmark"
                                            {{ old('country_of_residence') == 'Denmark' ? 'selected' : '' }}>Denmark
                                        </option>
                                        <option value="Djibouti"
                                            {{ old('country_of_residence') == 'Djibouti' ? 'selected' : '' }}>Djibouti
                                        </option>
                                        <option value="Dominica"
                                            {{ old('country_of_residence') == 'Dominica' ? 'selected' : '' }}>Dominica
                                        </option>
                                        <option value="Dominican Republic"
                                            {{ old('country_of_residence') == 'Dominican Republic' ? 'selected' : '' }}>
                                            Dominican Republic</option>
                                        <option value="Ecuador"
                                            {{ old('country_of_residence') == 'Ecuador' ? 'selected' : '' }}>Ecuador
                                        </option>
                                        <option value="Egypt"
                                            {{ old('country_of_residence') == 'Egypt' ? 'selected' : '' }}>
                                            Egypt</option>
                                        <option value="El Salvador"
                                            {{ old('country_of_residence') == 'El Salvador' ? 'selected' : '' }}>El
                                            Salvador
                                        </option>
                                        <option value="Equatorial Guinea"
                                            {{ old('country_of_residence') == 'Equatorial Guinea' ? 'selected' : '' }}>
                                            Equatorial Guinea</option>
                                        <option value="Eritrea"
                                            {{ old('country_of_residence') == 'Eritrea' ? 'selected' : '' }}>Eritrea
                                        </option>
                                        <option value="Estonia"
                                            {{ old('country_of_residence') == 'Estonia' ? 'selected' : '' }}>Estonia
                                        </option>
                                        <option value="Eswatini (fmr. Swaziland)"
                                            {{ old('country_of_residence') == 'Eswatini (fmr. Swaziland)' ? 'selected' : '' }}>
                                            Eswatini (fmr. Swaziland)</option>
                                        <option value="Ethiopia"
                                            {{ old('country_of_residence') == 'Ethiopia' ? 'selected' : '' }}>Ethiopia
                                        </option>
                                        <option value="Fiji"
                                            {{ old('country_of_residence') == 'Fiji' ? 'selected' : '' }}>
                                            Fiji</option>
                                        <option value="Finland"
                                            {{ old('country_of_residence') == 'Finland' ? 'selected' : '' }}>Finland
                                        </option>
                                        <option value="France"
                                            {{ old('country_of_residence') == 'France' ? 'selected' : '' }}>France
                                        </option>
                                        <option value="Gabon"
                                            {{ old('country_of_residence') == 'Gabon' ? 'selected' : '' }}>
                                            Gabon</option>
                                        <option value="Gambia"
                                            {{ old('country_of_residence') == 'Gambia' ? 'selected' : '' }}>Gambia
                                        </option>
                                        <option value="Georgia"
                                            {{ old('country_of_residence') == 'Georgia' ? 'selected' : '' }}>Georgia
                                        </option>
                                        <option value="Germany"
                                            {{ old('country_of_residence') == 'Germany' ? 'selected' : '' }}>Germany
                                        </option>
                                        <option value="Ghana"
                                            {{ old('country_of_residence') == 'Ghana' ? 'selected' : '' }}>
                                            Ghana</option>
                                        <option value="Greece"
                                            {{ old('country_of_residence') == 'Greece' ? 'selected' : '' }}>Greece
                                        </option>
                                        <option value="Grenada"
                                            {{ old('country_of_residence') == 'Grenada' ? 'selected' : '' }}>Grenada
                                        </option>
                                        <option value="Guatemala"
                                            {{ old('country_of_residence') == 'Guatemala' ? 'selected' : '' }}>
                                            Guatemala
                                        </option>
                                        <option value="Guinea"
                                            {{ old('country_of_residence') == 'Guinea' ? 'selected' : '' }}>Guinea
                                        </option>
                                        <option value="Guinea-Bissau"
                                            {{ old('country_of_residence') == 'Guinea-Bissau' ? 'selected' : '' }}>
                                            Guinea-Bissau</option>
                                        <option value="Guyana"
                                            {{ old('country_of_residence') == 'Guyana' ? 'selected' : '' }}>Guyana
                                        </option>
                                        <option value="Haiti"
                                            {{ old('country_of_residence') == 'Haiti' ? 'selected' : '' }}>
                                            Haiti</option>
                                        <option value="Honduras"
                                            {{ old('country_of_residence') == 'Honduras' ? 'selected' : '' }}>Honduras
                                        </option>
                                        <option value="Hungary"
                                            {{ old('country_of_residence') == 'Hungary' ? 'selected' : '' }}>Hungary
                                        </option>
                                        <option value="Iceland"
                                            {{ old('country_of_residence') == 'Iceland' ? 'selected' : '' }}>Iceland
                                        </option>
                                        <option value="India"
                                            {{ old('country_of_residence') == 'India' ? 'selected' : '' }}>
                                            India</option>
                                        <option value="Indonesia"
                                            {{ old('country_of_residence') == 'Indonesia' ? 'selected' : '' }}>
                                            Indonesia
                                        </option>
                                        <option value="Iran"
                                            {{ old('country_of_residence') == 'Iran' ? 'selected' : '' }}>
                                            Iran</option>
                                        <option value="Iraq"
                                            {{ old('country_of_residence') == 'Iraq' ? 'selected' : '' }}>
                                            Iraq</option>
                                        <option value="Ireland"
                                            {{ old('country_of_residence') == 'Ireland' ? 'selected' : '' }}>Ireland
                                        </option>
                                        <option value="Israel"
                                            {{ old('country_of_residence') == 'Israel' ? 'selected' : '' }}>Israel
                                        </option>
                                        <option value="Italy"
                                            {{ old('country_of_residence') == 'Italy' ? 'selected' : '' }}>
                                            Italy</option>
                                        <option value="Jamaica"
                                            {{ old('country_of_residence') == 'Jamaica' ? 'selected' : '' }}>Jamaica
                                        </option>
                                        <option value="Japan"
                                            {{ old('country_of_residence') == 'Japan' ? 'selected' : '' }}>
                                            Japan</option>
                                        <option value="Jordan"
                                            {{ old('country_of_residence') == 'Jordan' ? 'selected' : '' }}>Jordan
                                        </option>
                                        <option value="Kazakhstan"
                                            {{ old('country_of_residence') == 'Kazakhstan' ? 'selected' : '' }}>
                                            Kazakhstan
                                        </option>
                                        <option value="Kenya"
                                            {{ old('country_of_residence') == 'Kenya' ? 'selected' : '' }}>
                                            Kenya</option>
                                        <option value="Kiribati"
                                            {{ old('country_of_residence') == 'Kiribati' ? 'selected' : '' }}>Kiribati
                                        </option>
                                        <option value="Kuwait"
                                            {{ old('country_of_residence') == 'Kuwait' ? 'selected' : '' }}>Kuwait
                                        </option>
                                        <option value="Kyrgyzstan"
                                            {{ old('country_of_residence') == 'Kyrgyzstan' ? 'selected' : '' }}>
                                            Kyrgyzstan
                                        </option>
                                        <option value="Laos"
                                            {{ old('country_of_residence') == 'Laos' ? 'selected' : '' }}>
                                            Laos</option>
                                        <option value="Latvia"
                                            {{ old('country_of_residence') == 'Latvia' ? 'selected' : '' }}>Latvia
                                        </option>
                                        <option value="Lebanon"
                                            {{ old('country_of_residence') == 'Lebanon' ? 'selected' : '' }}>Lebanon
                                        </option>
                                        <option value="Lesotho"
                                            {{ old('country_of_residence') == 'Lesotho' ? 'selected' : '' }}>Lesotho
                                        </option>
                                        <option value="Liberia"
                                            {{ old('country_of_residence') == 'Liberia' ? 'selected' : '' }}>Liberia
                                        </option>
                                        <option value="Libya"
                                            {{ old('country_of_residence') == 'Libya' ? 'selected' : '' }}>Libya
                                        </option>
                                        <option value="Liechtenstein"
                                            {{ old('country_of_residence') == 'Liechtenstein' ? 'selected' : '' }}>
                                            Liechtenstein</option>
                                        <option value="Lithuania"
                                            {{ old('country_of_residence') == 'Lithuania' ? 'selected' : '' }}>
                                            Lithuania
                                        </option>
                                        <option value="Luxembourg"
                                            {{ old('country_of_residence') == 'Luxembourg' ? 'selected' : '' }}>
                                            Luxembourg
                                        </option>
                                        <option value="Madagascar"
                                            {{ old('country_of_residence') == 'Madagascar' ? 'selected' : '' }}>
                                            Madagascar
                                        </option>
                                        <option value="Malawi"
                                            {{ old('country_of_residence') == 'Malawi' ? 'selected' : '' }}>Malawi
                                        </option>
                                        <option value="Malaysia"
                                            {{ old('country_of_residence') == 'Malaysia' ? 'selected' : '' }}>Malaysia
                                        </option>
                                        <option value="Maldives"
                                            {{ old('country_of_residence') == 'Maldives' ? 'selected' : '' }}>Maldives
                                        </option>
                                        <option value="Mali"
                                            {{ old('country_of_residence') == 'Mali' ? 'selected' : '' }}>
                                            Mali</option>
                                        <option value="Malta"
                                            {{ old('country_of_residence') == 'Malta' ? 'selected' : '' }}>Malta
                                        </option>
                                        <option value="Marshall Islands"
                                            {{ old('country_of_residence') == 'Marshall Islands' ? 'selected' : '' }}>
                                            Marshall
                                            Islands</option>
                                        <option value="Mauritania"
                                            {{ old('country_of_residence') == 'Mauritania' ? 'selected' : '' }}>
                                            Mauritania
                                        </option>
                                        <option value="Mauritius"
                                            {{ old('country_of_residence') == 'Mauritius' ? 'selected' : '' }}>
                                            Mauritius
                                        </option>
                                        <option value="Mexico"
                                            {{ old('country_of_residence') == 'Mexico' ? 'selected' : '' }}>Mexico
                                        </option>
                                        <option value="Micronesia"
                                            {{ old('country_of_residence') == 'Micronesia' ? 'selected' : '' }}>
                                            Micronesia
                                        </option>
                                        <option value="Moldova"
                                            {{ old('country_of_residence') == 'Moldova' ? 'selected' : '' }}>Moldova
                                        </option>
                                        <option value="Monaco"
                                            {{ old('country_of_residence') == 'Monaco' ? 'selected' : '' }}>Monaco
                                        </option>
                                        <option value="Mongolia"
                                            {{ old('country_of_residence') == 'Mongolia' ? 'selected' : '' }}>Mongolia
                                        </option>
                                        <option value="Montenegro"
                                            {{ old('country_of_residence') == 'Montenegro' ? 'selected' : '' }}>
                                            Montenegro
                                        </option>
                                        <option value="Morocco"
                                            {{ old('country_of_residence') == 'Morocco' ? 'selected' : '' }}>Morocco
                                        </option>
                                        <option value="Mozambique"
                                            {{ old('country_of_residence') == 'Mozambique' ? 'selected' : '' }}>
                                            Mozambique
                                        </option>
                                        <option value="Myanmar (Burma)"
                                            {{ old('country_of_residence') == 'Myanmar (Burma)' ? 'selected' : '' }}>
                                            Myanmar
                                            (Burma)</option>
                                        <option value="Namibia"
                                            {{ old('country_of_residence') == 'Namibia' ? 'selected' : '' }}>Namibia
                                        </option>
                                        <option value="Nauru"
                                            {{ old('country_of_residence') == 'Nauru' ? 'selected' : '' }}>Nauru
                                        </option>
                                        <option value="Nepal"
                                            {{ old('country_of_residence') == 'Nepal' ? 'selected' : '' }}>Nepal
                                        </option>
                                        <option value="Netherlands"
                                            {{ old('country_of_residence') == 'Netherlands' ? 'selected' : '' }}>
                                            Netherlands
                                        </option>
                                        <option value="New Zealand"
                                            {{ old('country_of_residence') == 'New Zealand' ? 'selected' : '' }}>New
                                            Zealand
                                        </option>
                                        <option value="Nicaragua"
                                            {{ old('country_of_residence') == 'Nicaragua' ? 'selected' : '' }}>
                                            Nicaragua
                                        </option>
                                        <option value="Niger"
                                            {{ old('country_of_residence') == 'Niger' ? 'selected' : '' }}>Niger
                                        </option>
                                        <option value="Nigeria"
                                            {{ old('country_of_residence') == 'Nigeria' ? 'selected' : '' }}>Nigeria
                                        </option>
                                        <option value="North Korea"
                                            {{ old('country_of_residence') == 'North Korea' ? 'selected' : '' }}>North
                                            Korea
                                        </option>
                                        <option value="North Macedonia"
                                            {{ old('country_of_residence') == 'North Macedonia' ? 'selected' : '' }}>
                                            North
                                            Macedonia</option>
                                        <option value="Norway"
                                            {{ old('country_of_residence') == 'Norway' ? 'selected' : '' }}>Norway
                                        </option>
                                        <option value="Oman"
                                            {{ old('country_of_residence') == 'Oman' ? 'selected' : '' }}>
                                            Oman</option>
                                        <option value="Pakistan"
                                            {{ old('country_of_residence') == 'Pakistan' ? 'selected' : '' }}>Pakistan
                                        </option>
                                        <option value="Palau"
                                            {{ old('country_of_residence') == 'Palau' ? 'selected' : '' }}>Palau
                                        </option>
                                        <option value="Palestine"
                                            {{ old('country_of_residence') == 'Palestine' ? 'selected' : '' }}>
                                            Palestine
                                        </option>
                                        <option value="Panama"
                                            {{ old('country_of_residence') == 'Panama' ? 'selected' : '' }}>Panama
                                        </option>
                                        <option value="Papua New Guinea"
                                            {{ old('country_of_residence') == 'Papua New Guinea' ? 'selected' : '' }}>
                                            Papua
                                            New Guinea</option>
                                        <option value="Paraguay"
                                            {{ old('country_of_residence') == 'Paraguay' ? 'selected' : '' }}>Paraguay
                                        </option>
                                        <option value="Peru"
                                            {{ old('country_of_residence') == 'Peru' ? 'selected' : '' }}>
                                            Peru</option>
                                        <option value="Philippines"
                                            {{ old('country_of_residence') == 'Philippines' ? 'selected' : '' }}>
                                            Philippines
                                        </option>
                                        <option value="Poland"
                                            {{ old('country_of_residence') == 'Poland' ? 'selected' : '' }}>Poland
                                        </option>
                                        <option value="Portugal"
                                            {{ old('country_of_residence') == 'Portugal' ? 'selected' : '' }}>Portugal
                                        </option>
                                        <option value="Qatar"
                                            {{ old('country_of_residence') == 'Qatar' ? 'selected' : '' }}>Qatar
                                        </option>
                                        <option value="Romania"
                                            {{ old('country_of_residence') == 'Romania' ? 'selected' : '' }}>Romania
                                        </option>
                                        <option value="Russia"
                                            {{ old('country_of_residence') == 'Russia' ? 'selected' : '' }}>Russia
                                        </option>
                                        <option value="Rwanda"
                                            {{ old('country_of_residence') == 'Rwanda' ? 'selected' : '' }}>Rwanda
                                        </option>
                                        <option value="Saint Kitts and Nevis"
                                            {{ old('country_of_residence') == 'Saint Kitts and Nevis' ? 'selected' : '' }}>
                                            Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia"
                                            {{ old('country_of_residence') == 'Saint Lucia' ? 'selected' : '' }}>Saint
                                            Lucia
                                        </option>
                                        <option value="Saint Vincent and the Grenadines"
                                            {{ old('country_of_residence') == 'Saint Vincent and the Grenadines' ? 'selected' : '' }}>
                                            Saint Vincent and the Grenadines</option>
                                        <option value="Samoa"
                                            {{ old('country_of_residence') == 'Samoa' ? 'selected' : '' }}>Samoa
                                        </option>
                                        <option value="San Marino"
                                            {{ old('country_of_residence') == 'San Marino' ? 'selected' : '' }}>San
                                            Marino
                                        </option>
                                        <option value="Sao Tome and Principe"
                                            {{ old('country_of_residence') == 'Sao Tome and Principe' ? 'selected' : '' }}>
                                            Sao
                                            Tome and Principe</option>
                                        <option value="Saudi Arabia"
                                            {{ old('country_of_residence') == 'Saudi Arabia' ? 'selected' : '' }}>
                                            Saudi Arabia
                                        </option>
                                        <option value="Senegal"
                                            {{ old('country_of_residence') == 'Senegal' ? 'selected' : '' }}>Senegal
                                        </option>
                                        <option value="Serbia"
                                            {{ old('country_of_residence') == 'Serbia' ? 'selected' : '' }}>Serbia
                                        </option>
                                        <option value="Seychelles"
                                            {{ old('country_of_residence') == 'Seychelles' ? 'selected' : '' }}>
                                            Seychelles
                                        </option>
                                        <option value="Sierra Leone"
                                            {{ old('country_of_residence') == 'Sierra Leone' ? 'selected' : '' }}>
                                            Sierra Leone
                                        </option>
                                        <option value="Singapore"
                                            {{ old('country_of_residence') == 'Singapore' ? 'selected' : '' }}>
                                            Singapore
                                        </option>
                                        <option value="Slovakia"
                                            {{ old('country_of_residence') == 'Slovakia' ? 'selected' : '' }}>Slovakia
                                        </option>
                                        <option value="Slovenia"
                                            {{ old('country_of_residence') == 'Slovenia' ? 'selected' : '' }}>Slovenia
                                        </option>
                                        <option value="Solomon Islands"
                                            {{ old('country_of_residence') == 'Solomon Islands' ? 'selected' : '' }}>
                                            Solomon
                                            Islands</option>
                                        <option value="Somalia"
                                            {{ old('country_of_residence') == 'Somalia' ? 'selected' : '' }}>Somalia
                                        </option>
                                        <option value="South Africa"
                                            {{ old('country_of_residence') == 'South Africa' ? 'selected' : '' }}>
                                            South Africa
                                        </option>
                                        <option value="South Korea"
                                            {{ old('country_of_residence') == 'South Korea' ? 'selected' : '' }}>South
                                            Korea
                                        </option>
                                        <option value="South Sudan"
                                            {{ old('country_of_residence') == 'South Sudan' ? 'selected' : '' }}>South
                                            Sudan
                                        </option>
                                        <option value="Spain"
                                            {{ old('country_of_residence') == 'Spain' ? 'selected' : '' }}>Spain
                                        </option>
                                        <option value="Sri Lanka"
                                            {{ old('country_of_residence') == 'Sri Lanka' ? 'selected' : '' }}>Sri
                                            Lanka
                                        </option>
                                        <option value="Sudan"
                                            {{ old('country_of_residence') == 'Sudan' ? 'selected' : '' }}>Sudan
                                        </option>
                                        <option value="Suriname"
                                            {{ old('country_of_residence') == 'Suriname' ? 'selected' : '' }}>Suriname
                                        </option>
                                        <option value="Sweden"
                                            {{ old('country_of_residence') == 'Sweden' ? 'selected' : '' }}>Sweden
                                        </option>
                                        <option value="Switzerland"
                                            {{ old('country_of_residence') == 'Switzerland' ? 'selected' : '' }}>
                                            Switzerland
                                        </option>
                                        <option value="Syria"
                                            {{ old('country_of_residence') == 'Syria' ? 'selected' : '' }}>Syria
                                        </option>
                                        <option value="Taiwan"
                                            {{ old('country_of_residence') == 'Taiwan' ? 'selected' : '' }}>Taiwan
                                        </option>
                                        <option value="Tajikistan"
                                            {{ old('country_of_residence') == 'Tajikistan' ? 'selected' : '' }}>
                                            Tajikistan
                                        </option>
                                        <option value="Tanzania"
                                            {{ old('country_of_residence') == 'Tanzania' ? 'selected' : '' }}>Tanzania
                                        </option>
                                        <option value="Thailand"
                                            {{ old('country_of_residence') == 'Thailand' ? 'selected' : '' }}>Thailand
                                        </option>
                                        <option value="Timor-Leste"
                                            {{ old('country_of_residence') == 'Timor-Leste' ? 'selected' : '' }}>
                                            Timor-Leste
                                        </option>
                                        <option value="Togo"
                                            {{ old('country_of_residence') == 'Togo' ? 'selected' : '' }}>
                                            Togo</option>
                                        <option value="Tonga"
                                            {{ old('country_of_residence') == 'Tonga' ? 'selected' : '' }}>Tonga
                                        </option>
                                        <option value="Trinidad and Tobago"
                                            {{ old('country_of_residence') == 'Trinidad and Tobago' ? 'selected' : '' }}>
                                            Trinidad and Tobago</option>
                                        <option value="Tunisia"
                                            {{ old('country_of_residence') == 'Tunisia' ? 'selected' : '' }}>Tunisia
                                        </option>
                                        <option value="Turkey"
                                            {{ old('country_of_residence') == 'Turkey' ? 'selected' : '' }}>Turkey
                                        </option>
                                        <option value="Turkmenistan"
                                            {{ old('country_of_residence') == 'Turkmenistan' ? 'selected' : '' }}>
                                            Turkmenistan
                                        </option>
                                        <option value="Tuvalu"
                                            {{ old('country_of_residence') == 'Tuvalu' ? 'selected' : '' }}>Tuvalu
                                        </option>
                                        <option value="Uganda"
                                            {{ old('country_of_residence') == 'Uganda' ? 'selected' : '' }}>Uganda
                                        </option>
                                        <option value="Ukraine"
                                            {{ old('country_of_residence') == 'Ukraine' ? 'selected' : '' }}>Ukraine
                                        </option>
                                        <option value="United Arab Emirates"
                                            {{ old('country_of_residence') == 'United Arab Emirates' ? 'selected' : '' }}>
                                            United Arab Emirates</option>
                                        <option value="United Kingdom"
                                            {{ old('country_of_residence') == 'United Kingdom' ? 'selected' : '' }}>
                                            United
                                            Kingdom</option>
                                        <option value="United States"
                                            {{ old('country_of_residence') == 'United States' ? 'selected' : '' }}>
                                            United
                                            States</option>
                                        <option value="Uruguay"
                                            {{ old('country_of_residence') == 'Uruguay' ? 'selected' : '' }}>Uruguay
                                        </option>
                                        <option value="Uzbekistan"
                                            {{ old('country_of_residence') == 'Uzbekistan' ? 'selected' : '' }}>
                                            Uzbekistan
                                        </option>
                                        <option value="Vanuatu"
                                            {{ old('country_of_residence') == 'Vanuatu' ? 'selected' : '' }}>Vanuatu
                                        </option>
                                        <option value="Vatican City"
                                            {{ old('country_of_residence') == 'Vatican City' ? 'selected' : '' }}>
                                            Vatican City
                                        </option>
                                        <option value="Venezuela"
                                            {{ old('country_of_residence') == 'Venezuela' ? 'selected' : '' }}>
                                            Venezuela
                                        </option>
                                        <option value="Vietnam"
                                            {{ old('country_of_residence') == 'Vietnam' ? 'selected' : '' }}>Vietnam
                                        </option>
                                        <option value="Yemen"
                                            {{ old('country_of_residence') == 'Yemen' ? 'selected' : '' }}>Yemen
                                        </option>
                                        <option value="Zambia"
                                            {{ old('country_of_residence') == 'Zambia' ? 'selected' : '' }}>Zambia
                                        </option>
                                        <option value="Zimbabwe"
                                            {{ old('country_of_residence') == 'Zimbabwe' ? 'selected' : '' }}>Zimbabwe
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6 mb-3">
                                    <label class="form-label mb-1 text-2">Nationality</label>
                                    <input type="text" value=""
                                        data-msg-required="Please enter your Nationality." maxlength="100"
                                        class="form-control text-3 h-auto py-2" name="nationality"
                                        value="{{ old('nationality') }}">
                                    @error('nationality')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        @php
                            $questions = [
                                'On a scale of 1-10 how much to do you agree with the great return philosophy',
                                'On a scale of 1-10 how much do you believe that more people in the diaspora should be informed about the great return',
                                'On a scale of 1-10 how important to you believe it is for all of us to spread the the great return philosophy to as many people as possible',
                                'On a scale of 1-10 how much to you believe that you posess valuable skills, knowledge and expertise that can be used to support African development',
                                'On a scale of 1-10 how prepared are you to adopt an entrepreneurial mindset',
                                'On a scale of 1-10 how will you rate your current business acumen',
                                'On a scale of 1-10 how experienced are you in taking leadership positions',
                                'On a scale of 1-10 how strong are your communication skills',
                                'On a scale of 1-10 how good are you at problem solving',
                                'On a scale of 1-10 how good are you at thinking strategically',
                                'On a scale of 1-10 how good are you with dealing with pressure',
                                'On a scale of 1-10 how good are you with practising delayed gratification',
                                'On a scale of 1-10 how much do you see failure as a necessary part of longterm success',
                                'On a scale of 1-10 how resilient are you',
                                'On a scale of 1-10 how easy is it for you to visualise a desired outcome before it has yet to be manifested',
                                'On a scale of 1-10 how willing are you to confront some of the challenges that come with joining the great return',
                                "On a scale of 1-10 how easy would it be for you to raise a minimum of $10,000 as start up capital",
                                'On a scale of 1-10 how willing are you to adopt the mentality of a servant in the service of African development',
                                'On a scale of 1-10 how unfulfilled are you with your current life in the diaspora',
                                'On a scale of 1-10 how much do you believe that joining TGR will lead to you having more fulfilment and meaning in your life',
                                'On a scale of 1-10 how much do you believe that Africa could offer you a greater opportunity for wealth and financial freedom compared to the West',
                                'On a scale of 1-10 how much do you believe moving to Africa will give you a sense of belonging and connection that you desire',
                                'On a scale of 1-10 how connected do you feel to Africa',
                                'On a scale of 1-10 how important is being African part of your identity',
                                'On a scale of 1-10 how unappreciated do you feel living in the diaspora',
                                'On a scale of 1-10 how important do you believe it is to invest in your pre-transition preparation when relocating back to Africa',
                                'On s scale of 1-10 how much do you believe that the more prepared you are the higher the likelihood of your TGR success',
                                'On a scale of 1-10 how knowledgeable are you about the economic opportunities available to you in Africa',
                                'On a scale of 1-10 how beneficial will it be for you to be better educated about Africa',
                                'On a scale of 1-10 how confident are you in generating potential business ideas that you can become passionate about, that not only compliment your skills and expertise but also support African development',
                                'On a scale of 1-10 how much clarity do you have about what your unique purpose in Africa will be which is also in alignment with the collective purpose of The Great Return',
                                'On a scale of 1-10 how well have you researched potential business ideas in order to assess their viability and whether they can work successfully in Africa',
                                'On a scale of 1-10 how developed is your business strategy for implementing your idea',
                                'On a scale of 1-10 how beneficial will it be for you to receive assistance in evaluating some of your business ideas',
                            ];
                        @endphp

                        @foreach ($questions as $index => $question)
                            <div class="mb-3">
                                <label for="question{{ $index }}"
                                    class="form-label">{{ $question }}</label>
                                <select class="form-control" id="question{{ $index }}"
                                    name="question{{ $index }}" required>
                                    @for ($i = 1; $i <= 10; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        @endforeach

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
