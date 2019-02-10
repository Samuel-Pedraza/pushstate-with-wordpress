	function display_data(){
		var get_data = "";

		for(var find_selected = 0; find_selected < display_cat.length; find_selected++){
			if(display_cat[find_selected].checked){

				get_data = display_cat[find_selected].value;
				
				jQuery("#element").html('');

				history.pushState({page: get_data}, "", window.origin + "/" + get_data);

				var data = {
					action: "fetch_categories_post",
					category_slug: get_data
				}

				var information = "";

				jQuery.post(window.location.origin + "/wp-admin/admin-ajax.php", data, function(response){
					response = JSON.parse(response);

					for(var response_iterate = 0; response_iterate < response.length; response_iterate++){
						information += "<a href='/" + get_data + "/" + response[response_iterate].post_name + "'>" + response[response_iterate].post_title + "</a> <br>";
					}

					jQuery("#element").append(information);
				})

		  }
		}
	}


 	var display_cat = document.getElementsByName("display_cat");

 	for(var individual_radio = 0; individual_radio < display_cat.length; individual_radio++){
 		display_cat[individual_radio].addEventListener("click", display_data);
 	}

 	window.addEventListener("load", display_data());