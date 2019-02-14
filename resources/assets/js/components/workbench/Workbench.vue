<template>
    <div>
        <navbar :account="account"></navbar>
        <div class="page-container">
            <div class="page-content">
                <div class="sidebar sidebar-main sidebar-default sidebar-fixed" id="navbar-menu">
                    <div class="sidebar-content">
                        <div class="sidebar-category sidebar-category-visible">
                            <div class="category-content no-padding">
                                <ul class="navigation navigation-main navigation-accordion">
                                    <li><a class="hide-sidebar"><i class="icon-menu7"></i></a></li>
                                    <li :class="section === 'dashboard' ? 'active' : ''">
                                        <a href="/dashboard"><i class="icons-auditii-dashboard"></i><span>Dashboard</span></a>
                                    </li>
                                    <li><a href="/help"><i class="icons-auditii-help"></i> <span>Help</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-wrapper">
                    <slot></slot>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts" src="./Workbench.ts"></script>

<style scoped>
    .page-container{
        position: relative;
        z-index: 1;
    }

    .sidebar-default .navigation li>a {
        color: #9b9b9b;
    }

    .sidebar-main .navigation>li>a span {
        color: #9b9b9b;
        font-size: 1vw;
    }

    .navigation>li.active>a>i {
        color: #E2273A;
    }

    .navigation>li.active>a>span {
        color: #E2273A;
    }

    .sidebar-xs .sidebar-main .navigation>li>a>i {
        font-size: 1vw;
    }

    @media (max-width: 768px) {
        .sidebar-main, .sidebar-fixed.sidebar-default .sidebar-content {
            width: 100%;
        }
        .hide-sidebar {
            display: none;
        }
        .sidebar-main .navigation>li>a span {
        font-size: 2.5vw;
        }

        .sidebar-xs .sidebar-main .navigation>li>a>i {
        font-size: 1.5vw;
        }
    }
        
</style>
