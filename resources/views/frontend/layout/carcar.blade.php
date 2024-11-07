<form action="{{ route('card.store') }}" method="POST" class="needs-validation" novalidate>
    @csrf
    <h4>Credit Card Information</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="input--group">
                <label for="cardholder_name">Card Holder Name</label>
                <input type="text" class="form-control" id="cardholder_name" name="cardholder_name"
                    placeholder="Enter your card name" required />
                <div class="invalid-feedback">
                    Please enter your name.
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="input--group">
                <label for="card_number">Card Number</label>
                <input type="number" class="form-control" id="card_number" name="card_number"
                    placeholder="Enter your card name" required />
                <div class="invalid-feedback">
                    Please enter your card number.
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="input--group">
                <label for="expiration">Expiration</label>
                <input type="date" id="expiration" class="form-control" name="expiration_date" placeholder="MM/YY"
                    required />
                <div class="invalid-feedback">
                    Please enter the expiration date.
                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="input--group">
                <label for="cvv">CVV</label>
                <input type="number" class="form-control" id="cvv" name="cvv" placeholder="CVV" required />
                <div class="invalid-feedback">Please enter your CVC.</div>
            </div>
        </div>





        <div class="col-md-6">
            <div class="input--group">
                <label for="billing_address">Billing Address</label>
                <input type="text" class="form-control" id="billing_address" name="billing_address"
                    placeholder="Enter your billing address" required />
                <div class="invalid-feedback">
                    Please write your address.
                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="input--group">
                <label for="phone_number">Phone</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number"
                    placeholder="Enter your phone number" required />
                <div class="invalid-feedback">
                    Please give your number.
                </div>
            </div>
        </div>



        <div class="col-12">

            <button type="submit" class="button w-100 mt_45">
                Register to Bid
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16"
                    fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.707159 7.17715C0.307804 7.23213 0 7.57953 0 7.99989C0 8.45846 0.366312 8.83021 0.818182 8.83021L15.1999 8.83021L10.0047 14.0813L9.92528 14.1743C9.68696 14.4989 9.71243 14.9602 10.0023 15.2556C10.3212 15.5805 10.8392 15.5816 11.1594 15.258L17.7477 8.59955C17.787 8.56142 17.8224 8.51937 17.8536 8.47401C18.0766 8.14976 18.0452 7.69994 17.7593 7.41106L11.1593 0.741932L11.0674 0.661737C10.7466 0.421253 10.2921 0.449045 10.0023 0.744461C9.68342 1.06942 9.68454 1.59515 10.0047 1.91871L15.2012 7.16957L0.818182 7.16957L0.707159 7.17715Z"
                        fill="white" />
                </svg>
            </button>
        </div>
    </div>
</form>
