(function () {
    var accordions = [
        ["ignft-group-about", "ignft-group-about-summary"],
        ["ignft-group-organisations", "ignft-group-organisations-summary"],
        ["ignft-group-study-india", "ignft-group-study-india-summary"],
        ["ignft-group-online-education", "ignft-group-online-education-summary"],
        ["ignft-group-study-abroad", "ignft-group-study-abroad-summary"],
        ["ignft-group-career-guidance", "ignft-group-career-guidance-summary"],
    ];
    var mq = window.matchMedia('(max-width:720px)');
    var pairs = accordions.map(function (p) {
        return {
            group: document.querySelector('.' + p[0]),
            summary: document.querySelector('.' + p[1])
        };
    });

    function sync() {
        pairs.forEach(function (p) {
            p.group.open = !mq.matches;
        });
    }
    pairs.forEach(function (p) {
        p.summary.addEventListener('click', function (e) {
            if (!mq.matches) e.preventDefault();
        });
    });
    sync();
    if (mq.addEventListener) mq.addEventListener('change', sync);
    else mq.addListener(sync);
})();
