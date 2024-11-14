<form action="{{ route('search.car') }}" method="POST">
    <div class="filtered--options mt_30" data-aos="fade-zoom-in" data-aos-duration="400" data-aos-delay="200"
        data-aos-offset="0">
        <p>Filters:</p>

        <!-- year--select  -->
        @csrf
        <select class="year--select" name="year">
            <option selected disabled>Year</option>
            <option value="2024">2024</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2012">2012</option>
        </select>
        <!-- Car Brand select  -->
        <select class="brand--select">
            <option selected disabled>Car Brand</option>
            <option>Audi</option>
            <option>BMW</option>
            <option>Chevrolet</option>
            <option>Ford</option>
            <option>Honda</option>
            <option>Hyundai</option>
            <option>Mercedes-Benz</option>
            <option>Nissan</option>
            <option>Toyota</option>
            <option>Volkswagen</option>
        </select>
        <!-- car model select  -->
        <input type="text" name="model">
        <!-- price-range--select  -->
        <select class="price-range--select" name="price_range">
            <option selected disabled>Price Range</option>
            <option value="below10">Below $10,000</option>

            <option value="10to20">$10,000 - $20,000</option>
            <option value="20to30">$20,000 - $30,000</option>
            <option value="30to40">$30,000 - $40,000</option>
            <option value="40to50">$40,000 - $50,000</option>
            <option value="above50">Above $50,000</option>

        </select>
        <button type="submit">search</button>
</form>
