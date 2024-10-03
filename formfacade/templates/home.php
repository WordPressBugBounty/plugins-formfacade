<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom:1px solid #e1e1e1;">
    <a class="navbar-brand" href="#">
        <img src="https://formfacade.com/logo.png" class="navbar-icon logo" alt="icon">
        Formfacade
    </a>
</nav>
<div class="content">
    <div class="row">
        <div class="col-md-12 col-lg-6 mr-auto ml-auto">
            <h1 style="margin-top:60px;">Embed Google Forms In Your Wordpress</h1>
            <p> From startups to corporates. 2500+ companies trust us. </p>
            <a href="<?php echo admin_url('admin.php?page=embed_google_forms');?>" class="button">Try It Free</a>
            
        </div>
    </div>
    <div class="col-md-12 col-lg-6 mr-auto ml-auto" style="margin-top:50px;">
        <div class="animation-content" style="text-align:center;">
            <img src="https://formfacade.com/banner/embed/embed.png" class="lazyAnimate img-fluid hero-image" alt="Google Forms without esign" 
                data-json-src="https://cdn.neartail.com/public/embed.json">
            <div id="lottie-container" style="display:none"> </div>
        </div>
    </div>
</div>


<script>
    function loadVideoPromise(src) {
        return new Promise((resolve, reject) => {
            const video = document.createElement('video');
            video.preload = 'auto';
            video.autoplay = true;
            video.loop = false;
            video.muted = true;
            video.style.width = '100%';
            const source = document.createElement('source');
            source.src = src;
            source.type = 'video/webm';
            video.appendChild(source);

            video.addEventListener('canplaythrough', () => {
                resolve(video);
            }, { once: true });

            video.addEventListener('ended', function() {
                setTimeout(function() {
                    video.currentTime = 0; 
                    video.play();
                }, 3000); 
            });

            video.addEventListener('error', (error) => {
                reject(error);
            });
        });
    }

    function loadLottiePromise(src) {
        return new Promise(function(resolve, reject) {
            var anim = lottie.loadAnimation({
                container: document.getElementById('lottie-container'),
                renderer: "svg",
                loop: false,
                autoplay: false, // Autoplay set to false initially
                path: src,
                rendererSettings: { progressiveLoad: true },
            });

            anim.addEventListener('data_ready', function() {
                resolve(anim);
            });

            anim.addEventListener('data_failed', function(error) {
                reject(error);
            });

            anim.addEventListener("complete", function () {
                // Pause the animation for 3 seconds
                setTimeout(function () {
                    anim.goToAndPlay(0); // Go to the beginning and play
                }, 3000); // 3000 milliseconds = 3 seconds
            });
        });
    }

    function loadScript(src) {
       return new Promise(function(resolve, reject) {
            var script = document.createElement('script');
            script.src = src;
            script.onload = resolve;
            script.onerror = reject;
            document.head.appendChild(script);
        });
    }

    document.addEventListener("DOMContentLoaded", function() {
        const delayPromise = new Promise((resolve) => {
             setTimeout(() => { resolve(); }, 3000);
        });

        loadScript('https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js').then(function() {
            const img = document.querySelector('.lazyAnimate');
            if(img && img.dataset.jsonSrc) {
                const jsonSrc = img.dataset.jsonSrc;
                // Animate video once video is ready & dom is ready after 3 sec
                Promise.all([loadLottiePromise(jsonSrc), delayPromise]).then((rs) => {
                    var lottieAnimation = rs[0];
                    document.querySelector('.lazyAnimate').remove();
                    document.getElementById('lottie-container').style.display = 'block';
                    lottieAnimation.play();
                }).catch((error) => {
                    console.error('Error:', error);
                });
            }
        });
    });
</script>

<style>
.animation-content { display:flex; justify-content: center;}
.logo { width: 50px; }
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-color: #f5f5f5;
    color: #333;
}
.header {
    background-color: #fff;
    width: 100%;
    padding: 20px 0;
    display: flex;
    align-items: center;
    justify-content: center;
    border-bottom: 1px solid #eee;
}
.header img {
    height: 30px;
}
.content {
    text-align: center;
    margin: 0px 0px;
}
.content h1 {
    font-size: 2em;
    margin-bottom: 20px;
}
.content p {
    font-size: 1.2em;
    margin-bottom: 40px;
}
.content .button {
    padding: 8px 30px;
    font-size: 1em;
    background-color: #5D33FB;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 18px;
}
.content button:hover {
    background-color: #0056b3;
}
.images {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
}
.images img {
    width: 300px;
    border-radius: 10px;
}
.footer {
    margin-top: 40px;
    font-size: 1em;
    color: #666;
}

</style>