<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="Assets/Images/favicon.ico">
	<title>ArebitLinkers - Freelance Service Provider</title>


	<!-- Swiper JS cdn link -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

	<!-- Bootstrap CSS Link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<!-- Fontawesome Link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
		integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	 <!-- Custom CSS -->
     <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>

	<!-- Navbar Section Start -->
	<header id="main-nav">
		<div class="header">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-lg fixed-top bg-white justify-content-between">
					<a class="navbar-brand" href="{{ url('/') }}">
						<img src="{{ asset('images/logo-black-svg.svg') }}" alt="logo" class="">
					</a>
					<div class="nav-right">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a href="{{ url('login') }}" class="nav-link">Log In</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</header>
	<!-- Navbar Section End -->

	<!-- SignUp Section Start -->
	<section class="login">
		<div class="container">
			<div class="row">
				<div class="col-sm-7 col-lg-6 mx-auto rounded-3 border p-5">
					<div>
						<h2>Sign Up</h2>
					</div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                        @foreach ($errors->all() as $error)
                        <li>
                            <span class="text-danger fs-5">* {{ $error }}</span>
                            </li>
                        @endforeach
                        </ul>
                        </div>
                    @endif


					<form action="{{ url('registerStore') }}" method="post" class="row">
                    @csrf
						<div class="mb-4 col-sm-6">
							<input type="text" class="form-control fs-4 py-3" value="{{ old('first_name') }}" name="first_name" placeholder="First Name">
							<!-- <span class="text-danger fs-5">* Please Enter your First Name</span> -->
						</div>
						<div class="mb-4 col-sm-6">
							<input type="text" class="form-control fs-4 py-3" value="{{ old('last_name') }}" name="last_name" placeholder="Last Name">
							<!-- <span class="text-danger fs-5">* Please Enter your Last Name</span> -->
						</div>
						<div class="mb-4">
							<input type="email" class="form-control fs-4 py-3" value="{{ old('email') }}" name="email"
								placeholder="name@example.com">
							<!-- <span class="text-danger fs-5">* Please Enter your Email Id</span> -->
						</div>
						<div class="mb-4 col-3 col-lg-2">
							<select name="country-code" id="" class="form-control fs-4 py-3">
								<option value="+91" selected>+91</option>
								<option value="+93">+93</option>
								<option value="+355">+355</option>
								<option value="+213">+213</option>
								<option value="+1-684">+1-684</option>
								<option value="+376">+376</option>
								<option value="+244">+244</option>
								<option value="+1-264">+1-264</option>
								<option value="+672">+672</option>
								<option value="+1-268">+1-268</option>
								<option value="+54">+54</option>
								<option value="+374">+374</option>
								<option value="+297">+297</option>
								<option value="+61">+61</option>
								<option value="+43">+43</option>
								<option value="+994">+994</option>
								<option value="+1-242">+1-242</option>
								<option value="+973">+973</option>
								<option value="+880">+880</option>
								<option value="+1-246">+1-246</option>
								<option value="+375">+375</option>
								<option value="+32">+32</option>
								<option value="+501">+501</option>
								<option value="+229">+229</option>
								<option value="+1-441">+1-441</option>
								<option value="+975">+975</option>
								<option value="+591">+591</option>
								<option value="+387">+387</option>
								<option value="+267">+267</option>
								<option value="+55">+55</option>
								<option value="+246">+246</option>
								<option value="+1-284">+1-284</option>
								<option value="+673">+673</option>
								<option value="+359">+359</option>
								<option value="+226">+226</option>
								<option value="+257">+257</option>
								<option value="+855">+855</option>
								<option value="+237">+237</option>
								<option value="+1">+1</option>
								<option value="+238">+238</option>
								<option value="+1-345">+1-345</option>
								<option value="+236">+236</option>
								<option value="+235">+235</option>
								<option value="+56">+56</option>
								<option value="+86">+86</option>
								<option value="+61">+61</option>
								<option value="+61">+61</option>
								<option value="+57">+57</option>
								<option value="+269">+269</option>
								<option value="+682">+682</option>
								<option value="+506">+506</option>
								<option value="+385">+385</option>
								<option value="+53">+53</option>
								<option value="+599">+599</option>
								<option value="+357">+357</option>
								<option value="+420">+420</option>
								<option value="+243">+243</option>
								<option value="+45">+45</option>
								<option value="+253">+253</option>
								<option value="+1-767">+1-767</option>
								<option value="+1-809">+1-809</option>
								<option value="+670">+670</option>
								<option value="+593">+593</option>
								<option value="+20">+20</option>
								<option value="+503">+503</option>
								<option value="+240">+240</option>
								<option value="+291">+291</option>
								<option value="+372">+372</option>
								<option value="+251">+251</option>
								<option value="+500">+500</option>
								<option value="+298">+298</option>
								<option value="+679">+679</option>
								<option value="+358">+358</option>
								<option value="+33">+33</option>
								<option value="+689">+689</option>
								<option value="+241">+241</option>
								<option value="+220">+220</option>
								<option value="+995">+995</option>
								<option value="+49">+49</option>
								<option value="+233">+233</option>
								<option value="+350">+350</option>
								<option value="+30">+30</option>
								<option value="+299">+299</option>
								<option value="+1-473">+1-473</option>
								<option value="+1-671">+1-671</option>
								<option value="+502">+502</option>
								<option value="+44-1481">+44-1481</option>
								<option value="+224">+224</option>
								<option value="+245">+245</option>
								<option value="+592">+592</option>
								<option value="+509">+509</option>
								<option value="+504">+504</option>
								<option value="+852">+852</option>
								<option value="+36">+36</option>
								<option value="+354">+354</option>
								<option value="+62">+62</option>
								<option value="+98">+98</option>
								<option value="+964">+964</option>
								<option value="+353">+353</option>
								<option value="+44-1624">+44-1624</option>
								<option value="+972">+972</option>
								<option value="+39">+39</option>
								<option value="+225">+225</option>
								<option value="+1-876">+1-876</option>
								<option value="+81">+81</option>
								<option value="+44-1534">+44-1534</option>
								<option value="+962">+962</option>
								<option value="+7">+7</option>
								<option value="+254">+254</option>
								<option value="+686">+686</option>
								<option value="+383">+383</option>
								<option value="+965">+965</option>
								<option value="+996">+996</option>
								<option value="+856">+856</option>
								<option value="+371">+371</option>
								<option value="+961">+961</option>
								<option value="+266">+266</option>
								<option value="+231">+231</option>
								<option value="+218">+218</option>
								<option value="+423">+423</option>
								<option value="+370">+370</option>
								<option value="+352">+352</option>
								<option value="+853">+853</option>
								<option value="+389">+389</option>
								<option value="+261">+261</option>
								<option value="+265">+265</option>
								<option value="+60">+60</option>
								<option value="+960">+960</option>
								<option value="+223">+223</option>
								<option value="+356">+356</option>
								<option value="+692">+692</option>
								<option value="+222">+222</option>
								<option value="+230">+230</option>
								<option value="+262">+262</option>
								<option value="+52">+52</option>
								<option value="+691">+691</option>
								<option value="+373">+373</option>
								<option value="+377">+377</option>
								<option value="+976">+976</option>
								<option value="+382">+382</option>
								<option value="+1-664">+1-664</option>
								<option value="+212">+212</option>
								<option value="+258">+258</option>
								<option value="+95">+95</option>
								<option value="+264">+264</option>
								<option value="+674">+674</option>
								<option value="+977">+977</option>
								<option value="+31">+31</option>
								<option value="+599">+599</option>
								<option value="+687">+687</option>
								<option value="+64">+64</option>
								<option value="+505">+505</option>
								<option value="+227">+227</option>
								<option value="+234">+234</option>
								<option value="+683">+683</option>
								<option value="+850">+850</option>
								<option value="+1-670">+1-670</option>
								<option value="+47">+47</option>
								<option value="+968">+968</option>
								<option value="+92">+92</option>
								<option value="+680">+680</option>
								<option value="+970">+970</option>
								<option value="+507">+507</option>
								<option value="+675">+675</option>
								<option value="+595">+595</option>
								<option value="+51">+51</option>
								<option value="+63">+63</option>
								<option value="+64">+64</option>
								<option value="+48">+48</option>
								<option value="+351">+351</option>
								<option value="+1-787">+1-787</option>
								<option value="+974">+974</option>
								<option value="+242">+242</option>
								<option value="+262">+262</option>
								<option value="+40">+40</option>
								<option value="+7">+7</option>
								<option value="+250">+250</option>
								<option value="+590">+590</option>
								<option value="+290">+290</option>
								<option value="+1-869">+1-869</option>
								<option value="+1-758">+1-758</option>
								<option value="+590">+590</option>
								<option value="+508">+508</option>
								<option value="+1-784">+1-784</option>
								<option value="+685">+685</option>
								<option value="+378">+378</option>
								<option value="+239">+239</option>
								<option value="+966">+966</option>
								<option value="+221">+221</option>
								<option value="+381">+381</option>
								<option value="+248">+248</option>
								<option value="+232">+232</option>
								<option value="+65">+65</option>
								<option value="+1-721">+1-721</option>
								<option value="+421">+421</option>
								<option value="+386">+386</option>
								<option value="+677">+677</option>
								<option value="+252">+252</option>
								<option value="+27">+27</option>
								<option value="+82">+82</option>
								<option value="+211">+211</option>
								<option value="+34">+34</option>
								<option value="+94">+94</option>
								<option value="+249">+249</option>
								<option value="+597">+597</option>
								<option value="+47">+47</option>
								<option value="+268">+268</option>
								<option value="+46">+46</option>
								<option value="+41">+41</option>
								<option value="+963">+963</option>
								<option value="+886">+886</option>
								<option value="+992">+992</option>
								<option value="+255">+255</option>
								<option value="+66">+66</option>
								<option value="+228">+228</option>
								<option value="+690">+690</option>
								<option value="+676">+676</option>
								<option value="+1-868">+1-868</option>
								<option value="+216">+216</option>
								<option value="+90">+90</option>
								<option value="+993">+993</option>
								<option value="+1-649">+1-649</option>
								<option value="+688">+688</option>
								<option value="+1-340">+1-340</option>
								<option value="+256">+256</option>
								<option value="+380">+380</option>
								<option value="+971">+971</option>
								<option value="+44">+44</option>
								<option value="+1">+1</option>
								<option value="+598">+598</option>
								<option value="+998">+998</option>
								<option value="+678">+678</option>
								<option value="+379">+379</option>
								<option value="+58">+58</option>
								<option value="+84">+84</option>
								<option value="+681">+681</option>
								<option value="+212">+212</option>
								<option value="+967">+967</option>
								<option value="+260">+260</option>
								<option value="+263">+263</option>
							</select>
						</div>
						<div class="mb-4 col-9 col-lg-10">
							<input type="number" class="form-control fs-4 py-3" value="{{ old('mobile_no') }}" name="mobile_no" placeholder="Mobile No">
							<!-- <span class="text-danger fs-5">* Please Enter your Mobile No</span> -->
						</div>
						<div class="mb-4">
							<input type="radio" name="user_type" id="" value="{{ old('user_type') }}" class="form-check-input me-2 mt-0 mt-sm-1"
								style="width: 1.5rem; height: 1.5rem;"><label for="form-check-lable"
								class="fs-4 me-2 me-sm-4">Join as Client</label>
							<input type="radio" name="user_type" id="" value="{{ old('user_type') }}" class="form-check-input me-2 mt-0 mt-sm-1"
								style="width: 1.5rem; height: 1.5rem;"><label for="form-check-lable" class="fs-4">Join as
								Freelancer</label>
							<!-- <span class="text-danger fs-5 d-block">* Please Select User Type</span> -->
						</div>
						<div class="mb-4">
							<input type="password" class="form-control fs-4 py-3" value="{{ old('password') }}" name="password"
								placeholder="Password">
							<!-- <span class="text-danger fs-5">* Please Enter your Password</span> -->
						</div>
						<div class="mb-4">
							<input type="password" class="form-control fs-4 py-3" value="{{ old('confirm_password') }}" name="confirm_password"
								placeholder="Confirm Password">
							<!-- <span class="text-danger fs-5">* Password does not match</span> -->
						</div>

						<button type="submit" class="btn al-btn w-100 my-4 mx-auto">Sign Up</button>

						<div class="mb-4 text-center my-5">
							<p class="line-heading my-5  text-muted">Already Have Account?</p>
							<a href="{{ url('login') }}" class="btn al-btn al-btn-light">Log In</a>
						</div>
					</form>
				</div>
			</div>
	</section>
	<!-- SignUp Section End -->


	<!-- Footer Section Start -->
	<footer class="footer bd-footer mt-5 px-1">
		<div class="container">
			<div class="row">
				<div class="col-12 footer-credits text-center">
					<p class="py-5 pb-4">&copy; <a href="index.html" target="_blank"
							title="ArbeitLinkers">ArbeitLinkers</a>&trade;. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer Section End -->


	<!-- Jquery Link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
		integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<!-- Swiper JS cnd link -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

	<!-- Bootstrap JS Link -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
		integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
		integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
		crossorigin="anonymous"></script>

	<!-- Custom JS -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>