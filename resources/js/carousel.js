
next.addEventListener("click", e => {
    const currentElement = e.currentTarget;
    const thisCarousel = currentElement.closest('.carousel-container').querySelector('.carousel');
    const thisPrev = currentElement.closest('.carousel-container').querySelector('.prev');
    const width = thisCarousel.offsetWidth;
    if(thisCarousel){
        console.log(thisCarousel,width + gap);
        thisCarousel.scrollBy(width + gap, 0);
        if (thisCarousel.scrollWidth !== 0) {
            thisPrev.style.display = "flex";
        }
        if (content.scrollWidth - width - gap <= thisCarousel.scrollLeft + width) {
            currentElement.style.display = "none";
        }
    }
});
prev.addEventListener("click", e => {
    const currentElement = e.currentTarget;
    const thisCarousel = currentElement.closest('.carousel-container').querySelector('.carousel');
    const thisNext = currentElement.closest('.carousel-container').querySelector('.next');
    const width = thisCarousel.offsetWidth;
    thisCarousel.scrollBy(-(width + gap), 0);
    if (thisCarousel.scrollLeft - width - gap <= 0) {
        currentElement.style.display = "none";
    }
    if (!content.scrollWidth - width - gap <= thisCarousel.scrollLeft + width) {
        thisNext.style.display = "flex";
    }
});

// window.addEventListener("resize", e => (width = carousel.offsetWidth));

