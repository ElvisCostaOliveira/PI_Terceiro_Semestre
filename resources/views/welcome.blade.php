<!DOCTYPE html>
<html lang="pt-br">

<head>
    <script async="" src="js/gtm.js"></script>
    <script async="" src="js/gtm_1.js"></script>
    <script
        type="text/javascript">(window.NREUM || (NREUM = {})).init = { privacy: { cookies_enabled: true }, ajax: { deny_list: ["bam.nr-data.net"] }, distributed_tracing: { enabled: true } }; (window.NREUM || (NREUM = {})).loader_config = { agentID: "1134172354", accountID: "3453666", trustKey: "3453666", xpid: "VwICUlBVDhABVVNUDwMPV1EA", licenseKey: "NRJS-f2d15bd9e96e98a917d", applicationID: "1126828151" };;/*! For license information please see nr-loader-spa-1.248.0.min.js.LICENSE.txt */
            (() => { var e, t, r = { 234: (e, t, r) => { "use strict"; r.d(t, { P_: () => g, Mt: () => v, C5: () => s, DL: () => A, OP: () => D, lF: () => N, Yu: () => x, Dg: () => m, CX: () => c, GE: () => w, sU: () => j }); var n = r(8632), i = r(9567); const o = { beacon: n.ce.beacon, errorBeacon: n.ce.errorBeacon, licenseKey: void 0, applicationID: void 0, sa: void 0, queueTime: void 0, applicationTime: void 0, ttGuid: void 0, user: void 0, account: void 0, product: void 0, extra: void 0, jsAttributes: {}, userAttributes: void 0, atts: void 0, transactionName: void 0, tNamePlain: void 0 }, a = {}; function s(e) { if (!e) throw new Error("All info objects require an agent identifier!"); if (!a[e]) throw new Error("Info for ".concat(e, " was never set")); return a[e] } function c(e, t) { if (!e) throw new Error("All info objects require an agent identifier!"); a[e] = (0, i.D)(t, o); const r = (0, n.ek)(e); r && (r.info = a[e]) } const u = e => { if (!e || "string" != typeof e) return !1; try { document.createDocumentFragment().querySelector(e) } catch { return !1 } return !0 }; var d = r(7056), l = r(50); const f = () => { const e = { mask_selector: "*", block_selector: "[data-nr-block]", mask_input_options: { color: !1, date: !1, "datetime-local": !1, email: !1, month: !1, number: !1, range: !1, search: !1, tel: !1, text: !1, time: !1, url: !1, week: !1, textarea: !1, select: !1, password: !0 } }; return { feature_flags: [], proxy: { assets: void 0, beacon: void 0 }, privacy: { cookies_enabled: !0 }, ajax: { deny_list: void 0, block_internal: !0, enabled: !0, harvestTimeSeconds: 10, autoStart: !0 }, distributed_tracing: { enabled: void 0, exclude_newrelic_header: void 0, cors_use_newrelic_header: void 0, cors_use_tracecontext_headers: void 0, allowed_origins: void 0 }, session: { domain: void 0, expiresMs: d.oD, inactiveMs: d.Hb }, ssl: void 0, obfuscate: void 0, jserrors: { enabled: !0, harvestTimeSeconds: 10, autoStart: !0 }, metrics: { enabled: !0, autoStart: !0 }, page_action: { enabled: !0, harvestTimeSeconds: 30, autoStart: !0 }, page_view_event: { enabled: !0, autoStart: !0 }, page_view_timing: { enabled: !0, harvestTimeSeconds: 30, long_task: !1, autoStart: !0 }, session_trace: { enabled: !0, harvestTimeSeconds: 10, autoStart: !0 }, harvest: { tooManyRequestsDelay: 60 }, session_replay: { autoStart: !0, enabled: !1, harvestTimeSeconds: 60, sampling_rate: 50, error_sampling_rate: 50, collect_fonts: !1, inline_images: !1, inline_stylesheet: !0, mask_all_inputs: !0, get mask_text_selector() { return e.mask_selector }, set mask_text_selector(t) { u(t) ? e.mask_selector = t + ",[data-nr-mask]" : null === t ? e.mask_selector = t : (0, l.Z)("An invalid session_replay.mask_selector was provided and will not be used", t) }, get block_class() { return "nr-block" }, get ignore_class() { return "nr-ignore" }, get mask_text_class() { return "nr-mask" }, get block_selector() { return e.block_selector }, set block_selector(t) { u(t) ? e.block_selector += ",".concat(t) : "" !== t && (0, l.Z)("An invalid session_replay.block_selector was provided and will not be used", t) }, get mask_input_options() { return e.mask_input_options }, set mask_input_options(t) { t && "object" == typeof t ? e.mask_input_options = { ...t, password: !0 } : (0, l.Z)("An invalid session_replay.mask_input_option was provided and will not be used", t) } }, spa: { enabled: !0, harvestTimeSeconds: 10, autoStart: !0 } } }, h = {}, p = "All configuration objects require an agent identifier!"; function g(e) { if (!e) throw new Error(p); if (!h[e]) throw new Error("Configuration for ".concat(e, " was never set")); return h[e] } function m(e, t) { if (!e) throw new Error(p); h[e] = (0, i.D)(t, f()); const r = (0, n.ek)(e); r && (r.init = h[e]) } function v(e, t) { if (!e) throw new Error(p); var r = g(e); if (r) { for (var n = t.split("."), i = 0; i < n.length - 1; i++)if ("object" != typeof (r = r[n[i]])) return; r = r[n[n.length - 1]] } return r } const b = { accountID: void 0, trustKey: void 0, agentID: void 0, licenseKey: void 0, applicationID: void 0, xpid: void 0 }, y = {}; function A(e) { if (!e) throw new Error("All loader-config objects require an agent identifier!"); if (!y[e]) throw new Error("LoaderConfig for ".concat(e, " was never set")); return y[e] } function w(e, t) { if (!e) throw new Error("All loader-config objects require an agent identifier!"); y[e] = (0, i.D)(t, b); const r = (0, n.ek)(e); r && (r.loader_config = y[e]) } const x = (0, n.mF)().o; var E = r(385), _ = r(6818); const T = { buildEnv: _.Re, customTransaction: void 0, disabled: !1, distMethod: _.gF, isolatedBacklog: !1, loaderType: void 0, maxBytes: 3e4, offset: Math.floor(E._A?.performance?.timeOrigin || E._A?.performance?.timing?.navigationStart || Date.now()), onerror: void 0, origin: "" + E._A.location, ptid: void 0, releaseIds: {}, session: void 0, xhrWrappable: "function" == typeof E._A.XMLHttpRequest?.prototype?.addEventListener, version: _.q4, denyList: void 0 }, S = {}; function D(e) { if (!e) throw new Error("All runtime objects require an agent identifier!"); if (!S[e]) throw new Error("Runtime for ".concat(e, " was never set")); return S[e] } function j(e, t) { if (!e) throw new Error("All runtime objects require an agent identifier!"); S[e] = (0, i.D)(t, T); const r = (0, n.ek)(e); r && (r.runtime = S[e]) } function N(e) { return function (e) { try { const t = s(e); return !!t.licenseKey && !!t.errorBeacon && !!t.applicationID } catch (e) { return !1 } }(e) } }, 9567: (e, t, r) => { "use strict"; r.d(t, { D: () => i }); var n = r(50); function i(e, t) { try { if (!e || "object" != typeof e) return (0, n.Z)("Setting a Configurable requires an object as input"); if (!t || "object" != typeof t) return (0, n.Z)("Setting a Configurable requires a model to set its initial properties"); const r = Object.create(Object.getPrototypeOf(t), Object.getOwnPropertyDescriptors(t)), o = 0 === Object.keys(r).length ? e : r; for (let a in o) if (void 0 !== e[a]) try { Array.isArray(e[a]) && Array.isArray(t[a]) ? r[a] = Array.from(new Set([...e[a], ...t[a]])) : "object" == typeof e[a] && "object" == typeof t[a] ? r[a] = i(e[a], t[a]) : r[a] = e[a] } catch (e) { (0, n.Z)("An error occurred while setting a property of a Configurable", e) } return r } catch (e) { (0, n.Z)("An error occured while setting a Configurable", e) } } }, 6818: (e, t, r) => { "use strict"; r.d(t, { Re: () => i, gF: () => o, lF: () => a, q4: () => n }); const n = "1.248.0", i = "PROD", o = "CDN", a = "2.0.0-alpha.11" }, 385: (e, t, r) => { "use strict"; r.d(t, { FN: () => c, IF: () => l, LW: () => a, Nk: () => h, Tt: () => u, _A: () => o, cv: () => p, iS: () => s, il: () => n, ux: () => d, v6: () => i, w1: () => f }); const n = "undefined" != typeof window && !!window.document, i = "undefined" != typeof WorkerGlobalScope && ("undefined" != typeof self && self instanceof WorkerGlobalScope && self.navigator instanceof WorkerNavigator || "undefined" != typeof globalThis && globalThis instanceof WorkerGlobalScope && globalThis.navigator instanceof WorkerNavigator), o = n ? window : "undefined" != typeof WorkerGlobalScope && ("undefined" != typeof self && self instanceof WorkerGlobalScope && self || "undefined" != typeof globalThis && globalThis instanceof WorkerGlobalScope && globalThis), a = "complete" === o?.document?.readyState, s = Boolean("hidden" === o?.document?.visibilityState), c = "" + o?.location, u = /iPad|iPhone|iPod/.test(o.navigator?.userAgent), d = u && "undefined" == typeof SharedWorker, l = (() => { const e = o.navigator?.userAgent?.match(/Firefox[/\s](\d+\.\d+)/); return Array.isArray(e) && e.length >= 2 ? +e[1] : 0 })(), f = Boolean(n && window.document.documentMode), h = !!o.navigator?.sendBeacon, p = Math.floor(o?.performance?.timeOrigin || o?.performance?.timing?.navigationStart || Date.now()) }, 1117: (e, t, r) => { "use strict"; r.d(t, { w: () => o }); var n = r(50); const i = { agentIdentifier: "", ee: void 0 }; class o { constructor(e) { try { if ("object" != typeof e) return (0, n.Z)("shared context requires an object as input"); this.sharedContext = {}, Object.assign(this.sharedContext, i), Object.entries(e).forEach((e => { let [t, r] = e; Object.keys(i).includes(t) && (this.sharedContext[t] = r) })) } catch (e) { (0, n.Z)("An error occured while setting SharedContext", e) } } } }, 8e3: (e, t, r) => { "use strict"; r.d(t, { L: () => d, R: () => c }); var n = r(8325), i = r(1284), o = r(4322), a = r(3325); const s = {}; function c(e, t) { const r = { staged: !1, priority: a.p[t] || 0 }; u(e), s[e].get(t) || s[e].set(t, r) } function u(e) { e && (s[e] || (s[e] = new Map)) } function d() { let e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "", t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "feature"; if (u(e), !e || !s[e].get(t)) return a(t); s[e].get(t).staged = !0; const r = [...s[e]]; function a(t) { const r = e ? n.ee.get(e) : n.ee, a = o.X.handlers; if (r.backlog && a) { var s = r.backlog[t], c = a[t]; if (c) { for (var u = 0; s && u < s.length; ++u)l(s[u], c); (0, i.D)(c, (function (e, t) { (0, i.D)(t, (function (t, r) { r[0].on(e, r[1]) })) })) } delete a[t], r.backlog[t] = null, r.emit("drain-" + t, []) } } r.every((e => { let [t, r] = e; return r.staged })) && (r.sort(((e, t) => e[1].priority - t[1].priority)), r.forEach((t => { let [r] = t; s[e].delete(r), a(r) }))) } function l(e, t) { var r = e[1]; (0, i.D)(t[r], (function (t, r) { var n = e[0]; if (r[0] === n) { var i = r[1], o = e[3], a = e[2]; i.apply(o, a) } })) } }, 8325: (e, t, r) => { "use strict"; r.d(t, { A: () => c, ee: () => u }); var n = r(8632), i = r(2210), o = r(234); class a { constructor(e) { this.contextId = e } } var s = r(3117); const c = "nr@context:".concat(s.a), u = function e(t, r) { var n = {}, s = {}, d = {}, f = !1; try { f = 16 === r.length && (0, o.OP)(r).isolatedBacklog } catch (e) { } var h = { on: g, addEventListener: g, removeEventListener: function (e, t) { var r = n[e]; if (!r) return; for (var i = 0; i < r.length; i++)r[i] === t && r.splice(i, 1) }, emit: function (e, r, n, i, o) { !1 !== o && (o = !0); if (u.aborted && !i) return; t && o && t.emit(e, r, n); for (var a = p(n), c = m(e), d = c.length, l = 0; l < d; l++)c[l].apply(a, r); var f = b()[s[e]]; f && f.push([h, e, r, a]); return a }, get: v, listeners: m, context: p, buffer: function (e, t) { const r = b(); if (t = t || "feature", h.aborted) return; Object.entries(e || {}).forEach((e => { let [n, i] = e; s[i] = t, t in r || (r[t] = []) })) }, abort: l, aborted: !1, isBuffering: function (e) { return !!b()[s[e]] }, debugId: r, backlog: f ? {} : t && "object" == typeof t.backlog ? t.backlog : {} }; return h; function p(e) { return e && e instanceof a ? e : e ? (0, i.X)(e, c, (() => new a(c))) : new a(c) } function g(e, t) { n[e] = m(e).concat(t) } function m(e) { return n[e] || [] } function v(t) { return d[t] = d[t] || e(h, t) } function b() { return h.backlog } }(void 0, "globalEE"), d = (0, n.fP)(); function l() { u.aborted = !0, u.backlog = {} } d.ee || (d.ee = u) }, 5546: (e, t, r) => { "use strict"; r.d(t, { E: () => n, p: () => i }); var n = r(8325).ee.get("handle"); function i(e, t, r, i, o) { o ? (o.buffer([e], i), o.emit(e, t, r)) : (n.buffer([e], i), n.emit(e, t, r)) } }, 4322: (e, t, r) => { "use strict"; r.d(t, { X: () => o }); var n = r(5546); o.on = a; var i = o.handlers = {}; function o(e, t, r, o) { a(o || n.E, i, e, t, r) } function a(e, t, r, i, o) { o || (o = "feature"), e || (e = n.E); var a = t[o] = t[o] || {}; (a[r] = a[r] || []).push([e, i]) } }, 3239: (e, t, r) => { "use strict"; r.d(t, { bP: () => s, iz: () => c, m$: () => a }); var n = r(385); let i = !1, o = !1; try { const e = { get passive() { return i = !0, !1 }, get signal() { return o = !0, !1 } }; n._A.addEventListener("test", null, e), n._A.removeEventListener("test", null, e) } catch (e) { } function a(e, t) { return i || o ? { capture: !!e, passive: i, signal: t } : !!e } function s(e, t) { let r = arguments.length > 2 && void 0 !== arguments[2] && arguments[2], n = arguments.length > 3 ? arguments[3] : void 0; window.addEventListener(e, t, a(r, n)) } function c(e, t) { let r = arguments.length > 2 && void 0 !== arguments[2] && arguments[2], n = arguments.length > 3 ? arguments[3] : void 0; document.addEventListener(e, t, a(r, n)) } }, 3117: (e, t, r) => { "use strict"; r.d(t, { a: () => n }); const n = (0, r(4402).Rl)() }, 4402: (e, t, r) => { "use strict"; r.d(t, { Ht: () => u, M: () => c, Rl: () => a, ky: () => s }); var n = r(385); const i = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx"; function o(e, t) { return e ? 15 & e[t] : 16 * Math.random() | 0 } function a() { const e = n._A?.crypto || n._A?.msCrypto; let t, r = 0; return e && e.getRandomValues && (t = e.getRandomValues(new Uint8Array(31))), i.split("").map((e => "x" === e ? o(t, ++r).toString(16) : "y" === e ? (3 & o() | 8).toString(16) : e)).join("") } function s(e) { const t = n._A?.crypto || n._A?.msCrypto; let r, i = 0; t && t.getRandomValues && (r = t.getRandomValues(new Uint8Array(31))); const a = []; for (var s = 0; s < e; s++)a.push(o(r, ++i).toString(16)); return a.join("") } function c() { return s(16) } function u() { return s(32) } }, 7056: (e, t, r) => { "use strict"; r.d(t, { Bq: () => n, Hb: () => o, oD: () => i }); const n = "NRBA", i = 144e5, o = 18e5 }, 7894: (e, t, r) => { "use strict"; function n() { return Math.round(performance.now()) } r.d(t, { z: () => n }) }, 7243: (e, t, r) => { "use strict"; r.d(t, { e: () => i }); var n = r(385); function i(e) { if (0 === (e || "").indexOf("data:")) return { protocol: "data" }; try { const t = new URL(e, location.href), r = { port: t.port, hostname: t.hostname, pathname: t.pathname, search: t.search, protocol: t.protocol.slice(0, t.protocol.indexOf(":")), sameOrigin: t.protocol === n._A?.location?.protocol && t.host === n._A?.location?.host }; return r.port && "" !== r.port || ("http:" === t.protocol && (r.port = "80"), "https:" === t.protocol && (r.port = "443")), r.pathname && "" !== r.pathname ? r.pathname.startsWith("/") || (r.pathname = "/".concat(r.pathname)) : r.pathname = "/", r } catch (e) { return {} } } }, 50: (e, t, r) => { "use strict"; function n(e, t) { "function" == typeof console.warn && (console.warn("New Relic: ".concat(e)), t && console.warn(t)) } r.d(t, { Z: () => n }) }, 2825: (e, t, r) => { "use strict"; r.d(t, { N: () => d, T: () => l }); var n = r(8325), i = r(5546), o = r(3325), a = r(385); const s = "newrelic"; const c = { stn: [o.D.sessionTrace], err: [o.D.jserrors, o.D.metrics], ins: [o.D.pageAction], spa: [o.D.spa], sr: [o.D.sessionReplay, o.D.sessionTrace] }, u = new Set; function d(e, t) { const r = n.ee.get(t); e && "object" == typeof e && (u.has(t) || (Object.entries(e).forEach((e => { let [t, n] = e; c[t] ? c[t].forEach((e => { n ? (0, i.p)("feat-" + t, [], void 0, e, r) : (0, i.p)("block-" + t, [], void 0, e, r), (0, i.p)("rumresp-" + t, [Boolean(n)], void 0, e, r) })) : n && (0, i.p)("feat-" + t, [], void 0, void 0, r), l[t] = Boolean(n) })), Object.keys(c).forEach((e => { void 0 === l[e] && (c[e]?.forEach((t => (0, i.p)("rumresp-" + e, [!1], void 0, t, r))), l[e] = !1) })), u.add(t), function () { let e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}; try { a._A.dispatchEvent(new CustomEvent(s, { detail: e })) } catch (e) { } }({ loaded: !0 }))) } const l = {} }, 2210: (e, t, r) => { "use strict"; r.d(t, { X: () => i }); var n = Object.prototype.hasOwnProperty; function i(e, t, r) { if (n.call(e, t)) return e[t]; var i = r(); if (Object.defineProperty && Object.keys) try { return Object.defineProperty(e, t, { value: i, writable: !0, enumerable: !1 }), i } catch (e) { } return e[t] = i, i } }, 1284: (e, t, r) => { "use strict"; r.d(t, { D: () => n }); const n = (e, t) => Object.entries(e || {}).map((e => { let [r, n] = e; return t(r, n) })) }, 4351: (e, t, r) => { "use strict"; r.d(t, { P: () => o }); var n = r(8325); const i = () => { const e = new WeakSet; return (t, r) => { if ("object" == typeof r && null !== r) { if (e.has(r)) return; e.add(r) } return r } }; function o(e) { try { return JSON.stringify(e, i()) } catch (e) { try { n.ee.emit("internal-error", [e]) } catch (e) { } } } }, 3960: (e, t, r) => { "use strict"; r.d(t, { KB: () => a, b2: () => o }); var n = r(3239); function i() { return "undefined" == typeof document || "complete" === document.readyState } function o(e, t) { if (i()) return e(); (0, n.bP)("load", e, t) } function a(e) { if (i()) return e(); (0, n.iz)("DOMContentLoaded", e) } }, 8632: (e, t, r) => { "use strict"; r.d(t, { EZ: () => d, ce: () => o, ek: () => u, fP: () => a, gG: () => l, h5: () => c, mF: () => s }); var n = r(7894), i = r(385); const o = { beacon: "bam.nr-data.net", errorBeacon: "bam.nr-data.net" }; function a() { return i._A.NREUM || (i._A.NREUM = {}), void 0 === i._A.newrelic && (i._A.newrelic = i._A.NREUM), i._A.NREUM } function s() { let e = a(); return e.o || (e.o = { ST: i._A.setTimeout, SI: i._A.setImmediate, CT: i._A.clearTimeout, XHR: i._A.XMLHttpRequest, REQ: i._A.Request, EV: i._A.Event, PR: i._A.Promise, MO: i._A.MutationObserver, FETCH: i._A.fetch }), e } function c(e, t) { let r = a(); r.initializedAgents ??= {}, t.initializedAt = { ms: (0, n.z)(), date: new Date }, r.initializedAgents[e] = t } function u(e) { let t = a(); return t.initializedAgents?.[e] } function d(e, t) { a()[e] = t } function l() { return function () { let e = a(); const t = e.info || {}; e.info = { beacon: o.beacon, errorBeacon: o.errorBeacon, ...t } }(), function () { let e = a(); const t = e.init || {}; e.init = { ...t } }(), s(), function () { let e = a(); const t = e.loader_config || {}; e.loader_config = { ...t } }(), a() } }, 7956: (e, t, r) => { "use strict"; r.d(t, { N: () => i }); var n = r(3239); function i(e) { let t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1], r = arguments.length > 2 ? arguments[2] : void 0, i = arguments.length > 3 ? arguments[3] : void 0; (0, n.iz)("visibilitychange", (function () { if (t) return void ("hidden" === document.visibilityState && e()); e(document.visibilityState) }), r, i) } }, 1214: (e, t, r) => { "use strict"; r.d(t, { em: () => b, u5: () => D, QU: () => C, _L: () => I, Gm: () => H, Lg: () => L, BV: () => G, Kf: () => K }); var n = r(8325), i = r(3117); const o = "nr@original:".concat(i.a); var a = Object.prototype.hasOwnProperty, s = !1; function c(e, t) { return e || (e = n.ee), r.inPlace = function (e, t, n, i, o) { n || (n = ""); const a = "-" === n.charAt(0); for (let s = 0; s < t.length; s++) { const c = t[s], u = e[c]; d(u) || (e[c] = r(u, a ? c + n : n, i, c, o)) } }, r.flag = o, r; function r(t, r, n, s, c) { return d(t) ? t : (r || (r = ""), nrWrapper[o] = t, function (e, t, r) { if (Object.defineProperty && Object.keys) try { return Object.keys(e).forEach((function (r) { Object.defineProperty(t, r, { get: function () { return e[r] }, set: function (t) { return e[r] = t, t } }) })), t } catch (e) { u([e], r) } for (var n in e) a.call(e, n) && (t[n] = e[n]) }(t, nrWrapper, e), nrWrapper); function nrWrapper() { var o, a, d, l; try { a = this, o = [...arguments], d = "function" == typeof n ? n(o, a) : n || {} } catch (t) { u([t, "", [o, a, s], d], e) } i(r + "start", [o, a, s], d, c); try { return l = t.apply(a, o) } catch (e) { throw i(r + "err", [o, a, e], d, c), e } finally { i(r + "end", [o, a, l], d, c) } } } function i(r, n, i, o) { if (!s || t) { var a = s; s = !0; try { e.emit(r, n, i, t, o) } catch (t) { u([t, r, n, i], e) } s = a } } } function u(e, t) { t || (t = n.ee); try { t.emit("internal-error", e) } catch (e) { } } function d(e) { return !(e && "function" == typeof e && e.apply && !e[o]) } var l = r(2210), f = r(385); const h = {}, p = f._A.XMLHttpRequest, g = "addEventListener", m = "removeEventListener", v = "nr@wrapped:".concat(n.A); function b(e) { var t = function (e) { return (e || n.ee).get("events") }(e); if (h[t.debugId]++) return t; h[t.debugId] = 1; var r = c(t, !0); function i(e) { r.inPlace(e, [g, m], "-", o) } function o(e, t) { return e[1] } return "getPrototypeOf" in Object && (f.il && y(document, i), y(f._A, i), y(p.prototype, i)), t.on(g + "-start", (function (e, t) { var n = e[1]; if (null !== n && ("function" == typeof n || "object" == typeof n)) { var i = (0, l.X)(n, v, (function () { var e = { object: function () { if ("function" != typeof n.handleEvent) return; return n.handleEvent.apply(n, arguments) }, function: n }[typeof n]; return e ? r(e, "fn-", null, e.name || "anonymous") : n })); this.wrapped = e[1] = i } })), t.on(m + "-start", (function (e) { e[1] = this.wrapped || e[1] })), t } function y(e, t) { let r = e; for (; "object" == typeof r && !Object.prototype.hasOwnProperty.call(r, g);)r = Object.getPrototypeOf(r); for (var n = arguments.length, i = new Array(n > 2 ? n - 2 : 0), o = 2; o < n; o++)i[o - 2] = arguments[o]; r && t(r, ...i) } var A = "fetch-", w = A + "body-", x = ["arrayBuffer", "blob", "json", "text", "formData"], E = f._A.Request, _ = f._A.Response, T = "prototype"; const S = {}; function D(e) { const t = function (e) { return (e || n.ee).get("fetch") }(e); if (!(E && _ && f._A.fetch)) return t; if (S[t.debugId]++) return t; function r(e, r, i) { var o = e[r]; "function" == typeof o && (e[r] = function () { var e, r = [...arguments], a = {}; t.emit(i + "before-start", [r], a), a[n.A] && a[n.A].dt && (e = a[n.A].dt); var s = o.apply(this, r); return t.emit(i + "start", [r, e], s), s.then((function (e) { return t.emit(i + "end", [null, e], s), e }), (function (e) { throw t.emit(i + "end", [e], s), e })) }) } return S[t.debugId] = 1, x.forEach((e => { r(E[T], e, w), r(_[T], e, w) })), r(f._A, "fetch", A), t.on(A + "end", (function (e, r) { var n = this; if (r) { var i = r.headers.get("content-length"); null !== i && (n.rxSize = i), t.emit(A + "done", [null, r], n) } else t.emit(A + "done", [e], n) })), t } const j = {}, N = ["pushState", "replaceState"]; function C(e) { const t = function (e) { return (e || n.ee).get("history") }(e); return !f.il || j[t.debugId]++ || (j[t.debugId] = 1, c(t).inPlace(window.history, N, "-")), t } var R = r(3239); const O = {}, P = ["appendChild", "insertBefore", "replaceChild"]; function I(e) { const t = function (e) { return (e || n.ee).get("jsonp") }(e); if (!f.il || O[t.debugId]) return t; O[t.debugId] = !0; var r = c(t), i = /[?&](?:callback|cb)=([^&#]+)/, o = /(.*)\.([^.]+)/, a = /^(\w+)(\.|$)(.*)$/; function s(e, t) { if (!e) return t; const r = e.match(a), n = r[1]; return s(r[3], t[n]) } return r.inPlace(Node.prototype, P, "dom-"), t.on("dom-start", (function (e) { !function (e) { if (!e || "string" != typeof e.nodeName || "script" !== e.nodeName.toLowerCase()) return; if ("function" != typeof e.addEventListener) return; var n = (a = e.src, c = a.match(i), c ? c[1] : null); var a, c; if (!n) return; var u = function (e) { var t = e.match(o); if (t && t.length >= 3) return { key: t[2], parent: s(t[1], window) }; return { key: e, parent: window } }(n); if ("function" != typeof u.parent[u.key]) return; var d = {}; function l() { t.emit("jsonp-end", [], d), e.removeEventListener("load", l, (0, R.m$)(!1)), e.removeEventListener("error", f, (0, R.m$)(!1)) } function f() { t.emit("jsonp-error", [], d), t.emit("jsonp-end", [], d), e.removeEventListener("load", l, (0, R.m$)(!1)), e.removeEventListener("error", f, (0, R.m$)(!1)) } r.inPlace(u.parent, [u.key], "cb-", d), e.addEventListener("load", l, (0, R.m$)(!1)), e.addEventListener("error", f, (0, R.m$)(!1)), t.emit("new-jsonp", [e.src], d) }(e[0]) })), t } const k = {}; function H(e) { const t = function (e) { return (e || n.ee).get("mutation") }(e); if (!f.il || k[t.debugId]) return t; k[t.debugId] = !0; var r = c(t), i = f._A.MutationObserver; return i && (window.MutationObserver = function (e) { return this instanceof i ? new i(r(e, "fn-")) : i.apply(this, arguments) }, MutationObserver.prototype = i.prototype), t } const z = {}; function L(e) { const t = function (e) { return (e || n.ee).get("promise") }(e); if (z[t.debugId]) return t; z[t.debugId] = !0; var r = t.context, i = c(t), a = f._A.Promise; return a && function () { function e(r) { var n = t.context(), o = i(r, "executor-", n, null, !1); const s = Reflect.construct(a, [o], e); return t.context(s).getCtx = function () { return n }, s } f._A.Promise = e, Object.defineProperty(e, "name", { value: "Promise" }), e.toString = function () { return a.toString() }, Object.setPrototypeOf(e, a), ["all", "race"].forEach((function (r) { const n = a[r]; e[r] = function (e) { let i = !1;[...e || []].forEach((e => { this.resolve(e).then(a("all" === r), a(!1)) })); const o = n.apply(this, arguments); return o; function a(e) { return function () { t.emit("propagate", [null, !i], o, !1, !1), i = i || !e } } } })), ["resolve", "reject"].forEach((function (r) { const n = a[r]; e[r] = function (e) { const r = n.apply(this, arguments); return e !== r && t.emit("propagate", [e, !0], r, !1, !1), r } })), e.prototype = a.prototype; const n = a.prototype.then; a.prototype.then = function () { var e = this, o = r(e); o.promise = e; for (var a = arguments.length, s = new Array(a), c = 0; c < a; c++)s[c] = arguments[c]; s[0] = i(s[0], "cb-", o, null, !1), s[1] = i(s[1], "cb-", o, null, !1); const u = n.apply(this, s); return o.nextPromise = u, t.emit("propagate", [e, !0], u, !1, !1), u }, a.prototype.then[o] = n, t.on("executor-start", (function (e) { e[0] = i(e[0], "resolve-", this, null, !1), e[1] = i(e[1], "resolve-", this, null, !1) })), t.on("executor-err", (function (e, t, r) { e[1](r) })), t.on("cb-end", (function (e, r, n) { t.emit("propagate", [n, !0], this.nextPromise, !1, !1) })), t.on("propagate", (function (e, r, n) { this.getCtx && !r || (this.getCtx = function () { if (e instanceof Promise) var r = t.context(e); return r && r.getCtx ? r.getCtx() : this }) })) }(), t } const M = {}, F = "setTimeout", B = "setInterval", U = "clearTimeout", Z = "-start", V = "-", q = [F, "setImmediate", B, U, "clearImmediate"]; function G(e) { const t = function (e) { return (e || n.ee).get("timer") }(e); if (M[t.debugId]++) return t; M[t.debugId] = 1; var r = c(t); return r.inPlace(f._A, q.slice(0, 2), F + V), r.inPlace(f._A, q.slice(2, 3), B + V), r.inPlace(f._A, q.slice(3), U + V), t.on(B + Z, (function (e, t, n) { e[0] = r(e[0], "fn-", null, n) })), t.on(F + Z, (function (e, t, n) { this.method = n, this.timerDuration = isNaN(e[1]) ? 0 : +e[1], e[0] = r(e[0], "fn-", this, n) })), t } var W = r(50); const X = {}, Y = ["open", "send"]; function K(e) { var t = e || n.ee; const r = function (e) { return (e || n.ee).get("xhr") }(t); if (X[r.debugId]++) return r; X[r.debugId] = 1, b(t); var i = c(r), o = f._A.XMLHttpRequest, a = f._A.MutationObserver, s = f._A.Promise, u = f._A.setInterval, d = "readystatechange", l = ["onload", "onerror", "onabort", "onloadstart", "onloadend", "onprogress", "ontimeout"], h = [], p = f._A.XMLHttpRequest = function (e) { const t = new o(e), n = r.context(t); try { r.emit("new-xhr", [t], n), t.addEventListener(d, (a = n, function () { var e = this; e.readyState > 3 && !a.resolved && (a.resolved = !0, r.emit("xhr-resolved", [], e)), i.inPlace(e, l, "fn-", w) }), (0, R.m$)(!1)) } catch (e) { (0, W.Z)("An error occurred while intercepting XHR", e); try { r.emit("internal-error", [e]) } catch (e) { } } var a; return t }; function g(e, t) { i.inPlace(t, ["onreadystatechange"], "fn-", w) } if (function (e, t) { for (var r in e) t[r] = e[r] }(o, p), p.prototype = o.prototype, i.inPlace(p.prototype, Y, "-xhr-", w), r.on("send-xhr-start", (function (e, t) { g(e, t), function (e) { h.push(e), a && (m ? m.then(A) : u ? u(A) : (v = -v, y.data = v)) }(t) })), r.on("open-xhr-start", g), a) { var m = s && s.resolve(); if (!u && !s) { var v = 1, y = document.createTextNode(v); new a(A).observe(y, { characterData: !0 }) } } else t.on("fn-end", (function (e) { e[0] && e[0].type === d || A() })); function A() { for (var e = 0; e < h.length; e++)g(0, h[e]); h.length && (h = []) } function w(e, t) { return t } return r } }, 7825: (e, t, r) => { "use strict"; r.d(t, { t: () => n }); const n = r(3325).D.ajax }, 6660: (e, t, r) => { "use strict"; r.d(t, { t: () => n }); const n = r(3325).D.jserrors }, 3081: (e, t, r) => { "use strict"; r.d(t, { gF: () => o, mY: () => i, t9: () => n, vz: () => s, xS: () => a }); const n = r(3325).D.metrics, i = "sm", o = "cm", a = "storeSupportabilityMetrics", s = "storeEventMetrics" }, 4649: (e, t, r) => { "use strict"; r.d(t, { t: () => n }); const n = r(3325).D.pageAction }, 7633: (e, t, r) => { "use strict"; r.d(t, { t: () => n }); const n = r(3325).D.pageViewEvent }, 9251: (e, t, r) => { "use strict"; r.d(t, { t: () => n }); const n = r(3325).D.pageViewTiming }, 7144: (e, t, r) => { "use strict"; r.d(t, { t: () => n }); const n = r(3325).D.sessionReplay }, 3614: (e, t, r) => { "use strict"; r.d(t, { BST_RESOURCE: () => i, END: () => s, FEATURE_NAME: () => n, FN_END: () => u, FN_START: () => c, PUSH_STATE: () => d, RESOURCE: () => o, START: () => a }); const n = r(3325).D.sessionTrace, i = "bstResource", o = "resource", a = "-start", s = "-end", c = "fn" + a, u = "fn" + s, d = "pushState" }, 7836: (e, t, r) => { "use strict"; r.d(t, { BODY: () => x, CB_END: () => E, CB_START: () => u, END: () => w, FEATURE_NAME: () => i, FETCH: () => T, FETCH_BODY: () => v, FETCH_DONE: () => m, FETCH_START: () => g, FN_END: () => c, FN_START: () => s, INTERACTION: () => f, INTERACTION_API: () => d, INTERACTION_EVENTS: () => o, JSONP_END: () => b, JSONP_NODE: () => p, JS_TIME: () => _, MAX_TIMER_BUDGET: () => a, REMAINING: () => l, SPA_NODE: () => h, START: () => A, originalSetTimeout: () => y }); var n = r(234); const i = r(3325).D.spa, o = ["click", "submit", "keypress", "keydown", "keyup", "change"], a = 999, s = "fn-start", c = "fn-end", u = "cb-start", d = "api-ixn-", l = "remaining", f = "interaction", h = "spaNode", p = "jsonpNode", g = "fetch-start", m = "fetch-done", v = "fetch-body-", b = "jsonp-end", y = n.Yu.ST, A = "-start", w = "-end", x = "-body", E = "cb" + w, _ = "jsTime", T = "fetch" }, 5938: (e, t, r) => { "use strict"; r.d(t, { W: () => i }); var n = r(8325); class i { constructor(e, t, r) { this.agentIdentifier = e, this.aggregator = t, this.ee = n.ee.get(e), this.featureName = r, this.blocked = !1 } } }, 7530: (e, t, r) => { "use strict"; r.d(t, { j: () => b }); var n = r(3325), i = r(234), o = r(5546), a = r(8325), s = r(7894), c = r(8e3), u = r(3960), d = r(385), l = r(50), f = r(3081), h = r(8632); function p() { const e = (0, h.gG)();["setErrorHandler", "finished", "addToTrace", "addRelease", "addPageAction", "setCurrentRouteName", "setPageViewName", "setCustomAttribute", "interaction", "noticeError", "setUserId", "setApplicationVersion", "start", "recordReplay", "pauseReplay"].forEach((t => { e[t] = function () { for (var r = arguments.length, n = new Array(r), i = 0; i < r; i++)n[i] = arguments[i]; return function (t) { for (var r = arguments.length, n = new Array(r > 1 ? r - 1 : 0), i = 1; i < r; i++)n[i - 1] = arguments[i]; let o = []; return Object.values(e.initializedAgents).forEach((e => { e.exposed && e.api[t] && o.push(e.api[t](...n)) })), o.length > 1 ? o : o[0] }(t, ...n) } })) } var g = r(2825); const m = e => { const t = e.startsWith("http"); e += "/", r.p = t ? e : "https://" + e }; let v = !1; function b(e) { let t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}, b = arguments.length > 2 ? arguments[2] : void 0, y = arguments.length > 3 ? arguments[3] : void 0, { init: A, info: w, loader_config: x, runtime: E = { loaderType: b }, exposed: _ = !0 } = t; const T = (0, h.gG)(); w || (A = T.init, w = T.info, x = T.loader_config), (0, i.Dg)(e.agentIdentifier, A || {}), (0, i.GE)(e.agentIdentifier, x || {}), w.jsAttributes ??= {}, d.v6 && (w.jsAttributes.isWorker = !0), (0, i.CX)(e.agentIdentifier, w); const S = (0, i.P_)(e.agentIdentifier), D = [w.beacon, w.errorBeacon]; v || (S.proxy.assets && (m(S.proxy.assets), D.push(S.proxy.assets)), S.proxy.beacon && D.push(S.proxy.beacon), p(), (0, h.EZ)("activatedFeatures", g.T)), E.denyList = [...S.ajax.deny_list || [], ...S.ajax.block_internal ? D : []], (0, i.sU)(e.agentIdentifier, E), void 0 === e.api && (e.api = function (e, t) { t || (0, c.R)(e, "api"); const h = {}; var p = a.ee.get(e), g = p.get("tracer"), m = "api-", v = m + "ixn-"; function b(t, r, n, o) { const a = (0, i.C5)(e); return null === r ? delete a.jsAttributes[t] : (0, i.CX)(e, { ...a, jsAttributes: { ...a.jsAttributes, [t]: r } }), w(m, n, !0, o || null === r ? "session" : void 0)(t, r) } function y() { } ["setErrorHandler", "finished", "addToTrace", "addRelease"].forEach((e => { h[e] = w(m, e, !0, "api") })), h.addPageAction = w(m, "addPageAction", !0, n.D.pageAction), h.setCurrentRouteName = w(m, "routeName", !0, n.D.spa), h.setPageViewName = function (t, r) { if ("string" == typeof t) return "/" !== t.charAt(0) && (t = "/" + t), (0, i.OP)(e).customTransaction = (r || "http://custom.transaction") + t, w(m, "setPageViewName", !0)() }, h.setCustomAttribute = function (e, t) { let r = arguments.length > 2 && void 0 !== arguments[2] && arguments[2]; if ("string" == typeof e) { if (["string", "number", "boolean"].includes(typeof t) || null === t) return b(e, t, "setCustomAttribute", r); (0, l.Z)("Failed to execute setCustomAttribute.\nNon-null value must be a string, number or boolean type, but a type of <".concat(typeof t, "> was provided.")) } else (0, l.Z)("Failed to execute setCustomAttribute.\nName must be a string type, but a type of <".concat(typeof e, "> was provided.")) }, h.setUserId = function (e) { if ("string" == typeof e || null === e) return b("enduser.id", e, "setUserId", !0); (0, l.Z)("Failed to execute setUserId.\nNon-null value must be a string type, but a type of <".concat(typeof e, "> was provided.")) }, h.setApplicationVersion = function (e) { if ("string" == typeof e || null === e) return b("application.version", e, "setApplicationVersion", !1); (0, l.Z)("Failed to execute setApplicationVersion. Expected <String | null>, but got <".concat(typeof e, ">.")) }, h.start = e => { try { const t = e ? "defined" : "undefined"; (0, o.p)(f.xS, ["API/start/".concat(t, "/called")], void 0, n.D.metrics, p); const r = Object.values(n.D); if (void 0 === e) e = r; else { if ((e = Array.isArray(e) && e.length ? e : [e]).some((e => !r.includes(e)))) return (0, l.Z)("Invalid feature name supplied. Acceptable feature names are: ".concat(r)); e.includes(n.D.pageViewEvent) || e.push(n.D.pageViewEvent) } e.forEach((e => { p.emit("".concat(e, "-opt-in")) })) } catch (e) { (0, l.Z)("An unexpected issue occurred", e) } }, h.recordReplay = function () { (0, o.p)(f.xS, ["API/recordReplay/called"], void 0, n.D.metrics, p), (0, o.p)("recordReplay", [], void 0, n.D.sessionReplay, p) }, h.pauseReplay = function () { (0, o.p)(f.xS, ["API/pauseReplay/called"], void 0, n.D.metrics, p), (0, o.p)("pauseReplay", [], void 0, n.D.sessionReplay, p) }, h.interaction = function () { return (new y).get() }; var A = y.prototype = { createTracer: function (e, t) { var r = {}, i = this, a = "function" == typeof t; return (0, o.p)(f.xS, ["API/createTracer/called"], void 0, n.D.metrics, p), (0, o.p)(v + "tracer", [(0, s.z)(), e, r], i, n.D.spa, p), function () { if (g.emit((a ? "" : "no-") + "fn-start", [(0, s.z)(), i, a], r), a) try { return t.apply(this, arguments) } catch (e) { throw g.emit("fn-err", [arguments, this, e], r), e } finally { g.emit("fn-end", [(0, s.z)()], r) } } } }; function w(e, t, r, i) { return function () { return (0, o.p)(f.xS, ["API/" + t + "/called"], void 0, n.D.metrics, p), i && (0, o.p)(e + t, [(0, s.z)(), ...arguments], r ? null : this, i, p), r ? void 0 : this } } function x() { r.e(111).then(r.bind(r, 7438)).then((t => { let { setAPI: r } = t; r(e), (0, c.L)(e, "api") })).catch((() => (0, l.Z)("Downloading runtime APIs failed..."))) } return ["actionText", "setName", "setAttribute", "save", "ignore", "onEnd", "getContext", "end", "get"].forEach((e => { A[e] = w(v, e, void 0, n.D.spa) })), h.noticeError = function (e, t) { "string" == typeof e && (e = new Error(e)), (0, o.p)(f.xS, ["API/noticeError/called"], void 0, n.D.metrics, p), (0, o.p)("err", [e, (0, s.z)(), !1, t], void 0, n.D.jserrors, p) }, d.il ? (0, u.b2)((() => x()), !0) : x(), h }(e.agentIdentifier, y)), void 0 === e.exposed && (e.exposed = _), v = !0 } }, 1926: (e, t, r) => { r.nc = (() => { try { return document?.currentScript?.nonce } catch (e) { } return "" })() }, 3325: (e, t, r) => { "use strict"; r.d(t, { D: () => n, p: () => i }); const n = { ajax: "ajax", jserrors: "jserrors", metrics: "metrics", pageAction: "page_action", pageViewEvent: "page_view_event", pageViewTiming: "page_view_timing", sessionReplay: "session_replay", sessionTrace: "session_trace", spa: "spa" }, i = { [n.pageViewEvent]: 1, [n.pageViewTiming]: 2, [n.metrics]: 3, [n.jserrors]: 4, [n.ajax]: 5, [n.sessionTrace]: 6, [n.pageAction]: 7, [n.spa]: 8, [n.sessionReplay]: 9 } } }, n = {}; function i(e) { var t = n[e]; if (void 0 !== t) return t.exports; var o = n[e] = { exports: {} }; return r[e](o, o.exports, i), o.exports } i.m = r, i.d = (e, t) => { for (var r in t) i.o(t, r) && !i.o(e, r) && Object.defineProperty(e, r, { enumerable: !0, get: t[r] }) }, i.f = {}, i.e = e => Promise.all(Object.keys(i.f).reduce(((t, r) => (i.f[r](e, t), t)), [])), i.u = e => ({ 111: "nr-spa", 164: "nr-spa-compressor", 433: "nr-spa-recorder" }[e] + "-1.248.0.min.js"), i.o = (e, t) => Object.prototype.hasOwnProperty.call(e, t), e = {}, t = "NRBA-1.248.0.PROD:", i.l = (r, n, o, a) => { if (e[r]) e[r].push(n); else { var s, c; if (void 0 !== o) for (var u = document.getElementsByTagName("script"), d = 0; d < u.length; d++) { var l = u[d]; if (l.getAttribute("src") == r || l.getAttribute("data-webpack") == t + o) { s = l; break } } s || (c = !0, (s = document.createElement("script")).charset = "utf-8", s.timeout = 120, i.nc && s.setAttribute("nonce", i.nc), s.setAttribute("data-webpack", t + o), s.src = r, 0 !== s.src.indexOf(window.location.origin + "/") && (s.crossOrigin = "anonymous"), s.integrity = i.sriHashes[a], s.crossOrigin = "anonymous"), e[r] = [n]; var f = (t, n) => { s.onerror = s.onload = null, clearTimeout(h); var i = e[r]; if (delete e[r], s.parentNode && s.parentNode.removeChild(s), i && i.forEach((e => e(n))), t) return t(n) }, h = setTimeout(f.bind(null, void 0, { type: "timeout", target: s }), 12e4); s.onerror = f.bind(null, s.onerror), s.onload = f.bind(null, s.onload), c && document.head.appendChild(s) } }, i.r = e => { "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(e, "__esModule", { value: !0 }) }, i.p = "https://js-agent.newrelic.com/", i.sriHashes = { 111: "sha512-ZwkW/wLO65ZnBcPIJO2VJVqTtRyXCRZiimLidZm1CYZfRiDwnchDLGFiEKDNkhfy/b1cgD3SElt5YjVudzleDQ==" }, (() => { var e = { 801: 0, 92: 0 }; i.f.j = (t, r) => { var n = i.o(e, t) ? e[t] : void 0; if (0 !== n) if (n) r.push(n[2]); else { var o = new Promise(((r, i) => n = e[t] = [r, i])); r.push(n[2] = o); var a = i.p + i.u(t), s = new Error; i.l(a, (r => { if (i.o(e, t) && (0 !== (n = e[t]) && (e[t] = void 0), n)) { var o = r && ("load" === r.type ? "missing" : r.type), a = r && r.target && r.target.src; s.message = "Loading chunk " + t + " failed.\n(" + o + ": " + a + ")", s.name = "ChunkLoadError", s.type = o, s.request = a, n[1](s) } }), "chunk-" + t, t) } }; var t = (t, r) => { var n, o, [a, s, c] = r, u = 0; if (a.some((t => 0 !== e[t]))) { for (n in s) i.o(s, n) && (i.m[n] = s[n]); if (c) c(i) } for (t && t(r); u < a.length; u++)o = a[u], i.o(e, o) && e[o] && e[o][0](), e[o] = 0 }, r = self["webpackChunk:NRBA-1.248.0.PROD"] = self["webpackChunk:NRBA-1.248.0.PROD"] || []; r.forEach(t.bind(null, 0)), r.push = t.bind(null, r.push.bind(r)) })(), (() => { "use strict"; i(1926); var e = i(50); class t { addPageAction(t, r) { (0, e.Z)("Call to agent api addPageAction failed. The page action feature is not currently initialized.") } setPageViewName(t, r) { (0, e.Z)("Call to agent api setPageViewName failed. The page view feature is not currently initialized.") } setCustomAttribute(t, r, n) { (0, e.Z)("Call to agent api setCustomAttribute failed. The js errors feature is not currently initialized.") } noticeError(t, r) { (0, e.Z)("Call to agent api noticeError failed. The js errors feature is not currently initialized.") } setUserId(t) { (0, e.Z)("Call to agent api setUserId failed. The js errors feature is not currently initialized.") } setApplicationVersion(t) { (0, e.Z)("Call to agent api setApplicationVersion failed. The agent is not currently initialized.") } setErrorHandler(t) { (0, e.Z)("Call to agent api setErrorHandler failed. The js errors feature is not currently initialized.") } finished(t) { (0, e.Z)("Call to agent api finished failed. The page action feature is not currently initialized.") } addRelease(t, r) { (0, e.Z)("Call to agent api addRelease failed. The js errors feature is not currently initialized.") } start(t) { (0, e.Z)("Call to agent api addRelease failed. The agent is not currently initialized.") } recordReplay() { (0, e.Z)("Call to agent api recordReplay failed. The agent is not currently initialized.") } pauseReplay() { (0, e.Z)("Call to agent api pauseReplay failed. The agent is not currently initialized.") } } var r = i(3325), n = i(234); const o = Object.values(r.D); function a(e) { const t = {}; return o.forEach((r => { t[r] = function (e, t) { return !1 !== (0, n.Mt)(t, "".concat(e, ".enabled")) }(r, e) })), t } var s = i(7530); var c = i(8e3), u = i(5938), d = i(3960), l = i(385); class f extends u.W { constructor(e, t, r) { let i = !(arguments.length > 3 && void 0 !== arguments[3]) || arguments[3]; super(e, t, r), this.auto = i, this.abortHandler = void 0, this.featAggregate = void 0, this.onAggregateImported = void 0, !1 === (0, n.Mt)(this.agentIdentifier, "".concat(this.featureName, ".autoStart")) && (this.auto = !1), this.auto && (0, c.R)(e, r) } importAggregator() { let t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}; if (this.featAggregate) return; if (!this.auto) return void this.ee.on("".concat(this.featureName, "-opt-in"), (() => { (0, c.R)(this.agentIdentifier, this.featureName), this.auto = !0, this.importAggregator() })); const r = l.il && !0 === (0, n.Mt)(this.agentIdentifier, "privacy.cookies_enabled"); let o; this.onAggregateImported = new Promise((e => { o = e })); const a = async () => { let n; try { if (r) { const { setupAgentSession: e } = await i.e(111).then(i.bind(i, 3228)); n = e(this.agentIdentifier) } } catch (t) { (0, e.Z)("A problem occurred when starting up session manager. This page will not start or extend any session.", t) } try { if (!this.shouldImportAgg(this.featureName, n)) return (0, c.L)(this.agentIdentifier, this.featureName), void o(!1); const { lazyFeatureLoader: e } = await i.e(111).then(i.bind(i, 8582)), { Aggregate: r } = await e(this.featureName, "aggregate"); this.featAggregate = new r(this.agentIdentifier, this.aggregator, t), o(!0) } catch (t) { (0, e.Z)("Downloading and initializing ".concat(this.featureName, " failed..."), t), this.abortHandler?.(), (0, c.L)(this.agentIdentifier, this.featureName), o(!1) } }; l.il ? (0, d.b2)((() => a()), !0) : a() } shouldImportAgg(e, t) { return e !== r.D.sessionReplay || !!n.Yu.MO && (!1 !== (0, n.Mt)(this.agentIdentifier, "session_trace.enabled") && (!!t?.isNew || !!t?.state.sessionReplayMode)) } } var h = i(7633); class p extends f { static featureName = h.t; constructor(e, t) { let r = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2]; super(e, t, h.t, r), this.importAggregator() } } var g = i(1117), m = i(1284); class v extends g.w { constructor(e) { super(e), this.aggregatedData = {} } store(e, t, r, n, i) { var o = this.getBucket(e, t, r, i); return o.metrics = function (e, t) { t || (t = { count: 0 }); return t.count += 1, (0, m.D)(e, (function (e, r) { t[e] = b(r, t[e]) })), t }(n, o.metrics), o } merge(e, t, r, n, i) { var o = this.getBucket(e, t, n, i); if (o.metrics) { var a = o.metrics; a.count += r.count, (0, m.D)(r, (function (e, t) { if ("count" !== e) { var n = a[e], i = r[e]; i && !i.c ? a[e] = b(i.t, n) : a[e] = function (e, t) { if (!t) return e; t.c || (t = y(t.t)); return t.min = Math.min(e.min, t.min), t.max = Math.max(e.max, t.max), t.t += e.t, t.sos += e.sos, t.c += e.c, t }(i, a[e]) } })) } else o.metrics = r } storeMetric(e, t, r, n) { var i = this.getBucket(e, t, r); return i.stats = b(n, i.stats), i } getBucket(e, t, r, n) { this.aggregatedData[e] || (this.aggregatedData[e] = {}); var i = this.aggregatedData[e][t]; return i || (i = this.aggregatedData[e][t] = { params: r || {} }, n && (i.custom = n)), i } get(e, t) { return t ? this.aggregatedData[e] && this.aggregatedData[e][t] : this.aggregatedData[e] } take(e) { for (var t = {}, r = "", n = !1, i = 0; i < e.length; i++)t[r = e[i]] = A(this.aggregatedData[r]), t[r].length && (n = !0), delete this.aggregatedData[r]; return n ? t : null } } function b(e, t) { return null == e ? function (e) { e ? e.c++ : e = { c: 1 }; return e }(t) : t ? (t.c || (t = y(t.t)), t.c += 1, t.t += e, t.sos += e * e, e > t.max && (t.max = e), e < t.min && (t.min = e), t) : { t: e } } function y(e) { return { t: e, min: e, max: e, sos: e * e, c: 1 } } function A(e) { return "object" != typeof e ? [] : (0, m.D)(e, w) } function w(e, t) { return t } var x = i(8632), E = i(4402), _ = i(4351); var T = i(5546), S = i(7956), D = i(3239), j = i(7894), N = i(9251); class C extends f { static featureName = N.t; constructor(e, t) { let r = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2]; super(e, t, N.t, r), l.il && ((0, S.N)((() => (0, T.p)("docHidden", [(0, j.z)()], void 0, N.t, this.ee)), !0), (0, D.bP)("pagehide", (() => (0, T.p)("winPagehide", [(0, j.z)()], void 0, N.t, this.ee))), this.importAggregator()) } } var R = i(3081); class O extends f { static featureName = R.t9; constructor(e, t) { let r = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2]; super(e, t, R.t9, r), this.importAggregator() } } var P = i(6660); class I { constructor(e, t, r, n) { this.name = "UncaughtError", this.message = e, this.sourceURL = t, this.line = r, this.column = n } } class k extends f { static featureName = P.t; #e = new Set; constructor(e, t) { let n = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2]; super(e, t, P.t, n); try { this.removeOnAbort = new AbortController } catch (e) { } this.ee.on("fn-err", ((e, t, n) => { this.abortHandler && !this.#e.has(n) && (this.#e.add(n), (0, T.p)("err", [this.#t(n), (0, j.z)()], void 0, r.D.jserrors, this.ee)) })), this.ee.on("internal-error", (e => { this.abortHandler && (0, T.p)("ierr", [this.#t(e), (0, j.z)(), !0], void 0, r.D.jserrors, this.ee) })), l._A.addEventListener("unhandledrejection", (e => { this.abortHandler && (0, T.p)("err", [this.#r(e), (0, j.z)(), !1, { unhandledPromiseRejection: 1 }], void 0, r.D.jserrors, this.ee) }), (0, D.m$)(!1, this.removeOnAbort?.signal)), l._A.addEventListener("error", (e => { this.abortHandler && (this.#e.has(e.error) ? this.#e.delete(e.error) : (0, T.p)("err", [this.#n(e), (0, j.z)()], void 0, r.D.jserrors, this.ee)) }), (0, D.m$)(!1, this.removeOnAbort?.signal)), this.abortHandler = this.#i, this.importAggregator() } #i() { this.removeOnAbort?.abort(), this.#e.clear(), this.abortHandler = void 0 } #t(e) { return e instanceof Error ? e : void 0 !== e?.message ? new I(e.message, e.filename || e.sourceURL, e.lineno || e.line, e.colno || e.col) : new I("string" == typeof e ? e : (0, _.P)(e)) } #r(e) { let t = "Unhandled Promise Rejection: "; if (e?.reason instanceof Error) try { return e.reason.message = t + e.reason.message, e.reason } catch (t) { return e.reason } if (void 0 === e.reason) return new I(t); const r = this.#t(e.reason); return r.message = t + r.message, r } #n(e) { return e.error instanceof Error ? e.error : new I(e.message, e.filename, e.lineno, e.colno) } } var H = i(2210); let z = 1; const L = "nr@id"; function M(e) { const t = typeof e; return !e || "object" !== t && "function" !== t ? -1 : e === l._A ? 0 : (0, H.X)(e, L, (function () { return z++ })) } function F(e) { if ("string" == typeof e && e.length) return e.length; if ("object" == typeof e) { if ("undefined" != typeof ArrayBuffer && e instanceof ArrayBuffer && e.byteLength) return e.byteLength; if ("undefined" != typeof Blob && e instanceof Blob && e.size) return e.size; if (!("undefined" != typeof FormData && e instanceof FormData)) try { return (0, _.P)(e).length } catch (e) { return } } } var B = i(1214), U = i(7243); class Z { constructor(e) { this.agentIdentifier = e } generateTracePayload(e) { if (!this.shouldGenerateTrace(e)) return null; var t = (0, n.DL)(this.agentIdentifier); if (!t) return null; var r = (t.accountID || "").toString() || null, i = (t.agentID || "").toString() || null, o = (t.trustKey || "").toString() || null; if (!r || !i) return null; var a = (0, E.M)(), s = (0, E.Ht)(), c = Date.now(), u = { spanId: a, traceId: s, timestamp: c }; return (e.sameOrigin || this.isAllowedOrigin(e) && this.useTraceContextHeadersForCors()) && (u.traceContextParentHeader = this.generateTraceContextParentHeader(a, s), u.traceContextStateHeader = this.generateTraceContextStateHeader(a, c, r, i, o)), (e.sameOrigin && !this.excludeNewrelicHeader() || !e.sameOrigin && this.isAllowedOrigin(e) && this.useNewrelicHeaderForCors()) && (u.newrelicHeader = this.generateTraceHeader(a, s, c, r, i, o)), u } generateTraceContextParentHeader(e, t) { return "00-" + t + "-" + e + "-01" } generateTraceContextStateHeader(e, t, r, n, i) { return i + "@nr=0-1-" + r + "-" + n + "-" + e + "----" + t } generateTraceHeader(e, t, r, n, i, o) { if (!("function" == typeof l._A?.btoa)) return null; var a = { v: [0, 1], d: { ty: "Browser", ac: n, ap: i, id: e, tr: t, ti: r } }; return o && n !== o && (a.d.tk = o), btoa((0, _.P)(a)) } shouldGenerateTrace(e) { return this.isDtEnabled() && this.isAllowedOrigin(e) } isAllowedOrigin(e) { var t = !1, r = {}; if ((0, n.Mt)(this.agentIdentifier, "distributed_tracing") && (r = (0, n.P_)(this.agentIdentifier).distributed_tracing), e.sameOrigin) t = !0; else if (r.allowed_origins instanceof Array) for (var i = 0; i < r.allowed_origins.length; i++) { var o = (0, U.e)(r.allowed_origins[i]); if (e.hostname === o.hostname && e.protocol === o.protocol && e.port === o.port) { t = !0; break } } return t } isDtEnabled() { var e = (0, n.Mt)(this.agentIdentifier, "distributed_tracing"); return !!e && !!e.enabled } excludeNewrelicHeader() { var e = (0, n.Mt)(this.agentIdentifier, "distributed_tracing"); return !!e && !!e.exclude_newrelic_header } useNewrelicHeaderForCors() { var e = (0, n.Mt)(this.agentIdentifier, "distributed_tracing"); return !!e && !1 !== e.cors_use_newrelic_header } useTraceContextHeadersForCors() { var e = (0, n.Mt)(this.agentIdentifier, "distributed_tracing"); return !!e && !!e.cors_use_tracecontext_headers } } var V = i(7825), q = ["load", "error", "abort", "timeout"], G = q.length, W = n.Yu.REQ, X = n.Yu.XHR; class Y extends f { static featureName = V.t; constructor(e, t) { let i = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2]; if (super(e, t, V.t, i), (0, n.OP)(e).xhrWrappable) { this.dt = new Z(e), this.handler = (e, t, r, n) => (0, T.p)(e, t, r, n, this.ee); try { const e = { xmlhttprequest: "xhr", fetch: "fetch", beacon: "beacon" }; l._A?.performance?.getEntriesByType("resource").forEach((t => { if (t.initiatorType in e && 0 !== t.responseStatus) { const n = { status: t.responseStatus }, i = { rxSize: t.transferSize, duration: Math.floor(t.duration), cbTime: 0 }; K(n, t.name), this.handler("xhr", [n, i, t.startTime, t.responseEnd, e[t.initiatorType]], void 0, r.D.ajax) } })) } catch (e) { } (0, B.u5)(this.ee), (0, B.Kf)(this.ee), function (e, t, i, o) { function a(e) { var t = this; t.totalCbs = 0, t.called = 0, t.cbTime = 0, t.end = x, t.ended = !1, t.xhrGuids = {}, t.lastSize = null, t.loadCaptureCalled = !1, t.params = this.params || {}, t.metrics = this.metrics || {}, e.addEventListener("load", (function (r) { E(t, e) }), (0, D.m$)(!1)), l.IF || e.addEventListener("progress", (function (e) { t.lastSize = e.loaded }), (0, D.m$)(!1)) } function s(e) { this.params = { method: e[0] }, K(this, e[1]), this.metrics = {} } function c(t, r) { var i = (0, n.DL)(e); i.xpid && this.sameOrigin && r.setRequestHeader("X-NewRelic-ID", i.xpid); var a = o.generateTracePayload(this.parsedOrigin); if (a) { var s = !1; a.newrelicHeader && (r.setRequestHeader("newrelic", a.newrelicHeader), s = !0), a.traceContextParentHeader && (r.setRequestHeader("traceparent", a.traceContextParentHeader), a.traceContextStateHeader && r.setRequestHeader("tracestate", a.traceContextStateHeader), s = !0), s && (this.dt = a) } } function u(e, r) { var n = this.metrics, i = e[0], o = this; if (n && i) { var a = F(i); a && (n.txSize = a) } this.startTime = (0, j.z)(), this.body = i, this.listener = function (e) { try { "abort" !== e.type || o.loadCaptureCalled || (o.params.aborted = !0), ("load" !== e.type || o.called === o.totalCbs && (o.onloadCalled || "function" != typeof r.onload) && "function" == typeof o.end) && o.end(r) } catch (e) { try { t.emit("internal-error", [e]) } catch (e) { } } }; for (var s = 0; s < G; s++)r.addEventListener(q[s], this.listener, (0, D.m$)(!1)) } function d(e, t, r) { this.cbTime += e, t ? this.onloadCalled = !0 : this.called += 1, this.called !== this.totalCbs || !this.onloadCalled && "function" == typeof r.onload || "function" != typeof this.end || this.end(r) } function f(e, t) { var r = "" + M(e) + !!t; this.xhrGuids && !this.xhrGuids[r] && (this.xhrGuids[r] = !0, this.totalCbs += 1) } function h(e, t) { var r = "" + M(e) + !!t; this.xhrGuids && this.xhrGuids[r] && (delete this.xhrGuids[r], this.totalCbs -= 1) } function p() { this.endTime = (0, j.z)() } function g(e, r) { r instanceof X && "load" === e[0] && t.emit("xhr-load-added", [e[1], e[2]], r) } function m(e, r) { r instanceof X && "load" === e[0] && t.emit("xhr-load-removed", [e[1], e[2]], r) } function v(e, t, r) { t instanceof X && ("onload" === r && (this.onload = !0), ("load" === (e[0] && e[0].type) || this.onload) && (this.xhrCbStart = (0, j.z)())) } function b(e, r) { this.xhrCbStart && t.emit("xhr-cb-time", [(0, j.z)() - this.xhrCbStart, this.onload, r], r) } function y(e) { var t, r = e[1] || {}; if ("string" == typeof e[0] ? 0 === (t = e[0]).length && l.il && (t = "" + l._A.location.href) : e[0] && e[0].url ? t = e[0].url : l._A?.URL && e[0] && e[0] instanceof URL ? t = e[0].href : "function" == typeof e[0].toString && (t = e[0].toString()), "string" == typeof t && 0 !== t.length) { t && (this.parsedOrigin = (0, U.e)(t), this.sameOrigin = this.parsedOrigin.sameOrigin); var n = o.generateTracePayload(this.parsedOrigin); if (n && (n.newrelicHeader || n.traceContextParentHeader)) if (e[0] && e[0].headers) s(e[0].headers, n) && (this.dt = n); else { var i = {}; for (var a in r) i[a] = r[a]; i.headers = new Headers(r.headers || {}), s(i.headers, n) && (this.dt = n), e.length > 1 ? e[1] = i : e.push(i) } } function s(e, t) { var r = !1; return t.newrelicHeader && (e.set("newrelic", t.newrelicHeader), r = !0), t.traceContextParentHeader && (e.set("traceparent", t.traceContextParentHeader), t.traceContextStateHeader && e.set("tracestate", t.traceContextStateHeader), r = !0), r } } function A(e, t) { this.params = {}, this.metrics = {}, this.startTime = (0, j.z)(), this.dt = t, e.length >= 1 && (this.target = e[0]), e.length >= 2 && (this.opts = e[1]); var r, n = this.opts || {}, i = this.target; "string" == typeof i ? r = i : "object" == typeof i && i instanceof W ? r = i.url : l._A?.URL && "object" == typeof i && i instanceof URL && (r = i.href), K(this, r); var o = ("" + (i && i instanceof W && i.method || n.method || "GET")).toUpperCase(); this.params.method = o, this.body = n.body, this.txSize = F(n.body) || 0 } function w(e, t) { var n; this.endTime = (0, j.z)(), this.params || (this.params = {}), this.params.status = t ? t.status : 0, "string" == typeof this.rxSize && this.rxSize.length > 0 && (n = +this.rxSize); var o = { txSize: this.txSize, rxSize: n, duration: (0, j.z)() - this.startTime }; i("xhr", [this.params, o, this.startTime, this.endTime, "fetch"], this, r.D.ajax) } function x(e) { var t = this.params, n = this.metrics; if (!this.ended) { this.ended = !0; for (var o = 0; o < G; o++)e.removeEventListener(q[o], this.listener, !1); t.aborted || (n.duration = (0, j.z)() - this.startTime, this.loadCaptureCalled || 4 !== e.readyState ? null == t.status && (t.status = 0) : E(this, e), n.cbTime = this.cbTime, i("xhr", [t, n, this.startTime, this.endTime, "xhr"], this, r.D.ajax)) } } function E(e, t) { e.params.status = t.status; var r = function (e, t) { var r = e.responseType; return "json" === r && null !== t ? t : "arraybuffer" === r || "blob" === r || "json" === r ? F(e.response) : "text" === r || "" === r || void 0 === r ? F(e.responseText) : void 0 }(t, e.lastSize); if (r && (e.metrics.rxSize = r), e.sameOrigin) { var n = t.getResponseHeader("X-NewRelic-App-Data"); n && (e.params.cat = n.split(", ").pop()) } e.loadCaptureCalled = !0 } t.on("new-xhr", a), t.on("open-xhr-start", s), t.on("open-xhr-end", c), t.on("send-xhr-start", u), t.on("xhr-cb-time", d), t.on("xhr-load-added", f), t.on("xhr-load-removed", h), t.on("xhr-resolved", p), t.on("addEventListener-end", g), t.on("removeEventListener-end", m), t.on("fn-end", b), t.on("fetch-before-start", y), t.on("fetch-start", A), t.on("fn-start", v), t.on("fetch-done", w) }(e, this.ee, this.handler, this.dt), this.importAggregator() } } } function K(e, t) { var r = (0, U.e)(t), n = e.params || e; n.hostname = r.hostname, n.port = r.port, n.protocol = r.protocol, n.host = r.hostname + ":" + r.port, n.pathname = r.pathname, e.parsedOrigin = r, e.sameOrigin = r.sameOrigin } var Q = i(3614); const { BST_RESOURCE: J, RESOURCE: ee, START: te, END: re, FEATURE_NAME: ne, FN_END: ie, FN_START: oe, PUSH_STATE: ae } = Q; var se = i(7144); class ce extends f { static featureName = se.t; constructor(e, t) { let r = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2]; super(e, t, se.t, r), this.importAggregator() } } var ue = i(7836); const { FEATURE_NAME: de, START: le, END: fe, BODY: he, CB_END: pe, JS_TIME: ge, FETCH: me, FN_START: ve, CB_START: be, FN_END: ye } = ue; var Ae = i(4649); class we extends f { static featureName = Ae.t; constructor(e, t) { let r = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2]; super(e, t, Ae.t, r), this.importAggregator() } } new class extends t { constructor(t) { let r = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : (0, E.ky)(16); super(), l._A ? (this.agentIdentifier = r, this.sharedAggregator = new v({ agentIdentifier: this.agentIdentifier }), this.features = {}, (0, x.h5)(r, this), this.desiredFeatures = new Set(t.features || []), this.desiredFeatures.add(p), (0, s.j)(this, t, t.loaderType || "agent"), this.run()) : (0, e.Z)("Failed to initial the agent. Could not determine the runtime environment.") } get config() { return { info: (0, n.C5)(this.agentIdentifier), init: (0, n.P_)(this.agentIdentifier), loader_config: (0, n.DL)(this.agentIdentifier), runtime: (0, n.OP)(this.agentIdentifier) } } run() { try { const t = a(this.agentIdentifier), n = [...this.desiredFeatures]; n.sort(((e, t) => r.p[e.featureName] - r.p[t.featureName])), n.forEach((n => { if (t[n.featureName] || n.featureName === r.D.pageViewEvent) { const i = function (e) { switch (e) { case r.D.ajax: return [r.D.jserrors]; case r.D.sessionTrace: return [r.D.ajax, r.D.pageViewEvent]; case r.D.sessionReplay: return [r.D.sessionTrace]; case r.D.pageViewTiming: return [r.D.pageViewEvent]; default: return [] } }(n.featureName); i.every((e => t[e])) || (0, e.Z)("".concat(n.featureName, " is enabled but one or more dependent features has been disabled (").concat((0, _.P)(i), "). This may cause unintended consequences or missing data...")), this.features[n.featureName] = new n(this.agentIdentifier, this.sharedAggregator) } })) } catch (t) { (0, e.Z)("Failed to initialize all enabled instrument classes (agent aborted) -", t); for (const e in this.features) this.features[e].abortHandler?.(); const r = (0, x.fP)(); return delete r.initializedAgents[this.agentIdentifier]?.api, delete r.initializedAgents[this.agentIdentifier]?.features, delete this.sharedAggregator, r.ee?.abort(), delete r.ee?.get(this.agentIdentifier), !1 } } addToTrace(t) { (0, e.Z)("Call to agent api addToTrace failed. The session trace feature is not currently initialized.") } setCurrentRouteName(t) { (0, e.Z)("Call to agent api setCurrentRouteName failed. The spa feature is not currently initialized.") } interaction() { (0, e.Z)("Call to agent api interaction failed. The spa feature is not currently initialized.") } }({ features: [Y, p, C, class extends f { static featureName = ne; constructor(e, t) { if (super(e, t, ne, !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2]), !l.il) return; const n = this.ee; let i; (0, B.QU)(n), this.eventsEE = (0, B.em)(n), this.eventsEE.on(oe, (function (e, t) { this.bstStart = (0, j.z)() })), this.eventsEE.on(ie, (function (e, t) { (0, T.p)("bst", [e[0], t, this.bstStart, (0, j.z)()], void 0, r.D.sessionTrace, n) })), n.on(ae + te, (function (e) { this.time = (0, j.z)(), this.startPath = location.pathname + location.hash })), n.on(ae + re, (function (e) { (0, T.p)("bstHist", [location.pathname + location.hash, this.startPath, this.time], void 0, r.D.sessionTrace, n) })); try { i = new PerformanceObserver((e => { const t = e.getEntries(); (0, T.p)(J, [t], void 0, r.D.sessionTrace, n) })), i.observe({ type: ee, buffered: !0 }) } catch (e) { } this.importAggregator({ resourceObserver: i }) } }, ce, O, we, k, class extends f { static featureName = de; constructor(e, t) { if (super(e, t, de, !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2]), !l.il) return; if (!(0, n.OP)(e).xhrWrappable) return; try { this.removeOnAbort = new AbortController } catch (e) { } let r, i = 0; const o = this.ee.get("tracer"), a = (0, B._L)(this.ee), s = (0, B.Lg)(this.ee), c = (0, B.BV)(this.ee), u = (0, B.Kf)(this.ee), d = this.ee.get("events"), f = (0, B.u5)(this.ee), h = (0, B.QU)(this.ee), p = (0, B.Gm)(this.ee); function g(e, t) { h.emit("newURL", ["" + window.location, t]) } function m() { i++, r = window.location.hash, this[ve] = (0, j.z)() } function v() { i--, window.location.hash !== r && g(0, !0); var e = (0, j.z)(); this[ge] = ~~this[ge] + e - this[ve], this[ye] = e } function b(e, t) { e.on(t, (function () { this[t] = (0, j.z)() })) } this.ee.on(ve, m), s.on(be, m), a.on(be, m), this.ee.on(ye, v), s.on(pe, v), a.on(pe, v), this.ee.buffer([ve, ye, "xhr-resolved"], this.featureName), d.buffer([ve], this.featureName), c.buffer(["setTimeout" + fe, "clearTimeout" + le, ve], this.featureName), u.buffer([ve, "new-xhr", "send-xhr" + le], this.featureName), f.buffer([me + le, me + "-done", me + he + le, me + he + fe], this.featureName), h.buffer(["newURL"], this.featureName), p.buffer([ve], this.featureName), s.buffer(["propagate", be, pe, "executor-err", "resolve" + le], this.featureName), o.buffer([ve, "no-" + ve], this.featureName), a.buffer(["new-jsonp", "cb-start", "jsonp-error", "jsonp-end"], this.featureName), b(f, me + le), b(f, me + "-done"), b(a, "new-jsonp"), b(a, "jsonp-end"), b(a, "cb-start"), h.on("pushState-end", g), h.on("replaceState-end", g), window.addEventListener("hashchange", g, (0, D.m$)(!0, this.removeOnAbort?.signal)), window.addEventListener("load", g, (0, D.m$)(!0, this.removeOnAbort?.signal)), window.addEventListener("popstate", (function () { g(0, i > 1) }), (0, D.m$)(!0, this.removeOnAbort?.signal)), this.abortHandler = this.#i, this.importAggregator() } #i() { this.removeOnAbort?.abort(), this.abortHandler = void 0 } }], loaderType: "spa" }) })() })();</script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <title>Ticket Bravo</title>

    <link rel="shortcut icon" href="images/logo.svg">

    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-180x180.png">

    <meta name="kdt:page" content="home">
    <meta property="og:title" content="Ticket Bravo">
    <meta property="og:description" content="CULTURA E ENTRETENIMENTO ATRAVÉS DE UM CLICK">
    <meta property="og:image" content="images/KVFacebook.png">
    <meta property="og:url" content="https://www.Ticket Bravo.com.br/">
    <meta property="og:type" content="website">
    <script src="js/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <script src="js/vendors.bundle.js"></script>

    <link href="css/vendors.bundle.css" rel="stylesheet" type="text/css">
    <link href="css/style.bundle.css" rel="stylesheet" type="text/css">
    <link href="css/override.css" rel="stylesheet" type="text/css">

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P69G2JB');
    </script>

    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-W7NK6Z');
    </script>

    <!-- End Google Tag Manager -->

    <script data-ad-client="ca-pub-3376281802197214" async="" src="js/adsbygoogle.js"></script>
    <script id="kdtjs" type="text/javascript" async="" src="js/k.js"></script>
</head>

<body class="m-page--wide m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default "
    style="zoom: 100%;">

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="//www.googletagmanager.com/ns.html?id=GTM-P69G2JB" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>

    <noscript>
        <iframe src="//www.googletagmanager.com/ns.html?id=GTM-W7NK6Z" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>

    <!-- End Google Tag Manager (noscript) -->


    <div class="m-grid m-grid--hor m-grid--root m-page">

        <header id="m_header" class="m-grid__item  m-header" m-minimize="minimize" m-minimize-offset="200"
            m-minimize-mobile-offset="200">

            <div class="m-header__acessibility">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 m--hidden-mobile">
                            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline m--hidden-tablet-and-mobile">
                                <li class="m-nav__item">
                                    <a href="#header" title="Ir para o menu" class="m-nav__link" accesskey="1">
                                        <span class="m-nav__link-text">Menu [1]</span>
                                    </a>
                                </li>
                                <li class="m-nav__item">
                                    <a href="#contents" title="Ir para o conteúdo" class="m-nav__link" accesskey="2">
                                        <span class="m-nav__link-text">Conteúdo [2]</span>
                                    </a>
                                </li>
                                <li class="m-nav__item">
                                    <a href="#footer" title="Ir para o rodapé" class="m-nav__link" accesskey="3">
                                        <span class="m-nav__link-text">Rodapé [3]</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline m--pull-right">
                                <li class="m-nav__item">
                                    <a href="javascript:zoomOut()" title="Diminuir zoom" class="m-nav__link"
                                        accesskey="4">
                                        <span class="m-nav__link-text">A- [4]</span>
                                    </a>
                                </li>
                                <li class="m-nav__item">
                                    <a href="javascript:zoomIn()" title="Aumentar zoom" class="m-nav__link"
                                        accesskey="5">
                                        <span class="m-nav__link-text">A+ [5]</span>
                                    </a>
                                </li>
                                <li class="m-nav__item">
                                    <a href="javascript:toggleContrast()" title="Ativar/desativar alto contraste"
                                        class="m-nav__link" accesskey="6">
                                        <span class="m-nav__link-text">Contraste [6]</span>
                                    </a>
                                </li>
                                <li class="m-nav__item">
                                    <a href="acessibilidade" title="Acessibilidade" class="m-nav__link" accesskey="7">
                                        <span class="m-nav__link-text">Acessibilidade</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="header" class="m-header__top">
                <div
                    class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
                    <div class="m-stack m-stack--ver m-stack--desktop">
                        <div class="m-stack__item m-brand">
                            <div class="m-stack m-stack--ver m-stack--general m-stack--inline">
                                <div class="m-stack__item m-stack__item--middle m-brand__logo">
                                    <a href="/" class="m-brand__logo-wrapper">
                                        <img src="\img\logoOficial.png" width="150" alt="Bravo" tabindex="0">
                                    </a>
                                </div>
                                <div class="m-stack__item m-stack__item--middle m-brand__tools">
                                    <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" title="Categorias"
                                        class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block"
                                        tabindex="0">
                                        <span>Categorias</span>
                                    </a>

                                    <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" title="Menu"
                                        class="m-brand__icon m--visible-tablet-and-mobile-inline-block" tabindex="0">
                                        <i class="flaticon-more-1">
                                            <span class="m--hide">Menu</span>
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                            <div id="m_header_topbar" class="m-topbar m-stack m-stack--ver m-stack--general">
                                <div class="m-stack__item m-topbar__nav-wrapper">
                                    <ul class="m-topbar__nav m-nav m-nav--inline">
                                        <li class="m-nav__item m--hidden-tablet-and-mobile">
                                            <style>
                                                .m-header--minimize-on .m-list-search__form {
                                                    padding-top: 10px !important;
                                                }

                                                @media (min-width: 1025px) {
                                                    #s {
                                                        width: 450px;
                                                    }
                                                }

                                                @media (max-width: 1024px) {
                                                    #s {
                                                        width: 335px;
                                                    }
                                                }
                                            </style>

                                            <form id="frmPesquisar"
                                                class="m-list-search__form m--padding-top-25-desktop m--margin-right-15-desktop"
                                                method="get" action="/eventos/pesquisar">
                                                <div class="m-typeahead">
                                                    <div class="m-input-icon m-input-icon--right">
                                                        <input type="text" id="s" name="s"
                                                            class="form-control m-input m-input--pill"
                                                            placeholder="Pesquise por artista, evento ou local..."
                                                            autocomplete="off">
                                                        <span class="m-input-icon__icon m-input-icon__icon--right">
                                                            <span>
                                                                <i class="flaticon-search"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </form>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="#pcdLeiModal" data-toggle="modal" class="m-nav__link" tabindex="0">
                                                <span class="m-nav__link-icon">
                                                    <span class="m-nav__link-icon-wrapper">
                                                        <i class="fa fa-wheelchair">
                                                            <span class="m--hide">PCD</span>
                                                        </i>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="/meu-carrinho" class="m-nav__link" tabindex="0">
                                                <span class="m-nav__link-badge m-badge m-badge--success">0</span>
                                                <span class="m-nav__link-icon">
                                                    <span class="m-nav__link-icon-wrapper">
                                                        <i class="flaticon-cart">
                                                            <span class="m--hide">Meu Carrinho</span>
                                                        </i>
                                                        <small id="cartTime"
                                                            class="m--font-danger m--hidden-tablet-and-mobile timer-icon"></small>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width"
                                            m-dropdown-toggle="click" m-dropdown-persistent="1">
                                            <a href="#" class="m-nav__link m-dropdown__toggle"
                                                id="m_topbar_notification_icon" tabindex="0">
                                                <span class="m-nav__link-icon">
                                                    <span class="m-nav__link-icon-wrapper">
                                                        <i class="flaticon-music-2">
                                                            <span class="m--hide">Notificações</span>
                                                        </i>
                                                    </span>
                                                </span>
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__header m--align-center"
                                                        style="background: url('images/notification_bg.jpg'); background-size: cover;">
                                                        <span class="m-dropdown__header-title">0 Nova(s)</span>
                                                        <span class="m-dropdown__header-subtitle">Central de
                                                            Notificações</span>
                                                    </div>
                                                    <div class="m-dropdown__body">
                                                        <div class="m-dropdown__content">
                                                            <div class="m-stack m-stack--ver m-stack--general"
                                                                style="min-height: 180px;">
                                                                <div
                                                                    class="m-stack__item m-stack__item--center m-stack__item--middle">
                                                                    <span class="">Tudo certo!<br>Nenhuma
                                                                        notificação.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
                                            m-dropdown-toggle="click">
                                            <a href="#" class="m-nav__link m-dropdown__toggle" tabindex="0">
                                                <span class="m-topbar__welcome m--hidden-mobile">Olá, ¦nbsp; </span>
                                                <span class="m-topbar__username m--hidden-mobile">Visitante!</span>
                                                <span class="m-topbar__userpic">
                                                    <span class="m-nav__link-icon">
                                                        <span class="m-nav__link-icon-wrapper">
                                                            <i class="flaticon-user"></i>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span
                                                    class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__header m--align-center"
                                                        style="background: url('images/user_profile_bg.jpg'); background-size: cover;">
                                                        <div class="m-card-user m-card-user--skin-dark">
                                                            <div class="m-card-user__pic">
                                                                <i class="flaticon-user m--icon-font-size-lg5"></i>
                                                            </div>
                                                            <div class="m-card-user__details">
                                                                <span
                                                                    class="m-card-user__name m--font-weight-500">Visitante</span>
                                                                <span
                                                                    class="m-card-user__email m--font-weight-300 m-link"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-dropdown__body">
                                                        <div class="m-dropdown__content">
                                                            <ul class="m-nav m-nav--skin-light">
                                                                <li class="m-nav__item">
                                                                    <a href="/auth" class="m-nav__link" tabindex="0">
                                                                        <i class="m-nav__link-icon flaticon-lock-1"></i>
                                                                        <span class="m-nav__link-text">Login</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="/meus-ingressos" class="m-nav__link"
                                                                        tabindex="0">
                                                                        <i
                                                                            class="m-nav__link-icon flaticon-interface-10"></i>
                                                                        <span class="m-nav__link-text">Meus
                                                                            Ingressos</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="/minha-carteira" class="m-nav__link"
                                                                        tabindex="0">
                                                                        <i class="m-nav__link-icon flaticon-coins"></i>
                                                                        <span class="m-nav__link-text">Minha
                                                                            Carteira</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="/meus-pedidos" class="m-nav__link"
                                                                        tabindex="0">
                                                                        <i class="m-nav__link-icon flaticon-notes"></i>
                                                                        <span class="m-nav__link-text">Meus
                                                                            Pedidos</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="/cadastro/verificacao" class="m-nav__link"
                                                                        tabindex="0">
                                                                        <i
                                                                            class="m-nav__link-icon flaticon-technology-1"></i>
                                                                        <span class="m-nav__link-text">Certificação de
                                                                            Cadastro</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="/central-de-ajuda" class="m-nav__link"
                                                                        tabindex="0" target="_blank">
                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                        <span class="m-nav__link-text">Central de
                                                                            Ajuda</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="m-header__bottom">
                <div
                    class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
                    <div class="m-stack m-stack--ver m-stack--desktop">
                        <div class="m-stack__item m-stack__item--middle m-stack__item--fluid">
                            <button
                                class="m-aside-header-menu-mobile-close m-aside-header-menu-mobile-close--skin-light"
                                id="m_aside_header_menu_mobile_close_btn">
                                <i class="la la-close"></i>
                            </button>

                            <div id="m_header_menu"
                                class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas m-header-menu--skin-dark m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light">
                                <ul class="m-menu__nav m-menu__nav--submenu-arrow">


                                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"
                                        m-menu-submenu-toggle="click" aria-haspopup="true">
                                        <a href="/categoria/119/casas-amp-clubs" class="m-menu__link m-menu__toggle">
                                            <span class="m-menu__item-here"></span>
                                            <span class="m-menu__link-text">Casas &amp; Clubs</span>
                                            <i class="m-menu__hor-arrow la la-angle-down"></i>
                                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                                        </a>
                                        <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                                            <span class="m-menu__arrow m-menu__arrow--adjust"
                                                style="z-index: 1;"></span>
                                            <ul class="m-menu__subnav m-scrollable" data-scrollbar-shown="true"
                                                data-scrollable="true" style="max-height:500px; overflow-y: visible;">
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1414/espaco-unimed" class="m-menu__link"
                                                        title="Espaço Unimed">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Espaço Unimed</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">22</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/327/audio" class="m-menu__link"
                                                        title="Audio">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Audio</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">15</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/526/templo" class="m-menu__link"
                                                        title="Templo">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Templo</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">15</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1270/jeunesse-arena" class="m-menu__link"
                                                        title="Jeunesse Arena">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Jeunesse Arena</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">12</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1391/quintal-do-espeto" class="m-menu__link"
                                                        title="Quintal do Espeto">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Quintal do Espeto</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">12</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/941/sambodromo-do-anhembi"
                                                        class="m-menu__link" title="Sambódromo do Anhembi">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Sambódromo do
                                                                    Anhembi</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">09</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1211/ginasio-do-ibirapuera"
                                                        class="m-menu__link" title="Ginásio do Ibirapuera">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Ginásio do
                                                                    Ibirapuera</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">08</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/161/villa-country" class="m-menu__link"
                                                        title="Villa Country">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Villa Country</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">06</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/564/ctn" class="m-menu__link" title="CTN">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">CTN</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">05</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1417/espaco-liv" class="m-menu__link"
                                                        title="Espaço Liv">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Espaço Liv</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">05</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/138/sea-club" class="m-menu__link"
                                                        title="Sea Club">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Sea Club</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">05</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/339/ca-juventus" class="m-menu__link"
                                                        title="CA Juventus">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">CA Juventus</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">04</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/881/arena-sertaneja" class="m-menu__link"
                                                        title="Arena Sertaneja">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Arena Sertaneja</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">03</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1390/armazem-maya" class="m-menu__link"
                                                        title="Armazém Maya">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Armazém Maya</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">03</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/688/espaco-win" class="m-menu__link"
                                                        title="Espaço Win">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Espaço Win</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">03</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/335/estancia-alto-da-serra"
                                                        class="m-menu__link" title="Estância Alto da Serra">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Estância Alto da
                                                                    Serra</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">03</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1467/parque-villa-lobos"
                                                        class="m-menu__link" title="Parque Villa-Lobos">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Parque
                                                                    Villa-Lobos</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">03</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1486/allianz-parque" class="m-menu__link"
                                                        title="Allianz Parque">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Allianz Parque</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">02</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/310/ca-aramacan" class="m-menu__link"
                                                        title="CA Aramaçan">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">CA Aramaçan</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">02</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1396/good-show" class="m-menu__link"
                                                        title="Good Show">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Good Show</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">02</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1494/mentari-ocean-club"
                                                        class="m-menu__link" title="Mentari Ocean Club">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Mentari Ocean
                                                                    Club</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">02</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1150/neo-quimica-arena" class="m-menu__link"
                                                        title="Neo Química Arena">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Neo Química Arena</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">02</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>


                                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"
                                        m-menu-submenu-toggle="click" aria-haspopup="true">
                                        <a href="/categoria/1/musica" class="m-menu__link m-menu__toggle">
                                            <span class="m-menu__item-here"></span>
                                            <span class="m-menu__link-text">Música</span>
                                            <i class="m-menu__hor-arrow la la-angle-down"></i>
                                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                                        </a>
                                        <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                                            <span class="m-menu__arrow m-menu__arrow--adjust"
                                                style="z-index: 1;"></span>
                                            <ul class="m-menu__subnav m-scrollable" data-scrollbar-shown="true"
                                                data-scrollable="true" style="max-height:500px; overflow-y: visible;">
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/4/sambapagode" class="m-menu__link"
                                                        title="Samba/Pagode">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Samba/Pagode</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">62</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/13/pop" class="m-menu__link" title="Pop">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Pop</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">25</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/5/sertanejo-amp-country"
                                                        class="m-menu__link" title="Sertanejo &amp; Country">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Sertanejo &amp;
                                                                    Country</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">23</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/8/mpb" class="m-menu__link" title="MPB">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">MPB</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">14</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/7/rock" class="m-menu__link" title="Rock">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Rock</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">11</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/6/pop-rock" class="m-menu__link"
                                                        title="Pop-Rock">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Pop-Rock</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">08</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/11/funk" class="m-menu__link" title="Funk">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Funk</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">07</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/12/forro" class="m-menu__link"
                                                        title="Forró">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Forró</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">05</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1428/piseiro" class="m-menu__link"
                                                        title="Piseiro">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Piseiro</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">05</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/163/brega" class="m-menu__link"
                                                        title="Brega">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Brega</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">04</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/2/eletronico" class="m-menu__link"
                                                        title="Eletrônico">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Eletrônico</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">04</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/10/raphip-hop" class="m-menu__link"
                                                        title="Rap/Hip-Hop">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Rap/Hip-Hop</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">04</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/21/reggae" class="m-menu__link"
                                                        title="Reggae">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Reggae</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">03</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/258/rock-amp-roll" class="m-menu__link"
                                                        title="Rock &amp; Roll">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Rock &amp; Roll</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">03</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1483/trap" class="m-menu__link"
                                                        title="Trap">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Trap</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">02</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>


                                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"
                                        m-menu-submenu-toggle="click" aria-haspopup="true">
                                        <a href="/categoria/61/artistas" class="m-menu__link m-menu__toggle">
                                            <span class="m-menu__item-here"></span>
                                            <span class="m-menu__link-text">Artistas</span>
                                            <i class="m-menu__hor-arrow la la-angle-down"></i>
                                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                                        </a>
                                        <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                                            <span class="m-menu__arrow m-menu__arrow--adjust"
                                                style="z-index: 1;"></span>
                                            <ul class="m-menu__subnav m-scrollable" data-scrollbar-shown="true"
                                                data-scrollable="true" style="max-height:500px; overflow-y: visible;">
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/387/spc" class="m-menu__link" title="SPC">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">SPC</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">24</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/142/restart" class="m-menu__link"
                                                        title="Restart">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Restart</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">12</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/70/jota-quest" class="m-menu__link"
                                                        title="Jota Quest">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Jota Quest</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">07</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1491/4-amigos" class="m-menu__link"
                                                        title="4 Amigos">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">4 Amigos</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">06</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1034/tiee" class="m-menu__link"
                                                        title="Tiee">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Tiee</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">06</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/75/belo" class="m-menu__link" title="Belo">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Belo</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">05</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/74/os-paralamas-do-sucesso"
                                                        class="m-menu__link" title="Os Paralamas do Sucesso">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Os Paralamas do
                                                                    Sucesso</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">04</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/354/pericles" class="m-menu__link"
                                                        title="Péricles">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Péricles</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">04</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/588/djavan" class="m-menu__link"
                                                        title="Djavan">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Djavan</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">03</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1071/doce-encontro" class="m-menu__link"
                                                        title="Doce Encontro">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Doce Encontro</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">03</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1492/henry-e-klauss" class="m-menu__link"
                                                        title="Henry e Klauss">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Henry e Klauss</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">03</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/81/jorge-amp-mateus" class="m-menu__link"
                                                        title="Jorge &amp; Mateus">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Jorge &amp;
                                                                    Mateus</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">03</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/609/maiara-amp-maraisa" class="m-menu__link"
                                                        title="Maiara &amp; Maraisa">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Maiara &amp;
                                                                    Maraisa</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">03</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/110/nando-reis" class="m-menu__link"
                                                        title="Nando Reis">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Nando Reis</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">03</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1140/netinho-de-paula" class="m-menu__link"
                                                        title="Netinho de Paula">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Netinho de Paula</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">03</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/105/pixote" class="m-menu__link"
                                                        title="Pixote">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Pixote</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">03</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1482/rafinha-o-big-love"
                                                        class="m-menu__link" title="Rafinha O Big Love">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Rafinha O Big
                                                                    Love</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">03</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/991/sandy" class="m-menu__link"
                                                        title="Sandy">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Sandy</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">03</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/633/caetano-veloso" class="m-menu__link"
                                                        title="Caetano Veloso">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Caetano Veloso</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">02</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/99/daniel" class="m-menu__link"
                                                        title="Daniel">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Daniel</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">02</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1387/joao-gomes" class="m-menu__link"
                                                        title="João Gomes">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">João Gomes</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">02</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/243/leo-magalhaes" class="m-menu__link"
                                                        title="Léo Magalhães">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Léo Magalhães</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">02</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/369/lulu-santos" class="m-menu__link"
                                                        title="Lulu Santos">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Lulu Santos</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">02</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/468/pablo" class="m-menu__link"
                                                        title="Pablo">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Pablo</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">02</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/135/planta-e-raiz" class="m-menu__link"
                                                        title="Planta e Raiz">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Planta e Raiz</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">02</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/78/sorriso-maroto" class="m-menu__link"
                                                        title="Sorriso Maroto">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Sorriso Maroto</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">02</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/366/turma-do-pagode" class="m-menu__link"
                                                        title="Turma do Pagode">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Turma do Pagode</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">02</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>


                                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"
                                        m-menu-submenu-toggle="click" aria-haspopup="true">
                                        <a href="/categoria/126/eventos" class="m-menu__link m-menu__toggle">
                                            <span class="m-menu__item-here"></span>
                                            <span class="m-menu__link-text">Eventos</span>
                                            <i class="m-menu__hor-arrow la la-angle-down"></i>
                                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                                        </a>
                                        <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                                            <span class="m-menu__arrow m-menu__arrow--adjust"
                                                style="z-index: 1;"></span>
                                            <ul class="m-menu__subnav m-scrollable" data-scrollbar-shown="true"
                                                data-scrollable="true" style="max-height:500px; overflow-y: visible;">
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1474/spc-acustico-2" class="m-menu__link"
                                                        title="SPC Acústico 2">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">SPC Acústico 2</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">23</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1480/restart-turne" class="m-menu__link"
                                                        title="Restart Turnê">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Restart Turnê</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">12</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1422/oktoberfest" class="m-menu__link"
                                                        title="Oktoberfest">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Oktoberfest</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">08</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1488/jota25" class="m-menu__link"
                                                        title="JOTA25">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">JOTA25</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">07</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1421/vct-game-changers" class="m-menu__link"
                                                        title="VCT Game Changers">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">VCT Game Changers</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">06</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1237/camarote-011" class="m-menu__link"
                                                        title="Camarote 011">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Camarote 011</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">05</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1485/camarote-essepe" class="m-menu__link"
                                                        title="Camarote Essepê">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Camarote Essepê</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">04</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1395/festa-do-branco" class="m-menu__link"
                                                        title="Festa do Branco">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Festa do Branco</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">04</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1464/nomade-festival" class="m-menu__link"
                                                        title="Nômade Festival">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Nômade Festival</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">03</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1493/um-festival" class="m-menu__link"
                                                        title="Um Festival">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Um Festival</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">03</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>


                                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"
                                        m-menu-submenu-toggle="click" aria-haspopup="true">
                                        <a href="/categoria/24/artes-e-teatro" class="m-menu__link m-menu__toggle">
                                            <span class="m-menu__item-here"></span>
                                            <span class="m-menu__link-text">Artes e Teatro</span>
                                            <i class="m-menu__hor-arrow la la-angle-down"></i>
                                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                                        </a>
                                        <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                                            <span class="m-menu__arrow m-menu__arrow--adjust"
                                                style="z-index: 1;"></span>
                                            <ul class="m-menu__subnav m-scrollable" data-scrollbar-shown="true"
                                                data-scrollable="true" style="max-height:500px; overflow-y: visible;">
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/295/stand-up" class="m-menu__link"
                                                        title="Stand Up">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Stand Up</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">07</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/33/infantil" class="m-menu__link"
                                                        title="Infantil">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Infantil</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">04</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>


                                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"
                                        m-menu-submenu-toggle="click" aria-haspopup="true">
                                        <a href="/categoria/51/especiais" class="m-menu__link m-menu__toggle">
                                            <span class="m-menu__item-here"></span>
                                            <span class="m-menu__link-text">Especiais</span>
                                            <i class="m-menu__hor-arrow la la-angle-down"></i>
                                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                                        </a>
                                        <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                                            <span class="m-menu__arrow m-menu__arrow--adjust"
                                                style="z-index: 1;"></span>
                                            <ul class="m-menu__subnav m-scrollable" data-scrollbar-shown="true"
                                                data-scrollable="true" style="max-height:500px; overflow-y: visible;">
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1402/estacionamento" class="m-menu__link"
                                                        title="Estacionamento">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Estacionamento</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">55</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/694/amigos" class="m-menu__link"
                                                        title="Amigos">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Amigos</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">17</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/636/black-friday" class="m-menu__link"
                                                        title="Black Friday">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Black Friday</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">15</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/226/festival" class="m-menu__link"
                                                        title="Festival">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Festival</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">14</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1462/solidario" class="m-menu__link"
                                                        title="Solidário">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Solidário</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">14</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/225/carnaval" class="m-menu__link"
                                                        title="Carnaval">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Carnaval</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">10</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1040/gastronomia" class="m-menu__link"
                                                        title="Gastronomia">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Gastronomia</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">06</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/692/verao360" class="m-menu__link"
                                                        title="Verão360">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Verão360</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">05</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/337/covers" class="m-menu__link"
                                                        title="Covers">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Covers</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">03</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/52/feiras" class="m-menu__link"
                                                        title="Feiras">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Feiras</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">03</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/130/reveillon" class="m-menu__link"
                                                        title="Reveillon">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Reveillon</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">03</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/412/automobilismo" class="m-menu__link"
                                                        title="Automobilismo">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Automobilismo</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">02</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1456/corinthians" class="m-menu__link"
                                                        title="Corinthians">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Corinthians</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">02</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1475/meet-and-greet" class="m-menu__link"
                                                        title="Meet and Greet">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Meet and Greet</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">02</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>


                                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"
                                        m-menu-submenu-toggle="click" aria-haspopup="true">
                                        <a href="/categoria/210/estados" class="m-menu__link m-menu__toggle">
                                            <span class="m-menu__item-here"></span>
                                            <span class="m-menu__link-text">Estados</span>
                                            <i class="m-menu__hor-arrow la la-angle-down"></i>
                                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                                        </a>
                                        <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                                            <span class="m-menu__arrow m-menu__arrow--adjust"
                                                style="z-index: 1;"></span>
                                            <ul class="m-menu__subnav m-scrollable" data-scrollbar-shown="true"
                                                data-scrollable="true" style="max-height:500px; overflow-y: visible;">
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/211/sao-paulo" class="m-menu__link"
                                                        title="São Paulo">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">São Paulo</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">174</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/212/rio-de-janeiro" class="m-menu__link"
                                                        title="Rio de Janeiro">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Rio de Janeiro</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">17</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/213/minas-gerais" class="m-menu__link"
                                                        title="Minas Gerais">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Minas Gerais</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">08</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/217/rio-grande-do-sul" class="m-menu__link"
                                                        title="Rio Grande do Sul">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Rio Grande do Sul</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">07</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/215/parana" class="m-menu__link"
                                                        title="Paraná">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Paraná</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">05</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/1209/pernambuco" class="m-menu__link"
                                                        title="Pernambuco">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Pernambuco</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">03</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/216/bahia" class="m-menu__link"
                                                        title="Bahia">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Bahia</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">02</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/219/distrito-federal" class="m-menu__link"
                                                        title="Distrito Federal">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Distrito Federal</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">02</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/218/goias" class="m-menu__link"
                                                        title="Goias">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Goias</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">02</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/291/para" class="m-menu__link" title="Pará">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Pará</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">02</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item" aria-haspopup="true">
                                                    <a href="/sub-categoria/222/santa-catarina" class="m-menu__link"
                                                        title="Santa Catarina">
                                                        <span class="m-menu__link-title">
                                                            <span class="m-menu__link-wrap">
                                                                <span class="m-menu__link-text">Santa Catarina</span>
                                                                <span class="m-menu__link-badge notranslate">
                                                                    <span class="m-badge m-badge--default">02</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <script>
            var zoom = 100;
            var contrast = false;
            window.addEventListener("load", function (event) {
                zoom = parseInt(window.localStorage.getItem('zoom')) || 100;
                document.body.style.zoom = zoom + '%';

                contrast = window.localStorage.getItem('contrast') == 'true' ? true : false;
                if (contrast == true) {
                    contrast = false;
                    toggleContrast();
                }
            });

            function zoomOut() {
                if (zoom > 100) {
                    zoom = zoom - 10;
                    window.localStorage.setItem('zoom', zoom);
                    document.body.style.zoom = zoom + '%';
                }
            }

            function zoomIn() {
                if (zoom < 150) {
                    zoom = zoom + 10;
                    window.localStorage.setItem('zoom', zoom);
                    document.body.style.zoom = zoom + '%';
                }
            }

            function toggleContrast() {
                contrast = !contrast;
                window.localStorage.setItem('contrast', contrast);
                $(document.body).toggleClass('contrast');
            }
        </script>
        <div
            class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop m-container m-container--responsive m-container--xxl m-page__container m-body">
            <div id="contents" class="m-grid__item m-grid__item--fluid m-wrapper">

                <div class="m-content">


                    <div class="row">
                        <div class="col-xl-12">
                            <div class="owl-carousel">
                                <div class="carousel">
                                    <a href="https://www.Ticket Bravo.com.br/sub-categoria/1485/camarote-essepe?utm_source=midia_Ticket Bravo&amp;utm_medium=cpc&amp;utm_campaign=banner"
                                        title="Camarote Essepê" class="notranslate">
                                        <img src="images/577.jpeg" alt="Camarote Essepê" class="img-fluid">
                                    </a>
                                </div>
                                <div class="carousel">
                                    <a href="https://www.Ticket Bravo.com.br/evento/27852/ingressos-para-jorge-e-mateus-e-pedro-libe?utm_source=midia_Ticket Bravo&amp;utm_medium=cpc&amp;utm_campaign=banner"
                                        title="Jorge &amp; Mateus - Estância" class="notranslate">
                                        <img src="images/625.jpg" alt="Jorge &amp; Mateus - Estância" class="img-fluid">
                                    </a>
                                </div>
                                <div class="carousel">
                                    <a href="https://www.Ticket Bravo.com.br/evento/27561/ingressos-para-reveillon-da-garoa-2024?utm_source=midia_Ticket Bravo&amp;utm_medium=cpc&amp;utm_campaign=banner"
                                        title="Reveillon da Garoa - Unimed" class="notranslate">
                                        <img src="images/575-20231104113859.jpg" alt="Reveillon da Garoa - Unimed"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="carousel">
                                    <a href="https://www.Ticket Bravo.com.br/sub-categoria/1493/um-festival?utm_source=midia_Ticket Bravo&amp;utm_medium=cpc&amp;utm_campaign=banner"
                                        title="Um Festival" class="notranslate">
                                        <img src="images/614.jpg" alt="Um Festival" class="img-fluid">
                                    </a>
                                </div>
                                <div class="carousel">
                                    <a href="https://www.Ticket Bravo.com.br/restart?utm_source=midia_Ticket Bravo&amp;utm_medium=cpc&amp;utm_campaign=banner"
                                        title="Restart" class="notranslate">
                                        <img src="images/540.jpg" alt="Restart" class="img-fluid">
                                    </a>
                                </div>
                                <div class="carousel">
                                    <a href="https://www.Ticket Bravo.com.br/evento/27989/ingressos-para-kamaitachi-lancamento-do-album-festa?utm_source=midia_Ticket Bravo&amp;utm_medium=cpc&amp;utm_campaign=banner"
                                        title="Kamaitachi - Audio" class="notranslate">
                                        <img src="images/626.jpg" alt="Kamaitachi - Audio" class="img-fluid">
                                    </a>
                                </div>
                                <div class="carousel">
                                    <a href="https://www.Ticket Bravo.com.br/evento/28082/ingressos-para-djavan-data-extra?utm_source=midia_Ticket Bravo&amp;utm_medium=cpc&amp;utm_campaign=banner"
                                        title="Djavan Data Extra - Jeunesse" class="notranslate">
                                        <img src="images/618.jpg" alt="Djavan Data Extra - Jeunesse" class="img-fluid">
                                    </a>
                                </div>
                                <div class="carousel">
                                    <a href="https://www.Ticket Bravo.com.br/evento/27788/ingressos-para-lulu-santos-baritono-no-aramacan?utm_source=midia_Ticket Bravo&amp;utm_medium=cpc&amp;utm_campaign=banner"
                                        title="Lulu Santos - Aramaçan" class="notranslate">
                                        <img src="images/622.jpg" alt="Lulu Santos - Aramaçan" class="img-fluid">
                                    </a>
                                </div>
                                <div class="carousel">
                                    <a href="https://www.Ticket Bravo.com.br/evento/27209/ingressos-para-reggae-live-station-com-the-wailers-ponto-de-equilibrio-e-planta-e-raiz?utm_source=midia_Ticket Bravo&amp;utm_medium=cpc&amp;utm_campaign=banner"
                                        title="Reggae Live Station" class="notranslate">
                                        <img src="images/624.jpg" alt="Reggae Live Station" class="img-fluid">
                                    </a>
                                </div>
                                <div class="carousel">
                                    <a href="https://www.Ticket Bravo.com.br/spcacustico?utm_source=midia_Ticket Bravo&amp;utm_medium=cpc&amp;utm_campaign=banner"
                                        title="SPC O Último Encontro" class="notranslate">
                                        <img src="images/491-20230615122335.jpg" alt="SPC O Último Encontro"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="carousel">
                                    <a href="https://www.Ticket Bravo.com.br/evento/28156/ingressos-para-um-baita-festival-com-the-calling-capital-inicial-nando-reis-e-mais?utm_source=midia_Ticket Bravo&amp;utm_medium=cpc&amp;utm_campaign=banner"
                                        title="Um Baita Festival - Fazenda" class="notranslate">
                                        <img src="images/623.jpg" alt="Um Baita Festival - Fazenda" class="img-fluid">
                                    </a>
                                </div>
                                <div class="carousel">
                                    <a href="https://www.Ticket Bravo.com.br/sub-categoria/1464/nomade-festival?utm_source=midia_Ticket Bravo&amp;utm_medium=cpc&amp;utm_campaign=banner"
                                        title="Nomade Festival" class="notranslate">
                                        <img src="images/615-20231110102229.jpg" alt="Nomade Festival"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="carousel">
                                    <a href="https://www.Ticket Bravo.com.br/jota25arenas?utm_source=midia_Ticket Bravo&amp;utm_medium=cpc&amp;utm_campaign=banner"
                                        title="Jota25 Arenas" class="notranslate">
                                        <img src="images/597-20231008155234.jpg" alt="Jota25 Arenas" class="img-fluid">
                                    </a>
                                </div>
                                <div class="carousel">
                                    <a href="https://www.Ticket Bravo.com.br/evento/27644/ingressos-para-garota-vip-sao-paulo?utm_source=midia_Ticket Bravo&amp;utm_medium=cpc&amp;utm_campaign=banner"
                                        title="Garota Vip - São Paulo" class="notranslate">
                                        <img src="images/556.jpg" alt="Garota Vip - São Paulo" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Gloria Groove no show Noites de Gloria"
                                    href="evento/27801/ingressos-para-gloria-groove-no-show-noites-de-gloria"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27801-20230919153545.jpg"
                                                    alt="Gloria Groove no show Noites de Gloria">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Gloria Groove no show Noites de Gloria </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sexta, 17/11/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Espaço Unimed</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Seresta e Sofrência com Rafinha O Big Love, Nadson O Ferinha e mais"
                                    href="evento/27278/ingressos-para-seresta-e-sofrencia-com-rafinha-o-big-love-nadson-o-ferinha-e-mais"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27278-20230626155151.jpg"
                                                    alt="Seresta e Sofrência com Rafinha O Big Love, Nadson O Ferinha e mais">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Seresta e Sofrência com Rafinha O Big Love, Nadson O
                                                                    Ferinha e mais </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sexta, 17/11/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Estância Alto da Serra</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Rio Freestyle Motocross"
                                    href="evento/27506/ingressos-para-rio-freestyle-motocross" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27506.jpg" alt="Rio Freestyle Motocross">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Rio Freestyle Motocross </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 18/11/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Jeunesse Arena</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Djavan Turnê D no Aramaçan"
                                    href="evento/27158/ingressos-para-djavan-turne-d-no-aramacan" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27158-20230606134333.jpg"
                                                    alt="Djavan Turnê D no Aramaçan">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Djavan Turnê D no Aramaçan </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 18/11/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Clube Atlético Aramaçan</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Encontro dos Conterrâneos com Washington Brasileiro, Soró Silva e mais"
                                    href="evento/28109/ingressos-para-encontro-dos-conterraneos-com-washington-brasileiro-soro-silva-e-mais"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/28109-20231110122919.jpg"
                                                    alt="Encontro dos Conterrâneos com Washington Brasileiro, Soró Silva e mais">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Encontro dos Conterrâneos com Washington Brasileiro,
                                                                    Soró Silva e mais </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Domingo, 19/11/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Arena Sertaneja</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Reggae Live Station com The Wailers, Ponto de Equilíbrio e Planta &amp; Raiz"
                                    href="evento/27209/ingressos-para-reggae-live-station-com-the-wailers-ponto-de-equilibrio-e-planta-e-raiz"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27209-20230823173705.jpg"
                                                    alt="Reggae Live Station com The Wailers, Ponto de Equilíbrio e Planta &amp; Raiz">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Reggae Live Station com The Wailers, Ponto de
                                                                    Equilíbrio e Planta &amp; Raiz </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Domingo, 19/11/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Espaço Unimed</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="À Vontade com Zezo Potiguar, Raí Saia Rodada e Luan Estilizado"
                                    href="evento/27889/ingressos-para-a-vontade-com-zezo-potiguar-rai-saia-rodada-e-luan-estilizado"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27889-20231005124400.jpg"
                                                    alt="À Vontade com Zezo Potiguar, Raí Saia Rodada e Luan Estilizado">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    À Vontade com Zezo Potiguar, Raí Saia Rodada e Luan
                                                                    Estilizado </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Domingo, 19/11/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>CTN - Centro de Tradições
                                                                            Nordestinas</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Douglas &amp; Vinícius" href="evento/27620/ingressos-para-douglas-e-vinicius"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27620-20230817125729.jpg" alt="Douglas &amp; Vinícius">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Douglas &amp; Vinícius </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Domingo, 19/11/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Villa Country</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Fernandinho, Turnê Álbum Único"
                                    href="evento/27290/ingressos-para-fernandinho-turne-album-unico" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27290-20230630153547.jpg"
                                                    alt="Fernandinho, Turnê Álbum Único">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Fernandinho, Turnê Álbum Único </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Quarta, 22/11/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Espaço Unimed</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Juan Duran" href="evento/27498/ingressos-para-juan-duran" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27498-20230808120424.jpg" alt="Juan Duran">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Juan Duran </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Quinta, 23/11/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Espaço Unimed</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Maiara &amp; Maraisa" href="evento/27674/ingressos-para-maiara-e-maraisa"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27674-20230829092400.jpg" alt="Maiara &amp; Maraisa">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Maiara &amp; Maraisa </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Quinta, 23/11/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Villa Country</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Novabrasil Apresenta Silva"
                                    href="evento/27883/ingressos-para-nova-brasil-apresenta-silva" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27883-20231004181207.jpg"
                                                    alt="Novabrasil Apresenta Silva">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Novabrasil Apresenta Silva </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sexta, 24/11/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Espaço Unimed</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Daniel" href="evento/27521/ingressos-para-daniel" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27521-20230808101636.jpg" alt="Daniel">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Daniel </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sexta, 24/11/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Espaço na Mata</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Sambadela A Roda de Samba da Thelminha com Vou Pro Sereno"
                                    href="evento/27880/ingressos-para-sambadela-a-roda-de-samba-da-thelminha-com-vou-pro-sereno"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27880-20230930171947.jpg"
                                                    alt="Sambadela A Roda de Samba da Thelminha com Vou Pro Sereno">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Sambadela A Roda de Samba da Thelminha com Vou Pro
                                                                    Sereno </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Domingo, 26/11/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Mirante Esperia</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Gabriel e Shirley Show de Natal"
                                    href="evento/27546/ingressos-para-gabriel-e-shirley-show-de-natal" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27546-20230806124331.jpg"
                                                    alt="Gabriel e Shirley Show de Natal">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Gabriel e Shirley Show de Natal </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Domingo, 26/11/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Espaço Unimed</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Caetano Veloso Data Extra"
                                    href="evento/27903/ingressos-para-caetano-veloso-data-extra" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27903-20231020172636.jpg"
                                                    alt="Caetano Veloso Data Extra">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Caetano Veloso Data Extra </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Segunda, 27/11/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Espaço Unimed</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="FKJ" href="evento/27865/ingressos-para-fkj" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27865-20231003140940.jpg" alt="FKJ">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    FKJ </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Quarta, 29/11/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Audio Eventos</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="É Pra Beber com Raquel dos Teclados, Silvanno Sales, Léo Magalhães e mais"
                                    href="evento/28105/ingressos-para-e-pra-beber-com-raquel-dos-teclados-silvanno-sales-leo-magalhaes-e-mais"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/28105-20231102122652.jpg"
                                                    alt="É Pra Beber com Raquel dos Teclados, Silvanno Sales, Léo Magalhães e mais">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    É Pra Beber com Raquel dos Teclados, Silvanno Sales,
                                                                    Léo Magalhães e mais </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sexta, 01/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>CTN - Centro de Tradições
                                                                            Nordestinas</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Maria Cecília &amp; Rodolfo"
                                    href="evento/27716/ingressos-para-maria-cecilia-e-rodolfo" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27716-20230905180940.jpg"
                                                    alt="Maria Cecília &amp; Rodolfo">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Maria Cecília &amp; Rodolfo </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sexta, 01/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Villa Country</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Kamaitachi Lançamento do Álbum Festa"
                                    href="evento/27989/ingressos-para-kamaitachi-lancamento-do-album-festa"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27989.jpg" alt="Kamaitachi Lançamento do Álbum Festa">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Kamaitachi Lançamento do Álbum Festa </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 02/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Audio Eventos</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Djavan Data Extra" href="evento/28082/ingressos-para-djavan-data-extra"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/28082-20231031161050.jpg" alt="Djavan Data Extra">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Djavan Data Extra </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Domingo, 03/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Jeunesse Arena</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Sonhos de Natal" href="evento/28164/ingressos-para-sonhos-de-natal"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/28164-20231116145010.jpg" alt="Sonhos de Natal">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Sonhos de Natal </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Quarta, 06/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Espaço Win</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Jonas Medeiros" href="evento/28111/ingressos-para-jonas-medeiros"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/28111-20231103100255.jpg" alt="Jonas Medeiros">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Jonas Medeiros </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sexta, 08/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Villa Country</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Maiara &amp; Maraisa e Hugo &amp; Guilherme"
                                    href="evento/27710/ingressos-para-maiara-e-maraisa-e-hugo-e-guilherme"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27710-20231006134047.jpg"
                                                    alt="Maiara &amp; Maraisa e Hugo &amp; Guilherme">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Maiara &amp; Maraisa e Hugo &amp; Guilherme
                                                                </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sexta, 08/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>CTN - Centro de Tradições
                                                                            Nordestinas</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Garota Vip São Paulo com Wesley Safadão, Zé Neto &amp; Cristiano, Dennis DJ e mais"
                                    href="evento/27644/ingressos-para-garota-vip-sao-paulo-com-wesley-safadao-ze-neto-e-cristiano-dennis-dj-e-mais"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27644-20230829100113.jpg"
                                                    alt="Garota Vip São Paulo com Wesley Safadão, Zé Neto &amp; Cristiano, Dennis DJ e mais">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Garota Vip São Paulo com Wesley Safadão, Zé Neto
                                                                    &amp; Cristiano, Dennis DJ e mais </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 09/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Distrito Anhembi</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Festival Ecstatic Dance Brasil Baile do Novo Mundo Música, Dança e Conexão"
                                    href="evento/28002/ingressos-para-festival-ecstatic-dance-brasil-baile-do-novo-mundo-musica-danca-e-conexao"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/28002-20231023154337.jpg"
                                                    alt="Festival Ecstatic Dance Brasil Baile do Novo Mundo Música, Dança e Conexão">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Festival Ecstatic Dance Brasil Baile do Novo Mundo
                                                                    Música, Dança e Conexão </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Domingo, 10/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Audio Eventos</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Enaldinho em O Mistério do Circo Sessão Extra"
                                    href="evento/28133/ingressos-para-enaldinho-em-o-misterio-do-circo-sessao-extra"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/28133-20231108171922.jpg"
                                                    alt="Enaldinho em O Mistério do Circo Sessão Extra">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Enaldinho em O Mistério do Circo Sessão Extra
                                                                </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Domingo, 10/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Espaço Unimed</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Juntas Festival com Liniker, Vanessa da Mata e Valesca Popozuda"
                                    href="evento/28020/ingressos-para-juntas-festival-com-liniker-e-vanessa-da-mata"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/28020-20231031112310.jpg"
                                                    alt="Juntas Festival com Liniker, Vanessa da Mata e Valesca Popozuda">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Juntas Festival com Liniker, Vanessa da Mata e
                                                                    Valesca Popozuda </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Domingo, 10/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Parque Villa-Lobos</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Enaldinho em O Mistério do Circo"
                                    href="evento/27558/ingressos-para-enaldinho-em-o-misterio-do-circo" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27558-20230807163029.jpg"
                                                    alt="Enaldinho em O Mistério do Circo">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Enaldinho em O Mistério do Circo </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Domingo, 10/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Espaço Unimed</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Péricles e Maestro João Carlos Martins Regendo a Orquestra Bachiana Filarmônica"
                                    href="evento/27808/ingressos-para-pericles-e-maestro-joao-carlos-martins-regendo-a-orquestra-bachiana-filarmonica"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27808-20230922143155.jpg"
                                                    alt="Péricles e Maestro João Carlos Martins Regendo a Orquestra Bachiana Filarmônica">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Péricles e Maestro João Carlos Martins Regendo a
                                                                    Orquestra Bachiana Filarmônica </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Segunda, 11/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Espaço Unimed</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Jorge &amp; Mateus" href="evento/27798/ingressos-para-jorge-e-mateus"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27798-20230918174959.jpg" alt="Jorge &amp; Mateus">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Jorge &amp; Mateus </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Quinta, 14/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Villa Country</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Festa do Branco com João Gomes, Tarcísio do Acordeon e Vitor Fernandes"
                                    href="evento/27948/ingressos-para-festa-do-branco-com-joao-gomes-tarcisio-do-acordeon-e-vitor-fernandes"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27948-20231011114115.jpg"
                                                    alt="Festa do Branco com João Gomes, Tarcísio do Acordeon e Vitor Fernandes">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Festa do Branco com João Gomes, Tarcísio do Acordeon
                                                                    e Vitor Fernandes </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sexta, 15/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>CTN - Centro de Tradições
                                                                            Nordestinas</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Sandy" href="evento/27992/ingressos-para-sandy" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27992.jpg" alt="Sandy">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Sandy </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 16/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Royal Palm Hall</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Restart Pra Você Lembrar em Belém"
                                    href="evento/27723/ingressos-para-restart-pra-voce-lembrar-em-belem" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27723-20230905173604.jpg"
                                                    alt="Restart Pra Você Lembrar em Belém">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Restart Pra Você Lembrar em Belém </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 16/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Espaço Náutico Marine Club</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Jorge &amp; Mateus e Pedro Libe"
                                    href="evento/27852/ingressos-para-jorge-e-mateus-e-pedro-libe" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27852.jpg" alt="Jorge &amp; Mateus e Pedro Libe">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Jorge &amp; Mateus e Pedro Libe </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 16/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Estância Alto da Serra</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Carol Biazin REVERSA TOUR"
                                    href="evento/27087/ingressos-para-carol-biazin-reversa-tour" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27087-20230529123641.jpg"
                                                    alt="Carol Biazin REVERSA TOUR">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Carol Biazin REVERSA TOUR </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Domingo, 17/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Audio Eventos</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Seu Jorge e Daniel Jobim interpretam Tom Jobim"
                                    href="evento/27519/ingressos-para-seu-jorge-e-daniel-jobim-interpretam-tom-jobim"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27519-20230803142554.jpg"
                                                    alt="Seu Jorge e Daniel Jobim interpretam Tom Jobim">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Seu Jorge e Daniel Jobim interpretam Tom Jobim
                                                                </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Domingo, 17/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Espaço Unimed</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Festa do Branco com Murilo Huff"
                                    href="evento/27726/ingressos-para-festa-do-branco-com-murilo-huff" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27726-20230929105435.jpg"
                                                    alt="Festa do Branco com Murilo Huff">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Festa do Branco com Murilo Huff </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sexta, 22/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Villa Country</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Maurício Manieri e Jon Secada"
                                    href="evento/27727/ingressos-para-mauricio-manieri-e-jon-secada" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27727-20230908191647.jpg"
                                                    alt="Maurício Manieri e Jon Secada">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Maurício Manieri e Jon Secada </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sexta, 22/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Espaço Unimed</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Perfect Life com Illusionize"
                                    href="evento/27651/ingressos-para-perfect-life-com-illusionize" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27651-20230823161306.jpg"
                                                    alt="Perfect Life com Illusionize">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Perfect Life com Illusionize </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sexta, 29/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Sea Club Ilhabela</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Inimigos da HP" href="evento/27655/ingressos-para-inimigos-da-hp"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27655-20230823174221.jpg" alt="Inimigos da HP">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Inimigos da HP </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 30/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Sea Club Ilhabela</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Réveillon da Garoa 2024 com Jorge Ben Jor, Matheus &amp; Kauan, JETLAG e mais DJs"
                                    href="evento/27561/ingressos-para-reveillon-da-garoa-2024-com-jorge-ben-jor-matheus-e-kauan-jetlag-e-mais-djs"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27561-20231104113825.jpg"
                                                    alt="Réveillon da Garoa 2024 com Jorge Ben Jor, Matheus &amp; Kauan, JETLAG e mais DJs">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Réveillon da Garoa 2024 com Jorge Ben Jor, Matheus
                                                                    &amp; Kauan, JETLAG e mais DJs </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Domingo, 31/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Espaço Unimed</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Réveillon Iluminight" href="evento/27659/ingressos-para-reveillon-iluminight"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27659-20230823163545.jpg" alt="Réveillon Iluminight">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Réveillon Iluminight </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Domingo, 31/12/2023 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Sea Club Ilhabela</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Maiara &amp; Maraisa em Santos"
                                    href="evento/28151/ingressos-para-maiara-e-maraisa" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/28151-20231113113931.jpg"
                                                    alt="Maiara &amp; Maraisa em Santos">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Maiara &amp; Maraisa em Santos </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Domingo, 07/01/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Clube Portuários</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Restart Pra Você Lembrar em Salvador"
                                    href="evento/27534/ingressos-para-restart-pra-voce-lembrar-em-salvador"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27534-20230805111411.jpg"
                                                    alt="Restart Pra Você Lembrar em Salvador">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Restart Pra Você Lembrar em Salvador </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 13/01/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Armazem Convention</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Arena Carnaval com Belo e Sorriso Maroto"
                                    href="evento/27919/ingressos-para-arena-carnaval-com-belo-e-sorriso-maroto"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27919-20231009094537.jpg"
                                                    alt="Arena Carnaval com Belo e Sorriso Maroto">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Arena Carnaval com Belo e Sorriso Maroto </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Domingo, 14/01/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Memorial da América Latina</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="SHAMANGRA" href="evento/27640/ingressos-para-shamangra" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27640.jpg" alt="SHAMANGRA">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    SHAMANGRA </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Domingo, 14/01/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Audio Eventos</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Somos 90 com Péricles e Pixote"
                                    href="evento/27797/ingressos-para-somos-90-com-pericles-e-pixote" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27797-20230918111355.jpg"
                                                    alt="Somos 90 com Péricles e Pixote">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Somos 90 com Péricles e Pixote </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 20/01/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Clube Atlético Juventus</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Restart Pra Você Lembrar em Recife"
                                    href="evento/27530/ingressos-para-restart-pra-voce-lembrar-em-recife" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27530-20230804211224.jpg"
                                                    alt="Restart Pra Você Lembrar em Recife">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Restart Pra Você Lembrar em Recife </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 20/01/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Classic Hall</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Jorge &amp; Mateus" href="evento/28114/ingressos-para-jorge-e-mateus"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/28114-20231106121355.jpg" alt="Jorge &amp; Mateus">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Jorge &amp; Mateus </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Quarta, 24/01/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>CTN - Centro de Tradições
                                                                            Nordestinas</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Os Paralamas do Sucesso e Nando Reis no Juventus"
                                    href="evento/27938/ingressos-para-os-paralamas-do-sucesso-e-nando-reis-no-juventus"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27938-20231011154059.jpg"
                                                    alt="Os Paralamas do Sucesso e Nando Reis no Juventus">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Os Paralamas do Sucesso e Nando Reis no Juventus
                                                                </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Quarta, 24/01/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Clube Atlético Juventus</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Baco Exu do Blues" href="evento/28046/ingressos-para-baco-exu-do-blues"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/28046-20231030125225.jpg" alt="Baco Exu do Blues">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Baco Exu do Blues </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sexta, 26/01/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Espaço Unimed</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Lulu Santos Barítono no Aramaçan"
                                    href="evento/27788/ingressos-para-lulu-santos-baritono-no-aramacan" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27788-20231002095816.jpg"
                                                    alt="Lulu Santos Barítono no Aramaçan">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Lulu Santos Barítono no Aramaçan </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sexta, 26/01/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Clube Atlético Aramaçan</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Marcelo Falcão e Charlie Brown Jr. 30 Anos no Juventus"
                                    href="evento/27876/ingressos-para-marcelo-falcao-e-charlie-brown-jr-30-anos-no-juventus"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27876-20231031114449.jpg"
                                                    alt="Marcelo Falcão e Charlie Brown Jr. 30 Anos no Juventus">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Marcelo Falcão e Charlie Brown Jr. 30 Anos no
                                                                    Juventus </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sexta, 26/01/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Clube Atlético Juventus</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Leonardo" href="evento/27752/ingressos-para-leonardo" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27752-20230912164242.jpg" alt="Leonardo">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Leonardo </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 27/01/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Espaço Unimed</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Jota Quest em JOTA25 Arenas no Rio de Janeiro"
                                    href="evento/27811/ingressos-para-jota-quest-em-jota25-arenas-no-rio-de-janeiro"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27811-20231008140038.jpg"
                                                    alt="Jota Quest em JOTA25 Arenas no Rio de Janeiro">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Jota Quest em JOTA25 Arenas no Rio de Janeiro
                                                                </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 03/02/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Marina da Glória - Rio de
                                                                            Janeiro</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Gueri-Gueri Baile De Carnaval 2024"
                                    href="evento/27500/ingressos-para-gueri-gueri-baile-de-carnaval-2024" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27500-20231109100329.jpg"
                                                    alt="Gueri-Gueri Baile De Carnaval 2024">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Gueri-Gueri Baile De Carnaval 2024 </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 03/02/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Villaggio JK Eventos</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Lulu Santos Barítono no Juventus"
                                    href="evento/28040/ingressos-para-lulu-santos-baritono-no-juventus" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/28040-20231026173907.jpg"
                                                    alt="Lulu Santos Barítono no Juventus">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Lulu Santos Barítono no Juventus </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 03/02/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Clube Atlético Juventus</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Camarote 011 Carnaval 2024 Acesso II Sábado"
                                    href="evento/27632/ingressos-para-camarote-011-carnaval-2024" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27632-20230822095221.jpg"
                                                    alt="Camarote 011 Carnaval 2024 Acesso II Sábado">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Camarote 011 Carnaval 2024 Acesso II Sábado
                                                                </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 03/02/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Sambódromo do Anhembi</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Camarote Essepê Sexta-Feira com Péricles"
                                    href="evento/27770/ingressos-para-camarote-essepe-sexta-feira-com-pericles"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27770-20231113151420.jpg"
                                                    alt="Camarote Essepê Sexta-Feira com Péricles">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Camarote Essepê Sexta-Feira com Péricles </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sexta, 09/02/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Sambódromo do Anhembi</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Camarote 011 Carnaval 2024 Acesso Especial Sexta-feira"
                                    href="evento/27633/ingressos-para-camarote-011-carnaval-2024" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27633-20230822095522.jpg"
                                                    alt="Camarote 011 Carnaval 2024 Acesso Especial Sexta-feira">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Camarote 011 Carnaval 2024 Acesso Especial
                                                                    Sexta-feira </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sexta, 09/02/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Sambódromo do Anhembi</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Camarote Essepê Sábado com Sorriso Maroto e João Gomes"
                                    href="evento/27773/ingressos-para-camarote-essepe-sabado-com-sorriso-maroto-e-joao-gomes"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27773-20231113151232.jpg"
                                                    alt="Camarote Essepê Sábado com Sorriso Maroto e João Gomes">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Camarote Essepê Sábado com Sorriso Maroto e João
                                                                    Gomes </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 10/02/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Sambódromo do Anhembi</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Camarote 011 Carnaval 2024 Acesso Especial Sábado com Xande de Pilares"
                                    href="evento/27634/ingressos-para-camarote-011-carnaval-2024" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27634-20230822095552.jpg"
                                                    alt="Camarote 011 Carnaval 2024 Acesso Especial Sábado com Xande de Pilares">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Camarote 011 Carnaval 2024 Acesso Especial Sábado
                                                                    com Xande de Pilares </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 10/02/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Sambódromo do Anhembi</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Camarote Essepê Domingo com Pixote e Mari Fernandez"
                                    href="evento/27774/ingressos-para-camarote-essepe-domingo-com-pixote-e-mari-fernandez"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27774-20231113151504.jpg"
                                                    alt="Camarote Essepê Domingo com Pixote e Mari Fernandez">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Camarote Essepê Domingo com Pixote e Mari Fernandez
                                                                </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Domingo, 11/02/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Sambódromo do Anhembi</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Camarote 011 Carnaval 2024 Acesso I Domingo"
                                    href="evento/27635/ingressos-para-camarote-011-carnaval-2024" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27635-20230822095616.jpg"
                                                    alt="Camarote 011 Carnaval 2024 Acesso I Domingo">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Camarote 011 Carnaval 2024 Acesso I Domingo
                                                                </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Domingo, 11/02/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Sambódromo do Anhembi</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Camarote Essepê Sábado Campeãs com Belo"
                                    href="evento/27775/ingressos-para-camarote-essepe-sabado-campeas-com-belo"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27775-20231113151602.jpg"
                                                    alt="Camarote Essepê Sábado Campeãs com Belo">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Camarote Essepê Sábado Campeãs com Belo </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 17/02/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Sambódromo do Anhembi</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Camarote 011 Carnaval 2024 Desfile das Campeãs Sexta-feira com Turma do Pagode"
                                    href="evento/27637/ingressos-para-camarote-011-carnaval-2024" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27637-20230822095644.jpg"
                                                    alt="Camarote 011 Carnaval 2024 Desfile das Campeãs Sexta-feira com Turma do Pagode">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Camarote 011 Carnaval 2024 Desfile das Campeãs
                                                                    Sexta-feira com Turma do Pagode </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 17/02/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Sambódromo do Anhembi</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Zé Ramalho Show dos Sucessos"
                                    href="evento/28118/ingressos-para-ze-ramalho-show-dos-sucessos" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/28118-20231106165259.jpg"
                                                    alt="Zé Ramalho Show dos Sucessos">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Zé Ramalho Show dos Sucessos </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sexta, 01/03/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Espaço Unimed</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Lamparina Lançamento do Disco &amp; Rachel Reis"
                                    href="evento/28008/ingressos-para-lamparina-lancamento-do-disco-e-rachel-reis"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/28008.jpg"
                                                    alt="Lamparina Lançamento do Disco &amp; Rachel Reis">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Lamparina Lançamento do Disco &amp; Rachel Reis
                                                                </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sexta, 01/03/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Audio Eventos</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="4 Amigos Fila de Piadas em Santos"
                                    href="evento/27985/ingressos-para-4-amigos-fila-de-piadas" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27985-20231024191504.jpg"
                                                    alt="4 Amigos Fila de Piadas em Santos">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    4 Amigos Fila de Piadas em Santos </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sexta, 15/03/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Blue Med Convention Center</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Air Supply Rio de Janeiro"
                                    href="evento/28110/ingressos-para-air-supply-rio-de-janeiro" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/28110-20231102170616.jpg"
                                                    alt="Air Supply Rio de Janeiro">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Air Supply Rio de Janeiro </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Quinta, 18/04/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Vivo Rio</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Megadeth" href="evento/27888/ingressos-para-megadeth" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27888-20231114103042.jpg" alt="Megadeth">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Megadeth </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Quinta, 18/04/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Espaço Unimed</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Air Supply São Paulo" href="evento/28072/ingressos-para-air-supply"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/28072-20231031173926.JPG" alt="Air Supply São Paulo">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Air Supply São Paulo </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Domingo, 21/04/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Espaço Unimed</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Henry &amp; Klauss Illusion Show Uma Jornada Mágica"
                                    href="evento/27982/ingressos-para-henry-e-klauss-illusion-show-uma-jornada-magica"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27982-20231027093348.jpg"
                                                    alt="Henry &amp; Klauss Illusion Show Uma Jornada Mágica">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Henry &amp; Klauss Illusion Show Uma Jornada Mágica
                                                                </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 27/04/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Salão de Atos da PUCRS</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Estância Pet" href="evento/28162/ingressos-para-estancia-pet" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/28162-20231116095128.jpg" alt="Estância Pet">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Estância Pet </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Domingo, 28/04/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Estância Alto da Serra</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Henry &amp; Klauss Illusion Show Uma Jornada Mágica"
                                    href="evento/27983/ingressos-para-henry-e-klauss-illusion-show-uma-jornada-magica"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27983-20231027093424.jpg"
                                                    alt="Henry &amp; Klauss Illusion Show Uma Jornada Mágica">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Henry &amp; Klauss Illusion Show Uma Jornada Mágica
                                                                </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Domingo, 28/04/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Salão de Atos da PUCRS</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Um Baita Festival com The Calling, Capital Inicial, Nando Reis e mais"
                                    href="evento/28156/ingressos-para-um-baita-festival-com-the-calling-capital-inicial-nando-reis-e-mais"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/28156-20231114104248.jpg"
                                                    alt="Um Baita Festival com The Calling, Capital Inicial, Nando Reis e mais">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Um Baita Festival com The Calling, Capital Inicial,
                                                                    Nando Reis e mais </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 11/05/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Fazenda Santa Margarida</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Thiaguinho Turnê Meu Nome é Thiago André com Pixote"
                                    href="evento/27550/ingressos-para-thiaguinho-turne-meu-nome-e-thiago-andre-com-pixote"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27550-20231028125902.jpg"
                                                    alt="Thiaguinho Turnê Meu Nome é Thiago André com Pixote">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Thiaguinho Turnê Meu Nome é Thiago André com Pixote
                                                                </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sexta, 24/05/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Internacional Eventos</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Luísa Sonza Escândalo Íntimo Tour"
                                    href="evento/28129/ingressos-para-luisa-sonza-escandalo-intimo-tour" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/28129-20231107104214.jpg"
                                                    alt="Luísa Sonza Escândalo Íntimo Tour">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Luísa Sonza Escândalo Íntimo Tour </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sexta, 24/05/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Espaço Unimed</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Jota Quest em JOTA25 Arenas em Belo Horizonte"
                                    href="evento/27813/ingressos-para-jota-quest-em-jota25-arenas-em-belo-horizonte"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27813-20231008125757.jpg"
                                                    alt="Jota Quest em JOTA25 Arenas em Belo Horizonte">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Jota Quest em JOTA25 Arenas em Belo Horizonte
                                                                </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 08/06/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Esplanada do Mineirão</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Jota Quest em JOTA25 Arenas em São Paulo"
                                    href="evento/27814/ingressos-para-jota-quest-em-jota25-arenas-em-sao-paulo"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27814-20231011124727.jpg"
                                                    alt="Jota Quest em JOTA25 Arenas em São Paulo">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Jota Quest em JOTA25 Arenas em São Paulo </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 15/06/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Allianz Parque</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="4 Amigos Fila de Piadas no Rio de Janeiro"
                                    href="evento/27984/ingressos-para-4-amigos-fila-de-piadas" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27984-20231024175310.jpg"
                                                    alt="4 Amigos Fila de Piadas no Rio de Janeiro">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    4 Amigos Fila de Piadas no Rio de Janeiro
                                                                </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Domingo, 30/06/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Jeunesse Arena</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="4 Amigos Fila de Piadas em Campinas"
                                    href="evento/27995/ingressos-para-4-amigos-fila-de-piadas" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27995-20231023182838.jpg"
                                                    alt="4 Amigos Fila de Piadas em Campinas">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    4 Amigos Fila de Piadas em Campinas </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sexta, 12/07/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Expo Dom Pedro</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Jota Quest em JOTA25 Arenas em Curitiba"
                                    href="evento/27812/ingressos-para-jota-quest-em-jota25-arenas-em-curitiba"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27812-20231008134049.jpg"
                                                    alt="Jota Quest em JOTA25 Arenas em Curitiba">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Jota Quest em JOTA25 Arenas em Curitiba </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 20/07/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Pedreira Paulo Leminski</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="SPC Acústico 2 O Último Encontro em São Bernardo do Campo"
                                    href="evento/27466/ingressos-para-spc-acustico-2-o-ultimo-encontro-em-sao-bernardo-do-campo"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27466.jpg"
                                                    alt="SPC Acústico 2 O Último Encontro em São Bernardo do Campo">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    SPC Acústico 2 O Último Encontro em São Bernardo do
                                                                    Campo </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 27/07/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Estância Alto da Serra</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Jota Quest em JOTA25 Arenas em Recife"
                                    href="evento/27816/ingressos-para-jota-quest-em-jota25-arenas-em-recife"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27816-20231008131519.jpg"
                                                    alt="Jota Quest em JOTA25 Arenas em Recife">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Jota Quest em JOTA25 Arenas em Recife </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 03/08/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Área Externa do Centro de
                                                                            Convenções</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="São Paulo Oktoberfest 2024"
                                    href="evento-composto/562/ingressos-para-sao-paulo-oktoberfest-2024" target="_self"
                                    style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/27895.jpg" alt="São Paulo Oktoberfest 2024">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    São Paulo Oktoberfest 2024 </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Quinta, 10/10/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Ginásio do Ibirapuera</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="Henry &amp; Klauss Illusion Show Uma Jornada Mágica"
                                    href="evento/28055/ingressos-para-henry-e-klauss-illusion-show-uma-jornada-magica"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/28055-20231028114902.jpg"
                                                    alt="Henry &amp; Klauss Illusion Show Uma Jornada Mágica">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    Henry &amp; Klauss Illusion Show Uma Jornada Mágica
                                                                </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 26/10/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Jeunesse Arena</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-6 col-md-3 col-lg-2">
                            <div
                                class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                                <a title="4 Amigos Fila de Piadas em Porto Alegre"
                                    href="evento/28148/ingressos-para-4-amigos-fila-de-piadas-em-porto-alegre"
                                    target="_self" style="text-decoration: none;">
                                    <div class="m-portlet__head m-portlet__head--fit">
                                        <div class="m-portlet__head-caption">¦nbsp;</div>
                                    </div>
                                    <div class="m-portlet__body m-portlet__body--no-padding">
                                        <div class="m-widget19">
                                            <div class="m-widget19__pic m-portlet-fit--top">
                                                <img src="images/28148-20231114153354.jpg"
                                                    alt="4 Amigos Fila de Piadas em Porto Alegre">
                                            </div>
                                            <div
                                                class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                                <div class="m-widget3">
                                                    <div class="m-widget3__item m--marginless">
                                                        <div class="m-widget3__header">
                                                            <div class="m-widget3__info">
                                                                <span class="m-widget3__username"
                                                                    style="display:block; height:40px; overflow:hidden; text-overflow:clip;">
                                                                    4 Amigos Fila de Piadas em Porto Alegre </span><br>
                                                                <div class="m-widget3__time" style="font-size:.90rem">
                                                                    Sábado, 09/11/2024 <p class="m--padding-top-10"
                                                                        style="display:block; height:42px; overflow:hidden; text-overflow:clip;">
                                                                        <strong>Auditório Araújo Vianna</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                    </div>

                    <div class="m-separator m-separator--dashed m--padding-top-20"></div>

                    <div class="row justify-content-md-center">
                        <div class="col-md-auto">
                            <div class="m-section">
                                <p class="m-section__heading">Redes Sociais</p>
                                <div class="m-section__content">
                                    <ul class="m-nav m-nav--inline m-icons">
                                        <li class="m-nav__item">
                                            <a href="https://www.facebook.com/Ticket Bravo" class="m-nav__link"
                                                title="Facebook" target="_blank" tabindex="0">
                                                <i class="m-nav__link-icon socicon-facebook">
                                                    <span class="m--hide">Facebook</span>
                                                </i>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="https://instagram.com/Ticket Bravo" class="m-nav__link"
                                                title="Instagram" target="_blank" tabindex="0">
                                                <i class="m-nav__link-icon socicon-instagram">
                                                    <span class="m--hide">Instagram</span>
                                                </i>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="https://twitter.com/Ticket Bravo" class="m-nav__link" title="Twitter"
                                                target="_blank" tabindex="0">
                                                <i class="m-nav__link-icon socicon-twitter">
                                                    <span class="m--hide">Twitter</span>
                                                </i>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="https://www.youtube.com/Ticket Bravo" class="m-nav__link"
                                                title="Youtube" target="_blank" tabindex="0">
                                                <i class="m-nav__link-icon socicon-youtube">
                                                    <span class="m--hide">Youtube</span>
                                                </i>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="https://www.linkedin.com/company/Ticket Bravo-" class="m-nav__link"
                                                title="Linkedin" target="_blank" tabindex="0">
                                                <i class="m-nav__link-icon socicon-linkedin">
                                                    <span class="m--hide">Linkedin</span>
                                                </i>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="https://open.spotify.com/user/Ticket Bravo" class="m-nav__link"
                                                title="Spotify" target="_blank" tabindex="0">
                                                <i class="m-nav__link-icon socicon-spotify">
                                                    <span class="m--hide">Spotify</span>
                                                </i>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="https://t.me/s/Ticket BravoIngressos" class="m-nav__link"
                                                title="Telegram" target="_blank" tabindex="0">
                                                <i class="m-nav__link-icon socicon-telegram">
                                                    <span class="m--hide">Telegram</span>
                                                </i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-auto m--margin-left-50-desktop">
                            <div class="m-section">
                                <p class="m-section__heading">Aplicativo</p>
                                <div class="m-section__content">
                                    <ul class="m-nav m-nav--inline m-icons">
                                        <li class="m-nav__item">
                                            <a href="https://itunes.apple.com/us/app/Ticket Bravo/id924966976?l=pt&amp;ls=1&amp;mt=8"
                                                class="m-nav__link" target="_blank">
                                                <i class="m-nav__link-icon socicon-apple">
                                                    <span class="m--hide">Apple Store</span>
                                                </i>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="https://play.google.com/store/apps/details?id=air.com.Ticket Bravo.Ticket Bravo&amp;hl=pt_BR"
                                                class="m-nav__link" target="_blank">
                                                <i class="m-nav__link-icon socicon-android">
                                                    <span class="m--hide">Play Store</span>
                                                </i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 m--align-center">
                            <div class="alert m-alert m-alert--default" role="alert">
                                <small>
                                    Todos os preços e condições comerciais estão sujeitos a alteração comercial sem
                                    prévio aviso.<br>
                                    <strong>Ticket Bravo Tecnologia e Soluções LTDA - CNPJ 10.316.298/0001-05</strong><br>
                                    Rua Borges de Figueiredo, 303 - Cj 224 - CEP: 03110-010 - São Paulo - SP
                                </small>
                            </div>
                        </div>
                    </div>

                </div>

                <script>
                    $(".owl-carousel").owlCarousel({
                        items: 1,
                        animateIn: "fadeIn(300)",
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 5000,
                        autoplayHoverPause: true,
                        dots: false,
                        nav: true,
                        navText: ['<i class="fa fa-arrow-alt-circle-left" style="font-size: 40px;"></i>', '<i class="fa fa-arrow-alt-circle-right" style="font-size: 40px;"></i>'],
                    });
                </script>

                <!-- Google Analytics -->
                <script>
                    window.addEventListener("load", function (event) {
                        dataLayer.push({
                            ecommerce: null
                        });
                        dataLayer.push({ "event": "view_item_list", "ecommerce": { "items": [{ "item_id": "27801", "item_name": "Gloria Groove no show Noites de Gloria", "data_evento": "2023-11-17 21:00:00", "nome_organizador": "Eda Shows e Eventos Ltda", "item_brand": "Eda Shows e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27801", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Espa\u00e7o Unimed", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27278", "item_name": "Seresta e Sofr\u00eancia com Rafinha O Big Love, Nadson O Ferinha e mais", "data_evento": "2023-11-17 21:00:00", "nome_organizador": "Est\u00e2ncia Alto da Serra", "item_brand": "Est\u00e2ncia Alto da Serra", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27278", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Est\u00e2ncia Alto da Serra", "local_evento_bairro": "Riacho Grande", "local_evento_cidade": "S. B. do Campo", "classificacao_evento": null }, { "item_id": "27506", "item_name": "Rio Freestyle Motocross", "data_evento": "2023-11-18 17:00:00", "nome_organizador": "Liga Nacional de Esportes a Motor", "item_brand": "Liga Nacional de Esportes a Motor", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27506", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Jeunesse Arena", "local_evento_bairro": "Barra da Tijuca", "local_evento_cidade": "Rio de Janeiro", "classificacao_evento": null }, { "item_id": "27158", "item_name": "Djavan Turn\u00ea D no Arama\u00e7an", "data_evento": "2023-11-18 20:00:00", "nome_organizador": "Makerismo Produ\u00e7\u00e3o, Promo\u00e7\u00e3o e Eventos Ltda", "item_brand": "Makerismo Produ\u00e7\u00e3o, Promo\u00e7\u00e3o e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27158", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Clube Atl\u00e9tico Arama\u00e7an", "local_evento_bairro": "Vila Am\u00e9rica", "local_evento_cidade": "Santo Andr\u00e9", "classificacao_evento": null }, { "item_id": "28109", "item_name": "Encontro dos Conterr\u00e2neos com Washington Brasileiro, Sor\u00f3 Silva e mais", "data_evento": "2023-11-19 13:00:00", "nome_organizador": "Sid Festas e Eventos LTDA", "item_brand": "Sid Festas e Eventos LTDA", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "28109", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Arena Sertaneja", "local_evento_bairro": "Penha", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27209", "item_name": "Reggae Live Station com The Wailers, Ponto de Equil\u00edbrio e Planta & Raiz", "data_evento": "2023-11-19 17:00:00", "nome_organizador": "Eda Shows e Eventos Ltda", "item_brand": "Eda Shows e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27209", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Espa\u00e7o Unimed", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27889", "item_name": "\u00c0 Vontade com Zezo Potiguar, Ra\u00ed Saia Rodada e Luan Estilizado", "data_evento": "2023-11-19 20:00:00", "nome_organizador": "CTN - Centro de Tradi\u00e7\u00f5es Nordestinas", "item_brand": "CTN - Centro de Tradi\u00e7\u00f5es Nordestinas", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27889", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "CTN - Centro de Tradi\u00e7\u00f5es Nordestinas", "local_evento_bairro": "Bairro do Lim\u00e3o", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27620", "item_name": "Douglas & Vin\u00edcius", "data_evento": "2023-11-19 20:00:00", "nome_organizador": "Villa Country Maclemon Ltda", "item_brand": "Villa Country Maclemon Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27620", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Villa Country", "local_evento_bairro": "\u00c1gua Branca", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27290", "item_name": "Fernandinho, Turn\u00ea \u00c1lbum \u00danico", "data_evento": "2023-11-22 18:30:00", "nome_organizador": "Eda Shows e Eventos Ltda", "item_brand": "Eda Shows e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27290", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Espa\u00e7o Unimed", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27498", "item_name": "Juan Duran", "data_evento": "2023-11-23 20:00:00", "nome_organizador": "Duran Self Storage e Servi\u00e7o Ltda", "item_brand": "Duran Self Storage e Servi\u00e7o Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27498", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Espa\u00e7o Unimed", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27674", "item_name": "Maiara & Maraisa", "data_evento": "2023-11-23 20:00:00", "nome_organizador": "Villa Country Maclemon Ltda", "item_brand": "Villa Country Maclemon Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27674", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Villa Country", "local_evento_bairro": "\u00c1gua Branca", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27883", "item_name": "Novabrasil Apresenta Silva", "data_evento": "2023-11-24 20:00:00", "nome_organizador": "Eda Shows e Eventos Ltda", "item_brand": "Eda Shows e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27883", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Espa\u00e7o Unimed", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27521", "item_name": "Daniel", "data_evento": "2023-11-24 21:00:00", "nome_organizador": "Mardan Produ\u00e7\u00f5es Culturais e Eventos Ltda", "item_brand": "Mardan Produ\u00e7\u00f5es Culturais e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27521", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Espa\u00e7o na Mata", "local_evento_bairro": "Jardim Aeroporto", "local_evento_cidade": "Botucatu", "classificacao_evento": null }, { "item_id": "27880", "item_name": "Sambadela A Roda de Samba da Thelminha com Vou Pro Sereno", "data_evento": "2023-11-26 15:00:00", "nome_organizador": "Music2 Publicidade Digital Ltda.", "item_brand": "Music2 Publicidade Digital Ltda.", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27880", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Mirante Esperia", "local_evento_bairro": "Parque Anhembi", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27546", "item_name": "Gabriel e Shirley Show de Natal", "data_evento": "2023-11-26 16:00:00", "nome_organizador": "Eda Shows e Eventos Ltda", "item_brand": "Eda Shows e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27546", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Espa\u00e7o Unimed", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27903", "item_name": "Caetano Veloso Data Extra", "data_evento": "2023-11-27 19:30:00", "nome_organizador": "Eda Shows e Eventos Ltda", "item_brand": "Eda Shows e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27903", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Espa\u00e7o Unimed", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27865", "item_name": "FKJ", "data_evento": "2023-11-29 21:00:00", "nome_organizador": "Audio Promo\u00e7\u00f5es e Eventos Ltda", "item_brand": "Audio Promo\u00e7\u00f5es e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27865", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Audio Eventos", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "28105", "item_name": "\u00c9 Pra Beber com Raquel dos Teclados, Silvanno Sales, L\u00e9o Magalh\u00e3es e mais", "data_evento": "2023-12-01 20:00:00", "nome_organizador": "CTN - Centro de Tradi\u00e7\u00f5es Nordestinas", "item_brand": "CTN - Centro de Tradi\u00e7\u00f5es Nordestinas", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "28105", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "CTN - Centro de Tradi\u00e7\u00f5es Nordestinas", "local_evento_bairro": "Bairro do Lim\u00e3o", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27716", "item_name": "Maria Cec\u00edlia & Rodolfo", "data_evento": "2023-12-01 20:00:00", "nome_organizador": "Villa Country Maclemon Ltda", "item_brand": "Villa Country Maclemon Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27716", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Villa Country", "local_evento_bairro": "\u00c1gua Branca", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27989", "item_name": "Kamaitachi Lan\u00e7amento do \u00c1lbum Festa", "data_evento": "2023-12-02 19:00:00", "nome_organizador": "Audio Promo\u00e7\u00f5es e Eventos Ltda", "item_brand": "Audio Promo\u00e7\u00f5es e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27989", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Audio Eventos", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "28082", "item_name": "Djavan Data Extra", "data_evento": "2023-12-03 18:00:00", "nome_organizador": "Gl Events Centro de Conven\u00e7\u00f5es Ltda", "item_brand": "Gl Events Centro de Conven\u00e7\u00f5es Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "28082", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Jeunesse Arena", "local_evento_bairro": "Barra da Tijuca", "local_evento_cidade": "Rio de Janeiro", "classificacao_evento": null }, { "item_id": "28164", "item_name": "Sonhos de Natal", "data_evento": "2023-12-06 19:00:00", "nome_organizador": "Espa\u00e7o Win e Buffet LTDA - EPP", "item_brand": "Espa\u00e7o Win e Buffet LTDA - EPP", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "28164", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Espa\u00e7o Win", "local_evento_bairro": "Campestre", "local_evento_cidade": "Santo Andr\u00e9", "classificacao_evento": null }, { "item_id": "28111", "item_name": "Jonas Medeiros", "data_evento": "2023-12-08 20:00:00", "nome_organizador": "Villa Country Maclemon Ltda", "item_brand": "Villa Country Maclemon Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "28111", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Villa Country", "local_evento_bairro": "\u00c1gua Branca", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27710", "item_name": "Maiara & Maraisa e Hugo & Guilherme", "data_evento": "2023-12-08 20:00:00", "nome_organizador": "CTN - Centro de Tradi\u00e7\u00f5es Nordestinas", "item_brand": "CTN - Centro de Tradi\u00e7\u00f5es Nordestinas", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27710", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "CTN - Centro de Tradi\u00e7\u00f5es Nordestinas", "local_evento_bairro": "Bairro do Lim\u00e3o", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27644", "item_name": "Garota Vip S\u00e3o Paulo com Wesley Safad\u00e3o, Z\u00e9 Neto & Cristiano, Dennis DJ e mais", "data_evento": "2023-12-09 12:00:00", "nome_organizador": "Wiggle Produ\u00e7\u00e3o de Eventos SPE Eireli", "item_brand": "Wiggle Produ\u00e7\u00e3o de Eventos SPE Eireli", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27644", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Distrito Anhembi", "local_evento_bairro": "Santana", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "28002", "item_name": "Festival Ecstatic Dance Brasil Baile do Novo Mundo M\u00fasica, Dan\u00e7a e Conex\u00e3o", "data_evento": "2023-12-10 09:00:00", "nome_organizador": "Audio Promo\u00e7\u00f5es e Eventos Ltda", "item_brand": "Audio Promo\u00e7\u00f5es e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "28002", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Audio Eventos", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "28133", "item_name": "Enaldinho em O Mist\u00e9rio do Circo Sess\u00e3o Extra", "data_evento": "2023-12-10 12:00:00", "nome_organizador": "Eda Shows e Eventos Ltda", "item_brand": "Eda Shows e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "28133", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Espa\u00e7o Unimed", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "28020", "item_name": "Juntas Festival com Liniker, Vanessa da Mata e Valesca Popozuda", "data_evento": "2023-12-10 12:00:00", "nome_organizador": "Hype Produ\u00e7\u00f5es Culturais Ltda", "item_brand": "Hype Produ\u00e7\u00f5es Culturais Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "28020", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Parque Villa-Lobos", "local_evento_bairro": "Vila Hamburguesa", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27558", "item_name": "Enaldinho em O Mist\u00e9rio do Circo", "data_evento": "2023-12-10 17:00:00", "nome_organizador": "Eda Shows e Eventos Ltda", "item_brand": "Eda Shows e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27558", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Espa\u00e7o Unimed", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27808", "item_name": "P\u00e9ricles e Maestro Jo\u00e3o Carlos Martins Regendo a Orquestra Bachiana Filarm\u00f4nica", "data_evento": "2023-12-11 19:30:00", "nome_organizador": "Eda Shows e Eventos Ltda", "item_brand": "Eda Shows e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27808", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Espa\u00e7o Unimed", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27798", "item_name": "Jorge & Mateus", "data_evento": "2023-12-14 20:00:00", "nome_organizador": "Villa Country Maclemon Ltda", "item_brand": "Villa Country Maclemon Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27798", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Villa Country", "local_evento_bairro": "\u00c1gua Branca", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27948", "item_name": "Festa do Branco com Jo\u00e3o Gomes, Tarc\u00edsio do Acordeon e Vitor Fernandes", "data_evento": "2023-12-15 20:00:00", "nome_organizador": "CTN - Centro de Tradi\u00e7\u00f5es Nordestinas", "item_brand": "CTN - Centro de Tradi\u00e7\u00f5es Nordestinas", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27948", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "CTN - Centro de Tradi\u00e7\u00f5es Nordestinas", "local_evento_bairro": "Bairro do Lim\u00e3o", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27992", "item_name": "Sandy", "data_evento": "2023-12-16 19:00:00", "nome_organizador": "Oceania Divulga\u00e7\u00e3o Interativa Ltda Me", "item_brand": "Oceania Divulga\u00e7\u00e3o Interativa Ltda Me", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27992", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Royal Palm Hall", "local_evento_bairro": "Jardim Nova Calif\u00f3rnia", "local_evento_cidade": "Campinas", "classificacao_evento": null }, { "item_id": "27723", "item_name": "Restart Pra Voc\u00ea Lembrar em Bel\u00e9m", "data_evento": "2023-12-16 20:00:00", "nome_organizador": "Constellation Publicidade Digital Ltda", "item_brand": "Constellation Publicidade Digital Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27723", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Espa\u00e7o N\u00e1utico Marine Club", "local_evento_bairro": "Guam\u00e1", "local_evento_cidade": "Bel\u00e9m", "classificacao_evento": null }, { "item_id": "27852", "item_name": "Jorge & Mateus e Pedro Libe", "data_evento": "2023-12-16 21:30:00", "nome_organizador": "Est\u00e2ncia Alto da Serra", "item_brand": "Est\u00e2ncia Alto da Serra", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27852", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Est\u00e2ncia Alto da Serra", "local_evento_bairro": "Riacho Grande", "local_evento_cidade": "S. B. do Campo", "classificacao_evento": null }, { "item_id": "27087", "item_name": "Carol Biazin REVERSA TOUR", "data_evento": "2023-12-17 18:00:00", "nome_organizador": "Audio Promo\u00e7\u00f5es e Eventos Ltda", "item_brand": "Audio Promo\u00e7\u00f5es e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27087", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Audio Eventos", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27519", "item_name": "Seu Jorge e Daniel Jobim interpretam Tom Jobim", "data_evento": "2023-12-17 19:00:00", "nome_organizador": "Eda Shows e Eventos Ltda", "item_brand": "Eda Shows e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27519", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Espa\u00e7o Unimed", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27726", "item_name": "Festa do Branco com Murilo Huff", "data_evento": "2023-12-22 20:00:00", "nome_organizador": "Villa Country Maclemon Ltda", "item_brand": "Villa Country Maclemon Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27726", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Villa Country", "local_evento_bairro": "\u00c1gua Branca", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27727", "item_name": "Maur\u00edcio Manieri e Jon Secada", "data_evento": "2023-12-22 20:00:00", "nome_organizador": "Eda Shows e Eventos Ltda", "item_brand": "Eda Shows e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27727", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Espa\u00e7o Unimed", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27651", "item_name": "Perfect Life com Illusionize", "data_evento": "2023-12-29 14:00:00", "nome_organizador": "Uniglobe Eventos Sociedade Unipessoal LTDA", "item_brand": "Uniglobe Eventos Sociedade Unipessoal LTDA", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27651", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Sea Club Ilhabela", "local_evento_bairro": "Saco da Capela", "local_evento_cidade": "Ilhabela", "classificacao_evento": null }, { "item_id": "27655", "item_name": "Inimigos da HP", "data_evento": "2023-12-30 14:00:00", "nome_organizador": "Uniglobe Eventos Sociedade Unipessoal LTDA", "item_brand": "Uniglobe Eventos Sociedade Unipessoal LTDA", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27655", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Sea Club Ilhabela", "local_evento_bairro": "Saco da Capela", "local_evento_cidade": "Ilhabela", "classificacao_evento": null }, { "item_id": "27561", "item_name": "R\u00e9veillon da Garoa 2024 com Jorge Ben Jor, Matheus & Kauan, JETLAG e mais DJs", "data_evento": "2023-12-31 21:00:00", "nome_organizador": "Eda Shows e Eventos Ltda", "item_brand": "Eda Shows e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27561", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Espa\u00e7o Unimed", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27659", "item_name": "R\u00e9veillon Iluminight", "data_evento": "2023-12-31 22:00:00", "nome_organizador": "Uniglobe Eventos Sociedade Unipessoal LTDA", "item_brand": "Uniglobe Eventos Sociedade Unipessoal LTDA", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27659", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Sea Club Ilhabela", "local_evento_bairro": "Saco da Capela", "local_evento_cidade": "Ilhabela", "classificacao_evento": null }, { "item_id": "28151", "item_name": "Maiara & Maraisa em Santos", "data_evento": "2024-01-07 15:00:00", "nome_organizador": "Soh Vamos Eventos Eireli", "item_brand": "Soh Vamos Eventos Eireli", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "28151", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Clube Portu\u00e1rios", "local_evento_bairro": "Marap\u00e9", "local_evento_cidade": "Santos", "classificacao_evento": null }, { "item_id": "27534", "item_name": "Restart Pra Voc\u00ea Lembrar em Salvador", "data_evento": "2024-01-13 20:00:00", "nome_organizador": "Constellation Publicidade Digital Ltda", "item_brand": "Constellation Publicidade Digital Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27534", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Armazem Convention", "local_evento_bairro": "Jardim do Jockey", "local_evento_cidade": "Lauro de Freitas", "classificacao_evento": null }, { "item_id": "27919", "item_name": "Arena Carnaval com Belo e Sorriso Maroto", "data_evento": "2024-01-14 12:00:00", "nome_organizador": "Hype Produ\u00e7\u00f5es Culturais Ltda", "item_brand": "Hype Produ\u00e7\u00f5es Culturais Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27919", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Memorial da Am\u00e9rica Latina", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27640", "item_name": "SHAMANGRA", "data_evento": "2024-01-14 16:00:00", "nome_organizador": "Audio Promo\u00e7\u00f5es e Eventos Ltda", "item_brand": "Audio Promo\u00e7\u00f5es e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27640", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Audio Eventos", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27797", "item_name": "Somos 90 com P\u00e9ricles e Pixote", "data_evento": "2024-01-20 17:00:00", "nome_organizador": "E&M Shows e Eventos", "item_brand": "E&M Shows e Eventos", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27797", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Clube Atl\u00e9tico Juventus", "local_evento_bairro": "Mooca", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27530", "item_name": "Restart Pra Voc\u00ea Lembrar em Recife", "data_evento": "2024-01-20 20:00:00", "nome_organizador": "Constellation Publicidade Digital Ltda", "item_brand": "Constellation Publicidade Digital Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27530", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Classic Hall", "local_evento_bairro": "Salgadinho", "local_evento_cidade": "Olinda", "classificacao_evento": null }, { "item_id": "28114", "item_name": "Jorge & Mateus", "data_evento": "2024-01-24 20:00:00", "nome_organizador": "CTN - Centro de Tradi\u00e7\u00f5es Nordestinas", "item_brand": "CTN - Centro de Tradi\u00e7\u00f5es Nordestinas", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "28114", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "CTN - Centro de Tradi\u00e7\u00f5es Nordestinas", "local_evento_bairro": "Bairro do Lim\u00e3o", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27938", "item_name": "Os Paralamas do Sucesso e Nando Reis no Juventus", "data_evento": "2024-01-24 21:00:00", "nome_organizador": "Makerismo Produ\u00e7\u00e3o, Promo\u00e7\u00e3o e Eventos Ltda", "item_brand": "Makerismo Produ\u00e7\u00e3o, Promo\u00e7\u00e3o e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27938", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Clube Atl\u00e9tico Juventus", "local_evento_bairro": "Mooca", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "28046", "item_name": "Baco Exu do Blues", "data_evento": "2024-01-26 21:00:00", "nome_organizador": "Eda Shows e Eventos Ltda", "item_brand": "Eda Shows e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "28046", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Espa\u00e7o Unimed", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27788", "item_name": "Lulu Santos Bar\u00edtono no Arama\u00e7an", "data_evento": "2024-01-26 21:00:00", "nome_organizador": "Makerismo Produ\u00e7\u00e3o, Promo\u00e7\u00e3o e Eventos Ltda", "item_brand": "Makerismo Produ\u00e7\u00e3o, Promo\u00e7\u00e3o e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27788", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Clube Atl\u00e9tico Arama\u00e7an", "local_evento_bairro": "Vila Am\u00e9rica", "local_evento_cidade": "Santo Andr\u00e9", "classificacao_evento": null }, { "item_id": "27876", "item_name": "Marcelo Falc\u00e3o e Charlie Brown Jr. 30 Anos no Juventus", "data_evento": "2024-01-26 21:00:00", "nome_organizador": "Makerismo Produ\u00e7\u00e3o, Promo\u00e7\u00e3o e Eventos Ltda", "item_brand": "Makerismo Produ\u00e7\u00e3o, Promo\u00e7\u00e3o e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27876", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Clube Atl\u00e9tico Juventus", "local_evento_bairro": "Mooca", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27752", "item_name": "Leonardo", "data_evento": "2024-01-27 20:30:00", "nome_organizador": "Eda Shows e Eventos Ltda", "item_brand": "Eda Shows e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27752", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Espa\u00e7o Unimed", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27811", "item_name": "Jota Quest em JOTA25 Arenas no Rio de Janeiro", "data_evento": "2024-02-03 16:00:00", "nome_organizador": "Campo da Producao, Eventos e Promocoes Ltda", "item_brand": "Campo da Producao, Eventos e Promocoes Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27811", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Marina da Gl\u00f3ria - Rio de Janeiro", "local_evento_bairro": "Gl\u00f3ria", "local_evento_cidade": "Rio de Janeiro", "classificacao_evento": null }, { "item_id": "27500", "item_name": "Gueri-Gueri Baile De Carnaval 2024", "data_evento": "2024-02-03 17:00:00", "nome_organizador": "Visibilidade Multidivulga\u00e7\u00e3o Eireli", "item_brand": "Visibilidade Multidivulga\u00e7\u00e3o Eireli", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27500", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Villaggio JK Eventos", "local_evento_bairro": "Vila Ol\u00edmpia", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "28040", "item_name": "Lulu Santos Bar\u00edtono no Juventus", "data_evento": "2024-02-03 20:00:00", "nome_organizador": "Makerismo Produ\u00e7\u00e3o, Promo\u00e7\u00e3o e Eventos Ltda", "item_brand": "Makerismo Produ\u00e7\u00e3o, Promo\u00e7\u00e3o e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "28040", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Clube Atl\u00e9tico Juventus", "local_evento_bairro": "Mooca", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27632", "item_name": "Camarote 011 Carnaval 2024 Acesso II S\u00e1bado", "data_evento": "2024-02-03 21:00:00", "nome_organizador": "Rml Eventos Esportivos Eireli.", "item_brand": "Rml Eventos Esportivos Eireli.", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27632", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Samb\u00f3dromo do Anhembi", "local_evento_bairro": "Santana", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27770", "item_name": "Camarote Essep\u00ea Sexta-Feira com P\u00e9ricles", "data_evento": "2024-02-09 19:00:00", "nome_organizador": "Hype Produ\u00e7\u00f5es Culturais Ltda", "item_brand": "Hype Produ\u00e7\u00f5es Culturais Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27770", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Samb\u00f3dromo do Anhembi", "local_evento_bairro": "Santana", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27633", "item_name": "Camarote 011 Carnaval 2024 Acesso Especial Sexta-feira", "data_evento": "2024-02-09 21:00:00", "nome_organizador": "Rml Eventos Esportivos Eireli.", "item_brand": "Rml Eventos Esportivos Eireli.", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27633", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Samb\u00f3dromo do Anhembi", "local_evento_bairro": "Santana", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27773", "item_name": "Camarote Essep\u00ea S\u00e1bado com Sorriso Maroto e Jo\u00e3o Gomes", "data_evento": "2024-02-10 19:00:00", "nome_organizador": "Hype Produ\u00e7\u00f5es Culturais Ltda", "item_brand": "Hype Produ\u00e7\u00f5es Culturais Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27773", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Samb\u00f3dromo do Anhembi", "local_evento_bairro": "Santana", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27634", "item_name": "Camarote 011 Carnaval 2024 Acesso Especial S\u00e1bado com Xande de Pilares", "data_evento": "2024-02-10 21:00:00", "nome_organizador": "Rml Eventos Esportivos Eireli.", "item_brand": "Rml Eventos Esportivos Eireli.", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27634", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Samb\u00f3dromo do Anhembi", "local_evento_bairro": "Santana", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27774", "item_name": "Camarote Essep\u00ea Domingo com Pixote e Mari Fernandez", "data_evento": "2024-02-11 19:00:00", "nome_organizador": "Hype Produ\u00e7\u00f5es Culturais Ltda", "item_brand": "Hype Produ\u00e7\u00f5es Culturais Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27774", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Samb\u00f3dromo do Anhembi", "local_evento_bairro": "Santana", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27635", "item_name": "Camarote 011 Carnaval 2024 Acesso I Domingo", "data_evento": "2024-02-11 21:00:00", "nome_organizador": "Rml Eventos Esportivos Eireli.", "item_brand": "Rml Eventos Esportivos Eireli.", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27635", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Samb\u00f3dromo do Anhembi", "local_evento_bairro": "Santana", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27775", "item_name": "Camarote Essep\u00ea S\u00e1bado Campe\u00e3s com Belo", "data_evento": "2024-02-17 19:00:00", "nome_organizador": "Hype Produ\u00e7\u00f5es Culturais Ltda", "item_brand": "Hype Produ\u00e7\u00f5es Culturais Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27775", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Samb\u00f3dromo do Anhembi", "local_evento_bairro": "Santana", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27637", "item_name": "Camarote 011 Carnaval 2024 Desfile das Campe\u00e3s Sexta-feira com Turma do Pagode", "data_evento": "2024-02-17 21:00:00", "nome_organizador": "Rml Eventos Esportivos Eireli.", "item_brand": "Rml Eventos Esportivos Eireli.", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27637", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Samb\u00f3dromo do Anhembi", "local_evento_bairro": "Santana", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "28118", "item_name": "Z\u00e9 Ramalho Show dos Sucessos", "data_evento": "2024-03-01 20:30:00", "nome_organizador": "Eda Shows e Eventos Ltda", "item_brand": "Eda Shows e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "28118", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Espa\u00e7o Unimed", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "28008", "item_name": "Lamparina Lan\u00e7amento do Disco & Rachel Reis", "data_evento": "2024-03-01 22:00:00", "nome_organizador": "Audio Promo\u00e7\u00f5es e Eventos Ltda", "item_brand": "Audio Promo\u00e7\u00f5es e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "28008", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Audio Eventos", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27985", "item_name": "4 Amigos Fila de Piadas em Santos", "data_evento": "2024-03-15 18:30:00", "nome_organizador": "Campo da Producao, Eventos e Promocoes Ltda", "item_brand": "Campo da Producao, Eventos e Promocoes Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27985", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Blue Med Convention Center", "local_evento_bairro": "Ponta da Praia", "local_evento_cidade": "Santos", "classificacao_evento": null }, { "item_id": "28110", "item_name": "Air Supply Rio de Janeiro", "data_evento": "2024-04-18 19:00:00", "nome_organizador": "Ippc Publicidade Ltda", "item_brand": "Ippc Publicidade Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "28110", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Vivo Rio", "local_evento_bairro": "Gl\u00f3ria", "local_evento_cidade": "Rio de Janeiro", "classificacao_evento": null }, { "item_id": "27888", "item_name": "Megadeth", "data_evento": "2024-04-18 19:00:00", "nome_organizador": "Mercury Live Brasil Shows e Eventos Ltda", "item_brand": "Mercury Live Brasil Shows e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27888", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Espa\u00e7o Unimed", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "28072", "item_name": "Air Supply S\u00e3o Paulo", "data_evento": "2024-04-21 18:00:00", "nome_organizador": "Ippc Publicidade Ltda", "item_brand": "Ippc Publicidade Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "28072", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Espa\u00e7o Unimed", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27982", "item_name": "Henry & Klauss Illusion Show Uma Jornada M\u00e1gica", "data_evento": "2024-04-27 19:30:00", "nome_organizador": "Campo da Producao, Eventos e Promocoes Ltda", "item_brand": "Campo da Producao, Eventos e Promocoes Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27982", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Sal\u00e3o de Atos da PUCRS", "local_evento_bairro": "Praia de Belas", "local_evento_cidade": "Porto Alegre", "classificacao_evento": null }, { "item_id": "28162", "item_name": "Est\u00e2ncia Pet", "data_evento": "2024-04-28 10:00:00", "nome_organizador": "Est\u00e2ncia Alto da Serra", "item_brand": "Est\u00e2ncia Alto da Serra", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "28162", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Est\u00e2ncia Alto da Serra", "local_evento_bairro": "Riacho Grande", "local_evento_cidade": "S. B. do Campo", "classificacao_evento": null }, { "item_id": "27983", "item_name": "Henry & Klauss Illusion Show Uma Jornada M\u00e1gica", "data_evento": "2024-04-28 18:00:00", "nome_organizador": "Campo da Producao, Eventos e Promocoes Ltda", "item_brand": "Campo da Producao, Eventos e Promocoes Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27983", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Sal\u00e3o de Atos da PUCRS", "local_evento_bairro": "Praia de Belas", "local_evento_cidade": "Porto Alegre", "classificacao_evento": null }, { "item_id": "28156", "item_name": "Um Baita Festival com The Calling, Capital Inicial, Nando Reis e mais", "data_evento": "2024-05-11 14:00:00", "nome_organizador": "Oceania Divulga\u00e7\u00e3o Interativa Ltda Me", "item_brand": "Oceania Divulga\u00e7\u00e3o Interativa Ltda Me", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "28156", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Fazenda Santa Margarida", "local_evento_bairro": "Joaquim Eg\u00eddio", "local_evento_cidade": "Campinas", "classificacao_evento": null }, { "item_id": "27550", "item_name": "Thiaguinho Turn\u00ea Meu Nome \u00e9 Thiago Andr\u00e9 com Pixote", "data_evento": "2024-05-24 20:30:00", "nome_organizador": "E&M Shows e Eventos", "item_brand": "E&M Shows e Eventos", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27550", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Internacional Eventos", "local_evento_bairro": "Vila Herm\u00ednia", "local_evento_cidade": "Guarulhos", "classificacao_evento": null }, { "item_id": "28129", "item_name": "Lu\u00edsa Sonza Esc\u00e2ndalo \u00cdntimo Tour", "data_evento": "2024-05-24 21:00:00", "nome_organizador": "Eda Shows e Eventos Ltda", "item_brand": "Eda Shows e Eventos Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "28129", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Espa\u00e7o Unimed", "local_evento_bairro": "Barra Funda", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27813", "item_name": "Jota Quest em JOTA25 Arenas em Belo Horizonte", "data_evento": "2024-06-08 15:00:00", "nome_organizador": "Campo da Producao, Eventos e Promocoes Ltda", "item_brand": "Campo da Producao, Eventos e Promocoes Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27813", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Esplanada do Mineir\u00e3o", "local_evento_bairro": "S\u00e3o Luiz", "local_evento_cidade": "Belo Horizonte", "classificacao_evento": null }, { "item_id": "27814", "item_name": "Jota Quest em JOTA25 Arenas em S\u00e3o Paulo", "data_evento": "2024-06-15 16:00:00", "nome_organizador": "Campo da Producao, Eventos e Promocoes Ltda", "item_brand": "Campo da Producao, Eventos e Promocoes Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27814", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Allianz Parque", "local_evento_bairro": "\u00c1gua Branca", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "27984", "item_name": "4 Amigos Fila de Piadas no Rio de Janeiro", "data_evento": "2024-06-30 20:00:00", "nome_organizador": "Campo da Producao, Eventos e Promocoes Ltda", "item_brand": "Campo da Producao, Eventos e Promocoes Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27984", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Jeunesse Arena", "local_evento_bairro": "Barra da Tijuca", "local_evento_cidade": "Rio de Janeiro", "classificacao_evento": null }, { "item_id": "27995", "item_name": "4 Amigos Fila de Piadas em Campinas", "data_evento": "2024-07-12 20:00:00", "nome_organizador": "Campo da Producao, Eventos e Promocoes Ltda", "item_brand": "Campo da Producao, Eventos e Promocoes Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27995", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Expo Dom Pedro", "local_evento_bairro": "Jardim Santa Genebra", "local_evento_cidade": "Campinas", "classificacao_evento": null }, { "item_id": "27812", "item_name": "Jota Quest em JOTA25 Arenas em Curitiba", "data_evento": "2024-07-20 17:00:00", "nome_organizador": "Campo da Producao, Eventos e Promocoes Ltda", "item_brand": "Campo da Producao, Eventos e Promocoes Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27812", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Pedreira Paulo Leminski", "local_evento_bairro": "Pilarzinho", "local_evento_cidade": "Curitiba", "classificacao_evento": null }, { "item_id": "27466", "item_name": "SPC Ac\u00fastico 2 O \u00daltimo Encontro em S\u00e3o Bernardo do Campo", "data_evento": "2024-07-27 21:00:00", "nome_organizador": "Est\u00e2ncia Alto da Serra", "item_brand": "Est\u00e2ncia Alto da Serra", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27466", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Est\u00e2ncia Alto da Serra", "local_evento_bairro": "Riacho Grande", "local_evento_cidade": "S. B. do Campo", "classificacao_evento": null }, { "item_id": "27816", "item_name": "Jota Quest em JOTA25 Arenas em Recife", "data_evento": "2024-08-03 18:00:00", "nome_organizador": "Campo da Producao, Eventos e Promocoes Ltda", "item_brand": "Campo da Producao, Eventos e Promocoes Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27816", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "\u00c1rea Externa do Centro de Conven\u00e7\u00f5es", "local_evento_bairro": "Salgadinho", "local_evento_cidade": "Olinda", "classificacao_evento": null }, { "item_id": "27895", "item_name": "S\u00e3o Paulo Oktoberfest 2024", "data_evento": "2024-10-10 18:00:00", "nome_organizador": "Imm Spoktober Cultura e Entretenimento Ltda", "item_brand": "Imm Spoktober Cultura e Entretenimento Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "27895", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Gin\u00e1sio do Ibirapuera", "local_evento_bairro": "Para\u00edso", "local_evento_cidade": "S\u00e3o Paulo", "classificacao_evento": null }, { "item_id": "28055", "item_name": "Henry & Klauss Illusion Show Uma Jornada M\u00e1gica", "data_evento": "2024-10-26 18:30:00", "nome_organizador": "Campo da Producao, Eventos e Promocoes Ltda", "item_brand": "Campo da Producao, Eventos e Promocoes Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "28055", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Jeunesse Arena", "local_evento_bairro": "Barra da Tijuca", "local_evento_cidade": "Rio de Janeiro", "classificacao_evento": null }, { "item_id": "28148", "item_name": "4 Amigos Fila de Piadas em Porto Alegre", "data_evento": "2024-11-09 19:00:00", "nome_organizador": "Campo da Producao, Eventos e Promocoes Ltda", "item_brand": "Campo da Producao, Eventos e Promocoes Ltda", "item_category": null, "item_category2": null, "item_category3": null, "item_category4": null, "item_category5": null, "item_variant": null, "item_list_name": null, "item_list_id": "28148", "price": null, "coupon": null, "discount": 0, "quantity": null, "local_evento": "Audit\u00f3rio Ara\u00fajo Vianna", "local_evento_bairro": "Bom Fim", "local_evento_cidade": "Porto Alegre", "classificacao_evento": null }] } });
                    });
                </script>
                <div id="pcdLeiModal" class="modal fade" style="z-index: 9000000">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <p class="modal-title">PCD - Lei Federal 12.933/2013</p>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body m--align-left">
                                <div class="m-scrollable" data-scrollbar-shown="true" data-scrollable="true"
                                    style="max-height: 400px">
                                    <p><strong>PCD - Pessoas com Deficiência (PCD) e/ou Portadores de Necessidades
                                            Especiais (PNE) (Lei Federal 12.933/2013):</strong></p>
                                    <p>Possuem o benefício da meia-entrada o portador com deficiência (PCD) e/ou
                                        portadores de necessidades especiais e o seu acompanhante. Para a compra,
                                        retirada e acesso ao evento, é obrigatório apresentar o documento de PCD ou
                                        laudo médico e o Documento de Identidade original (RG) ou cópia autenticada, (o
                                        acompanhante poderá adquirir os dois ingressos, desde que o mesmo esteja com
                                        todos comprovantes em mãos). Caso não seja comprovado o direito a meia-entrada
                                        tipo (PCD) o evento/organizador poderá cobrar a diferença do preço da inteira do
                                        lote vigente no acesso ao evento.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer id="footer" class="m-grid__item m-footer ">
            <div
                class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
                <div class="m-footer__wrapper">
                    <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                        <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                            <span class="m-footer__copyright">
                                Ticket Bravo © Todos os direitos reservados.
                            </span>
                        </div>
                        <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
                            <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
                                <li class="m-nav__item">
                                    <a href="/central-de-ajuda" class="m-nav__link" target="_blank">
                                        <span class="m-nav__link-text">Central de Ajuda</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="js/scripts.bundle.js"></script>
    <script src="js/messages_ptbr.js"></script>

    <script>
        var e;

        var BootstrapSelect = {
            init: function () {
                $(".m_selectpicker").selectpicker();
            }
        };

        jQuery(document).ready(function () {
            BootstrapSelect.init();
        });
    </script>

    <!-- BEGIN KONDUTO CODE -->
    <script type="text/javascript">
        var __kdt = __kdt || [];
        __kdt.push({
            "public_key": "P33F4D91EB2"
        });
        (function () {
            var kdt = document.createElement('script');
            kdt.id = 'kdtjs';
            kdt.type = 'text/javascript';
            kdt.async = true;
            kdt.src = 'https://i.k-analytix.com/k.js';
            var s = document.getElementsByTagName('body')[0];
            s.parentNode.insertBefore(kdt, s);
        })();


        var visitorID;
        (function () {
            var period = 300;
            var limit = 20 * 1e3;
            var nTry = 0;
            var intervalID = setInterval(function () {
                var clear = limit / period <= ++nTry;
                if ((typeof (Konduto) !== "undefined") &&
                    (typeof (Konduto.getVisitorID) !== "undefined")) {
                    visitorID = window.Konduto.getVisitorID();
                    clear = true;
                }
                if (clear) {
                    clearInterval(intervalID);
                }
            }, period);
        })(visitorID);

    </script>
    <script
        type="text/javascript">window.NREUM || (NREUM = {}); NREUM.info = { "beacon": "bam.nr-data.net", "licenseKey": "NRJS-f2d15bd9e96e98a917d", "applicationID": "1126828151", "transactionName": "MwADMEtVC0FSVBBZXApKIAdNXQpcHEQNRFZLKAANVxsMXFdSHA==", "queueTime": 0, "applicationTime": 49, "atts": "H0cARgNPGE8=", "errorBeacon": "bam.nr-data.net", "agent": "" }</script>

</body>

</html>