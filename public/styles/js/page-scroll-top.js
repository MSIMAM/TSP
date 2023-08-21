const   _scCustomSTbtn = document.createElement('div')
        _scCustomSTbtn.setAttribute('id', 'sc-custom-floating-scroll-top-btn')
        _scCustomSTbtn.innerHTML = `<span></span>`
if(document.getElementsByTagName('html')[0].scrollTop == 0)
    _scCustomSTbtn.style.opacity = 0;
document.body.prepend(_scCustomSTbtn)

window.onscroll = function(){
    if(document.getElementsByTagName('html')[0].scrollTop <= 0)
    _scCustomSTbtn.style.opacity = 0;
    else
    _scCustomSTbtn.style.opacity = 1;

}


_scCustomSTbtn.addEventListener("click", function(){
    document.getElementsByTagName('html')[0].scrollTop = 0
})

/** Using jQuery */
// $('#sc-custom-floating-scroll-top-btn').click(function(){
//     $('html').scrollTop(0)
//     // or
//     // $('html').animate({scrollTop:0})
// })
