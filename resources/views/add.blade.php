<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<title>Ajouter un client</title>
	<link rel="stylesheet" href="/css/semantic.css">
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
	<h1 style="text-align: center;">Ajouter un client</h1>
	<form action="/" method="GET">
		<input type="submit" class="ui button" value="Revenir a la liste">
	</form>
	<hr>
	<form id="form" class="ui center olive form" action="/" method="POST">
		{{csrf_field()}}
		<div class="two fields">
			<div class="three wide field">
				<h2>Nom</h2>
				<input type="text" name="nom" placeholder="Nom" required="">
			</div>
			<div class="three wide field">
				<h2>Prenom</h2>
				<input type="text" name="prenom" placeholder="Prenom" required="">
			</div>
		</div>
		<div class="two wide fields ">
			<div class="two wide field">
				<h2>Sexe</h2>
				<select name="sexe" class="ui dropdown">
					<option value="Homme">Homme</option>
					<option value="Femme">Femme</option>
				</select>
			</div>
			<div class="two wide field">
				<h2>Licence ffsnw</h2>
				<select name="ffsnw" class="ui dropdown">
					<option value="Non">Non</option>
					<option value="Oui">Oui</option>
				</select>
			</div>
			<div class="two wide field">
				<h2>Age</h2>
				<select name="age"><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option selected="selected" value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option><option value="66">66</option><option value="67">67</option><option value="68">68</option><option value="69">69</option><option value="70">70</option><option value="71">71</option><option value="72">72</option><option value="73">73</option><option value="74">74</option><option value="75">75</option><option value="76">76</option><option value="77">77</option><option value="78">78</option><option value="79">79</option><option value="80">80</option><option value="81">81</option><option value="82">82</option><option value="83">83</option><option value="84">84</option><option value="85">85</option><option value="86">86</option><option value="87">87</option><option value="88">88</option><option value="89">89</option><option value="90">90</option><option value="91">91</option><option value="92">92</option><option value="93">93</option><option value="94">94</option></select>
			</div>
		</div>
		<div class="two fields">
			<div class="three wide field">
				<h2>Email</h2>
				<input id="email" type="text" name="email" placeholder="Email" required="" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required title="Email non valide">
			</div>
			<h2 id='result'></h2>
			<div class="three wide field">
				<h2>Telephone</h2>
				<input type="text" name="tel" placeholder="Telephone" required="" maxlength=10 pattern="^0[1-7]\d{8}$" required title="Tapez dans ce champ 0 (suivi d'un chiffre entre 0 et 7)">
			</div>
		</div>
		<div class="two fields">
			<div class="one wide field">
				<h2>N°</h2>
				<input id="numrue" type="number" name="numrue" placeholder="Numero" required="">
			</div>
			<div class="four wide field">
				<h2>Rue</h2>
				<input id="user_input_autocomplete_address" type="text" name="Adresse" placeholder="Rue" required="">
			</div>
			<div class="one wide field">
				<h2>CP</h2>
				<input id="postal_code" type="text" name="cp" placeholder="CP" required="">
			</div>
		</div>
		<!-- input de type cacher pour google -->
		<input id="route" type="hidden" name="rue" placeholder="rue">
		<input id="locality" type="hidden" name="ville" placeholder="Ville">
		<input id="country" type="hidden" name="pays" placeholder="Pays">
		<!-- input caher pour heure restante/total -->
		<input id="btn" type="submit" class="ui centered button" value="Ajouter">
		<input type="hidden" name="nht" value="0">
		<input type="hidden" name="nhr" value="0">
	</form>
	<br>
</div>
</body>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBJCldPjURFNVUUxV4Chce_gx9FAHZqMlI">
</script>
<script src="{{ mix('/js/app.js') }}"></script>
</html>
