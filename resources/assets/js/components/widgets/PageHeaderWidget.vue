<template>
    <div class="page-header-xs page-header-default page-header-inverse">
        <div class="page-header-content">
            <div class="page-title">
                <h5>
                    <span><b>{{ title }}</b></span>
                </h5>
                <small class="display-block">{{ subtitle }}</small>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        props: {
            title: null,
            subtitle: null
        },

        mounted() { }
        
    }
</script>

<style scoped>
    h5 {
        color: #E2273A;
        text-transform: uppercase;
        font-size: 1.2vw;
        letter-spacing: 0.1vw;
        font-weight: 500;
    }

    .page-title small.display-block {
        color: #E2273A;
        text-transform: uppercase;
        font-size: 0.7vw;
        letter-spacing: 0.1vw;
    }

    .page-header-default {
        background-color: #fff;
        margin-bottom: 30px;
        box-shadow: none;
    }

    @media (max-width: 1030px){
        
        .page-header-xs h5 {
            font-size: 1.7vh;
        }

        .page-title small.display-block {
            font-size: 1.5vh;
        }
    }

    @media (max-width: 768px){

        .page-header-xs h5 {
            font-size: 2vh;
        }

        .page-title small.display-block {
            font-size: 1.5vh;
        }
        
    }
</style>