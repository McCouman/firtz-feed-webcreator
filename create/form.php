<style>	
.wmfg_layout_1, table, .wmfg_textarea { font-family: Verdana, Geneva, sans-serif; font-size: 13px; }
.wmfg_layout_1 ul.wmfg_questions { list-style-type: none; margin: 0; padding: 0; }
.wmfg_layout_1 ul.wmfg_questions li.wmfg_q { margin: 10px 0; }
.wmfg_layout_1 label.wmfg_label { display: block; margin: 0 0 5px 0; font-weight:bold; }
.wmfg_layout_1 table.wmfg_answers { width: 100%; _width: 97%; border-collapse: collapse; }
.wmfg_layout_1 table.wmfg_answers { vertical-align: top; }
.wmfg_layout_1 table.wmfg_answers td { padding: 2px; vertical-align: top; }
.wmfg_layout_1 table.wmfg_answers td.wmfg_a_td { width: 25px; }

.wmfg_layout_1 .wmfg_text { border: 1px solid #CCC; padding: 4px; font-size: 13px; color: #000000; width: 98.5%;
background-color: #ffffff;
background:-webkit-gradient(linear,0 0,0 100%,from(#f8f8f8),to(#fff));
background:-moz-linear-gradient(top,#f8f8f8,#fff);
}
.wmfg_layout_1 .wmfg_textarea { border: 1px solid #CCC; padding: 4px; font-size: 13px; color: #000000; width: 98.5%;
background:-webkit-gradient(linear,0 0,0 100%,from(#f8f8f8),to(#fff));
background:-moz-linear-gradient(top,#f8f8f8,#fff);
background-color: #ffffff;
}
.wmfg_layout_1 .wmfg_select { 
border:1px solid #CCCCCC; padding: 3px; font-size: 13px; color: #000000; margin: 0; width: 100%; _width: 97%;
background-color: #ffffff;
background:-webkit-gradient(linear,0 0,0 100%,from(#f8f8f8),to(#fff));
background:-moz-linear-gradient(top,#f8f8f8,#fff);
}
.wmfg_layout_1 .wmfg_btn { 
border: 1px solid #cccccc; cursor: pointer; font-weight: normal; font-size: 13px; padding: 6px; color: #444; font-family: 'lucida grande', tahoma, verdana, arial, sans-serif; 
background: -webkit-gradient(linear, left top, left bottom, from(#FAFAFA), color-stop(0.5, #FAFAFA), color-stop(0.5, #E5E5E5), to(#F9F9F9)); 
background: -moz-linear-gradient(top, #FAFAFA, #FAFAFA 50%, #E5E5E5 50%, #F9F9F9);
filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#FAFAFA', endColorstr='#E5E5E5');
}
.wmfg_layout_1 .wmfg_btn:hover {  
background: -webkit-gradient(linear, left top, left bottom, from(#EDEDED), color-stop(0.5, #EDEDED), color-stop(0.5, #D9D9D9), to(#EDEDED)); 
background: -moz-linear-gradient(top, #EDEDED, #EDEDED 50%, #D9D9D9 50%, #EDEDED);
filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#E3326E', endColorstr='#D9D9D9'); 
</style>


<div class="wmfg_layout_1">
<form name="input" action="dashboard.php" method="post">

<ul class="wmfg_questions">

	<li class="wmfg_q">
		<label class="wmfg_label" for="title">Filename</label>
		<input type="text" class="wmfg_text" name="podcastname" id="podcastname"  value="coolcast" />
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label" for="title">Titel</label>
		<input type="text" class="wmfg_text" name="title" id="title" value="Coolcast" />
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label" for="image">Podcast Cover</label>
		<input type="text" class="wmfg_text" name="image" id="image" value="http://..." />
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label" for="description">Description</label>
		<textarea class="wmfg_textarea" name="description" id="description" style="height:80px"></textarea>
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label" for="author">Author / Your Name</label>
		<input type="text" class="wmfg_text" name="author" id="author" value="" />
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label" for="email">eMail Adress</label>
		<input type="text" class="wmfg_text" name="email" id="email" value="" />
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label" for="keywords">Keywords</label>
		<input type="text" class="wmfg_text" name="keywords" id="keywords" value="" />
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label" for="itunes">iTunes URL</label>
		<input type="text" class="wmfg_text" name="itunes" id="itunes" value="" />
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label" for="category">iTunes Category</label>
		<select class="wmfg_select" name="category" id="category">
			<option value="">-- select itunes categories--</option>
			<option value="Arts">Arts</option>
			<option value="Arts -&gt; Design">Arts -&gt; Design</option>
			<option value="Arts -&gt; Fashion &amp; Beauty">Arts -&gt; Fashion &amp; Beauty</option>
			<option value="Arts -&gt; Food">Arts -&gt; Food</option>
			<option value="Arts -&gt; Literature">Arts -&gt; Literature</option>
			<option value="Arts -&gt; Performing Arts">Arts -&gt; Performing Arts</option>
			<option value="Arts -&gt; Visual Arts">Arts -&gt; Visual Arts</option>
			<option value="Business">Business</option>
			<option value="Business -&gt; Business News">Business -&gt; Business News</option>
			<option value="Business -&gt; Careers">Business -&gt; Careers</option>
			<option value="Business -&gt; Investing">Business -&gt; Investing</option>
			<option value="Business -&gt; Management &amp; Marketing">Business -&gt; Management &amp; Marketing</option>
			<option value="Business -&gt; Shopping">Business -&gt; Shopping</option>
			<option value="Comedy">Comedy</option>
			<option value="Education">Education</option>
			<option value="Education -&gt; Education Technology">Education -&gt; Education Technology</option>
			<option value="Education -&gt; Higher Education">Education -&gt; Higher Education</option>
			<option value="Education -&gt; K-12">Education -&gt; K-12</option>
			<option value="Education -&gt; Language Courses">Education -&gt; Language Courses</option>
			<option value="Education -&gt; Training">Education -&gt; Training</option>
			<option value="Games &amp; Hobbies">Games &amp; Hobbies</option>
			<option value="Games &amp; Hobbies -&gt; Automotive">Games &amp; Hobbies -&gt; Automotive</option>
			<option value="Games &amp; Hobbies -&gt; Aviation">Games &amp; Hobbies -&gt; Aviation</option>
			<option value="Games &amp; Hobbies -&gt; Hobbies">Games &amp; Hobbies -&gt; Hobbies</option>
			<option value="Games &amp; Hobbies -&gt; Other Games">Games &amp; Hobbies -&gt; Other Games</option>
			<option value="Games &amp; Hobbies -&gt; Video Games">Games &amp; Hobbies -&gt; Video Games</option>		
			<option value="Government &amp; Organizations">Government &amp; Organizations</option>
			<option value="Government &amp; Organizations -&gt; Local">Government &amp; Organizations -&gt; Local</option>
			<option value="Government &amp; Organizations -&gt; National">Government &amp; Organizations -&gt; National</option>
			<option value="Government &amp; Organizations -&gt; Non-Profit">Government &amp; Organizations -&gt; Non-Profit</option>
			<option value="Government &amp; Organizations -&gt; Regional">Government &amp; Organizations -&gt; Regional</option>								
			<option value="Health">Health</option>
			<option value="Health -&gt; Alternative Health">Health -&gt; Alternative Health</option>
			<option value="Health -&gt; Fitness &amp; Nutrition">Health -&gt; Fitness &amp; Nutrition</option>
			<option value="Health -&gt; Self-Help">Health -&gt; Self-Help</option>
			<option value="Health -&gt; Sexuality">Health -&gt; Sexuality</option>
			<option value="Kids &amp; Family">Kids &amp; Family</option>									
			<option value="Music">Music</option>
			<option value="News &amp; Politics">News &amp; Politics</option>
			<option value="Religion &amp; Spirituality">Religion &amp; Spirituality</option>
			<option value="Religion &amp; Spirituality -&gt; Buddhism">Religion &amp; Spirituality -&gt; Buddhism</option>
			<option value="Religion &amp; Spirituality -&gt; Christianity">Religion &amp; Spirituality -&gt; Christianity</option>
			<option value="Religion &amp; Spirituality -&gt; Hinduism">Religion &amp; Spirituality -&gt; Hinduism</option>
			<option value="Religion &amp; Spirituality -&gt; Islam">Religion &amp; Spirituality -&gt; Islam</option>
			<option value="Religion &amp; Spirituality -&gt; Judaism">Religion &amp; Spirituality -&gt; Judaism</option>
			<option value="Religion &amp; Spirituality -&gt; Other">Religion &amp; Spirituality -&gt; Other</option>
			<option value="Religion &amp; Spirituality -&gt; Spirituality">Religion &amp; Spirituality -&gt; Spirituality</option>
			<option value="Science &amp; Medicine">Science &amp; Medicine</option>
			<option value="Science &amp; Medicine -&gt; Medicine">Science &amp; Medicine -&gt; Medicine</option>
			<option value="Science &amp; Medicine -&gt; Natural Sciences">Science &amp; Medicine -&gt; Natural Sciences</option>
			<option value="Science &amp; Medicine -&gt; Social Sciences">Science &amp; Medicine -&gt; Social Sciences</option>
			<option value="Society &amp; Culture">Society &amp; Culture</option>
			<option value="Society &amp; Culture -&gt; History">Society &amp; Culture -&gt; History</option>			
			<option value="Society &amp; Culture -&gt; Personal Journals">Society &amp; Culture -&gt; Personal Journals</option>
			<option value="Society &amp; Culture -&gt; Philosophy">Society &amp; Culture -&gt; Philosophy</option>
			<option value="Society &amp; Culture -&gt; Places &amp; Travel">Society &amp; Culture -&gt; Places &amp; Travel</option>
			<option value="Sports &amp; Recreation">Sports &amp; Recreation</option>
			<option value="Sports &amp; Recreation -&gt; Amateur">Sports &amp; Recreation -&gt; Amateur</option>
			<option value="Sports &amp; Recreation -&gt; College &amp; High School">Sports &amp; Recreation -&gt; College &amp; High School</option>
			<option value="Sports &amp; Recreation -&gt; Outdoor">Sports &amp; Recreation -&gt; Outdoor</option>
			<option value="Sports &amp; Recreation -&gt; Professional">Sports &amp; Recreation -&gt; Professional</option>
			<option value="Technology">Technology</option>
			<option value="Technology -&gt; Gadgets">Technology -&gt; Gadgets</option>
			<option value="Technology -&gt; Tech News">Technology -&gt; Tech News</option>
			<option value="Technology -&gt; Podcasting">Technology -&gt; Podcasting</option>
			<option value="Technology -&gt; Software How-To">Technology -&gt; Software How-To</option>
			<option value="TV &amp; Film">TV &amp; Film</option>		
		</select>
		<br>
		<select class="wmfg_select" name="category-two" id="category">
			<option value="">--more--</option>
			<option value="Arts">Arts</option>
			<option value="Arts -&gt; Design">Arts -&gt; Design</option>
			<option value="Arts -&gt; Fashion &amp; Beauty">Arts -&gt; Fashion &amp; Beauty</option>
			<option value="Arts -&gt; Food">Arts -&gt; Food</option>
			<option value="Arts -&gt; Literature">Arts -&gt; Literature</option>
			<option value="Arts -&gt; Performing Arts">Arts -&gt; Performing Arts</option>
			<option value="Arts -&gt; Visual Arts">Arts -&gt; Visual Arts</option>
			<option value="Business">Business</option>
			<option value="Business -&gt; Business News">Business -&gt; Business News</option>
			<option value="Business -&gt; Careers">Business -&gt; Careers</option>
			<option value="Business -&gt; Investing">Business -&gt; Investing</option>
			<option value="Business -&gt; Management &amp; Marketing">Business -&gt; Management &amp; Marketing</option>
			<option value="Business -&gt; Shopping">Business -&gt; Shopping</option>
			<option value="Comedy">Comedy</option>
			<option value="Education">Education</option>
			<option value="Education -&gt; Education Technology">Education -&gt; Education Technology</option>
			<option value="Education -&gt; Higher Education">Education -&gt; Higher Education</option>
			<option value="Education -&gt; K-12">Education -&gt; K-12</option>
			<option value="Education -&gt; Language Courses">Education -&gt; Language Courses</option>
			<option value="Education -&gt; Training">Education -&gt; Training</option>
			<option value="Games &amp; Hobbies">Games &amp; Hobbies</option>
			<option value="Games &amp; Hobbies -&gt; Automotive">Games &amp; Hobbies -&gt; Automotive</option>
			<option value="Games &amp; Hobbies -&gt; Aviation">Games &amp; Hobbies -&gt; Aviation</option>
			<option value="Games &amp; Hobbies -&gt; Hobbies">Games &amp; Hobbies -&gt; Hobbies</option>
			<option value="Games &amp; Hobbies -&gt; Other Games">Games &amp; Hobbies -&gt; Other Games</option>
			<option value="Games &amp; Hobbies -&gt; Video Games">Games &amp; Hobbies -&gt; Video Games</option>		
			<option value="Government &amp; Organizations">Government &amp; Organizations</option>
			<option value="Government &amp; Organizations -&gt; Local">Government &amp; Organizations -&gt; Local</option>
			<option value="Government &amp; Organizations -&gt; National">Government &amp; Organizations -&gt; National</option>
			<option value="Government &amp; Organizations -&gt; Non-Profit">Government &amp; Organizations -&gt; Non-Profit</option>
			<option value="Government &amp; Organizations -&gt; Regional">Government &amp; Organizations -&gt; Regional</option>								
			<option value="Health">Health</option>
			<option value="Health -&gt; Alternative Health">Health -&gt; Alternative Health</option>
			<option value="Health -&gt; Fitness &amp; Nutrition">Health -&gt; Fitness &amp; Nutrition</option>
			<option value="Health -&gt; Self-Help">Health -&gt; Self-Help</option>
			<option value="Health -&gt; Sexuality">Health -&gt; Sexuality</option>
			<option value="Kids &amp; Family">Kids &amp; Family</option>									
			<option value="Music">Music</option>
			<option value="News &amp; Politics">News &amp; Politics</option>
			<option value="Religion &amp; Spirituality">Religion &amp; Spirituality</option>
			<option value="Religion &amp; Spirituality -&gt; Buddhism">Religion &amp; Spirituality -&gt; Buddhism</option>
			<option value="Religion &amp; Spirituality -&gt; Christianity">Religion &amp; Spirituality -&gt; Christianity</option>
			<option value="Religion &amp; Spirituality -&gt; Hinduism">Religion &amp; Spirituality -&gt; Hinduism</option>
			<option value="Religion &amp; Spirituality -&gt; Islam">Religion &amp; Spirituality -&gt; Islam</option>
			<option value="Religion &amp; Spirituality -&gt; Judaism">Religion &amp; Spirituality -&gt; Judaism</option>
			<option value="Religion &amp; Spirituality -&gt; Other">Religion &amp; Spirituality -&gt; Other</option>
			<option value="Religion &amp; Spirituality -&gt; Spirituality">Religion &amp; Spirituality -&gt; Spirituality</option>
			<option value="Science &amp; Medicine">Science &amp; Medicine</option>
			<option value="Science &amp; Medicine -&gt; Medicine">Science &amp; Medicine -&gt; Medicine</option>
			<option value="Science &amp; Medicine -&gt; Natural Sciences">Science &amp; Medicine -&gt; Natural Sciences</option>
			<option value="Science &amp; Medicine -&gt; Social Sciences">Science &amp; Medicine -&gt; Social Sciences</option>
			<option value="Society &amp; Culture">Society &amp; Culture</option>
			<option value="Society &amp; Culture -&gt; History">Society &amp; Culture -&gt; History</option>			
			<option value="Society &amp; Culture -&gt; Personal Journals">Society &amp; Culture -&gt; Personal Journals</option>
			<option value="Society &amp; Culture -&gt; Philosophy">Society &amp; Culture -&gt; Philosophy</option>
			<option value="Society &amp; Culture -&gt; Places &amp; Travel">Society &amp; Culture -&gt; Places &amp; Travel</option>
			<option value="Sports &amp; Recreation">Sports &amp; Recreation</option>
			<option value="Sports &amp; Recreation -&gt; Amateur">Sports &amp; Recreation -&gt; Amateur</option>
			<option value="Sports &amp; Recreation -&gt; College &amp; High School">Sports &amp; Recreation -&gt; College &amp; High School</option>
			<option value="Sports &amp; Recreation -&gt; Outdoor">Sports &amp; Recreation -&gt; Outdoor</option>
			<option value="Sports &amp; Recreation -&gt; Professional">Sports &amp; Recreation -&gt; Professional</option>
			<option value="Technology">Technology</option>
			<option value="Technology -&gt; Gadgets">Technology -&gt; Gadgets</option>
			<option value="Technology -&gt; Tech News">Technology -&gt; Tech News</option>
			<option value="Technology -&gt; Podcasting">Technology -&gt; Podcasting</option>
			<option value="Technology -&gt; Software How-To">Technology -&gt; Software How-To</option>
			<option value="TV &amp; Film">TV &amp; Film</option>		
		</select>
		<br>
		<select class="wmfg_select" name="category-more" id="category">
			<option value="">--more--</option>
			<option value="Arts">Arts</option>
			<option value="Arts -&gt; Design">Arts -&gt; Design</option>
			<option value="Arts -&gt; Fashion &amp; Beauty">Arts -&gt; Fashion &amp; Beauty</option>
			<option value="Arts -&gt; Food">Arts -&gt; Food</option>
			<option value="Arts -&gt; Literature">Arts -&gt; Literature</option>
			<option value="Arts -&gt; Performing Arts">Arts -&gt; Performing Arts</option>
			<option value="Arts -&gt; Visual Arts">Arts -&gt; Visual Arts</option>
			<option value="Business">Business</option>
			<option value="Business -&gt; Business News">Business -&gt; Business News</option>
			<option value="Business -&gt; Careers">Business -&gt; Careers</option>
			<option value="Business -&gt; Investing">Business -&gt; Investing</option>
			<option value="Business -&gt; Management &amp; Marketing">Business -&gt; Management &amp; Marketing</option>
			<option value="Business -&gt; Shopping">Business -&gt; Shopping</option>
			<option value="Comedy">Comedy</option>
			<option value="Education">Education</option>
			<option value="Education -&gt; Education Technology">Education -&gt; Education Technology</option>
			<option value="Education -&gt; Higher Education">Education -&gt; Higher Education</option>
			<option value="Education -&gt; K-12">Education -&gt; K-12</option>
			<option value="Education -&gt; Language Courses">Education -&gt; Language Courses</option>
			<option value="Education -&gt; Training">Education -&gt; Training</option>
			<option value="Games &amp; Hobbies">Games &amp; Hobbies</option>
			<option value="Games &amp; Hobbies -&gt; Automotive">Games &amp; Hobbies -&gt; Automotive</option>
			<option value="Games &amp; Hobbies -&gt; Aviation">Games &amp; Hobbies -&gt; Aviation</option>
			<option value="Games &amp; Hobbies -&gt; Hobbies">Games &amp; Hobbies -&gt; Hobbies</option>
			<option value="Games &amp; Hobbies -&gt; Other Games">Games &amp; Hobbies -&gt; Other Games</option>
			<option value="Games &amp; Hobbies -&gt; Video Games">Games &amp; Hobbies -&gt; Video Games</option>		
			<option value="Government &amp; Organizations">Government &amp; Organizations</option>
			<option value="Government &amp; Organizations -&gt; Local">Government &amp; Organizations -&gt; Local</option>
			<option value="Government &amp; Organizations -&gt; National">Government &amp; Organizations -&gt; National</option>
			<option value="Government &amp; Organizations -&gt; Non-Profit">Government &amp; Organizations -&gt; Non-Profit</option>
			<option value="Government &amp; Organizations -&gt; Regional">Government &amp; Organizations -&gt; Regional</option>								
			<option value="Health">Health</option>
			<option value="Health -&gt; Alternative Health">Health -&gt; Alternative Health</option>
			<option value="Health -&gt; Fitness &amp; Nutrition">Health -&gt; Fitness &amp; Nutrition</option>
			<option value="Health -&gt; Self-Help">Health -&gt; Self-Help</option>
			<option value="Health -&gt; Sexuality">Health -&gt; Sexuality</option>
			<option value="Kids &amp; Family">Kids &amp; Family</option>									
			<option value="Music">Music</option>
			<option value="News &amp; Politics">News &amp; Politics</option>
			<option value="Religion &amp; Spirituality">Religion &amp; Spirituality</option>
			<option value="Religion &amp; Spirituality -&gt; Buddhism">Religion &amp; Spirituality -&gt; Buddhism</option>
			<option value="Religion &amp; Spirituality -&gt; Christianity">Religion &amp; Spirituality -&gt; Christianity</option>
			<option value="Religion &amp; Spirituality -&gt; Hinduism">Religion &amp; Spirituality -&gt; Hinduism</option>
			<option value="Religion &amp; Spirituality -&gt; Islam">Religion &amp; Spirituality -&gt; Islam</option>
			<option value="Religion &amp; Spirituality -&gt; Judaism">Religion &amp; Spirituality -&gt; Judaism</option>
			<option value="Religion &amp; Spirituality -&gt; Other">Religion &amp; Spirituality -&gt; Other</option>
			<option value="Religion &amp; Spirituality -&gt; Spirituality">Religion &amp; Spirituality -&gt; Spirituality</option>
			<option value="Science &amp; Medicine">Science &amp; Medicine</option>
			<option value="Science &amp; Medicine -&gt; Medicine">Science &amp; Medicine -&gt; Medicine</option>
			<option value="Science &amp; Medicine -&gt; Natural Sciences">Science &amp; Medicine -&gt; Natural Sciences</option>
			<option value="Science &amp; Medicine -&gt; Social Sciences">Science &amp; Medicine -&gt; Social Sciences</option>
			<option value="Society &amp; Culture">Society &amp; Culture</option>
			<option value="Society &amp; Culture -&gt; History">Society &amp; Culture -&gt; History</option>			
			<option value="Society &amp; Culture -&gt; Personal Journals">Society &amp; Culture -&gt; Personal Journals</option>
			<option value="Society &amp; Culture -&gt; Philosophy">Society &amp; Culture -&gt; Philosophy</option>
			<option value="Society &amp; Culture -&gt; Places &amp; Travel">Society &amp; Culture -&gt; Places &amp; Travel</option>
			<option value="Sports &amp; Recreation">Sports &amp; Recreation</option>
			<option value="Sports &amp; Recreation -&gt; Amateur">Sports &amp; Recreation -&gt; Amateur</option>
			<option value="Sports &amp; Recreation -&gt; College &amp; High School">Sports &amp; Recreation -&gt; College &amp; High School</option>
			<option value="Sports &amp; Recreation -&gt; Outdoor">Sports &amp; Recreation -&gt; Outdoor</option>
			<option value="Sports &amp; Recreation -&gt; Professional">Sports &amp; Recreation -&gt; Professional</option>
			<option value="Technology">Technology</option>
			<option value="Technology -&gt; Gadgets">Technology -&gt; Gadgets</option>
			<option value="Technology -&gt; Tech News">Technology -&gt; Tech News</option>
			<option value="Technology -&gt; Podcasting">Technology -&gt; Podcasting</option>
			<option value="Technology -&gt; Software How-To">Technology -&gt; Software How-To</option>
			<option value="TV &amp; Film">TV &amp; Film</option>		
		</select>
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label" for="explicit">Explicit</label>
		<input type="text" class="wmfg_text" name="explicit" id="explicit" value="no" />
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label" for="language">Language</label>
		<select class="wmfg_select" name="language" id="language">
			<option value="">Please choose ...</option>
			<option value="af">Afrikaans</option>
			<option value="af-ZA">Afrikaans - South Africa</option>
			<option value="sq">Albanian</option>
			<option value="sq-AL">Albanian - Albania</option>
											<option value="ar">Arabic</option>
											<option value="ar-DZ">Arabic - Algeria</option>
											<option value="ar-BH">Arabic - Bahrain</option>
											<option value="ar-EG">Arabic - Egypt</option>
											<option value="ar-IQ">Arabic - Iraq</option>
											<option value="ar-JO">Arabic - Jordan</option>
											<option value="ar-KW">Arabic - Kuwait</option>
											<option value="ar-LB">Arabic - Lebanon</option>
											<option value="ar-LY">Arabic - Libya</option>
											<option value="ar-MA">Arabic - Morocco</option>
											<option value="ar-OM">Arabic - Oman</option>
											<option value="ar-QA">Arabic - Qatar</option>
											<option value="ar-SA">Arabic - Saudi Arabia</option>
											<option value="ar-SY">Arabic - Syria</option>
											<option value="ar-TN">Arabic - Tunisia</option>
											<option value="ar-AE">Arabic - United Arab Emirates</option>
											<option value="ar-YE">Arabic - Yemen</option>
											<option value="hy">Armenian</option>
											<option value="hy-AM">Armenian - Armenia</option>
											<option value="az">Azeri</option>
											<option value="az-AZ-Cyrl">Azeri (Cyrillic) - Azerbaijan</option>
											<option value="az-AZ-Latn">Azeri (Latin) - Azerbaijan</option>
											<option value="eu">Basque</option>
											<option value="eu-ES">Basque - Basque</option>
											<option value="be">Belarusian</option>
											<option value="be-BY">Belarusian - Belarus</option>
											<option value="bg">Bulgarian</option>
											<option value="bg-BG">Bulgarian - Bulgaria</option>
											<option value="ca">Catalan</option>
											<option value="ca-ES">Catalan - Catalan</option>
											<option value="zh-CHS">Chinese (Simplified)</option>
											<option value="zh-CHT">Chinese (Traditional)</option>
											<option value="zh-CN">Chinese - China</option>
											<option value="zh-HK">Chinese - Hong Kong SAR</option>
											<option value="zh-MO">Chinese - Macao SAR</option>
											<option value="zh-SG">Chinese - Singapore</option>
											<option value="zh-TW">Chinese - Taiwan</option>
											<option value="hr">Croatian</option>
											<option value="hr-HR">Croatian - Croatia</option>
											<option value="cs">Czech</option>
											<option value="cs-CZ">Czech - Czech Republic</option>
											<option value="da">Danish</option>
											<option value="da-DK">Danish - Denmark</option>
											<option value="div">Dhivehi</option>
											<option value="div-MV">Dhivehi - Maldives</option>
											<option value="nl">Dutch</option>
											<option value="nl-BE">Dutch - Belgium</option>
											<option value="nl-NL">Dutch - The Netherlands</option>
											<option value="en">English</option>
											<option value="en-AU">English - Australia</option>
											<option value="en-BZ">English - Belize</option>
											<option value="en-CA">English - Canada</option>
											<option value="en-CB">English - Caribbean</option>
											<option value="en-IE">English - Ireland</option>
											<option value="en-JM">English - Jamaica</option>
											<option value="en-NZ">English - New Zealand</option>
											<option value="en-PH">English - Philippines</option>
											<option value="en-ZA">English - South Africa</option>
											<option value="en-TT">English - Trinidad and Tobago</option>
											<option value="en-GB">English - United Kingdom</option>
											<option value="en-US">English - United States</option>
											<option value="en-ZW">English - Zimbabwe</option>
											<option value="et">Estonian</option>
											<option value="et-EE">Estonian - Estonia</option>
											<option value="fo">Faroese</option>
											<option value="fo-FO">Faroese - Faroe Islands</option>
											<option value="fa">Farsi</option>
											<option value="fa-IR">Farsi - Iran</option>
											<option value="fi">Finnish</option>
											<option value="fi-FI">Finnish - Finland</option>
											<option value="fr">French</option>
											<option value="fr-BE">French - Belgium</option>
											<option value="fr-CA">French - Canada</option>
											<option value="fr-FR">French - France</option>
											<option value="fr-LU">French - Luxembourg</option>
											<option value="fr-MC">French - Monaco</option>
											<option value="fr-CH">French - Switzerland</option>
											<option value="gl">Galician</option>
											<option value="gl-ES">Galician - Galician</option>
											<option value="ka">Georgian</option>
											<option value="ka-GE">Georgian - Georgia</option>
											<option value="de">German</option>
											<option value="de-AT">German - Austria</option>
											<option value="de-DE" selected="selected">German - Germany</option>
											<option value="de-LI">German - Liechtenstein</option>
											<option value="de-LU">German - Luxembourg</option>
											<option value="de-CH">German - Switzerland</option>
											<option value="el">Greek</option>
											<option value="el-GR">Greek - Greece</option>
											<option value="gu">Gujarati</option>
											<option value="gu-IN">Gujarati - India</option>
											<option value="he">Hebrew</option>
											<option value="he-IL">Hebrew - Israel</option>
											<option value="hi">Hindi</option>
											<option value="hi-IN">Hindi - India</option>
											<option value="hu">Hungarian</option>
											<option value="hu-HU">Hungarian - Hungary</option>
											<option value="is">Icelandic</option>
											<option value="is-IS">Icelandic - Iceland</option>
											<option value="id">Indonesian</option>
											<option value="id-ID">Indonesian - Indonesia</option>
											<option value="it">Italian</option>
											<option value="it-IT">Italian - Italy</option>
											<option value="it-CH">Italian - Switzerland</option>
											<option value="ja">Japanese</option>
											<option value="ja-JP">Japanese - Japan</option>
											<option value="kn">Kannada</option>
											<option value="kn-IN">Kannada - India</option>
											<option value="kk">Kazakh</option>
											<option value="kk-KZ">Kazakh - Kazakhstan</option>
											<option value="kok">Konkani</option>
											<option value="kok-IN">Konkani - India</option>
											<option value="ko">Korean</option>
											<option value="ko-KR">Korean - Korea</option>
											<option value="ky">Kyrgyz</option>
											<option value="ky-KG">Kyrgyz - Kyrgyzstan</option>
											<option value="lv">Latvian</option>
											<option value="lv-LV">Latvian - Latvia</option>
											<option value="lt">Lithuanian</option>
											<option value="lt-LT">Lithuanian - Lithuania</option>
											<option value="mk">Macedonian</option>
											<option value="mk-MK">Macedonian - Former Yugoslav Republic of Macedonia</option>
											<option value="ms">Malay</option>
											<option value="ms-BN">Malay - Brunei</option>
											<option value="ms-MY">Malay - Malaysia</option>
											<option value="mr">Marathi</option>
											<option value="mr-IN">Marathi - India</option>
											<option value="mn">Mongolian</option>
											<option value="mn-MN">Mongolian - Mongolia</option>
											<option value="no">Norwegian</option>
											<option value="nb-NO">Norwegian (Bokm�l) - Norway</option>
											<option value="nn-NO">Norwegian (Nynorsk) - Norway</option>
											<option value="pl">Polish</option>
											<option value="pl-PL">Polish - Poland</option>
											<option value="pt">Portuguese</option>
											<option value="pt-BR">Portuguese - Brazil</option>
											<option value="pt-PT">Portuguese - Portugal</option>
											<option value="pa">Punjabi</option>
											<option value="pa-IN">Punjabi - India</option>
											<option value="ro">Romanian</option>
											<option value="ro-RO">Romanian - Romania</option>
											<option value="ru">Russian</option>
											<option value="ru-RU">Russian - Russia</option>
											<option value="sa">Sanskrit</option>
											<option value="sa-IN">Sanskrit - India</option>
											<option value="sr-SP-Cyrl">Serbian (Cyrillic) - Serbia</option>
											<option value="sr-SP-Latn">Serbian (Latin) - Serbia</option>
											<option value="sk">Slovak</option>
											<option value="sk-SK">Slovak - Slovakia</option>
											<option value="sl">Slovenian</option>
											<option value="sl-SI">Slovenian - Slovenia</option>
											<option value="es">Spanish</option>
											<option value="es-AR">Spanish - Argentina</option>
											<option value="es-BO">Spanish - Bolivia</option>
											<option value="es-CL">Spanish - Chile</option>
											<option value="es-CO">Spanish - Colombia</option>
											<option value="es-CR">Spanish - Costa Rica</option>
											<option value="es-DO">Spanish - Dominican Republic</option>
											<option value="es-EC">Spanish - Ecuador</option>
											<option value="es-SV">Spanish - El Salvador</option>
											<option value="es-GT">Spanish - Guatemala</option>
											<option value="es-HN">Spanish - Honduras</option>
											<option value="es-MX">Spanish - Mexico</option>
											<option value="es-NI">Spanish - Nicaragua</option>
											<option value="es-PA">Spanish - Panama</option>
											<option value="es-PY">Spanish - Paraguay</option>
											<option value="es-PE">Spanish - Peru</option>
											<option value="es-PR">Spanish - Puerto Rico</option>
											<option value="es-ES">Spanish - Spain</option>
											<option value="es-UY">Spanish - Uruguay</option>
											<option value="es-VE">Spanish - Venezuela</option>
											<option value="sw">Swahili</option>
											<option value="sw-KE">Swahili - Kenya</option>
											<option value="sv">Swedish</option>
											<option value="sv-FI">Swedish - Finland</option>
											<option value="sv-SE">Swedish - Sweden</option>
											<option value="syr">Syriac</option>
											<option value="syr-SY">Syriac - Syria</option>
											<option value="ta">Tamil</option>
											<option value="ta-IN">Tamil - India</option>
											<option value="tt">Tatar</option>
											<option value="tt-RU">Tatar - Russia</option>
											<option value="te">Telugu</option>
											<option value="te-IN">Telugu - India</option>
											<option value="th">Thai</option>
											<option value="th-TH">Thai - Thailand</option>
											<option value="tr">Turkish</option>
											<option value="tr-TR">Turkish - Turkey</option>
											<option value="uk">Ukrainian</option>
											<option value="uk-UA">Ukrainian - Ukraine</option>
											<option value="ur">Urdu</option>
											<option value="ur-PK">Urdu - Pakistan</option>
											<option value="uz">Uzbek</option>
											<option value="uz-UZ-Cyrl">Uzbek (Cyrillic) - Uzbekistan</option>
											<option value="uz-UZ-Latn">Uzbek (Latin) - Uzbekistan</option>
											<option value="vi">Vietnamese</option>
					</select>
		
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label" for="licensename">Licensename</label>
		<input type="text" class="wmfg_text" name="licensename" id="licensename" value="CC BY-SA 3.0" />
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label" for="licenseurl">License URL</label>
		<input type="text" class="wmfg_text" name="licenseurl" id="licenseurl" value="http://creativecommons.org/licenses/by-sa/3.0/de/" />
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label">Formats</label>
		<table class="wmfg_answers">
			<tr class="wmfg_a">
				<td class="wmfg_a_td"><input type="checkbox" class="wmfg_checkbox" name="mp3" id="mp3" value="mp3" /></td>
				<td><label class="wmfg_label_a" for="mp3">mp3</label></td>
			</tr>
			<tr class="wmfg_a">
				<td class="wmfg_a_td"><input type="checkbox" class="wmfg_checkbox" name="torrent" id="torrent" value="torrent" /></td>
				<td><label class="wmfg_label_a" for="torrent">torrent</label></td>
			</tr>
			<tr class="wmfg_a">
				<td class="wmfg_a_td"><input type="checkbox" class="wmfg_checkbox" name="mpg" id="mpg" value="mpg" /></td>
				<td><label class="wmfg_label_a" for="mpg">mpg</label></td>
			</tr>
			<tr class="wmfg_a">
				<td class="wmfg_a_td"><input type="checkbox" class="wmfg_checkbox" name="m4a" id="m4a" value="m4a" /></td>
				<td><label class="wmfg_label_a" for="m4a">m4a</label></td>
			</tr>
			<tr class="wmfg_a">
				<td class="wmfg_a_td"><input type="checkbox" class="wmfg_checkbox" name="m4v" id="m4v" value="m4v" /></td>
				<td><label class="wmfg_label_a" for="m4v">m4v</label></td>
			</tr>
			<tr class="wmfg_a">
				<td class="wmfg_a_td"><input type="checkbox" class="wmfg_checkbox" name="oga" id="oga" value="oga" /></td>
				<td><label class="wmfg_label_a" for="oga">oga</label></td>
			</tr>
			<tr class="wmfg_a">
				<td class="wmfg_a_td"><input type="checkbox" class="wmfg_checkbox" name="ogg" id="ogg" value="ogg" /></td>
				<td><label class="wmfg_label_a" for="ogg">ogg</label></td>
			</tr>
			<tr class="wmfg_a">
				<td class="wmfg_a_td"><input type="checkbox" class="wmfg_checkbox" name="ogv" id="ogv" value="ogv" /></td>
				<td><label class="wmfg_label_a" for="ogv">ogv</label></td>
			</tr>
			<tr class="wmfg_a">
				<td class="wmfg_a_td"><input type="checkbox" class="wmfg_checkbox" name="webm" id="webm" value="webm" /></td>
				<td><label class="wmfg_label_a" for="webm">webm</label></td>
			</tr>
			<tr class="wmfg_a">
				<td class="wmfg_a_td"><input type="checkbox" class="wmfg_checkbox" name="flac" id="flac" value="flac" /></td>
				<td><label class="wmfg_label_a" for="flac">flac</label></td>
			</tr>
			<tr class="wmfg_a">
				<td class="wmfg_a_td"><input type="checkbox" class="wmfg_checkbox" name="opus" id="opus" value="opus" /></td>
				<td><label class="wmfg_label_a" for="opus">opus</label></td>
			</tr>
			<tr class="wmfg_a">
				<td class="wmfg_a_td"><input type="checkbox" class="wmfg_checkbox" name="mka" id="mka" value="mka" /></td>
				<td><label class="wmfg_label_a" for="mka">mka</label></td>
			</tr>
			<tr class="wmfg_a">
				<td class="wmfg_a_td"><input type="checkbox" class="wmfg_checkbox" name="mkv" id="mkv" value="mkv" /></td>
				<td><label class="wmfg_label_a" for="mkv">mkv</label></td>
			</tr>
			<tr class="wmfg_a">
				<td class="wmfg_a_td"><input type="checkbox" class="wmfg_checkbox" name="pdf" id="pdf" value="pdf" /></td>
				<td><label class="wmfg_label_a" for="pdf">pdf</label></td>
			</tr>
			<tr class="wmfg_a">
				<td class="wmfg_a_td"><input type="checkbox" class="wmfg_checkbox" name="epub" id="epub" value="epub" /></td>
				<td><label class="wmfg_label_a" for="epub">epub</label></td>
			</tr>
			<tr class="wmfg_a">
				<td class="wmfg_a_td"><input type="checkbox" class="wmfg_checkbox" name="png" id="png" value="png" /></td>
				<td><label class="wmfg_label_a" for="png">png</label></td>
			</tr>
			<tr class="wmfg_a">
				<td class="wmfg_a_td"><input type="checkbox" class="wmfg_checkbox" name="jpg" id="jpg" value="jpg" /></td>
				<td><label class="wmfg_label_a" for="jpg">jpg</label></td>
			</tr>
		</table>
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label" for="disqus">Comments about Disqus id name</label>
		<input type="text" class="wmfg_text" name="disqus" id="disqus" value="" />
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label" for="flattrid">Micropayment about Flattr</label>
		<input type="text" class="wmfg_text" name="flattrid" id="flattrid" value="" />
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label" for="twitter">Social: Twitter</label>
		<input type="text" class="wmfg_text" name="twitter" id="twitter" value="" />
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label" for="adn">Social: App.Net</label>
		<input type="text" class="wmfg_text" name="adn" id="adn" value="" />
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label" for="color">Webplayer color</label>
		<input type="text" class="wmfg_text" name="color" id="color" value="#a00" />
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label" for="dark">Link and dark color</label>
		<input type="text" class="wmfg_text" name="dark" id="dark" value="#C70606" />
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label" for="light">Light and chapters in focus color</label>
		<input type="text" class="wmfg_text" name="light" id="light" value="#FFE3DF" />
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label" for="header">Heading color</label>
		<input type="text" class="wmfg_text" name="header" id="header" value="#500" />
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label" for="background">Page background</label>
		<textarea class="wmfg_textarea" name="background" id="background" style="height:80px">url('http://domain.tld/bg-image.jpg') top center repeat transparent;</textarea>
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label" for="jumbotron">Jumbotron background</label>
		<textarea class="wmfg_textarea" name="jumbotron" id="jumbotron" style="height:80px">url('http://domain.tld/image.jpg') top center repeat transparent;</textarea>
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label" for="jumbocolor">Jumbo color</label>
		<input type="text" class="wmfg_text" name="jumbocolor" id="jumbocolor" value="#fff" />
	</li>

	<li class="wmfg_q">
		<input type="submit" class="wmfg_btn" name="Submit" id="submit" value="Datei erstellen" />
	</li>

</ul>

</form>

</div>