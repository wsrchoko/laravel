<template>
    <div class="checkbox">
        <label style="margin-top: -5px">
            <div class="checker">
                <span v-bind:class="{ checked: checked_ }">
                    <input type="checkbox" v-model="checked_" @change="changeValue()">
                </span>
            </div>
        </label>
    </div>
</template>

<script>
    export default {
        
        props: {
            checked: Boolean
        },

        data() {
            return {
                checked_: false
            }
        },

        methods: {
            changeValue: function () {
                this.$emit('change', this.checked_);
            }
        },

        mounted() {
            this.checked_ = this.checked;
        }

    }
</script>

<style scoped>
    .checker span {
        border: 1px solid #607d8b;
    }

    .checker span.checked {
        border-color: transparent;
        font-weight: 100;
        -webkit-transition-duration: .1s;
        transition-duration: .1s;
    }
</style>
