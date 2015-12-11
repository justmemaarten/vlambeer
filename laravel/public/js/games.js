(function(GB){

    var gunGodz = GB.getGameData('3030-37491')

        .done( function(data) {
            var id = '3030-37491';
            var data = data.results;
            $('#' + id + 'Icon').attr('src', data.image.medium_url);
            console.log(data.image);
            $('#' + id + 'Title').html(data.name);
            $('#' + id + 'Deck').html(data.deck);
            $('#' + id + 'description').html(data.description);
            $('#' + id + 'name').html(data.name);
            $('#' + id + 'genre').html(data.genres);

            console.log(data.genres);
            //$('#game-title').html(data.description);
        });
    var luftrausers = GB.getGameData('3030-39474')
        .done( function(data) {
            var id = '3030-39474';
            var data = data.results;
            $('#' + id + 'Icon').attr('src', data.image.medium_url);
            console.log(data.image);
            $('#' + id + 'Title').html(data.name);
            $('#' + id + 'Deck').html(data.deck);
            $('#' + id + 'description').html(data.description);
            $('#' + id + 'name').html(data.name);
            //console.log(data.name);
            //$('#game-title').html(data.description);
        });

    var nuclearThrone = GB.getGameData('3030-41999')
        .done( function(data) {
            var id = '3030-41999';
            var data = data.results;
            $('#' + id + 'Icon').attr('src', data.image.medium_url);
            console.log(data.image);
            $('#' + id + 'Title').html(data.name);
            $('#' + id + 'Deck').html(data.deck);
            $('#' + id + 'description').html(data.description);
            $('#' + id + 'name').html(data.name);
            //console.log(data.name);
            //$('#game-title').html(data.description);
        });

    var ridiculousFishing = GB.getGameData('3030-40158')
        .done( function(data) {
            var id = '3030-40158';
            var data = data.results;
            $('#' + id + 'Icon').attr('src', data.image.medium_url);
            console.log(data.image);
            $('#' + id + 'Title').html(data.name);
            $('#' + id + 'Deck').html(data.deck);
            $('#' + id + 'description').html(data.description);
            $('#' + id + 'name').html(data.name);
            //console.log(data.name);
            //$('#game-title').html(data.description);
        });

    var seriousSamTheRandomEncounter = GB.getGameData('3030-34402')
        .done( function(data) {
            var id = '3030-34402';
            var data = data.results;
            $('#' + id + 'Icon').attr('src', data.image.medium_url);
            console.log(data.image);
            $('#' + id + 'Title').html(data.name);
            $('#' + id + 'Deck').html(data.deck);
            $('#' + id + 'description').html(data.description);
            $('#' + id + 'name').html(data.name);
            //console.log(data.name);
            //$('#game-title').html(data.description);
        });

    var superBreadBox = GB.getGameData('3030-46090')
        .done( function(data) {
            var id = '3030-46090';
            var data = data.results;
            $('#' + id + 'Icon').attr('src', data.image.medium_url);
            console.log(data.image);
            $('#' + id + 'Title').html(data.name);
            $('#' + id + 'Deck').html(data.deck);
            $('#' + id + 'description').html(data.description);
            $('#' + id + 'name').html(data.name);
            //console.log(data.name);
            //$('#game-title').html(data.description);
        });

    var superCrateBox = GB.getGameData('3030-32945')
        .done( function(data) {
            var id = '3030-32945';
            var data = data.results;
            $('#' + id + 'Icon').attr('src', data.image.medium_url);
            console.log(data.image);
            $('#' + id + 'Title').html(data.name);
            $('#' + id + 'Deck').html(data.deck);
            $('#' + id + 'description').html(data.description);
            $('#' + id + 'name').html(data.name);
            //console.log(data.name);
            //$('#game-title').html(data.description);
        });


})(GiantBomb);
