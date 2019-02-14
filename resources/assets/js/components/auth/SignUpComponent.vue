<template>
    <div class="login-container">
        <div class="page-container">
            <div class="page-content">
                <div class="content-wrapper">
                    <div class="content">
                        <div>
                            <div class="panel panel-body login-form width-400">
                                <div class="text-center">
                                    <div class="icon-object border-success text-success text-slate-300"><i class="icon-plus3"></i></div>
                                    <h5 class="content-group">Create new account<small class="display-block">All fields are required</small></h5>
                                </div>
                                <div class="alert alert-danger" v-if="hasError">
                                    <span class="text-semibold">Error</span>
                                </div>
                                
                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="password" class="form-control" placeholder="Your email">
                                    <div class="form-control-feedback">
                                        <i class="text-muted">@</i>
                                    </div>
                                </div>



                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="password" class="form-control" placeholder="Password">
                                    <div class="form-control-feedback">
                                        <i class="icon-lock2 text-muted"></i>
                                    </div>
                                </div>
                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="password" class="form-control" placeholder="Confirm Password">
                                    <div class="form-control-feedback">
                                        <i class="icon-lock2 text-muted"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn bg-blue-800 btn-block ">REGISTER<i class="icon-arrow-right14 position-right"></i></button>
                                </div>
                                <div class="content-divider text-muted form-group"><span>Alredy have an account?</span></div>
                                <a href="/signin" class="btn btn-default btn-block content-group">SIGN IN</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
        }
    }
</script>

<style scoped>
    
</style>
</style>
