<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>mynote</title>
		<meta name="description" content="">
		<meta name="author" content="lf">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="stylesheet" href="style-note.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<!-- <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script> -->
	</head>

	<body onload="showCategories();">
		<script type="text/javascript">
		
		
			// function authentication(){
				// var loginAndPassword = [document.getElementById("login_input").value, document.getElementById("password_input").value];
// 				
				// var loginsAndPasswordsFromDb = <?php
						// mysql_connect(localhost, "lf", "mitka");
						// mysql_select_db("db_note");
						// print "[";
						// $result = mysql_query("SELECT login, password FROM users WHERE login = ' loginAndPassword[];");
						// if ($row = mysql_fetch_array($result)) {
							// print "[";
							// print $row["login"];
							// print ", '";	
							// print $row["password"];
							// print "']";
// 							
							// if ($row = mysql_fetch_array($result)) {
								// do {
									// print ", [";
									// print $row["login"];
									// print ", '";
									// print $row["password"];
									// print "']";
								// } while($row = mysql_fetch_array($result));
							// }
						// } else {
							// print "Sorry, no records were found!";
						// }
						// print "]"; 
					// ?>;
				// for(var i = 0; i < loginsAndPasswordsFromDb.length){
// 					
				// }
			// }
		
			var categories = <?php
						mysql_connect(localhost, "lf", "mitka");
						mysql_select_db("db_note");
						print "[";
						$result = mysql_query("SELECT id, name FROM categories;");
						if ($row = mysql_fetch_array($result)) {
							print "[";
							print $row["id"];
							print ", '";	
							print $row["name"];
							print "']";
							
							if ($row = mysql_fetch_array($result)) {
								do {
									print ", [";
									print $row["id"];
									print ", '";
									print $row["name"];
									print "']";
								} while($row = mysql_fetch_array($result));
							}
						} else {
							print "Sorry, no records were found!";
						}
						print "]"; 
					?>;
			
			// function visibilityOfLabelsForAreas(id, focus){
				// var formName = "addition_form";
				// if (focus == "in"){
					// document.getElementById(id + "_label").className = "hidden_label";
				// }else{
					// if ($.trim(document.forms['addition_form']['code_input'].value) == ""){
						// document.getElementById(id + "_label").className = "";
					// }
				// }
// 				
			// }
// 			
			// function visibilityOfLabels(){
				// document.getElementById(a).onclick = function(){
					// $('')
				// }
			// }
			// function visibilityOfLabels(id, focus){
				// if (focus == "in"){
					// document.getElementById(id + "_label").className = "hidden_label";
				// }else{
					// if (document.getElementById(id).value == ""){
						// document.getElementById(id + "_label").className = "";
					// }
				// }
// 				
			// }
			
			function showCategories(){
				var listOfCategories = "";
				var listOfCategoriesInDatalist = "";
				for (var i = 0; i < categories.length; i++){
					listOfCategories += "<p onclick='showSubcategories(" + categories[i][0] + ")' class='category'>" + categories[i][1] + "</p>";
					listOfCategoriesInDatalist += "<option value='" + categories[i][1] + "'></option>";
				}
				document.getElementById("list_of_categories").innerHTML = listOfCategories;
				document.getElementById("list_of_categories_in_datalist").innerHTML = listOfCategoriesInDatalist;
			}
			
			function subcategoriesFromJson(data){
				for (var houseIndex in data) {
					var house = data[houseIndex];
//					houses.push(new House(house.id, house.street, house.number, house.map));
					//houses.push(house);
				}
			};
			
			function showSubcategories(categoryId){
				$('#list_of_subcategories').remove();
				$('#list_of_categories').after('<div id="list_of_subcategories"></div>');
				var listOfSubcategories = "<p class='category'>jdfhjfh</p><p class='category'>jdfhjfh</p>"
				document.getElementById("list_of_subcategories").innerHTML = listOfSubcategories;
				$('#list_of_subcategories').animate({
					'opacity': '1'
				}, "slow")
				// $.ajax({
					// url: "getSubcategoriesList.php?category_id=" + categoryId,
					// type: 'GET',
					// dataType: 'json',
					// success: subcategoriesFromJson,
					// error: function(error) {console.log(error);}
				// });
				//$.getJSON("getSubcategoriesList.php?category_id=" + categoryId, subcategoriesFromJson);
				//var subcategories = 
						// print "[";
						// $result = mysql_query("SELECT category_id, name FROM subcategories WHERE category_id = ;");
						// if ($row = mysql_fetch_array($result)) {
							// print "'";	
							// print $row["name"];
							// print "'";
							// if ($row = mysql_fetch_array($result)) {
								// do {
									// print ",'";
									// print $row["name"];
									// print "'";
								// } while($row = mysql_fetch_array($result));
							// }
						// } else {
							// print "Sorry, no records were found!";
						// }
						// print "]"; 
					// ?>;
				// var listOfSubcategories = "";
				// if ()
				// for (var i = 0; i < categories.length; i++) {
					// listOfCategories += "<p onclick='showSubcategories(" + categories[i][0] + ")' class='button'>" + categories[i][1] + "</p><br />";
				// }
				// document.getElementById("list_of_categories").innerHTML = listOfCategories;
			}
			
			// var existenceOfUsers = <?php
			// $login = $_POST["login"];
			// $password = $_POST["password"];
			// $result = mysql_query("SELECT COUNT(*) as cnt FROM users WHERE login='$login' and password='$password';");
// 			
			// ?>;
			
			(function($, undefined){
				$(function(){
					//show subcategories
					var $right_of_menu = parseInt($('#content').css('left')) + parseInt($('#content').css('width')) / 2;
					$('#menu').css({
						'right': $right_of_menu + 'px'
					});
					//authentication validation
					$('form[name=authentication]').submit(function(){
						$(this).find('.error').remove();
						if ($(this).find('input[name=e-mail]').val()==''){
							$(this).find('input[name=e-mail]').before('<div class="error">Enter e-mail</div>');
							return false;
						}
						if ($(this).find('input[name=password]').val()==''){
							$(this).find('input[name=password]').before('<div class="error">Enter password</div>');
							return false;
						}
						$.post(
							$(this).attr('action'),
							$(this).serialize()
						);
						$(this).find('input[name=e-mail]').val("");
						$(this).find('input[name=password]').val("");
						$(this).hide(400);
						return false;
					});
					//registration validation
					$('form[name=registration]').submit(function(){
						$(this).find('.error').remove();
						if ($(this).find('input[name=e-mail]').val()==''){
							$(this).find('input[name=e-mail]').before('<div class="error">Enter e-mail</div>');
							return false;
						}
						if ($(this).find('input[name=password]').val()==''){
							$(this).find('input[name=password]').before('<div class="error">Enter password</div>');
							return false;
						}
						if ($(this).find('input[name=confirm_password]').val()==''){
							$(this).find('input[name=confirm_password]').before('<div class="error">Confirm the password</div>');
							return false;
						}
						$.post(
							$(this).attr('action'),
							$(this).serialize()
						);
						$(this).find('input[name=e-mail]').val("");
						$(this).find('input[name=password]').val("");
						$(this).find('input[name=confirm_password]').val("");
						$(this).hide(400);
						return false;
					});
					//show authentication and registration
					$('#authentication input[type=submit]').hover(function(){
						$('#authentication').animate({
							'top': '30px'
						}, "slow")
						$("#registration").animate({
				      		'top': '-8em'
						}, "slow")
						return false;
					});
					$('#registration input[type=submit]').hover(function(){
						$('#registration').animate({
							'top': '30px'
						}, "slow")
						$("#authentication").animate({
				      		'top': '-5.8em'
						}, "slow")
						return false;
					});
					//disapear of authentication and registration
					$(document).click(function(event) {
				    	if( $(event.target).closest("#registration,#authentication").length ) 
				        	return;
				    	$("#registration").animate({
				      		'top': '-8em'
						}, "fast")
						$("#authentication").animate({
				      		'top': '-5.8em'
						}, "fast")
						event.stopPropagation();
				    });
				    
				    //show the form for adding
				    $('p.add_button').click(function() {
				    	document.getElementById("add_note_popup").style.display = 'inline-block';
				    	document.getElementById("cover").style.display = 'none';
				    	return false;
				    });
					$('p.header').click(function() {
				    	document.getElementById("cover").style.display = 'inline-block';
				    	document.getElementById("add_note_popup").style.display = 'none';
				    	return false;
				    });
				    //when focus on textarea
				    $('input,textarea').focus(function() {
				    	$(this).addClass('focused');
				    	return false;
				    });
				    $('input,textarea').blur(function() {
				    	if ($(this).val()=='') {
				    		$(this).removeClass('focused');
				    	}
				    	return false;
				    });
				    
				});
			})(jQuery);
			
		</script>
		<div id="base">
			<header>
				
				<p class="header">MyNote</p>
				<p class="small_text">not to forget my knowledge</p>
				<p id="add_note" class="add_button">
					Add something
				</p>
			</header>

			<div id="menu">
				<div id="list_of_categories">
				</div>
				<div id="list_of_subcategories">
				</div>
			</div>
			
			
			<div id="content">
				<div id="cover">
					<img src="http://oboibox.ru/orig/Shkolnaya-tetrad%28oboibox.ru%29.jpg"/>
				</div>
				<div id="notes">
					
				</div>
				<!-- <div id="add_note_popup"> -->
					<form id="add_note_popup" method="post" class="input_text" name="addition_form">
						<input id="category_input" type="text" list="list_of_categories_in_datalist" value="" placeholder="category" autocomplete="off"/>
						<datalist id="list_of_categories_in_datalist">
						</datalist>
						<input id="subcategory_input" type="text" value="" placeholder="subcategory" autocomplete="off"
								onfocus="" onblur="" />
						<div>
							<textarea id="code_input" class="code_in_addition" name="code_input" placeholder="code"
								onfocus="" onblur=""></textarea>
							<!-- <label>code</label> -->
						</div>
						<div>
							<textarea id="text_input" class="text_in_addition" name="text_input" placeholder="description"
								onfocus="" onblur=""></textarea>
							<!-- <label>description</label> -->
						</div>
						<div class="center_align">
							<input type="button" class="button" value="Good for you"/>
						</div>
					</form>
				<!-- </div> -->
				<!-- content -->
			</div>
			
			
			
			<div id="authentication" class="" style="">
				<form name="authentication" method="post" action="">
					<input id="login_input" class="" type="text" name="e-mail" value="" autocomplete="off" placeholder="e-mail"
							onfocus="" onblur="">
					<input id="password_input" class="sign" type="text" name="password" value="" autocomplete="off" placeholder="password"
							onfocus="" onblur="">
					<input type="submit" class="button" value="Sign in" onclick="">
				</form>
			</div>
			
			<div id="registration" class="" style="">
				<form name="registration" method="post" action="">
					<input id="login_input" class="" type="text" name="e-mail" value="" autocomplete="off" placeholder="e-mail"
							onfocus="" onblur="">
					<input id="password_input" class="" type="text" name="password" value="" autocomplete="off" placeholder="password"
							onfocus="" onblur="">
					<input id="confirm_password_input" class="" type="text" name="confirm_password" value="" autocomplete="off" placeholder="confirm password"
							onfocus="" onblur="">
					<input type="submit" class="button" value="Sign up" onclick="">
				</form>
			</div>
			
			<!-- <footer>
				<p>
					&copy; Copyright  by lf
				</p>
			</footer> -->
		</div>
	</body>
</html>
