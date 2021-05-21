(window.webpackJsonp_gutenbergblocks = window.webpackJsonp_gutenbergblocks || []).push([
		[1], {
			4: function (e, t, n) {}
		}
	]),
	function (e) {
		function t(t) {
			for (var r, u, l = t[0], i = t[1], p = t[2], b = 0, f = []; b < l.length; b++) u = l[b], Object.prototype.hasOwnProperty.call(o, u) && o[u] && f.push(o[u][0]), o[u] = 0;
			for (r in i) Object.prototype.hasOwnProperty.call(i, r) && (e[r] = i[r]);
			for (s && s(t); f.length;) f.shift()();
			return c.push.apply(c, p || []), n()
		}

		function n() {
			for (var e, t = 0; t < c.length; t++) {
				for (var n = c[t], r = !0, l = 1; l < n.length; l++) {
					var i = n[l];
					0 !== o[i] && (r = !1)
				}
				r && (c.splice(t--, 1), e = u(u.s = n[0]))
			}
			return e
		}
		var r = {},
			o = {
				0: 0
			},
			c = [];

		function u(t) {
			if (r[t]) return r[t].exports;
			var n = r[t] = {
				i: t,
				l: !1,
				exports: {}
			};
			return e[t].call(n.exports, n, n.exports, u), n.l = !0, n.exports
		}
		u.m = e, u.c = r, u.d = function (e, t, n) {
			u.o(e, t) || Object.defineProperty(e, t, {
				enumerable: !0,
				get: n
			})
		}, u.r = function (e) {
			"undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
				value: "Module"
			}), Object.defineProperty(e, "__esModule", {
				value: !0
			})
		}, u.t = function (e, t) {
			if (1 & t && (e = u(e)), 8 & t) return e;
			if (4 & t && "object" == typeof e && e && e.__esModule) return e;
			var n = Object.create(null);
			if (u.r(n), Object.defineProperty(n, "default", {
					enumerable: !0,
					value: e
				}), 2 & t && "string" != typeof e)
				for (var r in e) u.d(n, r, function (t) {
					return e[t]
				}.bind(null, r));
			return n
		}, u.n = function (e) {
			var t = e && e.__esModule ? function () {
				return e.default
			} : function () {
				return e
			};
			return u.d(t, "a", t), t
		}, u.o = function (e, t) {
			return Object.prototype.hasOwnProperty.call(e, t)
		}, u.p = "";
		var l = window.webpackJsonp_gutenbergblocks = window.webpackJsonp_gutenbergblocks || [],
			i = l.push.bind(l);
		l.push = t, l = l.slice();
		for (var p = 0; p < l.length; p++) t(l[p]);
		var s = i;
		c.push([5, 1]), n()
	}([function (e, t) {
		e.exports = window.wp.element
	}, function (e, t) {
		e.exports = window.wp.i18n
	}, function (e, t) {
		e.exports = window.wp.blockEditor
	}, function (e, t) {
		e.exports = window.wp.blocks
	}, , function (e, t, n) {
		"use strict";
		n.r(t);
		var r = n(3),
			o = (n(4), n(0)),
			c = n(1),
			u = n(2);
		Object(r.registerBlockType)("create-block/gutenbergblocks", {
			edit: function () {
				return Object(o.createElement)("p", Object(u.useBlockProps)(), Object(c.__)("Gutenberg Blocks – hello from the editor!", "gutenbergblocks"))
			},
			save: function () {
				return Object(o.createElement)("p", u.useBlockProps.save(), Object(c.__)("Gutenberg Blocks – hello from the saved content!", "gutenbergblocks"))
			}
		})
	}]);
