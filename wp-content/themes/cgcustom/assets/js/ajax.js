jQuery(document).ready(function($) {

    function fetchArticles() {
        var colors = [];
        $('input[name="color"]:checked').each(function() {
            colors.push($(this).val());
        });

        var seasons = [];
        $('input[name="season"]:checked').each(function() {
            seasons.push($(this).val());
        });

        var searchQuery = $('#article-search').val();

        $.ajax({
            url: cgcustom_vars.ajaxurl,
            method: 'POST',
            data: {
                action: 'fetch_filtered_articles',
                colors: colors,
                seasons: seasons,
                search: searchQuery
            },
            success: function(response) {
                $('#articles-grid').html(response);
            }
        });
    }

    // Fetch articles on page load
    fetchArticles();

    // Attach event listeners to filters and search bar
    $('input[name="color"], input[name="season"], #article-search').on('change keyup', function() {
        fetchArticles();
    });

    $('#reset-filters').click(function() {
        $('input[name="color"], input[name="season"]').prop('checked', false);
        $('#article-search').val('');
        fetchArticles();
    });
});
