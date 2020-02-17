<!-- Video-Modal -->
<div class="modal-content" style="background-color: #000; max-width: 1200px;">
  <div class="modal-header">
    <span class="close sl sl-close videoStop" onclick="document.getElementById('videoCheck24').pause();"></span>
    <p>&nbsp;</p>
  </div>
  <div class="modal-body" style="padding: 0;">
    <div class="wrapper">
        <div class="content wide" style="padding: 0;">
        	<div class="shadow-box">
        		<div class="video">
                  <video controls preload="none" id="videoCheck24" poster="/assets/images/photos/placeholder.gif" data-poster="/assets/images/photos/poster-video-client-check24-550x309.jpg" class="trackedElement lazyPoster" data-label="Casestudy Check24" data-category="Video" data-action="Play Video" onclick="this.play();">
                    <source src="/assets/videos/Callone-Casestudy-Check24-720p.webm" type="video/webm">
                    <source src="/assets/videos/Callone-Casestudy-Check24-720p.mp4" type="video/mp4">
                  </video>
                </div>
    		</div>
      	</div>
        <script>
          videos = document.querySelectorAll("#videoCheck24"); 
          for(video of videos) {
            video.pause(); 
          }
        </script>
    </div>
  </div>
  <div class="modal-footer">
  </div>
</div>