<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Sign Up</title>
    <!-- ==== Favicon ==== -->
    <link rel="icon" type="image/png" href="assets/images/logo-sm.svg" />
    <!-- ==== All Css Links ==== -->
    @include('frontend.partial.style')
</head>

<body>
    @include('frontend.partial.header')
    <br><br><br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Write Review</h4>
            </div>
            <div class="card-body">

                <form action="{{ route('write_review.store') }}" method="POST" class="needs-validation" novalidate>
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input--group">
                                <label for="review">Write Review</label>
                                <textarea class="form-control" id="review" name="review" placeholder="Please write review here" required></textarea>
                                <div class="invalid-feedback">
                                    Please write review
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input--group">
                                <label for="star">**STAR**</label>
                                <select required name="star">
                                    <option value="5.00" selected>5</option>
                                    <option value="4.00">4</option>
                                    <option value="3.00">3</option>
                                    <option value="2.00">2</option>
                                    <option value="1.00">1</option>

                                </select>
                                <div class="invalid-feedback">
                                    Please give star out of 5
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-12">

                        <button type="submit" class="button w-100 mt_45">
                            Post Your Review
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.707159 7.17715C0.307804 7.23213 0 7.57953 0 7.99989C0 8.45846 0.366312 8.83021 0.818182 8.83021L15.1999 8.83021L10.0047 14.0813L9.92528 14.1743C9.68696 14.4989 9.71243 14.9602 10.0023 15.2556C10.3212 15.5805 10.8392 15.5816 11.1594 15.258L17.7477 8.59955C17.787 8.56142 17.8224 8.51937 17.8536 8.47401C18.0766 8.14976 18.0452 7.69994 17.7593 7.41106L11.1593 0.741932L11.0674 0.661737C10.7466 0.421253 10.2921 0.449045 10.0023 0.744461C9.68342 1.06942 9.68454 1.59515 10.0047 1.91871L15.2012 7.16957L0.818182 7.16957L0.707159 7.17715Z"
                                    fill="white" />
                            </svg>
                        </button>
                    </div>

                </form>
            </div>
        </div>

    </div>


    @include('frontend.partial.js')
</body>

</html>
