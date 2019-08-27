@extends('layouts.app')

@section('content')
<?php

$root = 'http://localhost/projetoreeducarecicla/';
$foto = 'salveo%20planeta.png';

$title = $facebook_title = "Blog-Detalhes";
$keywords = 'recicla,palavras,chave,separadas,por,virgula';
$description = $facebook_description = substr(strip_tags('<p>A Reeduca, por sua atitude empresarial e pela qualidade das relações que busca desenvolver com os diversos agentes que articula, expressa sua marca na identidade com pessoas e empresas que se comprometem a atuar de maneira efetiva na colaboração por um mundo mais saudável para se habitar, em respeito ao meio ambiente do qual fazem parte e responsabilidade para com as gerações por vir.</p>'), 0, 200);
$facebook_image = htmlentities($root . 'img/' . $foto);
?>

<!-- Main Wrapper Start -->
<div class="main-wrapper">


    <div class="blog-details-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-2 order-lg-2">
                    <!-- shop-sidebar-wrap start -->
                    <div class="blog-sidebar-wrap">
                        <div class="blog-sidebar mb--30">
                            <h4 class="title">ÚLTIMAS POSTAGENS</h4>
                        </div>
                        <div class="sidbar-blog mb--30">
                            <!-- sidbar-blog-inner start -->
                            @foreach ($ultimos as $p)
                            <div class="sidbar-blog-inner">
                                <div class="sidbar-blog-image ">
                                    <a href="/post/{{ $p->id }}"><img src="/storage/img/{{ $p->imagem }}" alt=""></a>
                                </div>
                                <div class="sidbar-blog-content text-left">
                                    <h3><a href="/post/{{ $p->id }}">{{ $p->titulo }}</a></h3>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- shop-sidebar-wrap end -->
                </div>
                <div class="col-lg-8 order-1 order-lg-1">
                    <div class="blog-details-wrapper">
                        <div class="blog-details-image">
                            <div class="card">
                                <img src="/storage/img/{{ $post->imagem }}" alt="">
                            </div>
                        </div>
                        <div class="blog-inner">
                            <ul class="meta">
                                <li>
                                    {{ \Carbon\Carbon::parse($post->data)->format('d/m/Y H:i')}}
                                </li>
                            </ul>
                        </div>
                        <div class="blog-sidebar mb--30">
                            <h4 class="title">{{ $post->titulo }}</h4>
                        </div>
                        <div class="postinfo-wrapper">
                            <div class="post-info">
                                {!! $post->texto !!}
                            </div>
                            <div id="disqus_thread"></div>
                            <script>
                                /**
                                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                                /*
                                var disqus_config = function () {
                                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                };
                                */
                                (function () { // DON'T EDIT BELOW THIS LINE
                                    var d = document,
                                        s = d.createElement('script');
                                    s.src = 'https://www-reciclamaps-com-br.disqus.com/embed.js';
                                    s.setAttribute('data-timestamp', +new Date());
                                    (d.head || d.body).appendChild(s);
                                })();

                            </script>
                            <noscript>Please enable JavaScript to view the <a
                                    href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-12">
                    <div id="instafeed"></div>
                    <script>
                        // Generated by CoffeeScript 1.9.3
                        (function () {
                            var e;
                            e = function () {
                                    function e(e, t) {
                                        var n, r;
                                        this.options = {
                                            target: "instafeed",
                                            get: "popular",
                                            resolution: "thumbnail",
                                            sortBy: "none",
                                            links: !0,
                                            mock: !1,
                                            useHttp: !1
                                        };
                                        if (typeof e == "object")
                                            for (n in e) r = e[n], this.options[n] = r;
                                        this.context = t != null ? t : this, this.unique = this._genKey()
                                    }
                                    return e.prototype.hasNext = function () {
                                        return typeof this.context.nextUrl == "string" && this.context.nextUrl
                                            .length > 0
                                    }, e.prototype.next = function () {
                                        return this.hasNext() ? this.run(this.context.nextUrl) : !1
                                    }, e.prototype.run = function (t) {
                                        var n, r, i;
                                        if (typeof this.options.clientId != "string" && typeof this.options
                                            .accessToken != "string") throw new Error(
                                            "Missing clientId or accessToken.");
                                        if (typeof this.options.accessToken != "string" && typeof this.options
                                            .clientId != "string") throw new Error(
                                            "Missing clientId or accessToken.");
                                        return this.options.before != null && typeof this.options.before ==
                                            "function" && this.options.before.call(this), typeof document !=
                                            "undefined" && document !== null && (i = document.createElement(
                                                    "script"), i.id = "instafeed-fetcher", i.src = t || this
                                                ._buildUrl(), n = document.getElementsByTagName("head"), n[0]
                                                .appendChild(i), r = "instafeedCache" + this.unique, window[r] =
                                                new e(this.options, this), window[r].unique = this.unique), !0
                                    }, e.prototype.parse = function (e) {
                                        var t, n, r, i, s, o, u, a, f, l, c, h, p, d, v, m, g, y, b, w, E, S, x,
                                            T, N, C, k, L, A, O, M, _, D;
                                        if (typeof e != "object") {
                                            if (this.options.error != null && typeof this.options.error ==
                                                "function") return this.options.error.call(this,
                                                "Invalid JSON data"), !1;
                                            throw new Error("Invalid JSON response")
                                        }
                                        if (e.meta.code !== 200) {
                                            if (this.options.error != null && typeof this.options.error ==
                                                "function") return this.options.error.call(this, e.meta
                                                .error_message), !1;
                                            throw new Error("Error from Instagram: " + e.meta.error_message)
                                        }
                                        if (e.data.length === 0) {
                                            if (this.options.error != null && typeof this.options.error ==
                                                "function") return this.options.error.call(this,
                                                "No images were returned from Instagram"), !1;
                                            throw new Error("No images were returned from Instagram")
                                        }
                                        this.options.success != null && typeof this.options.success ==
                                            "function" && this.options.success.call(this, e), this.context
                                            .nextUrl = "", e.pagination != null && (this.context.nextUrl = e
                                                .pagination.next_url);
                                        if (this.options.sortBy !== "none") {
                                            this.options.sortBy === "random" ? M = ["", "random"] : M = this
                                                .options.sortBy.split("-"), O = M[0] === "least" ? !0 : !1;
                                            switch (M[1]) {
                                                case "random":
                                                    e.data.sort(function () {
                                                        return .5 - Math.random()
                                                    });
                                                    break;
                                                case "recent":
                                                    e.data = this._sortBy(e.data, "created_time", O);
                                                    break;
                                                case "liked":
                                                    e.data = this._sortBy(e.data, "likes.count", O);
                                                    break;
                                                case "commented":
                                                    e.data = this._sortBy(e.data, "comments.count", O);
                                                    break;
                                                default:
                                                    throw new Error("Invalid option for sortBy: '" + this
                                                        .options.sortBy + "'.")
                                            }
                                        }
                                        if (typeof document != "undefined" && document !== null && this.options
                                            .mock === !1) {
                                            m = e.data, A = parseInt(this.options.limit, 10), this.options
                                                .limit != null && m.length > A && (m = m.slice(0, A)), u =
                                                document.createDocumentFragment(), this.options.filter !=
                                                null && typeof this.options.filter == "function" && (m = this
                                                    ._filter(m, this.options.filter));
                                            if (this.options.template != null && typeof this.options.template ==
                                                "string") {
                                                f = "", d = "", w = "", D = document.createElement("div");
                                                for (c = 0, N = m.length; c < N; c++) {
                                                    h = m[c], p = h.images[this.options.resolution];
                                                    if (typeof p != "object") throw o =
                                                        "No image found for resolution: " + this.options
                                                        .resolution + ".", new Error(o);
                                                    E = p.width, y = p.height, b = "square", E > y && (b =
                                                            "landscape"), E < y && (b = "portrait"), v = p.url,
                                                        l = window.location.protocol.indexOf("http") >= 0, l &&
                                                        !this.options.useHttp && (v = v.replace(/https?:\/\//,
                                                            "//")), d = this._makeTemplate(this.options
                                                            .template, {
                                                                model: h,
                                                                id: h.id,
                                                                link: h.link,
                                                                type: h.type,
                                                                image: v,
                                                                width: E,
                                                                height: y,
                                                                orientation: b,
                                                                caption: this._getObjectProperty(h,
                                                                    "caption.text"),
                                                                likes: h.likes.count,
                                                                comments: h.comments.count,
                                                                location: this._getObjectProperty(h,
                                                                    "location.name")
                                                            }), f += d
                                                }
                                                D.innerHTML = f, i = [], r = 0, n = D.childNodes.length;
                                                while (r < n) i.push(D.childNodes[r]), r += 1;
                                                for (x = 0, C = i.length; x < C; x++) L = i[x], u.appendChild(L)
                                            } else
                                                for (T = 0, k = m.length; T < k; T++) {
                                                    h = m[T], g = document.createElement("img"), p = h.images[
                                                        this.options.resolution];
                                                    if (typeof p != "object") throw o =
                                                        "No image found for resolution: " + this.options
                                                        .resolution + ".", new Error(o);
                                                    v = p.url, l = window.location.protocol.indexOf("http") >=
                                                        0, l && !this.options.useHttp && (v = v.replace(
                                                            /https?:\/\//, "//")), g.src = v, this.options
                                                        .links === !0 ? (t = document.createElement("a"), t
                                                            .href = h.link, t.appendChild(g), u.appendChild(t)
                                                            ) : u.appendChild(g)
                                                }
                                            _ = this.options.target, typeof _ == "string" && (_ = document
                                                .getElementById(_));
                                            if (_ == null) throw o = 'No element with id="' + this.options
                                                .target + '" on page.', new Error(o);
                                            _.appendChild(u), a = document.getElementsByTagName("head")[0], a
                                                .removeChild(document.getElementById("instafeed-fetcher")), S =
                                                "instafeedCache" + this.unique, window[S] = void 0;
                                            try {
                                                delete window[S]
                                            } catch (P) {
                                                s = P
                                            }
                                        }
                                        return this.options.after != null && typeof this.options.after ==
                                            "function" && this.options.after.call(this), !0
                                    }, e.prototype._buildUrl = function () {
                                        var e, t, n;
                                        e = "https://api.instagram.com/v1";
                                        switch (this.options.get) {
                                            case "popular":
                                                t = "media/popular";
                                                break;
                                            case "tagged":
                                                if (!this.options.tagName) throw new Error(
                                                    "No tag name specified. Use the 'tagName' option.");
                                                t = "tags/" + this.options.tagName + "/media/recent";
                                                break;
                                            case "location":
                                                if (!this.options.locationId) throw new Error(
                                                    "No location specified. Use the 'locationId' option."
                                                    );
                                                t = "locations/" + this.options.locationId + "/media/recent";
                                                break;
                                            case "user":
                                                if (!this.options.userId) throw new Error(
                                                    "No user specified. Use the 'userId' option.");
                                                t = "users/" + this.options.userId + "/media/recent";
                                                break;
                                            default:
                                                throw new Error("Invalid option for get: '" + this.options.get +
                                                    "'.")
                                        }
                                        return n = e + "/" + t, this.options.accessToken != null ? n +=
                                            "?access_token=" + this.options.accessToken : n += "?client_id=" +
                                            this.options.clientId, this.options.limit != null && (n +=
                                                "&count=" + this.options.limit), n +=
                                            "&callback=instafeedCache" + this.unique + ".parse", n
                                    }, e.prototype._genKey = function () {
                                        var e;
                                        return e = function () {
                                            return ((1 + Math.random()) * 65536 | 0).toString(16).substring(
                                                1)
                                        }, "" + e() + e() + e() + e()
                                    }, e.prototype._makeTemplate = function (e, t) {
                                        var n, r, i, s, o;
                                        r = /(?:{{2})([\w\[\]\.]+)(?:}{2})/, n = e;
                                        while (r.test(n)) s = n.match(r)[1], o = (i = this._getObjectProperty(t,
                                            s)) != null ? i : "", n = n.replace(r, function () {
                                            return "" + o
                                        });
                                        return n
                                    }, e.prototype._getObjectProperty = function (e, t) {
                                        var n, r;
                                        t = t.replace(/\[(\w+)\]/g, ".$1"), r = t.split(".");
                                        while (r.length) {
                                            n = r.shift();
                                            if (!(e != null && n in e)) return null;
                                            e = e[n]
                                        }
                                        return e
                                    }, e.prototype._sortBy = function (e, t, n) {
                                        var r;
                                        return r = function (e, r) {
                                            var i, s;
                                            return i = this._getObjectProperty(e, t), s = this
                                                ._getObjectProperty(r, t), n ? i > s ? 1 : -1 : i < s ? 1 :
                                                -1
                                        }, e.sort(r.bind(this)), e
                                    }, e.prototype._filter = function (e, t) {
                                        var n, r, i, s, o;
                                        n = [], r = function (e) {
                                            if (t(e)) return n.push(e)
                                        };
                                        for (i = 0, o = e.length; i < o; i++) s = e[i], r(s);
                                        return n
                                    }, e
                                }(),
                                function (e, t) {
                                    return typeof define == "function" && define.amd ? define([], t) :
                                        typeof module == "object" && module.exports ? module.exports = t() : e
                                        .Instafeed = t()
                                }(this, function () {
                                    return e
                                })
                        }).call(this);
                        //https://instagram.pixelunion.net/
                        new Instafeed({
                            target: 'instafeed',
                            get: 'user',
                            userId: '2030605666',
                            accessToken: '2030605666.1677ed0.c3d797f824fd46eea71000859deb3b7f',
                            limit: 12,
                            resolution: 'standard_resolution',
                            template: '<div class="col-xs-6 col-md-4"><a href="\{\{link\}\}" target="_blank"><img src="\{\{image\}\}" style=":100%;" class="img-responsive bg-cover" /></a></div>'
                        }).run();

                    </script>
                </div>
            </div>
        </div>
    </div>

    @endsection
