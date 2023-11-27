let sound; 

const initializeAudioPlayer = () => {
    document.addEventListener('click', function(event) {
        const player = event.target.closest('[data-binding="play-audio"]');
        if (!player) return;  // Exit if the clicked element or its parent doesn't have the [data-binding="play-audio"] attribute

		event.preventDefault();
        const speakerIcon = player.querySelector('.speaker-icon');
        const stopIcon = player.querySelector('.stop-icon');

        if (player.getAttribute('data-playing') === 'true') {
            if (sound) {  
                sound.stop();
            }
            player.setAttribute('data-playing', 'false');
            stopIcon.style.display = 'none';
            speakerIcon.style.display = 'inline-block';
        } else {
            // Stop all playing instances first
            document.querySelectorAll('[data-playing="true"]').forEach(function(playingElement) {
                if (playingElement !== player && sound) {
                    sound.stop();
                    playingElement.setAttribute('data-playing', 'false');
                    playingElement.querySelector('.stop-icon').style.display = 'none';
                    playingElement.querySelector('.speaker-icon').style.display = 'inline-block';
                }
            });

            player.setAttribute('data-playing', 'true');
            stopIcon.style.display = 'inline-block';
            speakerIcon.style.display = 'none';

            sound = new Howl({
                src: [player.getAttribute('data-audio-file')],
                volume: 1,
                html5: true,
                onend: function() {
                    player.setAttribute('data-playing', 'false');
                    stopIcon.style.display = 'none';
                    speakerIcon.style.display = 'inline-block';
                },
                onerror: function() {
                    console.error('Error while playing audio');
                    player.setAttribute('data-playing', 'false');
                    stopIcon.style.display = 'none';
                    speakerIcon.style.display = 'inline-block';
                }
            });

            sound.once('load', function() {
                sound.play();
            });
        }
    });
};

initializeAudioPlayer();
