{{-- Shared tap-to-zoom photo/bio modal --}}
<div class="photo-modal zoom-in" id="photoModal" data-effect="zoom-in" aria-hidden="true">
    <div class="photo-modal-backdrop" data-close></div>
    <div class="photo-modal-panel" role="dialog" aria-modal="true" aria-labelledby="modalName">
        <button type="button" class="photo-modal-close" data-close aria-label="Close">✕</button>
        <div class="photo-modal-media">
            <button type="button" class="photo-modal-nav prev" data-nav="prev" aria-label="Previous person">‹</button>
            <img id="modalImg" src="" alt="">
            <button type="button" class="photo-modal-nav next" data-nav="next" aria-label="Next person">›</button>
            <span class="photo-modal-count" id="modalCount"></span>
        </div>
        <div class="photo-modal-info">
            <h3 id="modalName"></h3>
            <p class="role" id="modalRole"></p>
            <p class="bio" id="modalBio"></p>
        </div>
    </div>
</div>