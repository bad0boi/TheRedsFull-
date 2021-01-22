$(document).ready(function () {


    var apiUrl = "https://content.guardianapis.com/search?order-by=newest&use-date=last-modified&show-elements=image&show-fields=thumbnail&q=liverpool%20&api-key=519954fb-6b35-4fd4-8fcd-ab83eee3cc0a"
    var snippetNews = $('#liverpoolCityNews');

    // Call function
    getCityNews(apiUrl);


    function resultTemplate(result) {
        return `
            <div class="row col-md-4">
                <div class="card mb-2">
                    <a href="${result.webUrl}" class="result-img">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">${result.webTitle}</h5>
                        <img src="${result.fields.thumbnail}" class="card-img-top">
                        <div class="result-section">
                            <span>${result.sectionName}</span>
                        </div>
                        <a href="${result.webUrl}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        `;
    }

    function getCityNews(apiUrl) {
        $.ajax({
            url: apiUrl,
            success: function (data) {
                var results = data.response.results;
                results.forEach(function (result) {
                    snippetNews.append(resultTemplate(result));
                });
            }
        });
    }






});
