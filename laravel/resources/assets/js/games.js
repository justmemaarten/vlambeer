(function(GB){

    var luftrausers = GB.getGameData('3030-39474')
        .done( function(data) {
            var data = data.results;
            console.log(data);
            //$('#game-title').html(data.description);
        });

})(GiantBomb);
