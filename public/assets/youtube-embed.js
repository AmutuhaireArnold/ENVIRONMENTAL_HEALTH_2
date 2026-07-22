/* Click-to-play YouTube thumbnails.
   Markup pattern:
   <div class="video-embed" data-yt="VIDEO_ID" data-title="Video title">
     <img class="video-thumb" src="..." alt="...">
     <button type="button" class="video-play" aria-label="Play video">...</button>
   </div>
   Clicking (or pressing Enter/Space) swaps the thumbnail for a real
   youtube-nocookie.com iframe with autoplay on — the iframe never loads
   until the person actually asks for it.
*/
(function () {
  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.video-embed[data-yt]').forEach(function (card) {
      card.setAttribute('tabindex', '0');
      card.setAttribute('role', 'button');
      card.setAttribute('aria-label', 'Play video: ' + (card.getAttribute('data-title') || ''));

      function play() {
        var id = card.getAttribute('data-yt');
        var title = card.getAttribute('data-title') || 'YouTube video';
        var iframe = document.createElement('iframe');
        iframe.src = 'https://www.youtube-nocookie.com/embed/' + id + '?autoplay=1&rel=0';
        iframe.title = title;
        iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture');
        iframe.setAttribute('allowfullscreen', '');
        card.innerHTML = '';
        card.appendChild(iframe);
      }

      card.addEventListener('click', play, { once: true });
      card.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          play();
        }
      }, { once: true });
    });
  });
})();
