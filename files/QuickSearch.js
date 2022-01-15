	$(document).ready(function(){

		// Shove recent out of the way
		$(".nav-recent").css({ right: '280px' });

		$("#nav-search").append('<div class="nav-quickSearch"><form class="form-search" method="post" action="/search.php"><span class="input-icon"><input type="text" name="search" class="nav-search-input" placeholder="Text Search"><i class="fa fa-search ace-icon nav-search-icon" ></i></span></form></div>');

        });

