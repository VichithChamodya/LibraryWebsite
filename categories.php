<style>
    html {
      font-family: sans-serif;
      box-sizing: border-box;
    }

    *, *:before, *:after {
      box-sizing: inherit;
    }

    .text-center {
      text-align: center;
    }

    .color-white {
      color: white;
      text-shadow: 2px 2px 6px black;
    }

    .box-container {
      align-items: center;
      display: flex;
      flex-direction: column;
      justify-content: space-around;
      padding: 20px 30px;
      width: 100%;
    }

    @media screen and (min-width:1200px) {
      .box-container {
        flex-direction: row
      }
    }

    .box-item {
      position: relative;
      width: 220px;
      max-width: 100%;
    }

    .flip-box {
      -ms-transform-style: preserve-3d;
      transform-style: preserve-3d;
      perspective: 1000px;
    }

    .flip-box-front, .flip-box-back {
      background-size: cover;
      background-position: center;
      border-radius: 10px;
      min-height: 350px;
      -ms-transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
      transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
      backface-visibility: hidden;
    }

    .flip-box-front {
      -ms-transform: rotateY(0deg);
      transform: rotateY(0deg);
      -ms-transform-style: preserve-3d;
      transform-style: preserve-3d;
    }

    .flip-box:hover .flip-box-front {
      -ms-transform: rotateY(-180deg);
      transform: rotateY(-180deg);
      -ms-transform-style: preserve-3d;
      transform-style: preserve-3d;
    }

    .flip-box-back {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      
      -ms-transform: rotateY(180deg);
      transform: rotateY(180deg);
      -ms-transform-style: preserve-3d;
      transform-style: preserve-3d;
    }

    .flip-box:hover .flip-box-back {
      -ms-transform: rotateY(0deg);
      transform: rotateY(0deg);
      -ms-transform-style: preserve-3d;
      transform-style: preserve-3d;
    }

    .flip-box .inner {
      position: absolute;
      left: 0;
      width: 100%;
      padding: 30px;
      outline: 1px solid transparent;
      perspective: inherit;
      z-index: 2;
      
      transform: translateY(-50%) translateZ(60px) scale(.94);
      -ms-transform: translateY(-50%) translateZ(60px) scale(.94);
      top: 50%;
    }

    .flip-box-header {
      font-size: 30px;
    }

    .flip-box p {
      font-size: 15px;
      line-height: 1.5em;
    }

    .flip-box-button {
      background-color: transparent;
      border: 2px solid white;
      border-radius: 10px;
      color: white;
      font-size: 15px;
      font-weight: bold;
      padding: 10px 25px;
    }

    .flip-box-button:hover {
      color: orange;
      border-color: orange;
      box-shadow: 0px 0px 12px orange;
    }

    </style>
  </head>
  <body>


    <!----------------------------------------------------row 1------------------------------------------------------------>
    <div class="box-container">
      <div class="box-item">
        <div class="flip-box">
          <div class="flip-box-front text-center" style="background-image: url('Image/categories/fantasy.1.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Fantasy</h3>
              <p>Embark on journeys through magical realms, encountering mythical creatures and enchanting landscapes in epic quests</p>
              <img src="icons/arrow.png" alt="" class="flip-box-img">
            </div>
          </div>
          <div class="flip-box-back text-center" style="background-image: url('Image/categories/fantasy.2.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Fantasy</h3>
              <p>A short sentence describing this callout is.</p>
              <a href="member.page.2.php?category=Fantasy">
                <button class="flip-box-button">EXPLORE</button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="box-item">
        <div class="flip-box">
          <div class="flip-box-front text-center" style="background-image: url('Image/categories/mystery.thriller.1.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Mystery / Thriller</h3>
              <p>Unravel gripping mysteries, navigate suspenseful plots, and experience unexpected twists that keep readers enthralled</p>
              <img src="icons/arrow.png" alt="" class="flip-box-img">
            </div>
          </div>
          <div class="flip-box-back text-center" style="background-image: url('Image/categories/mystery.thriller.2.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Mystery / Thriller</h3>
              <p>A short sentence describing this callout is.</p>
              <a href="member.page.2.php?category=Mystery / Thriller">
                <button class="flip-box-button">EXPLORE</button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="box-item">
        <div class="flip-box">
          <div class="flip-box-front text-center filter-" style="background-image: url('Image/categories/action.&.adventure.1.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Action & Adventure</h3>
              <p>Immerse yourself in high-energy narratives, following thrilling plots, daring journeys, and heroic characters facing intense challenges</p>
              <img src="icons/arrow.png" alt="" class="flip-box-img">
            </div>
          </div>
          <div class="flip-box-back text-center" style="background-image: url('Image/categories/action.&.adventure.2.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Action & Adventure</h3>
              <p>A short sentence describing this callout is.</p>
              <a href="member.page.2.php?category=Action and Adventure">
                <button class="flip-box-button">EXPLORE</button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="box-item">
        <div class="flip-box">
          <div class="flip-box-front text-center" style="background-image: url('Image/categories/classics.1.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Classics</h3>
              <p>Explore timeless literary treasures that have withstood the test of time, showcasing enduring themes and exceptional storytelling brilliance</p>
              <img src="icons/arrow.png" alt="" class="flip-box-img">
            </div>
          </div>
          <div class="flip-box-back text-center" style="background-image: url('Image/categories/classics.2.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Classics</h3>
              <p>A short sentence describing this callout is.</p>
              <a href="member.page.2.php?category=Classics">
                <button class="flip-box-button">EXPLORE</button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="box-item">
        <div class="flip-box">
          <div class="flip-box-front text-center" style="background-image: url('Image/categories/humor.1.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Humor</h3>
              <p>Engage in comedic narratives featuring witty dialogue and humorous situations that promise joy and laughter</p>
              <img src="icons/arrow.png" alt="" class="flip-box-img">
            </div>
          </div>
          <div class="flip-box-back text-center" style="background-image: url('Image/categories/humor.2.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Humor</h3>
              <p>A short sentence describing this callout is.</p>
              <a href="member.page.2.php?category=Humor">
                <button class="flip-box-button">EXPLORE</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!----------------------------------------------------row 2------------------------------------------------------------>
    <div class="box-container">
      <div class="box-item">
        <div class="flip-box">
          <div class="flip-box-front text-center" style="background-image: url('Image/categories/romance.1.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Romance</h3>
              <p>Dive into passionate love stories that explore emotional connections and navigate the complexities of relationships</p>
              <img src="icons/arrow.png" alt="" class="flip-box-img">
            </div>
          </div>
          <div class="flip-box-back text-center" style="background-image: url('Image/categories/romance.2.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Romance</h3>
              <p>A short sentence describing this callout is.</p>
              <a href="member.page.2.php?category=Romance">
                <button class="flip-box-button">EXPLORE</button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="box-item">
        <div class="flip-box">
          <div class="flip-box-front text-center filter-" style="background-image: url('Image/categories/self.help.1.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Self-Help</h3>
              <p>Be empowered and inspired with practical advice and guidance for personal development and overall well-being</p>
              <img src="icons/arrow.png" alt="" class="flip-box-img">
            </div>
          </div>
          <div class="flip-box-back text-center" style="background-image: url('Image/categories/self.help.2.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Self-Help</h3>
              <p>A short sentence describing this callout is.</p>
              <a href="member.page.2.php?category=Self-Help">
                <button class="flip-box-button">EXPLORE</button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="box-item">
        <div class="flip-box">
          <div class="flip-box-front text-center" style="background-image: url('Image/categories/realistic.fiction.1.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Realistic Fiction</h3>
              <p>Encounter lifelike narratives that seamlessly mirror everyday experiences, blurring the lines between fiction and reality</p>
              <img src="icons/arrow.png" alt="" class="flip-box-img">
            </div>
          </div>
          <div class="flip-box-back text-center" style="background-image: url('Image/categories/realistic.fiction.2.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Realistic Fiction</h3>
              <p>A short sentence describing this callout is.</p>
              <a href="member.page.2.php?category=Realistic Fiction">
                <button class="flip-box-button">EXPLORE</button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="box-item">
        <div class="flip-box">
          <div class="flip-box-front text-center" style="background-image: url('Image/categories/science.fiction.1.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Science Fiction</h3>
              <p>Propel into the future with imaginative concepts, advanced technology, and speculative scenarios that challenge the boundaries of the unknown</p>
              <img src="icons/arrow.png" alt="" class="flip-box-img">
            </div>
          </div>
          <div class="flip-box-back text-center" style="background-image: url('Image/categories/science.fiction.2.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Science Fiction</h3>
              <p>A short sentence describing this callout is.</p>
              <a href="member.page.2.php?category=Science Fiction">
                <button class="flip-box-button">EXPLORE</button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="box-item">
        <div class="flip-box">
          <div class="flip-box-front text-center" style="background-image: url('Image/categories/historical.fiction.1.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Historical Fiction</h3>
              <p>Experience rich storytelling that seamlessly weaves fictional narratives into real historical events and settings, offering a captivating blend of fact and fiction</p>
              <img src="icons/arrow.png" alt="" class="flip-box-img">
            </div>
          </div>
          <div class="flip-box-back text-center" style="background-image: url('Image/categories/historical.fiction.2.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Historical Fiction</h3>
              <p>A short sentence describing this callout is.</p>
              <a href="member.page.2.php?category=Historical Fiction">
                <button class="flip-box-button">EXPLORE</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!----------------------------------------------------row 3------------------------------------------------------------>
    <div class="box-container">
      <div class="box-item">
        <div class="flip-box">
          <div class="flip-box-front text-center filter-" style="background-image: url('Image/categories/biography.memoir.1.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Biography / Memoir</h3>
              <p>Gain intimate insights into real lives through poignant and inspiring glimpses, connecting deeply with the human experience</p>
              <img src="icons/arrow.png" alt="" class="flip-box-img">
            </div>
          </div>
          <div class="flip-box-back text-center" style="background-image: url('Image/categories/biography.memoir.2.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Biography / Memoir</h3>
              <p>A short sentence describing this callout is.</p>
              <a href="member.page.2.php?category=Biography / Memoir">
                <button class="flip-box-button">EXPLORE</button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="box-item">
        <div class="flip-box">
          <div class="flip-box-front text-center" style="background-image: url('Image/categories/graphic.novel.1.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Graphic Novel</h3>
              <p>Enjoy diverse tales told through a captivating combination of visual art and narrative, providing a unique and immersive storytelling experience</p>
              <img src="icons/arrow.png" alt="" class="flip-box-img">
            </div>
          </div>
          <div class="flip-box-back text-center" style="background-image: url('Image/categories/graphic.novel.2.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Graphic Novel</h3>
              <p>A short sentence describing this callout is.</p>
              <a href="member.page.2.php?category=Graphic Novel">
                <button class="flip-box-button">EXPLORE</button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="box-item">
        <div class="flip-box">
          <div class="flip-box-front text-center" style="background-image: url('Image/categories/sports.1.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Sports</h3>
              <p>Dive into narratives centered around athletic pursuits, providing a thrilling exploration of the challenges and triumphs of sports</p>
              <img src="icons/arrow.png" alt="" class="flip-box-img">
            </div>
          </div>
          <div class="flip-box-back text-center" style="background-image: url('Image/categories/sports.2.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Sports</h3>
              <p>A short sentence describing this callout is.</p>
              <a href="member.page.2.php?category=Sports">
                <button class="flip-box-button">EXPLORE</button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="box-item">
        <div class="flip-box">
          <div class="flip-box-front text-center" style="background-image: url('Image/categories/childrens.literature.1.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Children's Literature</h3>
              <p>Nurture young imaginations with engaging stories crafted specifically for children, fostering a lifelong love for reading</p>
              <img src="icons/arrow.png" alt="" class="flip-box-img">
            </div>
          </div>
          <div class="flip-box-back text-center" style="background-image: url('Image/categories/childrens.literature.2.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Children's Literature</h3>
              <p>A short sentence describing this callout is.</p>
              <a href="member.page.2.php?category=Children's Literature">
                <button class="flip-box-button">EXPLORE</button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="box-item">
        <div class="flip-box">
          <div class="flip-box-front text-center filter-" style="background-image: url('Image/categories/western.1.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Western</h3>
              <p>Explore tales set in the American frontier, capturing the spirit of exploration and the untamed wilderness in a unique historical context</p>
              <img src="icons/arrow.png" alt="" class="flip-box-img">
            </div>
          </div>
          <div class="flip-box-back text-center" style="background-image: url('Image/categories/western.2.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Western</h3>
              <p>A short sentence describing this callout is.</p>
              <a href="member.page.2.php?category=Western">
                <button class="flip-box-button">EXPLORE</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
        
    <!----------------------------------------------------row 4------------------------------------------------------------>
    <div class="box-container">

      <div class="box-item">
        <div class="flip-box">
          <div class="flip-box-front text-center" style="background-image: url('Image/categories/young.adult.1.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Young Adult</h3>
              <p>Navigate the challenges and discoveries of adolescence through dynamic coming-of-age themes in this compelling and relatable genre</p>
              <img src="icons/arrow.png" alt="" class="flip-box-img">
            </div>
          </div>
          <div class="flip-box-back text-center" style="background-image: url('Image/categories/young.adult.2.avif');">
            <div class="inner color-white">
              <h3 class="flip-box-header">Young Adult</h3>
              <p>A short sentence describing this callout is.</p>
              <a href="member.page.2.php?category=Young Adult">
                <button class="flip-box-button">EXPLORE</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
