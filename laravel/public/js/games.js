(function(GB){
    var gunGodz = GB.getGameData('3030-37491')

        .done( function(data) {
            var id = '3030-37491';
            var data = data.results;

            $('.' + id + 'stores').append('<a href="http://vlambeer.com/downloads/special/GUNGODZ.rar" target="_blank">' +
                '<img src="media/img/downloadIcon.png" alt="download" height="40px" width="40px">' +
                '</a>');
            $('#' + id + 'Icon').attr('src', data.image.medium_url);
            $('#' + id + 'Title').html(data.name);
            $('#' + id + 'Deck').html(data.deck);
            $('#' + id + 'description').html(data.description);
            $('#' + id + 'name').html(data.name);
            $('#' + id + 'rating').html(data.original_game_rating);
            $('#' + id + 'original_release_date').html(data.original_release_date);
            for (var i = 0; i < data.developers.length; i++ ) {
                if(i == data.developers.length -1) {
                    $('#' + id + 'developer').html(data.developers[i].name);
                }else{
                    $('#' + id + 'developer').html(data.developers[i].name + ", ");
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
            $('.' + id + 'stores').append('<a href="http://store.steampowered.com/app/233150/" target="_blank">' +
                '<img src="media/img/steam.ico" alt="download" height="40px" width="40px">' +
                '</a>' + '<a href="https://www.playstation.com/en-us/games/luftrausers-ps3/" target="_blank">' +
                '<img src="media/img/PSN.png" alt="download" height="40px" width="40px">' +
                '</a>');
            $('#' + id + 'Icon').attr('src', data.image.medium_url);
            $('#' + id + 'Title').html(data.name);
            $('#' + id + 'Deck').html(data.deck);
            $('#' + id + 'description').html(data.description);
            $('#' + id + 'name').html(data.name);
            $('#' + id + 'rating').html(data.original_game_rating);
            $('#' + id + 'original_release_date').html(data.original_release_date);
            for (var i = 0; i < data.developers.length; i++ ) {
                if(i == data.developers.length -1) {
                    $('#' + id + 'developer').html(data.developers[i].name);
                }else{
                    $('#' + id + 'developer').html(data.developers[i].name + ", ");
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
            $('.' + id + 'stores').append('<a href="http://store.steampowered.com/app/242680/" target="_blank">' +
                '<img src="media/img/steam.ico" alt="download" height="40px" width="40px"></a>');
            $('#' + id + 'Icon').attr('src', data.image.medium_url);
            $('#' + id + 'Title').html(data.name);
            $('#' + id + 'Deck').html(data.deck);
            $('#' + id + 'description').html(data.description);
            $('#' + id + 'name').html(data.name);
            $('#' + id + 'rating').html(data.original_game_rating);
            for (var i = 0; i < data.developers.length; i++ ) {
                if(i == data.developers.length -1) {
                    $('#' + id + 'developer').html(data.developers[i].name);
                }else{
                    $('#' + id + 'developer').html(data.developers[i].name + ", ");
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
            $('.' + id + 'stores').append('<a href="https://itunes.apple.com/us/app/ridiculous-fishing-tale-redemption/id601831815?mt=8" target="_blank">' +
                '<img src="media/img/App-store.ico" alt="download" height="40px" width="40px">' +
                '</a>' + '<a href="https://play.google.com/store/apps/details?id=com.vlambeer.RidiculousFishing" target="_blank">' +
                '<img src="media/img/play-store.ico" alt="download" height="40px" width="40px">' +
                '</a>');
            $('#' + id + 'Icon').attr('src', data.image.medium_url);
            $('#' + id + 'Title').html(data.name);
            $('#' + id + 'Deck').html(data.deck);
            $('#' + id + 'description').html(data.description);
            $('#' + id + 'name').html(data.name);
            $('#' + id + 'rating').html(data.original_game_rating);
            for (var i = 0; i < data.developers.length; i++ ) {
                if(i == data.developers.length -1) {
                    $('#' + id + 'developer').html(data.developers[i].name);
                }else{
                    $('#' + id + 'developer').html(data.developers[i].name + ", ");
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
            $('.' + id + 'stores').append('<a href="http://store.steampowered.com/app/201480/" target="_blank">' +
                '<img src="media/img/steam.ico" alt="download" height="40px" width="40px"></a>');
            $('#' + id + 'Icon').attr('src', data.image.medium_url);
            $('#' + id + 'Title').html(data.name);
            $('#' + id + 'Deck').html(data.deck);
            $('#' + id + 'description').html(data.description);
            $('#' + id + 'name').html(data.name);
            $('#' + id + 'rating').html(data.original_game_rating);
            for (var i = 0; i < data.developers.length; i++ ) {
                if(i == data.developers.length -1) {
                    $('#' + id + 'developer').html(data.developers[i].name);
                }else{
                    $('#' + id + 'developer').html(data.developers[i].name + ", ");
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
            $('.' + id + 'stores').append('<a href="http://superbreadbox.com/play.php" target="_blank">' +
                '<img src="media/img/Commodore-64.png" alt="download" height="40px" width="40px">' +
                '</a>');
            $('#' + id + 'Icon').attr('src', data.image.medium_url);
            $('#' + id + 'Title').html(data.name);
            $('#' + id + 'Deck').html(data.deck);
            $('#' + id + 'description').html(data.description);
            $('#' + id + 'name').html(data.name);
            $('#' + id + 'rating').html(data.original_game_rating);
            for (var i = 0; i < data.developers.length; i++ ) {
                if(i == data.developers.length -1) {
                    $('#' + id + 'developer').html(data.developers[i].name);
                }else{
                    $('#' + id + 'developer').html(data.developers[i].name + ", ");
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
            $('.' + id + 'stores').append('<a href="http://store.steampowered.com/app/212800/" target="_blank">' +
                '<img src="media/img/steam.ico" alt="download" height="40px" width="40px">' +
                '</a>' +
                '<a href="https://itunes.apple.com/us/app/super-crate-box/id483025428?mt=8" target="_blank">' +
            '<img src="media/img/App-store.ico" alt="download" height="40px" width="40px">' +
            '</a>');
            $('#' + id + 'Icon').attr('src', data.image.medium_url);
            $('#' + id + 'Title').html(data.name);
            $('#' + id + 'Deck').html(data.deck);
            $('#' + id + 'description').html(data.description);
            $('#' + id + 'name').html(data.name);
            $('#' + id + 'rating').html(data.original_game_rating);
            for (var i = 0; i < data.developers.length; i++ ) {
                if(i == data.developers.length -1) {
                    $('#' + id + 'developer').html(data.developers[i].name);
                }else{
                    $('#' + id + 'developer').html(data.developers[i].name + ", ");
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
