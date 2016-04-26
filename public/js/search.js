var timer;

function up()
{
	timer = setTimeout(function()
		{
			var keywords = $('#search-input').val();

			
			if (keywords.length > 0)
			{
				//AJAX using jQuery
				//$.post(url, data, success);
				$.post('search/executeSearch', {hinahanap: keywords}, function(markup)
				{
					$('#search-results').html(markup);
				});
			}
			
		}, 500);
}



function down()
{
	clearTimeout(timer);
}