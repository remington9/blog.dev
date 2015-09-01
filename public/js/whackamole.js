$(function(){
	var mole = [];
	var moleHole = $('.empty');
	var gathered = 0
	var timer = 20;

	$('#start').click(start);
	$('.empty').click(compareClick);

	function start() {
	    mole = [];
	    randomMoleHoleToSequence();
	    playback();
	    timerStart();
	}

	function randomMoleHoleToSequence() {
	    var random = Math.floor(Math.random() * 9);
	    mole.push(moleHole[random].id);
	}

	function activeMole(id){
		$('#' + id).addClass('mole');
		var randomImg = Math.floor((Math.random()*11)+1);
		$('.mole').html('<img src="/img/db' + randomImg + '.png">');
		setTimeout(function() {
	        $('#' + id).removeClass('mole');
	    }, 600);
	}

	function playback() {
	    var i = 0;
	    var intervalId = setInterval(function() {
	        activeMole(mole[i]);
	        i++;
	    randomMoleHoleToSequence();
		compareClick();
	    
	    }, 700);
	}
	function timerStart(){
		setInterval(function(){
			timer-=1;
			$('#timer').text('Time left ' + timer + ' seconds!');

			if(timer == 0 && gathered !=7){
				$('#myModal2').modal('show');
				$('.reloadPage').on('click', function(){
				location.reload(true);
			});
			}
		},1000);
		
	}

	function compareClick(){
		if ($(this).hasClass('mole')){
			var imgName = $(this).find("img").attr('src');
			if(imgName == '/img/db8.png' || imgName == '/img/db9.png'|| imgName == '/img/db10.png'|| imgName == '/img/db11.png'){
				gathered--;
				$('#gathered').text('Balls Gathered # ' + gathered + '!');
			}else{
				gathered++;
				$('#gathered').text('Balls Gathered # ' + gathered + '!');
				if(gathered == 7){
					reviveKrillin();
				}
			}
		}
	}

	function reviveKrillin(){
		window.clearInterval(timer);
		$('#myModal').modal('show');
		$('.reloadPage').on('click', function(){
			location.reload(true);
		});
	}
});