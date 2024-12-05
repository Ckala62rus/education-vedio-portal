<template>
    <div class="row">
<!--        <div class="col-6 mx-auto">-->
            <video ref="videoPlayer" class="video-js vjs-default-skin"></video>
<!--        </div>-->
    </div>

</template>

<script>
import videojs from 'video.js';

export default {
    name: 'VideoPlayer',
    props: {
        options: {
            type: Object,
            default() {
                return {};
            }
        }
    },
    data() {
        return {
            player: null
        }
    },
    mounted() {
        this.player = videojs(this.$refs.videoPlayer, this.options, () => {
            this.player.log('onPlayerReady', this);
        });
    },
    beforeDestroy() {
        if (this.player) {
            this.player.dispose();
        }
    }
}
</script>
