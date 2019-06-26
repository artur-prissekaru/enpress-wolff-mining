import Lottie from 'lottie-web';
import animationsData from '../anims';

class CardValue {
  constructor(selector) {
    this.selector = selector;
    this.animations = [];
    this.action_link = document.querySelector('a[href^="#"]');
  }

  // handleHoverIn(event) {
  //   const element = event.target;
  //   if (this.animations && this.animations.length > 0) {
  //     for(let i=0, ni=this.animations.length; i<ni; i++) {
  //       const animation = this.animations[i];
  //       if (animation.element === element) {
  //         animation.lottie.goToAndPlay(0);
  //         break;
  //       }
  //     }
  //   }
  // }

  init() {
    this.animations = [];
    $(this.selector).each((index, element) => {
      const $animElement = $(element).find('.anim-icon');
      if ($animElement.length == 0) return;

      const data = $animElement.data();
      const params = {
        container: $animElement[0],
        renderer: 'svg',
        loop: false,
        autoplay: true,
        animationData: animationsData[data.animation]
      };

      const lottieObj = Lottie.loadAnimation(params);
      this.animations.push({
        lottie: lottieObj,
        animElement: $animElement[0],
        element
      });
      // $(element).hover(this.handleHoverIn.bind(this), this.handleHoverOut.bind(this));
    });
  }
}

export default CardValue;
