<style>
.form-contacts-wrap input,
.form-contacts-wrap select {
    background: #fff;

    border: 1px solid transparent;
    outline: none;
    font-size: 20px;
    line-height: 120%;
    font-weight: 400;
    height: 56px;
    box-shadow: none;
    box-sizing: border-box;
    width: 100%;
    border-radius: 12px;
}

.form-contacts-wrap input:focus,
.form-contacts-wrap select:focus {
    outline: none;
}

@media screen and (max-width: 1599px) {

    .form-contacts-wrap input,
    .form-contacts-wrap select {
        height: 44px;
        font-size: 16px;
        border-radius: 8px;
        margin-bottom: 20px;
    }
}
</style>
<section>
    <div class="container">
        <div class="main-first">
            <div class="row">
                <div class="col-md-6">
                    <div class="">
                        <h2>Hello from google eninrac</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit aliquid laudantium placeat
                            exercitationem vero at totam commodi sapiente fuga omnis.
                        </p>
                        <a href="" class="btn btn-dark">Contact</a>
                    </div>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </div>
</section>

<section class="_light-grey-bg space">
    <div class="fullwidth">
        <div class="container">
            <div class="">
                <div class="row">
                    <div class="col-md-5">
                        <div class="">
                            <h2>Connect with us</h2>
                            <br>
                            <p>eninrac consulting has been consistently combining high aspirations and unique
                                perspectives to enable client’s with difference margin”</p>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">Mail us at</th>
                                        <td><a class="c-white" href="mailto:connect@eninrac.com">connect@eninrac.com</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Contact us at</th>
                                        <td><a class="c-white" href="tel:+917290016953">(+91) 7290016953</a>,<br><a
                                                class="c-white" href="tel:+919319048963">(+91) 9319048963</a>, <a
                                                class="c-white" href="tel:+919319047963">(+91) 9319047963</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Address: Delhi</th>
                                        <td>Delhi - 5th floor, Caddie Commercial Tower, Aerocity (DIAL), New Delhi -
                                            110037</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Address: Noida</th>
                                        <td>Eninrac Consulting Private Limited, 2nd Floor, B-130, B-Block, Sector 65,
                                            Noida - 201301, Uttar Pradesh</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Address: Mumbai</th>
                                        <td>4th floor, Juhu Tara Road, Next to JW Marriot, Juhu, Mumbai, 400049, India
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h2 class="text-center">get in touch with us</h2>
                        <br>
                        <form class="form form-contacts-wrap" action="https://eninrac.com/submit/contact" method="post">
                            <div class="row row-gap-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="fname">First Name*</label>
                                        <input class="form-control eninForm" type="text" name="fname" id="fname"
                                            placeholder="First Name">
                                        <span class="error"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="lname">Last Name*</label>
                                        <input class="form-control eninForm" type="text" name="lname" id="lname"
                                            placeholder="Last Name">
                                        <span class="error"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="bemail">Business Email*</label>
                                        <input class="form-control eninForm" type="email" name="bemail" id="bemail"
                                            placeholder="Business Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="country">Country*</label>
                                        <select name="country" class="form-control" id="country">
                                            <option value="">Select...</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                        </select>
                                        <span class="error"></span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="country">Country code*</label>
                                        <select name="countryCode" class="form-control eninForm" id="countryCode">
                                            <option data-countrycode="IN" value="91" selected="">India (+91)</option>
                                            <option data-countrycode="GB" value="44">UK (+44)</option>
                                            <option data-countrycode="US" value="1">USA (+1)</option>

                                        </select>
                                        <span class="error"></span>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="telephone">Telephone*</label>
                                        <input type="tel" name="telephone" id="telephone" class="form-control eninForm"
                                            placeholder="Telephone">
                                        <span class="error"></span>
                                        <input type="hidden" name="contact" value="contact">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="jobtitle">Job Title*</label>
                                        <input class="form-control eninForm" type="text" name="jobtitle" id="jobtitle"
                                            placeholder="Job Title">
                                        <span class="error"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="cname">Company Name*</label>
                                        <input class="form-control eninForm" type="text" name="cname" id="cname"
                                            placeholder="Company Name">
                                        <span class="error"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="industry">Industry of interest*</label>
                                        <select id="industry" name="industry" class="form-control eninForm">
                                            <option value="">Select...</option>
                                            <option value="Agribusiness">Agribusiness</option>
                                            <option value="Autos">Autos</option>

                                        </select>
                                        <span class="error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="researcRequirements">Please let us know your research requirements</label>
                                <textarea class="form-control eninForm" name="researcRequirements"
                                    id="researcRequirements" rows="4"></textarea>
                                <!-- <input class="form-control eninForm" type="text" name="researcRequirements" id="researcRequirements"> -->
                                <span class="error"></span>
                            </div>
                            <div class="form-check">
                                <span class="error"></span>
                                <input type="checkbox" class="form-check-input" id="pp">
                                <label class="form-check-label" for="pp">I have read and understood our <a
                                        href="https://eninrac.com/login">Privacy Policy</a> and <a
                                        href="https://eninrac.com/login">Terms of Use </a>*</label>
                            </div>
                            <input class="sign-btn mt-3 ml-0 w-50" type="submit" value="contact us" name="" id=""
                                style="background-color: rgb(20, 33, 70);color:white !important;">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>