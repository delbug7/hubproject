
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="description" content="" />
    <title>Dashboard - Admin</title>
    <link
            href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"
            rel="stylesheet"
    />
    <link
            href="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/jqvmap.css?v=16275756370585718435"
            rel="stylesheet"
    />
    <link
            href="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/flag-icon.min.css?v=10757425894848348376"
            rel="stylesheet"
    />
    <!-- Fullcalendar-->
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.7.0/fullcalendar.min.css"
            rel="stylesheet"
    />
    <!-- Materialize-->
    <link
            href="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/admin-materialize.min.css?v=8850535670742419153"
            rel="stylesheet"
    />
    <!-- Material Icons-->
    <link
            href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet"
    />

    <script>
        window.performance &&
        window.performance.mark &&
        window.performance.mark("shopify.content_for_header.start");
    </script>
    <meta
            id="shopify-digital-wallet"
            name="shopify-digital-wallet"
            content="/17758583/digital_wallets/dialog"
    />
    <meta
            name="shopify-checkout-api-token"
            content="6aacc581eb2b41d74f03c38d3c985dba"
    />
    <meta
            id="in-context-paypal-metadata"
            data-shop-id="17758583"
            data-venmo-supported="true"
            data-environment="production"
            data-locale="en_US"
            data-paypal-v4="true"
            data-currency="USD"
    />
    <style media="all">
        .additional-checkout-button {
            border: 0 !important;
            border-radius: 5px !important;
            display: inline-block;
            margin: 0 0 10px;
            padding: 0 24px !important;
            max-width: 100%;
            min-width: 150px !important;
            line-height: 44px !important;
            text-align: center !important;
        }
        .additional-checkout-button + .additional-checkout-button {
            margin-left: 10px;
        }
        .additional-checkout-button:last-child {
            margin-bottom: 0;
        }
        .additional-checkout-button span {
            font-size: 14px !important;
        }
        .additional-checkout-button img {
            display: inline-block !important;
            height: 1.3em !important;
            margin: 0 !important;
            vertical-align: middle !important;
            width: auto !important;
        }
        @media (max-width: 500px) {
            .additional-checkout-button {
                display: block;
                margin-left: 0 !important;
                padding: 0 10px !important;
                width: 100%;
            }
        }
        .additional-checkout-button--apple-pay {
            background-color: #000 !important;
            color: #fff !important;
            display: none;
            font-family: -apple-system, Helvetica Neue, sans-serif !important;
            min-width: 150px !important;
            white-space: nowrap !important;
        }
        .additional-checkout-button--apple-pay:hover,
        .additional-checkout-button--apple-pay:active,
        .additional-checkout-button--apple-pay:visited {
            color: #fff !important;
            text-decoration: none !important;
        }
        .additional-checkout-button--apple-pay .additional-checkout-button__logo {
            background: -webkit-named-image(apple-pay-logo-white) center center
            no-repeat !important;
            background-size: auto 100% !important;
            display: inline-block !important;
            vertical-align: middle !important;
            width: 3em !important;
            height: 1.3em !important;
        }
        @media (max-width: 500px) {
            .additional-checkout-button--apple-pay {
                display: none;
            }
        }
        .additional-checkout-button--google-pay {
            line-height: 0 !important;
            padding: 0 !important;
            border-radius: unset !important;
            width: 80px !important;
        }
        @media (max-width: 500px) {
            .additional-checkout-button--google-pay {
                width: 100% !important;
            }
        }
        .gpay-iframe {
            height: 44px !important;
            width: 100% !important;
            cursor: pointer;
            vertical-align: middle !important;
        }
        .additional-checkout-button--paypal-express {
            background-color: #ffc439 !important;
        }
        .additional-checkout-button--paypal,
        .additional-checkout-button--venmo {
            vertical-align: top;
            line-height: 0 !important;
            padding: 0 !important;
        }
        .additional-checkout-button--amazon {
            background-color: #fad676 !important;
            position: relative !important;
        }
        .additional-checkout-button--amazon .additional-checkout-button__logo {
            -webkit-transform: translateY(4px) !important;
            transform: translateY(4px) !important;
        }
        .additional-checkout-button--amazon .alt-payment-list-amazon-button-image {
            max-height: none !important;
            opacity: 0 !important;
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
            width: 100% !important;
            height: 100% !important;
        }
        .additional-checkout-button-visually-hidden {
            border: 0 !important;
            clip: rect(0, 0, 0, 0) !important;
            clip: rect(0 0 0 0) !important;
            width: 1px !important;
            height: 1px !important;
            margin: -2px !important;
            overflow: hidden !important;
            padding: 0 !important;
            position: absolute !important;
        }
    </style>
    <script id="apple-pay-shop-capabilities" type="application/json">
        {
            "shopId": 17758583,
            "countryCode": "US",
            "currencyCode": "USD",
            "merchantCapabilities": ["supports3DS"],
            "merchantId": "gid:\/\/shopify\/Shop\/17758583",
            "merchantName": "Materialize Themes",
            "requiredBillingContactFields": ["postalAddress", "email"],
            "requiredShippingContactFields": ["postalAddress", "email"],
            "shippingType": "shipping",
            "supportedNetworks": ["visa", "masterCard", "amex", "discover"],
            "total": {
                "type": "pending",
                "label": "Materialize Themes",
                "amount": "1.00"
            }
        }
    </script>
    <script id="shopify-features" type="application/json">
        {
            "accessToken": "6aacc581eb2b41d74f03c38d3c985dba",
            "betas": [],
            "domain": "themes.materializecss.com",
            "predictiveSearch": true,
            "shopId": 17758583,
            "smart_payment_buttons_url": "https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js",
            "dynamic_checkout_cart_url": "https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js",
            "locale": "en"
        }
    </script>
    <script>
        var Shopify = Shopify || {};
        Shopify.shop = "materialize-themes.myshopify.com";
        Shopify.currency = { active: "USD", rate: "1.0" };
        Shopify.theme = {
            name: "debut",
            id: 133945025,
            theme_store_id: 796,
            role: "main"
        };
        Shopify.theme.handle = "null";
        Shopify.theme.style = { id: null, handle: null };
    </script>
    <script type="module">
        !(function(o) {
            (o.Shopify = o.Shopify || {}).modules = !0;
        })(window);
    </script>
    <script>
        !(function(o) {
            function n() {
                var o = [];
                function n() {
                    o.push(Array.prototype.slice.apply(arguments));
                }
                return (n.q = o), n;
            }
            var t = (o.Shopify = o.Shopify || {});
            (t.loadFeatures = n()), (t.autoloadFeatures = n());
        })(window);
    </script>
    <script>
        window.ShopifyPay = window.ShopifyPay || {};
        window.ShopifyPay.apiHost = "pay.shopify.com";
    </script>
    <script id="__st">
        var __st = {
            a: 17758583,
            offset: -28800,
            reqid: "cc8a3d57-b539-4e9f-8045-ab854a4aa56a",
            pageurl: "themes.materializecss.com\/pages\/admin-dashboard",
            s: "pages-18649776217",
            u: "c2023a5bc889",
            p: "page",
            rtyp: "page",
            rid: 18649776217
        };
    </script>
    <script>
        window.ShopifyPaypalV4VisibilityTracking = true;
    </script>
    <script>
        window.ShopifyAnalytics = window.ShopifyAnalytics || {};
        window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
        window.ShopifyAnalytics.meta.currency = "USD";
        var meta = {
            page: { pageType: "page", resourceType: "page", resourceId: 18649776217 }
        };
        for (var attr in meta) {
            window.ShopifyAnalytics.meta[attr] = meta[attr];
        }
    </script>
    <script>
        window.ShopifyAnalytics.merchantGoogleAnalytics = function() {};
    </script>
    <script class="analytics">
        (window.gaDevIds = window.gaDevIds || []).push("BwiEti");

        (function() {
            var customDocumentWrite = function(content) {
                var jquery = null;

                if (window.jQuery) {
                    jquery = window.jQuery;
                } else if (window.Checkout && window.Checkout.$) {
                    jquery = window.Checkout.$;
                }

                if (jquery) {
                    jquery("body").append(content);
                }
            };

            var isDuplicatedThankYouPageView = function() {
                return (
                    document.cookie.indexOf(
                        "loggedConversion=" + window.location.pathname
                    ) !== -1
                );
            };

            var setCookieIfThankYouPage = function() {
                if (
                    window.location.pathname.indexOf("/checkouts") !== -1 &&
                    window.location.pathname.indexOf("/thank_you") !== -1
                ) {
                    var twoMonthsFromNow = new Date(Date.now());
                    twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

                    document.cookie =
                        "loggedConversion=" +
                        window.location.pathname +
                        "; expires=" +
                        twoMonthsFromNow;
                }
            };

            var trekkie = (window.ShopifyAnalytics.lib = window.trekkie =
                window.trekkie || []);
            if (trekkie.integrations) {
                return;
            }
            trekkie.methods = [
                "identify",
                "page",
                "ready",
                "track",
                "trackForm",
                "trackLink"
            ];
            trekkie.factory = function(method) {
                return function() {
                    var args = Array.prototype.slice.call(arguments);
                    args.unshift(method);
                    trekkie.push(args);
                    return trekkie;
                };
            };
            for (var i = 0; i < trekkie.methods.length; i++) {
                var key = trekkie.methods[i];
                trekkie[key] = trekkie.factory(key);
            }
            trekkie.load = function(config) {
                trekkie.config = config;
                var script = document.createElement("script");
                script.type = "text/javascript";
                script.onerror = function(e) {
                    new Image().src =
                        "//v.shopify.com/internal_errors/track?error=trekkie_load";
                };
                script.async = true;
                script.src =
                    "https://cdn.shopify.com/s/javascripts/tricorder/trekkie.storefront.min.js?v=2019.11.04.1";
                var first = document.getElementsByTagName("script")[0];
                first.parentNode.insertBefore(script, first);
            };
            trekkie.load({
                Trekkie: {
                    appName: "storefront",
                    development: false,
                    defaultAttributes: {
                        shopId: 17758583,
                        isMerchantRequest: null,
                        themeId: 133945025,
                        themeCityHash: "1670185919760860438",
                        contentLanguage: "en",
                        currency: "USD"
                    }
                },
                Performance: {
                    navigationTimingApiMeasurementsEnabled: true,
                    navigationTimingApiMeasurementsSampleRate: 1
                },
                "Google Analytics": {
                    trackingId: "UA-56218128-1",
                    domain: "auto",
                    siteSpeedSampleRate: "10",
                    enhancedEcommerce: true,
                    doubleClick: true,
                    includeSearch: true
                },
                "Session Attribution": {}
            });

            var loaded = false;
            trekkie.ready(function() {
                if (loaded) return;
                loaded = true;

                window.ShopifyAnalytics.lib = window.trekkie;

                ga("require", "linker");
                function addListener(element, type, callback) {
                    if (element.addEventListener) {
                        element.addEventListener(type, callback);
                    } else if (element.attachEvent) {
                        element.attachEvent("on" + type, callback);
                    }
                }
                function decorate(event) {
                    event = event || window.event;
                    var target = event.target || event.srcElement;
                    if (
                        target &&
                        (target.getAttribute("action") || target.getAttribute("href"))
                    ) {
                        ga(function(tracker) {
                            var linkerParam = tracker.get("linkerParam");
                            document.cookie = "_shopify_ga=" + linkerParam + "; " + "path=/";
                        });
                    }
                }
                addListener(window, "load", function() {
                    for (var i = 0; i < document.forms.length; i++) {
                        var action = document.forms[i].getAttribute("action");
                        if (action && action.indexOf("/cart") >= 0) {
                            addListener(document.forms[i], "submit", decorate);
                        }
                    }
                    for (var i = 0; i < document.links.length; i++) {
                        var href = document.links[i].getAttribute("href");
                        if (href && href.indexOf("/checkout") >= 0) {
                            addListener(document.links[i], "click", decorate);
                        }
                    }
                });

                var originalDocumentWrite = document.write;
                document.write = customDocumentWrite;
                try {
                    window.ShopifyAnalytics.merchantGoogleAnalytics.call(this);
                } catch (error) {}
                document.write = originalDocumentWrite;
                (function() {
                    if (
                        window.BOOMR &&
                        (window.BOOMR.version || window.BOOMR.snippetExecuted)
                    ) {
                        return;
                    }
                    window.BOOMR = window.BOOMR || {};
                    window.BOOMR.snippetStart = new Date().getTime();
                    window.BOOMR.snippetExecuted = true;
                    window.BOOMR.snippetVersion = 12;
                    window.BOOMR.shopId = 17758583;
                    window.BOOMR.themeId = 133945025;
                    window.BOOMR.url =
                        "https://cdn.shopify.com/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
                    var where =
                        document.currentScript || document.getElementsByTagName("script")[0];
                    var parentNode = where.parentNode;
                    var promoted = false;
                    var LOADER_TIMEOUT = 3000;
                    function promote() {
                        if (promoted) {
                            return;
                        }
                        var script = document.createElement("script");
                        script.id = "boomr-scr-as";
                        script.src = window.BOOMR.url;
                        script.async = true;
                        parentNode.appendChild(script);
                        promoted = true;
                    }
                    function iframeLoader(wasFallback) {
                        promoted = true;
                        var dom, bootstrap, iframe, iframeStyle;
                        var doc = document;
                        var win = window;
                        window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
                        bootstrap = function(parent, scriptId) {
                            var script = doc.createElement("script");
                            script.id = scriptId || "boomr-if-as";
                            script.src = window.BOOMR.url;
                            BOOMR_lstart = new Date().getTime();
                            parent = parent || doc.body;
                            parent.appendChild(script);
                        };
                        if (
                            !window.addEventListener &&
                            window.attachEvent &&
                            navigator.userAgent.match(/MSIE [67]./)
                        ) {
                            window.BOOMR.snippetMethod = "s";
                            bootstrap(parentNode, "boomr-async");
                            return;
                        }
                        iframe = document.createElement("IFRAME");
                        iframe.src = "about:blank";
                        iframe.title = "";
                        iframe.role = "presentation";
                        iframe.loading = "eager";
                        iframeStyle = (iframe.frameElement || iframe).style;
                        iframeStyle.width = 0;
                        iframeStyle.height = 0;
                        iframeStyle.border = 0;
                        iframeStyle.display = "none";
                        parentNode.appendChild(iframe);
                        try {
                            win = iframe.contentWindow;
                            doc = win.document.open();
                        } catch (e) {
                            dom = document.domain;
                            iframe.src =
                                "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
                            win = iframe.contentWindow;
                            doc = win.document.open();
                        }
                        if (dom) {
                            doc._boomrl = function() {
                                this.domain = dom;
                                bootstrap();
                            };
                            doc.write("<body onload='document._boomrl();'>");
                        } else {
                            win._boomrl = function() {
                                bootstrap();
                            };
                            if (win.addEventListener) {
                                win.addEventListener("load", win._boomrl, false);
                            } else if (win.attachEvent) {
                                win.attachEvent("onload", win._boomrl);
                            }
                        }
                        doc.close();
                    }
                    var link = document.createElement("link");
                    if (
                        link.relList &&
                        typeof link.relList.supports === "function" &&
                        link.relList.supports("preload") &&
                        "as" in link
                    ) {
                        window.BOOMR.snippetMethod = "p";
                        link.href = window.BOOMR.url;
                        link.rel = "preload";
                        link.as = "script";
                        link.addEventListener("load", promote);
                        link.addEventListener("error", function() {
                            iframeLoader(true);
                        });
                        setTimeout(function() {
                            if (!promoted) {
                                iframeLoader(true);
                            }
                        }, LOADER_TIMEOUT);
                        BOOMR_lstart = new Date().getTime();
                        parentNode.appendChild(link);
                    } else {
                        iframeLoader(false);
                    }
                    function boomerangSaveLoadTime(e) {
                        window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
                    }
                    if (window.addEventListener) {
                        window.addEventListener("load", boomerangSaveLoadTime, false);
                    } else if (window.attachEvent) {
                        window.attachEvent("onload", boomerangSaveLoadTime);
                    }
                    if (document.addEventListener) {
                        document.addEventListener("onBoomerangLoaded", function(e) {
                            e.detail.BOOMR.init({});
                            e.detail.BOOMR.t_end = new Date().getTime();
                        });
                    } else if (document.attachEvent) {
                        document.attachEvent("onpropertychange", function(e) {
                            if (!e) e = event;
                            if (e.propertyName === "onBoomerangLoaded") {
                                e.detail.BOOMR.init({});
                                e.detail.BOOMR.t_end = new Date().getTime();
                            }
                        });
                    }
                })();

                if (!isDuplicatedThankYouPageView()) {
                    setCookieIfThankYouPage();

                    window.ShopifyAnalytics.lib.page(null, {
                        pageType: "page",
                        resourceType: "page",
                        resourceId: 18649776217
                    });
                }
            });

            var eventsListenerScript = document.createElement("script");
            eventsListenerScript.async = true;
            eventsListenerScript.src =
                "//cdn.shopify.com/s/assets/shop_events_listener-09875a9a2b286acf534498184c24b199675a6097a941992d0979e5295d2cf9e9.js";
            document.getElementsByTagName("head")[0].appendChild(eventsListenerScript);
        })();
    </script>
    <script
            integrity="sha256-mO+GKBT+KVLtCJOxhHda/n8GRk8f8i7hhza2QxpsYxc="
            crossorigin="anonymous"
            data-source-attribution="shopify.loadfeatures"
            defer="defer"
            src="//cdn.shopify.com/s/assets/storefront/load_feature-98ef862814fe2952ed0893b184775afe7f06464f1ff22ee18736b6431a6c6317.js"
    ></script>
    <script
            crossorigin="anonymous"
            defer="defer"
            src="//cdn.shopify.com/s/assets/shopify_pay/storefront-f95c62afca18778ed8677facd32818c864b5e4938cba1769e8d8ba0b541d41dc.js?v=20190107"
    ></script>
    <script
            integrity="sha256-QhO9bRGdM3QYSbs6SNVRsFMjGC8vxxXkRhwgt2BijtI="
            data-source-attribution="shopify.dynamic-checkout"
            defer="defer"
            src="//cdn.shopify.com/s/assets/storefront/features-4213bd6d119d33741849bb3a48d551b05323182f2fc715e4461c20b760628ed2.js"
            crossorigin="anonymous"
    ></script>
    <script
            defer="defer"
            src="//cdn.shopify.com/s/assets/themes_support/ga_urchin_forms-99e991855b3d8ddc69e625c68ab0579dd9927b611c2ec4943d396c72e3af0849.js"
    ></script>

    <style id="shopify-dynamic-checkout-cart">
        @media screen and (min-width: 750px) {
            #dynamic-checkout-cart {
                min-height: 50px;
            }
        }

        @media screen and (max-width: 750px) {
            #dynamic-checkout-cart {
                min-height: 240px;
            }
        }
    </style>
    <script>
        window.performance &&
        window.performance.mark &&
        window.performance.mark("shopify.content_for_header.end");
    </script>
    <link
            rel="canonical"
            href="https://themes.materializecss.com/pages/admin-dashboard"
    />
</head>
<body class="has-fixed-sidenav">
<header>
    <div class="navbar-fixed">
        <nav class="navbar white">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo grey-text text-darken-4">Home</a>
                <ul id="nav-mobile" class="right">
                    <li class="hide-on-med-and-down">
                        <a href="/products/admin">Buy Now!</a>
                    </li>
                    <li class="hide-on-med-and-down">
                        <a
                                href="#!"
                                data-target="dropdown1"
                                class="dropdown-trigger waves-effect"
                        ><i class="material-icons">notifications</i></a
                        >
                    </li>
                    <li>
                        <a
                                href="#!"
                                data-target="chat-dropdown"
                                class="dropdown-trigger waves-effect"
                        ><i class="material-icons">settings</i></a
                        >
                    </li>
                </ul>
                <a href="#!" data-target="sidenav-left" class="sidenav-trigger left"
                ><i class="material-icons black-text">menu</i></a
                >
            </div>
        </nav>
    </div>
    <ul id="sidenav-left" class="sidenav sidenav-fixed">
        <li>
            <a href="/pages/admin-dashboard" class="logo-container"
            >Admin<i class="material-icons left">spa</i></a
            >
        </li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li class="bold waves-effect active">
                    <a class="collapsible-header"
                    >Pages<i class="material-icons chevron">chevron_left</i></a
                    >
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href="/pages/admin-dashboard" class="waves-effect active"
                                >Dashboard<i class="material-icons">web</i></a
                                >
                            </li>
                            <li>
                                <a href="/pages/admin-fixed-chart" class="waves-effect"
                                >Fixed Chart<i class="material-icons">list</i></a
                                >
                            </li>
                            <li>
                                <a href="/pages/admin-grid" class="waves-effect"
                                >Grid<i class="material-icons">dashboard</i></a
                                >
                            </li>
                            <li>
                                <a href="/pages/admin-chat" class="waves-effect"
                                >Chat<i class="material-icons">chat</i></a
                                >
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold waves-effect">
                    <a class="collapsible-header"
                    >Charts<i class="material-icons chevron">chevron_left</i></a
                    >
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href="/pages/admin-line-charts" class="waves-effect"
                                >Line Charts<i class="material-icons">show_chart</i></a
                                >
                            </li>
                            <li>
                                <a href="/pages/admin-bar-charts" class="waves-effect"
                                >Bar Charts<i class="material-icons">equalizer</i></a
                                >
                            </li>
                            <li>
                                <a href="/pages/admin-area-charts" class="waves-effect"
                                >Area Charts<i class="material-icons">multiline_chart</i></a
                                >
                            </li>
                            <li>
                                <a href="/pages/admin-doughnut-charts" class="waves-effect"
                                >Doughnut Charts<i class="material-icons">pie_chart</i></a
                                >
                            </li>
                            <li>
                                <a href="/pages/admin-financial-charts" class="waves-effect"
                                >Financial Charts<i class="material-icons">euro_symbol</i></a
                                >
                            </li>
                            <li>
                                <a href="/pages/admin-interactive-charts" class="waves-effect"
                                >Interactive Charts<i class="material-icons">touch_app</i></a
                                >
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold waves-effect">
                    <a class="collapsible-header"
                    >Tables<i class="material-icons chevron">chevron_left</i></a
                    >
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href="/pages/admin-fullscreen-table" class="waves-effect"
                                >Fullscreen with Chart<i class="material-icons">show_chart</i></a
                                >
                            </li>
                            <li>
                                <a href="/pages/admin-table-custom-elements" class="waves-effect"
                                >Table with Custom Elements<i class="material-icons">settings</i></a
                                >
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold waves-effect">
                    <a class="collapsible-header"
                    >Calendar<i class="material-icons chevron">chevron_left</i></a
                    >
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href="/pages/admin-calendar" class="waves-effect"
                                >Calendar<i class="material-icons">cloud</i></a
                                >
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold waves-effect">
                    <a class="collapsible-header"
                    >Headers<i class="material-icons chevron">chevron_left</i></a
                    >
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href="/pages/admin-header-tabbed" class="waves-effect"
                                >Tabbed<i class="material-icons">tab</i></a
                                >
                            </li>
                            <li>
                                <a href="/pages/admin-header-metrics" class="waves-effect"
                                >Metrics<i class="material-icons">web</i></a
                                >
                            </li>
                            <li>
                                <a href="/pages/admin-header-search" class="waves-effect"
                                >Search<i class="material-icons">search</i></a
                                >
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold waves-effect">
                    <a class="collapsible-header"
                    >Account<i class="material-icons chevron">chevron_left</i></a
                    >
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href="/pages/admin-log-in" class="waves-effect"
                                >Log In<i class="material-icons">person</i></a
                                >
                            </li>
                            <li>
                                <a href="/pages/admin-settings" class="waves-effect"
                                >Settings<i class="material-icons">settings</i></a
                                >
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
    </ul>

    <div id="dropdown1" class="dropdown-content notifications">
        <div class="notifications-title">notifications</div>
        <div class="card">
            <div class="card-content">
                <span class="card-title">Joe Smith made a purchase</span>
                <p>Content</p>
            </div>
            <div class="card-action">
                <a href="#!">view</a><a href="#!">dismiss</a>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <span class="card-title">Daily Traffic Update</span>
                <p>Content</p>
            </div>
            <div class="card-action">
                <a href="#!">view</a><a href="#!">dismiss</a>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <span class="card-title">New User Joined</span>
                <p>Content</p>
            </div>
            <div class="card-action">
                <a href="#!">view</a><a href="#!">dismiss</a>
            </div>
        </div>
    </div>
    <div id="chat-dropdown" class="dropdown-content dropdown-tabbed">
        <ul class="tabs tabs-fixed-width">
            <li class="tab col s3"><a href="#settings">Settings</a></li>
            <li class="tab col s3"><a href="#friends" class="active">Friends</a></li>
        </ul>
        <div id="settings" class="col s12">
            <div class="settings-group">
                <div class="setting">
                    Night Mode
                    <div class="switch right">
                        <label> <input type="checkbox" /><span class="lever"></span> </label>
                    </div>
                </div>
                <div class="setting">
                    Beta Testing
                    <label class="right"> <input type="checkbox" /><span></span> </label>
                </div>
            </div>
        </div>
        <div id="friends" class="col s12">
            <ul class="collection flush">
                <li class="collection-item avatar">
                    <div class="badged-circle online">
                        <img
                                src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/portrait1.jpg?v=1218798423999129079"
                                alt="avatar"
                                class="circle"
                        />
                    </div>
                    <span class="title">Jane Doe</span>
                    <p class="truncate">Lo-fi you probably haven't heard of them</p>
                </li>
                <li class="collection-item avatar">
                    <div class="badged-circle">
                        <img
                                src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/portrait2.jpg?v=15342908036415923195"
                                alt="avatar"
                                class="circle"
                        />
                    </div>
                    <span class="title">John Chang</span>
                    <p class="truncate">
                        etsy leggings raclette kickstarter four dollar toast
                    </p>
                </li>
                <li class="collection-item avatar">
                    <div class="badged-circle">
                        <img
                                src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/portrait3.jpg?v=4679613373594475586"
                                alt="avatar"
                                class="circle"
                        />
                    </div>
                    <span class="title">Lisa Simpson</span>
                    <p class="truncate">
                        Raw denim fingerstache food truck chia health goth synth
                    </p>
                </li>
            </ul>
        </div>
    </div>
</header>
<main>
    <div class="container">
        <div class="masonry row">
            <div class="col s12">
                <h2>Dashboard</h2>
            </div>
            <div class="col l3 m6 s12">
                <div class="card">
                    <div class="card-stacked">
                        <div class="card-metrics card-metrics-static">
                            <div class="card-metric">
                                <div class="card-metric-title">Revenue</div>
                                <div class="card-metric-value">$12,476.00</div>
                                <div class="card-metric-change increase">
                                    <i class="material-icons left">keyboard_arrow_up</i>
                                    12%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-chart">
                        <canvas id="flush-area-chart-blue" height="100px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col l3 m6 s12">
                <div class="card">
                    <div class="card-stacked">
                        <div class="card-metrics card-metrics-static">
                            <div class="card-metric">
                                <div class="card-metric-title">Clicks</div>
                                <div class="card-metric-value">11,893</div>
                                <div class="card-metric-change increase">
                                    <i class="material-icons left">keyboard_arrow_up</i>
                                    8%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-chart">
                        <canvas id="flush-area-chart-yellow" height="100px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col l3 m6 s12">
                <div class="card">
                    <div class="card-stacked">
                        <div class="card-metrics card-metrics-static">
                            <div class="card-metric">
                                <div class="card-metric-title">Users</div>
                                <div class="card-metric-value">230,648</div>
                                <div class="card-metric-change decrease">
                                    <i class="material-icons left">keyboard_arrow_down</i>
                                    2%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-chart">
                        <canvas id="flush-area-chart-pink" height="100"></canvas>
                    </div>
                </div>
            </div>
            <div class="col l3 m6 s12">
                <div class="card">
                    <div class="card-stacked">
                        <div class="card-metrics card-metrics-static">
                            <div class="card-metric">
                                <div class="card-metric-title">Conversion Rate</div>
                                <div class="card-metric-value">0.24%</div>
                                <div class="card-metric-change decrease">
                                    <i class="material-icons left">keyboard_arrow_down</i>
                                    9%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-chart">
                        <canvas id="flush-area-chart-green" height="100"></canvas>
                    </div>
                </div>
            </div>

            <div class="col s12">
                <div class="card">
                    <div class="card-metrics card-metrics-toggle card-metrics-centered">
                        <div class="card-metric waves-effect active" data-metric="revenue">
                            <div class="card-metric-title">Revenue</div>
                            <div class="card-metric-value">$12,476.00</div>
                            <div class="card-metric-change">
                                <i class="material-icons">keyboard_arrow_up</i>
                                12%
                            </div>
                        </div>
                        <div class="card-metric waves-effect" data-metric="users">
                            <div class="card-metric-title">Users</div>
                            <div class="card-metric-value">2024</div>
                            <div class="card-metric-change">
                                <i class="material-icons">keyboard_arrow_up</i>
                                9%
                            </div>
                        </div>
                        <div class="card-metric waves-effect" data-metric="ctr">
                            <div class="card-metric-title">CTR</div>
                            <div class="card-metric-value">0.20%</div>
                            <div class="card-metric-change">
                                <i class="material-icons">keyboard_arrow_up</i>
                                4%
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <canvas
                                class="card-chart"
                                id="main-toggle-line-chart"
                                width="400"
                                height="400"
                        ></canvas>
                    </div>
                </div>
            </div>

            <div class="col m6 s12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Updates</span>
                        <ul class="badge-updates">
                            <li>
                                <span class="new badge red" data-badge-caption="refund"></span>
                                <span class="message">45$ refunded to Alan Chang</span>
                                <span class="time">14 minutes ago</span>
                            </li>
                            <li>
                                <span class="new badge green" data-badge-caption="purchase"></span>
                                <span class="message">45$ from Alan Chang</span>
                                <span class="time">14 minutes ago</span>
                            </li>
                            <li>
                                <span class="new badge red" data-badge-caption="refund"></span>
                                <span class="message">45$ refunded to Alan Chang</span>
                                <span class="time">14 minutes ago</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col m6 s12">
                <div id="tab-legend-chart-card" class="card primary-color">
                    <div class="card-content">
                        <p class="white-text">
                            I am a very simple card. I am good at containing small bits of
                            information. I am convenient because I require little markup to use
                            effectively.
                        </p>
                    </div>
                    <div class="card-content">
                        <canvas
                                class="card-chart"
                                id="tab-legend-line-chart"
                                width="400"
                                height="400"
                        ></canvas>
                    </div>
                </div>
            </div>

            <div class="col m6 s12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-title">Stacked Bar Chart</div>
                        <div class="chart-wrapper">
                            <canvas id="stacked-bar-chart" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!--     <div class="col m6 s12">
             <div class="card horizontal">
               <div class="card-stacked">
                 <div class="card-metrics">
                   <div class="card-metric waves-effect active">
                     <div class="card-metric-title">Revenue</div>
                     <div class="card-metric-value">$12,476.00</div>
                     <div class="card-metric-change">
                       <i class="material-icons left">keyboard_arrow_up</i>
                       12%
                     </div>
                   </div>
                 </div>
               </div>
               <div class="card-content">
                 <canvas id="mini-line-chart" width="100%" height="100%"></canvas>
               </div>
             </div>
           </div>

           <div class="col m6 s12">
             <div class="card horizontal">
               <div class="card-stacked">
                 <div class="card-metrics">
                   <div class="card-metric waves-effect active">
                     <div class="card-metric-title">Revenue</div>
                     <div class="card-metric-value">$12,476.00</div>
                     <div class="card-metric-change">
                       <i class="material-icons left">keyboard_arrow_up</i>
                       12%
                     </div>
                   </div>
                 </div>
               </div>
               <div class="card-content">
                 <canvas id="mini-stacked-bar-chart" width="100%" height="100%"></canvas>
               </div>
             </div>

           </div> -->

            <div class="col m6 s12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Devices</span>
                        <div class="row row-vertical-center">
                            <div class="col s6">
                                <canvas id="doughnut-chart" width="50%"></canvas>
                            </div>
                            <div class="col s6">
                                <div class="chart-legend-wrapper"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="masonry row">
            <div class="col s12">
                <h2>Secondary Data</h2>
            </div>

            <div class="col m6 s12">
                <div class="card">
                    <div class="card-content">
                        <div id="vmap" style="width: 100%; height: 400px;"></div>
                    </div>
                </div>
            </div>

            <div class="col m6 s12">
                <div class="card">
                    <div id="calendar"></div>
                </div>
            </div>

            <div class="col s12">
                <div class="card">
                    <table
                            id="default-table-example"
                            class="row-border"
                            cellspacing="0"
                            width="100%"
                    >
                        <thead>
                        <tr>
                            <th>
                                <label
                                ><input
                                            name="select_all"
                                            value="1"
                                            id="example-select-all"
                                            type="checkbox"/><span></span
                                    ></label>
                            </th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                        </thead>
                        <!-- <tfoot>
                            <tr>
                              <th>Name</th>
                              <th>Position</th>
                              <th>Office</th>
                              <th>Age</th>
                              <th>Start date</th>
                              <th>Salary</th>
                            </tr>
                          </tfoot> -->
                        <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                            <td>$162,700</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col s6 m3">
                <img
                        class="materialize-logo"
                        src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/materialize-logo.png?v=17909639059119771368"
                        alt="Materialize"
                />
                <p>Made with love by Materialize.</p>
            </div>
            <div class="col s6 m3">
                <h5>About</h5>
                <ul>
                    <li><a href="#!">Blog</a></li>
                    <li><a href="#!">Pricing</a></li>
                    <li><a href="#!">Docs</a></li>
                </ul>
            </div>
            <div class="col s6 m3">
                <h5>Connect</h5>
                <ul>
                    <li><a href="#!">Community</a></li>
                    <li><a href="#!">Subscribe</a></li>
                    <li><a href="#!">Email</a></li>
                </ul>
            </div>
            <div class="col s6 m3">
                <h5>Contact</h5>
                <ul>
                    <li><a href="#!">Twitter</a></li>
                    <li><a href="#!">Facebook</a></li>
                    <li><a href="#!">Github</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/moment.min.js"></script>

<!-- External libraries -->

<!-- jqvmap -->
<script
        type="text/javascript"
        src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/jquery.vmap.min.js?v=16312383892908448454"
></script>
<script
        type="text/javascript"
        src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/jquery.vmap.world.js?v=7251365059269487148"
        charset="utf-8"
></script>
<script
        type="text/javascript"
        src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/jquery.vmap.sampledata.js?v=8702362987075556685"
></script>

<!-- ChartJS -->
<script
        type="text/javascript"
        src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/Chart.js?v=2884891905158527706"
></script>
<script
        type="text/javascript"
        src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/Chart.Financial.js?v=3464499164675255295"
></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.7.0/fullcalendar.min.js"></script>
<script
        type="text/javascript"
        src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"
></script>
<script src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/imagesloaded.pkgd.min.js?v=5881977179676351054"></script>
<script src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/masonry.pkgd.min.js?v=18031290468259756901"></script>

<!-- Initialization script -->
<script src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/dashboard.min.js?v=481680883062710906"></script>
</body>
</html>
