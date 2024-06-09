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
                                    maxlength="100" class="form-control text-3 h-auto py-2" name="full_name">
                                @error('full_name')
                                    <span class="text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Email Address</label>
                                <input type="email" value="" data-msg-required="Please enter your email address."
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
                                    <option value="" disabled selected>Select your country</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Brunei">Brunei</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cabo Verde">Cabo Verde</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo (Congo-Brazzaville)">Congo (Congo-Brazzaville)</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czechia (Czech Republic)">Czechia (Czech Republic)</option>
                                    <option value="Democratic Republic of the Congo">Democratic Republic of the Congo
                                    </option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Eswatini (fmr. "Swaziland")">Eswatini (fmr. "Swaziland")</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia">Micronesia</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar (formerly Burma)">Myanmar (formerly Burma)</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="North Korea">North Korea</option>
                                    <option value="North Macedonia">North Macedonia</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestine State">Palestine State</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines
                                    </option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Korea">South Korea</option>
                                    <option value="South Sudan">South Sudan</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-Leste">Timor-Leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States of America">United States of America</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Nationality</label>
                                <input type="text" value="" data-msg-required="Please enter your Nationality."
                                    maxlength="100" class="form-control text-3 h-auto py-2" name="nationality" required>
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
                                    maxlength="100" class="form-control text-3 h-auto py-2" name="subscription_amount"
                                    min="0" >
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
                                    data-msg-required="Please enter the number of seminars." maxlength="100"
                                    class="form-control text-3 h-auto py-2" name="seminar_count" >
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
