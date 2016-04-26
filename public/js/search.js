var timer;

function up()
{
	timer = setTimeout(function()
		{
			var keywords = $('#search-input').val();

			if (keywords.length > 0)
			{
				$.post('http://localhost/itms_lecture1/public/search/executeSearch', {keywords: keywords}, function(markup)
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