@extends('frontend.layouts.app')

@section('content')
<main class="no-main">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="ps-breadcrumb__list">
                <li class="active"><a href="{{ route('home') }}">{{__('Home')}}</a></li>
                <li><a href="{{ route('affiliate.apply') }}">{{__('Vendor Registration')}}</a></li>
            </ul>
        </div>
    </div>

<section class="section--registration">
    <div class="container">
        <h2 class="page__title">Vendor Registration</h2>
        <p class="page__subtitle">Get started by just filling out one simple form</p>
        <form method="post" action="">
            <div class="registration__content">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="registration__info">
                            <h3 class="registration__title">Account Information</h3>
                            <form action="{{ route('affiliate.store_affiliate_user') }}" method="POST" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="col-12 col-lg-6 form-group--block">
                                        <label>First name: <span>*</span></label>
                                        <input class="form-control" type="text" required>
                                    </div>
                                    <div class="col-12 col-lg-6 form-group--block">
                                        <label>Last name<span>*</span></label>
                                        <input class="form-control is-invalid" type="text" required>
                                        <div class="invalid-feedback">Please enter last name!</div>
                                    </div>
                                    <div class="col-12 col-lg-6 form-group--block">
                                        <label>Phone: <span>*</span></label>
                                        <input class="form-control" type="number" required>
                                    </div>
                                    <div class="col-12 col-lg-6 form-group--block">
                                        <label>Email: <span>*</span></label>
                                        <input class="form-control" type="email" required>
                                    </div>
                                    <div class="col-12 col-lg-6 form-group--block">
                                        <label>Date Of Birth:</label>
                                        <input class="form-control" type="date">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group--block">
                                        <label>Citizenship/Passport No: <span>*</span></label>
                                        <input class="form-control" type="text" required="required">
                                    </div>
                                    <div class="col-12 col-lg-6  form-group--block">
                                    <label>Your Province: <span>*</span></label>
                                    <select name="province" class="single-select2" required="required">
                                        <option value="0">--Select Province--</option>
                                        <option value="1">प्रदेश १</option>
                                        <option value="2">प्रदेश २</option>
                                        <option value="3">बागमती प्रदेश</option>
                                        <option value="4">गण्डकी प्रदेश</option>
                                        <option value="5">लुम्बिनी प्रदेश</option>
                                        <option value="6">कर्णाली प्रदेश</option>
                                        <option value="7">सुदूरपश्चिम प्रदेश</option>
                                    </select>
                                </div>
                                <div class="col-12 col-lg-6 form-group--block">
                                    <label>Your District: <span>*</span></label>
                                    <select name="district" class="single-select2" required="required">
                                        <option value="0">--Select District--</option>
                                        <option value="1">Taplejung</option>
                                        <option value="2">Panchthar</option>
                                        <option value="3">Ilam</option>
                                        <option value="4">Jhapa</option>
                                        <option value="5">Morang</option>
                                        <option value="6">Sunsari</option>
                                        <option value="7">Dhankuta</option>
                                        <option value="8">Terhathum</option>
                                        <option value="9">Bhojpur</option>
                                        <option value="10">Shankhuwasabha</option>
                                        <option value="11">Solukhumbu</option>
                                        <option value="12">Khotang</option>
                                        <option value="13">Okhaldhunga</option>
                                        <option value="14">Udayapur</option>
                                        <option value="15">Siraha</option>
                                        <option value="16">Saptari</option>
                                        <option value="17">Dhanusha</option>
                                        <option value="18">Mahottari</option>
                                        <option value="19">Sarlahi</option>
                                        <option value="20">Sindhuli</option>
                                        <option value="21">Ramechhap</option>
                                        <option value="22">Dolakha</option>
                                        <option value="23">Rasuwa</option>
                                        <option value="24">Sindhupalchowk</option>
                                        <option value="25">Nuwakot</option>
                                        <option value="26">Dhading</option>
                                        <option value="27">Kathmandu</option>
                                        <option value="28">Lalitpur</option>
                                        <option value="29">Bhaktapur</option>
                                        <option value="30">Kavrepalanchowk</option>
                                        <option value="31">Makawanpur</option>
                                        <option value="32">Rautahat</option>
                                        <option value="33">Bara</option>
                                        <option value="34">Parsa</option>
                                        <option value="35">Chitawan</option>
                                        <option value="36">Nawalparasi</option>
                                        <option value="37">Rupandehi</option>
                                        <option value="38">Kapilbastu</option>
                                        <option value="39">Palpa</option>
                                        <option value="40">Arghakhanchi</option>
                                        <option value="41">Gulmi</option>
                                        <option value="42">Shyanja</option>
                                        <option value="43">Tanahu</option>
                                        <option value="44">Gorkha</option>
                                        <option value="45">Lamjung</option>
                                        <option value="46">Kaski</option>
                                        <option value="47">Manang</option>
                                        <option value="48">Mustang</option>
                                        <option value="49">Myagdi</option>
                                        <option value="50">Baglung</option>
                                        <option value="51">Parbat</option>
                                        <option value="52">Dang</option>
                                        <option value="53">Pyuthan</option>
                                        <option value="54">Rolpa</option>
                                        <option value="55">Salyan</option>
                                        <option value="56">Rukum</option>
                                        <option value="57">Dolpa</option>
                                        <option value="58">Mugu</option>
                                        <option value="59">Humla</option>
                                        <option value="60">Jumla</option>
                                        <option value="61">Kalikot</option>
                                        <option value="62">Jajarkot</option>
                                        <option value="63">Dailekh</option>
                                        <option value="64">Surkhet</option>
                                        <option value="65">Bardiya</option>
                                        <option value="66">Banke</option>
                                        <option value="67">Kailali</option>
                                        <option value="68">Doti</option>
                                        <option value="69">Achhaam</option>
                                        <option value="70">Bajura</option>
                                        <option value="71">Bajhang</option>
                                        <option value="72">Darchula</option>
                                        <option value="73">Baitadi</option>
                                        <option value="74">Dadeldhura</option>
                                        <option value="75">Kanchanpur</option>
                                        <option value="76">None</option>
                                        <option value="481">Nawalparasi (Bardghat Susta East)</option>
                                        <option value="482">Nawalparasi (Bardghat Susta West)</option>
                                        <option value="541">Rukum East</option>
                                        <option value="542">Rukum West</option>
                                    </select>
                                </div>
                                <div class="col-12 col-lg-8  form-group--block">
                                        <label>Your Province: </label>
                                        <select name="all_municipality" class="single-select2">
                                        <option value="">All municipalities</option>
                                        <option value="Bhojpur Municipality">Bhojpur Municipality</option>
                                        <option value="Shadananda Municipality">Shadananda Municipality</option>
                                        <option value="Dhankuta Municipality">Dhankuta Municipality</option>
                                        <option value="Mahalaxmi Municipality">Mahalaxmi Municipality</option>
                                        <option value="Pakhribas Municipality">Pakhribas Municipality</option>
                                        <option value="Deumai Municipality">Deumai Municipality</option>
                                        <option value="Ilam Municipality">Ilam Municipality</option>
                                        <option value="Mai Municipality">Mai Municipality</option>
                                        <option value="Suryodaya Municipality">Suryodaya Municipality</option>
                                        <option value="Arjundhara Municipality">Arjundhara Municipality</option>
                                        <option value="Bhadrapur Municipality">Bhadrapur Municipality</option>
                                        <option value="Birtamod Municipality">Birtamod Municipality</option>
                                        <option value="Damak Municipality">Damak Municipality</option>
                                        <option value="Gauradaha Municipality">Gauradaha Municipality</option>
                                        <option value="Kankai Municipality">Kankai Municipality</option>
                                        <option value="Mechinagar Municipality">Mechinagar Municipality</option>
                                        <option value="Shivasatakshi municipality">Shivasatakshi municipality</option>
                                        <option value="Diktel Rupakot Majhuwagadhi Municipality">Diktel Rupakot Majhuwagadhi Municipality</option>
                                        <option value="Halesi Tuwachung Municipality">Halesi Tuwachung Municipality</option>
                                        <option value="Belbari Municipality">Belbari Municipality</option>
                                        <option value="Biratnagar Municipality">Biratnagar Municipality</option>
                                        <option value="Budhiganga Rural Municipality">Budhiganga Rural Municipality</option>
                                        <option value="Letang Municipality">Letang Municipality</option>
                                        <option value="Pathari Shanishchare Manicipality">Pathari Shanishchare Manicipality</option>
                                        <option value="Rangeli Municipality">Rangeli Municipality</option>
                                        <option value="Ratuwamai Municipality">Ratuwamai Municipality</option>
                                        <option value="Sundar Haraicha Municipality">Sundar Haraicha Municipality</option>
                                        <option value="Sunawarshi Municipality">Sunawarshi Municipality</option>
                                        <option value="Urlabari Municipality">Urlabari Municipality</option>
                                        <option value="Siddhicharan Municipality">Siddhicharan Municipality</option>
                                        <option value="Phidim Municipality">Phidim Municipality</option>
                                        <option value="Chainpur Municipality">Chainpur Municipality</option>
                                        <option value="Dharmadevi Municipality">Dharmadevi Municipality</option>
                                        <option value="Khandbari Municipality">Khandbari Municipality</option>
                                        <option value="Madi Municipality">Madi Municipality</option>
                                        <option value="Panchkhapan Municipality">Panchkhapan Municipality</option>
                                        <option value="Solududhkunda Municipality">Solududhkunda Municipality</option>
                                        <option value="Barahachhetra Municipality">Barahachhetra Municipality</option>
                                        <option value="Dharan Sub-Metropolitan City">Dharan Sub-Metropolitan City</option>
                                        <option value="Duhabi Municipality">Duhabi Municipality</option>
                                        <option value="Inaruwa Municipality">Inaruwa Municipality</option>
                                        <option value="Itahari Sub-Metropolitan City">Itahari Sub-Metropolitan City</option>
                                        <option value="Ramdhuni Municipality">Ramdhuni Municipality</option>
                                        <option value="Phungling Municipality">Phungling Municipality</option>
                                        <option value="Laligurans Municipality">Laligurans Municipality</option>
                                        <option value="Myanglung Municipality">Myanglung Municipality</option>
                                        <option value="Belaka Municipality">Belaka Municipality</option>
                                        <option value="Chaudandigadhi Municipality">Chaudandigadhi Municipality</option>
                                        <option value="Katari Municipality">Katari Municipality</option>
                                        <option value="Triyuga Municipality">Triyuga Municipality</option>
                                        <option value="Jeetpursimara Sub-Metropolitan">Jeetpursimara Sub-Metropolitan</option>
                                        <option value="Kalaiya Sub-Metropolitan">Kalaiya Sub-Metropolitan</option>
                                        <option value="Kolhabi Municipality">Kolhabi Municipality</option>
                                        <option value="Mahagadhimai Municipality">Mahagadhimai Municipality</option>
                                        <option value="Nijgadh Municipality">Nijgadh Municipality</option>
                                        <option value="Pacharauta Municipality">Pacharauta Municipality</option>
                                        <option value="Simraungadh Municipality">Simraungadh Municipality</option>
                                        <option value="Dhanusadham Municipality">Dhanusadham Municipality</option>
                                        <option value="Ganeshman Charnath Municipality">Ganeshman Charnath Municipality</option>
                                        <option value="Hansapur Municipality">Hansapur Municipality</option>
                                        <option value="Janakpurdham Sub-Metropolitan City">Janakpurdham Sub-Metropolitan City</option>
                                        <option value="Kamala Municipality">Kamala Municipality</option>
                                        <option value="Mithila Bihari Municipality">Mithila Bihari Municipality</option>
                                        <option value="Mithila Municipality">Mithila Municipality</option>
                                        <option value="Nagarain Municipality">Nagarain Municipality</option>
                                        <option value="Sabaila Municipality">Sabaila Municipality</option>
                                        <option value="Shahidnagar Municipality">Shahidnagar Municipality</option>
                                        <option value="Aurahi Municipality">Aurahi Municipality</option>
                                        <option value="Balawa Municipality">Balawa Municipality</option>
                                        <option value="Bardibas Municipality">Bardibas Municipality</option>
                                        <option value="Bhangaha Municipality">Bhangaha Municipality</option>
                                        <option value="Gaushala Municipality">Gaushala Municipality</option>
                                        <option value="Jaleshwor Municipality">Jaleshwor Municipality</option>
                                        <option value="Loharpatti Municipality">Loharpatti Municipality</option>
                                        <option value="Manara Sishwa Municipality">Manara Sishwa Municipality</option>
                                        <option value="Matihani Municipality">Matihani Municipality</option>
                                        <option value="Ramgopalpur Municipality">Ramgopalpur Municipality</option>
                                        <option value="Birgunj Metropolitan City">Birgunj Metropolitan City</option>
                                        <option value="Parsagadhi Municipality">Parsagadhi Municipality</option>
                                        <option value="Pokhariya Municipality">Pokhariya Municipality</option>
                                        <option value="Baudhimai Municipality">Baudhimai Municipality</option>
                                        <option value="Brindawan Municipality">Brindawan Municipality</option>
                                        <option value="Chandrapur Municipality">Chandrapur Municipality</option>
                                        <option value="Dewahi Gonahi Municipality">Dewahi Gonahi Municipality</option>
                                        <option value="Fatuwabijayapur Municipality">Fatuwabijayapur Municipality</option>
                                        <option value="Gadhimai Municipality">Gadhimai Municipality</option>
                                        <option value="Garuda Municipality">Garuda Municipality</option>
                                        <option value="Gaur Municipality">Gaur Municipality</option>
                                        <option value="Gujara Municipality">Gujara Municipality</option>
                                        <option value="Ishnath Municipality">Ishnath Municipality</option>
                                        <option value="Katahariya Municipality">Katahariya Municipality</option>
                                        <option value="Madhav Narayan Municipality">Madhav Narayan Municipality</option>
                                        <option value="Maulapur Municipality">Maulapur Municipality</option>
                                        <option value="Paroha Municipality">Paroha Municipality</option>
                                        <option value="Rajdevi Municipality">Rajdevi Municipality</option>
                                        <option value="Rajpur Municipality">Rajpur Municipality</option>
                                        <option value="Bodebarsaien Municipality">Bodebarsaien Municipality</option>
                                        <option value="Dakneshwori Municipality">Dakneshwori Municipality</option>
                                        <option value="Hanumannagar Municipality">Hanumannagar Municipality</option>
                                        <option value="Kanchanrup Municipality">Kanchanrup Municipality</option>
                                        <option value="Khadak Municipality">Khadak Municipality</option>
                                        <option value="Rajbiraj Municipality">Rajbiraj Municipality</option>
                                        <option value="Saptakoshi Municipality">Saptakoshi Municipality</option>
                                        <option value="Shambhunath Municipality">Shambhunath Municipality</option>
                                        <option value="Surunga Municipality">Surunga Municipality</option>
                                        <option value="Bagmati Municipality">Bagmati Municipality</option>
                                        <option value="Balara Municipality">Balara Municipality</option>
                                        <option value="Godaita Municipality">Godaita Municipality</option>
                                        <option value="Haripur Municipality">Haripur Municipality</option>
                                        <option value="Haripurwa Municipality">Haripurwa Municipality</option>
                                        <option value="Hariwan Municipality">Hariwan Municipality</option>
                                        <option value="Ishworpur Municipality">Ishworpur Municipality</option>
                                        <option value="Kabilasi Municipality">Kabilasi Municipality</option>
                                        <option value="Lalbandi Municipality">Lalbandi Municipality</option>
                                        <option value="Malangawa Municipality">Malangawa Municipality</option>
                                        <option value="Dhangadhimai Municipality">Dhangadhimai Municipality</option>
                                        <option value="Golbazar Municipality">Golbazar Municipality</option>
                                        <option value="Kalyanpur Municipality">Kalyanpur Municipality</option>
                                        <option value="Karjanha Municipality">Karjanha Municipality</option>
                                        <option value="Lahan Municipality">Lahan Municipality</option>
                                        <option value="Mirchaiya Municipality">Mirchaiya Municipality</option>
                                        <option value="Siraha Municipality">Siraha Municipality</option>
                                        <option value="Sukhipur Municipality">Sukhipur Municipality</option>
                                        <option value="Bhaktapur Municipality">Bhaktapur Municipality</option>
                                        <option value="Changunarayan Municipality">Changunarayan Municipality</option>
                                        <option value="Madhyapur Thimi Municipality">Madhyapur Thimi Municipality</option>
                                        <option value="Suryabinayak Municipality">Suryabinayak Municipality</option>
                                        <option value="Kalika Municipality">Kalika Municipality</option>
                                        <option value="Khairahani Municipality">Khairahani Municipality</option>
                                        <option value="Rapti Municipality">Rapti Municipality</option>
                                        <option value="Ratnanagar Municipality">Ratnanagar Municipality</option>
                                        <option value="Dhunibeshi Municipality">Dhunibeshi Municipality</option>
                                        <option value="Nilkantha Municipality">Nilkantha Municipality</option>
                                        <option value="Bhimeshwor Municipality">Bhimeshwor Municipality</option>
                                        <option value="Jiri Municipality">Jiri Municipality</option>
                                        <option value="Budhanilkantha Municipality">Budhanilkantha Municipality</option>
                                        <option value="Chandragiri Municipality">Chandragiri Municipality</option>
                                        <option class="sf-level-0 sf-option-active" selected="selected" value="Gokarneshwor Municipality">Gokarneshwor Municipality</option>
                                        <option value="Kageshwari Manohara Municipality">Kageshwari Manohara Municipality</option>
                                        <option value="Kathmandu Metropolitan City">Kathmandu Metropolitan City</option>
                                        <option value="Kirtipur Municipality">Kirtipur Municipality</option>
                                        <option value="Nagarjun Municipality">Nagarjun Municipality</option>
                                        <option value="Shankharapur Municipality">Shankharapur Municipality</option>
                                        <option value="Tarakeshwar Municipality">Tarakeshwar Municipality</option>
                                        <option value="Tokha Municipality">Tokha Municipality</option>
                                        <option value="Banepa Municipality">Banepa Municipality</option>
                                        <option value="Dhulikhel Municipality">Dhulikhel Municipality</option>
                                        <option value="Mandandeupur Municipality">Mandandeupur Municipality</option>
                                        <option value="Namobuddha Municipality">Namobuddha Municipality</option>
                                        <option value="Panauti Municipality">Panauti Municipality</option>
                                        <option value="Panchkhal Municipality">Panchkhal Municipality</option>
                                        <option value="Godawari Municipality">Godawari Municipality</option>
                                        <option value="Lalitpur Metropolitan City">Lalitpur Metropolitan City</option>
                                        <option value="Thaha Municipality">Thaha Municipality</option>
                                        <option value="Belkotgadhi Municipality">Belkotgadhi Municipality</option>
                                        <option value="Bidur Municipality">Bidur Municipality</option>
                                        <option value="Manthali Municipality">Manthali Municipality</option>
                                        <option value="Ramechhap Municipality">Ramechhap Municipality</option>
                                        <option value="Dudhouli Municipality">Dudhouli Municipality</option>
                                        <option value="Kamalamai Municipality">Kamalamai Municipality</option>
                                        <option value="Barhabise Municipality">Barhabise Municipality</option>
                                        <option value="Chautara Sangachokgadhi Municipality">Chautara Sangachokgadhi Municipality</option>
                                        <option value="Melamchi Municipality">Melamchi Municipality</option>
                                        <option value="Baglung Municipality">Baglung Municipality</option>
                                        <option value="Dhorpatan Municipality">Dhorpatan Municipality</option>
                                        <option value="Galkot Municipality">Galkot Municipality</option>
                                        <option value="Jaimuni Municipality">Jaimuni Municipality</option>
                                        <option value="Gorkha Municipality">Gorkha Municipality</option>
                                        <option value="Palungtar Municipality">Palungtar Municipality</option>
                                        <option value="Pokhara Metropolitan City">Pokhara Metropolitan City</option>
                                        <option value="Besishahar Municipality">Besishahar Municipality</option>
                                        <option value="MadhyaNepal Municipality">MadhyaNepal Municipality</option>
                                        <option value="Rainas Municipality">Rainas Municipality</option>
                                        <option value="Sundarbazar Municipality">Sundarbazar Municipality</option>
                                        <option value="Beni Municipality">Beni Municipality</option>
                                        <option value="Devachuli Municipality">Devachuli Municipality</option>
                                        <option value="Gaidakot Municipality">Gaidakot Municipality</option>
                                        <option value="Kawasoti Municipality">Kawasoti Municipality</option>
                                        <option value="Madhyabindu Municipality">Madhyabindu Municipality</option>
                                        <option value="Kushma Municipality">Kushma Municipality</option>
                                        <option value="Phalewas Municipality">Phalewas Municipality</option>
                                        <option value="Bhirkot Municipality">Bhirkot Municipality</option>
                                        <option value="Chapakot Municipality">Chapakot Municipality</option>
                                        <option value="Galyang Municipality">Galyang Municipality</option>
                                        <option value="Putalibazar Municipality">Putalibazar Municipality</option>
                                        <option value="Waling Municipality">Waling Municipality</option>
                                        <option value="Bhanu Municipality">Bhanu Municipality</option>
                                        <option value="Bhimad Municipality">Bhimad Municipality</option>
                                        <option value="Byas Municipality">Byas Municipality</option>
                                        <option value="Shuklagandaki Municipality">Shuklagandaki Municipality</option>
                                        <option value="Bhumikasthan Municipality">Bhumikasthan Municipality</option>
                                        <option value="Sandhikharka Municipality">Sandhikharka Municipality</option>
                                        <option value="Shitganga Municipality">Shitganga Municipality</option>
                                        <option value="Kohalpur Municipality">Kohalpur Municipality</option>
                                        <option value="Nepalganj Sub-Metropolitan City">Nepalganj Sub-Metropolitan City</option>
                                        <option value="Bansgadhi Municipality">Bansgadhi Municipality</option>
                                        <option value="Barbardiya Municipality">Barbardiya Municipality</option>
                                        <option value="Gulariya Municipality">Gulariya Municipality</option>
                                        <option value="Madhuwan Municipality">Madhuwan Municipality</option>
                                        <option value="Rajapur Municipality">Rajapur Municipality</option>
                                        <option value="Thakur Baba Municipality">Thakur Baba Municipality</option>
                                        <option value="Ghorahi Sub-Metropolitan City">Ghorahi Sub-Metropolitan City</option>
                                        <option value="Lamahi Municipality">Lamahi Municipality</option>
                                        <option value="Tulsipur Sub-Metropolitan City">Tulsipur Sub-Metropolitan City</option>
                                        <option value="Musikot Municipality">Musikot Municipality</option>
                                        <option value="Resunga Municipality">Resunga Municipality</option>
                                        <option value="Banaganga Municipality">Banaganga Municipality</option>
                                        <option value="Buddhabhumi Municipality">Buddhabhumi Municipality</option>
                                        <option value="Kapilvastu Municipality">Kapilvastu Municipality</option>
                                        <option value="Krishnanagar Municipality">Krishnanagar Municipality</option>
                                        <option value="Maharajganj Municipality">Maharajganj Municipality</option>
                                        <option value="Shivaraj Municipality">Shivaraj Municipality</option>
                                        <option value="Bardaghat Municipality">Bardaghat Municipality</option>
                                        <option value="Ramgram Municipality">Ramgram Municipality</option>
                                        <option value="Sunwal Municipality">Sunwal Municipality</option>
                                        <option value="Rampur Municipality">Rampur Municipality</option>
                                        <option value="Tansen Municipality">Tansen Municipality</option>
                                        <option value="Pyuthan Municipality">Pyuthan Municipality</option>
                                        <option value="Swargadwari Municipality">Swargadwari Municipality</option>
                                        <option value="Rolpa Municipality">Rolpa Municipality</option>
                                        <option value="Tribeni Rural Municipality">Tribeni Rural Municipality</option>
                                        <option value="Butwal Sub-Metropolitan City">Butwal Sub-Metropolitan City</option>
                                        <option value="Devdaha Municipality">Devdaha Municipality</option>
                                        <option value="Lumbini Sanskritik Municipality">Lumbini Sanskritik Municipality</option>
                                        <option value="Sainamaina Municipality">Sainamaina Municipality</option>
                                        <option value="Siddharthanagar Municipality">Siddharthanagar Municipality</option>
                                        <option value="Tilottama Municipality">Tilottama Municipality</option>
                                        <option value="Aathabis Municipality">Aathabis Municipality</option>
                                        <option value="Chamunda Bindrasaini Municipality">Chamunda Bindrasaini Municipality</option>
                                        <option value="Dullu Municipality">Dullu Municipality</option>
                                        <option value="Narayan Municipality">Narayan Municipality</option>
                                        <option value="Thuli Bheri Municipality">Thuli Bheri Municipality</option>
                                        <option value="Tripura Sundari Municipality">Tripura Sundari Municipality</option>
                                        <option value="Bheri Municipality">Bheri Municipality</option>
                                        <option value="Chhedagad Municipality">Chhedagad Municipality</option>
                                        <option value="Nalgad Municipality">Nalgad Municipality</option>
                                        <option value="Chandannath Municipality">Chandannath Municipality</option>
                                        <option value="Khandachakra Municipality">Khandachakra Municipality</option>
                                        <option value="Raskot Municipality">Raskot Municipality</option>
                                        <option value="Tilagufa Municipality">Tilagufa Municipality</option>
                                        <option value="Chhayanath Rara Municipality">Chhayanath Rara Municipality</option>
                                        <option value="Aathbiskot Municipality">Aathbiskot Municipality</option>
                                        <option value="Chaurjahari Municipality">Chaurjahari Municipality</option>
                                        <option value="Bagchaur Municipality">Bagchaur Municipality</option>
                                        <option value="Bangad kupinde Municipality">Bangad kupinde Municipality</option>
                                        <option value="Sharada Municipality">Sharada Municipality</option>
                                        <option value="Bheriganga Municipality">Bheriganga Municipality</option>
                                        <option value="Birendranagar Municipality">Birendranagar Municipality</option>
                                        <option value="Gurbhakot Municipality">Gurbhakot Municipality</option>
                                        <option value="Lekbeshi Municipality">Lekbeshi Municipality</option>
                                        <option value="Panchpuri Municipality">Panchpuri Municipality</option>
                                        <option value="Kamalbazar Municipality">Kamalbazar Municipality</option>
                                        <option value="Mangalsen Municipality">Mangalsen Municipality</option>
                                        <option value="Panchadewal Binayak Municipality">Panchadewal Binayak Municipality</option>
                                        <option value="Sanphebagar Municipality">Sanphebagar Municipality</option>
                                        <option value="Dasharathchanda Municipality">Dasharathchanda Municipality</option>
                                        <option value="Melauli Municipality">Melauli Municipality</option>
                                        <option value="Patan Municipality">Patan Municipality</option>
                                        <option value="Purchaudi Municipality">Purchaudi Municipality</option>
                                        <option value="Bungal Municipality">Bungal Municipality</option>
                                        <option value="JayaPrithivi Municipality">JayaPrithivi Municipality</option>
                                        <option value="Badimalika Municipality">Badimalika Municipality</option>
                                        <option value="Budhinanda Municipality">Budhinanda Municipality</option>
                                        <option value="Amargadhi Municipality">Amargadhi Municipality</option>
                                        <option value="Parasuram Municipality">Parasuram Municipality</option>
                                        <option value="Mahakali Municipality">Mahakali Municipality</option>
                                        <option value="Shailyashikhar Municipality">Shailyashikhar Municipality</option>
                                        <option value="Dipayal Silgadhi Municipality">Dipayal Silgadhi Municipality</option>
                                        <option value="Shikhar Municipality">Shikhar Municipality</option>
                                        <option value="Bhajani Municipality">Bhajani Municipality</option>
                                        <option value="Gauriganga Municipality">Gauriganga Municipality</option>
                                        <option value="Ghodaghodi Municipality">Ghodaghodi Municipality</option>
                                        <option value="Lamki Chuha Municipality">Lamki Chuha Municipality</option>
                                        <option value="Tikapur Municipality">Tikapur Municipality</option>
                                        <option value="Bedkot Municipality">Bedkot Municipality</option>
                                        <option value="Belauri Municipality">Belauri Municipality</option>
                                        <option value="Bhimdatta Municipality">Bhimdatta Municipality</option>
                                        <option value="Krishnapur Municipality">Krishnapur Municipality</option>
                                        <option value="Punarbas Municipality">Punarbas Municipality</option>
                                        <option value="Shuklaphanta Municipality">Shuklaphanta Municipality</option>
                                    </select>
                                </div>
                                    <div class="col-12 col-lg-4 form-group--block">
                                        <label>Zip Code:</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="col-12 col-lg-12 form-group--block">
                                        <label>Address 1: <span>*</span></label>
                                        <input class="form-control" type="text" required>
                                    </div>
                                    <div class="col-12 col-lg-12 form-group--block">
                                        <label>Address 2 <small>(Optional)</small>:</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group--block">
                                        <label>Password: <span>*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group--block">
                                        <label>Retype password: <span>*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group--block">
                                        <label>Upload Citizenship Front File:
                                            <span>*</span>
                                        </label>
                                         <div class="imageWrapper">
                                            <img class="image" src="http://via.placeholder.com/455x315">
                                          </div>
                                          <button class="file-upload">     <input type="file" class="file-input">Choose File
                                          </button>
                                    </div>
                                    <div class="col-12 col-lg-6 form-group--block">
                                        <label>Upload Citizenship Back File:
                                            <span>*</span>
                                        </label>
                                         <div class="imageWrapper">
                                            <img class="image" src="http://via.placeholder.com/455x315">
                                          </div>
                                          <button class="file-upload">     <input type="file" class="file-input">Choose File
                                          </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <h3 class="registration__title">Shop Information</h3>
                        <div class="registration__box">
                            <form>
                                <div class="form-row">
                                    <div class="col-12 form-group--block">
                                        <label>Shop Name: <span>*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Shop URL:</label>
                                        <input class="form-control" type="text">
                                        <div class="example">eg; http://bhandaribikash.com.np/Naulobazar/</div>
                                    </div>
                                <div class="col-12 col-lg-12  form-group--block">
                                    <label>Shop Located Province: </label>
                                    <select name="province" class="single-select2">
                                        <option value="0">--Select Province--</option>
                                        <option value="1">प्रदेश १</option>
                                        <option value="2">प्रदेश २</option>
                                        <option value="3">बागमती प्रदेश</option>
                                        <option value="4">गण्डकी प्रदेश</option>
                                        <option value="5">लुम्बिनी प्रदेश</option>
                                        <option value="6">कर्णाली प्रदेश</option>
                                        <option value="7">सुदूरपश्चिम प्रदेश</option>
                                    </select>
                                </div>
                                <div class="col-12 col-lg-12 form-group--block">
                                    <label>Shop Located District: </label>
                                    <select name="district" class="single-select2">
                                        <option value="0">--Select District--</option>
                                        <option value="1">Taplejung</option>
                                        <option value="2">Panchthar</option>
                                        <option value="3">Ilam</option>
                                        <option value="4">Jhapa</option>
                                        <option value="5">Morang</option>
                                        <option value="6">Sunsari</option>
                                        <option value="7">Dhankuta</option>
                                        <option value="8">Terhathum</option>
                                        <option value="9">Bhojpur</option>
                                        <option value="10">Shankhuwasabha</option>
                                        <option value="11">Solukhumbu</option>
                                        <option value="12">Khotang</option>
                                        <option value="13">Okhaldhunga</option>
                                        <option value="14">Udayapur</option>
                                        <option value="15">Siraha</option>
                                        <option value="16">Saptari</option>
                                        <option value="17">Dhanusha</option>
                                        <option value="18">Mahottari</option>
                                        <option value="19">Sarlahi</option>
                                        <option value="20">Sindhuli</option>
                                        <option value="21">Ramechhap</option>
                                        <option value="22">Dolakha</option>
                                        <option value="23">Rasuwa</option>
                                        <option value="24">Sindhupalchowk</option>
                                        <option value="25">Nuwakot</option>
                                        <option value="26">Dhading</option>
                                        <option value="27">Kathmandu</option>
                                        <option value="28">Lalitpur</option>
                                        <option value="29">Bhaktapur</option>
                                        <option value="30">Kavrepalanchowk</option>
                                        <option value="31">Makawanpur</option>
                                        <option value="32">Rautahat</option>
                                        <option value="33">Bara</option>
                                        <option value="34">Parsa</option>
                                        <option value="35">Chitawan</option>
                                        <option value="36">Nawalparasi</option>
                                        <option value="37">Rupandehi</option>
                                        <option value="38">Kapilbastu</option>
                                        <option value="39">Palpa</option>
                                        <option value="40">Arghakhanchi</option>
                                        <option value="41">Gulmi</option>
                                        <option value="42">Shyanja</option>
                                        <option value="43">Tanahu</option>
                                        <option value="44">Gorkha</option>
                                        <option value="45">Lamjung</option>
                                        <option value="46">Kaski</option>
                                        <option value="47">Manang</option>
                                        <option value="48">Mustang</option>
                                        <option value="49">Myagdi</option>
                                        <option value="50">Baglung</option>
                                        <option value="51">Parbat</option>
                                        <option value="52">Dang</option>
                                        <option value="53">Pyuthan</option>
                                        <option value="54">Rolpa</option>
                                        <option value="55">Salyan</option>
                                        <option value="56">Rukum</option>
                                        <option value="57">Dolpa</option>
                                        <option value="58">Mugu</option>
                                        <option value="59">Humla</option>
                                        <option value="60">Jumla</option>
                                        <option value="61">Kalikot</option>
                                        <option value="62">Jajarkot</option>
                                        <option value="63">Dailekh</option>
                                        <option value="64">Surkhet</option>
                                        <option value="65">Bardiya</option>
                                        <option value="66">Banke</option>
                                        <option value="67">Kailali</option>
                                        <option value="68">Doti</option>
                                        <option value="69">Achhaam</option>
                                        <option value="70">Bajura</option>
                                        <option value="71">Bajhang</option>
                                        <option value="72">Darchula</option>
                                        <option value="73">Baitadi</option>
                                        <option value="74">Dadeldhura</option>
                                        <option value="75">Kanchanpur</option>
                                        <option value="76">None</option>
                                        <option value="481">Nawalparasi (Bardghat Susta East)</option>
                                        <option value="482">Nawalparasi (Bardghat Susta West)</option>
                                        <option value="541">Rukum East</option>
                                        <option value="542">Rukum West</option>
                                    </select>
                                </div>
                                <div class="col-12 col-lg-12  form-group--block">
                                        <label>Shop Located Province: </label>
                                        <select name="all_municipality" class="single-select2">
                                        <option value="">All municipalities</option>
                                        <option value="Bhojpur Municipality">Bhojpur Municipality</option>
                                        <option value="Shadananda Municipality">Shadananda Municipality</option>
                                        <option value="Dhankuta Municipality">Dhankuta Municipality</option>
                                        <option value="Mahalaxmi Municipality">Mahalaxmi Municipality</option>
                                        <option value="Pakhribas Municipality">Pakhribas Municipality</option>
                                        <option value="Deumai Municipality">Deumai Municipality</option>
                                        <option value="Ilam Municipality">Ilam Municipality</option>
                                        <option value="Mai Municipality">Mai Municipality</option>
                                        <option value="Suryodaya Municipality">Suryodaya Municipality</option>
                                        <option value="Arjundhara Municipality">Arjundhara Municipality</option>
                                        <option value="Bhadrapur Municipality">Bhadrapur Municipality</option>
                                        <option value="Birtamod Municipality">Birtamod Municipality</option>
                                        <option value="Damak Municipality">Damak Municipality</option>
                                        <option value="Gauradaha Municipality">Gauradaha Municipality</option>
                                        <option value="Kankai Municipality">Kankai Municipality</option>
                                        <option value="Mechinagar Municipality">Mechinagar Municipality</option>
                                        <option value="Shivasatakshi municipality">Shivasatakshi municipality</option>
                                        <option value="Diktel Rupakot Majhuwagadhi Municipality">Diktel Rupakot Majhuwagadhi Municipality</option>
                                        <option value="Halesi Tuwachung Municipality">Halesi Tuwachung Municipality</option>
                                        <option value="Belbari Municipality">Belbari Municipality</option>
                                        <option value="Biratnagar Municipality">Biratnagar Municipality</option>
                                        <option value="Budhiganga Rural Municipality">Budhiganga Rural Municipality</option>
                                        <option value="Letang Municipality">Letang Municipality</option>
                                        <option value="Pathari Shanishchare Manicipality">Pathari Shanishchare Manicipality</option>
                                        <option value="Rangeli Municipality">Rangeli Municipality</option>
                                        <option value="Ratuwamai Municipality">Ratuwamai Municipality</option>
                                        <option value="Sundar Haraicha Municipality">Sundar Haraicha Municipality</option>
                                        <option value="Sunawarshi Municipality">Sunawarshi Municipality</option>
                                        <option value="Urlabari Municipality">Urlabari Municipality</option>
                                        <option value="Siddhicharan Municipality">Siddhicharan Municipality</option>
                                        <option value="Phidim Municipality">Phidim Municipality</option>
                                        <option value="Chainpur Municipality">Chainpur Municipality</option>
                                        <option value="Dharmadevi Municipality">Dharmadevi Municipality</option>
                                        <option value="Khandbari Municipality">Khandbari Municipality</option>
                                        <option value="Madi Municipality">Madi Municipality</option>
                                        <option value="Panchkhapan Municipality">Panchkhapan Municipality</option>
                                        <option value="Solududhkunda Municipality">Solududhkunda Municipality</option>
                                        <option value="Barahachhetra Municipality">Barahachhetra Municipality</option>
                                        <option value="Dharan Sub-Metropolitan City">Dharan Sub-Metropolitan City</option>
                                        <option value="Duhabi Municipality">Duhabi Municipality</option>
                                        <option value="Inaruwa Municipality">Inaruwa Municipality</option>
                                        <option value="Itahari Sub-Metropolitan City">Itahari Sub-Metropolitan City</option>
                                        <option value="Ramdhuni Municipality">Ramdhuni Municipality</option>
                                        <option value="Phungling Municipality">Phungling Municipality</option>
                                        <option value="Laligurans Municipality">Laligurans Municipality</option>
                                        <option value="Myanglung Municipality">Myanglung Municipality</option>
                                        <option value="Belaka Municipality">Belaka Municipality</option>
                                        <option value="Chaudandigadhi Municipality">Chaudandigadhi Municipality</option>
                                        <option value="Katari Municipality">Katari Municipality</option>
                                        <option value="Triyuga Municipality">Triyuga Municipality</option>
                                        <option value="Jeetpursimara Sub-Metropolitan">Jeetpursimara Sub-Metropolitan</option>
                                        <option value="Kalaiya Sub-Metropolitan">Kalaiya Sub-Metropolitan</option>
                                        <option value="Kolhabi Municipality">Kolhabi Municipality</option>
                                        <option value="Mahagadhimai Municipality">Mahagadhimai Municipality</option>
                                        <option value="Nijgadh Municipality">Nijgadh Municipality</option>
                                        <option value="Pacharauta Municipality">Pacharauta Municipality</option>
                                        <option value="Simraungadh Municipality">Simraungadh Municipality</option>
                                        <option value="Dhanusadham Municipality">Dhanusadham Municipality</option>
                                        <option value="Ganeshman Charnath Municipality">Ganeshman Charnath Municipality</option>
                                        <option value="Hansapur Municipality">Hansapur Municipality</option>
                                        <option value="Janakpurdham Sub-Metropolitan City">Janakpurdham Sub-Metropolitan City</option>
                                        <option value="Kamala Municipality">Kamala Municipality</option>
                                        <option value="Mithila Bihari Municipality">Mithila Bihari Municipality</option>
                                        <option value="Mithila Municipality">Mithila Municipality</option>
                                        <option value="Nagarain Municipality">Nagarain Municipality</option>
                                        <option value="Sabaila Municipality">Sabaila Municipality</option>
                                        <option value="Shahidnagar Municipality">Shahidnagar Municipality</option>
                                        <option value="Aurahi Municipality">Aurahi Municipality</option>
                                        <option value="Balawa Municipality">Balawa Municipality</option>
                                        <option value="Bardibas Municipality">Bardibas Municipality</option>
                                        <option value="Bhangaha Municipality">Bhangaha Municipality</option>
                                        <option value="Gaushala Municipality">Gaushala Municipality</option>
                                        <option value="Jaleshwor Municipality">Jaleshwor Municipality</option>
                                        <option value="Loharpatti Municipality">Loharpatti Municipality</option>
                                        <option value="Manara Sishwa Municipality">Manara Sishwa Municipality</option>
                                        <option value="Matihani Municipality">Matihani Municipality</option>
                                        <option value="Ramgopalpur Municipality">Ramgopalpur Municipality</option>
                                        <option value="Birgunj Metropolitan City">Birgunj Metropolitan City</option>
                                        <option value="Parsagadhi Municipality">Parsagadhi Municipality</option>
                                        <option value="Pokhariya Municipality">Pokhariya Municipality</option>
                                        <option value="Baudhimai Municipality">Baudhimai Municipality</option>
                                        <option value="Brindawan Municipality">Brindawan Municipality</option>
                                        <option value="Chandrapur Municipality">Chandrapur Municipality</option>
                                        <option value="Dewahi Gonahi Municipality">Dewahi Gonahi Municipality</option>
                                        <option value="Fatuwabijayapur Municipality">Fatuwabijayapur Municipality</option>
                                        <option value="Gadhimai Municipality">Gadhimai Municipality</option>
                                        <option value="Garuda Municipality">Garuda Municipality</option>
                                        <option value="Gaur Municipality">Gaur Municipality</option>
                                        <option value="Gujara Municipality">Gujara Municipality</option>
                                        <option value="Ishnath Municipality">Ishnath Municipality</option>
                                        <option value="Katahariya Municipality">Katahariya Municipality</option>
                                        <option value="Madhav Narayan Municipality">Madhav Narayan Municipality</option>
                                        <option value="Maulapur Municipality">Maulapur Municipality</option>
                                        <option value="Paroha Municipality">Paroha Municipality</option>
                                        <option value="Rajdevi Municipality">Rajdevi Municipality</option>
                                        <option value="Rajpur Municipality">Rajpur Municipality</option>
                                        <option value="Bodebarsaien Municipality">Bodebarsaien Municipality</option>
                                        <option value="Dakneshwori Municipality">Dakneshwori Municipality</option>
                                        <option value="Hanumannagar Municipality">Hanumannagar Municipality</option>
                                        <option value="Kanchanrup Municipality">Kanchanrup Municipality</option>
                                        <option value="Khadak Municipality">Khadak Municipality</option>
                                        <option value="Rajbiraj Municipality">Rajbiraj Municipality</option>
                                        <option value="Saptakoshi Municipality">Saptakoshi Municipality</option>
                                        <option value="Shambhunath Municipality">Shambhunath Municipality</option>
                                        <option value="Surunga Municipality">Surunga Municipality</option>
                                        <option value="Bagmati Municipality">Bagmati Municipality</option>
                                        <option value="Balara Municipality">Balara Municipality</option>
                                        <option value="Godaita Municipality">Godaita Municipality</option>
                                        <option value="Haripur Municipality">Haripur Municipality</option>
                                        <option value="Haripurwa Municipality">Haripurwa Municipality</option>
                                        <option value="Hariwan Municipality">Hariwan Municipality</option>
                                        <option value="Ishworpur Municipality">Ishworpur Municipality</option>
                                        <option value="Kabilasi Municipality">Kabilasi Municipality</option>
                                        <option value="Lalbandi Municipality">Lalbandi Municipality</option>
                                        <option value="Malangawa Municipality">Malangawa Municipality</option>
                                        <option value="Dhangadhimai Municipality">Dhangadhimai Municipality</option>
                                        <option value="Golbazar Municipality">Golbazar Municipality</option>
                                        <option value="Kalyanpur Municipality">Kalyanpur Municipality</option>
                                        <option value="Karjanha Municipality">Karjanha Municipality</option>
                                        <option value="Lahan Municipality">Lahan Municipality</option>
                                        <option value="Mirchaiya Municipality">Mirchaiya Municipality</option>
                                        <option value="Siraha Municipality">Siraha Municipality</option>
                                        <option value="Sukhipur Municipality">Sukhipur Municipality</option>
                                        <option value="Bhaktapur Municipality">Bhaktapur Municipality</option>
                                        <option value="Changunarayan Municipality">Changunarayan Municipality</option>
                                        <option value="Madhyapur Thimi Municipality">Madhyapur Thimi Municipality</option>
                                        <option value="Suryabinayak Municipality">Suryabinayak Municipality</option>
                                        <option value="Kalika Municipality">Kalika Municipality</option>
                                        <option value="Khairahani Municipality">Khairahani Municipality</option>
                                        <option value="Rapti Municipality">Rapti Municipality</option>
                                        <option value="Ratnanagar Municipality">Ratnanagar Municipality</option>
                                        <option value="Dhunibeshi Municipality">Dhunibeshi Municipality</option>
                                        <option value="Nilkantha Municipality">Nilkantha Municipality</option>
                                        <option value="Bhimeshwor Municipality">Bhimeshwor Municipality</option>
                                        <option value="Jiri Municipality">Jiri Municipality</option>
                                        <option value="Budhanilkantha Municipality">Budhanilkantha Municipality</option>
                                        <option value="Chandragiri Municipality">Chandragiri Municipality</option>
                                        <option class="sf-level-0 sf-option-active" selected="selected" value="Gokarneshwor Municipality">Gokarneshwor Municipality</option>
                                        <option value="Kageshwari Manohara Municipality">Kageshwari Manohara Municipality</option>
                                        <option value="Kathmandu Metropolitan City">Kathmandu Metropolitan City</option>
                                        <option value="Kirtipur Municipality">Kirtipur Municipality</option>
                                        <option value="Nagarjun Municipality">Nagarjun Municipality</option>
                                        <option value="Shankharapur Municipality">Shankharapur Municipality</option>
                                        <option value="Tarakeshwar Municipality">Tarakeshwar Municipality</option>
                                        <option value="Tokha Municipality">Tokha Municipality</option>
                                        <option value="Banepa Municipality">Banepa Municipality</option>
                                        <option value="Dhulikhel Municipality">Dhulikhel Municipality</option>
                                        <option value="Mandandeupur Municipality">Mandandeupur Municipality</option>
                                        <option value="Namobuddha Municipality">Namobuddha Municipality</option>
                                        <option value="Panauti Municipality">Panauti Municipality</option>
                                        <option value="Panchkhal Municipality">Panchkhal Municipality</option>
                                        <option value="Godawari Municipality">Godawari Municipality</option>
                                        <option value="Lalitpur Metropolitan City">Lalitpur Metropolitan City</option>
                                        <option value="Thaha Municipality">Thaha Municipality</option>
                                        <option value="Belkotgadhi Municipality">Belkotgadhi Municipality</option>
                                        <option value="Bidur Municipality">Bidur Municipality</option>
                                        <option value="Manthali Municipality">Manthali Municipality</option>
                                        <option value="Ramechhap Municipality">Ramechhap Municipality</option>
                                        <option value="Dudhouli Municipality">Dudhouli Municipality</option>
                                        <option value="Kamalamai Municipality">Kamalamai Municipality</option>
                                        <option value="Barhabise Municipality">Barhabise Municipality</option>
                                        <option value="Chautara Sangachokgadhi Municipality">Chautara Sangachokgadhi Municipality</option>
                                        <option value="Melamchi Municipality">Melamchi Municipality</option>
                                        <option value="Baglung Municipality">Baglung Municipality</option>
                                        <option value="Dhorpatan Municipality">Dhorpatan Municipality</option>
                                        <option value="Galkot Municipality">Galkot Municipality</option>
                                        <option value="Jaimuni Municipality">Jaimuni Municipality</option>
                                        <option value="Gorkha Municipality">Gorkha Municipality</option>
                                        <option value="Palungtar Municipality">Palungtar Municipality</option>
                                        <option value="Pokhara Metropolitan City">Pokhara Metropolitan City</option>
                                        <option value="Besishahar Municipality">Besishahar Municipality</option>
                                        <option value="MadhyaNepal Municipality">MadhyaNepal Municipality</option>
                                        <option value="Rainas Municipality">Rainas Municipality</option>
                                        <option value="Sundarbazar Municipality">Sundarbazar Municipality</option>
                                        <option value="Beni Municipality">Beni Municipality</option>
                                        <option value="Devachuli Municipality">Devachuli Municipality</option>
                                        <option value="Gaidakot Municipality">Gaidakot Municipality</option>
                                        <option value="Kawasoti Municipality">Kawasoti Municipality</option>
                                        <option value="Madhyabindu Municipality">Madhyabindu Municipality</option>
                                        <option value="Kushma Municipality">Kushma Municipality</option>
                                        <option value="Phalewas Municipality">Phalewas Municipality</option>
                                        <option value="Bhirkot Municipality">Bhirkot Municipality</option>
                                        <option value="Chapakot Municipality">Chapakot Municipality</option>
                                        <option value="Galyang Municipality">Galyang Municipality</option>
                                        <option value="Putalibazar Municipality">Putalibazar Municipality</option>
                                        <option value="Waling Municipality">Waling Municipality</option>
                                        <option value="Bhanu Municipality">Bhanu Municipality</option>
                                        <option value="Bhimad Municipality">Bhimad Municipality</option>
                                        <option value="Byas Municipality">Byas Municipality</option>
                                        <option value="Shuklagandaki Municipality">Shuklagandaki Municipality</option>
                                        <option value="Bhumikasthan Municipality">Bhumikasthan Municipality</option>
                                        <option value="Sandhikharka Municipality">Sandhikharka Municipality</option>
                                        <option value="Shitganga Municipality">Shitganga Municipality</option>
                                        <option value="Kohalpur Municipality">Kohalpur Municipality</option>
                                        <option value="Nepalganj Sub-Metropolitan City">Nepalganj Sub-Metropolitan City</option>
                                        <option value="Bansgadhi Municipality">Bansgadhi Municipality</option>
                                        <option value="Barbardiya Municipality">Barbardiya Municipality</option>
                                        <option value="Gulariya Municipality">Gulariya Municipality</option>
                                        <option value="Madhuwan Municipality">Madhuwan Municipality</option>
                                        <option value="Rajapur Municipality">Rajapur Municipality</option>
                                        <option value="Thakur Baba Municipality">Thakur Baba Municipality</option>
                                        <option value="Ghorahi Sub-Metropolitan City">Ghorahi Sub-Metropolitan City</option>
                                        <option value="Lamahi Municipality">Lamahi Municipality</option>
                                        <option value="Tulsipur Sub-Metropolitan City">Tulsipur Sub-Metropolitan City</option>
                                        <option value="Musikot Municipality">Musikot Municipality</option>
                                        <option value="Resunga Municipality">Resunga Municipality</option>
                                        <option value="Banaganga Municipality">Banaganga Municipality</option>
                                        <option value="Buddhabhumi Municipality">Buddhabhumi Municipality</option>
                                        <option value="Kapilvastu Municipality">Kapilvastu Municipality</option>
                                        <option value="Krishnanagar Municipality">Krishnanagar Municipality</option>
                                        <option value="Maharajganj Municipality">Maharajganj Municipality</option>
                                        <option value="Shivaraj Municipality">Shivaraj Municipality</option>
                                        <option value="Bardaghat Municipality">Bardaghat Municipality</option>
                                        <option value="Ramgram Municipality">Ramgram Municipality</option>
                                        <option value="Sunwal Municipality">Sunwal Municipality</option>
                                        <option value="Rampur Municipality">Rampur Municipality</option>
                                        <option value="Tansen Municipality">Tansen Municipality</option>
                                        <option value="Pyuthan Municipality">Pyuthan Municipality</option>
                                        <option value="Swargadwari Municipality">Swargadwari Municipality</option>
                                        <option value="Rolpa Municipality">Rolpa Municipality</option>
                                        <option value="Tribeni Rural Municipality">Tribeni Rural Municipality</option>
                                        <option value="Butwal Sub-Metropolitan City">Butwal Sub-Metropolitan City</option>
                                        <option value="Devdaha Municipality">Devdaha Municipality</option>
                                        <option value="Lumbini Sanskritik Municipality">Lumbini Sanskritik Municipality</option>
                                        <option value="Sainamaina Municipality">Sainamaina Municipality</option>
                                        <option value="Siddharthanagar Municipality">Siddharthanagar Municipality</option>
                                        <option value="Tilottama Municipality">Tilottama Municipality</option>
                                        <option value="Aathabis Municipality">Aathabis Municipality</option>
                                        <option value="Chamunda Bindrasaini Municipality">Chamunda Bindrasaini Municipality</option>
                                        <option value="Dullu Municipality">Dullu Municipality</option>
                                        <option value="Narayan Municipality">Narayan Municipality</option>
                                        <option value="Thuli Bheri Municipality">Thuli Bheri Municipality</option>
                                        <option value="Tripura Sundari Municipality">Tripura Sundari Municipality</option>
                                        <option value="Bheri Municipality">Bheri Municipality</option>
                                        <option value="Chhedagad Municipality">Chhedagad Municipality</option>
                                        <option value="Nalgad Municipality">Nalgad Municipality</option>
                                        <option value="Chandannath Municipality">Chandannath Municipality</option>
                                        <option value="Khandachakra Municipality">Khandachakra Municipality</option>
                                        <option value="Raskot Municipality">Raskot Municipality</option>
                                        <option value="Tilagufa Municipality">Tilagufa Municipality</option>
                                        <option value="Chhayanath Rara Municipality">Chhayanath Rara Municipality</option>
                                        <option value="Aathbiskot Municipality">Aathbiskot Municipality</option>
                                        <option value="Chaurjahari Municipality">Chaurjahari Municipality</option>
                                        <option value="Bagchaur Municipality">Bagchaur Municipality</option>
                                        <option value="Bangad kupinde Municipality">Bangad kupinde Municipality</option>
                                        <option value="Sharada Municipality">Sharada Municipality</option>
                                        <option value="Bheriganga Municipality">Bheriganga Municipality</option>
                                        <option value="Birendranagar Municipality">Birendranagar Municipality</option>
                                        <option value="Gurbhakot Municipality">Gurbhakot Municipality</option>
                                        <option value="Lekbeshi Municipality">Lekbeshi Municipality</option>
                                        <option value="Panchpuri Municipality">Panchpuri Municipality</option>
                                        <option value="Kamalbazar Municipality">Kamalbazar Municipality</option>
                                        <option value="Mangalsen Municipality">Mangalsen Municipality</option>
                                        <option value="Panchadewal Binayak Municipality">Panchadewal Binayak Municipality</option>
                                        <option value="Sanphebagar Municipality">Sanphebagar Municipality</option>
                                        <option value="Dasharathchanda Municipality">Dasharathchanda Municipality</option>
                                        <option value="Melauli Municipality">Melauli Municipality</option>
                                        <option value="Patan Municipality">Patan Municipality</option>
                                        <option value="Purchaudi Municipality">Purchaudi Municipality</option>
                                        <option value="Bungal Municipality">Bungal Municipality</option>
                                        <option value="JayaPrithivi Municipality">JayaPrithivi Municipality</option>
                                        <option value="Badimalika Municipality">Badimalika Municipality</option>
                                        <option value="Budhinanda Municipality">Budhinanda Municipality</option>
                                        <option value="Amargadhi Municipality">Amargadhi Municipality</option>
                                        <option value="Parasuram Municipality">Parasuram Municipality</option>
                                        <option value="Mahakali Municipality">Mahakali Municipality</option>
                                        <option value="Shailyashikhar Municipality">Shailyashikhar Municipality</option>
                                        <option value="Dipayal Silgadhi Municipality">Dipayal Silgadhi Municipality</option>
                                        <option value="Shikhar Municipality">Shikhar Municipality</option>
                                        <option value="Bhajani Municipality">Bhajani Municipality</option>
                                        <option value="Gauriganga Municipality">Gauriganga Municipality</option>
                                        <option value="Ghodaghodi Municipality">Ghodaghodi Municipality</option>
                                        <option value="Lamki Chuha Municipality">Lamki Chuha Municipality</option>
                                        <option value="Tikapur Municipality">Tikapur Municipality</option>
                                        <option value="Bedkot Municipality">Bedkot Municipality</option>
                                        <option value="Belauri Municipality">Belauri Municipality</option>
                                        <option value="Bhimdatta Municipality">Bhimdatta Municipality</option>
                                        <option value="Krishnapur Municipality">Krishnapur Municipality</option>
                                        <option value="Punarbas Municipality">Punarbas Municipality</option>
                                        <option value="Shuklaphanta Municipality">Shuklaphanta Municipality</option>
                                    </select>
                                </div>
                                    <div class="col-12 form-group--block">
                                        <label>Shop Address: </label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group--block">
                                        <label>Shop Phone Number: </label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group--block">
                                        <label>Shop PAN/VAT Number: </label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>What are you selling? (at least 1 category)</label>
                                        <select class="single-select2" name="state">
                                            <option value="option">All</option>
                                            <option value="Fresh">Fresh</option>
                                            <option value="Food Cupboard">Food Cupboard</option>
                                            <option value="Bakery">Bakery</option>
                                            <option value="Drinks, Tea &amp; Coffee">Drinks, Tea &amp; Coffee</option>
                                            <option value="Frozen Foods">Frozen Foods</option>
                                            <option value="Ready Meals">Ready Meals</option>
                                            <option value="Beer, Wine &amp; Spirits">Beer, Wine &amp; Spirits</option>
                                            <option value="Baby &amp; Child">Baby &amp; Child</option>
                                            <option value="Kitchen &amp; Dining">Kitchen &amp; Dining</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <p class="privacy_text">By creating an account, you agree to Naulobazar <span class="text-success"> <a href="#">Conditions of Use </a> </span>and <span class="text-success"> <a href="#"> Privacy Notice. </a></span></p>
                        <button type="submit" class="btn ps-button">Register</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>


</main>
@endsection

