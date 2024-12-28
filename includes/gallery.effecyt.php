<style>
      
  @import url("http://fonts.googleapis.com/css2?family=Figtree&display=swap");

  .gallery {
    position: relative;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
    gap: 1em;
    width: 100%;
    height: 400px;
    padding-top: 50px;
    padding-left: 50px;
    padding-right: 50px;
    font-family: "Figtree", sans-serif;
    transition: all 400ms;
  }

  .box {
    position: relative;
    background: var(--img) center center;
    background-size: cover;
    transition: all 400ms;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .box::after {
    content: attr(data-text);
    position: absolute;
    bottom: 20px;
    background: #000;
    color: #fff;
    padding: 10px 10px 10px 14px;
    letter-spacing: 4px;
    text-transform: uppercase;
    transform: translateY(60px);
    opacity: 0;
    transition: all 400ms;
  }

  .gallery:hover .box {
    filter: grayscale(100%) opacity(24%);
  }

  .box:hover::after {
    transform: translateY(0);
    opacity: 1;
    transition-delay: 400ms;
  }

  .gallery .box:hover {
    filter: grayscale(0%) opacity(100%);
  }

  .gallery:has(.box-1:hover) {
    grid-template-columns: 3fr 1fr 1fr 1fr 1fr 1fr 1fr;
  }

  .gallery:has(.box-2:hover) {
    grid-template-columns: 1fr 3fr 1fr 1fr 1fr 1fr 1fr;
  }

  .gallery:has(.box-3:hover) {
    grid-template-columns: 1fr 1fr 3fr 1fr 1fr 1fr 1fr;
  }

  .gallery:has(.box-4:hover) {
    grid-template-columns: 1fr 1fr 1fr 3fr 1fr 1fr 1fr;
  }

  .gallery:has(.box-5:hover) {
    grid-template-columns: 1fr 1fr 1fr 1fr 3fr 1fr 1fr;
  }

  .gallery:has(.box-6:hover) {
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr 3fr 1fr;
  }

  .gallery:has(.box-7:hover) {
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 3fr;
  }

  .box:nth-child(odd) {
    transform: translateY(-16px);
  }

  .box:nth-child(even) {
    transform: translateY(16px);
  }

</style>
</head>
<body>
  <div class="gallery">
    <div class="box box-1" style="--img: url(./Image/news1.avif);" data-text="The library is hosting a Magical Book Fair Extravaganza! Step into a world of enchantment as the shelves transform into portals to mystical realms. From spellbinding adventures to fantastical creatures, find your next favorite magical read."></div>
    <div class="box box-2" style="--img: url(./Image/news2.avif);" data-text="Blast off into new literary dimensions with our Interstellar Reading Challenge. Explore books set in outer space, on distant planets, or featuring extraterrestrial beings."></div>
    <div class="box box-3" style="--img: url(./Image/news3.avif);" data-text="Calling all amateur sleuths! Renowned detective, Inspector Alistair Noir, will be hosting a Mystery Masterclass at the library. Learn the art of deduction, decode cryptic clues, and sharpen your detective skills."></div>
    <div class="box box-4" style="--img: url(./Image/news4.avif);" data-text="Immerse yourself in the past at our Historical Fiction Symposium. Engage with renowned authors, participate in lively discussions, and travel through time with the captivating narratives of historical fiction."></div>
    <div class="box box-5" style="--img: url(./Image/news5.avif);" data-text="Prepare for an adrenaline-pumping adventure! The library is hosting an Action & Adventure-themed Escape Room. Solve puzzles, crack codes, and navigate through a series of challenges inspired by your favorite action-packed novels."></div>
    <div class="box box-6" style="--img: url(./Image/news6.avif);" data-text="Love is in the air at the library! Join us for a Romantic Poetry Night under the Stars. Bring your favorite love poems, or discover new ones, and share the magic of words in the moonlit library courtyard."></div>
    <div class="box box-7" style="--img: url(./Image/news7.avif);" data-text="Exciting news for our young readers! The library is launching a Young Adult Book Club. Dive into compelling stories, discuss themes that resonate with you, and make new bookish friends."></div>
  </div>
<body>