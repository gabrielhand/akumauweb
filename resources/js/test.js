(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([[5405], {
    45728: function(e, t, s) {
        (window.__NEXT_P = window.__NEXT_P || []).push(["/", function() {
            return s(87565)
        }
        ])
    },
    85157: function(e, t, s) {
        "use strict";
        var l = s(85893);
        s(41664);
        var n = s(9473)
          , r = s(61350)
          , a = s(11163)
          , i = s(458);
        let shimmer = (e,t)=>'\n<svg width="'.concat(e, '" height="').concat(t, '" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">\n  <defs>\n    <linearGradient id="g">\n      <stop stop-color="#333" offset="20%" />\n      <stop stop-color="#222" offset="50%" />\n      <stop stop-color="#333" offset="70%" />\n    </linearGradient>\n  </defs>\n  <rect width="').concat(e, '" height="').concat(t, '" fill="#333" />\n  <rect id="r" width="').concat(e, '" height="').concat(t, '" fill="url(#g)" />\n  <animate xlink:href="#r" attributeName="x" from="-').concat(e, '" to="').concat(e, '" dur="1s" repeatCount="indefinite"  />\n</svg>')
          , toBase64 = e=>window.btoa(e);
        t.Z = function(e) {
            let {url: t, imgSrc: s, title: o, subtitle: c, isHover: d=!0, isLink: u=!0, onClick: m=()=>null} = e
              , x = (0,
            n.v9)(e=>e.webStore)
              , f = (0,
            a.useRouter)();
            return (0,
            l.jsxs)("div", {
                onClick: ()=>{
                    u ? f.push(t) : m()
                }
                ,
                className: (0,
                r.cn)("overflow-hidden hover:shadow-sm hover:cursor-pointer hover:duration-300 h-full w-full relative rounded-xl", d ? "group" : ""),
                children: [(0,
                l.jsx)("div", {
                    className: "hidden group-hover:block ",
                    children: (0,
                    l.jsxs)("div", {
                        className: "absolute inset-0 p-3 z-10 flex flex-col items-center justify-between",
                        children: [(0,
                        l.jsx)("div", {
                            className: "w-full grow flex flex-col items-center justify-center ",
                            children: (0,
                            l.jsx)(i.Z, {
                                imgClassName: "object-center object-contain h-[30px] lg:h-[40px]",
                                alt: "icon",
                                width: 40,
                                height: 40,
                                src: (null == x ? void 0 : x.favicon) || "/logo.png",
                                unoptimized: 1,
                                lazy: !0
                            })
                        }), (0,
                        l.jsxs)("div", {
                            className: "w-full flex flex-col items-center",
                            children: [(0,
                            l.jsx)("p", {
                                className: "font-semibold text-white text-[11px] lg:text-[16px] mb-1 line-clamp-2 text-center",
                                children: o
                            }), (0,
                            l.jsx)("p", {
                                className: "font-light text-[10px] lg:text-[14px] text-white line-clamp-2",
                                children: c
                            })]
                        })]
                    })
                }), (0,
                l.jsx)(i.Z, {
                    src: s,
                    alt: o,
                    fill: !0,
                    className: "h-full w-full",
                    imgClassName: "h-full w-full object-cover object-center duration-300 group-hover:blur-sm group-hover:brightness-50 transition-all  ease-in-out rounded-xl w-24 h-24",
                    placeholder: "blur",
                    blurDataURL: "data:image/svg+xml;base64,".concat(toBase64(shimmer(700, 475))),
                    lazy: !0
                })]
            })
        }
    },
    75590: function(e, t, s) {
        "use strict";
        s.d(t, {
            Z: function() {
                return ProductSection
            }
        });
        var l = s(85893)
          , n = s(67294)
          , r = s(61350)
          , a = s(14498)
          , i = s(85157)
          , o = s(29624)
          , c = s(70103)
          , d = s(17189);
        function ProductSection(e) {
            let {data: t=[], isLoading: s=!1, favicon: u} = e
              , [m,x] = (0,
            n.useState)("Semua");
            return s ? (0,
            l.jsx)("section", {
                id: "product",
                className: "md:px-6 px-4",
                children: (0,
                l.jsx)(c.Z, {
                    favicon: u
                })
            }) : (0,
            l.jsxs)("section", {
                id: "product",
                className: "md:px-6 px-4",
                children: [(0,
                l.jsx)("div", {
                    className: "mb-7 flex flex-col-reverse justify-between md:flex-row",
                    children: (0,
                    l.jsxs)(d.x, {
                        orientation: "horizontal",
                        className: "w-full whitespace-nowrap",
                        children: [(0,
                        l.jsxs)("div", {
                            className: "flex w-max space-x-4 pb-4",
                            children: [(0,
                            l.jsx)(a.z, {
                                onClick: ()=>x("Semua"),
                                className: (0,
                                r.cn)("rounded-full text-foreground bg-transparent border border-foreground/50 hover:text-foreground hover:bg-transparent px-6 whitespace-nowrap shrink-0", "Semua" !== m ? "text-foreground/50" : ""),
                                children: "Semua"
                            }), null == t ? void 0 : t.map(e=>(0,
                            l.jsx)(a.z, {
                                onClick: ()=>x(e.jenis),
                                className: (0,
                                r.cn)("rounded-full bg-transparent text-foreground border border-foreground/50 hover:text-foreground hover:bg-transparent px-6 whitespace-nowrap shrink-0", m !== e.jenis ? "text-foreground/50" : ""),
                                children: e.jenis
                            }, e.jenis))]
                        }), (0,
                        l.jsx)(d.B, {
                            orientation: "horizontal"
                        })]
                    })
                }), (0,
                l.jsx)("div", {
                    className: "space-y-9",
                    children: null == t ? void 0 : t.filter(e=>"Semua" === m || e.jenis === m).map(e=>(0,
                    l.jsxs)("div", {
                        children: [(0,
                        l.jsx)("h1", {
                            className: (0,
                            r.cn)("lg:text-xl md:text-lg sm:text-sm font-medium mb-5", m === e.jenis ? "hidden" : ""),
                            children: e.jenis
                        }), (0,
                        l.jsx)("div", {
                            className: "grid 2xl:grid-cols-6 md:grid-cols-5 grid-cols-3 gap-3 md:gap-4",
                            children: e.kategori.map(e=>(0,
                            l.jsx)(o.o, {
                                ratio: 3 / 4.5,
                                children: (0,
                                l.jsx)(i.Z, {
                                    url: "/beli/".concat(e.slug),
                                    imgSrc: e.gambar,
                                    title: e.nama,
                                    subtitle: e.sub_nama
                                })
                            }, e.slug))
                        })]
                    }, e.jenis))
                })]
            })
        }
    },
    70103: function(e, t, s) {
        "use strict";
        var l = s(85893);
        s(67294);
        var n = s(53282)
          , r = s(29624)
          , a = s(458);
        t.Z = function(e) {
            let {favicon: t} = e;
            return (0,
            l.jsxs)("div", {
                className: "flex flex-col gap-y-7",
                children: [(0,
                l.jsxs)("div", {
                    className: "flex space-x-4",
                    children: [(0,
                    l.jsx)(n.O, {
                        className: "h-8 w-24 rounded-full"
                    }), (0,
                    l.jsx)(n.O, {
                        className: "h-8 w-24 rounded-full"
                    }), (0,
                    l.jsx)(n.O, {
                        className: "h-8 w-24 rounded-full"
                    })]
                }), (0,
                l.jsx)(n.O, {
                    className: "h-8 w-32 rounded-full"
                }), (0,
                l.jsx)("div", {
                    className: "grid 2xl:grid-cols-6 md:grid-cols-5 sm:grid-cols-3 grid-cols-3 gap-5",
                    children: Array.from({
                        length: 6
                    }, (e,s)=>(0,
                    l.jsx)(r.o, {
                        ratio: 3 / 4.5,
                        children: (0,
                        l.jsx)(n.O, {
                            className: "h-full w-full rounded-lg flex justify-center items-center",
                            children: (0,
                            l.jsx)(a.Z, {
                                src: t,
                                width: 40,
                                height: 40,
                                className: "grayscale",
                                alt: "favicon"
                            })
                        })
                    }, s + 1))
                })]
            })
        }
    },
    29624: function(e, t, s) {
        "use strict";
        s.d(t, {
            o: function() {
                return n
            }
        });
        var l = s(57178);
        let n = l.f
    },
    37210: function(e, t, s) {
        "use strict";
        s.d(t, {
            C: function() {
                return Badge
            }
        });
        var l = s(85893);
        s(67294);
        var n = s(45139)
          , r = s(61350);
        let a = (0,
        n.j)("inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2", {
            variants: {
                variant: {
                    default: "border-transparent bg-primary text-primary-foreground hover:bg-primary/80",
                    secondary: "border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80",
                    destructive: "border-transparent bg-destructive text-destructive-foreground hover:bg-destructive/80",
                    outline: "text-foreground",
                    info: "border-transparent bg-blue-500 text-white hover:bg-blue-500/80"
                }
            },
            defaultVariants: {
                variant: "default"
            }
        });
        function Badge(e) {
            let {className: t, variant: s, ...n} = e;
            return (0,
            l.jsx)("div", {
                className: (0,
                r.cn)(a({
                    variant: s
                }), t),
                ...n
            })
        }
    },
    53376: function(e, t, s) {
        "use strict";
        s.d(t, {
            E: function() {
                return i
            }
        });
        var l = s(85893)
          , n = s(67294)
          , r = s(37483)
          , a = s(61350);
        let i = n.forwardRef((e,t)=>{
            let {className: s, max: n=100, value: i, ...o} = e;
            return (0,
            l.jsx)(r.fC, {
                ref: t,
                className: (0,
                a.cn)("relative h-4 w-full overflow-hidden rounded-full bg-secondary", s),
                ...o,
                children: (0,
                l.jsx)(r.z$, {
                    className: "h-full w-full flex-1 bg-primary transition-all bg-red-600",
                    style: {
                        transform: "translateX(-".concat(n - (i || 0), "%)")
                    }
                })
            })
        }
        );
        i.displayName = r.fC.displayName
    },
    53282: function(e, t, s) {
        "use strict";
        s.d(t, {
            O: function() {
                return Skeleton
            }
        });
        var l = s(85893)
          , n = s(61350);
        function Skeleton(e) {
            let {className: t, ...s} = e;
            return (0,
            l.jsx)("div", {
                className: (0,
                n.cn)("animate-pulse rounded-md bg-muted", t),
                ...s
            })
        }
    },
    87565: function(e, t, s) {
        "use strict";
        s.r(t),
        s.d(t, {
            PopupWebSetting: function() {
                return F
            },
            __N_SSG: function() {
                return _
            },
            default: function() {
                return Home
            }
        });
        var l = s(85893)
          , n = s(5152)
          , r = s.n(n)
          , a = s(88767)
          , i = s(27278)
          , o = s(5379)
          , c = s.n(o)
          , d = s(67294)
          , u = s(53282)
          , m = s(458)
          , Skeletons_SkeletonBanner = function(e) {
            let {favicon: t} = e;
            return (0,
            l.jsx)(u.O, {
                className: "h-full w-full rounded-lg flex justify-center items-center",
                children: (0,
                l.jsx)(m.Z, {
                    src: t,
                    width: 40,
                    height: 40,
                    className: "grayscale",
                    alt: "favicon"
                })
            })
        }
          , x = s(23850)
          , f = s(30719);
        function HeroSection(e) {
            let {banners: t=[], isLoading: s=!1, favicon: n} = e;
            return s ? (0,
            l.jsx)("section", {
                id: "hero",
                className: "h-[10rem] md:h-[25rem] bg-gradient-to-b from-home-banner-gradFrom to-home-banner-gradTo px-8 lg:px-14 xl:px-34 2xl:px-36 flex justify-center items-center py-4 md:py-8",
                children: (0,
                l.jsx)(Skeletons_SkeletonBanner, {
                    favicon: n
                })
            }) : 0 === t.length ? null : (0,
            l.jsxs)("section", {
                id: "hero",
                className: "jsx-ae9b059f5cd4a9e h-[10rem] md:h-[25rem] bg-gradient-to-b pb-2 from-home-banner-gradFrom to-home-banner-gradTo",
                children: [(0,
                l.jsx)(c(), {
                    id: "ae9b059f5cd4a9e",
                    children: ".swiper-wrapper{position:relative;width:100%;z-index:1;display:-webkit-box;display:-webkit-flex;display:-moz-box;display:-ms-flexbox;display:flex;-webkit-transition-property:-webkit-transform;-moz-transition-timing-function:-moz-transform;-o-transition-timing-function:-o-transform;transition-property:-webkit-transform;transition-property:-moz-transform;transition-property:-o-transform;transition-property:transform;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}.swiper-wrapper{-webkit-transform-style:preserve-3d;-moz-transform-style:preserve-3d;transform-style:preserve-3d}.mySwiper{width:100%;height:100%}.swiper-slide{display:-webkit-box;display:-webkit-flex;display:-moz-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-moz-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-webkit-align-items:center;-moz-box-align:center;-ms-flex-align:center;align-items:center;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;background-position:center;-o-object-fit:contain;object-fit:contain}.swiper-slide img{display:block;max-height:85%;max-width:85%}.swiper-slide-duplicate-active,.swiper-slide-duplicate-next,.swiper-slide-next,.swiper-slide-duplicate-prev,.swiper-slide-prev,.swiper-slide-duplicate img{opacity:.3}.swiper-slide-visible.swiper-slide-active img{opacity:1!important}.swiper-pagination{display:-webkit-box;display:-webkit-flex;display:-moz-box;display:-ms-flexbox;display:flex;-webkit-box-flex:end;-webkit-flex:end;-moz-box-flex:end;-ms-flex:end;flex:end;-webkit-box-pack:center;-webkit-justify-content:center;-moz-box-pack:center;-ms-flex-pack:center;justify-content:center;gap:.5em;position:absolute;inset-inline:0;inset-block-end:1.5em;z-index:1;height:0}"
                }), (0,
                l.jsx)(f.tq, {
                    effect: "cards",
                    grabCursor: !0,
                    loop: !0,
                    autoplay: {
                        delay: 5e3,
                        disableOnInteraction: !1
                    },
                    slidesPerView: "auto",
                    cardsEffect: {
                        slideShadows: !1,
                        perSlideOffset: 8,
                        perSlideRotate: 3
                    },
                    pagination: !0,
                    modules: [x.c4, x.tl, x.pt],
                    className: "mySwiper",
                    children: null == t ? void 0 : t.map(e=>(0,
                    l.jsx)(f.o5, {
                        className: "relative",
                        children: (0,
                        l.jsx)("img", {
                            src: e.gambar,
                            alt: e.gambar,
                            className: "jsx-ae9b059f5cd4a9e object-cover rounded-lg"
                        })
                    }, e.gambar))
                })]
            })
        }
        var p = s(75590)
          , g = s(37210)
          , h = s(82942)
          , b = s(53376)
          , v = s(46227)
          , j = s(55950)
          , w = s(61350)
          , N = s(67677)
          , y = s(11163)
          , k = s(33784)
          , FlashSale_FSCounter = function(e) {
            let {endDate: t} = e
              , [s,n,r] = (0,
            k.a)(t);
            return (0,
            l.jsxs)("div", {
                className: "flex items-center gap-4",
                children: [(0,
                l.jsx)("div", {
                    className: "lg:h-[130px] lg:w-[130px] md:w-[110px] md:h-[110px] w-[100px] h-[100px] relative",
                    children: (0,
                    l.jsx)(m.Z, {
                        alt: "fs-3d",
                        src: "/images/3d/flash-sale.png",
                        fill: !0,
                        imgClassName: "object-contain"
                    })
                }), (0,
                l.jsxs)("div", {
                    className: "flex flex-col gap-2 md:text-base text-sm",
                    children: [(0,
                    l.jsx)("p", {
                        className: "font-semibold",
                        children: "Berakhir dalam"
                    }), (0,
                    l.jsxs)("div", {
                        className: "flex gap-3 font-semibold",
                        children: [(0,
                        l.jsx)("div", {
                            className: "bg-red-700 text-white p-2 w-12 text-center rounded-lg",
                            children: s
                        }), (0,
                        l.jsx)("div", {
                            className: "bg-red-700 text-white p-2 w-12 text-center rounded-lg",
                            children: n
                        }), (0,
                        l.jsx)("div", {
                            className: "bg-red-700 text-white p-2 w-12 text-center rounded-lg",
                            children: r
                        })]
                    })]
                })]
            })
        }
          , FlashSale = function(e) {
            let {data: t=[], flashSale: s} = e
              , n = (0,
            y.useRouter)();
            return 0 === t.length || v.Z.getDate(null == s ? void 0 : s.waktu_berakhir).unix() < v.Z.getToday().unix() ? null : (0,
            l.jsxs)("section", {
                id: "best-seller",
                className: "md:px-6 px-4 space-y-2 mb-4",
                children: [(0,
                l.jsx)(FlashSale_FSCounter, {
                    endDate: v.Z.getDate(null == s ? void 0 : s.waktu_berakhir).unix()
                }), (0,
                l.jsx)(N.tv, {
                    "aria-label": "My Favorite Images",
                    style: {
                        padding: 0
                    },
                    options: {
                        type: "slide",
                        perMove: 1,
                        autoplay: !0,
                        focus: "center",
                        arrows: !1,
                        drag: "free",
                        pagination: !1,
                        rewind: !0,
                        interval: 3e3,
                        breakpoints: {
                            4e3: {
                                perPage: 2.5,
                                gap: 24
                            },
                            1024: {
                                perPage: 2.2,
                                gap: 24
                            },
                            768: {
                                perPage: 1,
                                gap: 20
                            },
                            640: {
                                perPage: 1,
                                gap: 20
                            }
                        },
                        on: {
                            init: ()=>{
                                console.log("Carousel initialized")
                            }
                            ,
                            move: ()=>{
                                console.log("Slide moved")
                            }
                        }
                    },
                    children: null == t ? void 0 : t.map((e,t)=>(0,
                    l.jsx)(N.jw, {
                        children: (0,
                        l.jsxs)(h.Zb, {
                            onClick: ()=>n.push({
                                pathname: "/beli/".concat(e.slug),
                                query: {
                                    fsId: e.id
                                }
                            }),
                            className: (0,
                            w.cn)("w-full h-full border-none rounded-xl cursor-pointer flex flex-col relative", (0,
                            w.m)(t)),
                            children: [(0,
                            l.jsx)(m.Z, {
                                alt: e.slug,
                                className: "top-0",
                                imgClassName: "object-cover object-left rounded-xl brightness-50",
                                src: e.background,
                                fill: !0
                            }), (0,
                            l.jsx)(m.Z, {
                                alt: "fs-gif",
                                className: "top-0",
                                imgClassName: "object-cover object-left rounded-xl absolute top-0 right-0",
                                src: "/gifs/fs.gif",
                                height: 70,
                                width: 70
                            }), (0,
                            l.jsxs)("div", {
                                className: "flex flex-col justify-between h-full text-white",
                                children: [(0,
                                l.jsxs)("div", {
                                    className: "flex p-2 gap-3 items-start z-10 ",
                                    children: [(0,
                                    l.jsx)("div", {
                                        className: "h-16 w-16 md:h-20 md:w-20 lg:h-24 lg:w-24 relative shrink-0",
                                        children: (0,
                                        l.jsx)(m.Z, {
                                            alt: e.gambar,
                                            fill: !0,
                                            src: e.gambar,
                                            imgClassName: "rounded-lg object-cover"
                                        })
                                    }), (0,
                                    l.jsxs)("div", {
                                        className: "flex flex-col justify-between h-full gap-4",
                                        children: [(0,
                                        l.jsxs)("div", {
                                            className: "space-y-1",
                                            children: [(0,
                                            l.jsx)("p", {
                                                className: "text-sm md:text-base font-semibold line-clamp-2",
                                                children: e.layanan
                                            }), (0,
                                            l.jsx)("p", {
                                                className: "text-xs md:text-sm font-medium line-clamp-1",
                                                children: e.kategori
                                            })]
                                        }), (0,
                                        l.jsxs)("div", {
                                            className: "space-y-2 shrink-0",
                                            children: [(0,
                                            l.jsx)("p", {
                                                className: "text-xs md:text-sm font-medium line-clamp-1 line-through text-red-600",
                                                children: (0,
                                                j.q)(e.harga_diskon)
                                            }), (0,
                                            l.jsx)(g.C, {
                                                className: "text-xs md:text-sm font-semibold shrink-0 bg-red-600 text-white ",
                                                children: (0,
                                                j.q)(e.harga)
                                            })]
                                        })]
                                    })]
                                }), (0,
                                l.jsxs)("div", {
                                    className: "p-3 relative",
                                    children: [(0,
                                    l.jsx)(m.Z, {
                                        alt: "fire-icon",
                                        src: "/images/fire.png",
                                        width: 30,
                                        height: 30,
                                        className: "absolute z-20 bottom-2"
                                    }), (0,
                                    l.jsxs)("div", {
                                        className: "absolute z-30 bottom-4 text-sm  mx-auto w-full flex text-white justify-center",
                                        children: ["Tersisa ", e.stok]
                                    }), (0,
                                    l.jsx)(b.E, {
                                        value: e.stok,
                                        max: e.jumlah_stok,
                                        className: "bg-red-200 h-6"
                                    })]
                                })]
                            })]
                        })
                    }, t))
                })]
            })
        };
        s(25675);
        var BestSeller = function(e) {
            let {data: t=[]} = e
              , s = (0,
            y.useRouter)();
            return 0 === t.length ? null : (0,
            l.jsxs)("section", {
                id: "best-seller",
                className: "md:px-6 px-4",
                children: [(0,
                l.jsx)("h1", {
                    className: "lg:text-xl md:text-lg sm:text-sm font-semibold mb-5",
                    children: "⭐ Paling Banyak Dicari"
                }), (0,
                l.jsx)("div", {
                    className: "grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3",
                    children: null == t ? void 0 : t.map((e,t)=>(0,
                    l.jsxs)(h.Zb, {
                        onClick: ()=>s.push("/beli/".concat(e.slug)),
                        className: (0,
                        w.cn)("relative w-full h-16 md:h-24 border-none rounded-xl cursor-pointer flex flex-col justify-center p-0 text-white bg-[#1E76CE]"),
                        children: [(0,
                        l.jsx)(m.Z, {
                            alt: "pattern-1",
                            className: "top-0",
                            imgClassName: "object-cover object-left rounded-xl",
                            src: "/images/pattern-1.png",
                            fill: !0
                        }), (0,
                        l.jsxs)("div", {
                            className: "flex gap-3 items-center z-10 p-2",
                            children: [(0,
                            l.jsx)("div", {
                                className: "h-12 w-12 md:h-16 md:w-16 relative shrink-0",
                                children: (0,
                                l.jsx)(m.Z, {
                                    alt: e.nama,
                                    imgClassName: "object-cover rounded-xl",
                                    src: e.gambar,
                                    fill: !0
                                })
                            }), (0,
                            l.jsxs)("div", {
                                children: [(0,
                                l.jsx)("p", {
                                    className: "text-xs md:text-sm font-medium line-clamp-2",
                                    children: e.nama
                                }), (0,
                                l.jsx)("p", {
                                    className: "text-[10px] md:text-[11px] xl:text-xs line-clamp-1",
                                    children: e.sub_nama
                                })]
                            })]
                        })]
                    }, null == e ? void 0 : e.slug))
                })]
            })
        }
          , S = s(46490)
          , Z = s(59781)
          , z = s(53219)
          , C = s(82701)
          , News = function(e) {
            let {data: t=[], isLoading: s} = e
              , n = (0,
            y.useRouter)()
              , r = (0,
            d.useRef)(null)
              , [a,i] = (0,
            d.useState)(0);
            return 0 === t.length || s ? null : (0,
            l.jsxs)("section", {
                id: "best-seller",
                className: "md:px-6 px-4 mt-8",
                children: [(0,
                l.jsxs)("div", {
                    className: "flex justify-between items-center mb-5",
                    children: [(0,
                    l.jsx)("h1", {
                        className: "lg:text-xl md:text-lg sm:text-sm font-medium",
                        children: "BERITA"
                    }), (0,
                    l.jsxs)("div", {
                        className: "flex gap-4 items-center",
                        children: [(0,
                        l.jsx)("button", {
                            onClick: ()=>n.push("/blog"),
                            type: "button",
                            className: "text-sm  text-[#9ca3af] hover:text-primary",
                            children: "Lihat Semua"
                        }), (0,
                        l.jsxs)("div", {
                            className: "space-x-2 hidden md:block",
                            children: [0 === a ? null : (0,
                            l.jsx)("button", {
                                type: "button",
                                onClick: ()=>{
                                    r.current && (r.current.go("-1"),
                                    i(a - 1))
                                }
                                ,
                                disabled: 0 === a,
                                className: "text-[#1b1b41] text-md bg-gray-200 p-1 px-2  rounded-xl",
                                children: (0,
                                l.jsx)(z.Z, {})
                            }), (0,
                            l.jsx)("button", {
                                type: "button",
                                onClick: ()=>{
                                    r.current && (r.current.go("+1"),
                                    i(a + 1))
                                }
                                ,
                                className: "text-[#1b1b41] text-md bg-gray-200 p-1 px-2  rounded-xl",
                                children: (0,
                                l.jsx)(C.Z, {})
                            })]
                        })]
                    })]
                }), (0,
                l.jsx)(N.tv, {
                    style: {
                        padding: 0
                    },
                    options: {
                        type: "slide",
                        perMove: 1,
                        drag: "free",
                        focus: "center",
                        gap: 10,
                        arrows: !1,
                        pagination: !1,
                        breakpoints: {
                            4e3: {
                                perPage: 2.5,
                                gap: 10
                            },
                            1024: {
                                perPage: 2,
                                gap: 10
                            },
                            768: {
                                perPage: 2,
                                gap: 10
                            },
                            640: {
                                perPage: 1,
                                gap: 10
                            }
                        },
                        on: {
                            init: ()=>{
                                console.log("Carousel initialized")
                            }
                            ,
                            move: ()=>{
                                console.log("Slide moved")
                            }
                        }
                    },
                    onMoved: e=>{
                        i(e.index)
                    }
                    ,
                    ref: r,
                    children: t.map((e,t)=>(0,
                    l.jsx)(N.jw, {
                        children: (0,
                        l.jsx)("button", {
                            type: "button",
                            onClick: ()=>{
                                n.push("/blog/".concat(e.slug))
                            }
                            ,
                            className: "group w-full h-64 sm:h-72 rounded-xl overflow-hidden ",
                            children: (0,
                            l.jsxs)("div", {
                                className: " w-full h-full relative ",
                                children: [(0,
                                l.jsx)("div", {
                                    className: "block absolute inset-0  z-10  flex-col ",
                                    children: (0,
                                    l.jsxs)("div", {
                                        className: "absolute inset-0  z-10 flex flex-col items-end justify-between",
                                        children: [(0,
                                        l.jsx)("div", {
                                            className: ""
                                        }), (0,
                                        l.jsxs)("div", {
                                            className: "w-full flex flex-col bg-[rgba(0,0,0,0.3)] p-3",
                                            children: [(0,
                                            l.jsx)("span", {
                                                className: "text-[#ffffff] text-md font-bold text-left",
                                                children: e.judul
                                            }), (0,
                                            l.jsx)("span", {
                                                className: "text-[#ffffff] text-xs text-left",
                                                children: e.sub_konten
                                            })]
                                        })]
                                    })
                                }), (0,
                                l.jsx)("img", {
                                    src: e.gambar,
                                    alt: "news",
                                    className: "h-full w-full object-cover object-center transition-all duration-200 ease-in-out group-hover:blur-sm "
                                })]
                            })
                        })
                    }, t))
                })]
            })
        }
          , _ = !0;
        let F = r()(()=>s.e(4876).then(s.bind(s, 94876)), {
            loadableGenerated: {
                webpack: ()=>[94876]
            },
            ssr: !1
        });
        function Home(e) {
            var t, s, n;
            let[r,o] = (0,
            d.useState)((null == e ? void 0 : e.webSetting.popup_status) === "1")
              , {isLoading: c, data: u} = (0,
            a.useQuery)([Z.Z.SLIDER], ()=>S.Z.slider(), {
                retry: 0,
                refetchOnWindowFocus: !1
            })
              , {isLoading: m, data: x} = (0,
            a.useQuery)([Z.Z.KATEGORI], ()=>S.Z.kategori(), {
                retry: 0,
                refetchOnWindowFocus: !1
            })
              , {data: f} = (0,
            a.useQuery)([Z.Z.BEST_SELLER], ()=>S.Z.trending(), {
                retry: 0,
                refetchOnWindowFocus: !1
            })
              , {data: g} = (0,
            a.useQuery)([Z.Z.FLASH_SALE], ()=>S.Z.flashSale(), {
                retry: 0,
                refetchOnWindowFocus: !1
            })
              , {isLoading: h, data: b} = (0,
            a.useQuery)([Z.Z.BLOG_TRENDING], ()=>S.Z.blogGet(), {
                retry: 0,
                refetchOnWindowFocus: !1
            });
            return (0,
            l.jsxs)(i.Z, {
                webSetting: null == e ? void 0 : e.webSetting,
                pageTitle: "Topup Game Terpercaya",
                children: [(0,
                l.jsx)(HeroSection, {
                    banners: (null == u ? void 0 : u.data) || [],
                    isLoading: c,
                    favicon: null == e ? void 0 : null === (t = e.webSetting) || void 0 === t ? void 0 : t.logo
                }), (0,
                l.jsx)(FlashSale, {
                    data: null == g ? void 0 : g.data,
                    flashSale: null == g ? void 0 : g.flash_sale
                }), (0,
                l.jsx)(BestSeller, {
                    data: null == f ? void 0 : f.data
                }), (0,
                l.jsx)(p.Z, {
                    data: (null == x ? void 0 : x.data) || [],
                    isLoading: m,
                    favicon: null == e ? void 0 : null === (s = e.webSetting) || void 0 === s ? void 0 : s.logo
                }), (0,
                l.jsx)(News, {
                    data: (null == b ? void 0 : b.data) || []
                }), (0,
                l.jsx)(F, {
                    show: r,
                    setShow: o,
                    content: (0,
                    l.jsx)("img", {
                        src: null == e ? void 0 : null === (n = e.webSetting) || void 0 === n ? void 0 : n.popup_image,
                        alt: "popup-image"
                    })
                })]
            })
        }
    },
    33784: function(e, t, s) {
        "use strict";
        s.d(t, {
            a: function() {
                return useCountdown
            }
        });
        var l = s(67294);
        s(46227);
        let padZero = e=>e < 10 ? "0".concat(e) : e
          , getReturnValues = e=>{
            let t = padZero(Math.floor(e / 36e5))
              , s = padZero(Math.floor(e % 36e5 / 6e4))
              , l = padZero(Math.floor(e % 6e4 / 1e3));
            return [t, s, l]
        }
          , useCountdown = e=>{
            let t = 1e3 * e
              , [s,n] = (0,
            l.useState)(0);
            return (0,
            l.useEffect)(()=>{
                let e = setInterval(()=>{
                    n(t - new Date().getTime())
                }
                , 1e3);
                return ()=>clearInterval(e)
            }
            , [t]),
            getReturnValues(s)
        }
    },
    55950: function(e, t, s) {
        "use strict";
        s.d(t, {
            q: function() {
                return toRupiah
            }
        });
        let commaFormatter = (e,t)=>{
            if (e) {
                let s = t.floatingPoint && t.floatingPoint - e.length;
                if (void 0 !== s && s > 0 && t.floatingPoint)
                    for (let s = 0; s < t.floatingPoint - e.length; s++)
                        e += "0";
                else
                    void 0 !== s && s < 0 && (e = e.slice(0, s))
            } else
                e = t.replaceZeroDecimals ? (null == t ? void 0 : t.dash) ? "-" : "" : "00";
            return e
        }
          , dotsFormatter = (e,t)=>{
            let s = e.split(".")
              , l = s[0].length
              , n = s[0].split("");
            for (let e = l - 1; e >= 0; e--)
                (l - e) % 3 == 0 && e > 0 && (n[e] = t.dot + n[e]);
            let r = n.join("");
            if (t.removeZeroDecimals && !s[1])
                return r;
            let a = commaFormatter(s[1] || null, t);
            return t.floatingPoint && t.floatingPoint > 0 ? r + t.decimal + a : r
        }
          , symbolFormatter = (e,t)=>("Rp" === t.symbol ? (t.formal,
        e = "Rp ".concat(e)) : "IDR" === t.symbol && (e = t.formal ? "".concat(e, " IDR") : "IDR ".concat(e)),
        e)
          , unitFormatter = (e,t)=>{
            let s = t.longUnit ? ["ribu", "juta", "milyar", "triliun"] : [t.k ? "k" : "rb", "jt", "M", "T"]
              , l = Math.ceil(e.length / 3) - 2
              , n = null;
            if (l >= 0 && l < 4) {
                let r = s[l];
                t.spaceBeforeUnit && (r = " ".concat(r));
                let a = e.length % 3
                  , i = 0 === a ? 3 : a;
                n = e.substr(0, i) + (t.floatingPoint && (l >= 0 && t.floatingPoint > 0 ? t.decimal : "") + e.substr(i, t.floatingPoint) + r)
            } else
                n = dotsFormatter(e, t);
            return n
        }
          , l = {
            symbol: "Rp",
            formal: !0,
            dot: ".",
            decimal: ",",
            floatingPoint: 2,
            replaceZeroDecimals: !0,
            removeZeroDecimals: !1,
            k: !1,
            useUnit: !1,
            longUnit: !1,
            spaceBeforeUnit: !1,
            dash: !0
        }
          , toRupiah = (e,t)=>(null == e && (e = 0),
        e = "string" != typeof e ? e.toString() : e,
        (t = {
            ...l,
            ...t
        }).useUnit ? symbolFormatter(unitFormatter(e, t), t) : symbolFormatter(dotsFormatter(e, t), t))
    }
}, function(e) {
    e.O(0, [8136, 5675, 7030, 7677, 5474, 2624, 662, 7278, 9774, 2888, 179], function() {
        return e(e.s = 45728)
    }),
    _N_E = e.O()
}
]);
