<template>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header ml-10">
            <a class="navbar-brand" href="index.html">
                <img class="img-resposive" src="/images/icon-web.png" alt="">
            </a>
            <ul class="nav navbar-nav visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-user"></i></a></li>
                <li><a data-toggle="collapse" data-target="#navbar-menu" class="sidebar-main-toggle"><i class="icon-menu7 mr-10"></i></a></li>
            </ul>
        </div>
        <div class="navbar-collapse collapse" id="navbar-mobile">
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown dropdown-user">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <img class="img-circle image-responsive" :src="account.imageUrl || '/images/user.png'" alt=""/>
                            <span class="name text-regular">{{ account.name || account.email}}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a href="/profile"><i class="icon-cog5"></i> Account settings</a>
                            </li>
                            <li>
                                <a @click="logoutClick()"><i class="icon-switch2"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script lang="ts" src="./Navbar.ts"></script>

<style scoped>
    .navbar {
        background: -moz-linear-gradient(left, #F16D32 0%,#ED283B 10%);
        background: -webkit-linear-gradient(left, #F16D32 0%,#ED283B 10%);
        background: linear-gradient(to right, #F16D32 0%,#ED283B 10%);
    }

    .navbar-brand>img {
    margin-top: 0;
    height: 3vh;
    }
    
    .name{
        font-size: 1vw;
    }

    .navbar-nav>li {
    border-left: none;
    border-right: none;
    }

    .navbar-right{
        margin-right: 5vw;
    }
    
    .navbar-nav>.dropdown-user img {
    max-height: 4.5vh;
    width: 4.5vh;
    background-size: cover;
    margin-top: 0;
    }

</style>