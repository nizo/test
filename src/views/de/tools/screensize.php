<style>
    .screensize {
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 7vw;
        font-family: monospace;
        background-color: #ccc;
        color: #666;
    }
    .dpi {
        height: 1in;
        left: -100%;
        position: absolute;
        top: -100%;
        width: 1in;
    }
</style>

<div class="dpi"></div>
<div class="screensize">???</div>

<script>
    let output = document.querySelector('.screensize');

    function updateSize() {
        let dpi = document.querySelector('.dpi').offsetHeight;
        output.textContent = window.innerWidth + ' × ' + window.innerHeight + ' (' + dpi + 'dpi)';
    }

    updateSize();
    window.addEventListener('resize', updateSize);
</script>