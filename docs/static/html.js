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

// Metrika code in js
(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

ym(52092633, "init", {
     id:52092633,
     clickmap:true,
     trackLinks:true,
     accurateTrackBounce:true
});