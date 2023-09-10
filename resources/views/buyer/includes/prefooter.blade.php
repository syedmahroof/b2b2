<style>
    #video-bubble video,
    #video-bubble img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        border: 4px solid #ed9507;
        object-fit: cover;
        object-position: top;
    }

    #video-bubble {
        position: fixed;
        bottom: 30px;
        right: 30px;
        border-radius: 50%;
        z-index: 1;
        cursor: pointer;
    }

    #video-bubble video {
        display: none;
    }

    #video-bubble.active video {
        width: 300px;
        height: 400px;
        border-radius: 15px;
        border: 4px solid #272b31;
        object-fit: cover;
        display: block;
    }

    #video-bubble.active img {
        display: none;
    }

    #close-button {
        position: fixed;
        display: inline-block;
        width: 30px;
        height: 30px;
        right: 20px;
        bottom: 20px;
        background-color: #ed9507;
        border-radius: 50%;
        cursor: pointer;
        z-index: 2;
    }

    #close-button svg {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 10px;
        height: 10px;
        fill: none;
        stroke: #fff;
        stroke-width: 2px;
    }

    #video-bubble.active a.video-cta {
        position: absolute;
        bottom: 50px;
        left: 50%;
        background: #ed9507;
        padding: 7px 20px;
        transform: translateX(-50%);
        border-radius: 10px;
        border: 2px solid #faf0ca;
        color: #faf0ca;
        z-index: 3;
        cursor: pointer;
        display: inline-block;
    }

    a.video-cta {
        display: none;
    }
</style>

<script>
    function toggleActiveClass() {
        var element = document.getElementById('video-bubble');
        var video = document.getElementById('info-video');
        var placeholder = document.getElementById('placeholder');


        if (element.classList.contains('active')) {
            element.classList.remove('active');
            video.muted = true;
            video.loop = true;
            video.play();
            video.innerHTML = '';
        } else {
            element.classList.add('active');
            video.innerHTML =
            '<source src="https://d2amba7cw2f37j.cloudfront.net/images/yd-info.mp4" type="video/mp4">';
            video.muted = false;
            video.loop = false;
            video.currentTime = 0;
            video.play();
        }
    }

    function hideVideo() {
        var video = document.getElementById('info-video');
        video.pause();
        document.getElementById('video-bubble').style.display = "none";
        document.getElementById('close-button').style.display = "none";
    }
</script>