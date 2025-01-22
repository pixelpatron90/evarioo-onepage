function carousel() {
  return {
    slides: [1, 2, 3],
    currentIndex: 0,
    interval: null,
    startAutoplay() {
      this.interval = setInterval(() => {
        this.next();
      }, 5000);
    },
    stopAutoplay() {
      clearInterval(this.interval);
    },
    next() {
      this.currentIndex = (this.currentIndex + 1) % this.slides.length;
    },
    goTo(index) {
      this.currentIndex = index;
    },
  };
}
