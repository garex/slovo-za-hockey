window.addEventListener("orientationchange", function() {
    document.location.reload();
});
window.addEventListener("resize", function() {
    document.location.reload();
});

if (document.body.clientWidth > document.body.clientHeight) {
    var diagram = document.getElementById('diagram');
    diagram.setAttribute('data', diagram.getAttribute('data').replace('vertical', 'horizontal'));
    document.body.className = 'horizontal';
}
