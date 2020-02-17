<!-- Video-Modal -->
<div class="modal-content">
  <div class="modal-header">
    <span class="close sl sl-close videoStop" onclick="document.getElementById('videoACD').pause();"></span>
    <p>&nbsp;</p>
    <p>
    	<strong class="headline centered h1 no-margin-bottom">Die Callcenter-Software für Unternehmen:</strong>
    	<strong class="headline centered h2 no-margin-top">Online, cloudbasiert, mit neuster Technologie.</strong>
	</p>		
  </div>
  <div class="modal-body">
    <div class="wrapper">
        <div class="content wide">
        	<div class="shadow-box">
        		<div class="video">
                  <video controls="" id="videoACD" preload="none" poster="/assets/images/photos/placeholder.gif" data-poster="/assets/images/photos/poster-video-callcenter-cloud-acd.png" onclick="this.play();" class="trackedElement lazyPoster" data-label="CallOneACD" data-category="Video" data-action="Play Video">
                    <source src="/assets/videos/CallOneACD_HD.webm" type="video/webm">
                    <source src="/assets/videos/CallOneACD_1080p_7Mbit.mp4" type="video/mp4" class="hd">
                    <source src="/assets/videos/CallOneACD_1080p_1Mbit.mp4" type="video/mp4" class="sd">
                  </video>
                </div>
    		</div>
      	</div>
        <script>
          videos = document.querySelectorAll("video"); 
          for(video of videos) {
            video.pause(); 
          }
        </script>
    </div>
  </div>
  <div class="modal-footer">
  </div>
</div>