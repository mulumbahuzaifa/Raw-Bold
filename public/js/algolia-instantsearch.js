(function(){
    const search = instantsearch({
        searchClient: algoliasearch(
            'D9VDN14TCY',
            'eb9703a9746f492b85b3822099362ee5'
        ),
        // appId: 'D9VDN14TCY',
        // apiKey: 'eb9703a9746f492b85b3822099362ee5',
        indexName: 'products',
        routing: true
    });

    // initialize SearchBox
    search.addWidget(
        instantsearch.widgets.searchBox({
            container: '#search-box',
            placeholder: 'Search for products'
        })
    );

    search.addWidget(
        instantsearch.widgets.hits({
            container: '#hits',
            templates: {
                empty: 'No results',
                item: '<em>Hit {{objectID}}</em>: {{{_highlightResult.name.value}}}'
            }
        })
    );

    search.start();

})();
