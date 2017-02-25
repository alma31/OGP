<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<title>Ajouter un client</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
	<h1 style="text-align: center;">Ajouter un client</h1>
	<form id="form" class="ui center olive form" action="/" method="POST">
		{{csrf_field()}}
		<div class="field">
			<h2>Nom</h2>
			<div class="two fields">
				<div class="field">
					<input id="nom" type="text" name="nom"  placeholder="Prenom">
				</div>
				<div class="field">
					<h2>Prenom</h2>
					<input id="prenom" type="text" name="prenom"  placeholder="Nom">
				</div>
			</div>
		</div>
		<div class="sixteen center wide field ">
			<h2>SEXE</h2>
			<select name="sexe" class="ui dropdown">
				<option value="Homme">Homme</option>
				<option value="Femme">Femme</option>
			</select>
			<h2>Licence ffsnw</h2>
			<select name="ffsnw" class="ui dropdown">
				<option value="Oui">Oui</option>
				<option value="Non">Non</option>
			</select>
			<h2>Age</h2>
			<select name="age"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option><option value="66">66</option><option value="67">67</option><option value="68">68</option><option value="69">69</option><option value="70">70</option><option value="71">71</option><option value="72">72</option><option value="73">73</option><option value="74">74</option><option value="75">75</option><option value="76">76</option><option value="77">77</option><option value="78">78</option><option value="79">79</option><option value="80">80</option><option value="81">81</option><option value="82">82</option><option value="83">83</option><option value="84">84</option><option value="85">85</option><option value="86">86</option><option value="87">87</option><option value="88">88</option><option value="89">89</option><option value="90">90</option><option value="91">91</option><option value="92">92</option><option value="93">93</option><option value="94">94</option><option value="95">95</option><option value="96">96</option><option value="97">97</option><option value="98">98</option><option value="99">99</option><option value="100">100</option></select>
		</div>
		<div class="two fields">
			<div class="field">
				<h2>Email</h2>
				<input type="text" name="email" placeholder="Email">
			</div>
			<div class="field">
				<h2>Telephone</h2>
				<input type="tel" name="tel" placeholder="Telephone">
			</div>
		</div>
		<div class="field">
			<h2>Adresse</h2>
			<div class="fields">
				<div class="sixteen wide field">
					<input id="user_input_autocomplete_address" type="text" name="Adresse" placeholder="Adresse">
				</div>
			</div>
			<div class="four wide field">
				<input id="street_number" type="hidden" name="numrue" placeholder="Numero">
			</div>
			<div class="four wide field">
				<input id="route" type="hidden" name="rue" placeholder="rue">
			</div>
			<div class="four wide field">
				<input id="postal_code" type="hidden" name="cp" placeholder="CP">
			</div>
			<div class="four wide field">
				<input id="locality" type="hidden" name="ville" placeholder="Ville">
			</div>
			<div class="four wide field">
				<input id="country" type="hidden" name="pays" placeholder="Pays">
			</div>
		</div>
		<div class="">
		<input type="submit" class="ui center button" value="Ajouter">
		</div>
		<!-- input caher pour heure restante/total -->
		<input type="hidden" name="nht" value="0">
		<input type="hidden" name="nhr" value="0">
	</form>
	<br>
	<form action="/" method="GET">
		<input type="submit" class="ui button" value="Revenir a la liste">
	</form>
</body>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBJCldPjURFNVUUxV4Chce_gx9FAHZqMlI">
</script>
<script src="{{ mix('/js/app.js') }}"></script>
</html>
