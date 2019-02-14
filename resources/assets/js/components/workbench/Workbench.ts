import Vue from 'vue';
import Component from 'vue-class-component';
import Navbar from './Navbar';
import { AccountHttp } from '../../services/AccountHttp';
import { Account } from '../../models/Account';

declare let $: any;

@Component({
    data() {
        return {
            account: {},
            section: null
        }
    },
    components: {
        'navbar': Navbar
    }
})
export default class Workbench extends Vue {
    account!: Account;
    section!: string;

    accountHttp: AccountHttp = new AccountHttp();

    beforeMount() {
        this.loadUser();
        this.section = window.location.pathname.split( '/' )[1];
    }

    mounted() {
        this.initJqueryComponents();
    }

    async loadUser() {
        let account = await this.accountHttp.index();
        this.account = account;
        (this.account.collapsedMenu) ? $('body').addClass('sidebar-xs') : $('body').removeClass('sidebar-xs');
    }

    initJqueryComponents() {
        $('body').addClass('navbar-top');

        let resizePageContainer = () => {
            let e = $(window).height() - $(".page-container").offset().top - $(".navbar-fixed-bottom").outerHeight();
            $(".page-container").attr("style", "min-height:" + e + "px");
        };

        let miniSidebar  = () => {
            if ($('body').hasClass('sidebar-xs')) {
                $('.sidebar-main.sidebar-fixed .sidebar-content').on('mouseenter', function () {
                    if ($('body').hasClass('sidebar-xs')) {
                        $('body').removeClass('sidebar-xs').addClass('sidebar-fixed-expanded');
                    }
                }).on('mouseleave', function () {
                    if ($('body').hasClass('sidebar-fixed-expanded')) {
                        $('body').removeClass('sidebar-fixed-expanded').addClass('sidebar-xs');
                    }
                });
            }
        };

        resizePageContainer();

        $(".navigation").find("li.active").parents("li").addClass("active"); 
        $(".navigation").find("li").not(".active, .category-title").has("ul").children("ul").addClass("hidden-ul");
        $(".navigation").find("li").has("ul").children("a").addClass("has-ul");
        $(".dropdown-menu:not(.dropdown-content), .dropdown-menu:not(.dropdown-content) .dropdown-submenu").has("li.active").
            addClass("active").parents(".navbar-nav .dropdown:not(.language-switch), .navbar-nav .dropup:not(.language-switch)").
            addClass("active");
        $(".navigation-main > .navigation-header > i").tooltip({
            placement: "right",
            container: "body"
        });

        $(".navigation-main").find("li").has("ul").children("a").on("click", function(this: any, e: any) {
            e.preventDefault();
            $(this).parent("li").not(".disabled").not($(".sidebar-xs").not(".sidebar-xs-indicator").find(".navigation-main").
                children("li")).toggleClass("active").children("ul").slideToggle(250);
            $(".navigation-main").hasClass("navigation-accordion") && $(this).parent("li").not(".disabled").not($(".sidebar-xs").
                not(".sidebar-xs-indicator").find(".navigation-main").children("li")).siblings(":has(.has-ul)").removeClass("active").
                children("ul").slideUp(250);
        });
        
        miniSidebar();

        $(document).on("click", ".sidebar-control", () => {
            resizePageContainer();
        });

        $(document).on("click", ".hide-sidebar", () => {
            if ($('body').hasClass('sidebar-xs')) {
                this.accountHttp.update('collapsedMenu', false, this.account.id);
                $('body').removeClass('sidebar-xs');
            }
            else {
                this.accountHttp.update('collapsedMenu', true, this.account.id);
                $('body').addClass('sidebar-xs');
            }
        })

        $(".sidebar-fixed .sidebar-content").niceScroll({
            mousescrollstep: 100,
            cursorcolor: '#ccc',
            cursorborder: '',
            cursorwidth: 3,
            hidecursordelay: 100,
            autohidemode: 'scroll',
            horizrailenabled: false,
            preservenativescrolling: false,
            railpadding: {
                right: 0.5,
                top: 1.5,
                bottom: 1.5
            }
        });
            
        $(window).on("resize", () => {
            setTimeout(function() {
                resizePageContainer(); 
                $(window).width() <= 768 ? (
                    $("body").addClass("sidebar-xs-indicator"),
                    $(".sidebar-opposite").insertBefore(".content-wrapper"),
                    $(".sidebar-detached").insertBefore(".content-wrapper"),
                    $(".dropdown-submenu").on("mouseenter", function(this: any) {
                        $(this).children(".dropdown-menu").addClass("show")
                    }).on("mouseleave", function(this: any) {
                        $(this).children(".dropdown-menu").removeClass("show");
                    })) : (
                        $("body").removeClass("sidebar-xs-indicator"), 
                        $(".sidebar-opposite").insertAfter(".content-wrapper"), 
                        $("body").removeClass("sidebar-mobile-main sidebar-mobile-secondary sidebar-mobile-detached sidebar-mobile-opposite"),
                        $("body").hasClass("has-detached-left") ? $(".sidebar-detached").insertBefore(".container-detached") : $("body").hasClass("has-detached-right") && $(".sidebar-detached").insertAfter(".container-detached"),
                        $(".page-header-content, .panel-heading, .panel-footer").removeClass("has-visible-elements"), 
                        $(".heading-elements").removeClass("visible-elements"), 
                        $(".dropdown-submenu").children(".dropdown-menu").removeClass("show"))
            }, 100)
        }).resize();
    }
    
}