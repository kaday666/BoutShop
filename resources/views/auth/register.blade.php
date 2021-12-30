@extends('layouts.user')
@section('content')
    <section class="register">
        <form action="#" class="form register__form">
            <div class="form__name">
                <label for="email">Full Name</label>
                 <input type="email" name="name" >
             </div>
             <div class="form__phone">
                <label for="email">Phone Number</label>
                 <input type="email" name="phone" >
             </div>
            <div class="form__email">
               <label for="email">Email</label>
                <input type="email" name="email" >
            </div>
            <div class="form__password">
               <label for="password">Password</label>
                <input type="password" name="password" >
            </div>
            <div class="form__township">
                <label for="password">Township</label>
                 <select name="township" >
                    <option value="Ahlone">Ahlone</option>
                    <option value="Bahan">Bahan</option>
                    <option value="DagonDowntown">DagonDowntown</option>
                    <option value="Dawbon">Dawbon</option>
                    <option value="Hlaing">Hlaing</option>
                    <option value="Hlaingthaya">Hlaingthaya</option>
                    <option value="Insein">Insein</option>
                    <option value="Kamayut">Kamayut</option>
                    <option value="Kyauktada">Kyauktada</option>
                    <option value="Lanmadaw">Lanmadaw</option>
                    <option value="Mayangone9milePyay">Mayangone 9 mile Pyay</option>
                    <option value="MayangoneKabaraye">Mayangone Kabaraye</option>
                    <option value="MayangoneKyaikWaing">Mayangone Kyaik Waing</option>
                    <option value="MayangoneParami">Mayangone Parami</option>
                    <option value="MayangoneThamine">Mayangone Thamine</option>
                    <option value="Mhawbi">Mhawbi</option>
                    <option value="Mingaladone">Mingaladone</option>
                    <option value="Mingalartaungnyunt">Mingalartaungnyunt</option>
                    <option value="NorthOkkalapa">NorthOkkalapa</option>
                    <option value="Pabedan">Pabedan</option>
                    <option value="Pazundaung">Pazundaung</option>
                    <option value="Sanchaung">Sanchaung</option>
                    <option value="Shwepyitha">Shwepyitha</option>
                    <option value="SouthOkkalapa">South Okkalapa</option>
                    <option value="Tamwe">Tamwe</option>
                    <option value="Thaketa">Thaketa</option>
                    <option value="Thanlyin">Thanlyin</option>
                    <option value="Thingangkuun">Thingangkuun</option>
                    <option value="Yankin">Yankin</option>
                    

                    
                 </select>
            </div>
            <div class="form__address">
                <label for="password">Adress</label>
                 <input type="text" name="adress" 
                 placeholder="For Example:House#123,Street #123">
            </div>
            <div class="register__form__rule">
                <ul class="register__form__rule-list">
                    <li><span>></span><p>Our services currently only available in 
                        <span>Yangon city.</p></span>
                    </li>
                    <li><span>></span><p>Password must be aleast 8 character</li>
                    <li><span>></span><p>We consider that you accept our
                        <a href="#">terms and condition</a> by registering</p>
                    </li>

                </ul>
            </div>
            <button class="register__form__btn">
               register
            </button>
        </form>
    </section>
@endsection