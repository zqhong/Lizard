window.Lizard = {
    'Config': {
        'locale': 'zh-cn',
    },
};

$(".select2-tags").select2({
    tags: true,
});

var timeAgoItems = $('.timeago');
for(var i=0; timeAgoItems.length; i++) {
    var time_str = timeAgoItems[i].innerHTML;
    timeAgoItems[i].innerHTML = moment(time_str).locale(Lizard.Config.locale).fromNow();
}
//# sourceMappingURL=app.js.map
