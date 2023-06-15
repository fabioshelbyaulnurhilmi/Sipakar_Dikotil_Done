<!-- DEBUG-VIEW START 1 APPPATH/Views/dashboard/admin/laporan/print.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript" id="debugbar_loader" data-time="1678184492"
        src="http://sipakar.informasi19.com/?debugbar"></script>
    <script type="text/javascript" id="debugbar_dynamic_script"></script>
    <style type="text/css" id="debugbar_dynamic_style"></style>
    <script class="kint-rich-script">
        void 0 === window.kintShared && (window.kintShared = function() {
            "use strict";
            var e = {
                dedupe: function(e, n) {
                    return [].forEach.call(document.querySelectorAll(e), function(e) {
                        e !== (n = !n || !n.ownerDocument.contains(n) ? e : n) && e.parentNode
                            .removeChild(e)
                    }), n
                },
                runOnce: function(e) {
                    "complete" === document.readyState ? e() : window.addEventListener("load", e)
                }
            };
            return window.addEventListener("click", function(e) {
                var n;
                e.target.classList.contains("kint-ide-link") && ((n = new XMLHttpRequest).open("GET", e
                    .target.href), n.send(null), e.preventDefault())
            }), e
        }());
        void 0 === window.kintRich && (window.kintRich = function() {
            "use strict";
            var l = {
                selectText: function(e) {
                    var t = window.getSelection(),
                        a = document.createRange();
                    a.selectNodeContents(e), t.removeAllRanges(), t.addRange(a)
                },
                each: function(e, t) {
                    Array.prototype.slice.call(document.querySelectorAll(e), 0).forEach(t)
                },
                hasClass: function(e, t) {
                    return !!e.classList && e.classList.contains(t = void 0 === t ? "kint-show" : t)
                },
                addClass: function(e, t) {
                    e.classList.add(t = void 0 === t ? "kint-show" : t)
                },
                removeClass: function(e, t) {
                    return e.classList.remove(t = void 0 === t ? "kint-show" : t), e
                },
                toggle: function(e, t) {
                    var a = l.getChildren(e);
                    a && ((t = void 0 === t ? l.hasClass(e) : t) ? l.removeClass(e) : l.addClass(e), 1 === a
                        .childNodes.length && (a = a.childNodes[0].childNodes[0]) && l.hasClass(a,
                            "kint-parent") && l.toggle(a, t))
                },
                toggleChildren: function(e, t) {
                    var a = l.getChildren(e);
                    if (a) {
                        var o = a.getElementsByClassName("kint-parent"),
                            r = o.length;
                        for (void 0 === t && (t = !l.hasClass(e)); r--;) l.toggle(o[r], t)
                    }
                },
                toggleAll: function(e) {
                    for (var t = document.getElementsByClassName("kint-parent"), a = t.length, o = !l
                            .hasClass(e.parentNode); a--;) l.toggle(t[a], o)
                },
                switchTab: function(e) {
                    var t = e.previousSibling,
                        a = 0;
                    for (l.removeClass(e.parentNode.getElementsByClassName("kint-active-tab")[0],
                            "kint-active-tab"), l.addClass(e, "kint-active-tab"); t;) 1 === t.nodeType &&
                        a++, t = t.previousSibling;
                    for (var o = e.parentNode.nextSibling.childNodes, r = 0; r < o.length; r++) r === a ? (l
                            .addClass(o[r]), 1 === o[r].childNodes.length && (t = o[r].childNodes[0]
                                .childNodes[0]) && l.hasClass(t, "kint-parent") && l.toggle(t, !1)) : l
                        .removeClass(o[r])
                },
                mktag: function(e) {
                    return "<" + e + ">"
                },
                openInNewWindow: function(e) {
                    var t = window.open();
                    t && (t.document.open(), t.document.write(l.mktag("html") + l.mktag("head") + l.mktag(
                            "title") + "Kint (" + (new Date).toISOString() + ")" + l.mktag(
                            "/title") + l.mktag('meta charset="utf-8"') + l.mktag(
                            'script class="kint-rich-script" nonce="' + l.script.nonce + '"') + l
                        .script.innerHTML + l.mktag("/script") + l.mktag(
                            'style class="kint-rich-style" nonce="' + l.style.nonce + '"') + l.style
                        .innerHTML + l.mktag("/style") + l.mktag("/head") + l.mktag("body") +
                        '<input class="kint-note-input" placeholder="Take some notes!"><div class="kint-rich">' +
                        e.parentNode.outerHTML + "</div>" + l.mktag("/body")), t.document.close())
                },
                sortTable: function(e, a) {
                    var t = e.tBodies[0];
                    [].slice.call(e.tBodies[0].rows).sort(function(e, t) {
                        if (e = e.cells[a].textContent.trim().toLocaleLowerCase(), t = t.cells[a]
                            .textContent.trim().toLocaleLowerCase(), isNaN(e) || isNaN(t)) {
                            if (isNaN(e) && !isNaN(t)) return 1;
                            if (isNaN(t) && !isNaN(e)) return -1
                        } else e = parseFloat(e), t = parseFloat(t);
                        return e < t ? -1 : t < e ? 1 : 0
                    }).forEach(function(e) {
                        t.appendChild(e)
                    })
                },
                showAccessPath: function(e) {
                    for (var t = e.childNodes, a = 0; a < t.length; a++)
                        if (l.hasClass(t[a], "access-path")) return void(l.hasClass(t[a], "kint-show") ? l
                            .removeClass(t[a]) : (l.addClass(t[a]), l.selectText(t[a])))
                },
                showSearchBox: function(e) {
                    var t = e.querySelector(".kint-search");
                    t && (l.hasClass(t) ? (l.removeClass(t), l.removeClass(e.parentNode,
                        "kint-search-root")) : (l.addClass(e), l.addClass(t), t.focus(), t.select(),
                        l.search(e.parentNode, t.value)))
                },
                search: function(e, t) {
                    var a = e.querySelectorAll(".kint-search-match");
                    [].forEach.call(a, function(e) {
                        l.removeClass(e, "kint-search-match")
                    }), l.removeClass(e, "kint-search-match"), t.length ? (l.addClass(e,
                        "kint-search-root"), l.findMatches(e, t)) : l.removeClass(e, "kint-search-root")
                },
                findMatches: function(e, t) {
                    var a, o, r, s = e.cloneNode(!0);
                    if (s.querySelectorAll(".access-path").forEach(function(e) {
                            e.remove()
                        }), -1 != s.textContent.toUpperCase().indexOf(t.toUpperCase())) {
                        for (n in l.addClass(e, "kint-search-match"), e.childNodes)
                            if ("DD" == e.childNodes[n].tagName) {
                                a = e.childNodes[n];
                                break
                            } if (a)
                            if ([].forEach.call(a.childNodes, function(e) {
                                    "DL" == e.tagName ? l.findMatches(e, t) : "UL" == e.tagName && (l
                                        .hasClass(e, "kint-tabs") ? o = e.childNodes : l.hasClass(e,
                                            "kint-tab-contents") && (r = e.childNodes))
                                }), o && r && o.length == r.length)
                                for (var n = 0; n < o.length; n++) {
                                    var i = !1; - 1 != o[n].textContent.toUpperCase().indexOf(t
                                        .toUpperCase()) ? i = !0 : ((s = r[n].cloneNode(!0))
                                        .querySelectorAll(".access-path").forEach(function(e) {
                                            e.remove()
                                        }), -1 != s.textContent.toUpperCase().indexOf(t
                                            .toUpperCase()) && (i = !0)), i && (l.addClass(o[n],
                                        "kint-search-match"), [].forEach.call(r[n].childNodes,
                                        function(e) {
                                            "DL" == e.tagName && l.findMatches(e, t)
                                        }))
                                }
                    }
                },
                getParentByClass: function(e, t) {
                    for (void 0 === t && (t = "kint-rich");
                        (e = e.parentNode) && !l.hasClass(e, t););
                    return e
                },
                getParentHeader: function(e, t) {
                    for (var a = e.nodeName.toLowerCase();
                        "dd" !== a && "dt" !== a && l.getParentByClass(e);) a = (e = e.parentNode).nodeName
                        .toLowerCase();
                    return l.getParentByClass(e) ? (e = "dd" === a && t ? e.previousElementSibling : e) &&
                        "dt" === e.nodeName.toLowerCase() && l.hasClass(e, "kint-parent") ? e : void 0 :
                        null
                },
                getChildren: function(e) {
                    for (;
                        (e = e.nextElementSibling) && "dd" !== e.nodeName.toLowerCase(););
                    return e
                },
                isFolderOpen: function() {
                    if (l.folder && l.folder.querySelector("dd.kint-foldout")) return l.hasClass(l.folder
                        .querySelector("dd.kint-foldout").previousSibling)
                },
                initLoad: function() {
                    l.style = window.kintShared.dedupe("style.kint-rich-style", l.style), l.script = window
                        .kintShared.dedupe("script.kint-rich-script", l.script), l.folder = window
                        .kintShared.dedupe(".kint-rich.kint-folder", l.folder);
                    var t, e = document.querySelectorAll("input.kint-search");
                    [].forEach.call(e, function(t) {
                        function e(e) {
                            window.clearTimeout(a), t.value !== o && (a = window.setTimeout(
                                function() {
                                    o = t.value, l.search(t.parentNode.parentNode, o)
                                }, 500))
                        }
                        var a = null,
                            o = null;
                        t.removeEventListener("keyup", e), t.addEventListener("keyup", e)
                    }), l.folder && (t = l.folder.querySelector("dd"), [].forEach.call(document
                        .querySelectorAll(".kint-rich.kint-file"),
                        function(e) {
                            e.parentNode !== l.folder && t.appendChild(e)
                        }), document.body.appendChild(l.folder), l.addClass(l.folder))
                },
                keyboardNav: {
                    targets: [],
                    target: 0,
                    active: !1,
                    fetchTargets: function() {
                        var e = l.keyboardNav.targets[l.keyboardNav.target];
                        l.keyboardNav.targets = [], l.each(
                            ".kint-rich nav, .kint-tabs>li:not(.kint-active-tab)",
                            function(e) {
                                l.isFolderOpen() && !l.folder.contains(e) || 0 === e.offsetWidth &&
                                    0 === e.offsetHeight || l.keyboardNav.targets.push(e)
                            }), e && -1 !== l.keyboardNav.targets.indexOf(e) && (l.keyboardNav.target =
                            l.keyboardNav.targets.indexOf(e))
                    },
                    sync: function(e) {
                        var t = document.querySelector(".kint-focused");
                        t && l.removeClass(t, "kint-focused"), l.keyboardNav.active && (t = l.keyboardNav
                            .targets[l.keyboardNav.target], l.addClass(t, "kint-focused"), e || l
                            .keyboardNav.scroll(t))
                    },
                    scroll: function(e) {
                        var t, a;
                        e !== l.folder.querySelector("dt > nav") && (a = (t = function(e) {
                                return e.offsetTop + (e.offsetParent ? t(e.offsetParent) : 0)
                            })(e), l.isFolderOpen() ? (e = l.folder.querySelector("dd.kint-foldout"))
                            .scrollTo(0, a - e.clientHeight / 2) : window.scrollTo(0, a - window
                                .innerHeight / 2))
                    },
                    moveCursor: function(e) {
                        for (l.keyboardNav.target += e; l.keyboardNav.target < 0;) l.keyboardNav.target += l
                            .keyboardNav.targets.length;
                        for (; l.keyboardNav.target >= l.keyboardNav.targets.length;) l.keyboardNav
                            .target -= l.keyboardNav.targets.length;
                        l.keyboardNav.sync()
                    },
                    setCursor: function(e) {
                        if (l.isFolderOpen() && !l.folder.contains(e)) return !1;
                        l.keyboardNav.fetchTargets();
                        for (var t = 0; t < l.keyboardNav.targets.length; t++)
                            if (e === l.keyboardNav.targets[t]) return l.keyboardNav.target = t, !0;
                        return !1
                    }
                },
                mouseNav: {
                    lastClickTarget: null,
                    lastClickTimer: null,
                    lastClickCount: 0,
                    renewLastClick: function() {
                        window.clearTimeout(l.mouseNav.lastClickTimer), l.mouseNav.lastClickTimer = window
                            .setTimeout(function() {
                                l.mouseNav.lastClickTarget = null, l.mouseNav.lastClickTimer = null, l
                                    .mouseNav.lastClickCount = 0
                            }, 250)
                    }
                },
                style: null,
                script: null,
                folder: null
            };
            return window.addEventListener("click", function(e) {
                var t = e.target,
                    a = t.nodeName.toLowerCase();
                if (l.mouseNav.lastClickTarget && l.mouseNav.lastClickTimer && l.mouseNav.lastClickCount)
                    return t = l.mouseNav.lastClickTarget, void(1 === l.mouseNav.lastClickCount ? (l
                        .toggleChildren(t.parentNode), l.keyboardNav.setCursor(t), l.keyboardNav
                        .sync(!0), l.mouseNav.lastClickCount++, l.mouseNav.renewLastClick()) : (l
                        .toggleAll(t), l.keyboardNav.setCursor(t), l.keyboardNav.sync(!0), l
                        .keyboardNav.scroll(t), window.clearTimeout(l.mouseNav.lastClickTimer), l
                        .mouseNav.lastClickTarget = null, l.mouseNav.lastClickTarget = null, l
                        .mouseNav.lastClickCount = 0));
                if (l.getParentByClass(t)) {
                    if ("dfn" === a) l.selectText(t);
                    else if ("th" === a) return void(e.ctrlKey || l.sortTable(t.parentNode.parentNode
                        .parentNode, t.cellIndex));
                    if ((t = l.getParentHeader(t)) && (l.keyboardNav.setCursor(t.querySelector("nav")), l
                            .keyboardNav.sync(!0)), t = e.target, "li" === a && "kint-tabs" === t.parentNode
                        .className) "kint-active-tab" !== t.className && l.switchTab(t), (t = l
                        .getParentHeader(t, !0)) && (l.keyboardNav.setCursor(t.querySelector("nav")), l
                        .keyboardNav.sync(!0));
                    else if ("nav" === a) "footer" === t.parentNode.nodeName.toLowerCase() ? (l.keyboardNav
                        .setCursor(t), l.keyboardNav.sync(!0), t = t.parentNode, l.hasClass(t) ? l
                        .removeClass(t) : l.addClass(t)) : (l.toggle(t.parentNode), l.keyboardNav
                        .fetchTargets(), l.mouseNav.lastClickCount = 1, l.mouseNav.lastClickTarget = t,
                        l.mouseNav.renewLastClick());
                    else if (l.hasClass(t, "kint-popup-trigger")) {
                        var o = t.parentNode;
                        if ("footer" === o.nodeName.toLowerCase()) o = o.previousSibling;
                        else
                            for (; o && !l.hasClass(o, "kint-parent");) o = o.parentNode;
                        l.openInNewWindow(o)
                    } else l.hasClass(t, "kint-access-path-trigger") ? l.showAccessPath(t.parentNode) : l
                        .hasClass(t, "kint-search-trigger") ? l.showSearchBox(t.parentNode) : l.hasClass(t,
                            "kint-search") || ("pre" === a && 3 === e.detail ? l.selectText(t) : l
                            .getParentByClass(t, "kint-source") && 3 === e.detail ? l.selectText(l
                                .getParentByClass(t, "kint-source")) : l.hasClass(t, "access-path") ? l
                            .selectText(t) : "a" !== a && (t = l.getParentHeader(t)) && (l.toggle(t), l
                                .keyboardNav.fetchTargets()))
                }
            }, !0), window.addEventListener("keydown", function(e) {
                if (e.target === document.body && !e.altKey && !e.ctrlKey) {
                    if (68 === e.keyCode) {
                        if (l.keyboardNav.active) l.keyboardNav.active = !1;
                        else if (l.keyboardNav.active = !0, l.keyboardNav.fetchTargets(), 0 === l
                            .keyboardNav.targets.length) return void(l.keyboardNav.active = !1);
                        return l.keyboardNav.sync(), void e.preventDefault()
                    }
                    if (l.keyboardNav.active) {
                        if (9 === e.keyCode) return l.keyboardNav.moveCursor(e.shiftKey ? -1 : 1), void e
                            .preventDefault();
                        if (38 === e.keyCode || 75 === e.keyCode) return l.keyboardNav.moveCursor(-1),
                            void e.preventDefault();
                        if (40 === e.keyCode || 74 === e.keyCode) return l.keyboardNav.moveCursor(1), void e
                            .preventDefault();
                        var t, a, o = l.keyboardNav.targets[l.keyboardNav.target];
                        if ("li" === o.nodeName.toLowerCase()) {
                            if (32 === e.keyCode || 13 === e.keyCode) return l.switchTab(o), l.keyboardNav
                                .fetchTargets(), l.keyboardNav.sync(), void e.preventDefault();
                            if (39 === e.keyCode || 76 === e.keyCode) return l.keyboardNav.moveCursor(1),
                                void e.preventDefault();
                            if (37 === e.keyCode || 72 === e.keyCode) return l.keyboardNav.moveCursor(-1),
                                void e.preventDefault()
                        }
                        o = o.parentNode, 65 === e.keyCode ? (l.showAccessPath(o), e.preventDefault()) :
                            "footer" === o.nodeName.toLowerCase() && l.hasClass(o.parentNode, "kint-rich") ?
                            32 === e.keyCode || 13 === e.keyCode ? (l.hasClass(o) ? l.removeClass(o) : l
                                .addClass(o), e.preventDefault()) : 37 === e.keyCode || 72 === e.keyCode ? (
                                l.removeClass(o), e.preventDefault()) : 39 !== e.keyCode && 76 !== e
                            .keyCode || (l.addClass(o), e.preventDefault()) : 32 === e.keyCode || 13 === e
                            .keyCode ? (l.toggle(o), l.keyboardNav.fetchTargets(), e.preventDefault()) :
                            39 !== e.keyCode && 76 !== e.keyCode && 37 !== e.keyCode && 72 !== e.keyCode ||
                            (t = 37 === e.keyCode || 72 === e.keyCode, l.hasClass(o) ? l.toggleChildren(o,
                                    t) : !t || (a = l.getParentHeader(o.parentNode.parentNode, !0)) && (l
                                    .keyboardNav.setCursor((o = a).querySelector("nav")), l.keyboardNav
                                    .sync()), l.toggle(o, t), l.keyboardNav.fetchTargets(), e
                                .preventDefault())
                    }
                }
            }, !0), l
        }()), window.kintShared.runOnce(window.kintRich.initLoad);
        void 0 === window.kintMicrotimeInitialized && (window.kintMicrotimeInitialized = 1, window.addEventListener("load",
            function() {
                "use strict";
                var a = {},
                    t = Array.prototype.slice.call(document.querySelectorAll("[data-kint-microtime-group]"), 0);
                t.forEach(function(t) {
                    var i, e;
                    t.querySelector(".kint-microtime-lap") && (i = t.getAttribute(
                        "data-kint-microtime-group"), e = parseFloat(t.querySelector(
                        ".kint-microtime-lap").innerHTML), t = parseFloat(t.querySelector(
                        ".kint-microtime-avg").innerHTML), void 0 === a[i] && (a[i] = {}), (
                        void 0 === a[i].min || a[i].min > e) && (a[i].min = e), (void 0 === a[i]
                        .max || a[i].max < e) && (a[i].max = e), a[i].avg = t)
                }), t.forEach(function(t) {
                    var i, e, r, o, n = t.querySelector(".kint-microtime-lap");
                    null !== n && (i = parseFloat(n.textContent), o = t.dataset.kintMicrotimeGroup, e = a[o]
                        .avg, r = a[o].max, o = a[o].min, i === (t.querySelector(".kint-microtime-avg")
                            .textContent = e) && i === o && i === r || (n.style.background = e < i ?
                            "hsl(" + (40 - 40 * ((i - e) / (r - e))) + ", 100%, 65%)" : "hsl(" + (40 +
                                80 * (e === o ? 0 : (e - i) / (e - o))) + ", 100%, 65%)"))
                })
            }));
    </script>
    <style class="kint-rich-style">
        .kint-rich {
            font-size: 13px;
            overflow-x: auto;
            white-space: nowrap;
            background: rgba(255, 255, 255, 0.9)
        }

        .kint-rich.kint-folder {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 999999;
            width: 100%;
            margin: 0;
            display: block
        }

        .kint-rich.kint-folder dd.kint-foldout {
            max-height: calc(100vh - 100px);
            padding-right: 8px;
            overflow-y: scroll;
            display: none
        }

        .kint-rich.kint-folder dd.kint-foldout.kint-show {
            display: block
        }

        .kint-rich::selection,
        .kint-rich::-moz-selection,
        .kint-rich::-webkit-selection {
            background: #aaa;
            color: #1d1e1e
        }

        .kint-rich .kint-focused {
            box-shadow: 0 0 3px 2px red
        }

        .kint-rich,
        .kint-rich::before,
        .kint-rich::after,
        .kint-rich *,
        .kint-rich *::before,
        .kint-rich *::after {
            box-sizing: border-box;
            border-radius: 0;
            color: #1d1e1e;
            float: none !important;
            font-family: Consolas, Menlo, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace, serif;
            line-height: 15px;
            margin: 0;
            padding: 0;
            text-align: left
        }

        .kint-rich {
            margin: 8px 0
        }

        .kint-rich dt,
        .kint-rich dl {
            width: auto
        }

        .kint-rich dt,
        .kint-rich div.access-path {
            background: #f8f8f8;
            border: 1px solid #d7d7d7;
            color: #1d1e1e;
            display: block;
            font-weight: bold;
            list-style: none outside none;
            overflow: auto;
            padding: 4px
        }

        .kint-rich dt:hover,
        .kint-rich div.access-path:hover {
            border-color: #aaa
        }

        .kint-rich>dl dl {
            padding: 0 0 0 12px
        }

        .kint-rich dt.kint-parent>nav,
        .kint-rich>footer>nav {
            background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMCAxNTAiPjxwYXRoIGQ9Ik02IDdoMThsLTkgMTV6bTAgMzBoMThsLTkgMTV6bTAgNDVoMThsLTktMTV6bTAgMzBoMThsLTktMTV6bTAgMTJsMTggMThtLTE4IDBsMTgtMTgiIGZpbGw9IiM1NTUiLz48cGF0aCBkPSJNNiAxMjZsMTggMThtLTE4IDBsMTgtMTgiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlPSIjNTU1Ii8+PC9zdmc+") no-repeat scroll 0 0/15px 75px transparent;
            cursor: pointer;
            display: inline-block;
            height: 15px;
            width: 15px;
            margin-right: 3px;
            vertical-align: middle
        }

        .kint-rich dt.kint-parent:hover>nav,
        .kint-rich>footer>nav:hover {
            background-position: 0 25%
        }

        .kint-rich dt.kint-parent.kint-show>nav,
        .kint-rich>footer.kint-show>nav {
            background-position: 0 50%
        }

        .kint-rich dt.kint-parent.kint-show:hover>nav,
        .kint-rich>footer.kint-show>nav:hover {
            background-position: 0 75%
        }

        .kint-rich dt.kint-parent.kint-locked>nav {
            background-position: 0 100%
        }

        .kint-rich dt.kint-parent+dd {
            display: none;
            border-left: 1px dashed #d7d7d7
        }

        .kint-rich dt.kint-parent.kint-show+dd {
            display: block
        }

        .kint-rich var,
        .kint-rich var a {
            color: #06f;
            font-style: normal
        }

        .kint-rich dt:hover var,
        .kint-rich dt:hover var a {
            color: red
        }

        .kint-rich dfn {
            font-style: normal;
            font-family: monospace;
            color: #1d1e1e
        }

        .kint-rich pre {
            color: #1d1e1e;
            margin: 0 0 0 12px;
            padding: 5px;
            overflow-y: hidden;
            border-top: 0;
            border: 1px solid #d7d7d7;
            background: #f8f8f8;
            display: block;
            word-break: normal
        }

        .kint-rich .kint-popup-trigger,
        .kint-rich .kint-access-path-trigger,
        .kint-rich .kint-search-trigger {
            background: rgba(29, 30, 30, 0.8);
            border-radius: 3px;
            height: 16px;
            font-size: 16px;
            margin-left: 5px;
            font-weight: bold;
            width: 16px;
            text-align: center;
            float: right !important;
            cursor: pointer;
            color: #f8f8f8;
            position: relative;
            overflow: hidden;
            line-height: 17.6px
        }

        .kint-rich .kint-popup-trigger:hover,
        .kint-rich .kint-access-path-trigger:hover,
        .kint-rich .kint-search-trigger:hover {
            color: #1d1e1e;
            background: #f8f8f8
        }

        .kint-rich dt.kint-parent>.kint-popup-trigger {
            line-height: 19.2px
        }

        .kint-rich .kint-search-trigger {
            font-size: 20px
        }

        .kint-rich input.kint-search {
            display: none;
            border: 1px solid #d7d7d7;
            border-top-width: 0;
            border-bottom-width: 0;
            padding: 4px;
            float: right !important;
            margin: -4px 0;
            color: #1d1e1e;
            background: #f8f8f8;
            height: 24px;
            width: 160px;
            position: relative;
            z-index: 100
        }

        .kint-rich input.kint-search.kint-show {
            display: block
        }

        .kint-rich .kint-search-root ul.kint-tabs>li:not(.kint-search-match) {
            background: #f8f8f8;
            opacity: 0.5
        }

        .kint-rich .kint-search-root dl:not(.kint-search-match) {
            opacity: 0.5
        }

        .kint-rich .kint-search-root dl:not(.kint-search-match)>dt {
            background: #f8f8f8
        }

        .kint-rich .kint-search-root dl:not(.kint-search-match) dl,
        .kint-rich .kint-search-root dl:not(.kint-search-match) ul.kint-tabs>li:not(.kint-search-match) {
            opacity: 1
        }

        .kint-rich div.access-path {
            background: #f8f8f8;
            display: none;
            margin-top: 5px;
            padding: 4px;
            white-space: pre
        }

        .kint-rich div.access-path.kint-show {
            display: block
        }

        .kint-rich footer {
            padding: 0 3px 3px;
            font-size: 9px;
            background: transparent
        }

        .kint-rich footer>.kint-popup-trigger {
            background: transparent;
            color: #1d1e1e
        }

        .kint-rich footer nav {
            height: 10px;
            width: 10px;
            background-size: 10px 50px
        }

        .kint-rich footer>ol {
            display: none;
            margin-left: 32px
        }

        .kint-rich footer.kint-show>ol {
            display: block
        }

        .kint-rich a {
            color: #1d1e1e;
            text-shadow: none;
            text-decoration: underline
        }

        .kint-rich a:hover {
            color: #1d1e1e;
            border-bottom: 1px dotted #1d1e1e
        }

        .kint-rich ul {
            list-style: none;
            padding-left: 12px
        }

        .kint-rich ul:not(.kint-tabs) li {
            border-left: 1px dashed #d7d7d7
        }

        .kint-rich ul:not(.kint-tabs) li>dl {
            border-left: none
        }

        .kint-rich ul.kint-tabs {
            margin: 0 0 0 12px;
            padding-left: 0;
            background: #f8f8f8;
            border: 1px solid #d7d7d7;
            border-top: 0
        }

        .kint-rich ul.kint-tabs>li {
            background: #f8f8f8;
            border: 1px solid #d7d7d7;
            cursor: pointer;
            display: inline-block;
            height: 24px;
            margin: 2px;
            padding: 0 12px;
            vertical-align: top
        }

        .kint-rich ul.kint-tabs>li:hover,
        .kint-rich ul.kint-tabs>li.kint-active-tab:hover {
            border-color: #aaa;
            color: red
        }

        .kint-rich ul.kint-tabs>li.kint-active-tab {
            background: #f8f8f8;
            border-top: 0;
            margin-top: -1px;
            height: 27px;
            line-height: 24px
        }

        .kint-rich ul.kint-tabs>li:not(.kint-active-tab) {
            line-height: 20px
        }

        .kint-rich ul.kint-tabs li+li {
            margin-left: 0
        }

        .kint-rich ul.kint-tab-contents>li {
            display: none
        }

        .kint-rich ul.kint-tab-contents>li.kint-show {
            display: block
        }

        .kint-rich dt:hover+dd>ul>li.kint-active-tab {
            border-color: #aaa;
            color: red
        }

        .kint-rich dt>.kint-color-preview {
            width: 16px;
            height: 16px;
            display: inline-block;
            vertical-align: middle;
            margin-left: 10px;
            border: 1px solid #d7d7d7;
            background-color: #ccc;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2 2"><path fill="%23FFF" d="M0 0h1v2h1V1H0z"/></svg>');
            background-size: 100%
        }

        .kint-rich dt>.kint-color-preview:hover {
            border-color: #aaa
        }

        .kint-rich dt>.kint-color-preview>div {
            width: 100%;
            height: 100%
        }

        .kint-rich table {
            border-collapse: collapse;
            empty-cells: show;
            border-spacing: 0
        }

        .kint-rich table * {
            font-size: 12px
        }

        .kint-rich table dt {
            background: none;
            padding: 2px
        }

        .kint-rich table dt .kint-parent {
            min-width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .kint-rich table td,
        .kint-rich table th {
            border: 1px solid #d7d7d7;
            padding: 2px;
            vertical-align: center
        }

        .kint-rich table th {
            cursor: alias
        }

        .kint-rich table td:first-child,
        .kint-rich table th {
            font-weight: bold;
            background: #f8f8f8;
            color: #1d1e1e
        }

        .kint-rich table td {
            background: #f8f8f8;
            white-space: pre
        }

        .kint-rich table td>dl {
            padding: 0
        }

        .kint-rich table pre {
            border-top: 0;
            border-right: 0
        }

        .kint-rich table thead th:first-child {
            background: none;
            border: 0
        }

        .kint-rich table tr:hover>td {
            box-shadow: 0 0 1px 0 #aaa inset
        }

        .kint-rich table tr:hover var {
            color: red
        }

        .kint-rich table ul.kint-tabs li.kint-active-tab {
            height: 20px;
            line-height: 17px
        }

        .kint-rich pre.kint-source {
            margin-left: -1px
        }

        .kint-rich pre.kint-source[data-kint-filename]:before {
            display: block;
            content: attr(data-kint-filename);
            margin-bottom: 4px;
            padding-bottom: 4px;
            border-bottom: 1px solid #f8f8f8
        }

        .kint-rich pre.kint-source>div:before {
            display: inline-block;
            content: counter(kint-l);
            counter-increment: kint-l;
            border-right: 1px solid #aaa;
            padding-right: 8px;
            margin-right: 8px
        }

        .kint-rich pre.kint-source>div.kint-highlight {
            background: #f8f8f8
        }

        .kint-rich .kint-microtime-lap {
            text-shadow: -1px 0 #aaa, 0 1px #aaa, 1px 0 #aaa, 0 -1px #aaa;
            color: #f8f8f8;
            font-weight: bold
        }

        input.kint-note-input {
            width: 100%
        }

        .kint-rich .kint-focused {
            box-shadow: 0 0 3px 2px red
        }

        .kint-rich dt {
            font-weight: normal
        }

        .kint-rich dt.kint-parent {
            margin-top: 4px
        }

        .kint-rich dl dl {
            margin-top: 4px;
            padding-left: 25px;
            border-left: none
        }

        .kint-rich>dl>dt {
            background: #f8f8f8
        }

        .kint-rich ul {
            margin: 0;
            padding-left: 0
        }

        .kint-rich ul:not(.kint-tabs)>li {
            border-left: 0
        }

        .kint-rich ul.kint-tabs {
            background: #f8f8f8;
            border: 1px solid #d7d7d7;
            border-width: 0 1px 1px 1px;
            padding: 4px 0 0 12px;
            margin-left: -1px;
            margin-top: -1px
        }

        .kint-rich ul.kint-tabs li,
        .kint-rich ul.kint-tabs li+li {
            margin: 0 0 0 4px
        }

        .kint-rich ul.kint-tabs li {
            border-bottom-width: 0;
            height: 25px
        }

        .kint-rich ul.kint-tabs li:first-child {
            margin-left: 0
        }

        .kint-rich ul.kint-tabs li.kint-active-tab {
            border-top: 1px solid #d7d7d7;
            background: #fff;
            font-weight: bold;
            padding-top: 0;
            border-bottom: 1px solid #fff !important;
            margin-bottom: -1px
        }

        .kint-rich ul.kint-tabs li.kint-active-tab:hover {
            border-bottom: 1px solid #fff
        }

        .kint-rich ul>li>pre {
            border: 1px solid #d7d7d7
        }

        .kint-rich dt:hover+dd>ul {
            border-color: #aaa
        }

        .kint-rich pre {
            background: #fff;
            margin-top: 4px;
            margin-left: 25px
        }

        .kint-rich .kint-source {
            margin-left: -1px
        }

        .kint-rich .kint-source .kint-highlight {
            background: #cfc
        }

        .kint-rich .kint-parent.kint-show>.kint-search {
            border-bottom-width: 1px
        }

        .kint-rich table td {
            background: #fff
        }

        .kint-rich table td>dl {
            padding: 0;
            margin: 0
        }

        .kint-rich table td>dl>dt.kint-parent {
            margin: 0
        }

        .kint-rich table td:first-child,
        .kint-rich table td,
        .kint-rich table th {
            padding: 2px 4px
        }

        .kint-rich table dd,
        .kint-rich table dt {
            background: #fff
        }

        .kint-rich table tr:hover>td {
            box-shadow: none;
            background: #cfc
        }
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Plants Shop Guyung</title>

</head>

<body>
    <style>
        .header h1 {
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
            text-align: center;
            margin: 0
        }

        .header h2 {
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
            text-align: center;
            margin: 0
        }

        .header h4 {
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
            text-align: center;
            margin: 1
        }
    </style>


    <div class="header">
        <h1 align="center">
            <img src="/homepage/assets/img/Koppenyakit.png" style="width: 60%;" alt="">
        </h1>
        <hr />
        <br>
    </div>

    <table border="1" align="center" width="100%" id="data-laporan" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Petani</th>
                <th>Tanggal Diagnosa</th>
                {{-- <th>Gejala</th> --}}
                <th>Penyakit yang menyerang</th>
                {{-- <th>Solusi</th> --}}
                {{-- <th>Obat</th> --}}
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($laporan as $key)
                <tr class="text-center">
                    <td>{{ $no++ }}</td>
                    <td>{{ $key->DiagnosaToUser->namaPengguna }}</td>
                    <td>{{ $key->created_at->format('d-m-Y') }}</td>
                    {{-- <td>
                        @foreach ($key->DiagnosaToDetail as $item)
                            {{ $item->RelasidetailPenyakit->DetailPenyakitToGejala->namaGejala }},
                        @endforeach



                    </td> --}}
                    <td>{{ $key->DiagnosaToDetail[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->namaPenyakit }}
                    </td>
                    {{-- <td> {{ $key->DiagnosaToDetail[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->solusi }}
                    </td>
                    <td>{{ $key->DiagnosaToDetail[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->penyakitToObat[0]->namaObat }}</td> --}}

                </tr>
            @endforeach


        </tbody>

    </table>


    <p align=right style="width:100%;">Madiun, {{ $waktu }}</p>

    <p align=right></p>

    <p><br /><br /><br /><br /></p>
    <p align=right>(Admin Plant Shop Guyung)</p>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            window.print();
        });
    </script>

</body>

</html>
<!-- DEBUG-VIEW ENDED 1 APPPATH/Views/dashboard/admin/laporan/print.php -->
