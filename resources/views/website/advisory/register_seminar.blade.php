@extends('website.layouts.main')

@section('title')
    Seminar Registration
@endsection

@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5"
        style="background-image: url(img/page-header/page-header-background.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>Seminar <strong> Registration Here</strong></h1>
                    <span class="sub-title">Get in touch with us</span>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb breadcrumb-light d-block text-md-end">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Seminar Registration</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <div role="main" class="main">
        <div class="container">
            <div class="row py-4">
                <div class="col-lg-9">

                    <h2 class="font-weight-bold text-8 mt-2 mb-0">Seminar Registration</h2>
                    <p class="mb-4">Feel free to ask for details, don't save any questions!</p>
                    @if (session('alert-type') == 'success')
                        <div class="contact-form-success alert alert-success mt-4">
                            <strong>Success!</strong> {{ session('message') }}
                        </div>
                    @endif
                    <form action="{{ route('site-store-seminar-registration') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Full Name</label>
                                <input type="text" value="" data-msg-required="Please enter your name."
                                    maxlength="100" class="form-control text-3 h-auto py-2" name="full_name"
                                    value="{{ old('full_name') }}">
                                @error('full_name')
                                    <span class="text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Email Address</label>
                                <input type="email" value="{{ old('email') }}"
                                    data-msg-required="Please enter your email address."
                                    data-msg-email="Please enter a valid email address." maxlength="100"
                                    class="form-control text-3 h-auto py-2" name="email">
                                @error('email')
                                    <span class="text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Country Of Residence</label>
                                <select class="form-control text-3 h-auto py-2" name="country_of_residence" required>
                                    <option value="" disabled {{ old('country_of_residence') ? '' : 'selected' }}>
                                        Select your country</option>
                                    <option value="Afghanistan"
                                        {{ old('country_of_residence') == 'Afghanistan' ? 'selected' : '' }}>Afghanistan
                                    </option>
                                    <option value="Albania"
                                        {{ old('country_of_residence') == 'Albania' ? 'selected' : '' }}>Albania</option>
                                    <option value="Algeria"
                                        {{ old('country_of_residence') == 'Algeria' ? 'selected' : '' }}>Algeria</option>
                                    <option value="Andorra"
                                        {{ old('country_of_residence') == 'Andorra' ? 'selected' : '' }}>Andorra</option>
                                    <option value="Angola" {{ old('country_of_residence') == 'Angola' ? 'selected' : '' }}>
                                        Angola</option>
                                    <option value="Antigua and Barbuda"
                                        {{ old('country_of_residence') == 'Antigua and Barbuda' ? 'selected' : '' }}>
                                        Antigua and Barbuda</option>
                                    <option value="Argentina"
                                        {{ old('country_of_residence') == 'Argentina' ? 'selected' : '' }}>Argentina
                                    </option>
                                    <option value="Armenia"
                                        {{ old('country_of_residence') == 'Armenia' ? 'selected' : '' }}>Armenia</option>
                                    <option value="Australia"
                                        {{ old('country_of_residence') == 'Australia' ? 'selected' : '' }}>Australia
                                    </option>
                                    <option value="Austria"
                                        {{ old('country_of_residence') == 'Austria' ? 'selected' : '' }}>Austria</option>
                                    <option value="Azerbaijan"
                                        {{ old('country_of_residence') == 'Azerbaijan' ? 'selected' : '' }}>Azerbaijan
                                    </option>
                                    <option value="Bahamas"
                                        {{ old('country_of_residence') == 'Bahamas' ? 'selected' : '' }}>Bahamas</option>
                                    <option value="Bahrain"
                                        {{ old('country_of_residence') == 'Bahrain' ? 'selected' : '' }}>Bahrain</option>
                                    <option value="Bangladesh"
                                        {{ old('country_of_residence') == 'Bangladesh' ? 'selected' : '' }}>Bangladesh
                                    </option>
                                    <option value="Barbados"
                                        {{ old('country_of_residence') == 'Barbados' ? 'selected' : '' }}>Barbados</option>
                                    <option value="Belarus"
                                        {{ old('country_of_residence') == 'Belarus' ? 'selected' : '' }}>Belarus</option>
                                    <option value="Belgium"
                                        {{ old('country_of_residence') == 'Belgium' ? 'selected' : '' }}>Belgium</option>
                                    <option value="Belize" {{ old('country_of_residence') == 'Belize' ? 'selected' : '' }}>
                                        Belize</option>
                                    <option value="Benin" {{ old('country_of_residence') == 'Benin' ? 'selected' : '' }}>
                                        Benin</option>
                                    <option value="Bhutan" {{ old('country_of_residence') == 'Bhutan' ? 'selected' : '' }}>
                                        Bhutan</option>
                                    <option value="Bolivia"
                                        {{ old('country_of_residence') == 'Bolivia' ? 'selected' : '' }}>Bolivia</option>
                                    <option value="Bosnia and Herzegovina"
                                        {{ old('country_of_residence') == 'Bosnia and Herzegovina' ? 'selected' : '' }}>
                                        Bosnia and Herzegovina</option>
                                    <option value="Botswana"
                                        {{ old('country_of_residence') == 'Botswana' ? 'selected' : '' }}>Botswana</option>
                                    <option value="Brazil" {{ old('country_of_residence') == 'Brazil' ? 'selected' : '' }}>
                                        Brazil</option>
                                    <option value="Brunei" {{ old('country_of_residence') == 'Brunei' ? 'selected' : '' }}>
                                        Brunei</option>
                                    <option value="Bulgaria"
                                        {{ old('country_of_residence') == 'Bulgaria' ? 'selected' : '' }}>Bulgaria</option>
                                    <option value="Burkina Faso"
                                        {{ old('country_of_residence') == 'Burkina Faso' ? 'selected' : '' }}>Burkina Faso
                                    </option>
                                    <option value="Burundi"
                                        {{ old('country_of_residence') == 'Burundi' ? 'selected' : '' }}>Burundi</option>
                                    <option value="Cabo Verde"
                                        {{ old('country_of_residence') == 'Cabo Verde' ? 'selected' : '' }}>Cabo Verde
                                    </option>
                                    <option value="Cambodia"
                                        {{ old('country_of_residence') == 'Cambodia' ? 'selected' : '' }}>Cambodia</option>
                                    <option value="Cameroon"
                                        {{ old('country_of_residence') == 'Cameroon' ? 'selected' : '' }}>Cameroon</option>
                                    <option value="Canada" {{ old('country_of_residence') == 'Canada' ? 'selected' : '' }}>
                                        Canada</option>
                                    <option value="Central African Republic"
                                        {{ old('country_of_residence') == 'Central African Republic' ? 'selected' : '' }}>
                                        Central African Republic</option>
                                    <option value="Chad" {{ old('country_of_residence') == 'Chad' ? 'selected' : '' }}>
                                        Chad</option>
                                    <option value="Chile" {{ old('country_of_residence') == 'Chile' ? 'selected' : '' }}>
                                        Chile</option>
                                    <option value="China" {{ old('country_of_residence') == 'China' ? 'selected' : '' }}>
                                        China</option>
                                    <option value="Colombia"
                                        {{ old('country_of_residence') == 'Colombia' ? 'selected' : '' }}>Colombia</option>
                                    <option value="Comoros"
                                        {{ old('country_of_residence') == 'Comoros' ? 'selected' : '' }}>Comoros</option>
                                    <option value="Congo (Congo-Brazzaville)"
                                        {{ old('country_of_residence') == 'Congo (Congo-Brazzaville)' ? 'selected' : '' }}>
                                        Congo (Congo-Brazzaville)</option>
                                    <option value="Costa Rica"
                                        {{ old('country_of_residence') == 'Costa Rica' ? 'selected' : '' }}>Costa Rica
                                    </option>
                                    <option value="Croatia"
                                        {{ old('country_of_residence') == 'Croatia' ? 'selected' : '' }}>Croatia</option>
                                    <option value="Cuba" {{ old('country_of_residence') == 'Cuba' ? 'selected' : '' }}>
                                        Cuba</option>
                                    <option value="Cyprus" {{ old('country_of_residence') == 'Cyprus' ? 'selected' : '' }}>
                                        Cyprus</option>
                                    <option value="Czechia (Czech Republic)"
                                        {{ old('country_of_residence') == 'Czechia (Czech Republic)' ? 'selected' : '' }}>
                                        Czechia (Czech Republic)</option>
                                    <option value="Democratic Republic of the Congo"
                                        {{ old('country_of_residence') == 'Democratic Republic of the Congo' ? 'selected' : '' }}>
                                        Democratic Republic of the Congo</option>
                                    <option value="Denmark"
                                        {{ old('country_of_residence') == 'Denmark' ? 'selected' : '' }}>Denmark</option>
                                    <option value="Djibouti"
                                        {{ old('country_of_residence') == 'Djibouti' ? 'selected' : '' }}>Djibouti</option>
                                    <option value="Dominica"
                                        {{ old('country_of_residence') == 'Dominica' ? 'selected' : '' }}>Dominica</option>
                                    <option value="Dominican Republic"
                                        {{ old('country_of_residence') == 'Dominican Republic' ? 'selected' : '' }}>
                                        Dominican Republic</option>
                                    <option value="Ecuador"
                                        {{ old('country_of_residence') == 'Ecuador' ? 'selected' : '' }}>Ecuador</option>
                                    <option value="Egypt" {{ old('country_of_residence') == 'Egypt' ? 'selected' : '' }}>
                                        Egypt</option>
                                    <option value="El Salvador"
                                        {{ old('country_of_residence') == 'El Salvador' ? 'selected' : '' }}>El Salvador
                                    </option>
                                    <option value="Equatorial Guinea"
                                        {{ old('country_of_residence') == 'Equatorial Guinea' ? 'selected' : '' }}>
                                        Equatorial Guinea</option>
                                    <option value="Eritrea"
                                        {{ old('country_of_residence') == 'Eritrea' ? 'selected' : '' }}>Eritrea</option>
                                    <option value="Estonia"
                                        {{ old('country_of_residence') == 'Estonia' ? 'selected' : '' }}>Estonia</option>
                                    <option value="Eswatini (fmr. Swaziland)"
                                        {{ old('country_of_residence') == 'Eswatini (fmr. Swaziland)' ? 'selected' : '' }}>
                                        Eswatini (fmr. Swaziland)</option>
                                    <option value="Ethiopia"
                                        {{ old('country_of_residence') == 'Ethiopia' ? 'selected' : '' }}>Ethiopia</option>
                                    <option value="Fiji" {{ old('country_of_residence') == 'Fiji' ? 'selected' : '' }}>
                                        Fiji</option>
                                    <option value="Finland"
                                        {{ old('country_of_residence') == 'Finland' ? 'selected' : '' }}>Finland</option>
                                    <option value="France"
                                        {{ old('country_of_residence') == 'France' ? 'selected' : '' }}>France</option>
                                    <option value="Gabon" {{ old('country_of_residence') == 'Gabon' ? 'selected' : '' }}>
                                        Gabon</option>
                                    <option value="Gambia"
                                        {{ old('country_of_residence') == 'Gambia' ? 'selected' : '' }}>Gambia</option>
                                    <option value="Georgia"
                                        {{ old('country_of_residence') == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                                    <option value="Germany"
                                        {{ old('country_of_residence') == 'Germany' ? 'selected' : '' }}>Germany</option>
                                    <option value="Ghana" {{ old('country_of_residence') == 'Ghana' ? 'selected' : '' }}>
                                        Ghana</option>
                                    <option value="Greece"
                                        {{ old('country_of_residence') == 'Greece' ? 'selected' : '' }}>Greece</option>
                                    <option value="Grenada"
                                        {{ old('country_of_residence') == 'Grenada' ? 'selected' : '' }}>Grenada</option>
                                    <option value="Guatemala"
                                        {{ old('country_of_residence') == 'Guatemala' ? 'selected' : '' }}>Guatemala
                                    </option>
                                    <option value="Guinea"
                                        {{ old('country_of_residence') == 'Guinea' ? 'selected' : '' }}>Guinea</option>
                                    <option value="Guinea-Bissau"
                                        {{ old('country_of_residence') == 'Guinea-Bissau' ? 'selected' : '' }}>
                                        Guinea-Bissau</option>
                                    <option value="Guyana"
                                        {{ old('country_of_residence') == 'Guyana' ? 'selected' : '' }}>Guyana</option>
                                    <option value="Haiti" {{ old('country_of_residence') == 'Haiti' ? 'selected' : '' }}>
                                        Haiti</option>
                                    <option value="Honduras"
                                        {{ old('country_of_residence') == 'Honduras' ? 'selected' : '' }}>Honduras</option>
                                    <option value="Hungary"
                                        {{ old('country_of_residence') == 'Hungary' ? 'selected' : '' }}>Hungary</option>
                                    <option value="Iceland"
                                        {{ old('country_of_residence') == 'Iceland' ? 'selected' : '' }}>Iceland</option>
                                    <option value="India" {{ old('country_of_residence') == 'India' ? 'selected' : '' }}>
                                        India</option>
                                    <option value="Indonesia"
                                        {{ old('country_of_residence') == 'Indonesia' ? 'selected' : '' }}>Indonesia
                                    </option>
                                    <option value="Iran" {{ old('country_of_residence') == 'Iran' ? 'selected' : '' }}>
                                        Iran</option>
                                    <option value="Iraq" {{ old('country_of_residence') == 'Iraq' ? 'selected' : '' }}>
                                        Iraq</option>
                                    <option value="Ireland"
                                        {{ old('country_of_residence') == 'Ireland' ? 'selected' : '' }}>Ireland</option>
                                    <option value="Israel"
                                        {{ old('country_of_residence') == 'Israel' ? 'selected' : '' }}>Israel</option>
                                    <option value="Italy" {{ old('country_of_residence') == 'Italy' ? 'selected' : '' }}>
                                        Italy</option>
                                    <option value="Jamaica"
                                        {{ old('country_of_residence') == 'Jamaica' ? 'selected' : '' }}>Jamaica</option>
                                    <option value="Japan" {{ old('country_of_residence') == 'Japan' ? 'selected' : '' }}>
                                        Japan</option>
                                    <option value="Jordan"
                                        {{ old('country_of_residence') == 'Jordan' ? 'selected' : '' }}>Jordan</option>
                                    <option value="Kazakhstan"
                                        {{ old('country_of_residence') == 'Kazakhstan' ? 'selected' : '' }}>Kazakhstan
                                    </option>
                                    <option value="Kenya" {{ old('country_of_residence') == 'Kenya' ? 'selected' : '' }}>
                                        Kenya</option>
                                    <option value="Kiribati"
                                        {{ old('country_of_residence') == 'Kiribati' ? 'selected' : '' }}>Kiribati</option>
                                    <option value="Kuwait"
                                        {{ old('country_of_residence') == 'Kuwait' ? 'selected' : '' }}>Kuwait</option>
                                    <option value="Kyrgyzstan"
                                        {{ old('country_of_residence') == 'Kyrgyzstan' ? 'selected' : '' }}>Kyrgyzstan
                                    </option>
                                    <option value="Laos" {{ old('country_of_residence') == 'Laos' ? 'selected' : '' }}>
                                        Laos</option>
                                    <option value="Latvia"
                                        {{ old('country_of_residence') == 'Latvia' ? 'selected' : '' }}>Latvia</option>
                                    <option value="Lebanon"
                                        {{ old('country_of_residence') == 'Lebanon' ? 'selected' : '' }}>Lebanon</option>
                                    <option value="Lesotho"
                                        {{ old('country_of_residence') == 'Lesotho' ? 'selected' : '' }}>Lesotho</option>
                                    <option value="Liberia"
                                        {{ old('country_of_residence') == 'Liberia' ? 'selected' : '' }}>Liberia</option>
                                    <option value="Libya"
                                        {{ old('country_of_residence') == 'Libya' ? 'selected' : '' }}>Libya</option>
                                    <option value="Liechtenstein"
                                        {{ old('country_of_residence') == 'Liechtenstein' ? 'selected' : '' }}>
                                        Liechtenstein</option>
                                    <option value="Lithuania"
                                        {{ old('country_of_residence') == 'Lithuania' ? 'selected' : '' }}>Lithuania
                                    </option>
                                    <option value="Luxembourg"
                                        {{ old('country_of_residence') == 'Luxembourg' ? 'selected' : '' }}>Luxembourg
                                    </option>
                                    <option value="Madagascar"
                                        {{ old('country_of_residence') == 'Madagascar' ? 'selected' : '' }}>Madagascar
                                    </option>
                                    <option value="Malawi"
                                        {{ old('country_of_residence') == 'Malawi' ? 'selected' : '' }}>Malawi</option>
                                    <option value="Malaysia"
                                        {{ old('country_of_residence') == 'Malaysia' ? 'selected' : '' }}>Malaysia
                                    </option>
                                    <option value="Maldives"
                                        {{ old('country_of_residence') == 'Maldives' ? 'selected' : '' }}>Maldives
                                    </option>
                                    <option value="Mali" {{ old('country_of_residence') == 'Mali' ? 'selected' : '' }}>
                                        Mali</option>
                                    <option value="Malta"
                                        {{ old('country_of_residence') == 'Malta' ? 'selected' : '' }}>Malta</option>
                                    <option value="Marshall Islands"
                                        {{ old('country_of_residence') == 'Marshall Islands' ? 'selected' : '' }}>Marshall
                                        Islands</option>
                                    <option value="Mauritania"
                                        {{ old('country_of_residence') == 'Mauritania' ? 'selected' : '' }}>Mauritania
                                    </option>
                                    <option value="Mauritius"
                                        {{ old('country_of_residence') == 'Mauritius' ? 'selected' : '' }}>Mauritius
                                    </option>
                                    <option value="Mexico"
                                        {{ old('country_of_residence') == 'Mexico' ? 'selected' : '' }}>Mexico</option>
                                    <option value="Micronesia"
                                        {{ old('country_of_residence') == 'Micronesia' ? 'selected' : '' }}>Micronesia
                                    </option>
                                    <option value="Moldova"
                                        {{ old('country_of_residence') == 'Moldova' ? 'selected' : '' }}>Moldova</option>
                                    <option value="Monaco"
                                        {{ old('country_of_residence') == 'Monaco' ? 'selected' : '' }}>Monaco</option>
                                    <option value="Mongolia"
                                        {{ old('country_of_residence') == 'Mongolia' ? 'selected' : '' }}>Mongolia
                                    </option>
                                    <option value="Montenegro"
                                        {{ old('country_of_residence') == 'Montenegro' ? 'selected' : '' }}>Montenegro
                                    </option>
                                    <option value="Morocco"
                                        {{ old('country_of_residence') == 'Morocco' ? 'selected' : '' }}>Morocco</option>
                                    <option value="Mozambique"
                                        {{ old('country_of_residence') == 'Mozambique' ? 'selected' : '' }}>Mozambique
                                    </option>
                                    <option value="Myanmar (Burma)"
                                        {{ old('country_of_residence') == 'Myanmar (Burma)' ? 'selected' : '' }}>Myanmar
                                        (Burma)</option>
                                    <option value="Namibia"
                                        {{ old('country_of_residence') == 'Namibia' ? 'selected' : '' }}>Namibia</option>
                                    <option value="Nauru"
                                        {{ old('country_of_residence') == 'Nauru' ? 'selected' : '' }}>Nauru</option>
                                    <option value="Nepal"
                                        {{ old('country_of_residence') == 'Nepal' ? 'selected' : '' }}>Nepal</option>
                                    <option value="Netherlands"
                                        {{ old('country_of_residence') == 'Netherlands' ? 'selected' : '' }}>Netherlands
                                    </option>
                                    <option value="New Zealand"
                                        {{ old('country_of_residence') == 'New Zealand' ? 'selected' : '' }}>New Zealand
                                    </option>
                                    <option value="Nicaragua"
                                        {{ old('country_of_residence') == 'Nicaragua' ? 'selected' : '' }}>Nicaragua
                                    </option>
                                    <option value="Niger"
                                        {{ old('country_of_residence') == 'Niger' ? 'selected' : '' }}>Niger</option>
                                    <option value="Nigeria"
                                        {{ old('country_of_residence') == 'Nigeria' ? 'selected' : '' }}>Nigeria</option>
                                    <option value="North Korea"
                                        {{ old('country_of_residence') == 'North Korea' ? 'selected' : '' }}>North Korea
                                    </option>
                                    <option value="North Macedonia"
                                        {{ old('country_of_residence') == 'North Macedonia' ? 'selected' : '' }}>North
                                        Macedonia</option>
                                    <option value="Norway"
                                        {{ old('country_of_residence') == 'Norway' ? 'selected' : '' }}>Norway</option>
                                    <option value="Oman" {{ old('country_of_residence') == 'Oman' ? 'selected' : '' }}>
                                        Oman</option>
                                    <option value="Pakistan"
                                        {{ old('country_of_residence') == 'Pakistan' ? 'selected' : '' }}>Pakistan
                                    </option>
                                    <option value="Palau"
                                        {{ old('country_of_residence') == 'Palau' ? 'selected' : '' }}>Palau</option>
                                    <option value="Palestine"
                                        {{ old('country_of_residence') == 'Palestine' ? 'selected' : '' }}>Palestine
                                    </option>
                                    <option value="Panama"
                                        {{ old('country_of_residence') == 'Panama' ? 'selected' : '' }}>Panama</option>
                                    <option value="Papua New Guinea"
                                        {{ old('country_of_residence') == 'Papua New Guinea' ? 'selected' : '' }}>Papua
                                        New Guinea</option>
                                    <option value="Paraguay"
                                        {{ old('country_of_residence') == 'Paraguay' ? 'selected' : '' }}>Paraguay
                                    </option>
                                    <option value="Peru" {{ old('country_of_residence') == 'Peru' ? 'selected' : '' }}>
                                        Peru</option>
                                    <option value="Philippines"
                                        {{ old('country_of_residence') == 'Philippines' ? 'selected' : '' }}>Philippines
                                    </option>
                                    <option value="Poland"
                                        {{ old('country_of_residence') == 'Poland' ? 'selected' : '' }}>Poland</option>
                                    <option value="Portugal"
                                        {{ old('country_of_residence') == 'Portugal' ? 'selected' : '' }}>Portugal
                                    </option>
                                    <option value="Qatar"
                                        {{ old('country_of_residence') == 'Qatar' ? 'selected' : '' }}>Qatar</option>
                                    <option value="Romania"
                                        {{ old('country_of_residence') == 'Romania' ? 'selected' : '' }}>Romania</option>
                                    <option value="Russia"
                                        {{ old('country_of_residence') == 'Russia' ? 'selected' : '' }}>Russia</option>
                                    <option value="Rwanda"
                                        {{ old('country_of_residence') == 'Rwanda' ? 'selected' : '' }}>Rwanda</option>
                                    <option value="Saint Kitts and Nevis"
                                        {{ old('country_of_residence') == 'Saint Kitts and Nevis' ? 'selected' : '' }}>
                                        Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia"
                                        {{ old('country_of_residence') == 'Saint Lucia' ? 'selected' : '' }}>Saint Lucia
                                    </option>
                                    <option value="Saint Vincent and the Grenadines"
                                        {{ old('country_of_residence') == 'Saint Vincent and the Grenadines' ? 'selected' : '' }}>
                                        Saint Vincent and the Grenadines</option>
                                    <option value="Samoa"
                                        {{ old('country_of_residence') == 'Samoa' ? 'selected' : '' }}>Samoa</option>
                                    <option value="San Marino"
                                        {{ old('country_of_residence') == 'San Marino' ? 'selected' : '' }}>San Marino
                                    </option>
                                    <option value="Sao Tome and Principe"
                                        {{ old('country_of_residence') == 'Sao Tome and Principe' ? 'selected' : '' }}>Sao
                                        Tome and Principe</option>
                                    <option value="Saudi Arabia"
                                        {{ old('country_of_residence') == 'Saudi Arabia' ? 'selected' : '' }}>Saudi Arabia
                                    </option>
                                    <option value="Senegal"
                                        {{ old('country_of_residence') == 'Senegal' ? 'selected' : '' }}>Senegal</option>
                                    <option value="Serbia"
                                        {{ old('country_of_residence') == 'Serbia' ? 'selected' : '' }}>Serbia</option>
                                    <option value="Seychelles"
                                        {{ old('country_of_residence') == 'Seychelles' ? 'selected' : '' }}>Seychelles
                                    </option>
                                    <option value="Sierra Leone"
                                        {{ old('country_of_residence') == 'Sierra Leone' ? 'selected' : '' }}>Sierra Leone
                                    </option>
                                    <option value="Singapore"
                                        {{ old('country_of_residence') == 'Singapore' ? 'selected' : '' }}>Singapore
                                    </option>
                                    <option value="Slovakia"
                                        {{ old('country_of_residence') == 'Slovakia' ? 'selected' : '' }}>Slovakia
                                    </option>
                                    <option value="Slovenia"
                                        {{ old('country_of_residence') == 'Slovenia' ? 'selected' : '' }}>Slovenia
                                    </option>
                                    <option value="Solomon Islands"
                                        {{ old('country_of_residence') == 'Solomon Islands' ? 'selected' : '' }}>Solomon
                                        Islands</option>
                                    <option value="Somalia"
                                        {{ old('country_of_residence') == 'Somalia' ? 'selected' : '' }}>Somalia</option>
                                    <option value="South Africa"
                                        {{ old('country_of_residence') == 'South Africa' ? 'selected' : '' }}>South Africa
                                    </option>
                                    <option value="South Korea"
                                        {{ old('country_of_residence') == 'South Korea' ? 'selected' : '' }}>South Korea
                                    </option>
                                    <option value="South Sudan"
                                        {{ old('country_of_residence') == 'South Sudan' ? 'selected' : '' }}>South Sudan
                                    </option>
                                    <option value="Spain"
                                        {{ old('country_of_residence') == 'Spain' ? 'selected' : '' }}>Spain</option>
                                    <option value="Sri Lanka"
                                        {{ old('country_of_residence') == 'Sri Lanka' ? 'selected' : '' }}>Sri Lanka
                                    </option>
                                    <option value="Sudan"
                                        {{ old('country_of_residence') == 'Sudan' ? 'selected' : '' }}>Sudan</option>
                                    <option value="Suriname"
                                        {{ old('country_of_residence') == 'Suriname' ? 'selected' : '' }}>Suriname
                                    </option>
                                    <option value="Sweden"
                                        {{ old('country_of_residence') == 'Sweden' ? 'selected' : '' }}>Sweden</option>
                                    <option value="Switzerland"
                                        {{ old('country_of_residence') == 'Switzerland' ? 'selected' : '' }}>Switzerland
                                    </option>
                                    <option value="Syria"
                                        {{ old('country_of_residence') == 'Syria' ? 'selected' : '' }}>Syria</option>
                                    <option value="Taiwan"
                                        {{ old('country_of_residence') == 'Taiwan' ? 'selected' : '' }}>Taiwan</option>
                                    <option value="Tajikistan"
                                        {{ old('country_of_residence') == 'Tajikistan' ? 'selected' : '' }}>Tajikistan
                                    </option>
                                    <option value="Tanzania"
                                        {{ old('country_of_residence') == 'Tanzania' ? 'selected' : '' }}>Tanzania
                                    </option>
                                    <option value="Thailand"
                                        {{ old('country_of_residence') == 'Thailand' ? 'selected' : '' }}>Thailand
                                    </option>
                                    <option value="Timor-Leste"
                                        {{ old('country_of_residence') == 'Timor-Leste' ? 'selected' : '' }}>Timor-Leste
                                    </option>
                                    <option value="Togo" {{ old('country_of_residence') == 'Togo' ? 'selected' : '' }}>
                                        Togo</option>
                                    <option value="Tonga"
                                        {{ old('country_of_residence') == 'Tonga' ? 'selected' : '' }}>Tonga</option>
                                    <option value="Trinidad and Tobago"
                                        {{ old('country_of_residence') == 'Trinidad and Tobago' ? 'selected' : '' }}>
                                        Trinidad and Tobago</option>
                                    <option value="Tunisia"
                                        {{ old('country_of_residence') == 'Tunisia' ? 'selected' : '' }}>Tunisia</option>
                                    <option value="Turkey"
                                        {{ old('country_of_residence') == 'Turkey' ? 'selected' : '' }}>Turkey</option>
                                    <option value="Turkmenistan"
                                        {{ old('country_of_residence') == 'Turkmenistan' ? 'selected' : '' }}>Turkmenistan
                                    </option>
                                    <option value="Tuvalu"
                                        {{ old('country_of_residence') == 'Tuvalu' ? 'selected' : '' }}>Tuvalu</option>
                                    <option value="Uganda"
                                        {{ old('country_of_residence') == 'Uganda' ? 'selected' : '' }}>Uganda</option>
                                    <option value="Ukraine"
                                        {{ old('country_of_residence') == 'Ukraine' ? 'selected' : '' }}>Ukraine</option>
                                    <option value="United Arab Emirates"
                                        {{ old('country_of_residence') == 'United Arab Emirates' ? 'selected' : '' }}>
                                        United Arab Emirates</option>
                                    <option value="United Kingdom"
                                        {{ old('country_of_residence') == 'United Kingdom' ? 'selected' : '' }}>United
                                        Kingdom</option>
                                    <option value="United States"
                                        {{ old('country_of_residence') == 'United States' ? 'selected' : '' }}>United
                                        States</option>
                                    <option value="Uruguay"
                                        {{ old('country_of_residence') == 'Uruguay' ? 'selected' : '' }}>Uruguay</option>
                                    <option value="Uzbekistan"
                                        {{ old('country_of_residence') == 'Uzbekistan' ? 'selected' : '' }}>Uzbekistan
                                    </option>
                                    <option value="Vanuatu"
                                        {{ old('country_of_residence') == 'Vanuatu' ? 'selected' : '' }}>Vanuatu</option>
                                    <option value="Vatican City"
                                        {{ old('country_of_residence') == 'Vatican City' ? 'selected' : '' }}>Vatican City
                                    </option>
                                    <option value="Venezuela"
                                        {{ old('country_of_residence') == 'Venezuela' ? 'selected' : '' }}>Venezuela
                                    </option>
                                    <option value="Vietnam"
                                        {{ old('country_of_residence') == 'Vietnam' ? 'selected' : '' }}>Vietnam</option>
                                    <option value="Yemen"
                                        {{ old('country_of_residence') == 'Yemen' ? 'selected' : '' }}>Yemen</option>
                                    <option value="Zambia"
                                        {{ old('country_of_residence') == 'Zambia' ? 'selected' : '' }}>Zambia</option>
                                    <option value="Zimbabwe"
                                        {{ old('country_of_residence') == 'Zimbabwe' ? 'selected' : '' }}>Zimbabwe
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Nationality</label>
                                <input type="text" value="" data-msg-required="Please enter your Nationality."
                                    maxlength="100" class="form-control text-3 h-auto py-2" name="nationality"
                                    value="{{ old('nationality') }}">
                                @error('nationality')
                                    <span class="text text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>

                        <h3 class="form-label mb-1 text-2">Sectors of Interest</h3>
                        <p>Please select your job category and subcategory:</p>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Job Category</label>
                                <select class="form-control text-3 h-auto py-2" name="job_category" id="job_category"
                                    required>
                                    <option value="" disabled selected>Select your job category</option>
                                    <option value="Accounting">Accounting</option>
                                    <option value="Administration">Administration</option>
                                    <option value="Advertising">Advertising</option>
                                    <option value="Agriculture">Agriculture</option>
                                    <option value="Arts">Arts</option>
                                    <option value="Banking">Banking</option>
                                    <option value="Construction">Construction</option>
                                    <option value="Customer Service">Customer Service</option>
                                    <option value="Education">Education</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Finance">Finance</option>
                                    <option value="Healthcare">Healthcare</option>
                                    <option value="Hospitality">Hospitality</option>
                                    <option value="Human Resources">Human Resources</option>
                                    <option value="IT">IT</option>
                                    <option value="Legal">Legal</option>
                                    <option value="Logistics">Logistics</option>
                                    <option value="Manufacturing">Manufacturing</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Media">Media</option>
                                    <option value="Real Estate">Real Estate</option>
                                    <option value="Retail">Retail</option>
                                    <option value="Sales">Sales</option>
                                    <option value="Science">Science</option>
                                    <option value="Technology">Technology</option>
                                    <option value="Transportation">Transportation</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Job Subcategory</label>
                                <select class="form-control text-3 h-auto py-2" name="job_subcategory"
                                    id="job_subcategory" required>
                                    <option value="" disabled selected>Select a subcategory</option>
                                    <!-- Subcategory options will be populated here -->
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">How much will you be willing to pay for an annual
                                    subscription (in USD)?</label>
                                <input type="number" value="" data-msg-required="Please enter the amount."
                                   class="form-control text-3 h-auto py-2" name="subscription_amount"
                                    min="0"   value="{{ old('subscription_amount') }}">
                                @error('subscription_amount')
                                    <span class="text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">How many TGR Seminars would you like to receive on an
                                    annual basis to justify subscription?</label>
                                <input type="number" value=""
                                    data-msg-required="Please enter the number of seminars."   value="{{ old('seminar_count') }}"
                                    class="form-control text-3 h-auto py-2" name="seminar_count">
                                @error('seminar_count')
                                    <span class="text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <input type="submit" value="Send Message" class="btn btn-secondary btn-modern"
                                    data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>




                </div>
                <div class="col-lg-3">

                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                        <h4 class="mt-2 mb-1">Our <strong>Office</strong></h4>
                        <ul class="list list-icons list-icons-style-2 mt-2 ">
                            <li><i class="fas fa-map-marker-alt top-6 text-color-secondary"></i> <strong
                                    class="text-dark">Address:</strong>
                                <p class="m-0">GB33 Nii Tsoku Komletse, Abbey St</p>
                                <p class="m-0">Gbawe Zero, Greater Accra</p>
                            </li>
                            <li><i class="fas fa-phone top-6 text-color-secondary"></i> <strong
                                    class="text-dark">Phone:</strong> (123) 456-789</li>
                            <li><i class="fas fa-envelope top-6 text-color-secondary"></i> <strong
                                    class="text-dark">Email:</strong> <a
                                    href="https://www.okler.net/cdn-cgi/l/email-protection#91fcf0f8fdd1f4e9f0fce1fdf4bff2fefc"><span
                                        class="__cf_email__"
                                        data-cfemail="3558545c5975504d54584559501b565a58">[email&#160;protected]</span></a>
                            </li>
                        </ul>
                    </div>

                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                        <h4 class="pt-5">Business <strong>Hours</strong></h4>
                        <ul class="list list-icons list-dark mt-2">
                            <li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 5pm</li>
                            <li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
                            <li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
                        </ul>
                    </div>

                    <h4 class="pt-5">Get in <strong>Touch</strong></h4>
                    <p class="lead mb-0 text-4">Don't hesitate to call, text,email or visit our office for any further
                        inquiries.</p>

                </div>

            </div>

        </div>

        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
        <div id="googlemaps" class="google-map mt-0" style="height: 500px;"></div>

    </div>

    <script>
        const jobSubcategories = {
            Accounting: ["Auditing", "Bookkeeping", "Tax Preparation"],
            Administration: ["Office Management", "Executive Assistance", "Data Entry"],
            Advertising: ["Digital Marketing", "Creative Direction", "Media Buying"],
            Agriculture: ["Crop Production", "Livestock Farming", "Fish Farming"],
            Arts: ["Painting", "Sculpture", "Graphic Design"],
            Banking: ["Retail Banking", "Investment Banking", "Loan Processing"],
            Construction: ["Residential Construction", "Commercial Construction", "Project Management"],
            CustomerService: ["Call Center", "Technical Support", "Client Relations"],
            Education: ["Teaching", "Curriculum Development", "Administration"],
            Engineering: ["Civil Engineering", "Mechanical Engineering", "Electrical Engineering"],
            Finance: ["Financial Planning", "Investment Analysis", "Insurance"],
            Healthcare: ["Nursing", "Surgery", "Pharmacy"],
            Hospitality: ["Hotel Management", "Event Planning", "Food Service"],
            HumanResources: ["Recruitment", "Employee Relations", "Training"],
            IT: ["Software Development", "Network Administration", "IT Support"],
            Legal: ["Corporate Law", "Criminal Law", "Legal Assistance"],
            Logistics: ["Supply Chain Management", "Transport Coordination", "Inventory Management"],
            Manufacturing: ["Production Management", "Quality Control", "Maintenance"],
            Marketing: ["Brand Management", "Market Research", "Public Relations"],
            Media: ["Journalism", "Broadcasting", "Content Creation"],
            RealEstate: ["Residential Sales", "Commercial Leasing", "Property Management"],
            Retail: ["Store Management", "Sales Assistance", "Merchandising"],
            Sales: ["B2B Sales", "B2C Sales", "Sales Strategy"],
            Science: ["Research", "Laboratory Work", "Field Studies"],
            Technology: ["Software Engineering", "Data Analysis", "Technical Support"],
            Transportation: ["Logistics Coordination", "Fleet Management", "Public Transport"],
            Other: ["Miscellaneous"]
        };

        document.getElementById('job_category').addEventListener('change', function() {
            const category = this.value;
            const subcategorySelect = document.getElementById('job_subcategory');
            subcategorySelect.innerHTML = '<option value="" disabled selected>Select a subcategory</option>';

            if (jobSubcategories[category]) {
                jobSubcategories[category].forEach(function(subcategory) {
                    const option = document.createElement('option');
                    option.value = subcategory;
                    option.textContent = subcategory;
                    subcategorySelect.appendChild(option);
                });
            }
        });
    </script>
@endsection
