panel.plugin('afbora/kirby-widgets', {
    sections: {
        widget: {
            data: function () {
                return {
                    icon: null,
                    default: null,
                    text: null,
                    before: null,
                    after: null,
                    info: null,
                }
            },
            created: function () {
                this.load().then(response => {
                    this.icon = response.icon;
                    this.default = response.default;
                    this.text = response.text;
                    this.before = response.before;
                    this.after = response.after;
                    this.info = response.info;
                });
            },
            computed: {},
            template: `
                <section class="k-widget">
                    <k-list-item
                      :icon=icon
                      :text=text
                      :info=info
                    />
                </section>
      `
        }
    }
});