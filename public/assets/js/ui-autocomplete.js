
            $.widget("ui.autocomplete", $.ui.autocomplete, {

                _renderMenu: function(ul, items) {
                    var that = this;
                    ul.attr("class", "nav nav-pills nav-stacked  bs-autocomplete-menu");
                    $.each(items, function(index, item) {
                        that._renderItemData(ul, item);
                    });
                },

                _resizeMenu: function() {
                    var ul = this.menu.element;
                    ul.outerWidth(Math.min(
                        // Firefox wraps long text (possibly a rounding bug)
                        // so we add 1px to avoid the wrapping (#7513)
                        ul.width("").outerWidth() + 1,
                        this.element.outerWidth()
                    ));
                }

            });
