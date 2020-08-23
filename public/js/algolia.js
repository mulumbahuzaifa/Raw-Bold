(function(){
    const client = algoliasearch('D9VDN14TCY', 'eb9703a9746f492b85b3822099362ee5');
    const players = client.initIndex('products');
    var enterPressed = false;
    // const teams = client.initIndex('teams');

    autocomplete(
        '#aa-search-input',
        {
            debug: true,
            templates: {
                dropdownMenu:
                    '<div class="aa-dataset-product"></div>'
                    // +
                    // '<div class="aa-dataset-price"></div>',
            },
        },
        [
            {
                source: autocomplete.sources.hits(players, {hitsPerPage: 10}),
                displayKey: 'name',
                name: 'product',
                templates: {
                    // header: '<div class="aa-suggestions-category">Products</div>',
                    suggestion({_highlightResult}) {
                        return `
                        <div>
                            <span>
                            <img src="${window.location.origin}/${_highlightResult.image}" alt="img" class="algolia-thumb">
                            <strong>${_highlightResult.name.value}</strong></span>
                            <span>${_highlightResult.price.value /100}k</span>
                        </div>
                        <span>${_highlightResult.details.value}</span>
                        `;
                    },
                    empty: '<div class="aa-empty">No matching product</div>',
                },
            },
            // {
            //     source: autocomplete.sources.hits(teams, {hitsPerPage: 5}),
            //     displayKey: 'name',
            //     name: 'team',
            //     templates: {
            //         header: '<div class="aa-suggestions-category">Teams</div>',
            //         suggestion({logoUrl, _highlightResult}) {
            //             return `
            // <img src="${logoUrl}">
            // <div>
            //   <span>${_highlightResult.name.value}</span>
            //   <span>${_highlightResult.location.value}</span>
            // </div>`;
            //         },
            //         empty: '<div class="aa-empty">No matching teams</div>',
            //     },
            // },
        ]
    ).on('autocomplete:selected', function (event, suggestion, dataset) {
            // console.log(suggestion);
        window.location.href = window.location.origin + '/shop/' + suggestion.slug;
        enterPressed = true;
    }).on('keyup', function (event) {
        if(event.keyCode == 13 && !enterPressed){
            window.location.href = window.location.origin
        }
    })

})();
