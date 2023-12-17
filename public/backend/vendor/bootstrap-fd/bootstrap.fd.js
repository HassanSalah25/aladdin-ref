!function (e) {
    "use strict";
    e.FileDialog = function (a) {
        var o = e.extend(e.FileDialog.defaults, a),
            t = e(["<div class='modal fade'>", "    <div class='modal-dialog'>", "        <div class='modal-content'>", "            <div class='modal-header'>", "                <h5 class='modal-title'>", o.title, "                </h5>", "                <button type='button' class='btn-close' data-dismiss='modal' aria-label='Close'>", "                </button>", "            </div>", "            <div class='modal-body'>", "                <input type='file' />", "                <div class='bfd-dropfield'>", "                    <div class='bfd-dropfield-inner'>", o.drag_message, "                    </div>", "                </div>", "                <div class='container-fluid bfd-files'>", "                </div>", "            </div>", "            <div class='modal-footer'>", "                <button type='button' class='btn btn-primary bfd-ok'>", o.ok_button, "                </button>", "                <button type='button' class='btn btn-secondary bfd-cancel'", "                                data-dismiss='modal'>", o.cancel_button, "                </button>", "            </div>", "        </div>", "    </div>", "</div>"].join("")),
            n = !1, r = e("input:file", t), i = e(".bfd-dropfield", t), s = e(".bfd-dropfield-inner", i);
        s.css({height: o.dropheight, "padding-top": o.dropheight / 2 - 32}), r.attr({
            accept: o.accept,
            multiple: o.multiple
        }), i.on("click.bfd", function () {
            r.trigger("click")
        });
        var d = [], l = [], c = function (a) {
            var n, r, i = new FileReader;
            l.push(i), i.onloadstart = function () {
            }, i.onerror = function (e) {
                e.target.error.code !== e.target.error.ABORT_ERR && n.parent().html(["<div class='bg-danger bfd-error-message'>", o.error_message, "</div>"].join("\n"))
            }, i.onprogress = function (a) {
                var o = Math.round(100 * a.loaded / a.total) + "%";
                n.attr("aria-valuenow", a.loaded), n.css("width", o), e(".sr-only", n).text(o)
            }, i.onload = function (e) {
                a.content = e.target.result, d.push(a), n.removeClass("active")
            };
            var s = e(["<div class='col-xs-7 col-sm-4 bfd-info'>", "    <span class='icon-remove bfd-remove'></span>&nbsp;", "    <span class='icon-file'></span>&nbsp;" + a.name, "</div>", "<div class='col-xs-5 col-sm-8 bfd-progress'>", "    <div class='progress'>", "        <div class='progress-bar progress-bar-striped active' role='progressbar'", "            aria-valuenow='0' aria-valuemin='0' aria-valuemax='" + a.size + "'>", "            <span class='sr-only'>0%</span>", "        </div>", "    </div>", "</div>"].join(""));
            n = e(".progress-bar", s), e(".icon-remove", s).tooltip({
                container: "body",
                html: !0,
                placement: "top",
                title: o.remove_message
            }).on("click.bfd", function () {
                var e = d.indexOf(a);
                e >= 0 && d.pop(e), r.fadeOut();
                try {
                    i.abort()
                } catch (o) {
                }
            }), r = e("<div class='row'></div>"), r.append(s), e(".bfd-files", t).append(r), i["readAs" + o.readAs](a)
        }, f = function (e) {
            Array.prototype.forEach.apply(e, [c])
        };
        return r.change(function (e) {
            e = e.originalEvent;
            var a = e.target.files;
            f(a);
            var o = r.clone(!0);
            r.replaceWith(o), r = o
        }), i.on("dragenter.bfd", function () {
            s.addClass("bfd-dragover")
        }).on("dragover.bfd", function (e) {
            e = e.originalEvent, e.stopPropagation(), e.preventDefault(), e.dataTransfer.dropEffect = "copy"
        }).on("dragleave.bfd drop.bfd", function () {
            s.removeClass("bfd-dragover")
        }).on("drop.bfd", function (e) {
            e = e.originalEvent, e.stopPropagation(), e.preventDefault();
            var a = e.dataTransfer.files;
            0 === a.length, f(a)
        }), e(".bfd-ok", t).on("click.bfd", function () {
            var a = e.Event("files.bs.filedialog");
            a.files = d, t.trigger(a), n = !0, t.modal("hide")
        }), t.on("hidden.modal", function () {
            if (l.forEach(function (e) {
                try {
                    e.abort()
                } catch (a) {
                }
            }), !n) {
                var a = e.Event("cancel.bs.filedialog");
                t.trigger(a)
            }
            t.remove()
        }), e(document.body).append(t), new bootstrap.Modal(t[0]).show(), t
    }, e.FileDialog.defaults = {
        accept: "*",
        cancel_button: "Close",
        drag_message: "Drop files here",
        dropheight: 400,
        error_message: "An error occurred while loading the file",
        multiple: !0,
        ok_button: "OK",
        readAs: "DataURL",
        remove_message: "Remove file",
        title: "Load file(s)"
    }
}(jQuery);
