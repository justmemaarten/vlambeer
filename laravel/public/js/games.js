(function(GB){
    var gunGodz = GB.getGameData('3030-37491')

        .done( function(data) {
            var id = '3030-37491';
            var data = data.results;

            $('.stores').html('<a href="http://vlambeer.com/downloads/special/GUNGODZ.rar" target="_blank">' +
                '<img src="media/img/downloadIcon.png" alt="download" height="40px" width="40px">' +
                '</a>');
            $('#' + id + 'Icon').attr('src', data.image.medium_url);
            $('#' + id + 'Title').html(data.name);
            $('#' + id + 'Deck').html(data.deck);
            $('#' + id + 'description').html(data.description);
            $('#' + id + 'name').html(data.name);
            $('#' + id + 'rating').html(data.original_game_rating);
            $('#' + id + 'original_release_date').html(data.original_release_date);
            for (var i = 0; i < data.people.length; i++ ) {
                if(i == data.people.length -1) {
                    $('#' + id + 'developer').html(data.people[i].name);
                }else{
                    $('#' + id + 'developer').html(data.people[i].name + ", ");
                }
            }
            for (var i = 0; i < data.publishers.length; i++ ) {
                if(i == data.publishers.length -1) {
                    $('#' + id + 'publishers').html(data.publishers[i].name);
                }else {
                    $('#' + id + 'publishers').html(data.publishers[i].name + ", ");
                }
            }
            for (var i = 0; i < data.genres.length; i++ ) {
                if(i == data.genres.length -1) {
                    $('#' + id + 'genres').append(data.genres[i].name);
                }else {
                    $('#' + id + 'genres').append(data.genres[i].name + ", ");
                }
            }
            for (var i = 0; i < data.themes.length; i++ ) {
                if (i == data.themes.length - 1) {
                    $('#' + id + 'themes').append(data.themes[i].name);
                } else {
                    $('#' + id + 'themes').append(data.themes[i].name + ", ");
                }
            }

            for (var i = 0; i < data.platforms.length; i++ ) {
                if(i == data.platforms.length -1) {
                    $('#' + id + 'platform').append(data.platforms[i].name);
                } else{
                    $('#' + id + 'platform').append(data.platforms[i].name + ", ");
                }
            }

        });
    var luftrausers = GB.getGameData('3030-39474')
        .done( function(data) {
            var id = '3030-39474';
            var data = data.results;
            $('#' + id + 'Icon').attr('src', data.image.medium_url);
            $('#' + id + 'Title').html(data.name);
            $('#' + id + 'Deck').html(data.deck);
            $('#' + id + 'description').html(data.description);
            $('#' + id + 'name').html(data.name);
            $('#' + id + 'rating').html(data.original_game_rating);
            $('#' + id + 'original_release_date').html(data.original_release_date);
            for (var i = 0; i < data.people.length; i++ ) {
                if(i == data.people.length -1) {
                    $('#' + id + 'developer').html(data.people[i].name);
                }else{
                    $('#' + id + 'developer').html(data.people[i].name + ", ");
                }
            }
            for (var i = 0; i < data.publishers.length; i++ ) {
                if(i == data.publishers.length -1) {
                    $('#' + id + 'publishers').html(data.publishers[i].name);
                }else {
                    $('#' + id + 'publishers').html(data.publishers[i].name + ", ");
                 }
            }
            for (var i = 0; i < data.genres.length; i++ ) {
                if(i == data.genres.length -1) {
                    $('#' + id + 'genres').append(data.genres[i].name);
                }else {
                    $('#' + id + 'genres').append(data.genres[i].name + ", ");
                }
            }
            for (var i = 0; i < data.themes.length; i++ ) {
                if (i == data.themes.length - 1) {
                    $('#' + id + 'themes').append(data.themes[i].name);
                } else {
                    $('#' + id + 'themes').append(data.themes[i].name + ", ");
                }
            }

            for (var i = 0; i < data.platforms.length; i++ ) {
                if(i == data.platforms.length -1) {
                    $('#' + id + 'platform').append(data.platforms[i].name);
                } else{
                    $('#' + id + 'platform').append(data.platforms[i].name + ", ");
                }
            }
        });

    var nuclearThrone = GB.getGameData('3030-41999')
        .done( function(data) {
            var id = '3030-41999';
            var data = data.results;
            $('#' + id + 'Icon').attr('src', data.image.medium_url);
            $('#' + id + 'Title').html(data.name);
            $('#' + id + 'Deck').html(data.deck);
            $('#' + id + 'description').html(data.description);
            $('#' + id + 'name').html(data.name);
            $('#' + id + 'rating').html(data.original_game_rating);
            for (var i = 0; i < data.people.length; i++ ) {
                if(i == data.people.length -1) {
                    $('#' + id + 'developer').html(data.people[i].name);
                }else{
                    $('#' + id + 'developer').html(data.people[i].name + ", ");
                }
            }
            for (var i = 0; i < data.publishers.length; i++ ) {
                if(i == data.publishers.length -1) {
                    $('#' + id + 'publishers').html(data.publishers[i].name);
                }else {
                    $('#' + id + 'publishers').html(data.publishers[i].name + ", ");
                }
            }
            for (var i = 0; i < data.genres.length; i++ ) {
                if(i == data.genres.length -1) {
                    $('#' + id + 'genres').append(data.genres[i].name);
                }else {
                    $('#' + id + 'genres').append(data.genres[i].name + ", ");
                }
            }
            for (var i = 0; i < data.themes.length; i++ ) {
                if (i == data.themes.length - 1) {
                    $('#' + id + 'themes').append(data.themes[i].name);
                } else {
                    $('#' + id + 'themes').append(data.themes[i].name + ", ");
                }
            }
            $('#' + id + 'original_release_date').html(data.original_release_date);
            for (var i = 0; i < data.platforms.length; i++ ) {
                if(i == data.platforms.length -1) {
                    $('#' + id + 'platform').append(data.platforms[i].name);
                } else{
                    $('#' + id + 'platform').append(data.platforms[i].name + ", ");
                }
            }
        });

    var ridiculousFishing = GB.getGameData('3030-40158')
        .done( function(data) {
            var id = '3030-40158';
            var data = data.results;
            $('#' + id + 'Icon').attr('src', data.image.medium_url);
            $('#' + id + 'Title').html(data.name);
            $('#' + id + 'Deck').html(data.deck);
            $('#' + id + 'description').html(data.description);
            $('#' + id + 'name').html(data.name);
            $('#' + id + 'rating').html(data.original_game_rating);
            for (var i = 0; i < data.people.length; i++ ) {
                if(i == data.people.length -1) {
                    $('#' + id + 'developer').html(data.people[i].name);
                }else{
                    $('#' + id + 'developer').html(data.people[i].name + ", ");
                }
            }
            for (var i = 0; i < data.publishers.length; i++ ) {
                if(i == data.publishers.length -1) {
                    $('#' + id + 'publishers').html(data.publishers[i].name);
                }else {
                    $('#' + id + 'publishers').html(data.publishers[i].name + ", ");
                }
            }
            for (var i = 0; i < data.genres.length; i++ ) {
                if(i == data.genres.length -1) {
                    $('#' + id + 'genres').append(data.genres[i].name);
                }else {
                    $('#' + id + 'genres').append(data.genres[i].name + ", ");
                }
            }
            for (var i = 0; i < data.themes.length; i++ ) {
                if (i == data.themes.length - 1) {
                    $('#' + id + 'themes').append(data.themes[i].name);
                } else {
                    $('#' + id + 'themes').append(data.themes[i].name + ", ");
                }
            }
            $('#' + id + 'original_release_date').html(data.original_release_date);
            for (var i = 0; i < data.platforms.length; i++ ) {
                if(i == data.platforms.length -1) {
                    $('#' + id + 'platform').append(data.platforms[i].name);
                } else{
                    $('#' + id + 'platform').append(data.platforms[i].name + ", ");
                }
            }
        });

    var seriousSamTheRandomEncounter = GB.getGameData('3030-34402')
        .done( function(data) {
            var id = '3030-34402';
            var data = data.results;
            $('#' + id + 'Icon').attr('src', data.image.medium_url);
            $('#' + id + 'Title').html(data.name);
            $('#' + id + 'Deck').html(data.deck);
            $('#' + id + 'description').html(data.description);
            $('#' + id + 'name').html(data.name);
            $('#' + id + 'rating').html(data.original_game_rating);
            for (var i = 0; i < data.people.length; i++ ) {
                if(i == data.people.length -1) {
                    $('#' + id + 'developer').html(data.people[i].name);
                }else{
                    $('#' + id + 'developer').html(data.people[i].name + ", ");
                }
            }
            for (var i = 0; i < data.publishers.length; i++ ) {
                if(i == data.publishers.length -1) {
                    $('#' + id + 'publishers').html(data.publishers[i].name);
                }else {
                    $('#' + id + 'publishers').html(data.publishers[i].name + ", ");
                }
            }
            for (var i = 0; i < data.genres.length; i++ ) {
                if(i == data.genres.length -1) {
                    $('#' + id + 'genres').append(data.genres[i].name);
                }else {
                    $('#' + id + 'genres').append(data.genres[i].name + ", ");
                }
            }
            for (var i = 0; i < data.themes.length; i++ ) {
                if (i == data.themes.length - 1) {
                    $('#' + id + 'themes').append(data.themes[i].name);
                } else {
                    $('#' + id + 'themes').append(data.themes[i].name + ", ");
                }
            }
            $('#' + id + 'original_release_date').html(data.original_release_date);
            for (var i = 0; i < data.platforms.length; i++ ) {
                if(i == data.platforms.length -1) {
                    $('#' + id + 'platform').append(data.platforms[i].name);
                } else{
                    $('#' + id + 'platform').append(data.platforms[i].name + ", ");
                }
            }
        });

    var superBreadBox = GB.getGameData('3030-46090')
        .done( function(data) {
            var id = '3030-46090';
            var data = data.results;
            $('#' + id + 'Icon').attr('src', data.image.medium_url);
            $('#' + id + 'Title').html(data.name);
            $('#' + id + 'Deck').html(data.deck);
            $('#' + id + 'description').html(data.description);
            $('#' + id + 'name').html(data.name);
            $('#' + id + 'rating').html(data.original_game_rating);
            for (var i = 0; i < data.people.length; i++ ) {
                if(i == data.people.length -1) {
                    $('#' + id + 'developer').html(data.people[i].name);
                }else{
                    $('#' + id + 'developer').html(data.people[i].name + ", ");
                }
            }
            for (var i = 0; i < data.publishers.length; i++ ) {
                if(i == data.publishers.length -1) {
                    $('#' + id + 'publishers').html(data.publishers[i].name);
                }else {
                    $('#' + id + 'publishers').html(data.publishers[i].name + ", ");
                }
            }
            for (var i = 0; i < data.genres.length; i++ ) {
                if(i == data.genres.length -1) {
                    $('#' + id + 'genres').append(data.genres[i].name);
                }else {
                    $('#' + id + 'genres').append(data.genres[i].name + ", ");
                }
            }
            for (var i = 0; i < data.themes.length; i++ ) {
                if (i == data.themes.length - 1) {
                    $('#' + id + 'themes').append(data.themes[i].name);
                } else {
                    $('#' + id + 'themes').append(data.themes[i].name + ", ");
                }
            }
            $('#' + id + 'original_release_date').html(data.original_release_date);
            for (var i = 0; i < data.platforms.length; i++ ) {
                if(i == data.platforms.length -1) {
                    $('#' + id + 'platform').append(data.platforms[i].name);
                } else{
                    $('#' + id + 'platform').append(data.platforms[i].name + ", ");
                }
            }
        });

    var superCrateBox = GB.getGameData('3030-32945')
        .done( function(data) {
            var id = '3030-32945';
            var data = data.results;
            $('#' + id + 'Icon').attr('src', data.image.medium_url);
            $('#' + id + 'Title').html(data.name);
            $('#' + id + 'Deck').html(data.deck);
            $('#' + id + 'description').html(data.description);
            $('#' + id + 'name').html(data.name);
            $('#' + id + 'rating').html(data.original_game_rating);
            for (var i = 0; i < data.people.length; i++ ) {
                if(i == data.people.length -1) {
                    $('#' + id + 'developer').html(data.people[i].name);
                }else{
                    $('#' + id + 'developer').html(data.people[i].name + ", ");
                }
            }
            for (var i = 0; i < data.publishers.length; i++ ) {
                if(i == data.publishers.length -1) {
                    $('#' + id + 'publishers').html(data.publishers[i].name);
                }else {
                    $('#' + id + 'publishers').html(data.publishers[i].name + ", ");
                }
            }
            for (var i = 0; i < data.genres.length; i++ ) {
                if(i == data.genres.length -1) {
                    $('#' + id + 'genres').append(data.genres[i].name);
                }else {
                    $('#' + id + 'genres').append(data.genres[i].name + ", ");
                }
            }
            for (var i = 0; i < data.themes.length; i++ ) {
                if (i == data.themes.length - 1) {
                    $('#' + id + 'themes').append(data.themes[i].name);
                } else {
                    $('#' + id + 'themes').append(data.themes[i].name + ", ");
                }
            }
            $('#' + id + 'original_release_date').html(data.original_release_date);
            for (var i = 0; i < data.platforms.length; i++ ) {
                if(i == data.platforms.length -1) {
                    $('#' + id + 'platform').append(data.platforms[i].name);
                } else{
                    $('#' + id + 'platform').append(data.platforms[i].name + ", ");
                }
            }
        });


})(GiantBomb);
