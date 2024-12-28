  <style>
    .container p {
      width: 100%;
      font-weight: bold;
      overflow: hidden;
      margin-bottom: 50px;
    }
    .container p span.text {
      font-weight: normal;
      font-size: 25px;
      color: #dd7732;
    }
    .container p span.cursor {
      display: inline-block;
      background-color: #ccc;
      margin-left: 0.1rem;
      width: 3px;
      animation: blink 1s infinite;
    }
    .container p span.cursor.typing {
      animation: none;
    }
    @keyframes blink {
      0% {
        background-color: #ccc;
      }
      49% {
        background-color: #ccc;
      }
      50% {
        background-color: transparent;
      }
      99% {
        background-color: transparent;
      }
      100% {
        background-color: #ccc;
      }
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
  <div class="container">
    <p><text style="font-size: 32px; color: white">Is a </text>
      <span class="text"></span>
      <span class="cursor">&nbsp;</span>
    </p>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const by = (selector) => document.querySelector(selector);
      const $text = by(".text");
      const $cursor = by(".cursor");
      const words = ["deep reservoir of knowledge",
                    "haven of enlightenment for learning",
                    "magical portal to a world of literature"];
      const delay = {
        typing: 100,
        keeping: 800,
        erasing: 50,
        word: 1000,
      };
      const sleep = (ms) => {
        return new Promise ((resolve) => {
          setTimeout(() => resolve(), ms);
        });
      };
      const type = async (word) => {
        $cursor.classList.add("typing");
        for (const char of word) {
          $text.textContent += char;
          await sleep(delay.typing);
        }
      
        $cursor.classList.remove("typing");
        await sleep(delay.keeping);

        for (let i = 1; i <= word.length; i++) {
          $text.textContent = word.substring(0, word.length - i);
          await sleep(delay.erasing);
        }
      };
      const loop = async (wordIndex = 0) => {
        await type(words[wordIndex % words.length]);

        setTimeout(async () => {
          await loop(wordIndex + 1);
        }, delay.word);
      };
      loop();
    });
  </script>